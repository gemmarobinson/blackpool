{{--
Title: Latest News
Description: Latest News Section
Category: blocks
Icon: admin-comments
Keywords: blog news posts featured latest
Mode: edit
Align: full
PostTypes: page
SupportsAlign: full
SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="container">
        <div class="row">
            <div class="col-24">
                <h2 class="latest-news__heading medium-weight-h2">{{ get_field('heading') }}</h2>
            </div>
            @php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6
                );
                $the_query = new WP_Query( $args );
                $posts = get_field('posts') ? get_field('posts') : wp_list_pluck( $the_query->posts, 'ID' );
                $i = 1;
            @endphp

            @if($posts)
                @foreach($posts as $id)
                    @php
                        $image_id = get_post_thumbnail_id($id);
                        $feat_image_src = wp_get_attachment_image_url($image_id, 'large');
                        $feat_image_alt = get_post_meta($image_id , '_wp_attachment_image_alt', true);
                    @endphp
                    <div class="col-24 col-md-12 col-xl-8">
                        <a class="news-card" href="{{ get_the_permalink($id) }}">
                            <div class="news-card__image">
                                @if($feat_image_src)
                                    <img src="{{ $feat_image_src }}" alt="{{ $feat_image_alt }}" /> 
                                @endif
                            </div>
                            <h3 class="news-card__heading paragraph">{!! get_the_title($id) !!}</h3>
                            <p class="color-grey-blue mb-0">{{ get_the_date('jS F Y', $id) }}</p>
                        </a>
                    </div>
                    @php($i++)
                @endforeach
            @endif

            @if($btn = get_field('button'))
                <div class="col-24 d-flex justify-content-center mt-lg-5">
                    <a class="bttn bttn--black" href="{{ $btn['url'] }}" target="{{ $btn['target'] }}">{{ $btn['title'] }}</a>
                </div>
            @endif
        
        </div>  
    </div>
</section>
