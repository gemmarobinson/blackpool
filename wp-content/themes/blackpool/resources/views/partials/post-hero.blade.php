@if( have_rows('blog_page_hero', 'option') )
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-xs-24 col-sm-18 col-md-14 col-lg-12 col-xl-10" data-aos="fade-up">
                <div class="hero__inner">
                    @while ( have_rows('blog_page_hero', 'option') ) @php(the_row())
                        <h1 class="h2 hero__heading">{{get_sub_field("heading", "option")}}</h1>
                        <p>{{get_sub_field("text", "option")}}</p>
                    @endwhile
                </div>
            </div>
        </div>
    </div>
</section>
@endif
