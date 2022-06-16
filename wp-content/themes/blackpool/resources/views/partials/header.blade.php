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
    @if($img = get_field('menu_image', 'options'))
        <div class="full-screen-menu__image full-screen-menu__desktop-only">
            <img src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" />
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-24 col-md-19 col-xl-9 col-xxl-8 offset-md-5 offset-xl-5 offset-xxl-6">
                @if(get_field('menu_title', 'options'))
                    <p class="full-screen-menu__heading">{{ get_field('menu_title', 'options') }}</p>
                @endif
                @if(get_field('menu_text', 'options'))
                    <p class="full-screen-menu__desktop-only">{{ get_field('menu_text', 'options') }}</p>
                @endif
                <form action="/" method="get" class="full-screen-menu__search full-screen-menu__search--desktop">
                    <label for="search">Search site</label>
                    <input type="text" placeholder="Search site" name="s" id="search" value="{{ the_search_query() }}" />
                    <button type="submit" aria-label="Submit search"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="col-24 col-md-19 col-xl-9 col-xxl-8 offset-md-5 offset-xl-1 offset-xxl-2">
                @if(has_nav_menu('primary_navigation'))
                    {!! 
                        wp_nav_menu([
                            'theme_location'    => 'primary_navigation',
                            'depth' 			=> 2,
                            'menu_class'        => 'full-screen-menu__menu'
                        ]) 
                    !!}
                @endif
                
                <form action="/" method="get" class="full-screen-menu__search full-screen-menu__search--mobile">
                    <label for="search">Search site</label>
                    <input type="text" placeholder="Search site" name="s" id="search" value="{{ the_search_query() }}" />
                    <button type="submit" aria-label="Submit search"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
