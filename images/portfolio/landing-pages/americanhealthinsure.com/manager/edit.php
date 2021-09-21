<?php
/**
 * Created by PhpStorm.
 * User: HM9
 * Date: 4/14/2015
 * Time: 2:48 PM
 */

include 'inc/config.php';

session_start();

if (isset($_POST["ver"])) {
    $ver = $_POST["ver"];
} elseif (isset($_GET["ver"])) {
    $ver = $_GET["ver"];
} else {
    echo "Couldn't get the version";
    die();
}

if (isset($_SESSION['myusername'])) {
    $conn2 = new mysqli($servername, $username, $password, $dbname);
    if ($conn2->connect_error) {
        die("Connection failed: " . $conn2->connect_error);
    }
} else {
    echo "You're not logged in. Go to login.php";
    die();
};


$sql1 = "select * from index_ctrl where index_ver = $ver";
$rslt1 = $conn2->query($sql1);

if ($rslt1->num_rows > 0) {
    while ($row = $rslt1->fetch_assoc()) {
        $index_ver = $row["index_ver"];
        $campaign_name = $row["campaign_name"];
        $index_aspect = $row["index_aspect"];
        $lead_type_id = $row["lead_type_id"];
        $index_default_SRC = $row["index_default_SRC"];
        $index_default_AffRef = $row["index_default_AffRef"];
        $index_exist = $row["index_exist"];
        $index_has_phone_number_header = intval($row["index_has_phone_number_header"]);
        $phone_number = $row["phone_number"];
        $index_has_phone_number_footer = $row["index_has_phone_number_footer"];
    }
}


$sql2 = "select * from index_zip_ctrl where index_zip_ver = $ver";
$rslt2 = $conn2->query($sql2);

if ($rslt2->num_rows > 0) {
    while ($row = $rslt2->fetch_assoc()) {
        $index_zip_lead_type = $row["index_zip_lead_type"];
        $index_zip_ver = $row["index_zip_ver"];
        $index_zip_aspect = $row["index_zip_aspect"];
        $index_zip_default_SRC = $row["index_zip_default_SRC"];
        $index_zip_default_AffRef = $row["index_zip_default_AffRef"];
        $index_zip_exist = $row["index_zip_exist"];
        $index_zip_has_phone_number_header = $row["index_zip_has_phone_number_header"];
        $index_zip_has_phone_number_footer = $row["index_zip_has_phone_number_footer"];
        $banner_position_1 = $row["banner_position_1"];
        $banner_position_2 = $row["banner_position_2"];
        $banner_position_3 = $row["banner_position_3"];
    }
}


$sql3 = "select * from page_ctrl where page_ver = $ver";
$rslt3 = $conn2->query($sql3);

if ($rslt3->num_rows > 0) {
    while ($row = $rslt3->fetch_assoc()) {
        $page_exist = $row["page_exist"];
        $page_has_phone_number_header = $row["page_has_phone_number_header"];
        $self_emp = $row["self_emp"];
        $insured = $row["insured"];
        $Spouse = $row["Spouse"];
        $no_of_children = $row["no_of_children"];
        $est_Income = $row["est_Income"];
        $affordable = $row["affordable"];
        $hospitalized = $row["hospitalized"];
        $physician = $row["physician"];
        $prescription = $row["prescription"];
        $previously_denied = $row["previously_denied"];
        $ss_disabled = $row["ss_disabled"];
        $pregnant = $row["pregnant"];
        $health = $row["health"];
        $Household_size = $row["Household_size"];
        $expected_income = $row["expected_income"];
        $click_agree_terms_cond = $row["click_agree_terms_cond"];
        $affil_contact = $row["affil_contact"];

    }
}


$sql4 = "select * from thankyou_ctrl where thankyou_ver = $ver";
$rslt4 = $conn2->query($sql4);

if ($rslt4->num_rows > 0) {
    while ($row = $rslt4->fetch_assoc()) {
        $thankyou_exist = $row["thankyou_exist"];
        $thankyou_has_phone_number_header = $row["thankyou_has_phone_number_header"];
    }
}



$states_list = array("AL", "AK", "AZ", "AR", "CA", "CO", "CT", "DE", "FL", "GA", "HI", "ID", "IL", "IN", "IA", "KS",
    "KY", "LA", "ME", "MD", "MA", "MI", "MN", "MS", "MO", "MT", "NE", "NV", "NH", "NJ", "NM", "NY", "NC", "ND", "OH",
    "OK", "OR", "PA", "RI", "SC", "SD", "TN", "TX", "UT", "VT", "VA", "WA", "WV", "WI", "WY", "PR", "DC");

