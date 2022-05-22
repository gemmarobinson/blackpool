{{--
Title: Three Col Stats
Description: Three Col Stats Section
Category: blocks
Icon: admin-comments
Keywords: three col stats blocks icons
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    @if( have_rows('stats') )
        <div class="row g-0">
            @while( have_rows('stats') ) @php(the_row())
                <div class="col-24 col-lg-8 three-col-stats__block">
                    <p class="three-col-stats__stat">{{ get_sub_field('statistic') }}</p>
                    @if($icon = get_sub_field('icon'))
                        <img class="three-col-stats__icon" src="{{ $icon['sizes']['medium'] }}" alt="{{ $icon['alt'] }}" />
                    @endif
                    <p class="mb-0">{{ get_sub_field('text') }}</p>
                </div>
            @endwhile
        </div>
    @endif
</section>