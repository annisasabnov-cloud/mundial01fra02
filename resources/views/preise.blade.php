<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35fe2e002dc71" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>{{ trans_db('page.pricing.title', null, 'Pricing - Mundial') }}</title>
  <meta content="{{ trans_db('page.pricing.heading', null, 'Pricing') }}" property="og:title">
  <meta content="{{ trans_db('page.pricing.heading', null, 'Pricing') }}" property="twitter:title">
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

  <style>
  .preise-table { font-family: arial, sans-serif; border-collapse: collapse; width: 100%; }
  .preise-table td, .preise-table th { border: 1px solid #dddddd; text-align: left; padding: 8px; }
  .preise-table tr:nth-child(even) { background-color: #F9F9F9; }
  </style>

</head>
<body>
  <main id="main-content" class="main-content">
    <div class="w-container">
      <h2 class="heading-13">{{ trans_db('page.pricing.heading', null, 'Pricing & Subscriptions') }}</h2>
      <div>
        <div class="w-row">
          <div class="w-col w-col-6"><img src="{{ asset("images/mundial_card_v2.png") }}" loading="lazy" srcset="images/mundial_card_v2-p-500.png 500w, images/mundial_card_v2.png 616w" sizes="(max-width: 479px) 70vw, (max-width: 767px) 74vw, (max-width: 991px) 283.1875px, 368px" alt="" class="mundial-card"></div>
          <div class="w-col w-col-6">
            <h3 class="heading-9">{{ trans_db('page.pricing.card_title', null, 'Mundial Card - Annual Subscription') }}</h3>
            <p class="paragraph-7">{{ trans_db('page.pricing.card_description', null, 'Enjoy all Mundial leisure center offers throughout the year.') }}<br>‍<br>CHF <strong>{{ trans_db('page.pricing.card_price', null, '1\'420.-') }}</strong><br> </p>
          </div>
        </div>
        <div class="div-block-203">
          <a href="{{ route("angebote2.kaufMundialcard01") }}" class="primary-button-card-offer w-button">{{ trans_db('button.buy_now', null, 'Buy Now') }}</a>
        </div>
      </div>

      {{-- Table 1: Swimming Pool --}}
      <div class="html-embed w-embed">
        {!! trans_db('preise.pool_table', null, '') !!}
      </div>

      {{-- Table 2: Sauna --}}
      <div class="w-embed">
        {!! trans_db('preise.sauna_table', null, '') !!}
      </div>

      {{-- Table 3: Bowling --}}
      <div class="w-embed">
        {!! trans_db('preise.bowling_table', null, '') !!}
      </div>

      {{-- Table 4: Mini Golf --}}
      <div class="w-embed">
        {!! trans_db('preise.minigolf_table', null, '') !!}
      </div>

      {{-- Table 5: All Facilities --}}
      <div class="w-embed">
        {!! trans_db('preise.all_table', null, '') !!}
      </div>

      <div data-duration-in="300" data-duration-out="100" class="w-tabs">
        <div class="w-tab-content">
          <div data-w-tab="Tab 2" class="w-tab-pane"></div>
          <div data-w-tab="Tab 3" class="w-tab-pane"></div>
          <div data-w-tab="Tab 4" class="w-tab-pane"></div>
        </div>
      </div>
    </div>
    <div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
      <div class="container-6 w-container">
        <a href="{{ route("index") }}" class="w-inline-block"><img src="{{ asset("images/logo1_v3.svg") }}" height="40" alt="" class="image"></a>
        <nav role="navigation" class="w-nav-menu">
          <a href="{{ route("angebote3") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.offers') }}</a>
          <a href="{{ route("preise") }}" aria-current="page" class="nav-link-2 w-nav-link w--current">{{ trans_db('nav.pricing') }}</a>
          <a href="{{ route("kontakt") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.contact') }}</a>
          <x-language-selector />
        </nav>
        <a href="{{ route("aufgabe") }}" class="button-task-header w-button">{{ trans_db('angebote2.common.task_button', null, 'Task') }}</a>
        <div class="menu-button w-nav-button">
          <div class="icon w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </main>
  <div>
    <div class="container-5 w-container"></div>
  </div>
  <div>
    <div class="container-7 w-container">
      <div class="div-block-16">
        <h3 class="heading-9">{{ trans_db('preise.payment.heading', null, 'Payment Methods') }}</h3>
        <p class="paragraph-7">{!! trans_db('preise.payment.desc', null, '') !!}<br></p>
        <div class="div-block-17">
          <img src="{{ asset("images/visa.svg") }}" loading="lazy" alt="" class="image-9">
          <img src="{{ asset("images/mastercard.svg") }}" loading="lazy" alt="" class="image-9">
          <img src="{{ asset("images/gopay.png") }}" loading="lazy" alt="" class="image-9">
          <img style="height: 55px" src="{{ asset("images/qrismastr.webp") }}" loading="lazy" alt="" class="image-9">
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="container-5 w-container"></div>
  </div>
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
