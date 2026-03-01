<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35f6e3a02dc77" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>AUFGABE</title>
  <meta content="AUFGABE" property="og:title">
  <meta content="AUFGABE" property="twitter:title">
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
      <div data-duration-in="300" data-duration-out="100" class="w-tabs">
        <div class="w-tab-content">
          <div data-w-tab="Tab 2" class="w-tab-pane"></div>
          <div data-w-tab="Tab 3" class="w-tab-pane"></div>
          <div data-w-tab="Tab 4" class="w-tab-pane"></div>
        </div>
      </div>
    </div>
    <div class="w-container">
      <div data-duration-in="300" data-duration-out="100" class="w-tabs">
        <div class="w-tab-content">
          <div data-w-tab="Tab 2" class="w-tab-pane"></div>
          <div data-w-tab="Tab 3" class="w-tab-pane"></div>
          <div data-w-tab="Tab 4" class="w-tab-pane"></div>
        </div>
      </div>
    </div>
    <div class="container-9 w-container">
      <h1 class="heading-10">Tâche 2</h1>
      <p class="paragraph-9">Vous êtes fréquemment au centre de loisirs Mundial et vous souhaitez acheter un abonnement annuel via le site web. <br><br><strong>Note</strong> : Imaginez que vous vous appelez "Brigitte Favre", vous avez 45 ans et vous n'avez pas une carte de crédit.</p>
      <div class="div-block-7">
        <div class="w-layout-grid grid-2">
          <a href="{{ route("task2Cancel") }}" class="button3 w-button">Sauter la tâche</a>
          <div class="w-embed w-script"><button class="button" onclick="goBack()">Continuer</button>
            <script>
function goBack() {
  window.history.back();
}
</script>
          </div>
        </div>
      </div>
    </div>
  </main>
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
