{{--
Title: Solutions Grid
Description: Solutions Grid Section
Category: blocks
Icon: admin-comments
Keywords: solutions grid text image colour blocks
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    @if( have_rows('rows') )
        @php($i = 1)
        @while( have_rows('rows') ) @php(the_row())
            <div class="solutions-grid__row  solutions-grid__row--{{ get_sub_field('color') }}">
                <div class="container">
                    <div class="row justify-content-between g-0">
                        <div class="col-24 col-lg-12 @if($i % 2 == 0) order-lg-1 @endif">
                            @if($img = get_sub_field('image'))
                                <div class="solutions-grid__image @if($i % 2 !== 0) solutions-grid__image--left @else solutions-grid__image--right @endif">
                                    <img src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
                                </div>
                            @endif
                        </div>
                        <div class="col-24 col-lg-10 d-flex flex-column justify-content-center">
                            <div class="solutions-grid__content">
                                <h2>{{ get_sub_field('heading') }}</h2>
                                {!! get_sub_field('text') !!}
                                @if($btn = get_sub_field('button'))
                                    <a href="{{ $btn['url'] }}" class="bttn" target="{{ $btn['target'] }}">{{ $btn['title'] }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php($i++)
        @endwhile

    @endif
</section>
