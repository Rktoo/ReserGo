<?php

return [
    'home' => [
        'title' => 'Fandraisana',
        'welcome' => 'Tongasoa eto amin\'ny sehatra ReserGo',
        'subtitle' => 'Manaova famandrihana ny serivisy mora amin\'ny aterineto!',
        'discover_services' => 'Fantaro ny serivisinay',
        'description' => 'Manolotra serivisy maro mifanaraka amin\'ny filanao izahay. Na mitady serivisy kalitao ho an\'ny hetsika manokana ianao na hetsika goavana, manana tolotra maro izahay ho anao.',
        'popular_services' => 'Ireto misy amin\'ireo serivisy malazanay:',
        'call_to_action' => 'Aza miandry ela raha te hankafy ireo tolotra manokana. Misafidiana ny serivisy mety indrindra ho anao ary manaova famandrihana dieny izao!',
        'services' => [
            'cleaning' => 'Serivisy fanadiovana matihanina',
            'beauty' => 'Fanadiovana volo sy fikarakarana tarehy',
            'event' => 'Fikambanana sy fandaminana hetsika',
            'coaching' => 'Fakan-kevitra sy fanofanana manokana',
            'repair' => 'Fanamboarana sy fikojakojana ao an-trano',
            'others' => 'Ary maro hafa koa!'
        ]
    ],
    'navbar' => [
        'home' => 'Fandraisana',
        'dashboard' => 'Ny famandrihanao',
        'services' => 'Serivisy',
        'reservations' => 'Famandrihana',
        'about' => 'Momba anay',
        'contact' => 'Mifandraisa'
    ],
    'footer' => [
        'copyright' => '&copy; :year ReserGo. Zo rehetra voatokana.',
    ],
    'about' => [
        'title' => 'Momba anay',
        'heading' => 'Momba ny fampiharana anay',
        'paragraph_1' => 'Ny fampiharana famandrihanay dia mikendry ny hanamora ny fizotry ny famandrihana ho an\'ny mpampiasa anay. Na ho an\'ny tolotra hatsarana, fialamboly, na fahasalamana, eto izahay hanampy anao hahita ny tolotra tonga lafatra.',
        'paragraph_2' => 'Mino izahay fa ny fahatsorana sy ny fahombiazana dia zava-dehibe, ary noho izany dia namolavola ity fampiharana ity izahay miaraka amin\'ny interface intuitive ho an\'ny mpampiasa.',
    ],
    'contact' => [
        'title' => 'Mifandraisa aminay',
        'heading' => 'Mifandraisa aminay',
        'paragraph' => 'Raha manana fanontaniana, hevitra na fiahiahiana ianao, dia aza misalasala mifandray aminay. Fenoy ny taratasy etsy ambany ary hamaly izahay haingana araka izay azo atao.',
        'form' => [
            'name' => 'Anarana',
            'email' => 'Email',
            'message' => 'Hafatra',
            'submit' => 'Alefaso',
            'name_placeholder' => 'Ny anaranao',
            'email_placeholder' => 'Ny adiresy mailakao',
            'message_placeholder' => 'Ny hafatrao',
        ],
    ],
    'reservationIndex' => [
        'title' => 'Famandrihana',
        'heading' => 'Ny Famandrihanao',
        'create' => 'Mametraha famandrihana',
        'service_name' => 'Tolotra',
        'service_description' => 'Mombamomba',
        'date' => 'Daty',
        'time' => 'Ora',
        'reserved_by' => 'Nomanin\'i',
    ],
    'reservationCreate' => [
        'title' => 'Famoronana fanamiana',
        'heading' => 'Manaova Fanamiana',
        'guest_modal' => 'Mba midira raha te-hanao fanamiana.',
        'select_user' => 'Fidio ny mpampiasa',
        'select_service' => 'Fidio ny serivisy',
        'reservation_date' => 'Daty fanamiana',
        'submit' => 'Manaova fanamiana',
        'errors' => [
            'user' => 'Azafady, fidio ny mpampiasa manan-kery.',
            'service_id' => 'Azafady, fidio ny serivisy manan-kery.',
            'reservation_date' => 'Azafady, ampiasao ny daty fanamiana manan-kery.'
        ]
    ],
    'reservationEdit' => [
        'title' => 'Fanaraha ny fanamiana',
        'heading' => 'Ovay ny fanamiana',
        'service_name' => 'Anaran\'ny Serivisy',
        'new_reservation_date' => 'Daty fanamiana vaovao :',
        'submit' => 'Havaozina',
        'back_to_reservations' => 'Miverena amin\'ny fanamiana',
        'errors' => [
            'reservation_date' => 'Azafady, ampiasao ny daty fanamiana manan-kery.'
        ]
    ],
    'dashboardIndex' => [
        'title' => 'Profil',
        'future_reservations' => 'Fanaraha ny fanamiana ho avy',
        'no_future_reservations' => 'Tsy misy fanamiana ho avy.',
        'past_reservations' => 'Fanaraha ny fanamiana taloha',
        'no_past_reservations' => 'Tsy misy fanamiana taloha.',
        'settings' => 'Fikirana',
        'details' => 'Antsipirihany',
        'cancel' => 'Manafoana',
        'confirm_cancel_title' => 'Manamarina ny fanafoanana',
        'confirm_cancel_message' => 'Marina ve fa te-hanafoana ity fanamiana ity ianao ?',
    ],
    'dashboardShow' => [
        'title' => 'Antsipirihany ny fanamiana',
        'service' => 'Servisy:',
        'reservation_date' => 'Daty fanamiana:',
        'client_name' => 'Anaran\'ny mpanjifa:',
        'client_email' => "Adiresy mailakan'ny mpanjifa:",
        'edit' => 'Hanova',
        'back_to_reservations' => 'Miverina any amin\'ny fanamiana ataonao',
    ],
    'dashboardEdit' => [
        'title' => 'Tefin\'ny kaonty',
        'account_settings' => 'Tefin\'ny kaonty',
        'change_name' => 'Hanova ny anaran\'ny mpampiasa',
        'name' => 'Anarana',
        'update_name' => 'Havaozina ny anarana',
        'change_password' => 'Hanova ny tenimiafina',
        'new_password' => 'Tenimiafina vaovao',
        'confirm_password' => 'Avereno ny tenimiafina',
        'update_password' => 'Havaozina ny tenimiafina',
        'delete_account' => 'Fafao ny kaonty',
        'confirm_deletion_title' => 'Manamafy ny fafana',
        'confirm_deletion_message' => 'Azafady ve ianao manamafy fa tianao hofafàna ny kaontinao?',
    ],
    'serviceIndex' => [
        'title' => 'Serivisy',
        'add_service' => 'Ampidiro ny Serivisy',
        'confirm_cancel' => 'Manaiky ny fanafoanana',
        'confirm_message' => 'Azafady ve ianao manamafy fa te hanafoana ity famandrihana ity ?',
        'modify' => 'Ovaina',
        'delete' => 'Fafao',
    ],
];
