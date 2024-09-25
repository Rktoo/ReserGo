<?php

return [
    'home' => [
        'title' => 'Home',
        'welcome' => 'Welcome to ReserGo',
        'subtitle' => 'Book your services easily online!',
        'discover_services' => 'Discover Our Services',
        'description' => 'We offer a wide range of services tailored to your needs. Whether you\'re looking for quality service for a special event or just a simple task, we have what you need.',
        'popular_services' => 'Here are some of our popular services:',
        'call_to_action' => 'Don\'t wait to take advantage of our exceptional offers. Choose the service that suits you best and book now!',
        'services' => [
            'cleaning' => 'Professional cleaning service',
            'beauty' => 'Hair and beauty care',
            'event' => 'Event and party organization',
            'coaching' => 'Personal consultation and coaching',
            'repair' => 'Home repair and maintenance services',
            'others' => 'And many more!'
        ]
    ],
    'navbar' => [
        'home' => 'Home',
        'dashboard' => 'Your Reservations',
        'services' => 'Services',
        'reservations' => 'Reservations',
        'about' => 'About Us',
        'contact' => 'Contact'
    ],
    'footer' => [
        'copyright' => '&copy; :year ReserGo. All rights reserved.',
    ],
    'about' => [
        'title' => 'About Us',
        'heading' => 'About Our Application',
        'paragraph_1' => 'Our booking application aims to simplify the service reservation process for our users. Whether it is for beauty, leisure, or wellness services, we are here to help you find the perfect service.',
        'paragraph_2' => 'We believe in simplicity and efficiency, which is why we designed this application with an intuitive user interface.',
    ],
    'contact' => [
        'title' => 'Contact',
        'heading' => 'Contact Us',
        'paragraph' => 'If you have any questions, comments, or concerns, feel free to contact us. Fill out the form below and we will respond as soon as possible.',
        'form' => [
            'name' => 'Name',
            'email' => 'Email',
            'message' => 'Message',
            'submit' => 'Send',
            'name_placeholder' => 'Your name',
            'email_placeholder' => 'Your email address',
            'message_placeholder' => 'Your message',
        ],
    ],
    'reservationIndex' => [
        'title' => 'Reservations',
        'heading' => 'Your Reservations',
        'create' => 'Create a Reservation',
        'service_name' => 'Service',
        'service_description' => 'Description',
        'date' => 'Date',
        'time' => 'Time',
        'reserved_by' => 'Reserved by',
    ],
    'reservationCreate' => [
        'title' => 'Create Reservation',
        'heading' => 'Make a Reservation',
        'guest_modal' => 'Please log in to make a reservation.',
        'select_user' => 'Select a user',
        'select_service' => 'Select your service',
        'reservation_date' => 'Reservation Date',
        'submit' => 'Reserve',
        'errors' => [
            'user' => 'Please select a valid user.',
            'service_id' => 'Please select a valid service.',
            'reservation_date' => 'Please enter a valid reservation date.'
        ]
    ],
    'reservationEdit' => [
        'title' => 'Edit Reservation',
        'heading' => 'Edit Reservation',
        'service_name' => 'Service Name',
        'new_reservation_date' => 'New Reservation Date:',
        'submit' => 'Update',
        'back_to_reservations' => 'Back to your reservations',
        'errors' => [
            'reservation_date' => 'Please enter a valid reservation date.'
        ]
    ],
    'dashboardIndex' => [
        'title' => 'Profile',
        'future_reservations' => 'Future Reservations',
        'no_future_reservations' => 'No future reservations.',
        'past_reservations' => 'Past Reservations',
        'no_past_reservations' => 'No past reservations.',
        'settings' => 'Settings',
        'details' => 'Details',
        'cancel' => 'Cancel',
        'confirm_cancel_title' => 'Confirm Cancellation',
        'confirm_cancel_message' => 'Are you sure you want to cancel this reservation?',
    ],
    'dashboardShow' => [
        'title' => 'Reservation Details',
        'service' => 'Service:',
        'reservation_date' => 'Reservation Date:',
        'client_name' => 'Client Name:',
        'client_email' => 'Client Email:',
        'edit' => 'Edit',
        'back_to_reservations' => 'Back to your reservations',
    ],
    'dashboardEdit' => [
        'title' => 'Account Settings',
        'account_settings' => 'Account Settings',
        'change_name' => 'Change your username',
        'name' => 'Name',
        'update_name' => 'Update Name',
        'change_password' => 'Change Password',
        'new_password' => 'New Password',
        'confirm_password' => 'Confirm Password',
        'update_password' => 'Update Password',
        'delete_account' => 'Delete Account',
        'confirm_deletion_title' => 'Confirm Deletion',
        'confirm_deletion_message' => 'Are you sure you want to delete your account?',
    ],
    'serviceIndex' => [
        'title' => 'Services',
        'add_service' => 'Add a Service',
        'confirm_cancel' => 'Confirm Cancellation',
        'confirm_message' => 'Are you sure you want to cancel this reservation?',
        'modify' => 'Modify',
        'delete' => 'Delete',
    ],
    'serviceCreate' => [
        'title' => 'Create Service',
        'add_service' => 'Add a Service',
        'service_name' => 'Service Name',
        'service_description' => 'Service Description',
        'service_price' => 'Price',
        'service_image' => 'Image',
        'create_button' => 'Create Service',
    ],
    'serviceEdit' => [
        'title' => 'Edit Service',
        'edit_service' => 'Edit a Service',
        'service_name' => 'Service Name',
        'service_description' => 'Service Description',
        'service_price' => 'Price',
        'service_image' => 'Image',
        'update_button' => 'Update Service',
        'current_image' => 'Current Image:',
    ],
    'serviceList' => [
        'popular_services' => 'Popular Services',
        'book_service' => 'Book this service',
    ],
    'login' => [
        'title' => 'Login',
        'email' => 'Email Address',
        'password' => 'Password',
        'remember_me' => 'Remember Me',
        'no_account' => 'No account?',
        'register_here' => 'Click here',
        'login_button' => 'Login',
        'status' => 'Logged in successfully',
    ],
    'register' => [
        'title' => 'Register',
        'name' => 'Name',
        'email' => 'Email Address',
        'password' => 'Password',
        'password_confirmation' => 'Confirm Password',
        'already_have_account' => 'Already have an account?',
        'login_here' => 'Click here',
        'register_button' => 'Create Account',
        'status' => 'Registered successfully',
    ],
];