{{--
Title: Text and Image Hero
Description: Text and Image Hero Section
Category: blocks
Icon: admin-comments
Keywords: hero header image text
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: false
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container">
        <div class="row justify-content-between align-items-center align-items-xl-start">
            <div class="col-24 col-lg-12 col-xxl-10 mt-xl-2 order-lg-1">
                <h1>{{ get_field('heading') }}</h1>
                @if(get_field('large_text'))
                    <p class="bold-text">{{ get_field('large_text') }}</p>
                @endif
                {!! get_field('text') !!}
            </div>
            <div class="col-24 col-lg-12 mt-4 mt-lg-0">
                @if($img = get_field('image'))
                    <img src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
                @endif
            </div>
        </div>
    </div>
</section>
