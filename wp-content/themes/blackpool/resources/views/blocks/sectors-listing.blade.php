{{--
Title: Sectors Listing
Description: Sectors Listing Section
Category: blocks
Icon: admin-comments
Keywords: heading text two col
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container">
        <div class="sectors-listing__intro">
            <div class="row justify-content-between">
                <div class="col-24 col-lg-16 col-xl-12">
                    @if(get_field('heading'))
                        <h2 class="color-sand">{{ get_field('heading') }}</h2>
                    @endif
                </div>
                <div class="col-24 col-lg-16 col-xl-12 ">
                    {!! get_field('text') !!}
                </div>
            </div>
        </div>

        @if( have_rows('cards') )
            <div class="row">
                @while( have_rows('cards') ) @php(the_row())
                    @if($link = get_sub_field('link'))
                        <div class="col-24 col-md-12 col-xl-8">
                            <a class="sectors-listing__card" href="{{ $link['url'] }}">
                                @if($img = get_sub_field('image'))
                                    <img class="sectors-listing__card-image" src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
                                @endif
                                <div class="sectors-listing__card-text">
                                    <h3 class="mb-0">{{ $link['title'] }}</h3>
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </a>
                        </div>
                    @endif
                @endwhile
            </div>
        @endif
    </div>
</section>