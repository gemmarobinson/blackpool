{{--
Title: Solutions Hero
Description: Solutions Hero Section
Category: blocks
Icon: admin-comments
Keywords: solutions hero image triangle text
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: false
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-24 col-lg-14 col-xl-13 col-xxl-12">
                <h1>{{ get_field('heading') }}</h1>
                <p class="bold-text mb-0">{{ get_field('subheading') }}</p>
            </div>
        </div>
    </div>
    @if($img = get_field('image'))
        <div class="solutions-hero__img">
            <img src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" />
        </div>
    @endif
</section>
