<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35ffaca02dc78" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>{{ trans_db('page.contact.title', null, 'Contact - Mundial') }}</title>
  <meta content="{{ trans_db('page.contact.heading', null, 'Contact') }}" property="og:title">
  <meta content="{{ trans_db('page.contact.heading', null, 'Contact') }}" property="twitter:title">
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
      <div href="" class="w-richtext">
        <h2><strong>{{ trans_db('page.contact.heading', null, 'Contact') }}</strong></h2>
        <p>{{ trans_db('page.contact.description', null, 'We would love to hear from you. Contact us today!') }}</p>
      </div>
      <div data-duration-in="300" data-duration-out="100" class="w-tabs">
        <div class="w-tab-content">
          <div data-w-tab="Tab 2" class="w-tab-pane"></div>
          <div data-w-tab="Tab 3" class="w-tab-pane"></div>
          <div data-w-tab="Tab 4" class="w-tab-pane"></div>
        </div>
      </div>
    </div>
    <div class="w-container">
      <h2>{{ trans_db('page.contact.form_title', null, 'Contact Form') }}</h2>
      <div class="w-form">
        <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" redirect="https://mundial-de.webflow.io/no-way" data-redirect="https://mundial-de.webflow.io/no-way" class="form-2">
          <div>
            <div id="formInstructions" class="small-text"><em>{{ trans_db('kontakt.form.required_note', null, '* Required fields') }}<br>‍</em></div>
          </div>
          <div><label for="First-Name-2" id="contact-first-name">{{ trans_db('kontakt.form.reason_label', null, 'Contact reason *') }}</label><select id="field" name="field" required="" class="w-select">
              <option value="">{{ trans_db('kontakt.form.reason_select', null, 'Please select...') }}</option>
              <option value="First">{{ trans_db('kontakt.form.reason_general', null, 'General inquiry') }}</option>
              <option value="Second">{{ trans_db('kontakt.form.reason_subscription', null, 'Subscription inquiry') }}</option>
              <option value="First">{{ trans_db('kontakt.form.reason_reservation', null, 'Reservation') }}</option>
              <option value="Third">{{ trans_db('kontakt.form.reason_praise', null, 'Praise and complaints') }}</option>
              <option value="Another Choice">{{ trans_db('kontakt.form.reason_other', null, 'Other') }}</option>
            </select></div>
          <div class="contact-form-grid-2">
            <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95dd-f11246f9"><label for="First-Name" id="contact-first-name">{{ trans_db('kontakt.form.first_name', null, 'First Name *') }}</label><input type="text" class="w-input" maxlength="256" name="First-Name" data-name="First Name" id="First-Name" required=""></div>
            <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95e1-f11246f9"><label for="Last-Name" id="contact-last-name">{{ trans_db('kontakt.form.last_name', null, 'Last Name *') }}</label><input type="text" class="w-input" maxlength="256" name="Last-Name" data-name="Last Name" id="Last-Name" required=""></div>
            <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95e5-f11246f9"><label for="Email" id="contact-email">{{ trans_db('kontakt.form.email', null, 'E-mail *') }}</label><input type="email" class="w-input" maxlength="256" name="Email" data-name="Email" id="Email" required=""></div>
            <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95e9-f11246f9"><label for="Contact-Phone-Number" id="contact-phone">{{ trans_db('kontakt.form.phone', null, 'Phone Number') }}</label><input type="number" class="w-input" maxlength="256" name="Contact-Phone-Number" data-name="Contact Phone Number" id="Contact-Phone-Number"></div>
            <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95ed-f11246f9"><label for="Message" id="contact-message">{{ trans_db('kontakt.form.message', null, 'Message *') }}</label><textarea data-name="Message" maxlength="5000" id="Message" name="Message" required="" class="w-input"></textarea></div>
          </div>
        </form>
        <div class="w-form-done">
          <div>{{ trans_db('kontakt.form.success', null, 'Thank you! Your submission has been received!') }}</div>
        </div>
        <div class="w-form-fail">
          <div>{{ trans_db('kontakt.form.error', null, 'Oops! Something went wrong while submitting the form.') }}</div>
        </div>
      </div>
      <a href="{{ route('noWay') }}" class="primary-button w-button">{{ trans_db('kontakt.form.submit', null, 'Submit Form') }}</a>
    </div>
    <div class="container-21 w-container">
      <div class="w-row">
        <div class="column-3 w-col w-col-6">
          <h4>{{ trans_db('kontakt.hours.heading', null, 'Opening Hours') }}</h4>
          <p>{!! trans_db('kontakt.hours.times', null, 'Mon - Thu: 08:00 - 19:00<br>Fri: 08:00 - 21:00<br>Sat: 09:00 - 17:00<br>Sun: 09:00 - 12:00') !!}</p>
        </div>
        <div class="column-4 w-col w-col-6">
          <h4>{{ trans_db('kontakt.contact.heading', null, 'Contact') }}</h4>
          <p>{!! trans_db('kontakt.contact.address', null, 'Mundial Leisure Center<br>Frohstrasse 32<br>21362 Bringels<br>Phone: 0041 870 23 57 48') !!}</p>
        </div>
      </div>
    </div>
    <div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
      <div class="container-6 w-container">
        <a href="{{ route("index") }}" class="w-inline-block"><img src="{{ asset("images/logo1_v3.svg") }}" height="40" alt="" class="image"></a>
        <nav role="navigation" class="w-nav-menu">
          <a href="{{ route("angebote3") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.offers') }}</a>
          <a href="{{ route("preise") }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.pricing') }}</a>
          <a href="{{ route("kontakt") }}" aria-current="page" class="nav-link-2 w-nav-link w--current">{{ trans_db('nav.contact') }}</a>
          <x-language-selector />
        </nav>
        <a href="{{ route('aufgabe') }}" class="button-task-header w-button">{{ trans_db('angebote2.common.task_button', null, 'Task') }}</a>
        <div class="menu-button w-nav-button">
          <div class="icon w-icon-nav-menu"></div>
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
