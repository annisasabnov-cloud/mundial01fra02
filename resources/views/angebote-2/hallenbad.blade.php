<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35fa6b502dc6f" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>{!! trans_db('angebote2.pool.title', null, 'Piscine intérieure') !!}</title>
  <meta content="{!! trans_db('angebote2.pool.title', null, 'Piscine intérieure') !!}" property="og:title">
  <meta content="{!! trans_db('angebote2.pool.title', null, 'Piscine intérieure') !!}" property="twitter:title">
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
  <div class="section-3"></div>
  <main id="main-content" class="main-content">
    <div class="centered-container"></div>
    <div class="w-container">
      <a href="{{ route("angebote3") }}" class="back w-inline-block"><img src="{{ asset("images/back.svg") }}" loading="lazy" alt="" class="image-26">
        <div class="text-block-7">{!! trans_db('angebote2.common.back_to_offers', null, 'À la liste des offres') !!}</div>
      </a>
    </div>
    <div class="w-container">
      <div class="div-block-45"></div>
      <div class="w-richtext">
        <p>‍</p>
        <h2>{!! trans_db('angebote2.pool.title', null, 'Piscine intérieure') !!}</h2>
        <p>{!! trans_db('angebote2.pool.desc', null, "Notre piscine intérieure moderne offre un grand plaisir de baignade aux nageurs sportifs ainsi qu'aux familles et aux amis. Le bain a une piscine de 50 mètres et promet un plaisir illimité pour petits et grands avec trois toboggans aquatiques. Que ce soit dans des chambres à air colorées, sur des pneus souples ou en chute libre, le plaisir de la glisse est garanti. Divisé en trois niveaux, votre favori parmi les toboggans aquatiques est sûr d'être trouvé rapidement. Nous organisons aussi régulièrement des événements récréatifs, tels que des spectacles de plongée en hauteur ou des rencontres de sirènes. Non seulement pour les actifs, mais aussi pour les spectateurs un grand plaisir sportif. De plus, les diapositives sont un point fort pour nos jeunes visiteurs.") !!}</p>
        <h2>‍</h2>
      </div>
      <div class="div-block-45-copy"></div>
      <div class="w-richtext">
        <p>‍</p>
        <h2>{!! trans_db('angebote2.pool.natural_title', null, 'Piscine naturelle') !!}</h2>
        <p>{!! trans_db('angebote2.pool.natural_desc', null, "Notre piscine naturelle offre une eau de baignade qualitativement comparable à celle d'un lac naturel ou d'un étang profond. Profitez des plaisirs de la baignade naturelle dans une eau sans chlore ni produits chimiques.") !!}</p>
        <h2>‍</h2>
        <p>‍</p>
        <p>‍</p>
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
