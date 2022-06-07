{{--
Title: Image Hero
Description: Image Hero Section
Category: blocks
Icon: admin-comments
Keywords: image hero image triangle text
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: false
--}}
@php($color = get_field('colour'))
<section 
    data-{{ $block['id'] }} 
    class="{{ $block['classes'] }} @if($color) image-hero--{{ $color }} @endif"
    @if( $img = get_field('image') )
        style="background-image: url('{{ $img['url'] }}');"
    @endif
>
    <div class="container">
        <div class="row">
            <div class="col-24 col-sm-20 col-md-18 col-lg-15 col-xl-15 col-xxl-14">
                <h1 class="large-h1 mb-0">{{ get_field('heading') }}</h1>
            </div>
        </div>
    </div>
</section>
