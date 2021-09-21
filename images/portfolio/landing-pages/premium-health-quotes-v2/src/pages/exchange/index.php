---
company: Premium Health Quotes
web: www.premiumhealthquotes.com
domain: premiumhealthquotes.com
description: Affordable Health and Medicare Insurance
---

{{> index_after_open_body}}
{{> header}}
{{> hero}}
{{> carrier-logos-slider}}
{{> main-exchange}}
{{> get-insured-steps}}
{{> states}}
{{> footer}}

<script>
    <?php include '../../../common-LP/php/getHttpHost.php';?>
</script>

<script src="../../assets/js/app.js"></script>
<?php
echo $universal_lead_id_script;
?>

<script type="text/javascript" src="http://beeker.io/lab/exit-intent-popup/bioep.min.js"></script>

<script type="text/javascript">
    bioEp.init({
        html: '<div id="bio_ep_content">' +
        '<span> </span>' +
        '<span>WAIT!</span>' +
        '<span>Before you go... We can connect you to a licensed health insurance agent ready to help.</span>' +
        '<span>Call (855) 565-6231</span>' +
        '<a href="http://premiumhealthquotes.com/insure/quotes/" class="bio_btn">No thanks. I will continue online </a>' +
        '</div>',
        css: '#bio_ep {width: 600px; height: 460px; color: #fff; background-color: #1b45a4; text-align: center; padding: 45px;}' +
        '#bio_ep_content {padding: 0; font-family: "Open Sans";}' +
        '#bio_ep_content span:nth-child(2) {display: block; color: #fff; font-size: 45px; font-weight: 700; padding-bottom: 15px;}' +
        '#bio_ep_content span:nth-child(3) {display: block; font-size: 28px; padding-bottom: 15px; font-weight: 300;}' +
        '#bio_ep_content span:nth-child(4) {display: block; margin: -5px 0 0 0; font-size: 46px; font-weight: 600; padding-top:15px;}' +
        '#bio_ep_close {  margin: -32px 0 0 -34px; background-color: rgba(0, 0, 0, 0); color: rgba(255, 255, 255, 0.5); font-size: 27px;}' +
        '.bio_btn {display: inline-block; margin: 18px 0 0 0; padding: 7px; color: #fff; font-size: 18px; font-weight: 400; text-decoration: underline; cursor: pointer; -webkit-appearance: none; -moz-appearance: none; border-radius: 0;}'+
        'a:hover, a:focus {color: #d2dbef;}',
        fonts: ['//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'],
        cookieExp: 0
    });
</script>
