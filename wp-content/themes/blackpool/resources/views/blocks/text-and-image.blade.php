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
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-24 col-lg-12 col-xxl-10">
                <h2 class="color-sand">{{ get_field('heading') }}</h2>
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
