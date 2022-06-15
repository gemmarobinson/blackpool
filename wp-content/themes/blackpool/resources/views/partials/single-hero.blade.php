
@if( have_rows('post_header') )
    @while( have_rows('post_header') ) @php(the_row()) 
        <section class="post-hero" style="background-image:url({{$feat_image_src}});">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-24 col-md-20 col-lg-10 offset-md-2 mb-3 mb-lg-0">
                        <h1 class="post-hero__heading">{{ get_sub_field('title') }}</h1>
                        <p class="post-hero__date mb-0">{{ get_the_date('jS F Y') }}</p>
                    </div>
                    @if($img = get_sub_field('image'))
                        <div class="col-24 col-md-20 col-lg-12 offset-md-2 offset-lg-0 d-flex justify-content-end">
                            <img src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" />
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endwhile
@endif
