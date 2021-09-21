<?php
/**
 * Created by PhpStorm.
 * User: hm909
 * Date: 7/6/16
 * Time: 11:40
 */



switch ($lead_type) {
    case 65:
        // params def  ;
        break;
    case 67:
        // params def  ;
        break;
    case 69:
        // params def  ;
        break;
    case 71:
        // params def  ;
        break;
    case 73:
        // params def  ;
        break;
    case 75:  //  Health 2

        $test_lead = 0;

        $phone_validation = 'Success';
        $Browser = '';
        $Keyword_ID = '';
        $Aff_ID = '';
        $Full_URL = '';
        $Landing_Page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $Landing_Page = substr($Landing_Page, 0, -11);

        $params = array(
            'TYPE' => $lead_type,
            'Test_Lead' => $test_lead,
            //Here goes some other fields that are not being sent
            'TCPA_Language' => $_REQUEST['TCPA_Language'] ? $_REQUEST['TCPA_Language'] : 'None',
            'TCPA_Consent' => 'Yes',
            'QE_Eligible' => '',
            'Interaction_ID' => '',
            'Trusted_Form' => 'Yes',
            'Universal_Lead_ID' => $_REQUEST['universal_leadid'] ? $_REQUEST['universal_leadid'] : $_POST['universal_leadid'],
            'Phone_Validation' => $phone_validation,
            'Browser' => $browser,
            'Keyword_ID' => $Keyword_ID,
            'Aff_ID' => $_REQUEST['aff_id'] ? $_REQUEST['aff_id'] : '0',
            'Full_URL' => $_POST['full_url'],
            'IP_Address' => $_POST['ip_address'],
            'SRC' => $_REQUEST['src'] ? $_REQUEST['src'] : 'default_75',
            'Landing_Page' => $_REQUEST['landing_page'] ? $_REQUEST['landing_page'] : $_POST['landing_page'],
            'Sub_ID' => $_REQUEST['sub_id'] ? $_REQUEST['sub_id'] : '0',
            'Pub_ID' => $_REQUEST['pub_id'] ? $_REQUEST['pub_id'] : '0',
            'Optout' => '',
            'Unique_Identifier' => '',
            'Transaction_ID' => $_REQUEST['trans_id'] ? $_REQUEST['trans_id'] : '0',
            'forensiq_score' => $_REQUEST['forensiq_score'] ? $_REQUEST['forensiq_score'] : '0',
            'Affiliate_Ref' => $_REQUEST['aff_ref'] ? $_REQUEST['aff_ref'] : $default_params['aff_ref'],
            'INCOMENUMBER' => '',
            'Number_Of_Applicants' => '',
            'First_Name' => $_POST['first_name'],
            'Last_Name' => $_POST['last_name'],
            'Address' => $_POST['street1'],
            'City' => $_POST['city'],
            'State' => $_POST['state'],
            'Zip' => $_POST['zipcode'],
            'Email' => $_POST['email'],
            'Day_Phone' => preg_replace("`\D`", "", $_POST['day_phone']),
            'Household_Income' => $_POST['income'],
            'Household_People' => $_POST['household-size'],
            'Gender' => $_POST['applicant_gender'],
            'DOB' => $dob,
            // Height and weight added with isset
            'Age' => $age,
            // pregnant added as isset


            //'Aff_Sub' => $_REQUEST['aff_sub'] ? $_REQUEST['aff_sub'] : $_POST['aff_sub'],
            //'Secondary_Phone' => '',

            //'Month_Of_Birth' => substr($_POST['DateOfBirth_Month'], 0, 3),
            //'Day_Of_Birth' => $_POST['DateOfBirth_Day'],
            //'Year_Of_Birth' => $_POST['DateOfBirth_Year'],
            'Tobacco' => $smoker
        );

        (isset($_POST['applicant_heightFT'])) ? $params['Height_Feet'] = $_POST['applicant_heightFT'] : $params['Height_Feet'] = '0';
        (isset($_POST['applicant_heightIN'])) ? $params['Height_Inches'] = $_POST['applicant_heightIN'] : $params['Height_Inches'] = '0';
        (isset($_POST['applicant_weight'])) ? $params['Weight'] = $_POST['applicant_weight'] : $params['Weight'] = '0';

        $_POST['pregnant'] == 'Y' ? $params['Pregnant'] = 'Yes' : $params['Pregnant'] = 'No';
        $_POST['health'] == 'Y' ? $params['Health_Conditions'] = 'Yes' : $params['Health_Conditions'] = 'No';

        $_POST['insured'] == 'Y' ? $params['Currently_Covered'] = 'Yes' : $params['Currently_Covered'] = 'No';

        $_POST['previously-denied'] == 'Y' ? $params['Coverage_Denied'] = 'Yes' : $params['Coverage_Denied'] = 'No';


        //Insurance_Company
        //Conditions
        //Diabetic
        (isset($_POST['diabetes'])) ? $params['Diabetic'] = 'Yes' : $params['Diabetic'] = 'No';

        //Hospitalized_Last_5_Years
        $_POST['hospitalized'] == 'Y' ? $params['Hospitalized_Last_5_Years'] = 'Yes' : $params['Hospitalized_Last_5_Years'] = 'No';

        //Prescription_Medication
        $_POST['prescription'] == 'Y' ? $params['Prescription_Medication'] = 'Yes' : $params['Prescription_Medication'] = 'No';


        break;
    case 77:
        // params def  ;
        break;
    case 79:   //  Medicare

        $test_lead = 0;

        $phone_validation = 'Success';
        $Browser = '';
        $Keyword_ID = '';
        $Aff_ID = '';
        $Full_URL = '';
        $Landing_Page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $Landing_Page = substr($Landing_Page, 0, -11);

        $params = array(
            'TYPE' => $lead_type,
            'Test_Lead' => $test_lead,

            //    NO	Skip_XSL
            //    NO	Match_With_Partner_ID
            //    NO	Redirect_URL
            //    NO	High_Budget_Sales
            //    NO	Low_Budget_Sales
            //    NO	Disposition
            //    NO	Interaction_ID
            //    NO	Trusted_Form

            'Universal_Lead_ID' => $_REQUEST['universal_leadid'] ? $_REQUEST['universal_leadid'] : $_POST['universal_leadid'],
            'Phone_Validation' => $phone_validation,
            'Browser' => $browser,
            'Keyword_ID' => $Keyword_ID,
            'Full_URL' => $_POST['full_url'],
            'SRC' => $_REQUEST['src'] ? $_REQUEST['src'] : 'default_79',
            'Landing_Page' => $_REQUEST['landing_page'] ? $_REQUEST['landing_page'] : $_POST['landing_page'],
            'IP_Address' => $_POST['ip_address'],
            'Sub_ID' => $_REQUEST['sub_id'] ? $_REQUEST['sub_id'] : $_POST['sub_id'],
            'Pub_ID' => $_REQUEST['pub_id'] ? $_REQUEST['pub_id'] : $_POST['pub_id'],
            'Optout' => '',
            'Unique_Identifier' => '',
            'Transaction_ID' => $_REQUEST['trans_id'] ? $_REQUEST['trans_id'] : '0',
            'tcpa_language' => $_REQUEST['TCPA_Language'] ? $_REQUEST['TCPA_Language'] : 'None',
            'forensiq_score' => $_REQUEST['forensiq_score'] ? $_REQUEST['forensiq_score'] : $_POST['forensiq_score'],
            'Affiliate_Ref' => $_REQUEST['aff_ref'] ? $_REQUEST['aff_ref'] : '1001',
            'First_Name' => $_POST['first_name'],
            'Last_Name' => $_POST['last_name'],
            'Address' => $_POST['street1'],
            'City' => $_POST['city'],
            'State' => $_POST['state'],
            'Zip' => $_POST['zipcode'],
            'Primary_Phone' => preg_replace("`\D`", "", $_POST['day_phone']),

            'Secondary_Phone' => '',
            'Email' => $_POST['email'],


            //    NO	End_Stage_Renal_Disease
            //    NO	Medicare_Coverage

            'Gender' => $_POST['applicant_gender'],
            'Tobacco' => $smoker,
            'DOB' => $dob,
            'Age' => $age_decimals,
            // Height and weight added with isset


            // ****  Fields Below are not in boberdoo Specs for this lead type

            //    'TCPA_Consent' => 'Yes',
            //    'QE_Eligible' => '',
            //    'Interaction_ID' => '',
            //    'Trusted_Form' => 'Yes',
            //    'Aff_ID' => $Aff_ID,
            //    'INCOMENUMBER' => '',
            //    'Number_Of_Applicants' => '',
            //    'Household_Income' => $_POST['income'],
            //    'Household_People' => $_POST['household-size'],
            //    'Aff_Sub' => $_REQUEST['aff_sub'] ? $_REQUEST['aff_sub'] : $_POST['aff_sub'],
            //
            //
            //    'Month_Of_Birth' => substr($_POST['DateOfBirth_Month'], 0, 3),
            //    'Day_Of_Birth' => $_POST['DateOfBirth_Day'],
            //    'Year_Of_Birth' => $_POST['DateOfBirth_Year'],
        );


        (isset($_POST['applicant_heightFT'])) ? $params['Height_Feet'] = $_POST['applicant_heightFT'] : $params['Height_Feet'] = '0';
        (isset($_POST['applicant_heightIN'])) ? $params['Height_Inches'] = $_POST['applicant_heightIN'] : $params['Height_Inches'] = '0';
        (isset($_POST['applicant_weight'])) ? $params['Weight'] = $_POST['applicant_weight'] : $params['Weight'] = '0';


        //    $_POST['pregnant'] == 'Y' ? $params['Pregnant'] = 'Yes' : $params['Pregnant'] = 'No';
        //    $_POST['health'] == 'Y' ? $params['Health_Conditions'] = 'Yes' : $params['Health_Conditions'] = 'No';
        //    $_POST['insured'] == 'Y' ? $params['Currently_Covered'] = 'Yes' : $params['Currently_Covered'] = 'No';
        //    $_POST['previously-denied'] == 'Y' ? $params['Coverage_Denied'] = 'Yes' : $params['Coverage_Denied'] = 'No';
        //    (isset($_POST['diabetes'])) ? $params['Diabetic'] = 'Yes' : $params['Diabetic'] = 'No';
        //    $_POST['hospitalized'] == 'Y' ? $params['Hospitalized_Last_5_Years'] = 'Yes' : $params['Hospitalized_Last_5_Years'] = 'No';
        //    $_POST['prescription'] == 'Y' ? $params['Prescription_Medication'] = 'Yes' : $params['Prescription_Medication'] = 'No';


        break;
    case 81:
        // params def  ;
        break;
}

