---
company: Make HealthCare Great Again
web: www.makehealthcaregreatagain.com
domain: makehealthcaregreatagain.com
description: Affordable Healthcare for Everyone
---

{{> index_after_open_body}}
<div class="wrapper">
    <div class="row">
        <div class="small-12 columns hilary-trump-layout">
            {{> header}}
            {{> hero}}
            {{> footer}}
        </div>
    </div>
</div>

<script>
    <?php include '../../../common-LP/php/getHttpHost.php';?>
</script>

<script src="../../assets/js/app.js"></script>
<?php
echo $universal_lead_id_script;
?>
