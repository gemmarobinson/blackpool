@php
    $id = get_the_id();
    $category = get_the_category();
    $image_id = get_post_thumbnail_id($post->$id);
    $feat_image_src = wp_get_attachment_image_url($image_id, 'large');
    $feat_image_alt = get_post_meta($image_id , '_wp_attachment_image_alt', true);
@endphp

@include('partials.single-hero')

@include('partials.single-content')
