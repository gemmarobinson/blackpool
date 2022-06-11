{{--
Title: Sectors Hero
Description: Sectors Hero Section
Category: blocks
Icon: admin-comments
Keywords: sectors image hero image triangle text
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: false
--}}
<section 
    data-{{ $block['id'] }} 
    class="{{ $block['classes'] }} "
    @if( $img = get_field('background_image') )
        style="background-image: url('{{ $img['url'] }}');"
    @endif
>
    <div class="container">
        <div class="row">
            <div class="col-24 col-sm-16 col-md-12 col-lg-10 col-xl-9 col-xxl-8">
                <h1 class="mb-0">{{ get_field('heading') }}</h1>
            </div>
        </div>
    </div>
</section>
