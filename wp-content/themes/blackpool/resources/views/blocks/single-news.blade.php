{{--
Title: Single News
Description: Single News Section
Category: blocks
Icon: admin-comments
Keywords: single news post latest
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: false
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container">
        @php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
            );
            $the_query = new WP_Query( $args );
            $posts = get_field('posts') ? get_field('posts') : wp_list_pluck( $the_query->posts, 'ID' );
            $section_heading = get_field('heading');
        @endphp

        @if($posts)
            @foreach($posts as $id)
                @php
                    $image_id = get_post_thumbnail_id($id);
                    $feat_image_src = wp_get_attachment_image_url($image_id, 'large');
                    $feat_image_alt = get_post_meta($image_id , '_wp_attachment_image_alt', true);
                @endphp
                <div class="row align-items-center">
                    <div class="col-24 col-lg-12 order-lg-1 mb-3 mb-lg-0">
                        <a href="{{ get_the_permalink($id) }}">
                            @if($feat_image_src)
                                <img src="{{ $feat_image_src }}" alt="{{ $feat_image_alt }}" />
                            @endif
                        </a>
                    </div>
                    <div class="col-24 col-lg-12">
                        <h2 class="subheading">{{ $section_heading }}</h2>
                        <h3 class="single-news__post-heading">{!! get_the_title($id) !!}</h3>
                        <p class="single-news__post-date">{{ get_the_date('jS F Y', $id) }}</p>
                        <a href="{{ get_the_permalink($id) }}" class="bttn bttn--white">Read now</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>