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
    @if(get_field('background')) 
        <div class="two-tier-hero__background" style="background-image: url('{{ get_field('background')['url'] }}');"></div>
    @endif

    @if($tier_one = get_field('tier_one'))
        <div class="two-tier-hero__top">
            <div class="container">
                <div class="row justify-content-center justify-content-xl-start">
                    <div class="col-24 col-md-18 col-lg-14 col-xxl-11 offset-xl-1 offset-xxl-2">
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
                <div class="row justify-content-center justify-content-xxl-start">
                    <div class="col-24 col-md-18 col-lg-14 col-xxl-10 offset-xxl-8">
                        <h2 class="small-h1">{{ $tier_two['heading'] }}</h2>
                        <p class="bold-text">{{ $tier_two['large_text'] }}</p>
                        {!! $tier_two['text'] !!}
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>