$states_list_name = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut",
    "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky",
    "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri",
    "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina",
    "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota",
    "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming",
    "Puerto Rico", "District of Columbia");

$state_value = array();

$sql5 = "select * from states_ctrl where states_ver = $ver";
$rslt5 = $conn2->query($sql5);

if ($rslt5->num_rows > 0) {
    while ($row = $rslt5->fetch_assoc()) {
        for ($x = 0; $x < count($states_list); $x++) {
            $state_value[$x] = $row[$states_list[$x]];
        }
    }
}




$sql5 = "select * from affiliates_ctrl where version = 23";
$rslt5 = $conn2->query($sql5);

if ($rslt5->num_rows > 0) {
    while ($row = $rslt5->fetch_assoc()) {
        $id = $row["id"];
        $offer_ref = $row["offer_ref"];
        $affiliate_name = $row["affiliate_name"];
        $sub_id = $row["sub_id"];
        $did = $row["did"];
    }
}

//var_dump($rslt5);
//echo $rslt5;




//$conn2->close();

?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Website Campaign Manager</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/login2.css" rel="stylesheet">
    <script src="js/login2.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.colorbox-min.js"></script>

    <style type="text/css">
        .fieldset-auto-width {
            display: inline-block;
        }
    </style>

    <script>
        $(function () {
            $("#check").button();
            $("#format").buttonset();
        });

        $(document).ready(function () {
            $('#selecctall').click(function (event) {  //on click
                if (this.checked) { // check select status
                    $('.checkbox1').each(function () { //loop through each checkbox
                        this.checked = true;  //select all checkboxes with class "checkbox1"
                    });
                } else {
                    $('.checkbox1').each(function () { //loop through each checkbox
                        this.checked = false; //deselect all checkboxes with class "checkbox1"
                    });
                }
            });

        });


    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#formselector").change(function(){
                $(this).find("option:selected").each(function(){
                    if($(this).attr("value")=="short"){
                        $(".short").show();
                        $(".long").hide();

                    }
                    else if($(this).attr("value")=="long"){
                        $(".short").hide();
                        $(".long").show();
                    }
                });
            }).change();
        });
    </script>

    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>

</head>
<body>


