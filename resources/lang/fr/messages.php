<?php

return [
    'home' => [
        'title' => 'Accueil',
        'welcome' => 'Bienvenue sur ReserGo',
        'subtitle' => 'Réservez vos services facilement en ligne !',
        'discover_services' => 'Découvrez Nos Services',
        'description' => 'Nous offrons une gamme variée de services adaptés à vos besoins. Que vous soyez à la recherche d\'un service de qualité pour un événement spécial ou d\'une simple prestation, nous avons ce qu\'il vous faut.',
        'popular_services' => 'Voici quelques-uns de nos services populaires :',
        'call_to_action' => 'N\'attendez plus pour profiter de nos offres exceptionnelles. Choisissez le service qui vous convient le mieux et réservez dès maintenant !',
        'services' => [
            'cleaning' => 'Service de nettoyage professionnel',
            'beauty' => 'Coiffure et soins de beauté',
            'event' => 'Organisation d\'événements et de fêtes',
            'coaching' => 'Consultation et coaching personnel',
            'repair' => 'Services de réparation et d\'entretien à domicile',
            'others' => 'Et bien d\'autres encore !'
        ]
    ],
    'navbar' => [
        'home' => 'Accueil',
        'dashboard' => 'Vos Réservations',
        'services' => 'Services',
        'reservations' => 'Réservations',
        'about' => 'À propos',
        'contact' => 'Contact'
    ],
    'footer' => [
        'copyright' => '&copy; :year ReserGo. Tous droits réservés.',
    ],
    'about' => [
        'title' => 'À propos',
        'heading' => 'À propos de notre application',
        'paragraph_1' => 'Notre application de réservation vise à simplifier le processus de réservation de services pour nos utilisateurs. Que ce soit pour un service de beauté, de loisirs ou de bien-être, nous sommes là pour vous aider à trouver le service parfait.',
        'paragraph_2' => 'Nous croyons en l\'importance de la simplicité et de l\'efficacité, c\'est pourquoi nous avons conçu cette application avec une interface utilisateur intuitive.',
    ],
    'contact' => [
        'title' => 'Contact',
        'heading' => 'Contactez-nous',
        'paragraph' => 'Si vous avez des questions, des commentaires ou des préoccupations, n\'hésitez pas à nous contacter. Remplissez le formulaire ci-dessous et nous vous répondrons dès que possible.',
        'form' => [
            'name' => 'Nom',
            'email' => 'Email',
            'message' => 'Message',
            'submit' => 'Envoyer',
            'name_placeholder' => 'Votre nom',
            'email_placeholder' => 'Votre adresse email',
            'message_placeholder' => 'Votre message',
        ],
    ],
    'reservationIndex' => [
        'title' => 'Réservations',
        'heading' => 'Vos Réservations',
        'create' => 'Créer une réservation',
        'service_name' => 'Service',
        'service_description' => 'Description',
        'date' => 'Date',
        'time' => 'Heure',
        'reserved_by' => 'Réservé par',
    ],
    'reservationCreate' => [
        'title' => 'Création réservation',
        'heading' => 'Faire une Réservation',
        'guest_modal' => 'Veuillez vous connecter pour effectuer une réservation.',
        'select_user' => 'Sélectionner l\'utilisateur',
        'select_service' => 'Sélectionner votre service',
        'reservation_date' => 'Date de réservation',
        'submit' => 'Réserver',
        'errors' => [
            'user' => 'Veuillez sélectionner un utilisateur valide.',
            'service_id' => 'Veuillez sélectionner un service valide.',
            'reservation_date' => 'Veuillez entrer une date de réservation valide.'
        ]
    ],
    'reservationEdit' => [
        'title' => 'Édition réservation',
        'heading' => 'Modifier la Réservation',
        'service_name' => 'Nom du Service',
        'new_reservation_date' => 'Nouvelle Date de Réservation :',
        'submit' => 'Mettre à jour',
        'back_to_reservations' => 'Retour à vos réservations',
        'errors' => [
            'reservation_date' => 'Veuillez entrer une date de réservation valide.'
        ]
    ],
    'dashboardIndex' => [
        'title' => 'Profil',
        'future_reservations' => 'Réservations futures',
        'no_future_reservations' => 'Aucune réservation future.',
        'past_reservations' => 'Réservations passées',
        'no_past_reservations' => 'Aucune réservation passée.',
        'settings' => 'Paramètres',
        'details' => 'Détails',
        'cancel' => 'Annuler',
        'confirm_cancel_title' => 'Confirmer l\'annulation',
        'confirm_cancel_message' => 'Êtes-vous sûr de vouloir annuler cette réservation ?',
    ],
    'dashboardShow' => [
        'title' => 'Détails de la réservation',
        'service' => 'Service:',
        'reservation_date' => 'Date de la réservation:',
        'client_name' => 'Nom du client:',
        'client_email' => 'Email du client:',
        'edit' => 'Modifier',
        'back_to_reservations' => 'Retour à vos réservations',
    ],
    'dashboardEdit' => [
        'title' => 'Paramètres du compte',
        'account_settings' => 'Paramètres du compte',
        'change_name' => 'Modifier votre nom d\'utilisateur',
        'name' => 'Nom',
        'update_name' => 'Mettre à jour le nom',
        'change_password' => 'Modifier le mot de passe',
        'new_password' => 'Nouveau mot de passe',
        'confirm_password' => 'Confirmer le mot de passe',
        'update_password' => 'Mettre à jour le mot de passe',
        'delete_account' => 'Supprimer le compte',
        'confirm_deletion_title' => 'Confirmer la suppression',
        'confirm_deletion_message' => 'Êtes-vous sûr de vouloir supprimer votre compte ?',
    ],
    'serviceIndex' => [
        'title' => 'Services',
        'add_service' => 'Ajouter un Service',
        'confirm_cancel' => 'Confirmer l\'annulation',
        'confirm_message' => 'Êtes-vous sûr de vouloir annuler cette réservation ?',
        'modify' => 'Modifier',
        'delete' => 'Supprimer',
    ],
];
