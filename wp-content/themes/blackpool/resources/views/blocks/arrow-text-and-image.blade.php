{{--
Title: Arrow Text and Image
Description: Arrow Text and Image
Category: blocks
Icon: admin-comments
Keywords: arrow text image
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }} arrow-text-and-image--{{ get_field('arrow_colour') }}">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-lg-center">
            <div class="col-20 col-lg-12">
                <div class="arrow-text-and-image__text">
                    <div>
                        <p>{{ get_field('text') }}</p>
                        @if(get_field('stats') && have_rows('stats'))
                            <div class="row mt-lg-3">
                                @while( have_rows('stats') ) @php(the_row())
                                    <div class="col-24 col-lg-12 mt-3 mt-lg-0">
                                        <p class="arrow-text-and-image__stat-heading">{{ get_sub_field('heading') }}</p>
                                        <p class="arrow-text-and-image__stat-text">{{ get_sub_field('text') }}</p>
                                    </div>
                                @endwhile
                            </div>

                        @endif
                    </div>
                </div>
            </div>
            <div class="col-24 col-lg-12">
                @if($img = get_field('image'))
                    <img src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
                @endif
            </div>
        </div>
    </div>
</section>