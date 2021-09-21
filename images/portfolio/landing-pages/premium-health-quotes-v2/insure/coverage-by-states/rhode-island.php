<?php
include('../../assets/php/env-phqv2.php');
include('../../../common-LP/php/get_params.php');
include('../../../common-LP/php/get_HO_url.php');
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PremiumHealthQuotes - Affordable Health and Medicare Insurance - <?php echo $aff_ref; ?></title>

    <meta name="description" content="use premiumhealthquotes.com to find top health insurance and obamacare plans">
    <meta name="keywords" content="health insurance, obamacare">
    <meta name="author" content="premiumhealthquotes.com">

    <link rel='shortcut icon' href='../../assets/img/favicon.ico' type='image/x-icon'/>

    <link rel="stylesheet" href="../../assets/css/app.css">
    <!--<link rel="stylesheet" href="../../assets/css/foundation-icons.css"/>-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>


</head>
    <body>
        
        <?php
        include "../../../common-LP/php/get_phone.php";
        
        $phone_number = get_phone($offer_id, $aff_id, $aff_sub, $default_phone, $ver);
        
        // GET ZIP from IP using function in geoip.php
        include "../../../common-LP/php/geoip.php";
        $zip = getzip($_SERVER['REMOTE_ADDR']);
        if ($zip == "") {
            $zip = $default_zipcode;  // If cant have the ip then serve for default zip
        };
        
        echo $indexGTM;
        echo $indexHotJar;
        echo $impressionPixelHO;
        
        if (!isset($_SESSION['sub_page'])) {
            include '../../../common-LP/php/session_params.php';
            $arr = explode('insure/', $landing_page);
            $sub_page = $arr[1];
            $sub_page = trim($sub_page, "/");
            $_SESSION['sub_page'] = $sub_page;
        };
        ?>
        <!-- start header -->
        <header class="header">
            <div class="column row">
        
                <div class="small-6 medium-6 columns">
                    <div class="logo-wrapper">
                        <a href=""><img class="logo" src="../../assets/img/logo.png" alt="logo"></a>
                    </div>
                </div>
        
                <div class="small-6 medium-6 columns text-right">
                    <div class="contact-number-wrapper">
                        <p class="header-toll-free-cta">Speak to a Licensed Agent</p>
                        <a class="header-toll-free-number hide-for-small-only" href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>
                        <a href="tel:<?php echo $phone_number; ?>"><img class="icon-mobile-phone" src="../../assets/img/icon-phone-blue.svg" alt="phone icon"></a>
                    </div>
                </div>
        
            </div>
        </header>
        <!-- end header -->
        
        <!-- start hero -->
        <div class="hero-states">
            <div class="row">
                <div class="overlay"></div>
                <div class="small-12 medium-9 large-6 columns end hero-content">
        
                    <div class="row">
                        <div class="small-12 columns">
                            <!-- start hero header  -->
                            <div class="hero-callout">
                                <h1 class="hero-header">Available health plans vary from state to state. </h1>
                                <p class="hero-subheader">Find your state below and get more information on healthcare in your area. </p>
                            </div>
                            <!-- end hero header -->
                        </div>
                    </div>
        
        
                </div>
            </div>
        </div>
        <!-- end hero -->
        <div class="row container">
                <div class="small-12 medium-8 columns">
        
                    <div class="arrow-left">
                        <a href="../health/"><p class="previous">Previous</p></a>
                    </div>
        
                    <h3 class="body-content-header md-padding text-left">Rhode Island Healthcare</h3>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
                    <p>Rhode Island, the Ocean State, ranks 14th in the most recent America’s Health Rankings. Although the state ranks in the Top 15, Rhode Island rates poorly in several categories: infant mortality (30th); incidence of pertussis (38th); preventable hospitalizations (30th); high blood pressure (36th); and, high cholesterol (30th).
                        <br><br>In the past 10 years, infant mortality has increased 25% from 5.2 to 6.5 deaths per 1,000 live births. The state has over 1 million residents, with 5% of the population uninsured. The average cost of an inpatient hospital stay before insurance is $2,677 per day based on 2014 data, according to The Henry J. Kaiser Family Foundation. Rhode Island had healthcare expenditures totaling more than $8.7 billion in 2009. The state has 11 hospitals and 28 HMO groups with membership exceeding 222,600 individuals.</p>
        
        
        
        
        
        
        
        
        
        
        
        
                    <button class="secondary button body-content-button md-margin-top"
                        onclick="window.location.href='../health/form.php'">Get Your Quotes</button>
                </div>
        
                <div class="small-12 columns medium-3 columns states-side-menu">
                    <h4 class="md-padding text-left">Select Your State</h4>
                    <select onChange="window.location.href=this.value">
                        <option value>Select Option</option>
                        <option value="alabama.php">Alabama</option>
                        <option value="alaska.php">Alaska</option>
                        <option value="arizona.php">Arizona</option>
                        <option value="arkansas.php">Arkansas</option>
                        <option value="california.php">California</option>
                        <option value="colorado.php">Colorado</option>
                        <option value="connecticut.php">Connecticut</option>
                        <option value="delaware.php">Delaware</option>
                        <option value="florida.php">Florida</option>
                        <option value="georgia.php">Georgia</option>
                        <option value="hawaii.php">Hawaii</option>
                        <option value="idaho.php">Idaho</option>
                        <option value="illinois.php">Illinois</option>
                        <option value="indiana.php">Indiana</option>
                        <option value="iowa.php">Iowa</option>
                        <option value="kansas.php">Kansas</option>
                        <option value="kentucky.php">Kentucky</option>
                        <option value="louisiana.php">Louisiana</option>
                        <option value="maine.php">Maine</option>
                        <option value="maryland.php">Maryland</option>
                        <option value="massachusetts.php">Massachusetts</option>
                        <option value="michigan.php">Michigan</option>
                        <option value="minnesota.php">Minnesota</option>
                        <option value="mississippi.php">Mississippi</option>
                        <option value="missouri.php">Missouri</option>
                        <option value="montana.php">Montana</option>
                        <option value="nebraska.php">Nebraska</option>
                        <option value="nevada.php">Nevada</option>
                        <option value="new-hampshire.php">New Hampshire</option>
                        <option value="new-jersey.php">New Jersey</option>
                        <option value="new-mexico.php">New Mexico</option>
                        <option value="new-york.php">New York</option>
                        <option value="north-carolina.php">North Carolina</option>
                        <option value="north-dakota.php">North Dakota</option>
                        <option value="ohio.php">Ohio</option>
                        <option value="oklahoma.php">Oklahoma</option>
                        <option value="oregon.php">Oregon</option>
                        <option value="pennsylvania.php">Pennsylvania</option>
                        <option value="rhode-island.php">Rhode Island</option>
                        <option value="south-carolina.php">South Carolina</option>
                        <option value="south-dakota.php">South Dakota</option>
                        <option value="tennessee.php">Tennessee</option>
                        <option value="texas.php">Texas</option>
                        <option value="utah.php">Utah</option>
                        <option value="vermont.php">Vermont</option>
                        <option value="virginia.php">Virginia</option>
                        <option value="washington.php">Washington</option>
                        <option value="west-virginia.php">West Virginia</option>
                        <option value="wisconsin.php">Wisconsin</option>
                        <option value="wyoming.php">Wyoming</option>
                    </select>
                    <br><br>
                    <p><span style="text-transform: uppercase"> Have More Questions?</span></p>
                    <h5 class="state-side-menu-agent" href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></h5>
        
                    <img src="../../assets/img/agent.jpg" alt="alabama family" width="300px" align="left">
                </div>
            </div>
        
        <footer class="site-footer">
            <div class="row">
                <div class="small-12 medium-4 columns footer-copyright">Copyright &copy; PremiumHealthQuotes, All rights reserved.</div>
                <div class="small-12 medium-4 columns footer-address">2 Oakwood Blvd, Suite 100, Hollywood, FL, 33020</div>
                <div class="small-12 medium-4 columns footer-privacy">
                    <a data-toggle="privacy-policy">Privacy Policy</a>&nbsp;|&nbsp;
                    <a data-toggle="terms-of-use">Terms of Use</a>&nbsp;|&nbsp;
                    <a href="contact-us.php">Contact Us</a></div>
        
                <div class="reveal" id="privacy-policy" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
                    <div class="row">
                        <div class="small-12 columns">
                            <h5 class="modal-header">Our Practices Regarding Privacy</h5>
                            <button class="close-button" aria-label="Dismiss alert" type="button" data-close><span aria-hidden="true">&times;</span></button>
                            <p class="modal-body">PremiumHealthQuotes, through its www.premiumhealthquotes.com website (“Site”) is committed to ensuring the privacy and security of each user that visits our
                                website. Your privacy rights are important to us and we are committed to respecting your online privacy and making sure that any information you share with us by using
                                our
                                website is
                                properly protected.
                                <br><br>
                    
                                We have established this www.premiumhealthquotes.com Privacy Policy so you know the importance we place on your privacy and so you can understand how we collect and use information
                                collected from you when you visit our website or submit any personally identifiable information to us. This policy describes our overall privacy practices regarding
                                information we collect on our web sites and through other Internet mediums. Our policy does not apply to the practices of companies that we do not own or control.
                                <br><br>
                    
                                <span class="lead">Data We Collect</span>
                                When you visit our website, we collect personally identifiable information (“PII”) and non-personally identifiable information through various sources.  PII means any
                                information that may be used
                                to identify an individual, including but not limited to name, address, and telephone number.  Non-PII is data that is not used to specifically identify, contact or
                                locate an individual, including
                                but not limited to zip code, gender, and age.
                                <br><br>
                    
                                When you use the Site, we automatically collect certain information from you, such as your browser type (e.g., Internet Explorer, Safari, Chrome); your Internet domain,
                                (e.g., Comcast, Time Warner, etc.); your computer’s operating system, (e.g., Windows, Macintosh, UNIX, Linux); referring and exit page; operating system; the type of
                                mobile device you use (if applicable); your mobile device’s unique device ID; and your IP address.  This information lets us see how users find our Site, and it tells
                                us which pages users visit most frequently so we can make our Site more useful. We keep this information for an indefinite amount of time to improve the operation of
                                our Site and to provide better services to our users.
                                <br><br>
                    
                                In addition to the data that your browser or Internet session sends us automatically, we may also collect PII if you enter it when using our website. This contact
                                information is stored on our
                                servers and used to fulfill your information request. If you have not opted out of its use, we may share it with our data licensees, including our advertising clients
                                and their vendors, and other advertising partners.
                                <br><br>
                    
                                <span class="lead">How We Use and Share Your Information</span>
                                We may use the information we collect from and about you for the following purposes:  (1) to fulfill your requests for information; (2) to respond to your inquiries;
                                (3) to review Site usage and
                                operations; (4) to address problems with the Site, our business, or our services; (5) to protect the security or integrity of the Site and our business; (6) to monitor
                                the Site for compliance with
                                our Terms of Use and the law; (7) to help improve our Site or services; and (8) to contact you with Site updates, newsletters and other informational and promotional
                                materials from us and third
                                party marketing offers from our trusted partners, as well as from other companies.<br><br>
                    
                                We may disclose information collected from and about you as follows: (1) to our related companies and service providers, to perform a business, professional or
                                technical support function for us;
                                (2) to our marketing partners, advertisers or other third parties, who may contact you with their own offers; (3) as necessary if we believe that there has been a
                                violation of our Terms of Use or
                                of our rights or the rights of any third party; (4) to respond to legal process (such as a search warrant, subpoena or court order) and provide information to law
                                enforcement agencies or in
                                connection with an investigation on matters related to public safety, as permitted by law, or otherwise as required by law; and (5) in the event that our company or
                                substantially all of its assets
                                are acquired, your personal information may be one of the transferred assets. We may also disclose your personal information with your express consent. We may share
                                aggregate, non-personally
                                identifiable information about Site users with third parties.<br><br>
                    
                                <span class="lead">Third Parties Contacting You</span>
                                Different advertisers and advertising companies have different methods of following up with you on information requests. Some send brochures in the mail, others reply
                                via email or some may contact
                                you by telephone. By using our service to request information from our advertising clients and advertising partners, you are giving permission to www.premiumhealthquotes.com and these
                                parties (or
                                their partners and vendors) to contact you using the methods of their choice, even if the phone number you provide is in a corporate, state, or national do not call
                                list, now or in the future
                                (unless and until you opt-out from receiving communications from us or such partners, as applicable).  You are also providing your express consent to be called or
                                texted (including prerecorded
                                messages or using an autodialer or automated means) at the number you provide.
                                <br><br>
                    
                                <span class="lead">Cookies</span>
                                Our websites use cookies (small files containing program code that reside on your computer), to provide usage statistics about our web site, and to understand where
                                visitors learn about our web
                                site. We also may use cookies to simplify the re-entering of your data. You can adjust your browser settings to opt out of the use of cookies by having your browser
                                disable cookies. Look for the
                                cookie options in your browser in the Options or Preferences menu. <br><br>
                    
                                Additionally, we use cookies, web beacons, and other technologies to receive and store certain types of information whenever you interact with us through your computer
                                or mobile device on the Site.
                                This information, which may include the pages you visit on our or our partners’ sites, which web address you came from, the type of browser/device/hardware you are
                                using, or an IP-based geographic
                                location, helps us recognize you, customize your website experience and make marketing messages more relevant. These companies use non-personally identifiable
                                information (e.g., click stream
                                information, browser type, time and date, hardware/software information) during your visits to this and other websites in order to provide advertisements about goods
                                and services likely to be of
                                greater interest to you. At this time, we do not respond to browser “do not track” signals. However, we may provide you with ways to choose not to have your information
                                collected or used in this
                                way. To learn more about targeted ads or to opt-out of this type of advertising, visit the Network Advertising Initiative website or Digital Advertising Alliance
                                website. <br><br>
                    
                                <span class="lead">Opt-Out of Receiving Communications from www.premiumhealthquotes.com</span>
                                You may opt out by contacting us by submitting a “Stop contacting me” request on our Contact Us page; calling us at (877) 386-9926; or sending a letter to: <br><br>
                    
                                Health Insurance Services Legal <br>
                                2 Oakwood Blvd. <br>
                                Suite 100 <br>
                                Hollywood, FL 33020 <br><br>
                    
                                <span class="lead">Children’s Privacy</span>
                                We do not direct the Site to, nor do we knowingly collect any PII from any individuals less than thirteen years of age. If you are the parent or guardian and are made
                                aware that a child under the
                                age of 13 has provided us with PII, please contact us. <br><br>
                    
                                <span class="lead">Third Party Links</span>
                                This Site may contain links that direct you to websites owned and operated by other companies. www.premiumhealthquotes.com does not control or endorse these websites, and we do not
                                assume any
                                responsibility for the content, privacy policies or practices of any third party websites, which may use cookies and collect PII from you.  We recommend that you review
                                the privacy policy posted on
                                any external website before disclosing any PII.  Please contact those websites directly if you have any questions about their privacy policies. <br><br>
                    
                                <span class="lead">California Privacy Rights</span>
                                Under California’s “Shine the Light” law, we provide a method for consumers to “opt-out” of having their information shared with third-parties. Contact us using the
                                methods described in the
                                “Contact Us” section to unsubscribe. <br><br>
                    
                                <span class="lead">Privacy Policy Changes</span>
                                www.premiumhealthquotes.com may change this Privacy Policy at any time. Should we revise this Privacy Policy in the future, we will immediately publish the amended Privacy Policy on our
                                website. We
                                recommend that you check our website frequently to view recent changes or updates. <br><br>
                    
                                <span class="lead">Contact Us</span>
                                We invite you to contact us if you have questions or comments about our Privacy Policy or you want to change the personally identifiable information you have provided
                                to us. You may contact us by:
                                <br><br>
                                Sending a letter to: <br>
                                Health Insurance Services Legal <br>
                                2 Oakwood Blvd. <br>
                                Suite 100 <br>
                                Hollywood, FL 33020 <br><br>
                    
                                Calling us at 1-877-386-9926 <br>
                    
                                Emailing us at: privacy@premiumhealthquotes.com <br><br>
                    
                                If we need, or are required to, contact you regarding your personal information, we may do so by telephone, email, or mail.
                            </p>
                            <a class="button large close-modal" data-close>Close</a>
                        </div>
                    </div>
                </div>
                <div class="reveal" id="terms-of-use" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
                    <div class="row">
                        <div class="small-12 columns">
                    
                            <h5 class="modal-header">Please read these terms and conditions of use before using this site.</h5>
                            <button class="close-button" aria-label="Dismiss alert" type="button" data-close><span
                                    aria-hidden="true">&times;</span></button>
                    
                            <p class="modal-body">The www.premiumhealthquotes.com website (“www.premiumhealthquotes.com” or the “Site”) is owned and operated by www.premiumhealthquotes.com. By
                                using this Site, you signify your assent to these Terms of Use (“Terms” or
                                “Agreement”). If you do not agree to all of these Terms, do not use this site.
                                <br><br>
                                BY ACCESSING OR USING ANY PART OF THE SITE, YOU AGREE THAT YOU HAVE READ, UNDERSTAND AND AGREE TO BE BOUND
                                BY THIS AGREEMENT. IF YOU DO NOT AGREE TO BE SO BOUND, DO NOT
                                ACCESS OR USE THE SITE.
                                PLEASE READ THESE TERMS CAREFULLY.<strong> THEY CONTAIN A MANDATORY ARBITRATION PROVISION AND CLASS ACTION
                                    WAIVER.</strong>
                                <br><br>
                                www.premiumhealthquotes.com may revise and update these Terms at any time. Your continued usage of the Site will mean you
                                accept those changes. <br><br>
                    
                                <span class="lead">Use of the Website</span>
                                By using the Site, you represent to www.premiumhealthquotes.com that 1) you are authorized to enter into this Agreement and
                                you are at least the age of majority in your state or province
                                of residence;
                                (2) you will not use the Site for any purpose or in any manner that violates any law or regulation or that
                                infringes the rights of www.premiumhealthquotes.com or any third party; (3) any
                                information
                                or data provided to www.premiumhealthquotes.com by you will not violate any law or regulation or infringe the rights of www.premiumhealthquotes.com or any third party; (4) all information that you
                                provide to us in connection with the Site (e.g., name, e-mail address, and other information) is true and
                                accurate; and (5) you are authorized and able to fulfill and
                                perform the obligations and
                                meet the conditions of a user as specified herein. This Agreement provides to you a personal, revocable,
                                limited, non-exclusive, royalty-free, non-sublicenseable,
                                non-transferable license to use
                                the Site conditioned on your continued compliance with the Terms of this Agreement. You may print and
                                download materials and information from the Site solely for your
                                personal use, provided that all hard copies contain all copyright and other applicable notices contained in
                                such materials and information. Notwithstanding the
                                foregoing, you may not modify, translate, decompile, create derivative work(s) of, copy, distribute,
                                disassemble, broadcast, transmit, publish, remove or alter any
                                proprietary notices or labels, license, sublicense, transfer, sell, mirror, frame, exploit, rent, lease,
                                private label, grant a security interest in, or otherwise use
                                the Website in any manner not expressly permitted herein. Specifically, and by way of illustration and not
                                limitation, you may not (a) separate and use any graphics,
                                photographs, or other audio, visual, or video elements from the accompanying text or material without the
                                prior express written permission of www.premiumhealthquotes.com and/or its
                                licensor(s); (b) use any “deep link,” “page scrape,” “robot,” “spider,” or other device, program, script,
                                algorithm, or methodology to access, acquire, copy, or monitor
                                any portion of the Site or in any way reproduce or circumvent the navigational structure of the Site to
                                obtain or attempt to obtain any materials, documents, or
                                information through any means not purposely made available through the Site; (c) probe, scan, or test the
                                vulnerability of the Site or any network connected to the
                                Site; (d) use any device, software, or routine to interfere with the proper working of the Site or any
                                transaction conducted on the Site; (e) forge headers, impersonate
                                a person, or otherwise manipulate identifiers in order to disguise your identity or the origin of any
                                message or transmittal you send to www.premiumhealthquotes.com on or through the
                                Site; (f) use the Site to harvest or collect e-mail addresses or other contact information; or (g) use the
                                Site in a manner that could damage, disparage, or otherwise
                                negatively impact www.premiumhealthquotes.com. The licenses granted by www.premiumhealthquotes.com terminate if you do not comply with these
                                Terms. <br><br>
                    
                                The material, images, and text on the Site (“Content”) is protected by copyright under both United States
                                and foreign laws. Title to the Content remains with www.premiumhealthquotes.com
                                or its
                                licensors. Any use of the Content not expressly permitted by these Terms and Conditions is a breach of this
                                Agreement and may violate copyright, trademark, and other
                                laws. Content and features are
                                subject to change or termination without notice in the editorial discretion of www.premiumhealthquotes.com. All rights not
                                expressly granted herein are reserved to www.premiumhealthquotes.com and its
                                licensors. If you violate any of these Terms, your permission to use the Content automatically terminates
                                and you must immediately destroy any copies you have made of
                                any portion of the Content.
                                <br><br>
                    
                                <span class="lead">PRIVACY</span>
                                Please review our Privacy Policy to understand our practices regarding personal information provided by you,
                                which is incorporated herein by reference. <br><br>
                    
                                <span class="lead">Limitation of Liability and Disclaimer of Warranties</span>
                                The use of the Site and the Content is at your own risk. When using the Site, information will be
                                transmitted over a medium that may be beyond the control and
                                jurisdiction of
                                www.premiumhealthquotes.com and its suppliers. Accordingly, www.premiumhealthquotes.com assumes no liability for or relating to the delay,
                                failure, interruption, or corruption of any data or other
                                information transmitted in connection with use of the Site. The Site and the content are provided on an “as
                                is” and “as available” basis and may include errors,
                                omissions, or other inaccuracies.
                                MOREOVER, www.premiumhealthquotes.com MAY MAKE MODIFICATIONS ANY/OR CHANGES ON THIS SITE OR IN THE MATERIALS AND INFORMATION
                                AVAILABLE ON THIS SITE AT ANY TIME AND FOR ANY REASON.
                                www.premiumhealthquotes.com MAKES NO REPRESENTATIONS, GUARANTEES, OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE
                                SUITABILITY, COMPLETENESS, TIMELINESS, RELIABILITY, LEGALITY,
                                OR ACCURACY OF
                                THE www.premiumhealthquotes.com SERVICES OR THE INFORMATION, CONTENT, MATERIALS, PRODUCTS, OR OTHER SERVICES, OR INCLUDED ON
                                OR OTHERWISE MADE AVAILABLE ON THE SITE. YOU EXPRESSLY AGREE
                                THAT YOUR USE OF THE SITE IS AT YOUR OWN RISK. TO THE FULLEST EXTENT PERMISSIBLE BY APPLICABLE LAW, www.premiumhealthquotes.com DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING
                                BUT NOT LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY, NON-INFRINGEMENT, AND FITNESS FOR PARTICULAR
                                PURPOSE. www.premiumhealthquotes.com DOES NOT WARRANT THAT THE INFORMATION,
                                CONTENT, MATERIALS, PRODUCTS OR OTHER SERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE
                                SITE, www.premiumhealthquotes.com’s SERVERS, OR ELECTRONIC COMMUNICATIONS SENT
                                FROM www.premiumhealthquotes.com ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. www.premiumhealthquotes.com ALSO MAKES NO REPRESENTATION,
                                GUARANTEE, OR WARRANTY THAT THIS WEBSITE WILL OPERATE ERROR FREE
                                OR IN AN UNINTERRUPTED FASHION. <br><br>
                    
                                To the maximum extent permitted by law, in no event shall www.premiumhealthquotes.com, its licensors, its suppliers, or any
                                third parties mentioned on the Site be liable for any damages
                                (including, without limitation, indirect, punitive, special, incidental, or consequential damages, personal
                                injury/wrongful death, lost profits, or damages resulting
                                from lost data or business interruption) resulting from the use of or inability to use the Site or the
                                Content, the delay or inability to use the Site, or from any
                                information, Content, materials, or www.premiumhealthquotes.com services included on or otherwise made available to you
                                through the Site, whether based in contract, tort, strict
                                liability, or otherwise, and whether or not www.premiumhealthquotes.com, its licensors, its suppliers, or any third parties
                                mentioned on the Site have been advised of the possibility of
                                such damages www.premiumhealthquotes.com, its licensors, its suppliers, or any third parties mentioned on the Site shall be
                                liable only to the extent of actual damages incurred by you,
                                not to exceed U.S. $100. Any claims arising in connection with your use of the Site or any Content must be
                                brought within one (1) year of the date of the event giving
                                rise to such action occurred. <br><br>
                    
                                <span class="lead">User Submissions</span>
                                You agree that you will not upload or transmit any communications or content of any type to the Site that
                                infringe or violate any rights of any party. By submitting
                                communications or content to the Site, you agree that such submission is non-confidential for all purposes.
                                If you make any submission to the Site or if you submit any
                                business information, idea, concept or invention to www.premiumhealthquotes.com by email, you automatically grant-or warrant
                                that the owner of such content or intellectual property has
                                expressly granted www.premiumhealthquotes.com a royalty-free, perpetual, irrevocable, sublicensable world-wide nonexclusive
                                license to use, reproduce, create derivative works from,
                                modify, publish, edit, translate, distribute, perform, and display the communication or content in any media
                                or medium, or any form, format, or forum now known or
                                hereafter developed. If you wish to keep any business information, ideas, concepts or inventions private or
                                proprietary, do not submit them to the Site or to www.premiumhealthquotes.com
                                by email.<br><br>
                    
                                <span class="lead">Advertisements, Searches, and Links to Other Sites</span>
                                www.premiumhealthquotes.com may provide links to third-party websites. www.premiumhealthquotes.com also may select certain websites as priority
                                responses to search terms you enter and
                                www.premiumhealthquotes.com may agree to allow advertisers to respond to certain search terms with advertisements or sponsored
                                content. obamacareusa.org does not endorse the content on
                                any third-party websites. www.premiumhealthquotes.com is not responsible for the content of linked third-party sites, sites
                                framed within the Site, third-party websites provided as
                                search results, or third-party advertisements, and does not make any representations regarding their content
                                or accuracy. Your use of third-party websites is at your
                                own risk and subject to the terms and conditions of use and privacy policies for such websites. <br><br>
                    
                                <span class="lead">ELECTRONIC COMMUNICATIONS</span>
                                When you use the Site, or send e-mails to us, you are communicating with us electronically. You consent to
                                receive communications from us electronically. We will
                                communicate with you by e-mail or by posting notices on or through the Site. You agree that all agreements,
                                notices, disclosures and other communications that we
                                provide to you electronically satisfy any legal requirement that such communications be in writing. <br><br>
                    
                                <span class="lead">MODIFICATIONS</span>
                                We reserve the right at any time to modify or discontinue the Site (or any part or content thereof) without
                                notice at any time. www.premiumhealthquotes.com may add, modify, or delete any
                                aspect, program, or feature of the Site. We shall not be liable to you or to any third party for any
                                modification, suspension, or discontinuance of the Site. <br><br>
                    
                                <span class="lead">Data We Collect</span>
                                <strong>Governing Law</strong><br>
                                These Terms are governed by the laws of the State of Florida, without respect to its conflict of laws
                                principles. <br><br>
                    
                                <span class="lead">ARBITRATION</span>
                                All disputes arising out of or relating to any purchase you make with via this Site, any information you
                                provide via the Site, these Terms (including the formation,
                                performance or alleged breach), and your use of the Site will be exclusively resolved under confidential
                                binding arbitration in accordance with the Rules of the
                                American Arbitration Association (“AAA”), including the AAA’s Supplementary Procedures for Consumer-Related
                                Disputes (collectively, the “AAA Rules”) then in effect at
                                the time of the dispute. <br><br>
                    
                                The AAA Rules are available at www.adr.org or by calling 1-800-778-7879. If you initiate arbitration, www.premiumhealthquotes.com will promptly reimburse you for any standard filing fee
                                which may have been required under AAA Rules once you have notified www.premiumhealthquotes.com in writing and provided a copy
                                of the arbitration proceedings. However, if www.premiumhealthquotes.com is
                                the prevailing party in the arbitration, applicable law may allow the arbitrator to award attorneys’ fees
                                and costs to www.premiumhealthquotes.com. If for any reason the AAA is
                                unavailable, the parties shall mutually select another arbitration forum. The arbitration will be conducted
                                in the city of Hollywood, Florida, but may proceed
                                telephonically if the claimant so chooses. <br><br>
                    
                                The arbitrator’s award will be binding and may be entered as a judgment in any court of competent
                                jurisdiction. To the fullest extent permitted by applicable law, no
                                arbitration under these Terms may be joined to an arbitration involving any other party subject to these
                                Terms, whether through class arbitration proceedings or
                                otherwise. Notwithstanding the foregoing, we will have the right to seek injunctive or other equitable
                                relief in state or federal court located to enforce these Terms
                                or prevent an infringement of a third party’s rights. In the event equitable relief is sought, each party
                                hereby irrevocably submits to the personal jurisdiction of
                                such court. <br><br>
                    
                                <span class="lead">WAIVER OF CLASS ACTION RIGHTS</span>
                                ANY DISPUTES ARISING OUT OF OR RELATING TO YOUR USE OF THIS SITE, ANY INFORMATION YOU PROVIDE VIA THE SITE,
                                THESE TERMS (INCLUDING THEIR FORMATION, PERFORMANCE OR
                                ALLEGED BREACH), AND YOUR USE OF THE SITE SHALL BE SUBMITTED INDIVIDUALLY BY YOU, AND SHALL NOT BE SUBJECT
                                TO ANY CLASS ACTION OR REPRESENTATIVE STATUS. BY ENTERING
                                INTO THIS AGREEMENT, YOU HEREBY IRREVOCABLY WAIVE ANY RIGHT YOU MAY HAVE TO JOIN CLAIMS WITH THOSE OF OTHERS
                                or participate as a member of a class of claimants with
                                respect to any claim submitted to arbitration. The parties to this arbitration agreement acknowledge that
                                this class action waiver is material and essential to the
                                arbitration of any disputes between the parties and is nonseverable from the agreement to arbitrate claims.
                                If any portion of this class action waiver is limited,
                                voided, or cannot be enforced, then the parties agreement to arbitrate shall be null and void. YOU
                                UNDERSTAND THAT BY AGREEING TO THIS CLASS ACTION WAIVER, YOU MAY
                                ONLY BRING CLAIMS AGAINST www.premiumhealthquotes.com IN AN INDIVIDUAL CAPACITY AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY
                                PURPORTED CLASS ACTION OR REPRESENTATIVE PROCEEDING.
                                <br><br>
                    
                                <span class="lead">Notice and Take Down Procedures; Copyright Agent</span>
                                If you believe any materials accessible on or from the Site infringe your copyright, you may request removal
                                of those materials (or access thereto) from this web site
                                by contacting www.premiumhealthquotes.com’s copyright agent (identified below) and providing the following information:
                                <br><br>
                    
                    
                                1. Identification of the copyrighted work that you believe to be infringed. Please describe the work, and
                                where possible include a copy or the location (e.g., URL) of
                                an authorized version of the work.<br>
                                2. A description, in reasonable detail (including the applicable URL) of the material that you believe to be
                                infringing and its location. Please provide us with enough
                                information that will allow us to locate the material.<br>
                                3. Your name, address, telephone number and (if available) e-mail address.<br>
                                4. A statement that you have a good faith belief that the complained-of use of the materials is not
                                authorized by the copyright owner, its agent, or the law.<br>
                                5. A statement by you, made under the penalty of perjury, that the information that you have supplied is
                                accurate, and indicating that you are the copyright owner or
                                are authorized to act on the copyright owner’s behalf.<br>
                                6. A signature or the electronic equivalent from the copyright holder or authorized representative.
                    
                                <br><br>
                                Please send this notice to: <br><br>
                                Attn: Health Insurance Services Legal<br>
                                2 Oakwood Blvd., Suite 100<br>
                                Hollywood, Florida 33020<br>
                                Email: privacy@www.premiumhealthquotes.com<br><br>
                    
                                <span class="lead">Complete Agreement</span>
                                Except as expressly provided in a particular “legal notice” on the Site or via e-mail from www.premiumhealthquotes.com, this
                                Agreement and the www.premiumhealthquotes.com Privacy Policy constitute the
                                entire agreement between you and www.premiumhealthquotes.com with respect to the use of the Site and Content. <br><br>
                                If any provision of this Agreement is found to be invalid by any court having competent jurisdiction, the
                                invalidity of such provision shall not affect the validity of
                                the remaining provisions of this Agreement, which shall remain in full force and effect. No waiver of any of
                                these Terms shall be deemed a further or continuing waiver
                                of such term or condition or any other term or condition. <br><br>
                                &copy; 2016 www.premiumhealthquotes.com, All rights reserved.
                            </p>
                            <a class="button large close-modal" data-close>Close</a>
                    
                        </div>
                    </div>
                    
                </div>
            </div>
        </footer>
        
        
        <script>
            <?php include '../../../common-LP/php/getHttpHost.php';?>
        </script>
        
        <script src="../../assets/js/app.js"></script>
    </body>

</html>