<div class="container">
    <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
        <div class="col-md-4">
            <h4>Editing Campaign : <?php echo $campaign_name; ?></h4>
            <h5>Logged In as : <strong><?php echo $_SESSION['myusername'] ?></strong></h5>
            <a class="btn btn-default" href="logout.php" role="button">Log Out</a>
            <a class="btn btn-default" href="main_new.php" role="button">Back to Main Page</a>

            <!--<div class="col-md-12">
                <label for="formselector"><h4>Select Short or Long Form</h4></label>
                <select id="formselector" class="form-control">
                    <option value="">--- Select --</option>
                    <option value="short">Short Form</option>
                    <option value="long">Zip page + Long Form</option>
                </select>
            </div>-->


        </div>

    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="col-md-6">
                <fieldset class="short">
                    <legend><b>FOR ONE SINGLE PAGE FORM </b></legend>
                    <form action="update.php?f=index_update" method="post" class="form_1">
                        <table>
                            <tr>
                                <td><p><b>Version:</td>
                                <td><input name="index_ver" type="text" class="form_2"
                                           value="<?php echo $index_ver; ?>"
                                           placeholder="<?php echo $index_ver; ?>"
                                           style="width: auto" readonly> </p></b></td>
                            </tr>
                            <tr>
                                <td><p><b>Campaign Name:</b></td>
                                <td><input name="campaign_name" type="text" class="form_2"
                                           value="<?php echo $campaign_name; ?>"
                                           placeholder="<?php echo $campaign_name; ?>"
                                           style="width: auto"> </p></td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Landing Page: </b>
                                        <button type="button" class="" data-toggle="modal" data-target="#myModal">
                                            ?
                                        </button>
                                </td>
                                <td><select name="index_aspect" id="index_aspect" type="text" style="width: auto">
                                        <option <?php if ($index_aspect == 0) {
                                            echo "selected";
                                        }; ?>>0
                                        </option>
                                        <option <?php if ($index_aspect == 5) {
                                            echo "selected";
                                        }; ?>>5
                                        </option>
                                        <option <?php if ($index_aspect == 6) {
                                            echo "selected";
                                        }; ?>>6
                                        </option>
                                        <option <?php if ($index_aspect == 11) {
                                            echo "selected";
                                        }; ?>>11
                                        </option>
                                        <option <?php if ($index_aspect == 21) {
                                            echo "selected";
                                        }; ?>>21
                                        </option>
                                        <option <?php if ($index_aspect == 22) {
                                            echo "selected";
                                        }; ?>>22
                                        </option>
                                        <option <?php if ($index_aspect == 23) {
                                            echo "selected";
                                        }; ?>>23
                                        </option>
                                        <option <?php if ($index_aspect == 24) {
                                            echo "selected";
                                        }; ?>>24
                                        </option>
                                        <option <?php if ($index_aspect == 25) {
                                            echo "selected";
                                        }; ?>>25
                                        </option>
                                        <!--<option <?php /*if ($index_aspect == 26) {
                                            echo "selected";
                                        }; */?>>26
                                        </option>-->
                                    </select> </p></td>
                            </tr>
                            <tr>
                                <td><p>
                                        <b>Lead Type ID: </b>
                                </td>
                                <td>
                                    <input name="lead_type_id" type="number" class="form_2"
                                           value="<?php echo $lead_type_id; ?>"
                                           placeholder="<?php echo $lead_type_id; ?>"
                                           style="width: auto"></p>
                                </td>
                            </tr>
                            <tr>
                                <td><p>
                                        <b>Default SRC: </b>
                                </td>
                                <td>
                                    <input name="index_default_SRC" type="text" class="form_2"
                                           value="<?php echo $index_default_SRC; ?>"
                                           placeholder="<?php echo $index_default_SRC; ?>"
                                           style="width: auto"></p>
                                </td>
                            </tr>
                            <tr>
                                <td><p>
                                        <b>Default Aff_Ref: </b>
                                </td>
                                <td>
                                    <input name="index_default_AffRef" type="number" class="form_2"
                                           value="<?php echo $index_default_AffRef; ?>"
                                           placeholder="<?php echo $index_default_AffRef; ?>"
                                           style="width: auto"></p>
                                </td>
                            </tr>
                        </table>

                        <table>
                            <tr>
                                <td><input type="checkbox" name="index_exist"
                                        <?php if ($index_exist) {
                                            echo "checked=\"checked\"";
                                        }; ?> value="1"<br></td>
                                <td><b>Index Exist?</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="index_has_phone_number_header"
                                        <?php if ($index_has_phone_number_header) {
                                            echo "checked=\"checked\"";
                                        } ?> value="1"<br></td>
                                <td><b>Include Phone Header?</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input name="phone_number" type="text" class="form_2"
                                           value="<?php echo $phone_number; ?>"
                                           placeholder="<?php echo $phone_number; ?>"
                                           style="width: auto"> </p></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="index_has_phone_number_footer"
                                        <?php if ($index_has_phone_number_footer) {
                                            echo "checked=\"checked\"";
                                        } ?> value="1"<br></td>
                                <td><b>Include Phone Footer?</td>
                            </tr>
                        </table>

                        <p>

                        <div class="cf">
                            <input id="submit" class="btn btn-primary" type="submit" value="Save"
                                   class="btn-quotes"/>

                            <a href="../index.php?ver=<?php echo $index_ver; ?>"
                               style="color: darkgreen; text-decoration: none" target="_blank"><b>&nbsp;Go To
                                    Website..!</b></a>

                        </div>
                        </p>


                    </form>
                </fieldset>


            </div>


            <div class="col-md-6">
                <fieldset class="long">
                    <legend><b>FOR ZIP PAGE AND FORM (2 PAGES)</b></legend>
                    <form action="update.php?f=index_zip_update" method="post" class="form_1">
                        <table>

                            <tr>
                                <td>
                                    <p><b>Version: </b>
                                </td>
                                <td>
                                    <input name="index_zip_ver" type="text" class="form_2"
                                           value="<?php echo $index_zip_ver; ?>"
                                           placeholder="<?php echo $index_zip_ver; ?>"
                                           style="width: auto" readonly></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Landing Page: </b>
                                        <button type="button" class="" data-toggle="modal" data-target="#myModal2">
                                            ?
                                        </button>
                                </td>


                                <td><select name="index_zip_aspect" class="form_2" id="index_zip_aspect"
                                            type="number" style="width: auto">
                                        <option <?php if ($index_zip_aspect == 0) {
                                            echo "selected";
                                        }; ?>>0
                                        </option>
                                        <option <?php if ($index_zip_aspect == 1) {
                                            echo "selected";
                                        }; ?>>1
                                        </option>
                                        <option <?php if ($index_zip_aspect == 3) {
                                            echo "selected";
                                        }; ?>>3
                                        </option>
                                        <option <?php if ($index_zip_aspect == 4) {
                                            echo "selected";
                                        }; ?>>4
                                        </option>
                                        <option <?php if ($index_zip_aspect == 10) {
                                            echo "selected";
                                        }; ?>>10
                                        </option>
                                        <option <?php if ($index_zip_aspect == 12) {
                                            echo "selected";
                                        }; ?>>12
                                        </option>
                                        <option <?php if ($index_zip_aspect == 14) {
                                            echo "selected";
                                        }; ?>>14
                                        </option>
                                        <option <?php if ($index_zip_aspect == 15) {
                                            echo "selected";
                                        }; ?>>15
                                        </option>
                                        <option <?php if ($index_zip_aspect == 16) {
                                            echo "selected";
                                        }; ?>>16
                                        </option>
                                        <option <?php if ($index_zip_aspect == 17) {
                                            echo "selected";
                                        }; ?>>17
                                        </option>
                                        <option <?php if ($index_zip_aspect == 18) {
                                            echo "selected";
                                        }; ?>>18
                                        </option>
                                        <option <?php if ($index_zip_aspect == 19) {
                                            echo "selected";
                                        }; ?>>19
                                        </option>
                                        <option <?php if ($index_zip_aspect == 20) {
                                            echo "selected";
                                        }; ?>>20
                                        </option>


                                    </select> </p></td>

                            </tr>
                            <tr>
                                <td>
                                    <p><b>Lead Type ID: </b>
                                </td>
                                <td>
                                    <input name="index_zip_lead_type" type="number" class="form_2"
                                           value="<?php echo $index_zip_lead_type; ?>"
                                           placeholder="<?php echo $index_zip_lead_type; ?>"
                                           style="width: auto"> </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Default SRC: </b>
                                </td>
                                <td>
                                    <input name="index_zip_default_SRC" type="text" class="form_2"
                                           value="<?php echo $index_zip_default_SRC; ?>"
                                           placeholder="<?php echo $index_zip_default_SRC; ?>"
                                           style="width: auto"> </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Default Aff_Ref: </b>
                                </td>
                                <td>
                                    <input name="index_zip_default_AffRef" type="number" class="form_2"
                                           value="<?php echo $index_zip_default_AffRef; ?>"
                                           placeholder="<?php echo $index_zip_default_AffRef; ?>"
                                           style="width: auto"> </p>
                                </td>
                            </tr>

                        </table>

                        <table>

                            <tr>
                        <td><input type="checkbox" name="index_zip_exist"
                                <?php if ($index_zip_exist) {
                                    echo "checked=\"checked\"";
                                }; ?> value="1"<br></td>
                        <td><b>Index Zip Exist?</td>
                    </tr>


                            <tr>
                                <td><input type="checkbox" name="index_zip_has_phone_number_header"
                                        <?php if ($index_zip_has_phone_number_header) {
                                            echo "checked=\"checked\"";
                                        } ?> value="1"<br></td>
                                <td><b>Include Phone Number on Header?</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="index_zip_has_phone_number_footer"
                                        <?php if ($index_zip_has_phone_number_footer) {
                                            echo "checked=\"checked\"";
                                        } ?> value="1"<br></td>
                                <td><b>Include Phone Number on Footer?</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input name="phone_number" type="text" class="form_2"
                                           value="<?php echo $phone_number; ?>"
                                           placeholder="<?php echo $phone_number; ?>"
                                           style="width: auto"> </p></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td><b>Banner Position:</td>
                                <td><input type="radio" name="banner_position"
                                           value="1" <?php if ($banner_position_1 == 1) {
                                        echo "checked";
                                    }; ?> >Upper<br>
                                    <input type="radio" name="banner_position"
                                           value="2" <?php if ($banner_position_2 == 1) {
                                        echo "checked";
                                    }; ?>>Middle<br>
                                    <input type="radio" name="banner_position"
                                           value="3" <?php if ($banner_position_3 == 1) {
                                        echo "checked";
                                    }; ?> >Lower
                                </td>
                            </tr>
                        </table>
                        <p>
                            <div class="cf">
                                <input id="submit" class="btn btn-primary" type="submit" value="Save"
                                       class="btn-quotes"/>

                                <a href="../index_zip.php?ver=<?php echo $index_ver; ?>"
                                   style="color: darkgreen; text-decoration: none" target="_blank"><b>&nbsp;Go To
                                        Site.!</b></a>

                            </div>
                        </p>
                    </form>
                </fieldset>
            </div>

            <div class="col-md-12" style="margin-top: 30px">
                <fieldset>
                    <legend><b>POSTBACK URL TO HASOFFERS</b></legend>
                    <form action="update.php?f=postback_hasoffers" method="post" class="form_1">

                        <input type="hidden" name="version" value="<?php  echo $index_ver; ?>">

                        <!--<div>
                            <p><b>--------------  Make Postback to HasOffers </b></p>
                        </div>-->

                        <div class="checkbox">

                            <?php

                            $sql10 = "select * from postback_hasoffers where version = $index_ver";
                            $rslt10 = $conn2->query($sql10);
                            if ($rslt10->num_rows > 0) {

                                echo '
                                    <table class="table">';

                                while ($row = $rslt10->fetch_assoc()) {

                                    echo '

                                        <tbody>
                                        <tr>
                                            <td><p><b>'.$row["postback_url"].'</b></p></td>
                                            <td><a class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                            href="update.php?f=del_postback_url&ver=' . $row["version"] . '&postback_url='.base64_encode($row["postback_url"]).'" role="button" style="height: 24px;">
                            <span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                                        </tr>
                                        </tbody>
                                    ';
                                };

                                echo '</table>';
                            };
                            ?>

                        </div>

                        <div class="form-group">
                            <label class="expand-label" for="postback_url">-------------- <br>Add Postback URL:</label>
                            <input type="url" class="form-control" id="postback_url" name="postback_url" size="100" placeholder="Enter postback_url">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </fieldset>
            </div>

            <div class="col-md-12" style="margin-top: 30px">
                <fieldset>
                    <legend><b>AFFILIATES CONTROL</b></legend>
                    <form action="update.php?f=affiliates" method="post" class="form_1">

                        <div class="form-inline">
                            <label class="expand-label" for="offer_ref">offer_id:</label>
                            <input type="number" class="form-control" id="offer_ref" name="offer_ref" placeholder="Enter offer_id">
                        </div>
                        <div class="form-inline">
                            <label class="expand-label" for="affiliate_id">affiliate_id:</label>
                            <input type="number" class="form-control" id="affiliate_id" name="affiliate_id" placeholder="Enter affiliate_id">
                        </div>
                        <!--<div class="form-inline">
                            <label class="expand-label" for="affiliate_name">affiliate_name:</label>
                            <input type="text" class="form-control" id="affiliate_name" name="affiliate_name" placeholder="Enter affiliate_name">
                        </div>-->
                        <div class="form-inline">
                            <label class="expand-label" for="affiliate_id">aff_sub:</label>
                            <input type="text" class="form-control" id="aff_sub" name="aff_sub" placeholder="Enter aff_sub">
                        </div>
                        <div class="form-inline">
                            <label class="expand-label" for="did">DID:</label>
                            <input type="number" class="form-control" id="did" name="did" placeholder="Enter did">
                        </div>
                        <input type="hidden" name="version" value="<?php echo $index_ver; ?>">

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>

                    <div class="col-md-12">
                        <h4>Affiliates Running this Campaign</h4>
                        <p></p>
                        <table class="table" id="aff_table">
                            <thead>
                            <tr>
                                <th>offer_id</th>
                                <th>affiliate_id</th>
                                <th>aff_sub</th>
                                <th>DID</th>
                                <th>Delete ?</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php

                            $sql15 = "select * from affiliates_ctrl where version = $index_ver";
                            $rslt15 = $conn2->query($sql15);
                            if ($rslt15->num_rows > 0) {
                                while ($row = $rslt15->fetch_assoc()) {

                                    echo '

                            <tr>
                                <td>'.$row["offer_ref"].'</td>
                                <td>'.$row["affiliate_id"].'</td>
                                <td>'.$row["aff_sub"].'</td>
                                <td>'.$row["did"].'</td>
                                <td><a class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                            href="update.php?f=del_affiliate&id=' . $row["id"] . '&ver=' . $row["version"] . '" role="button" style="height: 24px;">
                            <span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                            </tr>
                                    ';
                                };
                            };
                            ?>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </div>
        </div>


        <div class="col-md-4">
            <fieldset style="display: inline-block;">
                <legend><b>States (Geo Target)</b></legend>
                <form action="update.php?f=states_update" method="post" class="form_1">

                    <table>
                        <tr>
                            <th></th>
                            <th><i>States to Include ...</th>
                        </tr>
                    </table>

                    <ul class="chk-container">
                        <li><input type="checkbox" id="selecctall"/> Select All States</li>

                        <td><input name="index_ver" type="text" class="form_2"
                                   value="<?php echo $index_ver; ?>"
                                   placeholder="<?php echo $index_ver; ?>"
                                   style="width: auto" hidden="hidden"> </p></b></td>
                    </ul>

                    <table>
                        <div id="column3" style="float:left; margin:0;width:50%;">

                            <p>

                                <?php
                                for ($x = 0; $x < (int)(count($states_list) / 2); $x++) {
                                    echo '<input class="checkbox1" type="checkbox" name="' . $states_list[$x] . '"';
                                    if ($state_value[$x]) {
                                        echo 'checked="checked"';
                                    };
                                    echo 'value="1">' . $states_list_name[$x] . '<br>';
                                };
                                ?>

                            </p>

                        </div>


                        <div id="column3" style="float:left; margin:0;width:50%;">

                            <p>

                                <?php
                                for ($x = (int)(count($states_list) / 2); $x < count($states_list); $x++) {
                                    echo '<input class="checkbox1" type="checkbox" name="' . $states_list[$x] . '"';
                                    if ($state_value[$x]) {
                                        echo 'checked="checked"';
                                    };
                                    echo 'value="1">' . $states_list_name[$x] . '<br>';
                                };
                                ?>

                            </p>

                        </div>

                    </table>

                    <p>

                    <div class="cf">
                        <input id="submit" class="btn btn-primary" type="submit" value="Save"
                               class="btn-quotes"/>
                    </div>
                    </p>


                </form>
            </fieldset>


            <p><br></p>

            <fieldset style="display: inline-block; margin-top: 15px ">
                <legend><b>States (Geo Target)</b></legend>
                <form action="update.php?f=states_update_allcamp" method="post" class="form_1">

                    <table>
                        <tr>
                            <th></th>
                            <th><i>Add a State to ALL campaigns.</th>
                        </tr>
                    </table>

                    <select name="add_state" id="add_state" type="text">
                        <option value="--">--</option>
                        <?php
                        for ($x = 0; $x < (int)(count($states_list)); $x++) {
                            echo '<option value="' . $states_list[$x] . '">' . $states_list_name[$x] . '</option>';
                        };
                        ?>
                    </select>

                    <input name="index_ver" type="text" class="form_2"
                           value="<?php echo $index_ver; ?>"
                           placeholder="<?php echo $index_ver; ?>"
                           style="width: auto" hidden="hidden"> </p></b>
                    <table>
                        <tr>
                            <th></th>
                            <th><i>Remove a State from ALL campaigns.</th>
                        </tr>
                    </table>

                    <select name="remove_state" id="remove_state" type="text">
                        <option value="--">--</option>
                        <?php
                        for ($x = 0; $x < (int)(count($states_list)); $x++) {
                            echo '<option value="' . $states_list[$x] . '">' . $states_list_name[$x] . '</option>';
                        };
                        ?>
                    </select>


                    <p>

                    <div class="cf">
                        <input id="submit" class="btn btn-primary" type="submit" value="Save"
                               class="btn-quotes"/>
                    </div>
                    </p>
                </form>
            </fieldset>
        </div>


    </div>










    <?php



    $dbservername = "10.101.12.76";
    $dbusername = "rxonline_intcms";
    $dbpassword = "PowBOyu1TJh00oFZ";
    $dbname = "rxonline_intcms";



