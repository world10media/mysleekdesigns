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
{{> main-short-term-plans}}
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