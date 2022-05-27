{{--
Title: Image Slider
Description: Image Slider Section
Category: blocks
Icon: admin-comments
Keywords: full width image
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }} js-image-slider-container">
    @if( have_rows('images') )
        <div class="@if( count( get_field('images') ) > 1) js-image-slider @endif">
            @while( have_rows('images') ) @php(the_row())
                @if($img = get_sub_field('image'))
                    <div>
                        <img class="image-slider__image" src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" />
                    </div>
                @endif
            @endwhile
        </div>
    @endif
    <div class="image-slider__dots js-image-slider-dots"></div>
</section>
