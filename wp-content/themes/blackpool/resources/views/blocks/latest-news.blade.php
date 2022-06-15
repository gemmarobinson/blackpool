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
                    'posts_per_page' => 6,
                    'offset' => 1
                );
                $the_query = new WP_Query( $args );
                $posts = get_field('posts') ? get_field('posts') : wp_list_pluck( $the_query->posts, 'ID' );
                $i = 1;
            @endphp

            @if($posts)
                @foreach($posts as $id)
                    <div class="col-24 col-md-12 col-xl-8">
                        <a class="news-card" href="{{ get_the_permalink($id) }}">
                            <div class="news-card__image">
                                @if(get_field('post_meta', $id) && isset(get_field('post_meta', $id)['featured_image']) && isset(get_field('post_meta', $id)['featured_image']['url']))
                                    @php($img = get_field('post_meta', $id)['featured_image'])
                                    <img src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" /> 
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
