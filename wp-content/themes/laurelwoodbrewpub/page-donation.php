<?php
/*
Template Name: Donation Request Form
*/
?>
<?php get_header(); ?>
<?php global $foodeez_lite_shortname; ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<div class="bread-title-holder">
    <div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
    <div class="container">
        <div class="row-fluid">
          <div class="container_inner clearfix">
            <h1 class="title"><?php the_title(); ?></h1>
            <?php if ((class_exists('foodeez_lite_breadcrumb_class'))) {$foodeez_lite_breadcumb->custom_breadcrumb();} ?>
           </div>
         </div>
    </div>
</div>

<div class="page-content default-pagetemp">
    <div class="container post-wrap">
        <div class="row-fluid">
            <div id="content" class="span12">
                <div class="post" id="post-<?php the_ID(); ?>">
                    <!-- <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Enter your email below:</a></h2> -->
                                 
                    <div class="entry">                                                       
                        <?php the_content(); ?> <!-- Laurelwood Brewing Company is proud to support our local communities, events, and the environment. Laurelwood receives letters, phone calls & emails for donations and sponsorships on a daily basis and unfortunately we are not able to fulfill every request. We use  this donation/sponsorship form to help us organize all of our requests and to help you reach us.  Please keep in mind that we simply are not able to fulfill every request, but each one will be considered by our management team and we will respond to you as promptly as possible. Thank you for considering Laurelwood Brewing Company. -->
                        
                        
                        <form id="donationform" action="<?php bloginfo('template_directory'); ?>/donateprocess.php" method="post">
                        
                        <!-- Email field used as honeypot for bots -->
                        <input type="text" style="display:none" name="username" id="username">
                        <!-- Feedback field used as actual human verification check -->
                        <input type="hidden" name="honey" id="honey" value="">

                        <fieldset><legend>Tell us about your event</legend>
                        
                        <p><label for="eventname">Name of Event <abbr title="required">*</abbr> </label>
                        <input name="eventname" type="text" id="eventname" class="required" onblur="$('#honey').val('human');" /></p>
                        
                        <p><label for="eventlocation">Location <abbr title="required">*</abbr></label>
                        <input name="eventlocation" type="text" id="eventlocation" class="required" /></p>
                        
                        <p><label for="eventdate">Event Date <abbr title="required">*</abbr> <span>(mm/dd/yyyy)</span></label>
                        <input name="eventdate" type="text" id="eventdate" class="required" /></p>                        
                        
                        <p><label for="eventstart">Start Time <span>(ex: 11:00AM)</span></label>
                        <input name="eventstart" type="text" id="eventstart" /></p>                        
                        
                        <p><label for="eventend">End Time <span>(ex: 6:00PM)</span></label>
                        <input name="eventend" type="text" id="eventend" /></p>
                        
                        <p><label for="estimate">Attendance Estimate <abbr title="required">*</abbr></label>
                        <input name="estimate" type="text" id="estimate" class="required" /></p>
                        
                        <p class="options"><label class="optionheader">Will other alcohol be served? <abbr title="required">*</abbr></label>
                        <label><input name="commlist" type="radio" value="yes" id="yesalcohol" class="required" /> Yes </label>                        
                        <label><input name="commlist" type="radio" value="no" id="noalcohol" class="required" /> No</label>
                        
                        <span class="ifyes" id="ifyesalcohol"><label style="float: none;">What sort of alcohol?</label> <label><input name="whatsort" type="checkbox" value="wine" id="wine" /> Wine</label>
                        <label><input name="whatsort" type="checkbox" value="other craft brews" id="otherbrews" /> Other Craft Brews</label>
                        <label><input name="whatsort" type="checkbox" value="full bar" id="fullbar" /> Full Bar</label></span>
                        </p>
                        
                       <p class="options"><label class="optionheader">Event Type <span>(Check all that apply)</span></label>
                        <label><input name="type" type="checkbox" value="beer/wine tasting" id="type_tasting" />Beer/Wine Tasting</label>
                        <label><input name="type" type="checkbox" value="beer festival" id="type_festival" />Beer Festival</label>
                        <label><input name="type" type="checkbox" value="silent auction" id="type_silent_auction" />Silent Auction</label>
                        <label><input name="type" type="checkbox" value="live auction" id="type_live_auction" />Live Auction</label>
                        <label><input name="type" type="checkbox" value="race" id="type_race" />Race</label>
                        <label><input name="type" type="checkbox" value="art show" id="type_art" />Art Show  </label>          
                        <label><input name="type" type="checkbox" value="golf tournament" id="type_golf" />Golf Tournament</label>
                        <label><input name="type" type="checkbox" value="dinner" id="type_dinner" />Dinner</label>
                        <label><input name="type" type="checkbox" value="music festival" id="type_music" />Music Festival</label>
                        <label><input name="type" type="checkbox" value="candidates frum" id="type_candidate" />Candidates Forum</label>
                        <label><input name="type" type="checkbox" id="type_other" />Other, Explain</label>
                        <label><input name="type" type="text" id="type_explain" /></label> </p>
                        
                        <p><label for="yearsrunning">How many years has the event been running? <abbr title="required">*</abbr></label>
                        <select name="yearsrunning" id="yearsrunning" class="required">
                            <option value="">Choose One...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16+</option>
                        </select></p>
                        
                        
                        <p><label for="attendance">Last year's attendance </label>
                        <input name="attendance" type="text" id="attendance" /></p>
                        
                        
                        <p class="options"><label class="optionheader">Have we ever donated to your organization in the past?</label>
                        <label><input name="pastdonate" type="radio" value="yes" /> Yes</label>
                        <label><input name="pastdonate" type="radio" value="no" /> No</label>
                        </p>
                        
                        <p><label for="itemsdonated">If so, when and what items were donated?</label>
                        <textarea name="itemsdonated" cols="30" rows="5" id="itemsdonated"></textarea></p>
                        
                        <p><label for="whobenefits">Who will benefit from the event?<abbr title="required">*</abbr></label>
                        <textarea name="whobenefits" cols="30" rows="5" id="whobenefits" class="required"></textarea></p>
                        
                        </fieldset>
                        
                        
                        <fieldset><legend>Tell us about your organization</legend>
                        
                        <p><label for="orgname">Organization name <abbr title="required">*</abbr> </label>
                        <input name="orgname" type="text" id="orgname" class="required" /></p>
                        
                        
                        <p class="options"><label class="optionheader">Is your organization a charity or non-profit? <abbr title="required">*</abbr></label>
                        <label><input name="ischarity" type="radio" value="501c3" class="required" /> 501(c)(3)</label>
                        <label><input name="ischarity" type="radio" value="other" class="required" /> Other </label>
                        <input name="otherexplain" type="text" id="otherexplain" />
                        </p>
                        
                        <p><label for="contact">Point of contact <abbr title="required">*</abbr></label>
                        <input name="contact" type="text" id="contact" class="required" /></p>
                        
                        
                        <p><label for="phone">Contact's phone number  <abbr title="required">*</abbr></label>
                        <input name="phone" type="text" id="phone" class="required" /></p>
                        
                        <p><label for="email">Contact's email <abbr title="required">*</abbr></label>
                        <input name="email" type="text" id="email" class="required email" /></p>
                        
                        
                        <p><label for="whatpart">What part of the community do you serve? <abbr title="required">*</abbr></label>
                        <input name="whatpart" type="text" id="whatpart" class="required" /></p>
                        
                        </fieldset>
                        
                        <fieldset> <legend>Tell us about your event advertising</legend>
                        
                        <p class="options"><label class="optionheader">How will you advertise your event? <abbr title="required">*</abbr></label>
                        <label><input name="advert" type="checkbox" value="radio" id="advert_radio" class="required" />Radio</label>
                        <label><input name="advert" type="checkbox" value="TV" id="advert_tv" class="required" />TV</label>
                        <label><input name="advert" type="checkbox" value="direct mail" id="advert_mail" class="required" />Direct Mail</label>
                        <label><input name="advert" type="checkbox" value="email list" id="advert_email" class="required" />Email list</label>
                        <label><input name="advert" type="checkbox" value="flyers/posters" id="advert_flyers" class="required" />Flyers/Posters</label>
                        <label><input name="advert" type="checkbox" value="paper newsletter" id="advert_newsletter" class="required" />Paper newsletter</label>
                        <label><input name="advert" type="checkbox" value="word of mouth" id="advert_members" class="required" />Members only event (word of mouth)</label>
                        </p>
                        
                        
                        <p class="options"><label class="optionheader">Would you like to include Laurelwood's name or logo with your advertising materials? <abbr title="required">*</abbr></label>
                        <label><input name="adlogo" type="radio" value="yes" class="required" /> Yes</label>
                        <label><input name="adlogo" type="radio" value="no" class="required" /> No</label>
                        </p>
                        
                        
                        <p><label for="support">What other groups (if any) will be supporting this event? <abbr title="required">*</abbr></label>
                        <input name="support" type="text" id="support" class="required" /></p>
                        
                        <p><label for="howheard">How did you hear about Laurelwood Brew Pub? <abbr title="required">*</abbr></label>
                        <input name="howheard" type="text" id="howheard" class="required" /></p>
                        
                        <p class="options"><label class="optionheader">May we list you on our website as a "Partner in the Community?" <abbr title="required">*</abbr></label>
                        <label><input name="commlist" type="radio" value="yes" id="yesurl" class="required" /> Yes </label>                        
                        <label><input name="commlist" type="radio" value="no" id="nourl" class="required" /> No</label>
                        <span class="ifyes" id="ifyesurl"><label style="float: none;">What is your URL?</label> <input name="url" type="text" id="url" /></span>
                        </p>
                        
                        <p class="options"><label class="optionheader">Would you be willing to list us as a sponsor on your site with a reciprocal link? <abbr title="required">*</abbr></label>
                        <label><input name="sponsor" type="radio" value="yes" class="required" /> Yes</label>
                        <label><input name="sponsor" type="radio" value="no" class="required" /> No</label>
                        </p>                   
                        
                        </fieldset>
                        
                        <fieldset><legend>Tell us about the donation</legend>
                        
                        <p class="options"><label class="optionheader">What would you like to have donated? <abbr title="required">*</abbr></label>
                        <label><input name="whatdonated" type="checkbox" value="bottled" id="bottled" checked="checked" class="required" />Bottled beer</label>
                        <label><input name="whatdonated" type="checkbox" value="keg" id="keg" class="required" />Keg beer</label>
                        <label><input name="whatdonated" type="checkbox" value="gift certificate" id="giftcert" class="required" />Gift certificate</label>
                        <label><input name="whatdonated" type="checkbox" value="otheritem" id="otherdonate" class="required" />Other</label> <input name="otherdonate" type="text" id="otherdonate" />
                        </p>
                        
                        <p><label for="howmuch">How much / how many? <abbr title="required">*</abbr></label>
                        <input name="howmuch" type="text" id="howmuch" class="required" /></p>
                        
                        <p><label for="howused">How will the donation be used? <abbr title="required">*</abbr> <span>(Tasting, sale, auction, etc.)</span></label>
                        <input name="howused" type="text" id="howused" class="required" /></p>
                        
                        </fieldset>
                        
                        
                        <p><label>&nbsp;</label>
                        <input type="image" src="<?php bloginfo('template_directory'); ?>/images/bg_footersubmit.jpg" alt="Submit" id="formsubmit" /></p>
                        
                        </form>
                        
                    </div>
                                                            
                </div>
                    <!-- skepost -->
                </div>
                <!-- post -->

                <?php endwhile; ?>
                <?php else :  ?>
                    <div class="post">
                        <h2><?php _e('Not Found','foodeez-lite'); ?></h2>
                    </div>
                <?php endif; ?>
            </div>
            <!-- content --> 
        </div>
    </div>
