<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35f368a02dc74" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>{!! trans_db('angebote2.bowling.title', null, 'Bowling') !!}</title>
  <meta content="{!! trans_db('angebote2.bowling.title', null, 'Bowling') !!}" property="og:title">
  <meta content="{!! trans_db('angebote2.bowling.title', null, 'Bowling') !!}" property="twitter:title">
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
      <div class="div-block-48"></div>
      <div>
        <h2><strong>{!! trans_db('angebote2.bowling.title', null, 'Bowling') !!}</strong></h2>
        <p><strong class="bold-text-3">{!! trans_db('angebote2.bowling.subtitle', null, 'Le jeu pour le sport et le plaisir entre amis ou en famille.') !!}</strong></p>
        <p><strong class="bold-text-6">{!! trans_db('angebote2.bowling.desc1', null, "Le bowling est une manière classique de combiner sport et socialisation. Vous pouvez profiter d'une soirée décontractée entre amis dans une atmosphère détendue dans notre grande installation avec restauration et coin salon confortable.<br>Que ce soit une fête de famille ou de Noël, une fête d'anniversaire pour les enfants, entre amis ou parents, notre piste de bowling offre un sport détendu et un confort convivial.<br>") !!}</strong></p>
        <p><strong class="bold-text-4">{!! trans_db('angebote2.bowling.desc2', null, 'Le plaisir ultime de la fête pour petits et grands.') !!}</strong></p>
      </div>
      <p class="paragraph-19">{!! trans_db('angebote2.bowling.desc3', null, "Vivez la sensation spéciale du bowling avec de la musique entraînante, des boissons fraîches et un fantastique spectacle de lumières !<br>Pistes lumineuses, boules colorées et épingles rayonnantes ...<br>L'expérience du bowling en lumière noire!<br>") !!}</p>
      <a href="../no-way.html" class="primary-button w-button">{!! trans_db('angebote2.bowling.book_lane', null, 'Réserver une piste<br>') !!}</a>
      <p class="paragraph-20"><strong class="bold-text-5">{!! trans_db('angebote2.bowling.birthday_title', null, 'Combiner son anniversaire avec le bowling') !!}</strong></p>
      <p>{!! trans_db('angebote2.bowling.birthday_desc', null, "Pas d'envie de préparer, cuisiner, faire de la pâtisserie et tout nettoyer après ?<br>Le bowling chez Mundial offre de nombreuses variantes pour passer un <strong>anniversaire sociable et actif</strong>. Quel que soit le temps, avec musique et gastronomie en arrière-plan, votre fête d'anniversaire au bowling est garantie d'être très amusante. Le bowling fonctionne pour les petits et grands invités et ne nécessite aucune compétence particulière. Laissez-vous inspirer par nos idées pour votre anniversaire au bowling.<br><br>") !!}</p>
      <a href="../no-way.html" class="primary-button w-button">{!! trans_db('angebote2.bowling.show_birthday_offers', null, "Afficher les offres d'anniversaire") !!}</a>
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
