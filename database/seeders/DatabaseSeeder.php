<?php

namespace Database\Seeders;
 
use App\Models\OffreEmploi;
use Illuminate\Database\Seeder;
 
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        OffreEmploi::create([
            'titre' => 'Chef cuisinier du château',
            'entreprise' => 'Bowser’s Castle Services',
            'ville' => 'Bowser’s Castle',
            'salaire' => '9 000 pièces à 12 000 pièces',
            'description' => 'Préparer des repas pour Bowser, les Koopa Troopas et les invités du château. Spécialité : plats épicés et viande grillée.',
            'est_active' => true,
        ]);

        OffreEmploi::create([
            'titre' => 'Aide-cuisinier',
            'entreprise' => 'Cuisine royale de Bowser',
            'ville' => 'Bowser’s Castle',
            'salaire' => '6 000 pièces à 8 000 pièces',
            'description' => 'Assister le chef cuisinier dans la préparation des repas et la gestion des ingrédients (œufs de Yoshi non inclus).',
            'est_active' => true,
        ]);

        OffreEmploi::create([
            'titre' => 'Personnel de nettoyage du château',
            'entreprise' => 'Bowser Maintenance Division',
            'ville' => 'Bowser’s Castle',
            'salaire' => '5 500 pièces à 7 500 pièces',
            'description' => 'Nettoyer les salles principales, enlever les traces de lave et remettre en place les meubles après les invasions de Mario.',
            'est_active' => true,
        ]);

        OffreEmploi::create([
            'titre' => 'Jardinier des zones volcaniques',
            'entreprise' => 'Royal Groundskeeping',
            'ville' => 'Jardins du château',
            'salaire' => '6 500 pièces à 8 500 pièces',
            'description' => 'Entretenir les plantes résistantes à la chaleur et gérer les décorations naturelles autour du château.',
            'est_active' => true,
        ]);

        OffreEmploi::create([
            'titre' => 'Concierge de tour principale',
            'entreprise' => 'Bowser Castle Operations',
            'ville' => 'Tour principale',
            'salaire' => '7 000 pièces à 9 000 pièces',
            'description' => 'Assurer la propreté des couloirs, chambres et salles de réunion du château.',
            'est_active' => true,
        ]);

        OffreEmploi::create([
            'titre' => 'Gardien de nuit du château',
            'entreprise' => 'Bowser Security Services',
            'ville' => 'Bowser’s Castle',
            'salaire' => '8 000 pièces à 10 000 pièces',
            'description' => 'Surveiller les entrées du château et signaler toute intrusion suspecte (principalement Mario et Luigi).',
            'est_active' => false,
        ]);

        OffreEmploi::create([
            'titre' => 'Blanchisseur royal',
            'entreprise' => 'Castle Laundry Division',
            'ville' => 'Buanderie du château',
            'salaire' => '5 000 pièces à 6 500 pièces',
            'description' => 'Laver les uniformes des soldats Koopa et les draps royaux malgré la chaleur des zones volcaniques.',
            'est_active' => false,
        ]);

        OffreEmploi::create([
            'titre' => 'Serveur du banquet royal',
            'entreprise' => 'Bowser Hospitality Team',
            'ville' => 'Salle de banquet',
            'salaire' => '6 000 pièces à 8 000 pièces',
            'description' => 'Servir les repas lors des réunions du royaume et gérer les invités (Bowser exige un service rapide).',
            'est_active' => true,
        ]);
    }
}