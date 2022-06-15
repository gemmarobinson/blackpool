@php($cta = get_field('footer_cta', 'options'))
@if((get_field('show_footer_cta') && $cta) || $cta && is_single())
    <section class="footer-cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-24 col-lg-12">
                    @if($img = $cta['image'])
                        <img src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
                    @endif             
                </div>
                <div class="col-24 col-lg-12">
                    <h2 class="footer-cta__heading">{{ $cta['heading'] }}</h2>
                    @if($btn = $cta['primary_button'])
                        <a class="bttn mx-2 mx-lg-2" href="{{ $btn['url'] }}" target="{{ $btn['target'] }}">{{ $btn['title'] }}</a>
                    @endif
                    @if($btn = $cta['secondary_button'])
                        <a class="bttn ms-2 me-2 me-lg-2" href="{{ $btn['url'] }}" target="{{ $btn['target'] }}">{{ $btn['title'] }}</a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif

<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-24 col-md-16">
                @if(has_nav_menu('footer_navigation'))
                    {!! 
                        wp_nav_menu([
                            'theme_location'    => 'footer_navigation',
                            'depth' 			=> 1,
                            'menu_class'        => 'footer-menu'
                        ]) 
                    !!}
                @endif
                <div class="d-flex align-items-center">
                    @if($number = get_field('contact_number', 'options'))
                        <a class="footer__link" href="{{ $number['url'] }}">{{ $number['title'] }}</a>
                    @endif
                    @if( have_rows('socials', 'options') )
                        <ul class="footer__socials">
                            @while( have_rows('socials', 'options') ) @php(the_row())
                                @if($link = get_sub_field('link'))
                                    <li>
                                        <a class="footer__social-link" href="{{ $link['url'] }}" target="{{ $link['target'] }}">
                                            <span class="sr-only">{{ $link['title'] }}</span>
                                            <i class="fab fa-{{ get_sub_field('font_awesome_icon_name', 'options') }}"></i>
                                        </a>
                                    </li>
                                @endif
                            @endwhile
                        </ul>
                    @endif
                </div>
            </div>
            <div class="col-24 col-md-8">
                <a class="footer__logo" href="{{ home_url('/') }}">
                    <img src="@asset('images/logo.png')" alt="" />
                </a>
            </div>
        </div>
    </div>
</div>