<div id="section-testimonial" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1541054973712 vc_row-has-fill vc_row-o-content-middle vc_row-flex">

        <div class="wpb_column vc_column_container vc_col-sm-4">

            <div class="vc_column-inner">

                <div class="wpb_wrapper">
                </div>
            </div>
        </div>

        <div class="wpb_column vc_column_container vc_col-sm-8">

            <div class="vc_column-inner">

                <div class="wpb_wrapper">

                    <div class="section-title-wrapper margin-bottom-50 text-left shortcode-rand-80 pixelz-inline-css" data-css="&quot;.shortcode-rand-80 .background-title { font-family:Dancing Script;font-weight:400;font-style:normal }.shortcode-rand-80 .background-title { color: #f0f0f0; }.shortcode-rand-80 .title-wrap { margin: 0 0 18px 0; }.shortcode-rand-80.section-title-wrapper { color: rgba(0,0,0,0.6); }.shortcode-rand-80 .section-title { color: #151515; text-transform: none; }&quot;">

                        <div class="title-wrap bg-title-enabled">
                            <h3 class="section-title">{{\App\TestimonialHeaderSection::all()[0]->title}}</h3>
                        </div>

                        <div class="section-description">{{\App\TestimonialHeaderSection::all()[0]->description}}
                        </div>

                        <div class="button-section">
                        </div>
                    </div>

                    <div class="testimonial-wrapper testimonial-1 text-center testimonial-light" data-css="&quot;&quot;">

                        <div class="row">

                            <div class="pixelz-page-carousel owl-carousel" data-loop="1" data-margin="50" data-center="0" data-nav="0" data-dots="1" data-autoplay="1" data-items="2" data-items-tab="1" data-items-mob="1" data-duration="5000" data-smartspeed="250" data-scrollby="1" data-autoheight="false">
                                    @foreach(\App\TestimonialBodySection::all() as $testimonial)

                                <div class="item">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="testimonial-inner rounded">
                                            <div class="testimonial-abs-part">
                                                <div class="testimonial-thumb"><img width="80" height="80" src="{{$testimonial->pic_url}}" class="img-fluid rounded-circle wp-post-image" alt="" sizes="(max-width: 80px) 100vw, 80px" />
                                                </div>
                                            </div>
                                            <div class="testimonial-info-wrap">
                                                <div class="testimonial-excerpt">
                                                    <p>{{$testimonial->description}}</p>
                                                </div>
                                                <div class="testimonial-title">
                                                    <h5><a href="http://demo.zozothemes.com/pixzlo/testimonial/johny/" class="client-say">{{$testimonial->name}}</a></h5>
                                                </div>
                                                <div class="testimonial-designation">
                                                    <p>{{$testimonial->role}}</p>
                                                </div>
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

