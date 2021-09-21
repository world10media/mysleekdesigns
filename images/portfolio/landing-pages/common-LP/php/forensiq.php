<?php
/**
 * Created by PhpStorm.
 * User: hm909
 * Date: 7/19/16
 * Time: 18:42
 */

function get_forensiq_script ($form_token, $aff_id, $aff_sub, $offer_id, $trans_id){
    $forensiq_script = '<script
    src="//c.securepaths.com/js/implement.js?org=iw2gjLz9IveY5JlBtsgl&s='. $form_token.'&p='.
        $aff_id.'&a='. $aff_sub.'&cmp='. $offer_id.'&rt=action&sl=1&stId='. $trans_id.'"></script>
<noscript>
    <img
        src="https://www.securepaths.com/pixel.cgi?org=iw2gjLz9IveY5JlBtsgl&s='. $form_token.'&p='.
        $aff_id.'&a='. $aff_sub.'&cmp='. $offer_id.'&rt=action&sl=1&stId='. $trans_id.'"
        width="1" height="1" border="0"/>
</noscript>';

    return $forensiq_script;
};