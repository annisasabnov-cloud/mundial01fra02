<?php

namespace Database\Seeders;

use App\Models\SectionContent;
use App\Models\Translation;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ============================================
        // GENERIC SECTION CONTENTS
        // Sections yang dapat digunakan di berbagai halaman
        // ============================================
        
        $contents = [
            // Hero Section - untuk halaman dengan hero banner
            [
                'section_key' => 'hero_section',
                'content_type' => 'mixed',
                'sort_order' => 1,
                'is_visible' => true,
                'css_class' => 'hero-banner',
                'image' => null,
                'icon' => null,
                'translations' => [
                    'en' => [
                        'title' => 'Welcome to Mundial',
                        'subtitle' => 'Your International Partner',
                        'description' => 'We provide comprehensive solutions for your business needs worldwide.',
                        'button_text' => 'Get Started',
                        'button_link' => '/start',
                    ],
                    'de' => [
                        'title' => 'Willkommen bei Mundial',
                        'subtitle' => 'Ihr internationaler Partner',
                        'description' => 'Wir bieten umfassende Lösungen für Ihre geschäftlichen Anforderungen weltweit.',
                        'button_text' => 'Loslegen',
                        'button_link' => '/start',
                    ],
                    'fr' => [
                        'title' => 'Bienvenue chez Mundial',
                        'subtitle' => 'Votre partenaire international',
                        'description' => 'Nous fournissons des solutions complètes pour vos besoins commerciaux dans le monde entier.',
                        'button_text' => 'Commencer',
                        'button_link' => '/start',
                    ],
                ]
            ],
            
            // Features Section
            [
                'section_key' => 'features_section',
                'content_type' => 'text',
                'sort_order' => 2,
                'is_visible' => true,
                'css_class' => 'features-section',
                'image' => null,
                'icon' => null,
                'translations' => [
                    'en' => [
                        'title' => 'Our Features',
                        'subtitle' => 'What Makes Us Different',
                        'description' => 'Experience cutting-edge solutions designed for modern businesses.',
                        'button_text' => 'Learn More',
                        'button_link' => '/about',
                    ],
                    'de' => [
                        'title' => 'Unsere Funktionen',
                        'subtitle' => 'Was uns unterscheidet',
                        'description' => 'Erleben Sie hochmoderne Lösungen für moderne Unternehmen.',
                        'button_text' => 'Mehr erfahren',
                        'button_link' => '/about',
                    ],
                    'fr' => [
                        'title' => 'Nos fonctionnalités',
                        'subtitle' => 'Ce qui nous différencie',
                        'description' => 'Découvrez des solutions de pointe conçues pour les entreprises modernes.',
                        'button_text' => 'En savoir plus',
                        'button_link' => '/about',
                    ],
                ]
            ],

            // Services Section
            [
                'section_key' => 'services_section',
                'content_type' => 'mixed',
                'sort_order' => 3,
                'is_visible' => true,
                'css_class' => 'services-grid',
                'image' => null,
                'icon' => null,
                'translations' => [
                    'en' => [
                        'title' => 'Our Services',
                        'subtitle' => 'Complete Solutions',
                        'description' => 'From consulting to implementation, we provide end-to-end services.',
                        'button_text' => 'View All',
                        'button_link' => '/services',
                    ],
                    'de' => [
                        'title' => 'Unsere Dienstleistungen',
                        'subtitle' => 'Komplette Lösungen',
                        'description' => 'Von der Beratung bis zur Umsetzung bieten wir umfassende Services.',
                        'button_text' => 'Alle ansehen',
                        'button_link' => '/services',
                    ],
                    'fr' => [
                        'title' => 'Nos services',
                        'subtitle' => 'Solutions complètes',
                        'description' => 'Du conseil à la mise en œuvre, nous vous proposons des services complets.',
                        'button_text' => 'Voir tous',
                        'button_link' => '/services',
                    ],
                ]
            ],

            // Pricing Section
            [
                'section_key' => 'pricing_section',
                'content_type' => 'mixed',
                'sort_order' => 4,
                'is_visible' => true,
                'css_class' => 'pricing-cards',
                'image' => null,
                'icon' => null,
                'translations' => [
                    'en' => [
                        'title' => 'Simple Pricing',
                        'subtitle' => 'Choose Your Plan',
                        'description' => 'Transparent pricing with no hidden fees. Scale as you grow.',
                        'button_text' => 'View Pricing',
                        'button_link' => '/preise',
                    ],
                    'de' => [
                        'title' => 'Einfache Preisgestaltung',
                        'subtitle' => 'Wählen Sie Ihren Plan',
                        'description' => 'Transparente Preisgestaltung ohne versteckte Gebühren. Skaliert mit Ihrem Wachstum.',
                        'button_text' => 'Preise anzeigen',
                        'button_link' => '/preise',
                    ],
                    'fr' => [
                        'title' => 'Tarification simple',
                        'subtitle' => 'Choisissez votre forfait',
                        'description' => 'Tarification transparente sans frais cachés. Évoluez à mesure que vous grandissez.',
                        'button_text' => 'Voir la tarification',
                        'button_link' => '/preise',
                    ],
                ]
            ],

            // CTA Section (Call-To-Action)
            [
                'section_key' => 'cta_section',
                'content_type' => 'text',
                'sort_order' => 5,
                'is_visible' => true,
                'css_class' => 'cta-banner',
                'image' => null,
                'icon' => null,
                'translations' => [
                    'en' => [
                        'title' => 'Ready to Get Started?',
                        'subtitle' => 'Join Thousands of Happy Customers',
                        'description' => 'Start your free trial today and transform your business.',
                        'button_text' => 'Start Free Trial',
                        'button_link' => '/kontakt',
                    ],
                    'de' => [
                        'title' => 'Bereit zu starten?',
                        'subtitle' => 'Schließen Sie sich Tausenden zufriedener Kunden an',
                        'description' => 'Starten Sie noch heute Ihre kostenlose Testversion.',
                        'button_text' => 'Kostenlos testen',
                        'button_link' => '/kontakt',
                    ],
                    'fr' => [
                        'title' => 'Prêt à commencer?',
                        'subtitle' => 'Rejoignez des milliers de clients heureux',
                        'description' => 'Commencez votre essai gratuit aujourd\'hui.',
                        'button_text' => 'Essai gratuit',
                        'button_link' => '/kontakt',
                    ],
                ]
            ],

            // Footer Section
            [
                'section_key' => 'footer_section',
                'content_type' => 'text',
                'sort_order' => 6,
                'is_visible' => true,
                'css_class' => 'footer-content',
                'image' => null,
                'icon' => null,
                'translations' => [
                    'en' => [
                        'title' => 'About Mundial',
                        'subtitle' => 'Leading Innovation',
                        'description' => 'More than 10 years of experience delivering world-class solutions.',
                        'button_text' => 'Learn More',
                        'button_link' => '#',
                    ],
                    'de' => [
                        'title' => 'Über Mundial',
                        'subtitle' => 'Führende Innovation',
                        'description' => 'Mehr als 10 Jahre Erfahrung bei der Bereitstellung von Weltklasse-Lösungen.',
                        'button_text' => 'Mehr erfahren',
                        'button_link' => '#',
                    ],
                    'fr' => [
                        'title' => 'À propos de Mundial',
                        'subtitle' => 'Innovation leader',
                        'description' => 'Plus de 10 ans d\'expérience dans la fourniture de solutions de classe mondiale.',
                        'button_text' => 'En savoir plus',
                        'button_link' => '#',
                    ],
                ]
            ],

            // About Section
            [
                'section_key' => 'about_section',
                'content_type' => 'mixed',
                'sort_order' => 7,
                'is_visible' => true,
                'css_class' => 'about-content',
                'image' => null,
                'icon' => null,
                'translations' => [
                    'en' => [
                        'title' => 'About Us',
                        'subtitle' => 'Our Journey',
                        'description' => 'Founded in 2016, Mundial has been delivering innovative solutions to businesses worldwide.',
                        'button_text' => 'Our Team',
                        'button_link' => '/team',
                    ],
                    'de' => [
                        'title' => 'Über Uns',
                        'subtitle' => 'Unser Weg',
                        'description' => 'Seit 2016 liefert Mundial innovative Lösungen für Unternehmen weltweit.',
                        'button_text' => 'Unser Team',
                        'button_link' => '/team',
                    ],
                    'fr' => [
                        'title' => 'À propos de nous',
                        'subtitle' => 'Notre parcours',
                        'description' => 'Depuis 2016, Mundial fournit des solutions innovantes aux entreprises du monde entier.',
                        'button_text' => 'Notre équipe',
                        'button_link' => '/team',
                    ],
                ]
            ],

            // Testimonials Section
            [
                'section_key' => 'testimonials_section',
                'content_type' => 'text',
                'sort_order' => 8,
                'is_visible' => true,
                'css_class' => 'testimonials-carousel',
                'image' => null,
                'icon' => null,
                'translations' => [
                    'en' => [
                        'title' => 'What Our Clients Say',
                        'subtitle' => 'Success Stories',
                        'description' => 'Hear from our satisfied customers about their experience with Mundial.',
                        'button_text' => 'Read Stories',
                        'button_link' => '/testimonials',
                    ],
                    'de' => [
                        'title' => 'Was unsere Kunden sagen',
                        'subtitle' => 'Erfolggeschichten',
                        'description' => 'Hören Sie von unseren zufriedenen Kunden von ihrem Erlebnis mit Mundial.',
                        'button_text' => 'Geschichten lesen',
                        'button_link' => '/testimonials',
                    ],
                    'fr' => [
                        'title' => 'Ce que disent nos clients',
                        'subtitle' => 'Histoires de succès',
                        'description' => 'Écoutez les clients satisfaits parler de leur expérience avec Mundial.',
                        'button_text' => 'Lire les histoires',
                        'button_link' => '/testimonials',
                    ],
                ]
            ],
        ];

        // Insert section contents
        foreach ($contents as $content) {
            $translations = $content['translations'];
            unset($content['translations']);

            // Prepare JSON translations
            $titleTrans = [];
            $subtitleTrans = [];
            $descriptionTrans = [];
            $buttonTextTrans = [];
            $buttonLinkTrans = [];

            foreach ($translations as $locale => $trans) {
                $titleTrans[$locale] = $trans['title'];
                $subtitleTrans[$locale] = $trans['subtitle'];
                $descriptionTrans[$locale] = $trans['description'];
                $buttonTextTrans[$locale] = $trans['button_text'];
                $buttonLinkTrans[$locale] = $trans['button_link'];
            }

            SectionContent::create([
                ...$content,
                'title' => $titleTrans,
                'subtitle' => $subtitleTrans,
                'description' => $descriptionTrans,
                'button_text' => $buttonTextTrans,
                'button_link' => $buttonLinkTrans,
            ]);
        }

        // ============================================
        // GLOBAL TRANSLATIONS
        // ============================================
        
        $globalTranslations = [
            // Site title
            [
                'key' => 'site.title',
                'language' => 'en',
                'section' => null,
                'value' => 'Mundial - Global Solutions',
                'type' => 'text',
            ],
            [
                'key' => 'site.title',
                'language' => 'de',
                'section' => null,
                'value' => 'Mundial - Globale Lösungen',
                'type' => 'text',
            ],
            [
                'key' => 'site.title',
                'language' => 'fr',
                'section' => null,
                'value' => 'Mundial - Solutions Mondiales',
                'type' => 'text',
            ],
            // Footer copyright
            [
                'key' => 'footer.copyright',
                'language' => 'en',
                'section' => 'footer',
                'value' => '© 2026 Mundial. All rights reserved.',
                'type' => 'text',
            ],
            [
                'key' => 'footer.copyright',
                'language' => 'de',
                'section' => 'footer',
                'value' => '© 2026 Mundial. Alle Rechte vorbehalten.',
                'type' => 'text',
            ],
            [
                'key' => 'footer.copyright',
                'language' => 'fr',
                'section' => 'footer',
                'value' => '© 2026 Mundial. Tous droits réservés.',
                'type' => 'text',
            ],
            // Navigation
            [
                'key' => 'nav.home',
                'language' => 'en',
                'section' => 'navigation',
                'value' => 'Home',
                'type' => 'text',
            ],
            [
                'key' => 'nav.home',
                'language' => 'de',
                'section' => 'navigation',
                'value' => 'Startseite',
                'type' => 'text',
            ],
            [
                'key' => 'nav.home',
                'language' => 'fr',
                'section' => 'navigation',
                'value' => 'Accueil',
                'type' => 'text',
            ],
            [
                'key' => 'nav.about',
                'language' => 'en',
                'section' => 'navigation',
                'value' => 'About',
                'type' => 'text',
            ],
            [
                'key' => 'nav.about',
                'language' => 'de',
                'section' => 'navigation',
                'value' => 'Über uns',
                'type' => 'text',
            ],
            [
                'key' => 'nav.about',
                'language' => 'fr',
                'section' => 'navigation',
                'value' => 'À propos',
                'type' => 'text',
            ],
            [
                'key' => 'nav.services',
                'language' => 'en',
                'section' => 'navigation',
                'value' => 'Services',
                'type' => 'text',
            ],
            [
                'key' => 'nav.services',
                'language' => 'de',
                'section' => 'navigation',
                'value' => 'Dienstleistungen',
                'type' => 'text',
            ],
            [
                'key' => 'nav.services',
                'language' => 'fr',
                'section' => 'navigation',
                'value' => 'Services',
                'type' => 'text',
            ],
            [
                'key' => 'nav.contact',
                'language' => 'en',
                'section' => 'navigation',
                'value' => 'Contact',
                'type' => 'text',
            ],
            [
                'key' => 'nav.contact',
                'language' => 'de',
                'section' => 'navigation',
                'value' => 'Kontakt',
                'type' => 'text',
            ],
            [
                'key' => 'nav.contact',
                'language' => 'fr',
                'section' => 'navigation',
                'value' => 'Contact',
                'type' => 'text',
            ],
        ];

        foreach ($globalTranslations as $trans) {
            Translation::create($trans);
        }
    }
}
