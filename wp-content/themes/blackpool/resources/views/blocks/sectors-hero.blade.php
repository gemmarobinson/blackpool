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
        <div class="row @if(!get_field('text_position')) justify-content-end @endif">
            <div class="col-24 col-sm-16 col-md-12 col-xl-10">
                <h1 class="mb-0 @if(get_field('heading_size')) small-h1 @endif">{{ get_field('heading') }}</h1>
            </div>
        </div>
    </div>
</section>
