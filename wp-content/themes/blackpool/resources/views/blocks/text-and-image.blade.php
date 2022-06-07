{{--
Title: Text and Image 
Description: Text and Image  Section
Category: blocks
Icon: admin-comments
Keywords: image text
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
@php
    $vertical = get_field('decoration_position') ? 'top' : 'bottom';
    $horizontal = get_field('image_position') ? 'left' : 'right';
@endphp
<section 
    data-{{ $block['id'] }} 
    class="
        {{ $block['classes'] }} 
        @if(get_field('triangle_decoration')) text-and-image--triangle-{{ $vertical }}-{{ $horizontal }} @endif
        @if(get_field('background_color')) text-and-image--white @endif
    "
    >
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-24 col-lg-12 col-xxl-11 @if(get_field('image_position')) order-lg-1 @endif">
                <h2 class="color-sand">{!! get_field('heading') !!}</h2>
                {!! get_field('text') !!}
            </div>
            <div class="col-24 col-lg-12">
                @if($img = get_field('image'))
                    <img class="text-and-image__img" src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
                @endif
            </div>
        </div>
    </div>
</section>
