{{--
Title: Heading and Text
Description: Heading and Text Section
Category: blocks
Icon: admin-comments
Keywords: heading text two col
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-24 col-lg-12">
                @if(get_field('heading'))
                    <h2>{{ get_field('heading') }}</h2>
                @endif
            </div>
            <div class="col-24 col-lg-12 col-xl-10">
                {!! get_field('text') !!}
            </div>
        </div>
    </div>
</section>