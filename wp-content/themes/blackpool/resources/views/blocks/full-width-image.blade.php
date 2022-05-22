{{--
Title: Full Width Image
Description: Full Width Image Section
Category: blocks
Icon: admin-comments
Keywords: full width image
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    @if($img = get_field('image'))
        <img class="full-width-image__img" src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" />
    @endif
</section>
