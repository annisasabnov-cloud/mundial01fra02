<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35fdd7b02dc7f" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>{{ trans_db('page.error.title_401', null, 'Unauthorized') }}</title>
  <meta content="{{ trans_db('page.error.title_401', null, 'Unauthorized') }}" property="og:title">
  <meta content="{{ trans_db('page.error.title_401', null, 'Unauthorized') }}" property="twitter:title">
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
</head>
<body>
  <div class="utility-page-wrap">
    <div class="utility-page-content w-password-page w-form">
      <form action="/.wf_auth" method="post" class="utility-page-form w-password-page"><img src="https://d3e54v103j8qbb.cloudfront.net/static/password-page-lock.832ca8e2c9.svg" alt="">
        <h2>{{ trans_db('page.error.title_401', null, 'Unauthorized') }}</h2><label for="pass">{{ trans_db('button.password', null, 'Password') }}</label><input type="password" autofocus="true" maxlength="256" name="pass" id="pass" placeholder="Enter your password" class="w-password-page w-input"><input type="submit" value="{{ trans_db('button.submit', null, 'Submit') }}" data-wait="Please wait..." class="w-password-page w-button">
        <div class="w-password-page w-form-fail">
          <div>{{ trans_db('page.error.message_401', null, 'You are not authorized to access this page.') }}</div>
        </div>
        <div style="display:none" class="w-password-page w-embed w-script"><input type="hidden" name="path" value="<%WF_FORM_VALUE_PATH%>"><input type="hidden" name="page" value="<%WF_FORM_VALUE_PAGE%>"></div>
        <div style="display:none" class="w-password-page w-embed w-script">
          <script type="application/javascript">(function _handlePasswordPageOnload() {
	  if (/[?&]e=1(&|$)/.test(document.location.search)) {
	    document.querySelector('.w-password-page.w-form-fail').style.display = 'block';
	  }
	})()</script>
        </div>
      </form>
    </div>
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
