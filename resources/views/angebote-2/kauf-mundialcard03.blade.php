<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35fbfe202dc83" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>{!! trans_db('angebote2.card.purchase_title', null, 'Mundial Card - Achat') !!}</title>
  <meta content="{!! trans_db('angebote2.card.purchase_title', null, 'Mundial Card - Achat') !!}" property="og:title">
  <meta content="{!! trans_db('angebote2.card.purchase_title', null, 'Mundial Card - Achat') !!}" property="twitter:title">
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
<body class="body">
  <main id="main-content" class="main-content">
    <div class="w-container">
      <div href="" class="w-richtext">
        <p>‍</p>
        <h3><strong>{!! trans_db('angebote2.card.purchase_title', null, 'Mundial Card - Achat') !!}</strong></h3>
      </div>
      <div class="div-block-37">{!! trans_db('angebote2.card03.step', null, '3. Vérifier les informations') !!}</div>
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
  <div class="container-7 w-container">
    <div class="w-form">
      <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" class="form-2">
        <div>
          <div>
            <div class="div-block-43">
              <div class="columns-4 w-row">
                <div class="column-10 w-col w-col-1"><img src="{{ asset("images/info_icon_blue.svg") }}" loading="lazy" alt="" class="image-25"></div>
                <div class="column-9 w-col w-col-11">
                  <p class="paragraph-15">{!! trans_db('angebote2.card03.verify_msg', null, 'Veuillez vérifier les informations et les corriger si elles sont incorrectes.') !!}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-form-grid-3">
          <div id="w-node-_2d7f62a7-1589-6de4-3f0e-8ea69aead8ee-03dad6a2" class="div-block-42"><label for="Last-Name-2" id="contact-last-name">{!! trans_db('angebote2.card03.billing_address', null, 'Adresse de facturation') !!}</label>
            <p>Brigitte Favre<br>Rue des œillets 23<br>21362 Bringels</p>
          </div>
          <div id="w-node-_2d7f62a7-1589-6de4-3f0e-8ea69aead8f7-03dad6a2" class="div-block-42"><label for="Last-Name-2" id="contact-last-name">{!! trans_db('angebote2.card03.shipping_address', null, 'Adresse de livraison') !!}</label>
            <p>Brigitte Favre<br>Rue des œillets 23<br>21362 Bringels</p>
          </div>
          <div id="w-node-_2d7f62a7-1589-6de4-3f0e-8ea69aead900-03dad6a2" class="div-block-41"><label for="Last-Name-2" id="contact-last-name">{!! trans_db('angebote2.card03.phone', null, 'Téléphone') !!}</label>
            <p>0041 899 21 54 44</p>
          </div>
          <div id="w-node-_2d7f62a7-1589-6de4-3f0e-8ea69aead905-03dad6a2" class="div-block-41"><label for="Last-Name-2" id="contact-last-name">E-Mail</label>
            <p>brigi_favre@gmail.com</p>
          </div>
          <a id="w-node-_2d7f62a7-1589-6de4-3f0e-8ea69aead90a-03dad6a2" href="../no-way.html" class="link-block-2 w-inline-block"><img src="{{ asset("images/edit.svg") }}" loading="lazy" alt="" class="image-26">
            <div class="text-block-7">{!! trans_db('angebote2.card03.edit_info', null, 'Modifier les informations') !!}</div>
          </a>
        </div>
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
    <div class="div-block-40">
      <div class="div-block-100"></div>
    </div>
    <div class="prozentanzeige01">
      <div class="text-block-6">3/4</div>
    </div>
    <div class="div-block-35">
      <div>
        <div class="w-layout-grid grid-2">
          <a href="{{ route("angebote2.kaufMundialcard02") }}" class="secondary-abbrechen-button w-button">{!! trans_db('angebote2.card.back_btn', null, 'Rétour') !!}</a>
          <a href="{{ route("angebote2.kaufMundialcard04") }}" class="primary-weiter-button w-button">{!! trans_db('angebote2.card.next', null, 'Suivant') !!}</a>
        </div>
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
