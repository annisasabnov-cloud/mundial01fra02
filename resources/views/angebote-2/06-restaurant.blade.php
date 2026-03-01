<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35f097102dc76" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>{!! trans_db('angebote2.restaurant.title', null, 'Le restaurant') !!}</title>
  <meta content="{!! trans_db('angebote2.restaurant.title', null, 'Le restaurant') !!}" property="og:title">
  <meta content="{!! trans_db('angebote2.restaurant.title', null, 'Le restaurant') !!}" property="twitter:title">
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
      <a href="{{ route("angebote3") }}" class="back w-inline-block"><img src="{{ asset("images/back.svg") }}" loading="lazy" alt="" class="image-26">
        <div class="text-block-7">{!! trans_db('angebote2.common.back_to_offers', null, 'À la liste des offres') !!}</div>
      </a>
    </div>
    <div class="w-container">
      <div class="div-block-50"></div>
      <div href="" class="w-richtext">
        <p>‍</p>
        <h2><strong>{!! trans_db('angebote2.restaurant.title', null, 'Le restaurant') !!}</strong></h2>
        <p>{!! trans_db('angebote2.restaurant.desc', null, "Le mouvement dans le monde vous donne faim et soif. C'est pourquoi nous avons prévu pour votre bien-être physique avec trois restaurants dans le Mundial. Nous attendons votre visite. Bon appétit et santé!") !!}</p>
        <p><strong>{!! trans_db('angebote2.restaurant.bistro_title', null, 'Bistro Bain') !!}</strong></p>
        <p>{!! trans_db('angebote2.restaurant.bistro_desc', null, "Ici, vous pouvez vous enrichir avec des frites, des Nuggets de poulet, des fruits frais, des salades, des pâtisseries, du muesli, des sandwichs et bien plus d'autres délices.") !!}</p>
        <p><strong>{!! trans_db('angebote2.restaurant.sauna_bar_title', null, 'Bar Sauna') !!}</strong></p>
        <p>{!! trans_db('angebote2.restaurant.sauna_bar_desc', null, "Faites le plein avec diverses boissons et jus de fruits frais dans notre bar sauna. Et si vous voulez, il y a un muesli, une boîte à bento asiatique, une salade ou un sandwich fraîchement préparé avec.") !!}</p>
        <p>‍<strong>{!! trans_db('angebote2.restaurant.mundial_title', null, 'Restaurant Mundial') !!}</strong></p>
        <p>{!! trans_db('angebote2.restaurant.mundial_desc', null, 'Notre restaurant 5 étoiles propose de tout, des collations au menu 5 plats. Laissez-vous envoûter par nos délices culinaires.') !!}</p>
        <p><br></p>
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
    <div class="container-5 w-container">
      <div class="w-row">
        <div class="column-3 w-col w-col-6">
          <h4>{!! trans_db('angebote2.restaurant.hours_title', null, "Horaires d'ouvertures") !!}</h4>
          <p>{!! trans_db('angebote2.restaurant.hours', null, 'Lundi - Jeudi: 8h00 - 19h00<br>Vendredi: 8h00 - 21h00<br>Samedi: 9h00 - 17h00<br>Dimanche: 09h00 - 12h00') !!}</p>
        </div>
        <div class="column-4 w-col w-col-6"></div>
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
