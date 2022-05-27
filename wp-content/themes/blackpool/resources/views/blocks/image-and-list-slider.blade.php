{{--
Title: Image and List Slider
Description: Image and List Slider Section
Category: blocks
Icon: admin-comments
Keywords: image list slider numbers map zones
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }} js-image-and-list-slider">
    @if( have_rows('slides') )
        <div class="row g-0">
            <div class="col-24 col-xl-12">
                <div class="image-and-list-slider__images">
                    <div class="js-image-slider">
                        @while( have_rows('slides') ) @php(the_row())
                        <div>
                            @if($img = get_sub_field('image'))
                                <img src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
                            @endif
                        </div>
                        @endwhile
                    </div>
                </div>
            </div>
            <div class="col-24 col-xl-12">
                <div class="image-and-list-slider__content">
                    <div class="row justify-content-center">
                        <div class="col-24 col-xl-20">
                            <div class="image-and-list-slider__counter js-image-and-list-slider-counter">
                                1 / {{ count( get_field('slides') ) }}
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h2 class="image-and-list-slider__heading mb-0">{{ get_field('heading') }}</h2>
                                <div class="image-and-list-slider__arrows js-image-and-list-slider-arrows"></div>
                            </div>
                            <div class="js-text-slider">
                                @while( have_rows('slides') ) @php(the_row())
                                    <div>
                                        @if( have_rows('list_items') )
                                            <ul>
                                                @while( have_rows('list_items') ) @php(the_row())
                                                    <li class="image-and-list-slider__list-item">
                                                        <span class="image-and-list-slider__number">{{ get_sub_field('number') }}</span>
                                                        <span>
                                                            <strong>{{ get_sub_field('bold_text') }}</strong>
                                                            {{ get_sub_field('regular_text') }}
                                                        </span>
                                                    </li>
                                                @endwhile
                                            </ul>
                                        @endif
                                    </div>
                                @endwhile
                            </div>
                            <div class="image-and-list-slider__dots js-image-and-list-slider-dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>
