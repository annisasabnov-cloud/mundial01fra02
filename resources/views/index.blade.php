<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35f700402dc6a" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>{{ trans_db('page.home.title', null, 'Mundial') }}</title>
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
  <div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
    <div class="container-6 w-container">
      <a href="{{ route("index") }}" aria-current="page" class="w-inline-block w--current"><img src="{{ asset("images/logo1_v3.svg") }}" height="40" alt="" class="image"></a>
      <nav role="navigation" class="w-nav-menu">
        <a href="{{ route("angebote3") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.offers') }}</a>
        <a href="{{ route("preise") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.pricing') }}</a>
        <a href="{{ route("kontakt") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.contact') }}</a>
        <x-language-selector />
      </nav>
      <a href="{{ route("aufgabe") }}" class="button-task-header w-button">{{ trans_db('page.task.heading', null, 'Task') }}</a>
      <div class="menu-button w-nav-button">
        <div class="icon w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <header id="hero-overlay" class="hero-overlay">
    <div class="container w-container"><img src="{{ asset("images/logo2_v3.svg") }}" loading="lazy" data-w-id="991c37f6-cf5d-1017-12c8-5ecdd607c6b1" alt="" class="image-6">
      <h1 class="heading"><strong class="bold-text">{{ trans_db('page.home.heading', null, 'Welcome to Mundial') }}<br></strong></h1>
      <h1 class="heading"><strong class="text-field">{{ trans_db('page.home.subtitle', null, 'The World\'s Best Experience') }}</strong></h1>
    </div>
  </header>
  <header id="hero" class="hero">
    <div class="w-embed">
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    </div>
    <div class="w-container">
      <h1 class="heading-5">{{ trans_db('page.home.hero2.heading', null, 'Welcome to Mundial') }}</h1>
      <p class="paragraph-3">{!! trans_db('page.home.hero2.body', null, '') !!}</p>
      <div>
        <div class="div-block-30">
          <a href="{{ route("angebote2.hallenbad") }}" class="w-inline-block"><img src="{{ asset("images/logoicon_swim_green.svg") }}" loading="lazy" alt="" class="image-23"></a>
          <a href="{{ route("angebote2.minigolf") }}" class="w-inline-block"><img src="{{ asset("images/logoicon_golf_green.svg") }}" loading="lazy" alt="" class="image-23"></a>
          <a href="{{ route("angebote2.bowling") }}" class="w-inline-block"><img src="{{ asset("images/logoicon_bowling_green.svg") }}" loading="lazy" alt="" class="image-23"></a>
          <a href="{{ route("angebote2.o02") }}" class="w-inline-block"><img src="{{ asset("images/logoicon_sauna_green.svg") }}" loading="lazy" alt="" class="image-23"></a>
          <a href="{{ route("angebote2.geburtstagsfeier") }}" class="w-inline-block"><img src="{{ asset("images/logoicon_birthday_green.svg") }}" loading="lazy" alt="" class="image-23"></a>
          <a href="{{ route("angebote2.restaurant") }}" class="w-inline-block"><img src="{{ asset("images/logoicon_restaurant_green.svg") }}" loading="lazy" alt="" class="image-23"></a>
        </div>
      </div>
    </div>
  </header>
  <section id="feature-section" class="feature-section">
    <div class="flex-container w-container">
      <div class="feature-image-mask"><img src="{{ asset("images/sauna3.jpeg") }}" sizes="(max-width: 479px) 92vw, 444px" srcset="images/sauna3-p-1080.jpeg 1080w, images/sauna3-p-1600.jpeg 1600w, images/sauna3-p-2000.jpeg 2000w, images/sauna3.jpeg 2250w" alt="" class="feature-image-2"></div>
      <div>
        <h2 class="heading-6">{{ trans_db('page.home.sauna.heading', null, 'Treat Yourself to Relaxation Time') }}</h2>
        <p class="paragraph-4">{!! str_replace('%sauna_url%', route('angebote2.o02'), trans_db('page.home.sauna.body', null, '')) !!}</p>
      </div>
    </div>
  </section>
  <header id="hero" class="hero">
    <div class="flex-container w-container">
      <div>
        <h1 class="heading-4">{{ trans_db('page.home.pool.heading', null, 'Need a Fresh Environment?') }}</h1>
        <p class="paragraph-5"><br>{!! str_replace('%pool_url%', route('angebote2.hallenbad'), trans_db('page.home.pool.body', null, '')) !!}</p>
      </div>
      <div class="hero-image-mask"><img src="{{ asset("images/naturpool2.jpeg") }}" sizes="(max-width: 479px) 92vw, 444px" srcset="images/naturpool2-p-500.jpeg 500w, images/naturpool2-p-1080.jpeg 1080w, images/naturpool2.jpeg 1264w" alt="" class="hero-image-2"></div>
    </div>
  </header>
  <section id="cards-section" class="cards-section-test">
    <div class="centered-container w-container">
      <h2 class="heading-11">{{ trans_db('page.home.cards.heading', null, 'Our Offers') }}</h2>
      <div class="cards-grid-container-test">
        <a id="w-node-_964a7dc5-b6a8-fc55-c680-15a323039ada-0402dc6a" href="{{ route("angebote2.hallenbad") }}" class="angebot-block w-inline-block">
          <div class="div-block-19"><img src="{{ asset("images/logoicon_swim_green.svg") }}" loading="lazy" alt="" class="logoicon_01"></div>
          <h3 class="heading-8">{{ trans_db('page.home.cards.pool.title', null, 'Swimming Pool') }}</h3>
          <p class="paragraph-6">{{ trans_db('page.home.cards.pool.desc', null, '') }}</p>
            <div class="text-block-5">{{ trans_db('page.home.cards.learn_more', null, 'Learn more') }}</div>
        </a>
        <a href="{{ route("angebote2.o02") }}" class="angebot-block w-inline-block">
            <div class="div-block-29"><img src="{{ asset("images/logoicon_sauna_green.svg") }}" loading="lazy" alt="" class="logoicon_02"></div>
            <h3 class="heading-8">{{ trans_db('page.home.cards.sauna.title', null, 'Sauna') }}</h3>
            <p class="paragraph-6">{{ trans_db('page.home.cards.sauna.desc', null, '') }}</p>
            <div class="text-block-5">{{ trans_db('page.home.cards.learn_more', null, 'Learn more') }}</div>
          </a>
          <a href="{{ route("angebote2.geburtstagsfeier") }}" class="angebot-block w-inline-block">
            <div class="div-angebot-picture-5"><img src="{{ asset("images/logoicon_birthday_green.svg") }}" loading="lazy" alt="" class="logoicon_05"></div>
            <h3 class="heading-8">{{ trans_db('page.home.cards.birthday.title', null, 'Birthday Party') }}</h3>
            <p class="paragraph-6">{{ trans_db('page.home.cards.birthday.desc', null, '') }}</p>
            <div class="text-block-5">{{ trans_db('page.home.cards.learn_more', null, 'Learn more') }}</div>
          </a>
      </div>
      <div class="div-block-8">
        <a href="{{ route('angebote3') }}" class="primary-button w-button">{{ trans_db('page.home.cards.view_all', null, 'See All Our Offers') }}</a>
      </div>
    </div>
  </section>
  <footer id="footer" class="footer">
    <div class="container-8 w-container">
      <a href="#hero-overlay" class="w-inline-block"><img src="{{ asset("images/logo1_v3.svg") }}" height="40" alt="" class="image-1"></a>
    </div>
    <div class="container-8 w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <a href="{{ route('angebote3') }}" class="footer-link">{{ trans_db('footer.link.offers', null, 'Offers') }}</a>
          <a href="{{ route('preise') }}" class="footer-link">{{ trans_db('footer.link.pricing', null, 'Subscriptions & Pricing') }}</a>
        </div>
        <div class="w-col w-col-6">
          <a href="{{ route('kontakt') }}" class="footer-link">{{ trans_db('footer.link.contact', null, 'Contact') }}</a>
        </div>
      </div>
    </div>
    <div class="w-container">
      <div class="text-block-4">{{ trans_db('footer.copyright_text', null, 'Copyright © 2023 Mundial.') }}</div>
    </div>
  </footer>
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
