{{--
Title: Stats Block
Description: Stats Block Section
Category: blocks
Icon: admin-comments
Keywords: stats block icon
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    @if( have_rows('stats') )
        <div class="container">
            @if($icon = get_field('icon'))
                <div class="row">
                    <div class="col-24">
                        <img class="stats-block__icon" src="{{ $icon['sizes']['medium'] }}" alt="{{ $icon['alt'] }}" />
                    </div>
                </div>
            @endif
            <div class="row">
                @while( have_rows('stats') ) @php(the_row())
                    <div class="col-24 col-md-12 col-xl-8 stats-block__single">
                        <div>
                            <p class="mb-0">{{ get_sub_field('stat') }}</p>
                        </div>
                    </div>
                @endwhile
            </div>
        </div>
    @endif
</section>
