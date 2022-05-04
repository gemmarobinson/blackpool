<article @php(post_class())>
    <section class="blog-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-24 col-sm-19 col-md-17 col-lg-14 col-xl-12 order-2">

                    <div data-aos="fade-up" class="blog-content__content">
                        {!! apply_filters('the_content', $post->post_content); !!}
                    </div>

                    @if( get_sub_field("return_button", "option") )
                        <div data-aos="fade-up" class="blog-content__button">
                            <a href="{{get_sub_field("return_button", "option")['url']}}" target="{{get_sub_field("return_button", "option")['target']}}" class="bttn bttn-black">{{get_sub_field("return_button", "option")['title']}}</a>
                        </div>
                    @endif
                </div>

                @if( have_rows('blog_post_call_to_actions', 'option') )
                        @while ( have_rows('blog_post_call_to_actions', 'option') ) @php(the_row())
                        @php $left_feature = get_sub_field('left_feature'); @endphp
                        @if( $left_feature )
                            @if( $left_feature['show_feature'] )
                                <div class="col-6 order-3">
                                    <div class="blog-benefit" data-aos="fade-up">
                                        @if( $left_feature['icon'] )
                                            <div class="blog-benefit__icon-container icon_container js-image">
                                                <img class="blog-benefit__icon lazy" data-src="{{$left_feature['icon']['sizes']['large']}}" alt="{{$left_feature['icon']['alt']}}">
                                            </div>
                                        @endif
                                        
                                        <h3 class="blog-benefit__heading">{{$left_feature['heading']}}</h3>
                                        <p class="small-paragraph">{{$left_feature['text']}}</p>

                                        @if($left_feature['button'])
                                            <a href="{{$left_feature['button']['url']}}" target="{{$left_feature['button']['target']}}" class="bttn bttn-black blog-benefit__button">{{$left_feature['button']['title']}}</a>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endif

                        @php $right_feature = get_sub_field('right_feature', 'option'); @endphp
                        @if( $right_feature )
                            @if($right_feature['show_feature'])
                                <div class="col-6 order-1">
                                    <div class="blog-benefit" data-aos="fade-up">
                                        @if( $right_feature['icon'] )
                                            <div class="blog-benefit__icon-container icon_container js-image">
                                                <img class="blog-benefit__icon lazy" data-src="{{$right_feature['icon']['sizes']['large']}}" alt="{{$right_feature['icon']['alt']}}">
                                            </div>
                                        @endif
                                        <h3 class="blog-benefit__heading">{{$right_feature['heading']}}</h3>
                                        <p class="small-paragraph">{{$right_feature['text']}}</p>
                                        @if( $right_feature['button'] )
                                            <a href="{{$right_feature['button']['url']}}" target="{{$right_feature['button']['target']}}" class="bttn bttn-black blog-benefit__button">{{$right_feature['button']['title']}}</a>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endif

                    @endwhile
                @endif
            </div>
        </div>
    </section>
</article>
