<section class="single-news single-news--hero">
    <div class="container">
        @php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
            );
            $the_query = new WP_Query( $args );
            $posts = wp_list_pluck( $the_query->posts, 'ID' );
        @endphp

        @if($posts)
            @foreach($posts as $id)
                <div class="row align-items-center">
                    <div class="col-24">
                        <h1 class="text-center mb-5">Latest News</h1>
                    </div>
                    <div class="col-24 col-lg-12 order-lg-1 mb-3 mb-lg-0">
                        <a href="{{ get_the_permalink($id) }}">
                            @if(get_field('post_meta', $id) && isset(get_field('post_meta', $id)['featured_image']) && isset(get_field('post_meta', $id)['featured_image']['url']))
                                @php($img = get_field('post_meta', $id)['featured_image'])
                                <img src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" /> 
                            @endif
                        </a>
                    </div>
                    <div class="col-24 col-lg-12">
                        <h2 class="subheading">Featured Story</h2>
                        <h3 class="single-news__post-heading">{!! get_the_title($id) !!}</h3>
                        <p class="single-news__post-date">{{ get_the_date('jS F Y', $id) }}</p>
                        <a href="{{ get_the_permalink($id) }}" class="bttn bttn--white">Read now</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>