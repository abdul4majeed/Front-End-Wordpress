<div id="section-services" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1542432286846 vc_row-has-fill">
        <div class="floating-ball-model-2"><span class="floating-ball-1"></span><span class="floating-ball-2"></span><span class="floating-ball-3"></span></div>
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1539414271991">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1539230650386">
                                <div class="wpb_wrapper">
                                    <div class="section-title-wrapper margin-bottom-50 text-center shortcode-rand-74 pixelz-inline-css" data-css="&quot;.shortcode-rand-74 .background-title { font-family:Dancing Script;font-weight:700;font-style:normal }.shortcode-rand-74 .background-title { color: #f0f0f0; }.shortcode-rand-74 .title-wrap { margin: 0 0 18px 0; }.shortcode-rand-74.section-title-wrapper { color: rgba(0,0,0,0.6); }.shortcode-rand-74.section-title-wrapper &gt; *:nth-child(1) { margin-bottom: 25px; }.shortcode-rand-74 .section-title { color: #151515; text-transform: none; }&quot;">
                                        <div class="title-wrap bg-title-enabled">
                                            <h2 class="section-title">{{\App\ServicesHeader::first()->title}}</h2></div>
                                        <div class="section-description">{!! \App\ServicesHeader::first()->description !!}</div>
                                        <div class="button-section"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="services-wrapper services-1 services-light shortcode-rand-60 pixelz-inline-css" data-css="&quot;.shortcode-rand-60.services-wrapper .services-inner &gt; *:nth-child(1) { margin-bottom: 35px; }.shortcode-rand-60.services-wrapper .services-inner &gt; *:nth-child(2) { margin-bottom: 20px; }.shortcode-rand-60.services-wrapper .services-inner &gt; *:nth-child(3) { margin-bottom: 20px; }.shortcode-rand-60.services-wrapper .services-inner &gt; *:nth-child(4) { margin-bottom: 35px; }&quot;">
                    <div class="row">
                        @foreach(\App\SubLink::with('sub_link_contents')->get() as $sub_link_with_content)
                        <div class="col-lg-4 col-md-4">
                                @foreach($sub_link_with_content->sub_link_contents as $con )
                                <div class="services-inner">
                                <div class="services-thumb"><img width="1280" height="853" src="{{$con->img_url}}" class="img-fluid wp-post-image" alt=""  /></div>
                                    <div class="services-title">
                                    <h5><a href="{{route('sub_pages',$sub_link_with_content->id)}}" class="entry-title">{{$sub_link_with_content->sub_link}}</a></h5></div>
                                    <div class="services-read-more"><a href="{{route('sub_pages',$sub_link_with_content->id)}}" class="read-more">Go continue</a></div>
                                </div>
                                @endforeach
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