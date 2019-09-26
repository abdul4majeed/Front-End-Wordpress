<div id="section-team" class="post-349 page type-page status-publish hentry">
    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1540644019253 vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12">
                            <div class="vc_column-inner vc_custom_1532080802456">
                                <div class="wpb_wrapper">
                                    <div class="section-title-wrapper margin-bottom-50 text-left shortcode-rand-11 pixelz-inline-css" data-css="&quot;.shortcode-rand-11 .background-title { font-family:Dancing Script;font-weight:700;font-style:normal }.shortcode-rand-11 .background-title { color: #f0f0f0; }.shortcode-rand-11 .title-wrap { margin: 0 0 18px 0; }.shortcode-rand-11.section-title-wrapper &gt; *:nth-child(1) { margin-bottom: 25px; }.shortcode-rand-11.section-title-wrapper &gt; *:nth-child(2) { margin-bottom: 45px; }.shortcode-rand-11 .section-title { color: #000000; text-transform: none; }&quot;">
                                        <div class="title-wrap bg-title-enabled">
                                            <h3 class="section-title" style="margin-left: 12em;">{{\App\TeamHeader::all()[0]->title}}</h3></div>
                                        <div class="section-description col-md-6" style="margin-left: 22em;width: 50%;"><span style="align-content: center;">{!! \App\TeamHeader::all()[0]->description !!} </span></div>
                                        <div class="button-section"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="team-wrapper team-1 text-center team-light shortcode-rand-12 pixelz-inline-css" data-css="&quot;.shortcode-rand-12.team-wrapper .team-overlay { color : #ffffff ; }.shortcode-rand-12.team-wrapper .team-thumb .overlay-custom { background : linear-gradient(to bottom, rgba(235,47,91,0.72) 0%, rgba(0,0,0,0.7) 75%); background : -webkit-linear-gradient(to bottom, rgba(235,47,91,0.72) 0%, rgba(0,0,0,0.7) 75%); background : -moz-linear-gradient(to bottom, rgba(235,47,91,0.72) 0%, rgba(0,0,0,0.7) 75%); }.shortcode-rand-12.team-wrapper .team-overlay a { color: #ffffff; }.shortcode-rand-12.team-wrapper .team-overlay a:hover { color: #eb2f5b; }.shortcode-rand-12.team-wrapper .team-inner &gt; *:nth-child(1) { margin-bottom: 35px; }.shortcode-rand-12.team-wrapper .team-inner &gt; *:nth-child(2) { margin-bottom: 15px; }.shortcode-rand-12.team-wrapper .team-inner &gt; *:nth-child(3) { margin-bottom: 0; }&quot;">
                                        <div class="owl-carousel" data-loop="1" data-margin="30" data-center="0" data-nav="0" data-dots="0" data-autoplay="0" data-items="3" data-items-tab="2" data-items-mob="1" data-duration="5000" data-smartspeed="250" data-scrollby="1" data-autoheight="false">
                                                @foreach(\App\Team::all() as $team)
                                                <div class="item">
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="team-inner team-overlay-actived">
                                                                <div class="team-thumb"><span class="overlay-bg overlay-custom"></span>
                                                                    <div class="team-overlay overlay-bottom-center"></div><img width="500" height="667" src="{{$team->image_path}}" class="img-fluid wp-post-image" alt="{{$team->name}}" /></div>
                                                                <div class="team-name-designation">
                                                                    <p><a href="http://demo.zozothemes.com/pixzlo/team/mahfuz-riad/" class="client-name">{{$team->name}}</a></p>
                                                                    <p>{{$team->role}}</p>
                                                                </div>
                                                                <div class="team-social-wrap clearfix">
                                                                    <ul class="nav social-icons team-social social-transparent social-own social-h-black social-bg-trans social-hbg-trans">
                                                                        <li><a class="social-fb" href="{{$team->fb}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                        <li><a class="social-twitter" href="{{$team->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                        <li><a class="social-instagram" href="{{$team->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                                                        <li><a class="social-pinterest" href="{{$team->pinterest}}" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                                                        <li><a class="social-gplus" href="{{$team->googleplus}}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach    
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    
</div>