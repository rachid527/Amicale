<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        Activity::create([
            'titre' => 'Cérémonie de passation du Bureau de AEB ',
            'date' => '2025-01-04 17:30:00',
            'prix' => 0,
            'statut' => 'Passée',
            'description' => "L’Amicale des Étudiants Burkinabè de l’ESMT a organisé, le samedi 4 janvier 2025 à partir de 17h30 en salle HA1, sa cérémonie officielle de passation de service.

Cet événement a marqué la fin du mandat du bureau exécutif 2023-2024, qui a saisi l’occasion pour adresser ses remerciements à l’ensemble des membres pour la confiance et le soutien accordés tout au long de leur mandat.

La passation de service symbolise la continuité et l’engagement de l’amicale à maintenir une dynamique positive au sein de la communauté estudiantine burkinabè de l’ESMT.",
            'image_path' => 'storage/activites/ceremonie passation.jpg',
            'video_path' => 'storage/activites/ceremonie passation.mp4'
        ]);

        Activity::create([
            'titre' => 'Cérémonie de passation du Bureau Executif de la FEFAS',
            'date' => '2025-01-19 16:00:00',
            'prix' => 0,
            'statut' => 'Passée',
            'description' => "Le dimanche 19 janvier 2025, lors de l’Assemblée Générale et de la cérémonie officielle de passation de service de la FEFAS, un événement déterminant a réuni de nombreuses personnalités et autorités du secteur. La passation du flambeau, effectuée avec soin par le bureau exécutif 2024 sous la direction d’Ismaël OUEDRAOGO, s’est conclue avec la prise de fonction du nouveau bureau présidé par Ephrem Gwenael OUEDRAOGO.

La cérémonie a été honorée par la présence de Saïdou MAÏGA, ambassadeur, et surtout par celle de Rachid OUEDRAOGO, président du Conseil d’Administration de la FEFAS et président de la Communauté Burkinabé de l’ESMT, illustrant ainsi l’engagement fort de ces instances. La participation active de la Communauté Burkinabé de l’ESMT a également témoigné de l’intérêt et du soutien collectif envers cette nouvelle étape dans l’évolution de la FEFAS.

Cet événement a permis de renforcer les liens entre les acteurs institutionnels et de célébrer, dans une ambiance de rigueur et de dynamisme, un passage de relais harmonieux et prometteur pour le développement futur de la FEFAS.",
            'image_path' => 'storage/activites/passation fefas.jpg',
            'video_path' => 'storage/activites/passation fefas.mp4'
        ]);

        Activity::create([
            'titre' => "Match Amical : Burkina Faso 🇧🇫 vs Mali 🇲🇱",
            'date' => '2025-02-01 15:00:00',
            'prix' => 1500,
            'statut' => 'Passée',
            'description' => "Le samedi 1er février 2025, un match amical de football a réuni la communauté Burkinabé et la communauté Malienne de l’ESMT dans une ambiance conviviale et sportive. L’événement, organisé dans un esprit de fair-play et de saine compétition, a permis aux participants de démontrer leur dynamisme et leur solidarité. La présence massive des supporters et l’énergie communicative des joueurs ont transformé ce match en un véritable moment de partage et de célébration des valeurs sportives. Cet événement marque une étape significative dans la promotion d’activités communautaires renforçant les liens entre les différentes communautés de l’ESMT.",
            'image_path' => 'storage/activites/football.jpg',
            'video_path' => 'storage/activites/football.mp4'
        ]);

        Activity::create([
            'titre' => "Rencontre avec l’Ambassadeur SAÏDOU MAÏGA",
            'date' => '2025-03-11 15:00:00',
            'prix' => 0,
            'statut' => 'Passée',
            'description' => "Le mardi 11 mars 2025, le bureau a eu l’honneur d’être reçu en audience par Son Excellence Monsieur SAÏDOU MAÏGA, Ambassadeur Extraordinaire et Plénipotentiaire du Burkina Faso au Sénégal. Lors de cette rencontre, le bureau a présenté son programme annuel d’activités pour l’année 2024-2025, donnant lieu à un échange riche et constructif. Les discussions ont permis de mettre en lumière les ambitions du bureau et son engagement constant en faveur de la cohésion et du dynamisme de la communauté burkinabé.

Son Excellence Monsieur MAÏGA a salué les initiatives présentées et a encouragé le bureau à poursuivre ses actions pour renforcer le rayonnement de la communauté. Cet accueil chaleureux et ces encouragements motivants constituent une source d’inspiration pour la poursuite de leur mission.

Cette rencontre témoigne de la volonté commune de travailler ensemble pour le développement et la promotion des valeurs portées par la communauté burkinabé.",
            'image_path' => 'storage/activites/rencontre ambassadeur.jpg',
            'video_path' => 'storage/activites/rencontre ambassadeur.mp4'
        ]);

        Activity::create([
            'titre' => 'Rupture collective intercommunautaire',
            'date' => '2025-03-23 18:00:00',
            'prix' => 0,
            'statut' => 'Passée',
            'description' => "Organisée avec les communautés malienne et nigérienne pour renforcer les liens pendant le mois de Ramadan.",
            'image_path' => 'storage/activites/rupture collective.jpg',
            'video_path' => 'storage/activites/rupture collective.mp4'
        ]);

        Activity::create([
            'titre' => 'Sortie détente & Paintball',
            'date' => '2025-05-20 11:00:00',
            'prix' => 6000,
            'statut' => 'À venir',
            'description' => "Une activité de team-building fun pour se détendre et renforcer la cohésion entre membres.",
            'image_path' => 'storage/activites/paintball.jpg',
            'video_path' => 'storage/activites/paintball.mp4'
        ]);

        Activity::create([
            'titre' => 'Visite d’entreprise dans la tech',
            'date' => '2025-06-25 09:00:00',
            'prix' => 0,
            'statut' => 'À venir',
            'description' => "Découverte du monde professionnel avec une immersion dans une entreprise tech de la place.",
            'image_path' => 'storage/activites/entreprise.jpg',
            'video_path' => 'storage/activites/entreprise.mp4'
        ]);

        Activity::create([
            'titre' => 'Don à l’orphelinat de Dakar',
            'date' => '2025-05-09 14:00:00',
            'prix' => 0,
            'statut' => 'En cours',
            'description' => "Mobilisation de la communauté pour apporter joie et soutien aux enfants démunis.",
            'image_path' => 'storage/activites/orphelina.jpg',
            'video_path' => 'storage/activites/orphelina.mp4'
        ]);

        Activity::create([
            'titre' => "Panel jeunesse sur l’avenir de l’Afrique",
            'date' => '2025-06-08 08:30:00',
            'prix' => 0,
            'statut' => 'À venir',
            'description' => "Discussion engagée sur le rôle de la jeunesse africaine dans la transformation du continent.",
            'image_path' => 'storage/activites/pannel.jpg',
            'video_path' => 'storage/activites/pannel.mp4'
        ]);

        Activity::create([
            'titre' => 'Journée d’intégration des communautés de l’ESMT',
            'date' => '2025-07-28 17:00:00',
            'prix' => 0,
            'statut' => 'À venir',
            'description' => "Moment festif et culturel pour découvrir les traditions des différentes amicales de l’ESMT.",
            'image_path' => 'storage/activites/integration.jpg',
            'video_path' => 'storage/activites/integration.mp4'
        ]);
    }
}
