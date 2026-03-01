<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Angebote02Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            ['key' => 'angebote.02.back', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => 'À la liste des offres', 'type' => 'text'],
            ['key' => 'angebote.02.back', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => 'Zurück zur Liste der Angebote', 'type' => 'text'],
            ['key' => 'angebote.02.back', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => 'Back to offers list', 'type' => 'text'],

            ['key' => 'angebote.02.title', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'angebote.02.title', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'angebote.02.title', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => 'Sauna', 'type' => 'text'],

            ['key' => 'angebote.02.desc1', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => 'Si vous aimez la chaleur, vous êtes exactement au bon endroit dans le sauna du Centre de Loisirs Mundial.', 'type' => 'text'],
            ['key' => 'angebote.02.desc1', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => 'Wenn Sie die Hitze mögen, sind Sie in der Sauna des Freizeitzentrums Mundial genau richtig.', 'type' => 'text'],
            ['key' => 'angebote.02.desc1', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => 'If you like the heat, you are exactly in the right place in the sauna of the Mundial Leisure Center.', 'type' => 'text'],

            ['key' => 'angebote.02.desc2', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => "Notre espace sauna s'étend sur environ 1'500 m². Vivez la fascination de la chaleur dans l'un de nos cinq saunas aux températures différentes.", 'type' => 'text'],
            ['key' => 'angebote.02.desc2', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => "Unsere Saunalandschaft erstreckt sich über ca. 1.500 m². Erleben Sie die Faszination der Wärme in einer unserer fünf Saunen mit unterschiedlichen Temperaturen.", 'type' => 'text'],
            ['key' => 'angebote.02.desc2', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => "Our sauna area extends over approx. 1,500 m². Experience the fascination of heat in one of our five saunas with different temperatures.", 'type' => 'text'],

            ['key' => 'angebote.02.desc3', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => "Que ce soit en hiver ou en été, le sauna est une forme particulière d'application chaud-froid qui favorise la santé et sert à se détendre. Entre autres, le sauna stimule le métabolisme, stabilise le système cardiovasculaire et aide à entraîner le système vasculaire.", 'type' => 'text'],
            ['key' => 'angebote.02.desc3', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => "Ob im Winter oder im Sommer, die Sauna ist eine besondere Form der Heiß-Kalt-Anwendung, die gesundheitsfördernd wirkt und der Entspannung dient. Unter anderem regt die Sauna den Stoffwechsel an, stabilisiert das Herz-Kreislauf-System und hilft, das Gefäßsystem zu trainieren.", 'type' => 'text'],
            ['key' => 'angebote.02.desc3', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => "Whether in winter or summer, the sauna is a special form of hot-cold application that promotes health and serves to relax. Among other things, the sauna stimulates the metabolism, stabilizes the cardiovascular system and helps to train the vascular system.", 'type' => 'text'],

            ['key' => 'angebote.02.desc4', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => "Nous vous recommandons de bénéficier de trois intercirculations, car plus n'apporte pas de bénéfices pour la santé et peuvent conduire à la fatigue des fonctions corporelles.", 'type' => 'text'],
            ['key' => 'angebote.02.desc4', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => "Wir empfehlen Ihnen, drei Saunagänge zu genießen, da mehr keine gesundheitlichen Vorteile bringt und zur Ermüdung der Körperfunktionen führen kann.", 'type' => 'text'],
            ['key' => 'angebote.02.desc4', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => "We recommend that you enjoy three rounds, as more does not bring any health benefits and can lead to fatigue of bodily functions.", 'type' => 'text'],

            ['key' => 'angebote.02.tab1', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => 'Sauna finlandais', 'type' => 'text'],
            ['key' => 'angebote.02.tab1', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => 'Finnische Sauna', 'type' => 'text'],
            ['key' => 'angebote.02.tab1', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => 'Finnish Sauna', 'type' => 'text'],

            ['key' => 'angebote.02.tab2', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => 'Sauna Jardin', 'type' => 'text'],
            ['key' => 'angebote.02.tab2', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => 'Gartensauna', 'type' => 'text'],
            ['key' => 'angebote.02.tab2', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => 'Garden Sauna', 'type' => 'text'],

            ['key' => 'angebote.02.tab3', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => 'Sauna aux herbes', 'type' => 'text'],
            ['key' => 'angebote.02.tab3', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => 'Kräutersauna', 'type' => 'text'],
            ['key' => 'angebote.02.tab3', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => 'Herbal Sauna', 'type' => 'text'],

            ['key' => 'angebote.02.tab4', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => 'Sauna aromatique', 'type' => 'text'],
            ['key' => 'angebote.02.tab4', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => 'Aromasauna', 'type' => 'text'],
            ['key' => 'angebote.02.tab4', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => 'Aroma Sauna', 'type' => 'text'],

            ['key' => 'angebote.02.tab5', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => 'Sauna panoramique', 'type' => 'text'],
            ['key' => 'angebote.02.tab5', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => 'Panoramasauna', 'type' => 'text'],
            ['key' => 'angebote.02.tab5', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => 'Panoramic Sauna', 'type' => 'text'],

            ['key' => 'angebote.02.tab1.title', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => 'Sauna finlandais classique<br>80 à 90°C', 'type' => 'text'],
            ['key' => 'angebote.02.tab1.title', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => 'Klassische Finnische Sauna<br>80 bis 90°C', 'type' => 'text'],
            ['key' => 'angebote.02.tab1.title', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => 'Classic Finnish Sauna<br>80 to 90°C', 'type' => 'text'],

            ['key' => 'angebote.02.hours.title', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => 'Horaires d\'ouvertures (été & hiver)', 'type' => 'text'],
            ['key' => 'angebote.02.hours.title', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => 'Öffnungszeiten (Sommer & Winter)', 'type' => 'text'],
            ['key' => 'angebote.02.hours.title', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => 'Opening Hours (Summer & Winter)', 'type' => 'text'],

            ['key' => 'angebote.02.hours.times', 'language' => 'fr', 'section' => 'pages.angebote.02', 'value' => 'Lundi - jeudi : 08h00 - 19h00<br>Vendredi : 08h00 - 21h00<br>Samedi : 09h00 - 17h00<br>Dimanche : 09h00 - 12h00', 'type' => 'text'],
            ['key' => 'angebote.02.hours.times', 'language' => 'de', 'section' => 'pages.angebote.02', 'value' => 'Montag - Donnerstag: 08:00 - 19:00<br>Freitag: 08:00 - 21:00<br>Samstag: 09:00 - 17:00<br>Sonntag: 09:00 - 12:00', 'type' => 'text'],
            ['key' => 'angebote.02.hours.times', 'language' => 'en', 'section' => 'pages.angebote.02', 'value' => 'Monday - Thursday: 08:00 - 19:00<br>Friday: 08:00 - 21:00<br>Saturday: 09:00 - 17:00<br>Sunday: 09:00 - 12:00', 'type' => 'text'],
        ];

        foreach ($translations as $trans) {
            Translation::updateOrCreate(
                ['key' => $trans['key'], 'language' => $trans['language']],
                $trans
            );
        }
    }
}
