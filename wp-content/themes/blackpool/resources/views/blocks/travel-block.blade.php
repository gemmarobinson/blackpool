{{--
Title: Travel Block
Description: Travel Block Section
Category: blocks
Icon: admin-comments
Keywords: travel block transport distance tabs accordion
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }} travel">
    <div class="container">
        <div class="row justify-content-center align-items-lg-center">
            <div class="col-20 col-sm-18 col-md-16 col-lg-8 mb-4 mb-lg-0">
                @if($img = get_field('image'))
                    <img src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" />
                @endif
            </div>
            <div class="col-24 col-lg-16">
                @if( have_rows('tabs') )
                    <div class="travel__tabs">
                        @php($i = 1)
                        @while( have_rows('tabs') ) @php(the_row())
                            <div 
                                class="travel__single-tab js-travel-tab @if($i == 1) travel__single-tab--active @endif"
                                data-tab="{{ slugify(get_sub_field('tab_title')) }}"
                            >
                                <h2>{{ get_sub_field('tab_title') }}</h2>
                            </div>
                            @php($i++)
                        @endwhile
                    </div>
                @endif

                @if( have_rows('tabs') )
                    @while( have_rows('tabs') ) @php(the_row())
                        <div class="js-travel-content" data-tab="{{ slugify(get_sub_field('tab_title')) }}">
                            @if( have_rows('accordion') )
                                @php($i = 1)
                                @while( have_rows('accordion') ) @php(the_row())
                                    <div class="travel__accordion-row">
                                        <div class="travel__accordion-row-heading js-accordion-trigger @if($i == 1) active @endif">
                                            <h3>{{ get_sub_field('title') }}</h3>
                                            <i class="fas fa-chevron-left"></i>
                                        </div>
                                        <div class="travel__accordion-row-content js-accordion-content @if($i == 1) travel__accordion-row-content--active @endif">
                                            @if( have_rows('row') )
                                                @while( have_rows('row') ) @php(the_row())
                                                    <div class="travel__table-row">
                                                        @if( have_rows('column') )
                                                            @while( have_rows('column') ) @php(the_row())
                                                                <div class="travel__table-col">
                                                                    @if(get_sub_field('has_icon') && get_sub_field('icon')) 
                                                                        <i class="fas fa-{{ get_sub_field('icon') }}"></i>
                                                                    @endif
                                                                    {{ get_sub_field('text') }}
                                                                </div>
                                                            @endwhile
                                                        @endif
                                                    </div>
                                                @endwhile
                                            @endif
                                        </div>
                                    </div>
                                    @php($i++)
                                @endwhile
                            @endif
                        </div>
                    @endwhile
                @endif
            </div>
        </div>
    </div>
</section>