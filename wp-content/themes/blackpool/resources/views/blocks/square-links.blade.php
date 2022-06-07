{{--
Title: Square Links
Description: Square Links Section
Category: blocks
Icon: admin-comments
Keywords: square links card half width block
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="row g-0">
        @if( have_rows('links') )
            @while( have_rows('links') ) @php(the_row())
                <div class="col-24 col-md-12">
                    <div class="square-links__single" @if($img = get_sub_field('image')) style="background-image: url('{{ $img['sizes']['large'] }}')" @endif>
                        <div class="square-links__single-overlay">
                            <h2>{{ get_sub_field('heading') }}</h2>
                            <p>{{ get_sub_field('text') }}</p>
                            @if($btn = get_sub_field('button'))
                                <a href="{{ $btn['url'] }}" class="bttn" target="{{ $btn['target'] }}">{{ $btn['title'] }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endwhile
        @endif
    </div>
</section>
