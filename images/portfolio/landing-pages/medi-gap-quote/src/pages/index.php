---
company: MediGapQuote
web: www.medigapquote.org
domain: medigapquote.org
description: Affordable Medicare Insurance
---

{{> index-after-open-body}}
{{> header}}
{{> hero}}
{{> carrier-logos-slider}}
{{> main}}
{{> short-form-enter-zip}}
{{> faqs}}
{{> module-form-zip-cta}}
{{> footer}}

<script>
    <?php
    include '../../../common-LP/php/getHttpHost.php';
    ?>
</script>
<script src="../../assets/js/app.js"></script>
<?php
echo $universal_lead_id_script;
?>

<script>
    $(function(){
        $(".digits").countdown({
            image: "media/img/digits.png",
            format: "mm:ss",
            startTime: "25:14"
        });
    });
</script>
