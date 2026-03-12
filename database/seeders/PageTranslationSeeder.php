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
            ['key' => 'nav.home', 'language' => 'id', 'section' => 'navigation', 'value' => 'Beranda', 'type' => 'text'],
            ['key' => 'nav.home', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Accueil', 'type' => 'text'],

            ['key' => 'nav.start', 'language' => 'en', 'section' => 'navigation', 'value' => 'Start', 'type' => 'text'],
            ['key' => 'nav.start', 'language' => 'id', 'section' => 'navigation', 'value' => 'Mulai', 'type' => 'text'],
            ['key' => 'nav.start', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Démarrer', 'type' => 'text'],

            ['key' => 'nav.offers', 'language' => 'en', 'section' => 'navigation', 'value' => 'Offers', 'type' => 'text'],
            ['key' => 'nav.offers', 'language' => 'id', 'section' => 'navigation', 'value' => 'Penawaran', 'type' => 'text'],
            ['key' => 'nav.offers', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Offres', 'type' => 'text'],

            ['key' => 'nav.pricing', 'language' => 'en', 'section' => 'navigation', 'value' => 'Pricing', 'type' => 'text'],
            ['key' => 'nav.pricing', 'language' => 'id', 'section' => 'navigation', 'value' => 'Harga', 'type' => 'text'],
            ['key' => 'nav.pricing', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Tarification', 'type' => 'text'],

            ['key' => 'nav.contact', 'language' => 'en', 'section' => 'navigation', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'nav.contact', 'language' => 'id', 'section' => 'navigation', 'value' => 'Hubungi Kami', 'type' => 'text'],
            ['key' => 'nav.contact', 'language' => 'fr', 'section' => 'navigation', 'value' => 'Contact', 'type' => 'text'],

            // ========== HOME PAGE ==========
            ['key' => 'page.home.title', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Home - Mundial', 'type' => 'text'],
            ['key' => 'page.home.title', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Beranda - Mundial', 'type' => 'text'],
            ['key' => 'page.home.title', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Accueil - Mundial', 'type' => 'text'],

            ['key' => 'page.home.heading', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Welcome to Mundial', 'type' => 'text'],
            ['key' => 'page.home.heading', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Selamat Datang di Mundial', 'type' => 'text'],
            ['key' => 'page.home.heading', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Bienvenue chez Mundial', 'type' => 'text'],

            ['key' => 'page.home.subtitle', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Your Trusted Global Partner', 'type' => 'text'],
            ['key' => 'page.home.subtitle', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Mitra Global Terpercaya Anda', 'type' => 'text'],
            ['key' => 'page.home.subtitle', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Votre partenaire mondial de confiance', 'type' => 'text'],

            ['key' => 'page.home.description', 'language' => 'en', 'section' => 'pages.home', 'value' => 'We provide world-class solutions for your international business needs.', 'type' => 'text'],
            ['key' => 'page.home.description', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Kami menyediakan solusi kelas dunia untuk kebutuhan bisnis internasional Anda.', 'type' => 'text'],
            ['key' => 'page.home.description', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Nous proposons des solutions de classe mondiale pour vos besoins commerciaux internationaux.', 'type' => 'text'],

            // ========== HOME PAGE - HERO SECTION (SECTION 2) ==========
            ['key' => 'page.home.hero2.heading', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Welcome to Mundial', 'type' => 'text'],
            ['key' => 'page.home.hero2.heading', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Selamat Datang di Mundial', 'type' => 'text'],
            ['key' => 'page.home.hero2.heading', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Bienvenue chez Mundial', 'type' => 'text'],

            ['key' => 'page.home.hero2.body', 'language' => 'en', 'section' => 'pages.home', 'value' => 'The Mundial Leisure Center is a modern and beautiful place, in the midst of nature. Our offerings include sports as well as relaxation. In addition, our bistro serves delicious food and quality drinks.<br><br>Here, you can find many leisure activities for you, your friends, and family. We also organize Christmas parties and birthday parties for everyone. Discover our leisure center now on the Internet. Let yourself be surprised by our great offers!', 'type' => 'html'],
            ['key' => 'page.home.hero2.body', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Pusat Hiburan Mundial adalah tempat yang modern dan indah, di tengah alam. Penawaran kami mencakup olahraga sekaligus relaksasi. <br>Selain itu, bistro kami menyajikan makanan lezat dan minuman berkualitas.<br><br>Di sini, Anda bisa menemukan banyak aktivitas hiburan untuk Anda, teman, dan keluarga. Kami juga menyelenggarakan pesta Natal dan pesta ulang tahun untuk semua orang. Temukan pusat hiburan kami sekarang di Internet. Biarkan diri Anda terkejut dengan penawaran besar kami!', 'type' => 'html'],
            ['key' => 'page.home.hero2.body', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Le Centre de Loisirs Mundial est un endroit moderne et magnifique, au cœur de la nature. Nos offres comprennent aussi bien le sport que la détente. <br>De plus, notre bistro sert de délicieux plats et des boissons de qualité.<br><br>Ici, vous pouvez trouver de nombreuses activités de loisirs pour vous, vos amis et votre famille. Nous organisons également des fêtes de Noël et des anniversaires pour tout le monde. Découvrez notre centre de loisirs maintenant sur Internet. Laissez-vous surprendre par nos grandes offres !', 'type' => 'html'],

            // ========== HOME PAGE - SAUNA / FEATURE SECTION (SECTION 3) ==========
            ['key' => 'page.home.sauna.heading', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Treat Yourself to Relaxation Time', 'type' => 'text'],
            ['key' => 'page.home.sauna.heading', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Manjakan Diri Anda dengan Waktu Relaksasi', 'type' => 'text'],
            ['key' => 'page.home.sauna.heading', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Accordez-vous un moment de détente', 'type' => 'text'],

            ['key' => 'page.home.sauna.body', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Our <a href="%sauna_url%" class="link-9">sauna area</a> covers about 1,500 m². Experience the charm of warmth in one of our five saunas with different temperatures (two indoor saunas and three outdoor saunas). In both winter and summer, the sauna is a special form of heat-cold treatment that improves health and relaxation. The sauna stimulates metabolism, stabilizes the cardiovascular system, and helps train the vascular system. We recommend three sessions, as additional sessions do not provide other health benefits and can cause bodily fatigue.', 'type' => 'html'],
            ['key' => 'page.home.sauna.body', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Area <a href="%sauna_url%" class="link-9">sauna kami</a> mencakup sekitar 1.500 m². Rasakan pesona kehangatan di salah satu dari lima sauna kami dengan suhu berbeda (dua sauna dalam ruangan dan tiga sauna luar ruangan). Baik di musim dingin maupun musim panas, sauna adalah bentuk perawatan panas-dingin khusus yang meningkatkan kesehatan dan relaksasi. Sauna merangsang metabolisme, menstabilkan sistem kardiovaskular, dan membantu melatih sistem pembuluh darah. Kami merekomendasikan tiga sesi, karena sesi tambahan tidak memberikan manfaat kesehatan lain dan dapat menyebabkan kelelahan fungsi tubuh.', 'type' => 'html'],
            ['key' => 'page.home.sauna.body', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Notre <a href="%sauna_url%" class="link-9">espace sauna</a> couvre environ 1 500 m². Vivez le charme de la chaleur dans l\'un de nos cinq saunas à différentes températures (deux saunas intérieurs et trois saunas extérieurs). En hiver comme en été, le sauna est une forme spéciale de traitement chaud-froid qui améliore la santé et la relaxation. Le sauna stimule le métabolisme, stabilise le système cardiovasculaire et aide à entraîner le système vasculaire. Nous recommandons trois séances, car des séances supplémentaires n\'apportent pas d\'autres avantages pour la santé et peuvent provoquer de la fatigue.', 'type' => 'html'],

            // ========== HOME PAGE - POOL SECTION (SECTION 4) ==========
            ['key' => 'page.home.pool.heading', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Need a Fresh Environment?', 'type' => 'text'],
            ['key' => 'page.home.pool.heading', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Butuh Suasana Baru?', 'type' => 'text'],
            ['key' => 'page.home.pool.heading', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Besoin d\'un nouvel environnement ?', 'type' => 'text'],

            ['key' => 'page.home.pool.body', 'language' => 'en', 'section' => 'pages.home', 'value' => '<a href="%pool_url%" class="link-10">Our natural swimming pool</a> offers bathing water quality equivalent to a natural lake or deep pond. Enjoy the natural swimming pleasure in water without chlorine or chemicals. With beautiful natural scenery, you can relax here.', 'type' => 'html'],
            ['key' => 'page.home.pool.body', 'language' => 'id', 'section' => 'pages.home', 'value' => '<a href="%pool_url%" class="link-10">Kolam renang alami kami</a> menawarkan air mandi berkualitas setara dengan danau alam atau kolam dalam. Nikmati kesenangan berenang alami di air tanpa klorin atau bahan kimia. Dengan pemandangan alam yang indah, Anda bisa bersantai di sini.', 'type' => 'html'],
            ['key' => 'page.home.pool.body', 'language' => 'fr', 'section' => 'pages.home', 'value' => '<a href="%pool_url%" class="link-10">Notre piscine naturelle</a> offre une qualité d\'eau de baignade équivalente à un lac naturel ou un étang profond. Profitez du plaisir de nager naturellement dans une eau sans chlore ni produits chimiques. Avec un magnifique cadre naturel, vous pouvez vous détendre ici.', 'type' => 'html'],

            // ========== HOME PAGE - CARDS / OFFERS SECTION ==========
            ['key' => 'page.home.cards.heading', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Our Offers', 'type' => 'text'],
            ['key' => 'page.home.cards.heading', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Penawaran Kami', 'type' => 'text'],
            ['key' => 'page.home.cards.heading', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Nos Offres', 'type' => 'text'],

            ['key' => 'page.home.cards.pool.title', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Swimming Pool', 'type' => 'text'],
            ['key' => 'page.home.cards.pool.title', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Kolam Renang', 'type' => 'text'],
            ['key' => 'page.home.cards.pool.title', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Piscine', 'type' => 'text'],

            ['key' => 'page.home.cards.pool.desc', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Swimming is healthy and strengthens body and soul. Enjoy swimming in a pleasant atmosphere in our indoor pool. Available for all tastes, from young to old.', 'type' => 'text'],
            ['key' => 'page.home.cards.pool.desc', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Berenang itu menyehatkan dan memperkuat jiwa dan raga. Nikmati berenang dalam suasana yang menyenangkan di kolam renang dalam ruangan kami. Ada untuk semua selera, dari yang muda hingga yang tua.', 'type' => 'text'],
            ['key' => 'page.home.cards.pool.desc', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'La natation est saine et renforce le corps et l\'âme. Profitez de la natation dans une atmosphère agréable dans notre piscine couverte. Accessible à tous les goûts, des jeunes aux moins jeunes.', 'type' => 'text'],

            ['key' => 'page.home.cards.sauna.title', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'page.home.cards.sauna.title', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Sauna', 'type' => 'text'],
            ['key' => 'page.home.cards.sauna.title', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Sauna', 'type' => 'text'],

            ['key' => 'page.home.cards.sauna.desc', 'language' => 'en', 'section' => 'pages.home', 'value' => 'In both winter and summer, the sauna is a special form of heat-cold treatment that improves health and relaxation. The sauna stimulates metabolism, stabilizes the cardiovascular system, and helps train the vascular system.', 'type' => 'text'],
            ['key' => 'page.home.cards.sauna.desc', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Baik di musim dingin maupun musim panas, sauna adalah bentuk perawatan panas-dingin khusus yang meningkatkan kesehatan dan relaksasi. Sauna merangsang metabolisme, menstabilkan sistem kardiovaskular, dan membantu melatih sistem pembuluh darah.', 'type' => 'text'],
            ['key' => 'page.home.cards.sauna.desc', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'En hiver comme en été, le sauna est une forme spéciale de traitement chaud-froid qui améliore la santé et la relaxation. Le sauna stimule le métabolisme, stabilise le système cardiovasculaire et aide à entraîner le système vasculaire.', 'type' => 'text'],

            ['key' => 'page.home.cards.birthday.title', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Birthday Party', 'type' => 'text'],
            ['key' => 'page.home.cards.birthday.title', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Pesta Ulang Tahun', 'type' => 'text'],
            ['key' => 'page.home.cards.birthday.title', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Fête d\'anniversaire', 'type' => 'text'],

            ['key' => 'page.home.cards.birthday.desc', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Start the new year of your active sporting life. Celebrate your birthday party on the bowling alley. Come and have fun on our bowling lanes!', 'type' => 'text'],
            ['key' => 'page.home.cards.birthday.desc', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Mulailah tahun baru kehidupan olahraga Anda yang aktif. Rayakan pesta ulang tahun di lintasan bowling. Datang dan bersenang-senang di lintasan bowling kami!', 'type' => 'text'],
            ['key' => 'page.home.cards.birthday.desc', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Commencez la nouvelle année de votre vie sportive active. Célébrez votre fête d\'anniversaire sur la piste de bowling. Venez vous amuser sur nos pistes de bowling !', 'type' => 'text'],

            ['key' => 'page.home.cards.learn_more', 'language' => 'en', 'section' => 'pages.home', 'value' => 'Learn more', 'type' => 'text'],
            ['key' => 'page.home.cards.learn_more', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Pelajari lebih lanjut', 'type' => 'text'],
            ['key' => 'page.home.cards.learn_more', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'En savoir plus', 'type' => 'text'],

            ['key' => 'page.home.cards.view_all', 'language' => 'en', 'section' => 'pages.home', 'value' => 'See All Our Offers', 'type' => 'text'],
            ['key' => 'page.home.cards.view_all', 'language' => 'id', 'section' => 'pages.home', 'value' => 'Lihat Semua Penawaran Kami', 'type' => 'text'],
            ['key' => 'page.home.cards.view_all', 'language' => 'fr', 'section' => 'pages.home', 'value' => 'Voir Toutes Nos Offres', 'type' => 'text'],

            // ========== HOME PAGE - FOOTER LINKS ==========
            ['key' => 'footer.link.offers', 'language' => 'en', 'section' => 'footer', 'value' => 'Offers', 'type' => 'text'],
            ['key' => 'footer.link.offers', 'language' => 'id', 'section' => 'footer', 'value' => 'Penawaran', 'type' => 'text'],
            ['key' => 'footer.link.offers', 'language' => 'fr', 'section' => 'footer', 'value' => 'Offres', 'type' => 'text'],

            ['key' => 'footer.link.pricing', 'language' => 'en', 'section' => 'footer', 'value' => 'Subscriptions & Pricing', 'type' => 'text'],
            ['key' => 'footer.link.pricing', 'language' => 'id', 'section' => 'footer', 'value' => 'Langganan & Harga', 'type' => 'text'],
            ['key' => 'footer.link.pricing', 'language' => 'fr', 'section' => 'footer', 'value' => 'Abonnements & Tarifs', 'type' => 'text'],

            ['key' => 'footer.link.contact', 'language' => 'en', 'section' => 'footer', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'footer.link.contact', 'language' => 'id', 'section' => 'footer', 'value' => 'Kontak', 'type' => 'text'],
            ['key' => 'footer.link.contact', 'language' => 'fr', 'section' => 'footer', 'value' => 'Contact', 'type' => 'text'],

            ['key' => 'footer.copyright_text', 'language' => 'en', 'section' => 'footer', 'value' => 'Copyright © 2023 Mundial.', 'type' => 'text'],
            ['key' => 'footer.copyright_text', 'language' => 'id', 'section' => 'footer', 'value' => 'Hak Cipta © 2023 Mundial.', 'type' => 'text'],
            ['key' => 'footer.copyright_text', 'language' => 'fr', 'section' => 'footer', 'value' => 'Copyright © 2023 Mundial.', 'type' => 'text'],

            // ========== START PAGE ==========
            ['key' => 'page.start.title', 'language' => 'en', 'section' => 'pages.start', 'value' => 'Get Started - Mundial', 'type' => 'text'],
            ['key' => 'page.start.title', 'language' => 'id', 'section' => 'pages.start', 'value' => 'Mulai - Mundial', 'type' => 'text'],
            ['key' => 'page.start.title', 'language' => 'fr', 'section' => 'pages.start', 'value' => 'Démarrer - Mundial', 'type' => 'text'],

            ['key' => 'page.start.heading', 'language' => 'en', 'section' => 'pages.start', 'value' => 'Getting Started with Mundial', 'type' => 'text'],
            ['key' => 'page.start.heading', 'language' => 'id', 'section' => 'pages.start', 'value' => 'Memulai dengan Mundial', 'type' => 'text'],
            ['key' => 'page.start.heading', 'language' => 'fr', 'section' => 'pages.start', 'value' => 'Commencer avec Mundial', 'type' => 'text'],

            ['key' => 'page.start.description', 'language' => 'en', 'section' => 'pages.start', 'value' => 'Follow these simple steps to get started with our services.', 'type' => 'text'],
            ['key' => 'page.start.description', 'language' => 'id', 'section' => 'pages.start', 'value' => 'Ikuti langkah-langkah sederhana ini untuk memulai menggunakan layanan kami.', 'type' => 'text'],
            ['key' => 'page.start.description', 'language' => 'fr', 'section' => 'pages.start', 'value' => 'Suivez ces étapes simples pour commencer avec nos services.', 'type' => 'text'],

            // ========== PRICING PAGE ==========
            ['key' => 'page.pricing.title', 'language' => 'en', 'section' => 'pages.pricing', 'value' => 'Pricing - Mundial', 'type' => 'text'],
            ['key' => 'page.pricing.title', 'language' => 'id', 'section' => 'pages.pricing', 'value' => 'Harga - Mundial', 'type' => 'text'],
            ['key' => 'page.pricing.title', 'language' => 'fr', 'section' => 'pages.pricing', 'value' => 'Tarification - Mundial', 'type' => 'text'],

            ['key' => 'page.pricing.heading', 'language' => 'en', 'section' => 'pages.pricing', 'value' => 'Our Pricing Plans', 'type' => 'text'],
            ['key' => 'page.pricing.heading', 'language' => 'id', 'section' => 'pages.pricing', 'value' => 'Paket Harga Kami', 'type' => 'text'],
            ['key' => 'page.pricing.heading', 'language' => 'fr', 'section' => 'pages.pricing', 'value' => 'Nos Plans Tarifaires', 'type' => 'text'],

            ['key' => 'page.pricing.description', 'language' => 'en', 'section' => 'pages.pricing', 'value' => 'Choose the perfect plan for your needs.', 'type' => 'text'],
            ['key' => 'page.pricing.description', 'language' => 'id', 'section' => 'pages.pricing', 'value' => 'Pilih paket yang sempurna sesuai kebutuhan Anda.', 'type' => 'text'],
            ['key' => 'page.pricing.description', 'language' => 'fr', 'section' => 'pages.pricing', 'value' => 'Choisissez le plan parfait pour vos besoins.', 'type' => 'text'],

            ['key' => 'page.pricing.card_title', 'language' => 'en', 'section' => 'pages.pricing', 'value' => 'Mundial Card - Annual Subscription', 'type' => 'text'],
            ['key' => 'page.pricing.card_title', 'language' => 'id', 'section' => 'pages.pricing', 'value' => 'Kartu Mundial - Langganan Tahunan', 'type' => 'text'],
            ['key' => 'page.pricing.card_title', 'language' => 'fr', 'section' => 'pages.pricing', 'value' => 'Carte Mundial - Abonnement Annuel', 'type' => 'text'],

            ['key' => 'page.pricing.card_description', 'language' => 'en', 'section' => 'pages.pricing', 'value' => 'Enjoy all Mundial leisure center offers throughout the year. Unlimited access to mini golf, bowling, sauna and pool.', 'type' => 'text'],
            ['key' => 'page.pricing.card_description', 'language' => 'id', 'section' => 'pages.pricing', 'value' => 'Nikmati semua penawaran pusat hiburan Mundial sepanjang tahun. Akses tak terbatas ke mini golf, bowling, sauna, dan kolam renang.', 'type' => 'text'],
            ['key' => 'page.pricing.card_description', 'language' => 'fr', 'section' => 'pages.pricing', 'value' => 'Profitez de toutes les offres du centre de loisirs Mundial toute l\'année. Accès illimité au mini-golf, bowling, sauna et piscine.', 'type' => 'text'],

            ['key' => 'page.pricing.card_price', 'language' => 'en', 'section' => 'pages.pricing', 'value' => '1\'420.-', 'type' => 'text'],
            ['key' => 'page.pricing.card_price', 'language' => 'id', 'section' => 'pages.pricing', 'value' => '1\'420.-', 'type' => 'text'],
            ['key' => 'page.pricing.card_price', 'language' => 'fr', 'section' => 'pages.pricing', 'value' => '1\'420.-', 'type' => 'text'],

            // ========== OFFERS PAGE ==========
            ['key' => 'page.offers.title', 'language' => 'en', 'section' => 'pages.offers', 'value' => 'Offers - Mundial', 'type' => 'text'],
            ['key' => 'page.offers.title', 'language' => 'id', 'section' => 'pages.offers', 'value' => 'Penawaran - Mundial', 'type' => 'text'],
            ['key' => 'page.offers.title', 'language' => 'fr', 'section' => 'pages.offers', 'value' => 'Offres - Mundial', 'type' => 'text'],

            ['key' => 'page.offers.heading', 'language' => 'en', 'section' => 'pages.offers', 'value' => 'Our Special Offers', 'type' => 'text'],
            ['key' => 'page.offers.heading', 'language' => 'id', 'section' => 'pages.offers', 'value' => 'Penawaran Spesial Kami', 'type' => 'text'],
            ['key' => 'page.offers.heading', 'language' => 'fr', 'section' => 'pages.offers', 'value' => 'Nos Offres Spéciales', 'type' => 'text'],

            ['key' => 'page.offers.description', 'language' => 'en', 'section' => 'pages.offers', 'value' => 'Check out our exclusive offers available this season.', 'type' => 'text'],
            ['key' => 'page.offers.description', 'language' => 'id', 'section' => 'pages.offers', 'value' => 'Lihat penawaran eksklusif kami yang tersedia musim ini.', 'type' => 'text'],
            ['key' => 'page.offers.description', 'language' => 'fr', 'section' => 'pages.offers', 'value' => 'Découvrez nos offres exclusives disponibles cette saison.', 'type' => 'text'],

            // ========== CONTACT PAGE ==========
            ['key' => 'page.contact.title', 'language' => 'en', 'section' => 'pages.contact', 'value' => 'Contact Us - Mundial', 'type' => 'text'],
            ['key' => 'page.contact.title', 'language' => 'id', 'section' => 'pages.contact', 'value' => 'Hubungi Kami - Mundial', 'type' => 'text'],
            ['key' => 'page.contact.title', 'language' => 'fr', 'section' => 'pages.contact', 'value' => 'Nous Contacter - Mundial', 'type' => 'text'],

            ['key' => 'page.contact.heading', 'language' => 'en', 'section' => 'pages.contact', 'value' => 'Get In Touch', 'type' => 'text'],
            ['key' => 'page.contact.heading', 'language' => 'id', 'section' => 'pages.contact', 'value' => 'Hubungi Kami', 'type' => 'text'],
            ['key' => 'page.contact.heading', 'language' => 'fr', 'section' => 'pages.contact', 'value' => 'Nous Contacter', 'type' => 'text'],

            ['key' => 'page.contact.description', 'language' => 'en', 'section' => 'pages.contact', 'value' => 'We would love to hear from you. Contact us today!', 'type' => 'text'],
            ['key' => 'page.contact.description', 'language' => 'id', 'section' => 'pages.contact', 'value' => 'Kami senang mendengar dari Anda. Hubungi kami sekarang!', 'type' => 'text'],
            ['key' => 'page.contact.description', 'language' => 'fr', 'section' => 'pages.contact', 'value' => 'Nous aimerions vous entendre. Contactez-nous dès aujourd\'hui!', 'type' => 'text'],

            ['key' => 'page.contact.form_title', 'language' => 'en', 'section' => 'pages.contact', 'value' => 'Contact Form', 'type' => 'text'],
            ['key' => 'page.contact.form_title', 'language' => 'id', 'section' => 'pages.contact', 'value' => 'Formulir Kontak', 'type' => 'text'],
            ['key' => 'page.contact.form_title', 'language' => 'fr', 'section' => 'pages.contact', 'value' => 'Formulaire de Contact', 'type' => 'text'],

            // ========== PRICING PAGE - PRICE TABLES ==========
            ['key' => 'preise.pool_table', 'language' => 'en', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Swimming Pool Admission</h3><table class="preise-table"><tr><th></th><th>18 years and over</th><th>6-17 years</th><th>Under 6 years</th></tr><tr><td>Day ticket</td><td>30.-</td><td>20.-</td><td>free</td></tr><tr><td>Regular ticket (3 hours)</td><td>20.-</td><td>15.-</td><td>free</td></tr><tr><td>Regular ticket (1.5 hours)</td><td>15.-</td><td>10.-</td><td>free</td></tr><tr><td>Price/person for 30 additional minutes</td><td>5.-</td><td>5.-</td><td>free</td></tr><tr><td>10x card (Day ticket)</td><td>270.-</td><td>180.-</td><td>free</td></tr><tr><td>10x card (3 hours)</td><td>180.-</td><td>135.-</td><td>free</td></tr><tr><td>10x card (1.5 hours)</td><td>135.-</td><td>90.-</td><td>free</td></tr></table><p><em>Children under 12 must be accompanied by an adult in the indoor pool.</em></p>'],
            ['key' => 'preise.pool_table', 'language' => 'id', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Tiket Masuk Kolam Renang</h3><table class="preise-table"><tr><th></th><th>18 tahun ke atas</th><th>6-17 tahun</th><th>Kurang dari 6 tahun</th></tr><tr><td>Tiket Harian</td><td>30.-</td><td>20.-</td><td>gratis</td></tr><tr><td>Tiket Biasa (3 jam)</td><td>20.-</td><td>15.-</td><td>gratis</td></tr><tr><td>Tiket Biasa (1,5 jam)</td><td>15.-</td><td>10.-</td><td>gratis</td></tr><tr><td>Harga/Orang untuk 30 menit tambahan</td><td>5.-</td><td>5.-</td><td>gratis</td></tr><tr><td>Kartu 10x (Tiket Harian)</td><td>270.-</td><td>180.-</td><td>gratis</td></tr><tr><td>Kartu 10x (3 jam)</td><td>180.-</td><td>135.-</td><td>gratis</td></tr><tr><td>Kartu 10x (1,5 jam)</td><td>135.-</td><td>90.-</td><td>gratis</td></tr></table><p><em>Anak-anak di bawah 12 tahun harus ditemani orang dewasa di kolam renang dalam ruangan.</em></p>'],
            ['key' => 'preise.pool_table', 'language' => 'fr', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Entrée Piscine</h3><table class="preise-table"><tr><th></th><th>Dès 18 ans</th><th>6-17 ans</th><th>Moins de 6 ans</th></tr><tr><td>Billet journalier</td><td>30.-</td><td>20.-</td><td>gratuit</td></tr><tr><td>Billet normal (3 heures)</td><td>20.-</td><td>15.-</td><td>gratuit</td></tr><tr><td>Billet normal (1,5 heure)</td><td>15.-</td><td>10.-</td><td>gratuit</td></tr><tr><td>Prix/personne pour 30 minutes supplémentaires</td><td>5.-</td><td>5.-</td><td>gratuit</td></tr><tr><td>Carte de 10 (Billet journalier)</td><td>270.-</td><td>180.-</td><td>gratuit</td></tr><tr><td>Carte de 10 (3 heures)</td><td>180.-</td><td>135.-</td><td>gratuit</td></tr><tr><td>Carte de 10 (1,5 heure)</td><td>135.-</td><td>90.-</td><td>gratuit</td></tr></table><p><em>Les enfants de moins de 12 ans doivent être accompagnés d\'un adulte dans la piscine couverte.</em></p>'],

            ['key' => 'preise.sauna_table', 'language' => 'en', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Sauna & Steam Room Admission</h3><table class="preise-table"><tr><th></th><th>18 years and over</th><th>6-17 years</th><th>Under 6 years</th></tr><tr><td>Regular ticket (3 hours)</td><td>25.-</td><td>15.-</td><td>Not admitted</td></tr><tr><td>Regular ticket (1.5 hours)</td><td>20.-</td><td>10.-</td><td>Not admitted</td></tr><tr><td>Price/person for 30 additional minutes</td><td>5.-</td><td>5.-</td><td>Not admitted</td></tr><tr><td>10x card (3 hours)</td><td>225.-</td><td>125.-</td><td>Not admitted</td></tr><tr><td>10x card (1.5 hours)</td><td>180.-</td><td>90.-</td><td>Not admitted</td></tr></table><p><em>Children under 16 must be accompanied by an adult in the sauna and steam room.</em></p>'],
            ['key' => 'preise.sauna_table', 'language' => 'id', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Tiket Masuk Sauna dan Pancuran Uap</h3><table class="preise-table"><tr><th></th><th>18 tahun ke atas</th><th>6-17 tahun</th><th>Kurang dari 6 tahun</th></tr><tr><td>Tiket Biasa (3 jam)</td><td>25.-</td><td>15.-</td><td>Dilarang Masuk</td></tr><tr><td>Tiket Biasa (1,5 jam)</td><td>20.-</td><td>10.-</td><td>Dilarang Masuk</td></tr><tr><td>Harga/Orang untuk 30 menit tambahan</td><td>5.-</td><td>5.-</td><td>Dilarang Masuk</td></tr><tr><td>Kartu 10x (3 jam)</td><td>225.-</td><td>125.-</td><td>Dilarang Masuk</td></tr><tr><td>Kartu 10x (1,5 jam)</td><td>180.-</td><td>90.-</td><td>Dilarang Masuk</td></tr></table><p><em>Anak-anak di bawah 16 tahun harus ditemani orang dewasa di sauna dan pancuran uap.</em></p>'],
            ['key' => 'preise.sauna_table', 'language' => 'fr', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Entrée Sauna et Bain de Vapeur</h3><table class="preise-table"><tr><th></th><th>Dès 18 ans</th><th>6-17 ans</th><th>Moins de 6 ans</th></tr><tr><td>Billet normal (3 heures)</td><td>25.-</td><td>15.-</td><td>Non admis</td></tr><tr><td>Billet normal (1,5 heure)</td><td>20.-</td><td>10.-</td><td>Non admis</td></tr><tr><td>Prix/personne pour 30 minutes supplémentaires</td><td>5.-</td><td>5.-</td><td>Non admis</td></tr><tr><td>Carte de 10 (3 heures)</td><td>225.-</td><td>125.-</td><td>Non admis</td></tr><tr><td>Carte de 10 (1,5 heure)</td><td>180.-</td><td>90.-</td><td>Non admis</td></tr></table><p><em>Les enfants de moins de 16 ans doivent être accompagnés d\'un adulte dans le sauna et le bain de vapeur.</em></p>'],

            ['key' => 'preise.bowling_table', 'language' => 'en', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Bowling Lane Admission</h3><table class="preise-table"><tr><th></th><th>18 years and over</th><th>6-17 years</th><th>Under 6 years</th></tr><tr><td>Admission per person for 1 game session</td><td>9.-</td><td>5.-</td><td>free</td></tr><tr><td>10x card</td><td>81.-</td><td>45.-</td><td>free</td></tr></table><p><em>Children under 12 must be accompanied by an adult at the bowling alley.</em></p>'],
            ['key' => 'preise.bowling_table', 'language' => 'id', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Tiket Masuk Lintasan Bowling</h3><table class="preise-table"><tr><th></th><th>18 tahun ke atas</th><th>6-17 tahun</th><th>Kurang dari 6 tahun</th></tr><tr><td>Tiket masuk per orang untuk 1 sesi permainan</td><td>9.-</td><td>5.-</td><td>gratis</td></tr><tr><td>Kartu 10x</td><td>81.-</td><td>45.-</td><td>gratis</td></tr></table><p><em>Anak-anak di bawah 12 tahun harus ditemani orang dewasa di lintasan bowling.</em></p>'],
            ['key' => 'preise.bowling_table', 'language' => 'fr', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Entrée Pistes de Bowling</h3><table class="preise-table"><tr><th></th><th>Dès 18 ans</th><th>6-17 ans</th><th>Moins de 6 ans</th></tr><tr><td>Entrée par personne pour 1 partie</td><td>9.-</td><td>5.-</td><td>gratuit</td></tr><tr><td>Carte de 10</td><td>81.-</td><td>45.-</td><td>gratuit</td></tr></table><p><em>Les enfants de moins de 12 ans doivent être accompagnés d\'un adulte sur les pistes de bowling.</em></p>'],

            ['key' => 'preise.minigolf_table', 'language' => 'en', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Mini Golf Admission</h3><table class="preise-table"><tr><th></th><th>18 years and over</th><th>6-17 years</th><th>Under 6 years</th></tr><tr><td>Admission per person for 1 round</td><td>9.-</td><td>5.-</td><td>free</td></tr><tr><td>10x card</td><td>81.-</td><td>45.-</td><td>free</td></tr></table><p><em>Children under 12 must be accompanied by an adult when playing mini golf.</em></p>'],
            ['key' => 'preise.minigolf_table', 'language' => 'id', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Tiket Masuk Mini Golf</h3><table class="preise-table"><tr><th></th><th>18 tahun ke atas</th><th>6-17 tahun</th><th>Kurang dari 6 tahun</th></tr><tr><td>Tiket masuk per orang untuk 1 putaran</td><td>9.-</td><td>5.-</td><td>gratis</td></tr><tr><td>Kartu 10x</td><td>81.-</td><td>45.-</td><td>gratis</td></tr></table><p><em>Anak-anak di bawah 12 tahun harus ditemani orang dewasa saat bermain mini golf.</em></p>'],
            ['key' => 'preise.minigolf_table', 'language' => 'fr', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Entrée Mini-Golf</h3><table class="preise-table"><tr><th></th><th>Dès 18 ans</th><th>6-17 ans</th><th>Moins de 6 ans</th></tr><tr><td>Entrée par personne pour 1 tour de jeu</td><td>9.-</td><td>5.-</td><td>gratuit</td></tr><tr><td>Carte de 10</td><td>81.-</td><td>45.-</td><td>gratuit</td></tr></table><p><em>Les enfants de moins de 12 ans doivent être accompagnés d\'un adulte lorsqu\'ils jouent au mini-golf.</em></p>'],

            ['key' => 'preise.all_table', 'language' => 'en', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Whole Leisure Center Admission (All Offers)</h3><table class="preise-table"><tr><th></th><th>18 years and over</th><th>6-17 years</th><th>Under 6 years</th></tr><tr><td>Day ticket</td><td>55.-</td><td>45.-</td><td>free</td></tr><tr><td>Regular ticket (3 hours)</td><td>45.-</td><td>35.-</td><td>free</td></tr><tr><td>Regular ticket (1.5 hours)</td><td>35.-</td><td>25.-</td><td>free</td></tr><tr><td>Price/person for 30 additional minutes</td><td>5.-</td><td>5.-</td><td>free</td></tr><tr><td>10x card (Day ticket)</td><td>495.-</td><td>405.-</td><td>free</td></tr><tr><td>10x card (3 hours)</td><td>405.-</td><td>315.-</td><td>free</td></tr><tr><td>10x card (1.5 hours)</td><td>315.-</td><td>225.-</td><td>free</td></tr></table><p><em>In the sauna and steam room, children under 16 must be accompanied by an adult.</em></p>'],
            ['key' => 'preise.all_table', 'language' => 'id', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Tiket Masuk Seluruh Pusat Hiburan (Semua Penawaran)</h3><table class="preise-table"><tr><th></th><th>18 tahun ke atas</th><th>6-17 tahun</th><th>Kurang dari 6 tahun</th></tr><tr><td>Tiket Harian</td><td>55.-</td><td>45.-</td><td>gratis</td></tr><tr><td>Tiket Biasa (3 jam)</td><td>45.-</td><td>35.-</td><td>gratis</td></tr><tr><td>Tiket Biasa (1,5 jam)</td><td>35.-</td><td>25.-</td><td>gratis</td></tr><tr><td>Harga/Orang untuk 30 menit tambahan</td><td>5.-</td><td>5.-</td><td>gratis</td></tr><tr><td>Kartu 10x (Tiket Harian)</td><td>495.-</td><td>405.-</td><td>gratis</td></tr><tr><td>Kartu 10x (3 jam)</td><td>405.-</td><td>315.-</td><td>gratis</td></tr><tr><td>Kartu 10x (1,5 jam)</td><td>315.-</td><td>225.-</td><td>gratis</td></tr></table><p><em>Di sauna dan pancuran uap, anak-anak di bawah 16 tahun harus ditemani orang dewasa.</em></p>'],
            ['key' => 'preise.all_table', 'language' => 'fr', 'section' => 'pages.preise', 'type' => 'html',
             'value' => '<h3>Entrée Tout le Centre de Loisirs (Toutes les Offres)</h3><table class="preise-table"><tr><th></th><th>Dès 18 ans</th><th>6-17 ans</th><th>Moins de 6 ans</th></tr><tr><td>Billet journalier</td><td>55.-</td><td>45.-</td><td>gratuit</td></tr><tr><td>Billet normal (3 heures)</td><td>45.-</td><td>35.-</td><td>gratuit</td></tr><tr><td>Billet normal (1,5 heure)</td><td>35.-</td><td>25.-</td><td>gratuit</td></tr><tr><td>Prix/personne pour 30 minutes supplémentaires</td><td>5.-</td><td>5.-</td><td>gratuit</td></tr><tr><td>Carte de 10 (Billet journalier)</td><td>495.-</td><td>405.-</td><td>gratuit</td></tr><tr><td>Carte de 10 (3 heures)</td><td>405.-</td><td>315.-</td><td>gratuit</td></tr><tr><td>Carte de 10 (1,5 heure)</td><td>315.-</td><td>225.-</td><td>gratuit</td></tr></table><p><em>Dans le sauna et le bain de vapeur, les enfants de moins de 16 ans doivent être accompagnés d\'un adulte.</em></p>'],

            ['key' => 'preise.payment.heading', 'language' => 'en', 'section' => 'pages.preise', 'value' => 'Payment Methods', 'type' => 'text'],
            ['key' => 'preise.payment.heading', 'language' => 'id', 'section' => 'pages.preise', 'value' => 'Metode Pembayaran', 'type' => 'text'],
            ['key' => 'preise.payment.heading', 'language' => 'fr', 'section' => 'pages.preise', 'value' => 'Méthodes de Paiement', 'type' => 'text'],

            ['key' => 'preise.payment.desc', 'language' => 'en', 'section' => 'pages.preise', 'type' => 'text',
             'value' => 'All prices are in Swiss francs. Price changes are possible. You can pay admission with cash (francs or euros), or by bank card.'],
            ['key' => 'preise.payment.desc', 'language' => 'id', 'section' => 'pages.preise', 'type' => 'text',
             'value' => 'Semua harga dalam franc Swiss. Perubahan harga dimungkinkan. Anda dapat membayar tiket masuk dengan tunai (franc atau euro), atau dengan kartu bank.'],
            ['key' => 'preise.payment.desc', 'language' => 'fr', 'section' => 'pages.preise', 'type' => 'text',
             'value' => 'Tous les prix sont en francs suisses. Des changements de prix sont possibles. Vous pouvez payer l\'entrée en espèces (francs ou euros), ou par carte bancaire.'],

            // ========== CONTACT PAGE - FORM ==========
            ['key' => 'kontakt.form.required_note', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => '* Required fields', 'type' => 'text'],
            ['key' => 'kontakt.form.required_note', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => '* Kolom wajib diisi', 'type' => 'text'],
            ['key' => 'kontakt.form.required_note', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => '* Champs obligatoires', 'type' => 'text'],

            ['key' => 'kontakt.form.reason_label', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Contact reason *', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_label', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Alasan kontak *', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_label', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Raison du contact *', 'type' => 'text'],

            ['key' => 'kontakt.form.reason_select', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Please select...', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_select', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Silakan pilih...', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_select', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Veuillez choisir...', 'type' => 'text'],

            ['key' => 'kontakt.form.reason_general', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'General inquiry', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_general', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Pertanyaan umum', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_general', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Demande générale', 'type' => 'text'],

            ['key' => 'kontakt.form.reason_subscription', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Subscription inquiry', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_subscription', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Pertanyaan tentang langganan', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_subscription', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => "Question sur l'abonnement", 'type' => 'text'],

            ['key' => 'kontakt.form.reason_reservation', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Reservation', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_reservation', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Reservasi', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_reservation', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Réservation', 'type' => 'text'],

            ['key' => 'kontakt.form.reason_praise', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Praise and complaints', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_praise', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Pujian dan keluhan', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_praise', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Éloges et plaintes', 'type' => 'text'],

            ['key' => 'kontakt.form.reason_other', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Other', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_other', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Lainnya', 'type' => 'text'],
            ['key' => 'kontakt.form.reason_other', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Autre', 'type' => 'text'],

            ['key' => 'kontakt.form.first_name', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'First Name *', 'type' => 'text'],
            ['key' => 'kontakt.form.first_name', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Nama Depan *', 'type' => 'text'],
            ['key' => 'kontakt.form.first_name', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Prénom *', 'type' => 'text'],

            ['key' => 'kontakt.form.last_name', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Last Name *', 'type' => 'text'],
            ['key' => 'kontakt.form.last_name', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Nama Belakang *', 'type' => 'text'],
            ['key' => 'kontakt.form.last_name', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Nom de famille *', 'type' => 'text'],

            ['key' => 'kontakt.form.email', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'E-mail *', 'type' => 'text'],
            ['key' => 'kontakt.form.email', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'E-mail *', 'type' => 'text'],
            ['key' => 'kontakt.form.email', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'E-mail *', 'type' => 'text'],

            ['key' => 'kontakt.form.phone', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Phone Number', 'type' => 'text'],
            ['key' => 'kontakt.form.phone', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Nomor Telepon', 'type' => 'text'],
            ['key' => 'kontakt.form.phone', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Numéro de téléphone', 'type' => 'text'],

            ['key' => 'kontakt.form.message', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Message *', 'type' => 'text'],
            ['key' => 'kontakt.form.message', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Pesan *', 'type' => 'text'],
            ['key' => 'kontakt.form.message', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Message *', 'type' => 'text'],

            ['key' => 'kontakt.form.submit', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Submit Form', 'type' => 'text'],
            ['key' => 'kontakt.form.submit', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Kirim Formulir', 'type' => 'text'],
            ['key' => 'kontakt.form.submit', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Soumettre le formulaire', 'type' => 'text'],

            ['key' => 'kontakt.form.success', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Thank you! Your submission has been received!', 'type' => 'text'],
            ['key' => 'kontakt.form.success', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Terima kasih! Formulir Anda telah berhasil dikirim!', 'type' => 'text'],
            ['key' => 'kontakt.form.success', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Merci ! Votre soumission a bien été reçue !', 'type' => 'text'],

            ['key' => 'kontakt.form.error', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Oops! Something went wrong while submitting the form.', 'type' => 'text'],
            ['key' => 'kontakt.form.error', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Ups! Terjadi kesalahan saat mengirim formulir.', 'type' => 'text'],
            ['key' => 'kontakt.form.error', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => "Oups ! Une erreur s'est produite lors de l'envoi du formulaire.", 'type' => 'text'],

            // ========== CONTACT PAGE - OPENING HOURS & ADDRESS ==========
            ['key' => 'kontakt.hours.heading', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Opening Hours', 'type' => 'text'],
            ['key' => 'kontakt.hours.heading', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Jam Operasional', 'type' => 'text'],
            ['key' => 'kontakt.hours.heading', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => "Heures d'ouverture", 'type' => 'text'],

            ['key' => 'kontakt.hours.times', 'language' => 'en', 'section' => 'pages.kontakt', 'type' => 'html',
             'value' => 'Mon - Thu: 08:00 - 19:00<br>Fri: 08:00 - 21:00<br>Sat: 09:00 - 17:00<br>Sun: 09:00 - 12:00'],
            ['key' => 'kontakt.hours.times', 'language' => 'id', 'section' => 'pages.kontakt', 'type' => 'html',
             'value' => 'Senin - Kamis : 08.00 - 19.00<br>Jumat : 08.00 - 21.00<br>Sabtu : 09.00 - 17.00<br>Minggu : 09.00 - 12.00'],
            ['key' => 'kontakt.hours.times', 'language' => 'fr', 'section' => 'pages.kontakt', 'type' => 'html',
             'value' => 'Lundi - Jeudi : 08h00 - 19h00<br>Vendredi : 08h00 - 21h00<br>Samedi : 09h00 - 17h00<br>Dimanche : 09h00 - 12h00'],

            ['key' => 'kontakt.contact.heading', 'language' => 'en', 'section' => 'pages.kontakt', 'value' => 'Contact', 'type' => 'text'],
            ['key' => 'kontakt.contact.heading', 'language' => 'id', 'section' => 'pages.kontakt', 'value' => 'Kontak', 'type' => 'text'],
            ['key' => 'kontakt.contact.heading', 'language' => 'fr', 'section' => 'pages.kontakt', 'value' => 'Contact', 'type' => 'text'],

            ['key' => 'kontakt.contact.address', 'language' => 'en', 'section' => 'pages.kontakt', 'type' => 'html',
             'value' => 'Mundial Leisure Center<br>Frohstrasse 32<br>21362 Bringels<br>Phone: 0041 870 23 57 48'],
            ['key' => 'kontakt.contact.address', 'language' => 'id', 'section' => 'pages.kontakt', 'type' => 'html',
             'value' => 'Pusat Hiburan Mundial<br>Frohstrasse 32<br>21362 Bringels<br>Telepon: 0041 870 23 57 48'],
            ['key' => 'kontakt.contact.address', 'language' => 'fr', 'section' => 'pages.kontakt', 'type' => 'html',
             'value' => 'Centre de Loisirs Mundial<br>Frohstrasse 32<br>21362 Bringels<br>Tél: 0041 870 23 57 48'],

            // ========== NO-WAY PAGE ==========
            ['key' => 'page.noway.title', 'language' => 'en', 'section' => 'pages.noway', 'value' => 'No Way - Mundial', 'type' => 'text'],
            ['key' => 'page.noway.title', 'language' => 'id', 'section' => 'pages.noway', 'value' => 'Tidak Bisa - Mundial', 'type' => 'text'],
            ['key' => 'page.noway.title', 'language' => 'fr', 'section' => 'pages.noway', 'value' => 'Interdit - Mundial', 'type' => 'text'],

            ['key' => 'noway.attention.heading', 'language' => 'en', 'section' => 'pages.noway', 'value' => 'Attention', 'type' => 'text'],
            ['key' => 'noway.attention.heading', 'language' => 'id', 'section' => 'pages.noway', 'value' => 'Perhatian', 'type' => 'text'],
            ['key' => 'noway.attention.heading', 'language' => 'fr', 'section' => 'pages.noway', 'value' => 'Attention', 'type' => 'text'],

            ['key' => 'noway.attention.body', 'language' => 'en', 'section' => 'pages.noway', 'value' => 'This page is not needed to complete the task. Please find another way to complete the task.', 'type' => 'text'],
            ['key' => 'noway.attention.body', 'language' => 'id', 'section' => 'pages.noway', 'value' => 'Halaman ini tidak diperlukan untuk menyelesaikan tugas. Silakan temukan cara lain untuk menyelesaikan tugas.', 'type' => 'text'],
            ['key' => 'noway.attention.body', 'language' => 'fr', 'section' => 'pages.noway', 'value' => "Cette page n'est pas nécessaire pour résoudre la tâche. Veuillez trouver un autre moyen de résoudre la tâche.", 'type' => 'text'],

            ['key' => 'noway.attention.button', 'language' => 'en', 'section' => 'pages.noway', 'value' => 'Continue task', 'type' => 'text'],
            ['key' => 'noway.attention.button', 'language' => 'id', 'section' => 'pages.noway', 'value' => 'Lanjutkan tugas', 'type' => 'text'],
            ['key' => 'noway.attention.button', 'language' => 'fr', 'section' => 'pages.noway', 'value' => 'Continuer la tâche', 'type' => 'text'],

            ['key' => 'noway.book_appointment', 'language' => 'en', 'section' => 'pages.noway', 'value' => 'Book Appointment', 'type' => 'text'],
            ['key' => 'noway.book_appointment', 'language' => 'id', 'section' => 'pages.noway', 'value' => 'Buat Janji', 'type' => 'text'],
            ['key' => 'noway.book_appointment', 'language' => 'fr', 'section' => 'pages.noway', 'value' => 'Prendre rendez-vous', 'type' => 'text'],

            // Tab 1: Children's Birthday
            ['key' => 'noway.tab1.title', 'language' => 'en', 'section' => 'pages.noway', 'value' => "Children's Birthday at the Bowling Alley", 'type' => 'text'],
            ['key' => 'noway.tab1.title', 'language' => 'id', 'section' => 'pages.noway', 'value' => 'Ulang Tahun Anak di Lintasan Bowling', 'type' => 'text'],
            ['key' => 'noway.tab1.title', 'language' => 'fr', 'section' => 'pages.noway', 'value' => "Anniversaire d'enfants sur la piste de bowling", 'type' => 'text'],

            ['key' => 'noway.tab1.intro', 'language' => 'en', 'section' => 'pages.noway', 'type' => 'text',
             'value' => "A great idea: celebrate your children's birthday at the bowling alley. The children get delicious food and drinks from us. The children will certainly have a lot of fun playing."],
            ['key' => 'noway.tab1.intro', 'language' => 'id', 'section' => 'pages.noway', 'type' => 'text',
             'value' => 'Ide yang bagus: rayakan ulang tahun anak Anda di lintasan bowling. Kami menyediakan makanan dan minuman lezat untuk anak-anak. Anak-anak pasti akan sangat senang bermain.'],
            ['key' => 'noway.tab1.intro', 'language' => 'fr', 'section' => 'pages.noway', 'type' => 'text',
             'value' => "Quelle belle idée : fêtez l'anniversaire de vos enfants sur la piste de bowling. Les enfants reçoivent de notre part de bons repas et de bonnes boissons. Les enfants s'amuseront sûrement beaucoup en jouant."],

            ['key' => 'noway.tab1.schedule', 'language' => 'en', 'section' => 'pages.noway', 'type' => 'text',
             'value' => "Children's birthday parties are available: Friday to Sunday, from 3:00 PM to 7:00 PM. Admission for 1 child costs only 9 francs. Children's birthday parties include:"],
            ['key' => 'noway.tab1.schedule', 'language' => 'id', 'section' => 'pages.noway', 'type' => 'text',
             'value' => 'Pesta ulang tahun anak tersedia: Jumat hingga Minggu, pukul 15.00 hingga 19.00. Tiket masuk untuk 1 anak hanya 9 franc. Pesta ulang tahun anak termasuk:'],
            ['key' => 'noway.tab1.schedule', 'language' => 'fr', 'section' => 'pages.noway', 'type' => 'text',
             'value' => "Les fêtes d'anniversaire pour enfants ont lieu : du vendredi au dimanche, de 15h00 à 19h00. L'entrée pour 1 enfant ne coûte que 9 francs. La fête d'anniversaire pour enfants comprend :"],

            ['key' => 'noway.tab1.item1', 'language' => 'en', 'section' => 'pages.noway', 'value' => '2 rounds of bowling', 'type' => 'text'],
            ['key' => 'noway.tab1.item1', 'language' => 'id', 'section' => 'pages.noway', 'value' => '2 ronde bowling', 'type' => 'text'],
            ['key' => 'noway.tab1.item1', 'language' => 'fr', 'section' => 'pages.noway', 'value' => '2 parties de bowling', 'type' => 'text'],

            ['key' => 'noway.tab1.item2', 'language' => 'en', 'section' => 'pages.noway', 'value' => 'Bowling shoes included', 'type' => 'text'],
            ['key' => 'noway.tab1.item2', 'language' => 'id', 'section' => 'pages.noway', 'value' => 'Sepatu bowling disediakan', 'type' => 'text'],
            ['key' => 'noway.tab1.item2', 'language' => 'fr', 'section' => 'pages.noway', 'value' => 'Chaussures de bowling incluses', 'type' => 'text'],

            ['key' => 'noway.tab1.item3', 'language' => 'en', 'section' => 'pages.noway', 'value' => '1 non-alcoholic drink per child', 'type' => 'text'],
            ['key' => 'noway.tab1.item3', 'language' => 'id', 'section' => 'pages.noway', 'value' => '1 minuman non-alkohol per anak', 'type' => 'text'],
            ['key' => 'noway.tab1.item3', 'language' => 'fr', 'section' => 'pages.noway', 'value' => '1 boisson sans alcool par enfant', 'type' => 'text'],

            ['key' => 'noway.tab1.item4', 'language' => 'en', 'section' => 'pages.noway', 'value' => 'Certificates for all players', 'type' => 'text'],
            ['key' => 'noway.tab1.item4', 'language' => 'id', 'section' => 'pages.noway', 'value' => 'Sertifikat untuk semua pemain', 'type' => 'text'],
            ['key' => 'noway.tab1.item4', 'language' => 'fr', 'section' => 'pages.noway', 'value' => 'Diplômes pour tous les joueurs', 'type' => 'text'],

            ['key' => 'noway.tab1.item5', 'language' => 'en', 'section' => 'pages.noway', 'value' => '1 bag of popcorn', 'type' => 'text'],
            ['key' => 'noway.tab1.item5', 'language' => 'id', 'section' => 'pages.noway', 'value' => '1 bungkus popcorn', 'type' => 'text'],
            ['key' => 'noway.tab1.item5', 'language' => 'fr', 'section' => 'pages.noway', 'value' => '1 sachet de pop-corn', 'type' => 'text'],

            ['key' => 'noway.tab1.item6', 'language' => 'en', 'section' => 'pages.noway', 'value' => 'Decorated bowling lane', 'type' => 'text'],
            ['key' => 'noway.tab1.item6', 'language' => 'id', 'section' => 'pages.noway', 'value' => 'Lintasan bowling yang didekorasi', 'type' => 'text'],
            ['key' => 'noway.tab1.item6', 'language' => 'fr', 'section' => 'pages.noway', 'value' => 'Piste de bowling décorée', 'type' => 'text'],

            ['key' => 'noway.tab1.item7', 'language' => 'en', 'section' => 'pages.noway', 'value' => '2 coffees for parents', 'type' => 'text'],
            ['key' => 'noway.tab1.item7', 'language' => 'id', 'section' => 'pages.noway', 'value' => '2 kopi untuk orang tua', 'type' => 'text'],
            ['key' => 'noway.tab1.item7', 'language' => 'fr', 'section' => 'pages.noway', 'value' => '2 cafés pour les parents', 'type' => 'text'],

            ['key' => 'noway.tab1.footer', 'language' => 'en', 'section' => 'pages.noway', 'type' => 'html',
             'value' => "The offer is only valid up to the 14th birthday. At least 6 children must attend the birthday party. You must book the birthday party in advance. For an additional fee, children can also receive a children's menu: Chicken Nuggets with French Fries.<br><br>Book an appointment for the children's birthday. We are happy to make you an offer for a great children's birthday at the bowling alley."],
            ['key' => 'noway.tab1.footer', 'language' => 'id', 'section' => 'pages.noway', 'type' => 'html',
             'value' => 'Penawaran hanya berlaku hingga ulang tahun ke-14. Minimal 6 anak harus hadir di pesta ulang tahun. Anda harus memesan pesta ulang tahun terlebih dahulu. Dengan biaya tambahan, anak-anak juga bisa mendapatkan menu anak: Chicken Nuggets dengan French Fries.<br><br>Buat janji untuk ulang tahun anak. Kami dengan senang hati memberikan penawaran untuk ulang tahun anak yang menyenangkan di lintasan bowling.'],
            ['key' => 'noway.tab1.footer', 'language' => 'fr', 'section' => 'pages.noway', 'type' => 'html',
             'value' => "L'offre n'est valable que jusqu'au 14e anniversaire. Au moins 6 enfants doivent assister à la fête. Vous devez réserver la fête à l'avance. Pour un supplément, les enfants peuvent également recevoir un menu enfant : Chicken Nuggets avec frites.<br><br>Réservez un rendez-vous pour l'anniversaire des enfants. Nous vous proposons volontiers une offre pour un super anniversaire d'enfants sur la piste de bowling."],

            // Tab 2: Teenagers
            ['key' => 'noway.tab2.title', 'language' => 'en', 'section' => 'pages.noway', 'value' => 'Birthday Offer for Teenagers', 'type' => 'text'],
            ['key' => 'noway.tab2.title', 'language' => 'id', 'section' => 'pages.noway', 'value' => 'Penawaran Ulang Tahun untuk Remaja', 'type' => 'text'],
            ['key' => 'noway.tab2.title', 'language' => 'fr', 'section' => 'pages.noway', 'value' => "Offre d'anniversaire pour adolescents", 'type' => 'text'],

            ['key' => 'noway.tab2.intro', 'language' => 'en', 'section' => 'pages.noway', 'type' => 'text',
             'value' => 'Birthday parties for teenagers are available: Thursday to Sunday, from 6:00 PM. Admission costs only 52 francs for 1 lane. 2 to 8 people can play on 1 lane. The birthday offer includes:'],
            ['key' => 'noway.tab2.intro', 'language' => 'id', 'section' => 'pages.noway', 'type' => 'text',
             'value' => 'Pesta ulang tahun untuk remaja tersedia: Kamis hingga Minggu, mulai pukul 18.00. Tiket masuk hanya 52 franc untuk 1 lintasan. 2 hingga 8 orang bisa bermain di 1 lintasan. Penawaran ulang tahun termasuk:'],
            ['key' => 'noway.tab2.intro', 'language' => 'fr', 'section' => 'pages.noway', 'type' => 'text',
             'value' => "Les fêtes d'anniversaire pour adolescents ont lieu : du jeudi au dimanche, à partir de 18h. L'entrée ne coûte que 52 francs pour 1 piste. 2 à 8 personnes peuvent jouer sur 1 piste. L'offre d'anniversaire comprend :"],

            ['key' => 'noway.tab2.item3', 'language' => 'en', 'section' => 'pages.noway', 'value' => '2 bottles of non-alcoholic drinks', 'type' => 'text'],
            ['key' => 'noway.tab2.item3', 'language' => 'id', 'section' => 'pages.noway', 'value' => '2 botol minuman non-alkohol', 'type' => 'text'],
            ['key' => 'noway.tab2.item3', 'language' => 'fr', 'section' => 'pages.noway', 'value' => '2 bouteilles de boissons sans alcool', 'type' => 'text'],

            ['key' => 'noway.tab2.item4', 'language' => 'en', 'section' => 'pages.noway', 'value' => '1 plate of snacks per lane', 'type' => 'text'],
            ['key' => 'noway.tab2.item4', 'language' => 'id', 'section' => 'pages.noway', 'value' => '1 piring camilan per lintasan', 'type' => 'text'],
            ['key' => 'noway.tab2.item4', 'language' => 'fr', 'section' => 'pages.noway', 'value' => '1 assiette de snacks par piste', 'type' => 'text'],

            ['key' => 'noway.tab2.footer', 'language' => 'en', 'section' => 'pages.noway', 'value' => 'The birthday offer is valid for teenagers aged 15 to 18 years.', 'type' => 'text'],
            ['key' => 'noway.tab2.footer', 'language' => 'id', 'section' => 'pages.noway', 'value' => 'Penawaran ulang tahun ini berlaku untuk remaja usia 15 hingga 18 tahun.', 'type' => 'text'],
            ['key' => 'noway.tab2.footer', 'language' => 'fr', 'section' => 'pages.noway', 'value' => "L'offre d'anniversaire est valable pour les adolescents âgés de 15 à 18 ans.", 'type' => 'text'],

            // Tab 3: Adults
            ['key' => 'noway.tab3.title', 'language' => 'en', 'section' => 'pages.noway', 'value' => 'Birthday Offer for Adults 1', 'type' => 'text'],
            ['key' => 'noway.tab3.title', 'language' => 'id', 'section' => 'pages.noway', 'value' => 'Penawaran Ulang Tahun untuk Dewasa 1', 'type' => 'text'],
            ['key' => 'noway.tab3.title', 'language' => 'fr', 'section' => 'pages.noway', 'value' => "Offre d'anniversaire pour adultes 1", 'type' => 'text'],

            ['key' => 'noway.tab3.intro', 'language' => 'en', 'section' => 'pages.noway', 'type' => 'text',
             'value' => 'Birthday parties for adults are available: Thursday to Sunday, from 6:00 PM. Admission costs only 52 francs for 1 lane. 2 to 8 people can play on 1 lane. Birthday offer 1 includes:'],
            ['key' => 'noway.tab3.intro', 'language' => 'id', 'section' => 'pages.noway', 'type' => 'text',
             'value' => 'Pesta ulang tahun untuk orang dewasa tersedia: Kamis hingga Minggu, mulai pukul 18.00. Tiket masuk hanya 52 franc untuk 1 lintasan. 2 hingga 8 orang bisa bermain di 1 lintasan. Penawaran ulang tahun 1 termasuk:'],
            ['key' => 'noway.tab3.intro', 'language' => 'fr', 'section' => 'pages.noway', 'type' => 'text',
             'value' => "Les fêtes d'anniversaire pour adultes ont lieu : du jeudi au dimanche, à partir de 18h. L'entrée ne coûte que 52 francs pour 1 piste. 2 à 8 personnes peuvent jouer sur 1 piste. L'offre d'anniversaire 1 comprend :"],

            // ========== TASK PAGES ==========



            ['key' => 'page.task.title', 'language' => 'en', 'section' => 'pages.task', 'value' => 'Task - Mundial', 'type' => 'text'],
            ['key' => 'page.task.title', 'language' => 'id', 'section' => 'pages.task', 'value' => 'Tugas - Mundial', 'type' => 'text'],
            ['key' => 'page.task.title', 'language' => 'fr', 'section' => 'pages.task', 'value' => 'Tâche - Mundial', 'type' => 'text'],

            ['key' => 'page.task.heading', 'language' => 'en', 'section' => 'pages.task', 'value' => 'Complete Your Task', 'type' => 'text'],
            ['key' => 'page.task.heading', 'language' => 'id', 'section' => 'pages.task', 'value' => 'Selesaikan Tugas Anda', 'type' => 'text'],
            ['key' => 'page.task.heading', 'language' => 'fr', 'section' => 'pages.task', 'value' => 'Complétez Votre Tâche', 'type' => 'text'],

            ['key' => 'page.task.cancel_button', 'language' => 'en', 'section' => 'pages.task', 'value' => 'Cancel', 'type' => 'text'],
            ['key' => 'page.task.cancel_button', 'language' => 'id', 'section' => 'pages.task', 'value' => 'Batal', 'type' => 'text'],
            ['key' => 'page.task.cancel_button', 'language' => 'fr', 'section' => 'pages.task', 'value' => 'Annuler', 'type' => 'text'],

            ['key' => 'page.task.complete_button', 'language' => 'en', 'section' => 'pages.task', 'value' => 'Complete', 'type' => 'text'],
            ['key' => 'page.task.complete_button', 'language' => 'id', 'section' => 'pages.task', 'value' => 'Selesai', 'type' => 'text'],
            ['key' => 'page.task.complete_button', 'language' => 'fr', 'section' => 'pages.task', 'value' => 'Compléter', 'type' => 'text'],

            // ========== ERROR PAGES ==========
            ['key' => 'page.error.title_404', 'language' => 'en', 'section' => 'pages.error', 'value' => 'Page Not Found', 'type' => 'text'],
            ['key' => 'page.error.title_404', 'language' => 'id', 'section' => 'pages.error', 'value' => 'Halaman Tidak Ditemukan', 'type' => 'text'],
            ['key' => 'page.error.title_404', 'language' => 'fr', 'section' => 'pages.error', 'value' => 'Page Non Trouvée', 'type' => 'text'],

            ['key' => 'page.error.message_404', 'language' => 'en', 'section' => 'pages.error', 'value' => 'The page you are looking for does not exist.', 'type' => 'text'],
            ['key' => 'page.error.message_404', 'language' => 'id', 'section' => 'pages.error', 'value' => 'Halaman yang Anda cari tidak ada.', 'type' => 'text'],
            ['key' => 'page.error.message_404', 'language' => 'fr', 'section' => 'pages.error', 'value' => 'La page que vous recherchez n\'existe pas.', 'type' => 'text'],

            ['key' => 'page.error.title_401', 'language' => 'en', 'section' => 'pages.error', 'value' => 'Unauthorized', 'type' => 'text'],
            ['key' => 'page.error.title_401', 'language' => 'id', 'section' => 'pages.error', 'value' => 'Tidak Diizinkan', 'type' => 'text'],
            ['key' => 'page.error.title_401', 'language' => 'fr', 'section' => 'pages.error', 'value' => 'Non Autorisé', 'type' => 'text'],

            ['key' => 'page.error.message_401', 'language' => 'en', 'section' => 'pages.error', 'value' => 'You are not authorized to access this page.', 'type' => 'text'],
            ['key' => 'page.error.message_401', 'language' => 'id', 'section' => 'pages.error', 'value' => 'Anda tidak memiliki izin untuk mengakses halaman ini.', 'type' => 'text'],
            ['key' => 'page.error.message_401', 'language' => 'fr', 'section' => 'pages.error', 'value' => 'Vous n\'êtes pas autorisé à accéder à cette page.', 'type' => 'text'],

            // ========== FOOTER ==========
            ['key' => 'footer.copyright', 'language' => 'en', 'section' => 'footer', 'value' => '© 2026 Mundial. All rights reserved.', 'type' => 'text'],
            ['key' => 'footer.copyright', 'language' => 'id', 'section' => 'footer', 'value' => '© 2026 Mundial. Semua hak dilindungi.', 'type' => 'text'],
            ['key' => 'footer.copyright', 'language' => 'fr', 'section' => 'footer', 'value' => '© 2026 Mundial. Tous droits réservés.', 'type' => 'text'],

            ['key' => 'footer.about', 'language' => 'en', 'section' => 'footer', 'value' => 'About Us', 'type' => 'text'],
            ['key' => 'footer.about', 'language' => 'id', 'section' => 'footer', 'value' => 'Tentang Kami', 'type' => 'text'],
            ['key' => 'footer.about', 'language' => 'fr', 'section' => 'footer', 'value' => 'À Propos de Nous', 'type' => 'text'],

            ['key' => 'footer.privacy', 'language' => 'en', 'section' => 'footer', 'value' => 'Privacy Policy', 'type' => 'text'],
            ['key' => 'footer.privacy', 'language' => 'id', 'section' => 'footer', 'value' => 'Kebijakan Privasi', 'type' => 'text'],
            ['key' => 'footer.privacy', 'language' => 'fr', 'section' => 'footer', 'value' => 'Politique de Confidentialité', 'type' => 'text'],

            ['key' => 'footer.terms', 'language' => 'en', 'section' => 'footer', 'value' => 'Terms & Conditions', 'type' => 'text'],
            ['key' => 'footer.terms', 'language' => 'id', 'section' => 'footer', 'value' => 'Syarat & Ketentuan', 'type' => 'text'],
            ['key' => 'footer.terms', 'language' => 'fr', 'section' => 'footer', 'value' => 'Conditions Générales', 'type' => 'text'],

            // ========== BUTTONS & COMMON TEXT ==========
            ['key' => 'button.submit', 'language' => 'en', 'section' => 'common', 'value' => 'Submit', 'type' => 'text'],
            ['key' => 'button.submit', 'language' => 'id', 'section' => 'common', 'value' => 'Kirim', 'type' => 'text'],
            ['key' => 'button.submit', 'language' => 'fr', 'section' => 'common', 'value' => 'Soumettre', 'type' => 'text'],

            ['key' => 'button.cancel', 'language' => 'en', 'section' => 'common', 'value' => 'Cancel', 'type' => 'text'],
            ['key' => 'button.cancel', 'language' => 'id', 'section' => 'common', 'value' => 'Batal', 'type' => 'text'],
            ['key' => 'button.cancel', 'language' => 'fr', 'section' => 'common', 'value' => 'Annuler', 'type' => 'text'],

            ['key' => 'button.learn_more', 'language' => 'en', 'section' => 'common', 'value' => 'Learn More', 'type' => 'text'],
            ['key' => 'button.learn_more', 'language' => 'id', 'section' => 'common', 'value' => 'Pelajari Lebih Lanjut', 'type' => 'text'],
            ['key' => 'button.learn_more', 'language' => 'fr', 'section' => 'common', 'value' => 'En Savoir Plus', 'type' => 'text'],

            ['key' => 'button.contact_us', 'language' => 'en', 'section' => 'common', 'value' => 'Contact Us', 'type' => 'text'],
            ['key' => 'button.contact_us', 'language' => 'id', 'section' => 'common', 'value' => 'Hubungi Kami', 'type' => 'text'],
            ['key' => 'button.contact_us', 'language' => 'fr', 'section' => 'common', 'value' => 'Nous Contacter', 'type' => 'text'],

            ['key' => 'button.password', 'language' => 'en', 'section' => 'common', 'value' => 'Password', 'type' => 'text'],
            ['key' => 'button.password', 'language' => 'id', 'section' => 'common', 'value' => 'Kata Sandi', 'type' => 'text'],
            ['key' => 'button.password', 'language' => 'fr', 'section' => 'common', 'value' => 'Mot de passe', 'type' => 'text'],

            ['key' => 'button.buy_now', 'language' => 'en', 'section' => 'common', 'value' => 'Buy Now', 'type' => 'text'],
            ['key' => 'button.buy_now', 'language' => 'id', 'section' => 'common', 'value' => 'Beli Sekarang', 'type' => 'text'],
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
