<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35fb09502dc73" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>{!! trans_db('angebote2.minigolf.title', null, 'Minigolf') !!}</title>
  <meta content="{!! trans_db('angebote2.minigolf.title', null, 'Minigolf') !!}" property="og:title">
  <meta content="{!! trans_db('angebote2.minigolf.title', null, 'Minigolf') !!}" property="twitter:title">
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
<body class="body-2">
  <main id="main-content" class="main-content">
    <div class="w-container">
      <a href="{{ route("angebote3") }}" class="back w-inline-block"><img src="{{ asset("images/back.svg") }}" loading="lazy" alt="" class="image-26">
        <div class="text-block-7">{!! trans_db('angebote2.common.back_to_offers', null, 'À la liste des offres') !!}</div>
      </a>
    </div>
    <div class="container-22 w-container">
      <div class="div-block-47"></div>
      <div class="w-richtext">
        <p>‍</p>
        <h2><strong>{!! trans_db('angebote2.minigolf.title', null, 'Minigolf') !!}</strong></h2>
        <p>{!! trans_db('angebote2.minigolf.desc1', null, "Profitez d'une partie de mini-golf sur notre terrain de mini-golf. Notre mini-golf de 20 trous est situé au cœur de notre parc naturel. Nature et plaisir pour toute la famille ! La longueur supplémentaire de certains trous est un défi particulier et garantit le plaisir de jouer !") !!}</p>
        <p>{!! trans_db('angebote2.minigolf.desc2', null, "Vous avez une occasion spéciale ? Pas de problème, car avec nous, vous pouvez aussi faire la fête ensemble. Des fêtes d'anniversaire inoubliables pour les enfants ou un événement d'entreprise sont possibles sur demande.") !!}</p>
        <p>‍</p>
      </div>
      <div class="div-block-209">
        <a href="../no-way.html" class="primary-button w-button">{!! trans_db('angebote2.common.reserve', null, 'Réserver') !!}</a>
      </div>
    </div>
    <div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
      <div class="container-6 w-container">
        <a href="{{ route("index") }}" class="w-inline-block"><img src="{{ asset("images/logo1_v3.svg") }}" height="40" alt="" class="image"></a>
        <nav role="navigation" class="w-nav-menu">
          <a href="{{ route("angebote3") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.offers') }}</a>
          <a href="{{ route("preise") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.pricing') }}</a>
          <a href="{{ route("kontakt") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.contact') }}</a>
          <x-language-selector />
        </nav>
        <a href="{{ route("aufgabe") }}" class="button-task-header w-button">{!! trans_db('angebote2.common.task_button', null, 'Tâche') !!}</a>
        <div class="menu-button w-nav-button">
          <div class="icon w-icon-nav-menu"></div>
        </div>
      </div>
    </div>
  </main>
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
