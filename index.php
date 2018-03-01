<?php
include("content/settings/index.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $metaTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $metaDesc; ?>" />
    <meta name="keywords" content="<?php echo $metaKeywords; ?>" />

    <!-- Le styles -->
    <link href="style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300|Open+Sans+Condensed:300,700,300italic|Lato:400,100,300,700,900|Rokkitt:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <!-- Uncomment after including your favicon in your template file -->
                                   <!-- <link rel="shortcut icon" href="ico/favicon.png"> -->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-static-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="row">
            <div class="span6">
              <p class="company"><span class="green">Over 1.2 Million</span> members</p>
              <p class="tagline">ALREADY STARTED CREATING THE ULTIMATE DIGITAL LIFESTYLE.</p>
            </div>
            <div class="span6">
              <p class="shoutout">Now it's<span class="green"> your turn.</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="wrapper">
      <div class="container">
  
        <div class="row">
          <div class="span10 offset1">
            <h1 class="headline"><?php echo $footer; ?></h1>
          </div>
          <div class="span7 btm-pad">
            <div class="video-container">
              <iframe src="https://player.vimeo.com/video/256659918?color=0a54c7&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
          </div>
          <div class="span5 btm-pad">
            <div class="optbox">
              <h2 class="optcta"><?php echo $linkbackURL; ?></h2>
              <form action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">
				  <!-- Email field (required) -->
                <input type="text" name="email" id="" value="Email Address:" onfocus="if (this.value == 'Email Address:') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Email Address:';}" />
				  <!-- Campaign token -->
	<!-- Get the token at: https://app.getresponse.com/campaign_list.html -->
	<input type="hidden" name="campaign_token" value="<?php echo $optinCode; ?>" />
	<!-- Thank you page (optional) -->
	<input type="hidden" name="thankyou_url" value="<?php echo $trackingFooter; ?>"/>
	<!-- Add subscriber to the follow-up sequence with a specified day (optional) -->
	<input type="hidden" name="start_day" value="0" />
	<!-- Forward form data to your page (optional) -->
	<input type="hidden" name="forward_data" value="" />
	<!-- Subscriber button -->
                <input type="submit" name="submit" class="btn btn-submit" value="Submit" />
              </form>
              <p><i class="icon-lock icon-white"></i>&nbsp; Your information will never be shared or sold.</p>
            </div><!-- /optbox -->
          </div>
        </div>
		  
  
        <!-- Example row of columns -->
        <div class="row">
          <div class="span12">
            <h3>Recent Facebook Reviews...</h3>
          </div>
          <div class="span4">
            <div class="row">
              <div class="span1">
                <img src="img/user.png" alt="James J." />
              </div>
              <div class="span3">
                <p class="testimonial">"As an Internet marketing veteran since 1998, I've seen endless systems and income opportunities but what Reno has created, ranks up there with some of the best I've ever had the pleasure of working with!
I've earned $1000's with Yoonla and have been paid every month I've participated, you can truly live the 'Digital Lifestyle' when you're involved with Yoonla, superb!"</p>
                <p class="test-name">James J.<br />Devon, United Kingdom</p>
              </div>
            </div>
          </div>
          <div class="span4">
            <div class="row">
              <div class="span1">
                <img src="img/user.png" alt="Karen A." />
              </div>
              <div class="span3">
                <p class="testimonial">"Yoonla is the best online company I have been with. I have received payment every month since I started 7 months ago. The founder Reno is so encouraging, everything is professional, it's not hard to make money. The fellow members are all so helpful. The training is super and the work is exiting and fun. This is a very serious company, and you learn so Much."</p>
                <p class="test-name">Syrene E.<br />Aarhus, Denmark</p>
              </div>
            </div>
         </div>
          <div class="span4">
            <div class="row">
              <div class="span1">
                <img src="img/user.png" alt="Cal P." />
              </div>
              <div class="span3">
                <p class="testimonial">"As an 18 year old that is all new to this, I can say that all the training provided in this program and all the walkthrough videos has helped me a lot. The training videos were very clear and specific. Each step was not hard to complete. This program has been very beneficial to me and has helped me to change my mind-set and become more motivated every day."</p>
                <p class="test-name">Victorý P.<br />Hastings, New Zealand</p>
              </div>
            </div>
          </div>
        </div>
  
      </div> <!-- /container -->
    </div><!-- /wrapper -->
    <footer>
      <div class="footer-inner">
        <div class="container">
          <ul>
            <li class="first"><a href="#contactModal" data-target="#contactModal" data-toggle="modal">Contact</a></li>
            <li><a href="#termsModal" data-target="#termsModal" data-toggle="modal">Terms</a></li>
            <li><a href="#privacyModal" data-target="#privacyModal" data-toggle="modal">Privacy Policy</a></li>
          </ul>
          <p class="center">&copy; Copyright 2018 All Rights Reserved - <?php echo $linkbackTXT; ?></p>
        </div>
      </div><!-- /footer-inner -->
    </footer>
    
    <!-- Contact Modal -->
    <div id="contactModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <p class="company"><span class="green">Over 1.2 Million</span> Members</p>
                <p class="tagline">ALREADY STARTED CREATING THE ULTIMATE DIGITAL LIFESTYLE.</p>
            </div>
            <div class="modal-body">
                <h3 id="contactModalLabel">Contact Us</h3>
                <p>Contact Yoonla™ support: <a href="https://helpdesk.yoonla.com">Yoonla™ Helpdesk</a></p>
            </div>
            <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
    </div>
    <!-- End of Contact Modal -->
    
    <!-- Terms Modal -->
    <div id="termsModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <p class="company"><span class="green">Over 1.2 Million</span> Members</p>
                <p class="tagline">ALREADY STARTED CREATING THE ULTIMATE DIGITAL LIFESTYLE.</p>
            </div>
            <div class="modal-body">
                <h3 id="termsModalLabel">Yoonla™ Terms & Conditions</h3>
                <p><strong>Terms &amp; Conditions</strong></p>
<p>» 1. Introduction<br>
  » 2. Information on the Website<br>
  » 3. Trade Marks<br>
  » 4. External Links<br>
  » 5. Public forums and User Submissions<br>
  » 6. Specific Use<br>
  » 7. Warranties<br>
  » 8. Disclaimers<br>
  » 9. Use of the Website<br>
  » 10. General</p>
<p><strong>1. Introduction</strong></p>
<p>Yoonla.com, including subsidiaries and affiliates (&ldquo;Website&rdquo; or &ldquo;Website Owner&rdquo; or &ldquo;we&rdquo; or &ldquo;us&rdquo; or &ldquo;our&rdquo;) provides the information contained on this website or any of the pages comprising the website (&ldquo;website&rdquo;) to visitors (&ldquo;visitors&rdquo;) (cumulatively referred to as &ldquo;you&rdquo; or &ldquo;your&rdquo; hereinafter) subject to the terms and conditions set out in these website terms and conditions, the Privacy Policy and any other relevant terms and conditions, policies and notices which may be applicable to a specific section or module of this website.</p>
<p><strong>2. Information on the Website</strong></p>
<p>Whilst every effort is made to update the information contained on this website, neither Yoonla.com nor any third party or data or content provider make any representations or warranties, whether express, implied in law or residual, as to the sequence, accuracy, completeness or reliability of information, opinions, any share price information, research information, data and/or content contained on the website (including but not limited to any information which may be provided by any third party or data or content providers) (&ldquo;information&rdquo;) and shall not be bound in any manner by any information contained on the website. Yoonla.com reserves the right at any time to change or discontinue without notice, any aspect or feature of this website. No information shall be construed as advice and information is offered for information purposes only and is not intended for trading purposes. You and your company rely on the information contained on this website at your own risk. If you find an error or omission at this site, please let us know.</p>
<p><strong>3. Trade Marks</strong></p>
<p>The trade marks, names, logos and service marks (collectively &ldquo;trade marks&rdquo;) displayed on this website are registered and unregistered trade marks of Yoonla.com. Nothing contained on this website should be construed as granting any licence or right to use any trade mark without the prior written permission of Yoonla.com.</p>
<p><strong>4. External Links</strong></p>
<p>External links may be provided for your convenience, but they are beyond the control of Yoonla.com and no representation is made as to their content. Use or reliance on any external links and the content thereon provided is at your own risk. When visiting external links you must refer to that external websites terms and conditions of use. No hypertext links shall be created from any website controlled by you or otherwise to this website without the express prior written permission of Yoonla.com. Please contact us if you would like to link to this website or would like to request a link to your website.</p>
<p><strong>5. Public Forums and User Submissions</strong></p>
<p>Yoonla.com is not responsible for any material submitted to the public areas by you (which include bulletin boards, hosted pages, chat rooms, or any other public area found on the website. Any material (whether submitted by you or any other user) is not endorsed, reviewed or approved by Yoonla.com. Yoonla.com reserves the right to remove any material submitted or posted by you in the public areas, without notice to you, if it becomes aware and determines, in its sole and absolute discretion that you are or there is the likelihood that you may, including but not limited to –</p>
<p>5.1 defame, abuse, harass, stalk, threaten or otherwise violate the rights of other users or any third parties;</p>
<p>5.2 publish, post, distribute or disseminate any defamatory, obscene, indecent or unlawful material or information;</p>
<p>5.3 post or upload files that contain viruses, corrupted files or any other similar software or programs that may damage the operation of Yoonla.com&rsquo;s and/or a third party&rsquo;s computer system and/or network;</p>
<p>5.4 violate any copyright, trade mark, other applicable New Zealand or international laws or intellectual property rights of Yoonla.com or any other third party;</p>
<p>5.5 submit contents containing marketing or promotional material which is intended to solicit business.</p>
<p><strong>6. Specific Use</strong></p>
<p>You further agree not to use the website to send or post any message or material that is unlawful, harassing, defamatory, abusive, indecent, threatening, harmful, vulgar, obscene, sexually orientated, racially offensive, profane, pornographic or violates any applicable law whether in New Zealand or elsewhere and you hereby indemnify Yoonla.com against any loss, liability, damage or expense of whatever nature which Yoonla.com or any third party may suffer which is caused by or attributable to, whether directly or indirectly, your use of the website to send or post any such message or material.</p>
<p><strong>7. Warranties</strong></p>
<p>Yoonla.com makes no warranties, representations, statements or guarantees (whether express, implied in law or residual) regarding the website, the information contained on the website, your or your company&rsquo;s personal information or material and information transmitted over our system. In addition, we make no representation that the operation of our website will be uninterrupted or error-free, and we will not be liable for the consequences of any interruptions or errors.</p>
<p><strong>8. Disclaimers</strong></p>
<p>Yoonla.com shall not be responsible for and disclaims all liability for any loss, liability, damage (whether direct, indirect or consequential), personal injury or expense of any nature whatsoever which may be suffered by you or any third party (including your company), as a result of or which may be attributable, directly or indirectly, to your access and use of the website, any information contained on the website, your or your company&rsquo;s personal information or material and information transmitted over our system. In particular, neither Yoonla.com nor any third party or data or content provider shall be liable in any way to you or to any other person, firm or corporation whatsoever for any loss, liability, damage (whether direct or consequential), personal injury or expense of any nature whatsoever arising from any delays, inaccuracies, errors in, or omission of any share price information or the transmission thereof, or for any actions taken in reliance thereon or occasioned thereby or by reason of non-performance or interruption, or termination thereof.</p>
<p>Every effort has been made to accurately represent this product and it&rsquo;s potential. Even though this industry is one of the few where one can write their own check in terms of earnings, there is no guarantee that you will earn any money using the techniques and ideas in these materials. Examples in these materials are not to be interpreted as a promise or guarantee of earnings. Earning potential is entirely dependent on the person using our product, service, ideas and techniques. We do not purport this as a &ldquo;Get Rich Scheme&rdquo;.</p>
<p>Any claims made of actual earnings or examples of actual results can be verified upon request. Your level of success in attaining the results claimed in our materials depends on the time you devote to operating on our program, ideas and techniques mentioned, your finances, knowledge and various skills. Since these factors differ according to individuals, we cannot guarantee your success or income level. Nor are we responsible for any of your actions.</p>
<p>Materials in our product and our website may contain information that includes or is based upon forward-looking statements. Forward-looking statements give our expectations or forecast of future events. You can identify these statements by the fact that they do not relate strictly to historical or current facts. Any and all forward looking statements here or on any of our material are intended to express our opinion of earnings potential. Many factors will be important in determining your actual results and no guarantees are made that you will achieve results similar to ours or anybody else&rsquo;s, in fact no guarantees are made that you will achieve any result from our website, ideas and techniques in our material.</p>
<p><strong>9. Use of the Website.</strong></p>
<p>Yoonla.com does not make any warranty or representation that information on the website is appropriate for use in any jurisdiction (other than New Zealand). By accessing the website, you warrant and represent to Yoonla.com that you are legally entitled to do so and to make use of information made available via the website.</p>
<p><strong>10. General</strong></p>
<p>10.1 Entire Agreement.</p>
<p>These website terms and conditions should be read in conjunction with the Privacy Policy and Disclaimer and any agreement you enter into with Yoonla.com in relation to the Affiliate program and these documents shall constitute the sole record of the agreement between you and Yoonla.com in relation to your use of the website. Neither you nor Yoonla.com shall be bound by any express tacit or implied representation, warranty, promise or the like, not recorded herein. Unless otherwise specifically stated these website terms and conditions, the Privacy Policy and the Disclaimer supersede and replace all prior commitments, undertakings or representations, whether written or oral, between you and Yoonla.com in respect of your use of the website.</p>
<p>10.2 Alteration</p>
<p>Yoonla.com may at any time modify any relevant terms and conditions, policies or notices. You acknowledge that by visiting the website from time to time, you shall become bound to the current version of the relevant terms and conditions (the &ldquo;current version&rdquo;) and, unless stated in the current version, all previous versions shall be superseded by the current version. You shall be responsible for reviewing the then current version each time you visit the website.</p>
<p>10.3 Conflict.</p>
<p>Where any conflict or contradiction appears between the provisions of these website terms and conditions and any other relevant terms and conditions, policies or notices, the other relevant terms and conditions, policies or notices which relate specifically to a particular section or module of the website shall prevail in respect of your use of the relevant section or module of the website.</p>
<p>10.4 Waiver.</p>
<p>No indulgence or extension of time which either you or Yoonla.com may grant to the other will constitute a waiver of or, whether by stopple or otherwise, limit any of the existing or future rights of the grantor in terms hereof, save in the event or to the extent that the grantor has signed a written document expressly waiving or limiting such rights.</p>
<p>10.5 Cession.</p>
<p>Yoonla.com shall be entitled to cede, assign and delegate all or any of its rights and obligations in terms of any relevant terms and conditions, policies and notices to any third party.</p>
<p>10.6 Severability.</p>
<p>All provisions of any relevant terms and conditions, policies and notices are, notwithstanding the manner in which they have been grouped together or linked grammatically, sever able from each other. Any provision of any relevant terms and conditions, policies and notices, which is or becomes unenforceable in any jurisdiction, whether due to being void, invalid, illegal, unlawful or for any reason whatever, shall, in such jurisdiction only and only to the extent that it is so unenforceable, be treated as pro non scripto and the remaining provisions of any relevant terms and conditions, policies and notices shall remain in full force and effect.</p>
<p>10.7 Applicable laws.</p>
<p>Any relevant terms and conditions, policies and notices shall be governed by and construed in accordance with the laws of New Zealand without giving effect to any principles of conflict of law. You hereby consent to the exclusive jurisdiction of the High Court of New Zealand in respect of any disputes arising in connection with the website, or any relevant terms and conditions, policies and notices or any matter related to or in connection therewith.</p>
<p>10.8 Comments or Questions.</p>
<p>If you have any questions, comments or concerns arising from the website, the <a href="http://www.yoonla.com/privacy/">Privacy Policy</a> or any other relevant terms and conditions, policies and notices or the way in which we are handling your personal information please contact us via our <a href="https://helpdesk.yoonla.com/">Support Desk</a>.</p>
            </div>
            <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
    </div>
    <!-- End of Terms Modal -->
    
    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="privacyModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <p class="company"><span class="green">Over 1.2 Million</span> Members</p>
                <p class="tagline">ALREADY STARTED CREATING THE ULTIMATE DIGITAL LIFESTYLE.</p>
            </div>
            <div class="modal-body">
                <h3 id="privacyModalLabel">Privacy Policy</h3>
                <p><strong>Privacy Policy</strong></p>
<p>Your privacy is important to us. To better protect your privacy we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used. To make this notice easy to find, we make it available on our homepage and at every point where personally identifiable information may be requested</p>
<p>In collecting and storing information, Yoonla.com will comply with the provisions of the Privacy Act 1993.</p>
<p>Yoonla.com strives to offer its visitors the many advantages of online marketing. We may use Personally Identifiable Information (your name, e-mail address, street address, telephone number) subject to the terms of this privacy policy. We will never sell, barter, or rent your email address to any unauthorized third party.  Where any information held by us can be readily retrieved, you shall have access to it and the right to request correction.</p>
<p><strong>How we gather information from users</strong></p>
<p>How we collect and store information depends on the page you are visiting, the activities in which you elect to participate and the services provided. For example, you may be asked to provide information when you register to Yoonla.com or when you contact us. Or you might join one of our newsletters and provide your contact details then.</p>
<p><strong>What we do with the information we collect</strong></p>
<p>Like other Web publishers, we collect information to enhance your visit and deliver more individualised content and advertising. We respect your privacy and do not share your information with anyone.</p>
<p>Aggregated Information (information that does not personally identify you) may be used in many ways. For example, we may combine information about your usage patterns with similar information obtained from other users to help enhance our site and services (e.g., to learn which pages are visited most or what features are most attractive). Aggregated Information may occasionally be shared with our business partners. Again, this information does not include any Personally Identifiable Information about you or allow anyone to identify you individually.</p>
<p>We may use Personally Identifiable Information collected on Yoonla.com to communicate with you about your registration and customisation preferences; our Terms of Service and privacy policy; services and products offered by Yoonla.com and other topics we think you might find of interest.</p>
<p>Personally Identifiable Information collected by Yoonla.com may also be used for other purposes, including but not limited to site administration, troubleshooting, processing of e-commerce transactions, administration and other communications with you. Certain third parties who provide technical support for the operation of our site (our Web hosting service for example) may access such information. We will use your information only as permitted by law. In addition, from time to time as we continue to develop our business, we may sell, buy, merge or partner with other companies or businesses. In such transactions, user information may be among the transferred assets. We may also disclose your information in response to a court order, at other times when we believe we are reasonably required to do so by law and/or to law enforcement authorities whenever we deem it appropriate or necessary. Please note we may not provide you with notice prior to disclosure in such cases.</p>
<p><strong>Linked sites and advertisements</strong></p>
<p>Yoonla.com expects its partners to respect the privacy of our users. Be aware, however, that third parties, including our partners, and other content providers accessible through our site, may have their own privacy and data collection policies and practices. For example, during your visit to our site you may link to, or view as part of a frame on a Yoonla.com page, certain content that is actually created or hosted by a third party. Also, through Yoonla.com you may be introduced to, or be able to access, information, Web sites, features, contests or sweepstakes offered by other parties. Yoonla.com is not responsible for the actions or policies of such third parties. You should check the applicable privacy policies of those third parties when providing information on a feature or page operated by a third party.</p>
<p>While on our site, our advertisers, promotional partners or other third parties may use cookies or other technology to attempt to identify some of your preferences or retrieve information about you. For example, some of our advertising is served by third parties and may include cookies that enable the advertiser to determine whether you have seen a particular advertisement before. Other features available on our site may offer services operated by third parties and may use cookies or other technology to gather information. Yoonla.com does not control the use of this technology by third parties or the resulting information, and is not responsible for any actions or policies of such third parties.</p>
<p>You should also be aware that if you voluntarily disclose Personally Identifiable Information on message boards or in chat areas, that information can be viewed publicly and can be collected and used by third parties without our knowledge and may result in unsolicited messages from other individuals or third parties. Such activities are beyond the control of Yoonla.com and this policy.</p>
<p><strong>Our Commitment To Children&rsquo;s Privacy</strong></p>
<p>Yoonla.com does not knowingly collect or solicit Personally Identifiable Information from or about children under 16 except as permitted by law. If we discover we have received any information from a child under 16 in violation of this policy, we will delete that information immediately. If you believe Yoonla.com has any information from or about anyone under 16, please contact us at the address listed below.</p>
<p><strong>Contacting Us</strong></p>
<p>We can be contacted through our <a href="http://helpdesk.yoonla.com/">support desk</a> or via the address below.</p>
<p>Postal Address:<br>
  Yoonla™<br>
  PO Box 1881<br>
  Nelson 7040<br>
  New Zealand</p>
<p><strong>Changes to this Policy</strong></p>
<p>Yoonla.com reserves the right to change this policy at any time. Please check this page periodically for changes. Your continued use of our site following the posting of changes to these terms will mean you accept those changes. Information collected prior to the time any change is posted will be used according to the rules and laws that applied at the time the information was collected.</p>
<p><strong>Governing law</strong></p>
<p>This policy and the use of this Site are governed by New Zealand law. If a dispute arises under this Policy we agree to first try to resolve it with the help of a mutually agreed-upon mediator in the following location: Nelson, New Zealand. Any costs and fees other than legal fees associated with the mediation will be shared equally by each of us.</p>
<p>If it proves impossible to arrive at a mutually satisfactory solution through mediation, we agree to submit the dispute to binding arbitration at the following location: Nelson, New Zealand, under the rules of the province. Judgment upon the award rendered by the arbitration may be entered in any court with jurisdiction to do so.</p>
<p>Yoonla.com is controlled, operated and administered entirely within New Zealand. This statement and the policies outlined herein are not intended to and do not create any contractual or other legal rights in or on behalf of any party.</p>
            </div>
            <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
    </div>
    <!-- End of Privacy Policy Modal -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
