<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35f67e702dc6e" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>{!! trans_db('angebote3.title', null, 'Penawaran Kami') !!}</title>
  <meta content="{!! trans_db('angebote3.title', null, 'Penawaran Kami') !!}" property="og:title">
  <meta content="{!! trans_db('angebote3.title', null, 'Penawaran Kami') !!}" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="{{ asset("css/normalize.css") }}" rel="stylesheet" type="text/css">
  <link href="{{ asset("css/components.css") }}" rel="stylesheet" type="text/css">
  <link href="{{ asset("css/mundial01dea02.css") }}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Maven Pro:regular,500,600,700,800,900"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset("images/favicon.png") }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset("images/webclip.svg") }}" rel="apple-touch-icon">

  <script>
  //Script für Clickzähler
  window.addEventListener('click', () => {
  let count = +sessionStorage.getItem('clickCount2') || 0;
  count += 1;
  sessionStorage.setItem('clickCount2', count);
  if(count >= 5) {
  }
  });
  </script>

</head>
<body>
  <section id="cards-section" class="cards-section-6">
    <div class="centered-container w-container">
      <div>
        <a href="{{ route("index") }}" class="back-copy w-inline-block"><img src="{{ asset("images/back.svg") }}" loading="lazy" alt="" class="image-26">
          <div class="text-block-7">{!! trans_db('angebote3.back', null, 'retour') !!}</div>
        </a>
      </div>
      <h2 class="heading-12">{!! trans_db('angebote3.title', null, 'Nos offres') !!}</h2>
      <p class="paragraph-18">{!! trans_db('angebote3.intro', null, "Nous avons de nombreuses activités de loisirs pour vous, vos amis et votre famille. Notre but est de rendre votre temps libre amusant. Nous organisons également des fêtes de Noël et des anniversaires d'enfants. Découvrez maintenant notre centre de loisirs sur Internet. Laissez-vous surprendre par notre grande offre.") !!}<br><br></p>
      <div class="cards-grid-container-3">
        <a href="{{ route("angebote2.hallenbad") }}" class="angebot-block w-inline-block">
          <div class="div-angebot-picture"><img src="{{ asset("images/logoicon_swim_green.svg") }}" loading="lazy" alt="" class="logoicon_01"></div>
          <h3 class="heading-8">{!! trans_db('angebote3.pool.title', null, 'Kolam Renang') !!}</h3>
          <p class="paragraph-6">{!! trans_db('angebote3.pool.desc', null, "Berenang itu menyehatkan dan memperkuat jiwa dan raga. Nikmati berenang dalam suasana yang menyenangkan di kolam renang dalam ruangan kami. Ada untuk semua selera, dari yang muda hingga yang tua.") !!}</p>
          <div class="text-block-5">{!! trans_db('angebote3.learn_more', null, 'Pelajari lebih lanjut') !!}</div>
        </a>
        <a href="{{ route("angebote2.o02") }}" class="angebot-block w-inline-block">
          <div class="div-angebot-picture-2"><img src="{{ asset("images/logoicon_sauna_green.svg") }}" loading="lazy" alt="" class="logoicon_02"></div>
          <h3 class="heading-8">{!! trans_db('angebote3.sauna.title', null, 'Sauna') !!}</h3>
          <p class="paragraph-6">{!! trans_db('angebote3.sauna.desc', null, "Baik di musim dingin maupun musim panas, sauna adalah bentuk perawatan panas-dingin khusus yang meningkatkan kesehatan dan relaksasi. Sauna merangsang metabolisme, menstabilkan sistem kardiovaskular, dan membantu melatih sistem pembuluh darah.") !!}</p>
          <div class="text-block-5">{!! trans_db('angebote3.learn_more', null, 'Pelajari lebih lanjut') !!}</div>
        </a>
        <a href="{{ route("angebote2.minigolf") }}" class="angebot-block w-inline-block">
          <div class="div-angebot-picture-3"><img src="{{ asset("images/logoicon_golf_green.svg") }}" loading="lazy" alt="" class="logoicon_03"></div>
          <h3 class="heading-8">{!! trans_db('angebote3.minigolf.title', null, 'Mini Golf') !!}</h3>
          <p class="paragraph-6">{!! trans_db('angebote3.minigolf.desc', null, "Nikmati permainan mini golf di lapangan mini golf kami. Mini golf 20 lubang kami terletak di jantung taman alam kami. Alam dan kesenangan untuk seluruh keluarga.") !!}</p>
          <div class="text-block-5">{!! trans_db('angebote3.learn_more', null, 'Pelajari lebih lanjut') !!}</div>
        </a>
        <a href="{{ route("angebote2.bowling") }}" class="angebot-block w-inline-block">
          <div class="div-angebot-picture-4"><img src="{{ asset("images/logoicon_bowling_green.svg") }}" loading="lazy" alt="" class="logoicon_04"></div>
          <h3 class="heading-8">{!! trans_db('angebote3.bowling.title', null, 'Bowling') !!}</h3>
          <p class="paragraph-6">{!! trans_db('angebote3.bowling.desc', null, "Bowling adalah olahraga yang menggabungkan kesenangan dan kompetisi. Anda bisa memainkannya bersama teman atau keluarga. Itulah mengapa orang suka bowling. Pusat hiburan Mundial memiliki fasilitas besar dengan banyak lintasan bowling.") !!}</p>
          <div class="text-block-5">{!! trans_db('angebote3.learn_more', null, 'Pelajari lebih lanjut') !!}</div>
        </a>
        <a href="{{ route("angebote2.geburtstagsfeier") }}" class="angebot-block w-inline-block">
          <div class="div-angebot-picture-5"><img src="{{ asset("images/logoicon_birthday_green.svg") }}" loading="lazy" alt="" class="logoicon_05"></div>
          <h3 class="heading-8">{!! trans_db('angebote3.birthday.title', null, "Pesta Ulang Tahun") !!}</h3>
          <p class="paragraph-6">{!! trans_db('angebote3.birthday.desc', null, "Mulailah tahun baru kehidupan olahraga Anda yang aktif. Rayakan pesta ulang tahun di lintasan bowling. Datang dan bersenang-senang di lintasan bowling kami!") !!}</p>
          <div class="text-block-5">{!! trans_db('angebote3.learn_more', null, 'Pelajari lebih lanjut') !!}</div>
        </a>
        <a href="{{ route("angebote2.restaurant") }}" class="angebot-block w-inline-block">
          <div class="div-angebot-picture-6"><img src="{{ asset("images/logoicon_restaurant_green.svg") }}" loading="lazy" alt="" class="logoicon_06"></div>
          <h3 class="heading-8">{!! trans_db('angebote3.restaurant.title', null, 'Restoran') !!}</h3>
          <p class="paragraph-6">{!! trans_db('angebote3.restaurant.desc', null, "Bergerak membuat lapar dan haus. Itulah mengapa ada restoran dan bar di pusat hiburan Mundial tempat Anda bisa makan dengan baik dan menikmati minuman berkualitas. Ini akan memberi Anda energi baru. Kami senang menyambut kunjungan Anda. Selamat makan!") !!}</p>
          <div class="text-block-5">{!! trans_db('angebote3.learn_more', null, 'Pelajari lebih lanjut') !!}</div>
        </a>
      </div>
    </div>
    <div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
        <div class="container-6 w-container">
          <a href="{{ route("index") }}" class="w-inline-block"><img src="{{ asset("images/logo1_v3.svg") }}" height="40" alt="" class="image"></a>
          <nav role="navigation" class="w-nav-menu">
            <a href="{{ route("angebote3") }}" aria-current="page" class="nav-link-2 w-nav-link w--current">{{ trans_db('nav.offers') }}</a>
            <a href="{{ route("preise") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.pricing') }}</a>
            <a href="{{ route("kontakt") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.contact') }}</a>
            <x-language-selector />
          </nav>
          <a href="{{ route("aufgabe") }}" class="button-task-header w-button">{!! trans_db('angebote2.common.task_button', null, 'Tugas') !!}</a>
          <div class="menu-button w-nav-button">
            <div class="icon w-icon-nav-menu"></div>
          </div>
      </div>
    </div>
  </section>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6044f3166ba35f926402dc6b" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/mundial01dea02.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script>
$(document).ready(function(){
function formtoemailSuccess() {
var params = new URLSearchParams(window.location.search);
if (params.get('success') == 1) {
$('#formtoemail form').hide();
$('#formtoemail .w-form-done').show();
}
}
formtoemailSuccess();
});
</script>
</body>
</html>
