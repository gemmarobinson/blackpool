{{--
Title: Three Col Text
Description: Three Col Text Section
Category: blocks
Icon: admin-comments
Keywords: three col text
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }} @if(get_field('background_colour')) three-col-text--white @endif">
    <div class="container">
        @if(get_field('heading'))
            <div class="row">
                <div class="col-20 col-sm-18 col-md-14 col-lg-10 col-xl-9 col-xxl-7">
                    <h3 class="bold-text color-sand">{{ get_field('heading') }}</h3>
                </div>
            </div>
        @endif

        @if( have_rows('columns') )
            <div class="row">
                @while( have_rows('columns') ) @php(the_row())
                    <div class="col-24 col-md-12 col-xl-8">
                        {!! get_sub_field('text') !!}
                    </div>
                @endwhile
            </div>
        @endif
    </div>
</section>