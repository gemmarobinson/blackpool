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
@php($color = get_field('colour'))
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}" @if($img = get_field('image')) style="background-image: url('{{ $img['url'] }}');" @endif>
    <div class="container">
        <div class="row @if(get_field('image_position')) justify-content-end @endif">
            <div class="col-24 col-lg-14 col-xl-13 col-xxl-12">
                <h1 class="small-h1">{{ get_field('heading') }}</h1>
                @if($link = get_field('website'))
                    <a class="solutions-hero__link" href="{{ $link['url'] }}" target="{{ $link['target'] }}">{{ $link['title'] }}</a>
                @endif
                <p class="bold-text mb-0">{{ get_field('subheading') }}</p>
            </div>
        </div>
    </div>
</section>
