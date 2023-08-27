<?php

//démarer le système de session pour pouvoir afficher les messages d'erreur du formulaire
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
//charger les fichiers des fonctionalités extraites dans des classes.
require_once(__DIR__ . '/controllers/ContactForm.php');


// Disable Wordpress' default Gutenberg Editor:
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable "thumbnail" for our posts
add_theme_support('post-thumbnails');
add_image_size('product_size', 200, 200, true);
add_image_size('sponsor_size', 9999, 150, false);

//create function to remove menu items
function menu_items_remove ()
{
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'menu_items_remove');

// Create custom post types
function clinicoeur_register_custom_post_types()
{
    register_post_type('service', [
        'label' => 'Services',
        'description' => 'Services des Clinicoeurs',
        'public' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => ['title','editor'],
    ]);
    register_post_type('product', [
        'label' => 'Produits',
        'description' => 'Produits de la boutique',
        'public' => true,
        'menu_position' => 21,
        'menu_icon' => 'dashicons-buddicons-activity',
        'supports' => ['title','editor', 'thumbnail'],
    ]);
    register_post_type('sponsor', [
        'label' => 'Sponsors',
        'description' => 'Sponsors de l\'ASBL',
        'public' => true,
        'menu_position' => 22,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => ['title', 'thumbnail'],
    ]);

    register_post_type('testimony', [
        'label' => 'Témoignages',
        'description' => 'Témoignages des bénévoles',
        'public' => true,
        'menu_position' => 23,
        'menu_icon' => 'dashicons-format-chat',
        'supports' => ['title','editor'],
    ]);

    register_post_type('message', [
        'label' => 'Messages de contact',
        'description' => 'Les messages envoyer via le formulaire de contact',
        'public' => true,
        'show_ui' => true,
        'menu_position' => 25,
        'menu_icon' => 'dashicons-email-alt',
        'supports' => ['title','editor'],
        'capabilities' => [
            'create_posts' => false,
            'read_post' => true,
            'read_private_posts' => true,
            'edit_posts' => true,
        ],
        'map_meta_cap' => true,
    ]);
}

add_action('init', 'clinicoeur_register_custom_post_types');

// Register existing navigation menus
register_nav_menu('main', 'Navigation principale du site web (en-tête)');
register_nav_menu('footer', 'Navigation de pied de page');


// Custom function that returns a menu structure for given location
function clinicoeur_get_menu(string $location, ?array $attributes = []): array
{
    // 1. Récupérer les liens en base de données pour la location $location
    $locations = get_nav_menu_locations();
    $menuId = $locations[$location];
    $items = wp_get_nav_menu_items($menuId);

    // 2. Formater les liens récupérés en objets qui contiennent les attributs suivants :
    // - href : l'URL complète pour ce lien
    // - label : le libellé affichable pour ce lien
    $links = [];

    foreach ($items as $item) {
        $link = new stdClass();
        $link->href = $item->url;
        $link->label = $item->title;

        foreach($attributes as $attribute) {
            $link->$attribute = get_field($attribute, $item->ID);
        }

        $links[] = $link;
    }

    // 3. Retourner l'ensemble des liens formatés en un seul tableau non-associatif
    return $links;
}

// Gérer formulaire de contact custom
function clinicoeur_validate_contact_form(array $data) :bool|array
{
    var_dump($data);
    $errors = [];

    if (! strlen($data['firstname'] ?? null)){
        $errors['firstname'] = 'Veuillez fournir votre prénom.';
    }

    if (! strlen($data['lastname'] ?? null)){
        $errors['lastname'] = 'Veuillez fournir votre nom de famille.';
    }

    if (! strlen($data['email'] ?? null)){
        $errors['email'] = 'Veuillez fournir votre adresse mail.';
    } else if (! filter_var($data['email'] ?? null, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Votre adresse mail n'est pas valide.";
    }

    return $errors ?: true;
}

function clinicoeur_store_contact_form_message($firstname, $lastname, $subject ,$email, $message)
{
    wp_insert_post([
        'post_type' => 'message',
        'post_status' => 'publish',
        'post_title' => $firstname . ' ' . $lastname . ' <' . $email . '>' . ' Sujet : ' . $subject,
        'post_content' => $message,
    ]);
}

function clinicoeur_send_contact_form_message($firstname, $lastname, $subject, $email, $message)
{
    wp_mail('baptistedombard@gmail.com', $firstname . ' ' . $lastname . ' <' . $email . '>' . ' Sujet : ' . $subject, $message);
}

function clinicoeur_execute_contact_form ()
{
    $config = [
        'nonce_field' => 'contact_nonce',
        'nonce_identifier' => 'clinicoeur_contact_form',
    ];

    (new \Clinicoeur\ContactForm($config, $_POST))
        ->sanitize([
            'firstname' => 'text_field',
            'lastname' => 'text_field',
            'subject' => 'text_field',
            'email' => 'email',
            'message' => 'textarea_field',
        ])
        ->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'subject' => ['required'],
            'email' => ['required','email'],
            'message' => ['required'],
        ])
        ->save(
            title: fn($data) => $data['firstname'] . ' ' . $data['lastname'] . ' <' . $data['email'] . '>' . ' Sujet : ' . $data['subject'],
            content: fn($data) => $data['message'],
        )
        /*->send(
            title: fn($data) => 'Nouveau message de ' . $data['firstname'] . ' ' . $data['latname'],
            content: fn($data) => 'Firstname: ' . $data['firstname'] . PHP_EOL . 'Lastname: ' . $data['lastname'] . PHP_EOL . 'Sujet: ' . $data['subject'] . PHP_EOL . 'Email: ' . $data['email'] . PHP_EOL . 'Message:' . PHP_EOL . $data['message'],
        )*/
        ->feedback();
}

add_action( 'admin_post_nopriv_clinicoeur_contact_form', 'clinicoeur_execute_contact_form');
add_action( 'admin_post_clinicoeur_contact_form', 'clinicoeur_execute_contact_form');

//travailler avec la session de PHP
function clinicoeur_session_flash(string $key, mixed $value)
{
    if (! isset($_SESSION['clinicoeur_flash'])){
        $_SESSION['clinicoeur_flash'] = [];
    }

    $_SESSION['clinicoeur_flash'][$key] = $value;
}

function clinicoeur_session_get(string $key)
{
    if (isset($_SESSION['clinicoeur_flash']) && array_key_exists($key, $_SESSION['clinicoeur_flash'])){
        //1. récupérer la donnée à flash
        $value = $_SESSION['clinicoeur_flash'][$key];
        //2. suprimer la donnée de la session
        unset($_SESSION['clinicoeur_flash'][$key]);
        //3. retourner la donnée récupérée
        return $value;
    }

    //la donnée n'existait pas dans la session flash
    return null;
}