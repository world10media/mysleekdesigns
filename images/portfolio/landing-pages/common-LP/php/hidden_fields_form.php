<?php
echo '<input type="hidden" name="ip_address" id="ip_address" value="' . $_POST["ip_address"] . '"/>
            <input type="hidden" name="trans_id" id="trans_id"
                               value="' .  $_POST["trans_id"] . '" readonly>
                        <input type="hidden" name="aff_id" id="aff_id"
                               value="' .  $_POST["aff_id"] . '" readonly>
                        <!--<input type="hidden" name="sub_affiliate_id" id="sub_affiliate_id"
                               value="<?php /*echo $_POST["sub_affiliate_id"]; */?>" readonly="readonly">-->
                        <input type="hidden" name="src" id="src" value="' .  $_POST["src"] . '"
                        readonly>
                        <input type="hidden" name="full_url" id="full_url"
                               value="' .  $_POST["full_url"] . '" readonly>
                        <input type="hidden" name="landing_page" id="landing_page"
                               value="' .  $_POST["landing_page"] . '" readonly>
                        <input type="hidden" name="aff_sub" id="aff_sub"
                               value="' .  $_POST["aff_sub"] . '" readonly>
                        <input type="hidden" name="offer_id" id="offer_id"
                               value="' .  $_POST["offer_id"] . '" readonly>
                        <input type="hidden" name="aff_ref" id="aff_ref"
                               value="' .  $_POST["aff_ref"] . '" readonly>
                        <input type="hidden" name="sub_id" id="sub_id"
                               value="' .  $_POST["sub_id"] . '" readonly>
                        <input type="hidden" name="pub_id" id="pub_id"
                               value="' .  $_POST["pub_id"] . '" readonly>
                        <input type="hidden" name="universal_leadid" id="leadid_token"
                               value="' .  $_POST["universal_leadid"] . '" readonly>
                        <input type="hidden" name="insurance_type" id="insurance_type"
                               value="' .  $_POST["insurance_type"] . '" readonly>
                        <input type="hidden" name="forensiq_score" id="forensiq_score"
                               value="" readonly>
                        <input type="hidden" name="TCPA_Language" id="TCPA_Language"
                               value="" readonly>
                        <input type="hidden" name="phone_number" id="phone_number"
                               value="' .  $_POST["phone_number"] . '" readonly>
                        <input type="hidden" name="test_lead" id="test_lead"
                               value="' .  $_POST["test_lead"] . '" readonly>
                               ';
