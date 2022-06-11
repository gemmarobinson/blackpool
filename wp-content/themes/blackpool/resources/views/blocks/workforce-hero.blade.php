{{--
Title: Workforce Hero
Description: Workforce Hero Section
Category: blocks
Icon: admin-comments
Keywords: workforce hero image text
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: false
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container">
        <div class="row">
            <div class="col-24 col-lg-14 col-xl-12 col-xxl-10">
                <h1>{{ get_field('heading') }}</h1>
                <p class="bold-text">{!! get_field('text') !!}</p>
            </div>
        </div>
    </div>
    @if($img = get_field('image'))
        <div class="workforce-hero__img">
            <img src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" />
        </div>
    @endif
</section>
