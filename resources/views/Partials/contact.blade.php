<div id="section-contact" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1542434885418">
        <div class="floating-ball-model-3"><span class="floating-ball-1"></span><span class="floating-ball-2"></span><span class="floating-ball-3"></span></div>
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="section-title-wrapper margin-bottom-20 text-left shortcode-rand-99 pixelz-inline-css" data-css="&quot;.shortcode-rand-99 .background-title { font-family:Abril Fatface;font-weight:400;font-style:normal }.shortcode-rand-99 .section-title { color: #000000; text-transform: none; }&quot;">
                        <div class="title-wrap">
                            <h5 class="section-title">Send your Request</h5></div>
                        <div class="section-description"></div>
                        <div class="button-section"></div>
                    </div>
                    <div class="contact-form-wrapper contact-form-classic" data-css="&quot;&quot;">
                        <div class="contact-form">
                            <div role="form" class="wpcf7" id="wpcf7-f1241-p2470-o2" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form  class="wpcf7-form" id="contact_form">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12"> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name*" /></span></div>

                                        <span role="alert" class="wpcf7-not-valid-tip" id="contact_form_name"></span>

                                        <div class="col-md-6 col-sm-12"> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email*" /></span></div>

                                        <span role="alert" class="wpcf7-not-valid-tip" id="contact_form_email"></span>

                                        <div class="col-md-12 col-sm-12"> <span class="wpcf7-form-control-wrap your-website"><input type="text" name="website" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Website Url" /></span></div>

                                        <span role="alert" class="wpcf7-not-valid-tip" id="contact_form_website"></span>

                                        <div class="col-md-12 col-sm-12"> <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message*"></textarea></span></div>

                                        <span role="alert" class="wpcf7-not-valid-tip" id="contact_form_message"></span>

                                    </div>
                                    <p>
                                        <input type="submit" value="Submit Request" id="contact_btn" />
                                        <span class="ajax-loader" id="contact_form_loader"></span>

                                    </p>
                                    <div class="wpcf7-display-none" role="alert" style="display: block;" id="contact_form_error"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="wpb_gmaps_widget wpb_content_element">
                        <div class="wpb_wrapper">
                            <div class="wpb_map_wraper">
                                {!! \App\GetInTouchMapSection::all()[0]->map_iframe !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>