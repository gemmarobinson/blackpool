<header class="header js-header">
    <a class="header__logo" href="{{ home_url('/') }}">
        <img src="@asset('images/logo-black.png')" alt="" />
    </a>
    <button class="hamburger hamburger--spin js-menu-toggle" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
</header>

<div class="full-screen-menu js-menu">
    <div class="full-screen-menu__image">
        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-6">
                <p class="full-screen-menu__heading">Welcome to Blackpool</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus urna convallis tortor tempus.</p>
                Search Bar
            </div>
            <div class="col-8 offset-2">
                    @if(has_nav_menu('primary_navigation'))
                        {!! 
                            wp_nav_menu([
                                'theme_location'    => 'primary_navigation',
                                'depth' 			=> 2,
                                'menu_class'        => 'full-screen-menu__menu'
                            ]) 
                        !!}
                    @endif
            </div>
        </div>
    </div>
</div>
