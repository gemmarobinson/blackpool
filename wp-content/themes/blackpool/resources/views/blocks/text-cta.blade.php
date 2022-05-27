{{--
Title: Text CTA
Description: Text CTA Section
Category: blocks
Icon: admin-comments
Keywords: cta text triangles
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-24 col-sm-22 col-md-18 col-xl-16">
                <div class="text-cta__content">
                    <h2 class="color-sand">{{ get_field('heading') }}</h2>
                    {!! get_field('text') !!}
                </div>
            </div>
        </div>
    </div>
    @if($img = get_field('image'))
        <div class="text-cta__image">
            <img src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
        </div>
    @endif
</section>