</div>
<?php get_footer(); ?>
div>








<div id="columntopcap"></div>
<div id="columnwrap">

            <div class="spacerphotos">

                <?php if(have_posts()) : ?><?php while(have_posts()) : the_post() ?>
    
                <div id="post-<?php the_ID(); ?>" class="post">

                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                 
                    <div class="entry">                                                       
                        <?php the_content(); ?> <!-- Laurelwood Brewing Company is proud to support our local communities, events, and the environment. Laurelwood receives letters, phone calls & emails for donations and sponsorships on a daily basis and unfortunately we are not able to fulfill every request. We use  this donation/sponsorship form to help us organize all of our requests and to help you reach us.  Please keep in mind that we simply are not able to fulfill every request, but each one will be considered by our management team and we will respond to you as promptly as possible. Thank you for considering Laurelwood Brewing Company. -->
                        
                        
                        <form id="donationform" action="<?php bloginfo('template_directory'); ?>/donateprocess.php" method="post">
                        
                        <!-- Email field used as honeypot for bots -->
                        <input type="text" style="display:none" name="username" id="username">
                        <!-- Feedback field used as actual human verification check -->
                        <input type="hidden" name="honey" id="honey" value="">

                        <fieldset><legend>Tell us about your event</legend>
                        
                        <p><label for="eventname">Name of Event <abbr title="required">*</abbr> </label>
                        <input name="eventname" type="text" id="eventname" class="required" onblur="$('#honey').val('human');" /></p>
                        
                        <p><label for="eventlocation">Location <abbr title="required">*</abbr></label>
                        <input name="eventlocation" type="text" id="eventlocation" class="required" /></p>
                        
                        <p><label for="eventdate">Event Date <abbr title="required">*</abbr> <span>(mm/dd/yyyy)</span></label>
                        <input name="eventdate" type="text" id="eventdate" class="required" /></p>                        
                        
                        <p><label for="eventstart">Start Time <span>(ex: 11:00AM)</span></label>
                        <input name="eventstart" type="text" id="eventstart" /></p>                        
                        
                        <p><label for="eventend">End Time <span>(ex: 6:00PM)</span></label>
                        <input name="eventend" type="text" id="eventend" /></p>
                        
                        <p><label for="estimate">Attendance Estimate <abbr title="required">*</abbr></label>
                        <input name="estimate" type="text" id="estimate" class="required" /></p>
                        
                        <p class="options"><label class="optionheader">Will other alcohol be served? <abbr title="required">*</abbr></label>
                        <label><input name="commlist" type="radio" value="yes" id="yesalcohol" class="required" /> Yes </label>                        
                        <label><input name="commlist" type="radio" value="no" id="noalcohol" class="required" /> No</label>
                        
                        <span class="ifyes" id="ifyesalcohol"><label style="float: none;">What sort of alcohol?</label> <label><input name="whatsort" type="checkbox" value="wine" id="wine" /> Wine</label>
                        <label><input name="whatsort" type="checkbox" value="other craft brews" id="otherbrews" /> Other Craft Brews</label>
                        <label><input name="whatsort" type="checkbox" value="full bar" id="fullbar" /> Full Bar</label></span>
                        </p>
                        
                       <p class="options"><label class="optionheader">Event Type <span>(Check all that apply)</span></label>
                        <label><input name="type" type="checkbox" value="beer/wine tasting" id="type_tasting" />Beer/Wine Tasting</label>
                        <label><input name="type" type="checkbox" value="beer festival" id="type_festival" />Beer Festival</label>
                        <label><input name="type" type="checkbox" value="silent auction" id="type_silent_auction" />Silent Auction</label>
                        <label><input name="type" type="checkbox" value="live auction" id="type_live_auction" />Live Auction</label>
                        <label><input name="type" type="checkbox" value="race" id="type_race" />Race</label>
                        <label><input name="type" type="checkbox" value="art show" id="type_art" />Art Show  </label>          
                        <label><input name="type" type="checkbox" value="golf tournament" id="type_golf" />Golf Tournament</label>
                        <label><input name="type" type="checkbox" value="dinner" id="type_dinner" />Dinner</label>
                        <label><input name="type" type="checkbox" value="music festival" id="type_music" />Music Festival</label>
                        <label><input name="type" type="checkbox" value="candidates frum" id="type_candidate" />Candidates Forum</label>
                        <label><input name="type" type="checkbox" id="type_other" />Other, Explain</label>
                        <label><input name="type" type="text" id="type_explain" /></label> </p>
                        
                        <p><label for="yearsrunning">How many years has the event been running? <abbr title="required">*</abbr></label>
                        <select name="yearsrunning" id="yearsrunning" class="required">
                            <option value="">Choose One...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16+</option>
						</select></p>
                        
                        
                        <p><label for="attendance">Last year's attendance </label>
                        <input name="attendance" type="text" id="attendance" /></p>
                        
                        
                        <p class="options"><label class="optionheader">Have we ever donated to your organization in the past?</label>
                        <label><input name="pastdonate" type="radio" value="yes" /> Yes</label>
                        <label><input name="pastdonate" type="radio" value="no" /> No</label>
                        </p>
                        
                        <p><label for="itemsdonated">If so, when and what items were donated?</label>
              			<textarea name="itemsdonated" cols="30" rows="5" id="itemsdonated"></textarea></p>
                        
                        <p><label for="whobenefits">Who will benefit from the event?<abbr title="required">*</abbr></label>
                        <textarea name="whobenefits" cols="30" rows="5" id="whobenefits" class="required"></textarea></p>
                        
                        </fieldset>
                        
						
                        <fieldset><legend>Tell us about your organization</legend>
                        
                        <p><label for="orgname">Organization name <abbr title="required">*</abbr> </label>
                        <input name="orgname" type="text" id="orgname" class="required" /></p>
                        
                        
                        <p class="options"><label class="optionheader">Is your organization a charity or non-profit? <abbr title="required">*</abbr></label>
                        <label><input name="ischarity" type="radio" value="501c3" class="required" /> 501(c)(3)</label>
                        <label><input name="ischarity" type="radio" value="other" class="required" /> Other </label>
                        <input name="otherexplain" type="text" id="otherexplain" />
                        </p>
                        
                        <p><label for="contact">Point of contact <abbr title="required">*</abbr></label>
                        <input name="contact" type="text" id="contact" class="required" /></p>
                        
                        
                        <p><label for="phone">Contact's phone number  <abbr title="required">*</abbr></label>
                        <input name="phone" type="text" id="phone" class="required" /></p>
                        
                        <p><label for="email">Contact's email <abbr title="required">*</abbr></label>
                        <input name="email" type="text" id="email" class="required email" /></p>
                        
                        
                        <p><label for="whatpart">What part of the community do you serve? <abbr title="required">*</abbr></label>
                        <input name="whatpart" type="text" id="whatpart" class="required" /></p>
                        
                        </fieldset>
                        
                        <fieldset> <legend>Tell us about your event advertising</legend>
                        
                        <p class="options"><label class="optionheader">How will you advertise your event? <abbr title="required">*</abbr></label>
                        <label><input name="advert" type="checkbox" value="radio" id="advert_radio" class="required" />Radio</label>
                        <label><input name="advert" type="checkbox" value="TV" id="advert_tv" class="required" />TV</label>
                        <label><input name="advert" type="checkbox" value="direct mail" id="advert_mail" class="required" />Direct Mail</label>
                        <label><input name="advert" type="checkbox" value="email list" id="advert_email" class="required" />Email list</label>
                        <label><input name="advert" type="checkbox" value="flyers/posters" id="advert_flyers" class="required" />Flyers/Posters</label>
                        <label><input name="advert" type="checkbox" value="paper newsletter" id="advert_newsletter" class="required" />Paper newsletter</label>
                        <label><input name="advert" type="checkbox" value="word of mouth" id="advert_members" class="required" />Members only event (word of mouth)</label>
                        </p>
                        
                        
                        <p class="options"><label class="optionheader">Would you like to include Laurelwood's name or logo with your advertising materials? <abbr title="required">*</abbr></label>
                        <label><input name="adlogo" type="radio" value="yes" class="required" /> Yes</label>
                        <label><input name="adlogo" type="radio" value="no" class="required" /> No</label>
                        </p>
                        
                        
                        <p><label for="support">What other groups (if any) will be supporting this event? <abbr title="required">*</abbr></label>
                        <input name="support" type="text" id="support" class="required" /></p>
                        
                        <p><label for="howheard">How did you hear about Laurelwood Brew Pub? <abbr title="required">*</abbr></label>
                        <input name="howheard" type="text" id="howheard" class="required" /></p>
                        
                        <p class="options"><label class="optionheader">May we list you on our website as a "Partner in the Community?" <abbr title="required">*</abbr></label>
                        <label><input name="commlist" type="radio" value="yes" id="yesurl" class="required" /> Yes </label>                        
                        <label><input name="commlist" type="radio" value="no" id="nourl" class="required" /> No</label>
                        <span class="ifyes" id="ifyesurl"><label style="float: none;">What is your URL?</label> <input name="url" type="text" id="url" /></span>
                        </p>
                        
                        <p class="options"><label class="optionheader">Would you be willing to list us as a sponsor on your site with a reciprocal link? <abbr title="required">*</abbr></label>
                        <label><input name="sponsor" type="radio" value="yes" class="required" /> Yes</label>
                        <label><input name="sponsor" type="radio" value="no" class="required" /> No</label>
                        </p>                   
                        
                        </fieldset>
                        
                        <fieldset><legend>Tell us about the donation</legend>
                        
                        <p class="options"><label class="optionheader">What would you like to have donated? <abbr title="required">*</abbr></label>
                        <label><input name="whatdonated" type="checkbox" value="bottled" id="bottled" checked="checked" class="required" />Bottled beer</label>
                        <label><input name="whatdonated" type="checkbox" value="keg" id="keg" class="required" />Keg beer</label>
                        <label><input name="whatdonated" type="checkbox" value="gift certificate" id="giftcert" class="required" />Gift certificate</label>
                        <label><input name="whatdonated" type="checkbox" value="otheritem" id="otherdonate" class="required" />Other</label> <input name="otherdonate" type="text" id="otherdonate" />
                        </p>
                        
                        <p><label for="howmuch">How much / how many? <abbr title="required">*</abbr></label>
                        <input name="howmuch" type="text" id="howmuch" class="required" /></p>
                        
                        <p><label for="howused">How will the donation be used? <abbr title="required">*</abbr> <span>(Tasting, sale, auction, etc.)</span></label>
                        <input name="howused" type="text" id="howused" class="required" /></p>
                        
                        </fieldset>
                        
                        
                        <p><label>&nbsp;</label>
                        <input type="image" src="<?php bloginfo('template_directory'); ?>/images/bg_footersubmit.jpg" alt="Submit" id="formsubmit" /></p>
                        
                        </form>
                        
                    </div>
                                                            
                </div>
                <!--/post-->
            
                <?php endwhile; else : ?>
    
                <div class="post box">
                    <div class="entry-head"><h2>404 - Not Found</h2></div>
                    <div class="entry-content"><p>The page you are looking for is not here.</p></div>
                </div>
    
                <?php endif; ?>
                <div class="fix"></div>
            
            </div>
            <!--/spacer -->




<div id="hasphoto">

        
			<!-- Add you sidebar manual code here to show above the widgets -->

            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Photo Sidebar') )  ?>		           

			<!-- Add you sidebar manual code here to show below the widgets -->
            
</div>
<!--/rightcol -->



    <br class="fix" />
</div><!-- END COLUMNWRAP -->

<div id="columnbotcap"></div>
<?php get_footer(); ?>