{{--
Title: Contact Block
Description: Contact Block Section
Category: blocks
Icon: admin-comments
Keywords: contact block address form
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: false
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container contact-block__inner">
        <div class="row align-items-center">
            <div class="col-24 col-lg-12">
                @if($id = get_field('form_id'))
                    {!! do_shortcode('[gravityform id="'.$id.'" title="false" description="false" ajax="true"]') !!}
                @endif
            </div>
            <div class="col-24 col-lg-10 offset-lg-2 mt-4 mt-sm-5 mt-lg-0">
                <h2>{{ get_field('address_heading') }}</h2>
                <p>{!! get_field('address') !!}</p>
                <p>{!! get_field('contact') !!}</p>
            </div>
        </div>
    </div>
</section>
