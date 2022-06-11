{{--
Title: Two Col Text with Heading
Description: Two Col Text Heading Section
Category: blocks
Icon: admin-comments
Keywords: two col text list heading
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    @if( have_rows('columns') )
        <div class="container">
            <div class="row">
                @if(get_field('heading'))
                    <div class="col-24 col-lg-12 mb-3 mb-lg-4">
                        <h2 class="@if(get_field('heading_size')) small-h1 @endif mb-0 color-sand">{{ get_field('heading') }}</h2>
                    </div>
                    @php($heading = true)
                    @php($i = 2)
                @else 
                    @php($heading = false)
                    @php($i = 1)
                @endif
                @while( have_rows('columns') ) @php(the_row())
                    <div class="col-24 col-lg-12 col-xl-10 @if($heading && $i == 2) @elseif($i % 2 == 0) offset-xl-2 @endif mb-3 mb-lg-4">
                        @if(get_sub_field('heading'))
                            <h3 class="mb-2">{{ get_sub_field('heading') }}</h3>
                        @endif
                        {!! get_sub_field('text') !!}
                    </div>
                    @php($i++)
                @endwhile
            </div>
        </div>
    @endif
</section>