<header class="header js-header">
    <div class="container">
        <div class="row">
            <div class="col-24">
                <div class="header__inner">
                    <a class="header__logo" href="{{ home_url('/') }}">
                        Blackpool
                    </a>
                    @if(has_nav_menu('primary_navigation'))
                        {!! 
                            wp_nav_menu([
                                'theme_location'    => 'primary_navigation',
                                'depth' 			=> 2,
                                'menu_class'        => 'menu mobile-menu js-menu'
                            ]) 
                        !!}
                    @endif
                    <button class="hamburger hamburger--spin js-menu-toggle" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
