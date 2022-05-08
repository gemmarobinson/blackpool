{{--
Title: Two Tier Hero
Description: Two Tier Hero Section
Category: blocks
Icon: admin-comments
Keywords: hero header
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: false
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    @if($tier_one = get_field('tier_one'))
        <div class="two-tier-hero__top">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h1 class="small-h1">{{ $tier_one['heading'] }}</h1>
                        <p class="bold-text">{{ $tier_one['large_text'] }}</p>
                        {!! $tier_one['text'] !!}
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($tier_two = get_field('tier_two'))
        <div class="two-tier-hero__bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <h2 class="small-h1">{{ $tier_two['heading'] }}</h2>
                        <p class="bold-text">{{ $tier_two['large_text'] }}</p>
                        {!! $tier_two['text'] !!}
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($img_left = get_field('image_left'))
        <div class="two-tier-hero__image-left">
            <img src="{{ $img_left['url'] }}" alt="{{ $img_left['alt'] }}" />
        </div>
    @endif
    
    @if($img_right = get_field('image_right'))
        <div class="two-tier-hero__image-right">
            <img src="{{ $img_right['url'] }}" alt="{{ $img_right['alt'] }}" />
        </div>
    @endif

    <div class="two-tier-hero__shape-top-right"></div>
    <div class="two-tier-hero__shape-bottom-right"></div>
    <div class="two-tier-hero__shape-bottom-left"></div>
</section>
