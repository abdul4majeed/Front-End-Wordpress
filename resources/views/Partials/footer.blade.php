<footer class="site-footer">
        <div class="footer-middle-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-middle-sidebar">
                            <section id="media_image-1" class="widget widget_media_image"><img width="156" height="40" src="{{asset('logo\\'.\App\LogoImage::first()->image_logo_path)}}" class="image wp-image-2728  attachment-full size-full" alt="" style="max-width: 100%; height: auto;" /></section>
                            <section id="custom_html-1" class="widget_text widget widget_custom_html">
                                <div class="textwidget custom-html-widget">{{\App\FooterContect::first()->description}}
                                        {!! \App\FooterContect::first()->address !!}</div>
                            </section>
                            <section id="zozo_social_widget-2" class="widget zozo_social_widget">
                                <ul class="nav social-icons social-widget widget-content social-rounded social-white social-h-white social-bg-own social-hbg-black">
                                    <li><a href="{{\App\FooterContect::first()->fb_link}}" target="_blank" class="social-fb"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{\App\FooterContect::first()->twitter_link}}" target="_blank" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{\App\FooterContect::first()->instagram_link}}" target="_blank" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="{{\App\FooterContect::first()->pinterest_link}}" target="_blank" class="social-pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="{{\App\FooterContect::first()->gplus_link}}" target="_blank" class="social-gplus"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </section>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-middle-sidebar">
                            <section id="nav_menu-1" class="widget widget_nav_menu">
                                    @foreach (\App\Link::with('sub_links')->get() as $link)
                                    @if($link->link === "Services")
                                    <h3 class="widget-title">Services</h3>
                                        @if($link->sub_links)
                                        <div class="menu-footer-menu-container">
                                                <ul id="menu-footer-menu" class="menu">
                                                @foreach($link->sub_links as $sub_link)
                                                <li id="menu-item-1945" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1945"><a href="{{route('sub_pages',$sub_link->id)}}">{{$sub_link->sub_link}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        @endif
                                    @endforeach
                               
                            </section>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-middle-sidebar">
                            <section id="nav_menu-2" class="widget widget_nav_menu">
                                <h3 class="widget-title">Links</h3>
                                <div class="menu-about-menu-container">
                                    <ul id="menu-about-menu" class="menu">
                                         @foreach (\App\Link::with('sub_links')->get() as $link)
                                                
                                                    @if($link->link === "Home")
                                                    <li id="menu-item-1954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1954"><a href="#section-top">{{$link->link}}</a></li>
                                                   
                                                    @elseif($link->link === "About")
                                                    <li id="menu-item-1954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1954"><a href="#section-about">{{$link->link}}</a></li>
                                                   
                                                    @elseif($link->link === "Services")
                                                    <li id="menu-item-1954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1954"><a href="#section-services">{{$link->link}}</a></li>
                                                   
                                                    @elseif($link->link === "Projects")
                                                    <li id="menu-item-1954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1954"><a href="#section-portfolio">{{$link->link}}</a></li>
                                                   
                                                    @elseif($link->link === "Testimonials")
                                                    <li id="menu-item-1954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1954"><a href="#section-testimonial">{{$link->link}}</a></li>
                                                   
                                                    @elseif($link->link === "Careers")
                                                    <li id="menu-item-1954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1954"><a href="#section-career">{{$link->link}}</a></li>
                                                   
                                                    @elseif($link->link === "Get In Touch")
                                                    <li id="menu-item-1954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1954"><a href="#section-contact">{{$link->link}}</a></li>
                                                   
                                                    @endif
                                            
                                                   
                                                @endforeach
                                       
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-inner container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="footer-bottom-items nav pull-center">
                            <li class="nav-item">
                                <div class="nav-item-inner"> {!! \App\FooterCopyWrite::first()->footer_copyright_string !!} <a href="{{\App\FooterCopyWrite::first()->footer_url}}" class="default-color">{{\App\FooterCopyWrite::first()->footer_site_name_string}}</a>. {{\App\FooterCopyWrite::first()->footer_designer_title}} <a href="{{\App\FooterCopyWrite::first()->footer_url}}" class="default-color">{{\App\FooterCopyWrite::first()->footer_developer_name}}</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <a href="#" class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a></footer>