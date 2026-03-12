<!DOCTYPE html><!--  Last Published: Tue Mar 09 2021 08:57:01 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6044f3166ba35f45aa02dc88" data-wf-site="6044f3166ba35f926402dc6b">
<head>
  <meta charset="utf-8">
  <title>{{ trans_db('page.noway.title', null, 'No Way - Mundial') }}</title>
  <meta content="{{ trans_db('page.noway.title', null, 'No Way - Mundial') }}" property="og:title">
  <meta content="{{ trans_db('page.noway.title', null, 'No Way - Mundial') }}" property="twitter:title">
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
          <div data-w-tab="Tab 1" class="w-tab-pane">
            <h4>{{ trans_db('noway.tab1.title', null, "Children's Birthday at the Bowling Alley") }}</h4>
            <p>{!! trans_db('noway.tab1.intro', null, 'A great idea: celebrate your children\'s birthday at the bowling alley. The children get delicious food and drinks from us. The children will certainly have a lot of fun playing.') !!}</p>
            <div>{!! trans_db('noway.tab1.schedule', null, 'Children\'s birthday parties are available: Friday to Sunday, from 3:00 PM to 7:00 PM. Admission for 1 child costs only 9 francs. Children\'s birthday parties include:') !!}<br>‍</div>
            <div href="" class="w-richtext">
              <ul role="list">
                <li>{{ trans_db('noway.tab1.item1', null, '2 rounds of bowling') }}</li>
                <li>{{ trans_db('noway.tab1.item2', null, 'Bowling shoes included') }}</li>
                <li>{{ trans_db('noway.tab1.item3', null, '1 non-alcoholic drink per child') }}</li>
                <li>{{ trans_db('noway.tab1.item4', null, 'Certificates for all players') }}</li>
                <li>{{ trans_db('noway.tab1.item5', null, '1 bag of popcorn') }}</li>
                <li>{{ trans_db('noway.tab1.item6', null, 'Decorated bowling lane') }}</li>
                <li>{{ trans_db('noway.tab1.item7', null, '2 coffees for parents') }}</li>
              </ul>
              <p>{!! trans_db('noway.tab1.footer', null, 'The offer is only valid up to the 14th birthday. At least 6 children must attend the birthday party. You must book the birthday party in advance. For an additional fee, children can also receive a children\'s menu: Chicken Nuggets with French Fries.<br><br>Book an appointment for the children\'s birthday. We are happy to make you an offer for a great children\'s birthday at the bowling alley.') !!}</p>
              <p>‍</p>
            </div>
            <a href="#cards-section" class="button2 w-button">{{ trans_db('noway.book_appointment', null, 'Book Appointment') }}</a>
          </div>
          <div data-w-tab="Tab 2" class="w-tab-pane">
            <h4>{{ trans_db('noway.tab2.title', null, 'Birthday Offer for Teenagers') }}</h4>
            <div>{!! trans_db('noway.tab2.intro', null, 'Birthday parties for teenagers are available: Thursday to Sunday, from 6:00 PM. Admission costs only 52 francs for 1 lane. 2 to 8 people can play on 1 lane. The birthday offer includes:') !!}</div>
            <div href="" class="w-richtext">
              <ul role="list">
                <li>{{ trans_db('noway.tab1.item1', null, '2 rounds of bowling') }}</li>
                <li>{{ trans_db('noway.tab1.item2', null, 'Bowling shoes included') }}</li>
                <li>{{ trans_db('noway.tab2.item3', null, '2 bottles of non-alcoholic drinks') }}</li>
                <li>{{ trans_db('noway.tab2.item4', null, '1 plate of snacks per lane') }}</li>
              </ul>
              <p>{{ trans_db('noway.tab2.footer', null, 'The birthday offer is valid for teenagers aged 15 to 18 years.') }}</p>
            </div>
            <a href="#cards-section" class="button2 w-button">{{ trans_db('noway.book_appointment', null, 'Book Appointment') }}</a>
          </div>
          <div data-w-tab="Tab 3" class="w-tab-pane">
            <h4>{{ trans_db('noway.tab3.title', null, 'Birthday Offer for Adults 1') }}</h4>
            <div>{!! trans_db('noway.tab3.intro', null, 'Birthday parties for adults are available: Thursday to Sunday, from 6:00 PM. Admission costs only 52 francs for 1 lane. 2 to 8 people can play on 1 lane. Birthday offer 1 includes:') !!}</div>
            <div href="" class="w-richtext">
              <ul role="list">
                <li>{{ trans_db('noway.tab1.item1', null, '2 rounds of bowling') }}</li>
                <li>{{ trans_db('noway.tab1.item2', null, 'Bowling shoes included') }}</li>
                <li>{{ trans_db('noway.tab2.item3', null, '2 bottles of non-alcoholic drinks') }}</li>
                <li>{{ trans_db('noway.tab2.item4', null, '1 plate of snacks per lane') }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-9 w-container">
          <h1 class="heading-10">{{ trans_db('noway.attention.heading', null, 'Attention') }}</h1>
          <p class="paragraph-9">{{ trans_db('noway.attention.body', null, 'This page is not needed to complete the task. Please find another way to complete the task.') }}</p>
          <div class="div-block-7">
            <div class="w-embed w-script"><button class="button" onclick="goBack()">{{ trans_db('noway.attention.button', null, 'Continue task') }}</button>
              <script>
function goBack() {
  window.history.back();
}
</script>
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
