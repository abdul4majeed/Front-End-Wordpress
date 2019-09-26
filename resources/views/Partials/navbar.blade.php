 @foreach (\App\Link::with('sub_links')->get() as $link)
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2097 current_page_item menu-item-has-children nav-item menu-item-3107 dropdown">
                                                        @if($link->link === "Home")
                                                        @php
                                                            $a = Request::url();
                                                            $is_found = false;
                                                            if (strpos($a, 'sub_links') !== false) {
                                                                $is_found = true;
                                                            }
                                                        @endphp
                                                        @if($is_found)
                                                        <a href="{{route('dash')}}" class="nav-link dropdown-toggle">{{$link->link}}</a>
                                                        @else
                                                        <a href="{{URL::route('dash')}}#section-top" class="nav-link dropdown-toggle">{{$link->link}}</a>
                                                        @endif
                                                        @elseif($link->link === "About")
                                                        <a href="{{URL::route('dash')}}#section-about" class="nav-link dropdown-toggle">{{$link->link}}</a>
                                                        @elseif($link->link === "Services")
                                                        <a href="{{URL::route('dash')}}#section-services" class="nav-link dropdown-toggle">Services</a>
                                                            @if($link->sub_links)
                                                                <ul role="menu" class=" dropdown-menu">
                                                                    @foreach($link->sub_links as $sub_link)
                                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-3110">
                                                                            <a href="{{route('sub_pages',$sub_link->id)}}" class="nav-link">{{$sub_link->sub_link}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        @elseif($link->link === "Projects")
                                                        <a href="{{URL::route('dash')}}#section-portfolio" class="nav-link dropdown-toggle">{{$link->link}}</a>
                                                        @elseif($link->link === "Team")
                                                        <a href="{{URL::route('dash')}}#section-team" class="nav-link dropdown-toggle">{{$link->link}}</a>
                                                        @elseif($link->link === "Testimonials")
                                                        <a href="{{URL::route('dash')}}#section-testimonial" class="nav-link dropdown-toggle">{{$link->link}}</a>
                                                        @elseif($link->link === "Careers")
                                                        <a href="{{URL::route('dash')}}#section-career" class="nav-link dropdown-toggle">{{$link->link}}</a>
                                                        @elseif($link->link === "Get In Touch")
                                                        <a href="{{URL::route('dash')}}#section-contact" class="nav-link dropdown-toggle">{{$link->link}}</a>
                                                        @endif
                                                
                                                       
                                                    </li>
                                                    @endforeach