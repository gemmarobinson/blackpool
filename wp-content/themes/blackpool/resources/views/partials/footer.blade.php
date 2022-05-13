@php($cta = get_field('footer_cta', 'options'))
@if(get_field('show_footer_cta') && $cta)
    <section class="footer-cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    @if($img = $cta['image'])
                        <img src="{{ $img['sizes']['large'] }}" alt="{{ $cta['alt'] }}" />
                    @endif                    
                </div>
                <div class="col-12">
                    <h2 class="footer-cta__heading">{{ $cta['heading'] }}</h2>
                    @if($btn = $cta['primary_button'])
                        <a class="bttn" href="{{ $btn['url'] }}" target="{{ $btn['target'] }}">{{ $btn['title'] }}</a>
                    @endif
                    @if($btn = $cta['secondary_button'])
                        <a class="bttn ms-2" href="{{ $btn['url'] }}" target="{{ $btn['target'] }}">{{ $btn['title'] }}</a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif

<div class="footer">

</div>