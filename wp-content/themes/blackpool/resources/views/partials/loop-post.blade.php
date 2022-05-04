@php
    $category = get_the_category();
    $image_id = get_post_thumbnail_id($post->$id);
    $feat_image_src = wp_get_attachment_image_url($image_id, 'large');
    $feat_image_alt = get_post_meta($image_id , '_wp_attachment_image_alt', true);
@endphp

<div class="col-24 col-sm-12 two-col-blog__item" data-aos="fade-up">
    <a href="{{the_permalink()}}" class="two-col-blog__link">
        <div class="two-col-blog__image-container image_container js-image">
            <img class="two-col-blog__image @if($post_count > 2)lazy @endif" @if($post_count < 3)src="{{$feat_image_src}}"@endif data-src="{{$feat_image_src}}" alt="{{$feat_image_alt}}">
        </div>
        <p>{{get_the_date('jS F Y')}}</p>
        <h5>{{the_title()}}</h5>
    </a>
</div>