/*
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "rxonline_intcms";
*/





    // Create connection
    $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    $sql = "SELECT * FROM counter WHERE description = 'mediaalpha'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $mediaalpha_perc = $row["percentage"];

    $sql = "SELECT * FROM counter WHERE description = 'surehits'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $surehits_perc = $row["percentage"];


    $sql2 = "UPDATE counter SET counter='".$new_counter."' WHERE description = 'listings'";
    $conn->query($sql2);
    $conn->close();



    ?>








    <div class="row">
        <div class="col-md-12" style="margin-top: 50px">
            <fieldset>
                <legend><b>Listings Control</b></legend>
                <form action="update.php?f=upd_listings" method="post" class="form_1">

                    <div class="form-inline">
                        <label class="expand-label" for="mediaalpha">Media Alpha:</label>
                        <input type="number" class="form-control" id="mediaalpha" name="mediaalpha" value="<?php echo $mediaalpha_perc; ?>">
                    </div>
                    <div class="form-inline">
                        <label class="expand-label" for="surehits">Surehits:</label>
                        <input type="number" class="form-control" id="surehits" name="surehits" value="<?php echo $surehits_perc; ?>">
                    </div>

                    <input type="hidden" name="ver" value="<?php echo $ver; ?>">

                    <button type="submit" class="btn btn-primary">Reset and Apply</button>
                </form>




            </fieldset>
        </div>







    </div>












