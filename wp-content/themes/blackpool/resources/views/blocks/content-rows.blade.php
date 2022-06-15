{{--
Title: Content Rows
Description: Content Rows Section
Category: blocks
Icon: admin-comments
Keywords: content rows text image list border
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    @if( have_rows('rows') )
        <div class="container">
            @while( have_rows('rows') ) @php(the_row())
                <div class="content-rows__row">
                    <div class="row">
                        @if(get_sub_field('row_heading'))
                            <div class="col-24">
                                <h3>{{ get_sub_field('row_heading') }}</h3>
                            </div>
                        @endif

                        @if( have_rows('columns') )
                            @while( have_rows('columns') ) @php(the_row())
                                @php($type = get_sub_field('content_type'))
                                <div class="col-24 col-lg-12">
                                    @if($type == 'heading' && get_sub_field('large_heading')) 
                                        <h2 class="small-h1 color-sand">{{ get_sub_field('large_heading') }}</h2>
                                    @elseif($type == 'text')
                                        {!! get_sub_field('text') !!}
                                    @elseif($type == 'image' && ($img = get_sub_field('image')))
                                        <img src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
                                    @endif
                                </div>
                            @endwhile
                        @endif
                    </div>
                </div>
            @endwhile
        </div>
    @endif
</section>