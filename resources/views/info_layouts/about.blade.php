@extends('main_layouts.start')


@section('banners')
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home"
                    aria-hidden="true"></i><a href="{{ route('start') }}">{{ __('validation.sections.'.'Home') }}</a><span>|</span></li>
            <li>{{ __('validation.sections.'.'About Us') }}</li>
        </ul>
    </div>
</div>
@parent
@endsection



@section('slider-brands')

<div class="w3l_banner_nav_right">
    <div class="privacy about">
        <h3>{{ __('validation.sections.'.'About Us') }}</h3>
        <p class="animi">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
            excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
            officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem
            rerum facilis est et expedita distinctio.</p>
        <div class="agile_about_grids">
            <div class="col-md-6 agile_about_grid_right">
                <img src="{{asset('images/31.jpg')}}"
                    alt=" "
                    class="img-responsive" />
            </div>
            <div class="col-md-6 agile_about_grid_left">
                <ol>
                    <li>laborum et dolorum fuga</li>
                    <li>corrupti quos dolores et quas</li>
                    <li>est et expedita distinctio</li>
                    <li>deleniti atque corrupti quos</li>
                    <li>excepturi sint occaecati cupiditate</li>
                    <li>accusamus et iusto odio</li>
                </ol>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //about -->
</div>
<div class="clearfix"></div>
</div>

<div class="team">
    <div class="container">
        <h3>{{ __('validation.sections.'.'Meet Our Amazing Team') }}</h3>
        <div class="agileits_team_grids">
            <div class="btn-group">
                <div class="col-md-3 agileits_team_grid"
                    style="margin-left: 200px; margin-bottom: 50px;">
                    <img src="{{asset('images/32.jpg')}}"
                        alt=" "
                        class="img-responsive" />
                    <h4>Martin Paul</h4>
                    <p>{{ __('validation.positions.'.'Manager') }}</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#"
                                class="facebook"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#"
                                class="twitter"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#"
                                class="google"><i class="fa fa-google-plus"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 agileits_team_grid"
                    style="margin-left: 200px; margin-bottom: 50px;">
                    <img src="{{asset('images/33.jpg')}}"
                        alt=" "
                        class="img-responsive" />
                    <h4>Michael Rick</h4>
                    <p>{{ __('validation.positions.'.'Supervisor') }}</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#"
                                class="facebook"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#"
                                class="twitter"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#"
                                class="google"><i class="fa fa-google-plus"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="btn-group">
                <div class="col-md-3 agileits_team_grid"
                    style="margin-left: 200px; margin-bottom: 50px;">
                    <img src="{{asset('images/34.jpg')}}"
                        alt=" "
                        class="img-responsive" />
                    <h4>Thomas Carl</h4>
                    <p>{{ __('validation.positions.'.'Supervisor') }}</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#"
                                class="facebook"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#"
                                class="twitter"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#"
                                class="google"><i class="fa fa-google-plus"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 agileits_team_grid"
                    style="margin-left: 200px; margin-bottom: 50px;">
                    <img src="{{asset('images/35.jpg')}}"
                        alt=" "
                        class="img-responsive" />
                    <h4>Laura Lee</h4>
                    <p>CEO</p>
                    <ul class="agileits_social_icons agileits_social_icons_team">
                        <li><a href="#"
                                class="facebook"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#"
                                class="twitter"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#"
                                class="google"><i class="fa fa-google-plus"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="testimonials">
    <div class="container">
        <h3>{{ __('validation.sections.'.'Testimonials') }}</h3>
        <div class="w3_testimonials_grids">
            <div class="wmuSlider example1 animated wow slideInUp"
                data-wow-delay=".5s">
                <div class="wmuSliderWrapper">
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right"
                                        aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut
                                    aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Andrew Smith <span>{{ __('validation.positions.'.'customer') }}</span></h4>
                            </div>
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right"
                                        aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut
                                    aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Thomson Richard <span>{{ __('validation.positions.'.'customer') }}</span></h4>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right"
                                        aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut
                                    aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Crisp Kale <span>{{ __('validation.positions.'.'customer') }}</span></h4>
                            </div>
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right"
                                        aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut
                                    aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>John Paul <span>{{ __('validation.positions.'.'customer') }}</span></h4>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right"
                                        aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut
                                    aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Rosy Carl <span>{{ __('validation.positions.'.'customer') }}</span></h4>
                            </div>
                            <div class="col-md-6 w3_testimonials_grid">
                                <p><i class="fa fa-quote-right"
                                        aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus, ut
                                    aut reiciendis
                                    voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                                    repellat.</p>
                                <h4>Rockson Doe <span>{{ __('validation.positions.'.'customer') }}</span></h4>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </article>
                </div>
            </div>
            <script src="{{asset('js/jquery.wmuSlider.js')}}"></script>
            <script>
                $('.example1').wmuSlider();
            </script>
        </div>
    </div>
</div>

@endsection