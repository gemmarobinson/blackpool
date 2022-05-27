{{--
Title: Two Col Text
Description: Two Col Text Section
Category: blocks
Icon: admin-comments
Keywords: two col text list
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
                @php($i = 1)
                @while( have_rows('columns') ) @php(the_row())
                    <div class="col-24 col-lg-12 col-xl-10 @if($i % 2 == 0) offset-xl-2 @endif mt-3 mt-lg-0">
                        @if(get_sub_field('heading'))
                            <h3 class="color-sand">{{ get_sub_field('heading') }}</h3>
                        @endif
                        {!! get_sub_field('text') !!}
                    </div>
                    @php($i++)
                @endwhile
            </div>
        </div>
    @endif
</section>