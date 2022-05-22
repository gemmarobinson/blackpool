{{--
Title: Text and Map
Description: Text and Map Section
Category: blocks
Icon: admin-comments
Keywords: map image text
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container three-quarter-container three-quarter-container--right">
        <div class="row align-items-center">
            <div class="col-24 col-xl-12 col-xxl-9">
                <h2 class="h3 bold-text">{{ get_field('heading') }}</h2>
                @if(get_field('large_text'))
                    <p class="bold-text">{{ get_field('large_text') }}</p>
                @endif
                {!! get_field('text') !!}
            </div>
            <div class="col-24 col-xl-12 col-xxl-15">
                @if($img = get_field('image'))
                    <div class="text-and-map__img">
                        <img src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
