<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageTranslationSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            // ========== NAVIGATION & HEADER ==========
            ['key' => 'nav.home', 'language' => 'en', 'section' => 'navigation', 'value' => 'Home', 'type' => 'text'],
            ['key' => 'nav.home', 'language' => 'de', 'section' => 'navigation', 'value' => 'Startseite', 'type' => 'text'],
            ['key' => 'nav.home', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Accueil', 'type' => 'text'],

            ['key' => 'nav.start', 'language' => 'en', 'section' => 'navigation', 'value' => 'Start', 'type' => 'text'],
            ['key' => 'nav.start', 'language' => 'de', 'section' => 'navigation', 'value' => 'Anfang', 'type' => 'text'],
            ['key' => 'nav.start', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Démarrer', 'type' => 'text'],

            ['key' => 'nav.offers', 'language' => 'en', 'section' => 'navigation', 'value' => 'Offers', 'type' => 'text'],
            ['key' => 'nav.offers', 'language' => 'de', 'section' => 'navigation', 'value' => 'Angebote', 'type' => 'text'],
            ['key' => 'nav.offers', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Offres', 'type' => 'text'],

            ['key' => 'nav.pricing', 'language' => 'en', 'section' => 'navigation', 'value' => 'Pricing', 'type' => 'text'],
            ['key' => 'nav.pricing', 'language' => 'de', 'section' => 'navigation', 'value' => 'Preise', 'type' => 'text'],
            ['key' => 'nav.pricing', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Tarification', 'type' => 'text'],

            ['key' => 'nav.contact', 'language' => 'en', 'section' => 'navigation', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'nav.contact', 'language' => 'de', 'section' => 'navigation', 'value' => 'Kontakt', 'type' => 'text'],
            ['key' => 'nav.contact', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Contact', 'type' => 'text'],

            // ========== HOME PAGE ==========
            ['key' => 'page.home.title', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Home - Mundial', 'type' => 'text'],
            ['key' => 'page.home.title', 'language' => 'de', 'section' => 'pages.home', 'value' => 'Startseite - Mundial', 'type' => 'text'],
            ['key' => 'page.home.title', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Accueil - Mundial', 'type' => 'text'],

            ['key' => 'page.home.heading', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Welcome to Mundial', 'type' => 'text'],
            ['key' => 'page.home.heading', 'language' => 'de', 'section' => 'pages.home', 'value' => 'Willkommen bei Mundial', 'type' => 'text'],
            ['key' => 'page.home.heading', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Bienvenue chez Mundial', 'type' => 'text'],

            ['key' => 'page.home.subtitle', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Your Trusted Global Partner', 'type' => 'text'],
            ['key' => 'page.home.subtitle', 'language' => 'de', 'section' => 'pages.home', 'value' => 'Ihr vertrauenswürdiger globaler Partner', 'type' => 'text'],
            ['key' => 'page.home.subtitle', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Votre partenaire mondial de confiance', 'type' => 'text'],

            ['key' => 'page.home.description', 'language' => 'en', 'section' => 'pages.home', 'value' => 'We provide world-class solutions for your international business needs.', 'type' => 'text'],
            ['key' => 'page.home.description', 'language' => 'de', 'section' => 'pages.home', 'value' => 'Wir bieten weltklasse Lösungen für Ihre internationalen Geschäftsbedürfnisse.', 'type' => 'text'],
            ['key' => 'page.home.description', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Nous proposons des solutions de classe mondiale pour vos besoins commerciaux internationaux.', 'type' => 'text'],

            // ========== START PAGE ==========
            ['key' => 'page.start.title', 'language' => 'en', 'section' => 'pages.start', 'value' => 'Get Started - Mundial', 'type' => 'text'],
            ['key' => 'page.start.title', 'language' => 'de', 'section' => 'pages.start', 'value' => 'Einstieg - Mundial', 'type' => 'text'],
            ['key' => 'page.start.title', 'language' => 'fr', 'section' => 'pages.start', 'value' => 'Démarrer - Mundial', 'type' => 'text'],

            ['key' => 'page.start.heading', 'language' => 'en', 'section' => 'pages.start', 'value' => 'Getting Started with Mundial', 'type' => 'text'],
            ['key' => 'page.start.heading', 'language' => 'de', 'section' => 'pages.start', 'value' => 'Einstieg mit Mundial', 'type' => 'text'],
            ['key' => 'page.start.heading', 'language' => 'fr', 'section' => 'pages.start', 'value' => 'Commencer avec Mundial', 'type' => 'text'],

            ['key' => 'page.start.description', 'language' => 'en', 'section' => 'pages.start', 'value' => 'Follow these simple steps to get started with our services.', 'type' => 'text'],
            ['key' => 'page.start.description', 'language' => 'de', 'section' => 'pages.start', 'value' => 'Folgen Sie diesen einfachen Schritten, um mit unseren Dienstleistungen zu beginnen.', 'type' => 'text'],
            ['key' => 'page.start.description', 'language' => 'fr', 'section' => 'pages.start', 'value' => 'Suivez ces étapes simples pour commencer avec nos services.', 'type' => 'text'],

            // ========== PRICING PAGE ==========
            ['key' => 'page.pricing.title', 'language' => 'en', 'section' => 'pages.pricing', 'value' => 'Pricing - Mundial', 'type' => 'text'],
            ['key' => 'page.pricing.title', 'language' => 'de', 'section' => 'pages.pricing', 'value' => 'Preisgestaltung - Mundial', 'type' => 'text'],
            ['key' => 'page.pricing.title', 'language' => 'fr', 'section' => 'pages.pricing', 'value' => 'Tarification - Mundial', 'type' => 'text'],

            ['key' => 'page.pricing.heading', 'language' => 'en', 'section' => 'pages.pricing', 'value' => 'Our Pricing Plans', 'type' => 'text'],
            ['key' => 'page.pricing.heading', 'language' => 'de', 'section' => 'pages.pricing', 'value' => 'Unsere Preispläne', 'type' => 'text'],
            ['key' => 'page.pricing.heading', 'language' => 'fr', 'section' => 'pages.pricing', 'value' => 'Nos Plans Tarifaires', 'type' => 'text'],

            ['key' => 'page.pricing.description', 'language' => 'en', 'section' => 'pages.pricing', 'value' => 'Choose the perfect plan for your needs.', 'type' => 'text'],
            ['key' => 'page.pricing.description', 'language' => 'de', 'section' => 'pages.pricing', 'value' => 'Wählen Sie den perfekten Plan für Ihre Anforderungen.', 'type' => 'text'],
            ['key' => 'page.pricing.description', 'language' => 'fr', 'section' => 'pages.pricing', 'value' => 'Choisissez le plan parfait pour vos besoins.', 'type' => 'text'],

            ['key' => 'page.pricing.card_title', 'language' => 'en', 'section' => 'pages.pricing', 'value' => 'Mundial Card - Annual Subscription', 'type' => 'text'],
            ['key' => 'page.pricing.card_title', 'language' => 'de', 'section' => 'pages.pricing', 'value' => 'Mundial Karte - Jahresabonnement', 'type' => 'text'],
            ['key' => 'page.pricing.card_title', 'language' => 'fr', 'section' => 'pages.pricing', 'value' => 'Carte Mundial - Abonnement Annuel', 'type' => 'text'],

            ['key' => 'page.pricing.card_description', 'language' => 'en', 'section' => 'pages.pricing', 'value' => 'Enjoy all Mundial leisure center offers throughout the year. Unlimited access to mini golf, bowling, sauna and pool.', 'type' => 'text'],
            ['key' => 'page.pricing.card_description', 'language' => 'de', 'section' => 'pages.pricing', 'value' => 'Genießen Sie alle Angebote des Freizeitzentrums Mundial das ganze Jahr über. Unbegrenzter Zugang zu Minigolf, Bowling, Sauna und Pool.', 'type' => 'text'],
            ['key' => 'page.pricing.card_description', 'language' => 'fr', 'section' => 'pages.pricing', 'value' => 'Profitez de toutes les offres du centre de loisirs Mundial toute l\'année. Accès illimité au mini-golf, bowling, sauna et piscine.', 'type' => 'text'],

            ['key' => 'page.pricing.card_price', 'language' => 'en', 'section' => 'pages.pricing', 'value' => '1\'420.-', 'type' => 'text'],
            ['key' => 'page.pricing.card_price', 'language' => 'de', 'section' => 'pages.pricing', 'value' => '1\'420.-', 'type' => 'text'],
            ['key' => 'page.pricing.card_price', 'language' => 'fr', 'section' => 'pages.pricing', 'value' => '1\'420.-', 'type' => 'text'],

            // ========== OFFERS PAGE ==========
            ['key' => 'page.offers.title', 'language' => 'en', 'section' => 'pages.offers', 'value' => 'Offers - Mundial', 'type' => 'text'],
            ['key' => 'page.offers.title', 'language' => 'de', 'section' => 'pages.offers', 'value' => 'Angebote - Mundial', 'type' => 'text'],
            ['key' => 'page.offers.title', 'language' => 'fr', 'section' => 'pages.offers', 'value' => 'Offres - Mundial', 'type' => 'text'],

            ['key' => 'page.offers.heading', 'language' => 'en', 'section' => 'pages.offers', 'value' => 'Our Special Offers', 'type' => 'text'],
            ['key' => 'page.offers.heading', 'language' => 'de', 'section' => 'pages.offers', 'value' => 'Unsere Spezialangebote', 'type' => 'text'],
            ['key' => 'page.offers.heading', 'language' => 'fr', 'section' => 'pages.offers', 'value' => 'Nos Offres Spéciales', 'type' => 'text'],

            ['key' => 'page.offers.description', 'language' => 'en', 'section' => 'pages.offers', 'value' => 'Check out our exclusive offers available this season.', 'type' => 'text'],
            ['key' => 'page.offers.description', 'language' => 'de', 'section' => 'pages.offers', 'value' => 'Entdecken Sie unsere exklusiven Angebote für diese Saison.', 'type' => 'text'],
            ['key' => 'page.offers.description', 'language' => 'fr', 'section' => 'pages.offers', 'value' => 'Découvrez nos offres exclusives disponibles cette saison.', 'type' => 'text'],

            // ========== CONTACT PAGE ==========
            ['key' => 'page.contact.title', 'language' => 'en', 'section' => 'pages.contact', 'value' => 'Contact Us - Mundial', 'type' => 'text'],
            ['key' => 'page.contact.title', 'language' => 'de', 'section' => 'pages.contact', 'value' => 'Kontaktieren Sie Uns - Mundial', 'type' => 'text'],
            ['key' => 'page.contact.title', 'language' => 'fr', 'section' => 'pages.contact', 'value' => 'Nous Contacter - Mundial', 'type' => 'text'],

            ['key' => 'page.contact.heading', 'language' => 'en', 'section' => 'pages.contact', 'value' => 'Get In Touch', 'type' => 'text'],
            ['key' => 'page.contact.heading', 'language' => 'de', 'section' => 'pages.contact', 'value' => 'Kontakt Aufnehmen', 'type' => 'text'],
            ['key' => 'page.contact.heading', 'language' => 'fr', 'section' => 'pages.contact', 'value' => 'Nous Contacter', 'type' => 'text'],

            ['key' => 'page.contact.description', 'language' => 'en', 'section' => 'pages.contact', 'value' => 'We would love to hear from you. Contact us today!', 'type' => 'text'],
            ['key' => 'page.contact.description', 'language' => 'de', 'section' => 'pages.contact', 'value' => 'Wir freuen uns, von Ihnen zu hören. Kontaktieren Sie uns noch heute!', 'type' => 'text'],
            ['key' => 'page.contact.description', 'language' => 'fr', 'section' => 'pages.contact', 'value' => 'Nous aimerions vous entendre. Contactez-nous dès aujourd\'hui!', 'type' => 'text'],

            ['key' => 'page.contact.form_title', 'language' => 'en', 'section' => 'pages.contact', 'value' => 'Contact Form', 'type' => 'text'],
            ['key' => 'page.contact.form_title', 'language' => 'de', 'section' => 'pages.contact', 'value' => 'Kontaktformular', 'type' => 'text'],
            ['key' => 'page.contact.form_title', 'language' => 'fr', 'section' => 'pages.contact', 'value' => 'Formulaire de Contact', 'type' => 'text'],

            // ========== TASK PAGES ==========
            ['key' => 'page.task.title', 'language' => 'en', 'section' => 'pages.task', 'value' => 'Task - Mundial', 'type' => 'text'],
            ['key' => 'page.task.title', 'language' => 'de', 'section' => 'pages.task', 'value' => 'Aufgabe - Mundial', 'type' => 'text'],
            ['key' => 'page.task.title', 'language' => 'fr', 'section' => 'pages.task', 'value' => 'Tâche - Mundial', 'type' => 'text'],

            ['key' => 'page.task.heading', 'language' => 'en', 'section' => 'pages.task', 'value' => 'Complete Your Task', 'type' => 'text'],
            ['key' => 'page.task.heading', 'language' => 'de', 'section' => 'pages.task', 'value' => 'Erfüllen Sie Ihre Aufgabe', 'type' => 'text'],
            ['key' => 'page.task.heading', 'language' => 'fr', 'section' => 'pages.task', 'value' => 'Complétez Votre Tâche', 'type' => 'text'],

            ['key' => 'page.task.cancel_button', 'language' => 'en', 'section' => 'pages.task', 'value' => 'Cancel', 'type' => 'text'],
            ['key' => 'page.task.cancel_button', 'language' => 'de', 'section' => 'pages.task', 'value' => 'Abbrechen', 'type' => 'text'],
            ['key' => 'page.task.cancel_button', 'language' => 'fr', 'section' => 'pages.task', 'value' => 'Annuler', 'type' => 'text'],

            ['key' => 'page.task.complete_button', 'language' => 'en', 'section' => 'pages.task', 'value' => 'Complete', 'type' => 'text'],
            ['key' => 'page.task.complete_button', 'language' => 'de', 'section' => 'pages.task', 'value' => 'Vervollständigen', 'type' => 'text'],
            ['key' => 'page.task.complete_button', 'language' => 'fr', 'section' => 'pages.task', 'value' => 'Compléter', 'type' => 'text'],

            // ========== ERROR PAGES ==========
            ['key' => 'page.error.title_404', 'language' => 'en', 'section' => 'pages.error', 'value' => 'Page Not Found', 'type' => 'text'],
            ['key' => 'page.error.title_404', 'language' => 'de', 'section' => 'pages.error', 'value' => 'Seite Nicht Gefunden', 'type' => 'text'],
            ['key' => 'page.error.title_404', 'language' => 'fr', 'section' => 'pages.error', 'value' => 'Page Non Trouvée', 'type' => 'text'],

            ['key' => 'page.error.message_404', 'language' => 'en', 'section' => 'pages.error', 'value' => 'The page you are looking for does not exist.', 'type' => 'text'],
            ['key' => 'page.error.message_404', 'language' => 'de', 'section' => 'pages.error', 'value' => 'Die gesuchte Seite existiert nicht.', 'type' => 'text'],
            ['key' => 'page.error.message_404', 'language' => 'fr', 'section' => 'pages.error', 'value' => 'La page que vous recherchez n\'existe pas.', 'type' => 'text'],

            ['key' => 'page.error.title_401', 'language' => 'en', 'section' => 'pages.error', 'value' => 'Unauthorized', 'type' => 'text'],
            ['key' => 'page.error.title_401', 'language' => 'de', 'section' => 'pages.error', 'value' => 'Nicht Autorisiert', 'type' => 'text'],
            ['key' => 'page.error.title_401', 'language' => 'fr', 'section' => 'pages.error', 'value' => 'Non Autorisé', 'type' => 'text'],

            ['key' => 'page.error.message_401', 'language' => 'en', 'section' => 'pages.error', 'value' => 'You are not authorized to access this page.', 'type' => 'text'],
            ['key' => 'page.error.message_401', 'language' => 'de', 'section' => 'pages.error', 'value' => 'Sie sind nicht berechtigt, auf diese Seite zuzugreifen.', 'type' => 'text'],
            ['key' => 'page.error.message_401', 'language' => 'fr', 'section' => 'pages.error', 'value' => 'Vous n\'êtes pas autorisé à accéder à cette page.', 'type' => 'text'],

            // ========== FOOTER ==========
            ['key' => 'footer.copyright', 'language' => 'en', 'section' => 'footer', 'value' => '© 2026 Mundial. All rights reserved.', 'type' => 'text'],
            ['key' => 'footer.copyright', 'language' => 'de', 'section' => 'footer', 'value' => '© 2026 Mundial. Alle Rechte vorbehalten.', 'type' => 'text'],
            ['key' => 'footer.copyright', 'language' => 'fr', 'section' => 'footer', 'value' => '© 2026 Mundial. Tous droits réservés.', 'type' => 'text'],

            ['key' => 'footer.about', 'language' => 'en', 'section' => 'footer', 'value' => 'About Us', 'type' => 'text'],
            ['key' => 'footer.about', 'language' => 'de', 'section' => 'footer', 'value' => 'Über Uns', 'type' => 'text'],
            ['key' => 'footer.about', 'language' => 'fr', 'section' => 'footer', 'value' => 'À Propos de Nous', 'type' => 'text'],

            ['key' => 'footer.privacy', 'language' => 'en', 'section' => 'footer', 'value' => 'Privacy Policy', 'type' => 'text'],
            ['key' => 'footer.privacy', 'language' => 'de', 'section' => 'footer', 'value' => 'Datenschutzrichtlinie', 'type' => 'text'],
            ['key' => 'footer.privacy', 'language' => 'fr', 'section' => 'footer', 'value' => 'Politique de Confidentialité', 'type' => 'text'],

            ['key' => 'footer.terms', 'language' => 'en', 'section' => 'footer', 'value' => 'Terms & Conditions', 'type' => 'text'],
            ['key' => 'footer.terms', 'language' => 'de', 'section' => 'footer', 'value' => 'Allgemeine Geschäftsbedingungen', 'type' => 'text'],
            ['key' => 'footer.terms', 'language' => 'fr', 'section' => 'footer', 'value' => 'Conditions Générales', 'type' => 'text'],

            // ========== BUTTONS & COMMON TEXT ==========
            ['key' => 'button.submit', 'language' => 'en', 'section' => 'common', 'value' => 'Submit', 'type' => 'text'],
            ['key' => 'button.submit', 'language' => 'de', 'section' => 'common', 'value' => 'Absenden', 'type' => 'text'],
            ['key' => 'button.submit', 'language' => 'fr', 'section' => 'common', 'value' => 'Soumettre', 'type' => 'text'],

            ['key' => 'button.cancel', 'language' => 'en', 'section' => 'common', 'value' => 'Cancel', 'type' => 'text'],
            ['key' => 'button.cancel', 'language' => 'de', 'section' => 'common', 'value' => 'Abbrechen', 'type' => 'text'],
            ['key' => 'button.cancel', 'language' => 'fr', 'section' => 'common', 'value' => 'Annuler', 'type' => 'text'],

            ['key' => 'button.learn_more', 'language' => 'en', 'section' => 'common', 'value' => 'Learn More', 'type' => 'text'],
            ['key' => 'button.learn_more', 'language' => 'de', 'section' => 'common', 'value' => 'Mehr Erfahren', 'type' => 'text'],
            ['key' => 'button.learn_more', 'language' => 'fr', 'section' => 'common', 'value' => 'En Savoir Plus', 'type' => 'text'],

            ['key' => 'button.contact_us', 'language' => 'en', 'section' => 'common', 'value' => 'Contact Us', 'type' => 'text'],
            ['key' => 'button.contact_us', 'language' => 'de', 'section' => 'common', 'value' => 'Kontaktieren Sie Uns', 'type' => 'text'],
            ['key' => 'button.contact_us', 'language' => 'fr', 'section' => 'common', 'value' => 'Nous Contacter', 'type' => 'text'],

            ['key' => 'button.password', 'language' => 'en', 'section' => 'common', 'value' => 'Password', 'type' => 'text'],
            ['key' => 'button.password', 'language' => 'de', 'section' => 'common', 'value' => 'Passwort', 'type' => 'text'],
            ['key' => 'button.password', 'language' => 'fr', 'section' => 'common', 'value' => 'Mot de passe', 'type' => 'text'],

            ['key' => 'button.buy_now', 'language' => 'en', 'section' => 'common', 'value' => 'Buy Now', 'type' => 'text'],
            ['key' => 'button.buy_now', 'language' => 'de', 'section' => 'common', 'value' => 'Jetzt Kaufen', 'type' => 'text'],
            ['key' => 'button.buy_now', 'language' => 'fr', 'section' => 'common', 'value' => 'Acheter Maintenant', 'type' => 'text'],
        ];

        foreach ($translations as $trans) {
            Translation::updateOrCreate(
                ['key' => $trans['key'], 'language' => $trans['language']],
                $trans
            );
        }
    }
}