</div>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">


        <div class="modal-content">
            <div class="modal-header center">
                <button type="button" class="close" data-dismiss="modal"></button>
                <h4 class="modal-title">Aspect Index (SHORT FORM)</h4>
            </div>
            <div class="modal-body">
                <p><b>Landing Page 0 :</p>
                <img src="images/aspects/aspect0.jpg" alt="Aspect0" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 5 : (NOT AVAILABLE YET)</p>
                <img src="images/aspects/aspect5.jpg" alt="Aspect5" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 6 :</p>
                <img src="images/aspects/aspect6.jpg" alt="Aspect6" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 11:</p>
                <img src="images/aspects/index011.png" alt="" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 21:</p>
                <img src="images/aspects/index021.png" alt="" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 22:</p>
                <img src="images/aspects/index022.png" alt="" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 23:</p>
                <img src="images/aspects/index023.png" alt="" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 24:</p>
                <img src="images/aspects/index024.png" alt="" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 25:</p>
                <img src="images/aspects/index025.png" alt="" width="200">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">


        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
                <h4 class="modal-title">Aspect Zip (LONG FORM)</h4>
            </div>
            <div class="modal-body">
                <p><b>Landing Page 0 :</p>
                <img src="images/aspects/aspect0zip.jpg" alt="Aspect0zip" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 1 : (NOT AVAILABLE YET)</p>
                <img src="images/aspects/aspect1zip.jpg" alt="Aspect1zip" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 3 :</p>
                <img src="images/aspects/aspect3zip.jpg" alt="Aspect3zip" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 4 : (NOT AVAILABLE YET)</p>
                <img src="images/aspects/aspect4zip.jpg" alt="Aspect4zip" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 10 :</p>
                <img src="images/aspects/indexzip010.png" alt="" width="200">
                <img src="images/aspects/page010.png" alt="" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 12 :</p>
                <img src="images/aspects/indexzip012.png" alt="" width="200">
                <img src="images/aspects/page012.png" alt="" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 14 :</p>
                <img src="images/aspects/indexzip014.png" alt="" width="200">
                <img src="images/aspects/page014.png" alt="" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 16 :</p>
                <img src="images/aspects/indexzip016.png" alt="" width="200">
                <img src="images/aspects/page016.png" alt="" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 17 :</p>
                <img src="images/aspects/indexzip017.png" alt="" width="200">
                <img src="images/aspects/page017.png" alt="" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 18 :</p>
                <img src="images/aspects/indexzip018.png" alt="" width="200">
                <img src="images/aspects/page018.png" alt="" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 19 :</p>
                <img src="images/aspects/indexzip019.png" alt="" width="200">
                <img src="images/aspects/page019.png" alt="" width="200">
            </div>
            <div class="modal-body">
                <p><b>Landing Page 20 :</p>
                <img src="images/aspects/indexzip020.png" alt="" width="200">
                <img src="images/aspects/page020.png" alt="" width="200">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<div class="container-fluid" style="margin-top: 100px;">
    <nav class="navbar navbar-default ">
        <div class="container">
            SIL - Campaign Manager
        </div>
    </nav>
</div>


</body>
</html>
