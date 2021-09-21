<?php
/**
 * Created by PhpStorm.
 * User: hm909
 * Date: 7/8/16
 * Time: 15:01
 */

include '../../../common-LP/php/privacy-policy.php';
include '../../../common-LP/php/terms-of-use.php';


$phq_index_header = '
<!-- Start Navigation -->
    <header id="nav1-1">
        <nav class="navbar" id="main-navbar">
            <div class="container">

                <div class="navbar-header col-md-4 col-sm-3 col-xs-4 pull-left">
                    <a class="navbar-brand smooth-scroll"><img src="../../assets/imgs/logo.png" class="logo"
                                                               alt="logo"></a>
                </div>

                <div class="col-md-8 col-sm-9 col-xs-8 navbar-right pull-right speak-agent">

                    <div class="pull-right hidden-xs">
                        <h5 class="agent">Speak With a Licensed Agent:</h5><span
                            class="glyphicon glyphicon-phone hidden-xs" aria-hidden="true"></span>
                        <a class="phone"
                           href="tel:'.$phone_number.'"><strong>'.$phone_number.'</strong></a>
                    </div>

                    <span class="pull-right hidden-lg hidden-md hidden-sm">
                        <p class="agent-standing-by hidden-lg hidden-md hidden-sm visible-xs-block">Agents are
                            standing by</p>
                        <span
                            class="glyphicon glyphicon-phone hidden-lg hidden-md hidden-sm visible-xs-inline-block"
                            aria-hidden="true"></span>
                        <a class="phone visible-xs-inline-block"
                           href="tel:'.$phone_number.'"><strong>'.$phone_number.'</strong></a>
                    </span>

                </div>

            </div>
            <!-- /End Container -->
        </nav>
        <!-- /End Navbar -->
    </header>

';



$phq_index_footer_contact_link = '
    <footer id="footer1-2" class="p-y-md footer f1 bg-edit bg-dark">
        <div class="container">
            <!-- Copy -->
            <div class="col-md-4 col-sm-6 col-xs-12 text-white">
                <p>Copyright &copy; Premium Health Quotes, All rights reserved
                    <a href="#" class="f-w-900 inverse"></a>
                </p>
            </div>
            <!-- Address -->
            <div class="col-md-4 col-sm-6 col-xs-12 text-white">
                <p>2 Oakwood Blvd, Suite 100, Hollywood, FL, 33020
                    <a href="#" class="f-w-900 inverse"></a>
                </p>
            </div>
            <!-- Privacy Policy and Terms of Use -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <p class="text-white privacy-info">
                    <a href="#modal-privacy" data-toggle="modal" style="color:#ffffff;">Privacy
                        Policy</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="#modal-terms" data-toggle="modal" style="color:#ffffff;">Terms of
                        Use</a>
                        &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href="contact-us.php" style="color:#ffffff;">Contact Us</a>
                </p>
            </div>
            <!-- /End Row -->
            <!-- Modal HTML -->
            <div id="modal-privacy" class="modal fade bs-example-modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Privacy Policy</h4>
                        </div>
                        <div class="modal-body">
                            '.$privacy_policy.'
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-terms" class="modal fade bs-example-modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Terms of Use</h4>
                        </div>
                        <div class="modal-body">
                            '.$terms_of_use.'
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
';




$phq_index_footer_no_contact_link = '
    <footer id="footer1-2" class="p-y-md footer f1 bg-edit bg-dark">
        <div class="container">
            <div class="row">
                <!-- Copy -->
                <div class="col-md-5 col-sm-6 col-xs-12 text-white">
                    <p>Copyright &copy; Premium Health Quotes, All rights reserved
                        <a href="#" class="f-w-900 inverse"></a>
                    </p>
                </div>
                <!-- Address -->
                <div class="col-md-4 col-sm-6 col-xs-12 text-white">
                    <p>2 Oakwood Blvd, Suite 100, Hollywood, FL, 33020
                        <a href="#" class="f-w-900 inverse"></a>
                    </p>
                </div>
                <!-- Privacy Policy and Terms of Use -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <p class="text-white privacy-info">
                        <a href="#modal-privacy" data-toggle="modal" style="color:#ffffff;">Privacy
                            Policy</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                        <a href="#modal-terms" data-toggle="modal" style="color:#ffffff;">Terms of
                            Use</a>
                    </p>
                </div>
            </div>
            <!-- /End Row -->
            <!-- Modal HTML -->
            <div id="modal-privacy" class="modal fade bs-example-modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Privacy Policy</h4>
                        </div>
                        <div class="modal-body">
                            '.$privacy_policy.'
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-terms" class="modal fade bs-example-modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Terms of Use</h4>
                        </div>
                        <div class="modal-body">
                            '.$terms_of_use.'
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
';



$phq_index_footer = $phq_index_footer_contact_link;




$phq_form_header = '
<header id="nav1-1">
    <nav class="navbar" id="main-navbar">
        <div class="container">
            <div class="navbar-header col-md-4 8 col-sm-3 col-xs-4 pull-left">
                <a class="navbar-brand smooth-scroll"><img src="../../assets/imgs/logo.png" class="logo-b"
                                                           alt="logo"></a>
            </div>
            <div class="col-md-8 col-sm-9 col-xs-8 navbar-right pull-right speak-agent">
                <div class="pull-right">
                    <h5 class="agent hidden-xs">Speak With a Licensed Agent:</h5>
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    <a class="phone"
                       href="tel:'.$phone_number.'"><strong>'.$phone_number.'</strong></a>
                </div>
            </div>
        </div>
    </nav>
</header>
';




$phq_form_footer = '

<div class="row footer">
    <div class="col-md-12 col-sm-12 privacy">
        <p><a href="#modal-privacy" class="" data-toggle="modal">Privacy Policy</a> | <a href="#modal-terms"
                                                                                         class="privacy-info-link"
                                                                                         data-toggle="modal">Terms of
                Use</a> | <a href="../carriers/" target="_blank">Carriers</a>
            <br>Copyright &copy; 2016 | americanhealthinsure.com | All Rights Reserved</p>
    </div>
</div>
<!-- Modal HTML -->

<div id="modal-privacy" class="modal fade bs-example-modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Privacy Policy</h4>
            </div>
            <div class="modal-body modal-body-privacy">
                '.$privacy_policy.'
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
</div>
<div id="modal-terms" class="modal fade bs-example-modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Terms of Use</h4>
            </div>
            <div class="modal-body">
                '.$terms_of_use.'
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
</div>

';