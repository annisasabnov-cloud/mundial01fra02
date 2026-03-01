<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35fd00502dc80" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>{!! trans_db('angebote2.card.title', null, 'Mundial Card') !!}</title>
  <meta content="{!! trans_db('angebote2.card.title', null, 'Mundial Card') !!}" property="og:title">
  <meta content="{!! trans_db('angebote2.card.title', null, 'Mundial Card') !!}" property="twitter:title">
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
  <main id="main-content" class="main-content">
    <div class="w-container">
      <div>
        <a href="{{ route("preise") }}" class="back-copy w-inline-block"><img src="{{ asset("images/back.svg") }}" loading="lazy" alt="" class="image-26">
          <div class="text-block-7">{!! trans_db('angebote2.common.back', null, 'Retour') !!}</div>
        </a>
      </div>
      <div href="" class="w-richtext">
        <h2>‍<strong>{!! trans_db('angebote2.card.title', null, 'Mundial Card') !!}</strong></h2>
        <p>{!! trans_db('angebote2.card.desc1', null, "Vous venez souvent chez nous ? Avec la Mundial Card, vous pouvez profiter de toutes les offres du centre de loisirs Mundial pendant une année entière. Cela inclut le minigolf, le bowling, le sauna et la piscine. Vous n'avez plus à vous soucier de l'entrée. Montrez votre carte à l'entrée et entrez. Commandez dès aujourd'hui votre carte Mundial personnelle.") !!}</p>
        <p>{!! trans_db('angebote2.card.desc2', null, "La Mundial Card est valable un an à partir de la date d'émission.") !!}</p>
      </div>
      <div data-duration-in="300" data-duration-out="100" class="w-tabs">
        <div class="w-tab-content">
          <div data-w-tab="Tab 1" class="w-tab-pane"></div>
          <div data-w-tab="Tab 2" class="w-tab-pane"></div>
          <div data-w-tab="Tab 3" class="w-tab-pane"></div>
        </div>
      </div>
    </div>
    <div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
      <div class="container-6 w-container">
        <a href="{{ route("index") }}" class="w-inline-block"><img src="{{ asset("images/logo1_v3.svg") }}" height="40" alt="" class="image"></a>
        <nav role="navigation" class="w-nav-menu">
          <a href="{{ route("angebote3") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.offers') }}</a>
          <a href="{{ route("preise") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.pricing') }}</a>
          <a href="{{ route("kontakt") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.contact') }}</a>
        </nav>
        <x-language-selector />
        <a href="{{ route("aufgabe") }}" class="button-task-header w-button">{!! trans_db('angebote2.common.task_button', null, 'Tâche') !!}</a>
        <div class="menu-button w-nav-button">
          <div class="icon w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </main>
  <div class="section-4">
    <div class="container-10 w-container">
      <div class="div-block-36"><img src="{{ asset("images/mundial_card_v2.png") }}" loading="lazy" srcset="../images/mundial_card_v2-p-500.png 500w, ../images/mundial_card_v2.png 616w" sizes="(max-width: 479px) 87vw, (max-width: 767px) 54vw, 309.546875px" alt="" class="image-24">
        <p class="paragraph-10">Prix: CHF <strong class="bold-text-2">1&#x27;420.-</strong><br> </p>
        <a href="../angebote-2/kauf-mundialcard01.html" class="primary-button w-button">{!! trans_db('angebote2.card.buy_online', null, 'Acheter en ligne maintenant') !!}</a>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6044f3166ba35f926402dc6b" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/mundial01dea02.js" type="text/javascript"></script>
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
