<div id="section-portfolio" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1542432352643">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1539425346108">
                                <div class="wpb_wrapper">
                                    <div class="section-title-wrapper margin-bottom-50 text-center shortcode-rand-80 pixelz-inline-css" data-css="&quot;.shortcode-rand-80 .background-title { font-family:Dancing Script;font-weight:700;font-style:normal }.shortcode-rand-80 .background-title { color: #f0f0f0; }.shortcode-rand-80 .title-wrap { margin: 0 0 18px 0; }.shortcode-rand-80.section-title-wrapper &gt; *:nth-child(1) { margin-bottom: 25px; }.shortcode-rand-80.section-title-wrapper &gt; *:nth-child(2) { margin-bottom: 70px; }.shortcode-rand-80 .section-title { color: #000000; text-transform: none; }&quot;">
                                        <div class="title-wrap bg-title-enabled">
                                        <h3 class="section-title">{{\App\ProjectHeaderSection::all()[0]->header}}</h3></div>
                                        <div class="section-description">{!! App\ProjectHeaderSection::all()[0]->header_body !!}</div>
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
                                    <div class="portfolio-wrapper text-center shortcode-rand-81 pixelz-inline-css" data-css="&quot;.shortcode-rand-81.portfolio-wrapper .portfolio-content-wrap &gt; *:nth-child(1) { margin-bottom: 5px; }&quot;">
                                        <div class="image-gallery grid-layout portfolio-grid-layout" style="margin-bottom: -50px;" data-filter-stat="0" data-first-cat="">
                                            <div class="isotope" data-cols="3" data-gutter="50" data-layout="fitRows" data-infinite="false">
                                                @foreach(\App\ProjectHeaderProjectSection::all() as $project)
                                                 <article id="post-1049" class="vc-portfolio portfolio-default">
                                                        <div class="portfolio-wrap" data-css="&quot;&quot;">
                                                            <div class="portfolio-img portfolio-overlay-wrap">
                                                                <div class="portfolio-overlay text-center overlay-center">
                                                                    <div class="portfolio-icons">
                                                                        <p><a href="{{$project->url}}" class="image-gallery-link zoom-icon"><i class="icon-magnifier-add"></i></a></p>
                                                                    </div>
                                                                </div>
                                                                <a href="{{$project->url}}" class="image-gallery-link"><img height="389" width="533" class="img-fluid cpt-img" alt="{{$project->name}}" src="{{$project->url}}" /></a>
                                                            </div>
                                                            <div class="portfolio-content-wrap">
                                                                <div class="portfolio-title">
                                                                    <a href="{{$project->home_page}}" target="_blank"> <h6>{{$project->name}}</h6> </a>
                                                                </div>
                                                                <div class="portfolio-categories"><span>{{$project->tag}}</span></div>
                                                            </div>
                                                        </div>
                                                    </article> 

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