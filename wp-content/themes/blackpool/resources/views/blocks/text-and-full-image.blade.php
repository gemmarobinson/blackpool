{{--
Title: Text and Full Image 
Description: Text and Full Image Section
Category: blocks
Icon: admin-comments
Keywords: image text
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-24 col-xl-12 col-xxl-11">
                <div class="text-and-full-image__content">
                    <h2 class="color-sand">{!! get_field('heading') !!}</h2>
                    {!! get_field('text') !!}
                </div>
            </div>
            <div class="col-24 col-xl-12 col-xxl-13">
                @if($img = get_field('image'))
                    <img class="text-and-full-image__img" src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
                @endif
            </div>
        </div>
    </div>
</section>
