{{--
Title: Arrow Text and Image
Description: Arrow Text and Image
Category: blocks
Icon: admin-comments
Keywords: arrow text image
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }} arrow-text-and-image--{{ get_field('arrow_colour') }}">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-lg-center">
            <div class="col-20 col-lg-12">
                <div class="arrow-text-and-image__text">
                    <p>{{ get_field('text') }}</p>
                </div>
            </div>
            <div class="col-24 col-lg-12">
                @if($img = get_field('image'))
                    <img src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
                @endif
            </div>
        </div>
    </div>
</section>