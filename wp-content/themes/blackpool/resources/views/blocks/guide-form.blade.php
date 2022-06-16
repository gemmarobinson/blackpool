{{--
Title: Guide Form
Description: Guide Form Section
Category: blocks
Icon: admin-comments
Keywords: guide form cta
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: false
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-24 col-lg-12 mb-4 mb-lg-0 order-lg-1">
                @if($img = get_field('image'))
                    <img class="full-width" src="{{ $img['sizes']['large'] }}" alt="{{ $img['alt'] }}" />
                @endif    
            </div>
            <div class="col-24 col-lg-12">
                <h2 class="small-h1 mb-3 mb-sm-4 mb-lg-5">{{ get_field('heading') }}</h2>
                <p class="guide-form__text mb-3 mb-sm-4 mb-lg-5">{{ get_field('text') }}</p>
                @if($id = get_field('form_id'))
                    {!! do_shortcode('[gravityform id="'.$id.'" title="false" description="false" ajax="true"]') !!}
                @endif
            </div>
        </div>
    </div>
</section>
