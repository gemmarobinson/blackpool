{{--
Title: Contact Hero
Description: Contact Hero Section
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
            <div class="col-16">
                <h1 class="mb-0">{{ get_field('heading') }}</h1>
                @if(get_field('text'))
                    <p class="contact-hero__text">{{ get_field('text') }}</p>
                @endif
            </div>
        </div>
    </div>
</section>
