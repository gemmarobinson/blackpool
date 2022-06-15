<article @php(post_class())>
    <section class="blog-content">
        <div class="container">
            <div class="row">
                <div class="col-24 col-md-20 col-lg-6 offset-md-2 offset-lg-0 order-lg-1 mb-4 mb-lg-0">
                    <div class="social-sharing">
                        @php($permalink = get_the_permalink())
                        <h3 class="social-sharing__heading">Share article</h3>
                        <ul class="social-sharing__list">
                            <li class="linked-in">
                                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ $permalink }}" title="Linkedin" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="https://twitter.com/share?url={{ $permalink }}" title="Twitter" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="facebook">
                                <a href="http://www.facebook.com/sharer.php?u={{ $permalink }}" title="facebook" target="_blank">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-24 col-md-20 col-lg-16 offset-md-2">
                    @if( have_rows('post_content') )
                        @while( have_rows('post_content') ) @php(the_row()) 
                            <div data-aos="fade-up" class="blog-content__content">
                                @if($standfirst = get_sub_field('standfirst'))
                                    <p class="large-paragraph">{!! $standfirst !!}</p>
                                @endif

                                
                                @if( have_rows('body') )
                                    @while ( have_rows('body') ) @php(the_row())

                                        @if( get_row_layout() == 'wysiwyg' )
                                            
                                            {!! get_sub_field('wysiwyg') !!}
                                            
                                        @elseif( get_row_layout() == 'image' )

                                           <img src="{{ get_sub_field('image')['url'] }}" alt="" />
                                        @endif

                                    @endwhile
                                @endif
                            </div>
                        @endwhile
                    @endif
                </div>
            </div>
        </div>
    </section>
</article>

<section class="latest-news">
    <div class="container">
        <div class="row">
            <div class="col-24">
                <h2 class="latest-news__heading medium-weight-h2">More Stories</h2>
            </div>
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post__not_in' => array(get_the_id())
                );
                $the_query = new WP_Query( $args );
                $posts = get_field('posts') ? get_field('posts') : wp_list_pluck( $the_query->posts, 'ID' );
                $i = 1;
            ?>

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

            <div class="col-24 d-flex justify-content-center mt-lg-5">
                <a class="bttn bttn--black" href="{{ get_post_type_archive_link( 'post' ) }}">See More</a>
            </div>
        
        </div>  
    </div>
</section>
