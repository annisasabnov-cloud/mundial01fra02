<?php
$bladePath = 'resources/views/angebote-2/02.blade.php';
$content = file_get_contents($bladePath);

$replacements = [
    'À la liste des offres' => '{!! trans_db("angebote.02.back", null, "À la liste des offres") !!}',
    '>Sauna<' => '>{!! trans_db("angebote.02.title", null, "Sauna") !!}<',
    "Si vous aimez la chaleur, vous êtes exactement au bon endroit dans le sauna du Centre de Loisirs Mundial." => "{!! trans_db('angebote.02.desc1', null, 'Si vous aimez la chaleur, vous êtes exactement au bon endroit dans le sauna du Centre de Loisirs Mundial.') !!}",
    "Notre espace sauna s&#x27;étend sur environ 1&#x27;500 m². Vivez la fascination de la chaleur dans l&#x27;un de nos cinq saunas aux températures différentes." => "{!! trans_db('angebote.02.desc2', null, \"Notre espace sauna s'étend sur environ 1'500 m². Vivez la fascination de la chaleur dans l'un de nos cinq saunas aux températures différentes.\") !!}",
    "Que ce soit en hiver ou en été, le sauna est une forme particulière d&#x27;application chaud-froid qui favorise la santé et sert à se détendre. Entre autres, le sauna stimule le métabolisme, stabilise le système cardiovasculaire et aide à entraîner le système vasculaire." => "{!! trans_db('angebote.02.desc3', null, 'Que ce soit en hiver ou en été, le sauna est une forme particulière d\'application chaud-froid qui favorise la santé et sert à se détendre. Entre autres, le sauna stimule le métabolisme, stabilise le système cardiovasculaire et aide à entraîner le système vasculaire.') !!}",
    "Nous vous recommandons de bénéficier de trois intercirculations, car plus n&#x27;apporte pas de bénéfices pour la santé et peuvent conduire à la fatigue des fonctions corporelles." => "{!! trans_db('angebote.02.desc4', null, 'Nous vous recommandons de bénéficier de trois intercirculations, car plus n\'apporte pas de bénéfices pour la santé et peuvent conduire à la fatigue des fonctions corporelles.') !!}",
    '>Sauna finlandais<' => '>{!! trans_db("angebote.02.tab1", null, "Sauna finlandais") !!}<',
    '>Sauna Jardin<' => '>{!! trans_db("angebote.02.tab2", null, "Sauna Jardin") !!}<',
    '>Sauna aux herbes<' => '>{!! trans_db("angebote.02.tab3", null, "Sauna aux herbes") !!}<',
    '>Sauna aromatique<' => '>{!! trans_db("angebote.02.tab4", null, "Sauna aromatique") !!}<',
    '>Sauna panoramique<' => '>{!! trans_db("angebote.02.tab5", null, "Sauna panoramique") !!}<',
    '>Sauna finlandais classique<br>80 à 90°C <' => '>{!! trans_db("angebote.02.tab1.title", null, "Sauna finlandais classique<br>80 à 90°C") !!} <',
    'Horaires d&#x27;ouvertures (été &amp; hiver)' => "{!! trans_db('angebote.02.hours.title', null, 'Horaires d\'ouvertures (été & hiver)') !!}",
    'Lundi - jeudi : 08h00 - 19h00<br>Vendredi : 08h00 - 21h00<br>Samedi : 09h00 - 17h00<br>Dimanche : 09h00 - 12h00' => "{!! trans_db('angebote.02.hours.times', null, 'Lundi - jeudi : 08h00 - 19h00<br>Vendredi : 08h00 - 21h00<br>Samedi : 09h00 - 17h00<br>Dimanche : 09h00 - 12h00') !!}",
    'Sauna du Jardin (Cabane en bois)<br>environ 95° C' => '{!! trans_db("angebote.02.tab2.title", null, "Sauna du Jardin (Cabane en bois)<br>environ 95° C") !!}',
    'Sauna aux herbes</strong><br>ca. 75° C' => 'Sauna aux herbes</strong><br>{!! trans_db("angebote.02.tab3.temp", null, "environ 75° C") !!}',
    'Sauna aromatique</strong><br>ca. 60° C' => 'Sauna aromatique</strong><br>{!! trans_db("angebote.02.tab4.temp", null, "environ 60° C") !!}',
    'Sauna panoramique</strong><br>75° C – 90° C' => 'Sauna panoramique</strong><br>{!! trans_db("angebote.02.tab5.temp", null, "75° C – 90° C") !!}',
    '<strong>Renseignement: Fermé en hiver pour cause de rénovation</strong>' => '<strong>{!! trans_db("angebote.02.winter.closed", null, "Renseignement: Fermé en hiver pour cause de rénovation") !!}</strong>',
    'Kinder-Geburtstag auf der Bowling-Bahn' => '{!! trans_db("angebote.02.birthday.title", null, "Kinder-Geburtstag auf der Bowling-Bahn") !!}',
    'Warum den Kindergeburtstag nicht mal auf die Bowlingbahn verlegen? Für das leibliche Wohl der kleinen Gäste sorgen wir, die Kinder sind gut beaufsichtigt und haben garantiert eine Menge Spass mit der grossen Kugel.' => '{!! trans_db("angebote.02.birthday.desc", null, "Warum den Kindergeburtstag nicht mal auf die Bowlingbahn verlegen? Für das leibliche Wohl der kleinen Gäste sorgen wir, die Kinder sind gut beaufsichtigt und haben garantiert eine Menge Spass mit der grossen Kugel.") !!}',
    'Ihr Kindergeburtstag im Mundial' => '{!! trans_db("angebote.02.birthday.sub1", null, "Ihr Kindergeburtstag im Mundial") !!}',
    '>Freitag – Sonntag ab 15:00 Uhr bis 19:00 Uhr. Für nur 9 Fr. pro Kind<br>‍<' => '>{!! trans_db("angebote.02.birthday.time1", null, "Freitag – Sonntag ab 15:00 Uhr bis 19:00 Uhr. Für nur 9 Fr. pro Kind") !!}<br>‍<',
    '2 Einheiten Bowling' => '{!! trans_db("angebote.02.b1", null, "2 Einheiten Bowling") !!}',
    'inklusive Leihschuhe' => '{!! trans_db("angebote.02.b2", null, "inklusive Leihschuhe") !!}',
    'ein alkoholfreies Getränk' => '{!! trans_db("angebote.02.b3", null, "ein alkoholfreies Getränk") !!}',
    'Urkunden für alle Mitspieler' => '{!! trans_db("angebote.02.b4", null, "Urkunden für alle Mitspieler") !!}',
    '1 Tüte Popcorn' => '{!! trans_db("angebote.02.b5", null, "1 Tüte Popcorn") !!}',
    'geschmückte Bahn' => '{!! trans_db("angebote.02.b6", null, "geschmückte Bahn") !!}',
    '2 Kaffees für die Eltern' => '{!! trans_db("angebote.02.b7", null, "2 Kaffees für die Eltern") !!}',
    'Angebot gilt nur bis zum 14. Geburtstag. Mindestanzahl: 6 Kinder. Vorbestellung erforderlich. Gegen Aufpreis Kids Menü (Chicken Nuggets mit Pommes Frites - Von Freitag – Sonntag dazu buchbar).' => '{!! trans_db("angebote.02.b8", null, "Angebot gilt nur bis zum 14. Geburtstag. Mindestanzahl: 6 Kinder. Vorbestellung erforderlich. Gegen Aufpreis Kids Menü (Chicken Nuggets mit Pommes Frites - Von Freitag – Sonntag dazu buchbar).") !!}',
    'Buchen Sie Ihren Termin, wir machen Ihnen gerne ein individuelles Angebot für einen Kindergeburtstag mit Bowlingspas. Wir unterstützen Sie bei der Planung und gerne auch beim Catering. Buchen Sie jetzt einen Termin oder nehmen Sie Kontakt mit uns auf.' => '{!! trans_db("angebote.02.b9", null, "Buchen Sie Ihren Termin, wir machen Ihnen gerne ein individuelles Angebot für einen Kindergeburtstag mit Bowlingspas. Wir unterstützen Sie bei der Planung und gerne auch beim Catering. Buchen Sie jetzt einen Termin oder nehmen Sie Kontakt mit uns auf.") !!}',
    '>Termin buchen<' => '>{!! trans_db("angebote.02.btn.book", null, "Termin buchen") !!}<',
    '>Kontakt aufnehmen<' => '>{!! trans_db("angebote.02.btn.contact", null, "Kontakt aufnehmen") !!}<',
    'Geburtstagsangebot für Jugendliche*' => '{!! trans_db("angebote.02.teen.title", null, "Geburtstagsangebot für Jugendliche*") !!}',
    '>Donnerstag – Sonntag ab 18:00 Uhr. für nur 52,00 Fr. pro Bahn.<br><' => '>{!! trans_db("angebote.02.teen.time", null, "Donnerstag – Sonntag ab 18:00 Uhr. für nur 52,00 Fr. pro Bahn.") !!}<br><',
    '2 Einheiten Bowling (inkl. Leihschuhe)' => '{!! trans_db("angebote.02.t1", null, "2 Einheiten Bowling (inkl. Leihschuhe)") !!}',
    '2 Flaschen Softgetränke' => '{!! trans_db("angebote.02.t2", null, "2 Flaschen Softgetränke") !!}',
    'pro Bahn 1 Knabberteller' => '{!! trans_db("angebote.02.t3", null, "pro Bahn 1 Knabberteller") !!}',
    'für bis zu 8 Personen' => '{!! trans_db("angebote.02.t4", null, "für bis zu 8 Personen") !!}',
    '*Für Jugendliche ab 15 bis 18 Jahre.' => '{!! trans_db("angebote.02.teen.desc", null, "*Für Jugendliche ab 15 bis 18 Jahre.") !!}',
    'Geburtstagsangebot für Erwachsene - Paket 1' => '{!! trans_db("angebote.02.adult1.title", null, "Geburtstagsangebot für Erwachsene - Paket 1") !!}',
    '>Donnerstag – Sonntag ab 18:00 Uhr. für nur 89,00 Fr. pro Bahn<' => '>{!! trans_db("angebote.02.adult1.time", null, "Donnerstag – Sonntag ab 18:00 Uhr. für nur 89,00 Fr. pro Bahn") !!}<',
    '1 Flasche Sekt' => '{!! trans_db("angebote.02.a1", null, "1 Flasche Sekt") !!}',
    'Geburtstagsangebot für Erwachsene - Paket 2' => '{!! trans_db("angebote.02.adult2.title", null, "Geburtstagsangebot für Erwachsene - Paket 2") !!}',
    '>Donnerstag – Sonntag ab 18:00 Uhr. für nur 99,00 Fr. pro Bahn<' => '>{!! trans_db("angebote.02.adult2.time", null, "Donnerstag – Sonntag ab 18:00 Uhr. für nur 99,00 Fr. pro Bahn") !!}<',
    '1 x 3 Liter Biersäule (Tower)' => '{!! trans_db("angebote.02.a2", null, "1 x 3 Liter Biersäule (Tower)") !!}',
];

$originalContent = $content;
foreach ($replacements as $search => $replace) {
    if (strpos($content, $search) !== false) {
        $content = str_replace($search, $replace, $content);
    } else {
        echo "Could not find: '$search'\n";
    }
}

file_put_contents($bladePath, $content);
echo "Replaced successfully!\n";
