<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Massage Relaxant',
                'description' => 'Un massage apaisant qui réduit le stress et détend les muscles.',
                'price' => 60.00,
                'image_url' => '/images/services/massage.png'
            ],
            [
                'name' => 'Manucure et Pédicure',
                'description' => 'Prenez soin de vos ongles avec notre service complet de manucure et pédicure.',
                'price' => 40.00,
                'image_url' => '/images/services/manucure.png'
            ],
            [
                'name' => 'Coiffure Coupe et Brushing',
                'description' => 'Une coupe de cheveux professionnelle avec un brushing parfait.',
                'price' => 80.00,
                'image_url' => '/images/services/coiffure.png'
            ],
            [
                'name' => 'Soins du Visage',
                'description' => 'Un soin du visage en profondeur pour revitaliser votre peau.',
                'price' => 75.00,
                'image_url' => '/images/services/soinduvisage.png'
            ],
            [
                'name' => 'Entraînement Personnel',
                'description' => 'Un coach personnel pour vous guider dans vos objectifs de fitness.',
                'price' => 100.00,
                'image_url' => '/images/services/coachfitness.png'
            ],
            [
                'name' => 'Cours de Yoga',
                'description' => 'Séances de yoga en groupe pour améliorer votre souplesse et réduire le stress.',
                'price' => 20.00,
                'image_url' => '/images/services/yoga.png'
            ],
        ];
        User::factory(10)->create();
        // Création d'un compte admin
        User::create([
            'name' => "Administrator",
            'email' => "admin@test.com",
            'password' => Hash::make('123456'),
            'role' => "admin"
        ]);
        // Boucler sur le tableau des services et les insérer dans la base de données
        foreach ($services as $service) {
            Service::create($service);
        }

        Reservation::factory(10)->create();
    }
}
