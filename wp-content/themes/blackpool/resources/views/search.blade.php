@extends('layouts.app')

@section('content')
    <section class="search">
        <div class="search__hero">
            <div class="container">
                <div class="row">
                    <div class="col-24">
                        <h1>Search Results</h1>
                        <h3>You searched: "{{ get_query_var('s') }}"</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="search__listing">
            <div class="container">
                <div class="row">
                    @php
                        $s = get_search_query();
                        $args = array(
                            's' => $s,
                        );
                        $the_query = new WP_Query( $args );
                    @endphp
                    @if ( $the_query->have_posts() )
                        @while ( $the_query->have_posts()) @php($the_query->the_post())
                        <div class="col-24 col-md-12 col-xl-8">
                            <a class="news-card" href="{{ get_the_permalink() }}">
                                <div class="news-card__image">
                                    @if(get_field('post_meta') && isset(get_field('post_meta')['featured_image']) && isset(get_field('post_meta')['featured_image']['url']))
                                        @php($img = get_field('post_meta')['featured_image'])
                                        <img src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" /> 
                                    @endif
                                    <div class="news-card__type">{{ ucfirst(get_post_type()) }}</div>
                                </div>
                                <h3 class="news-card__heading paragraph">{!! get_the_title() !!}</h3>
                                @if(get_post_type() == 'post')
                                    <p class="color-grey-blue mb-0">{{ get_the_date('jS F Y') }}</p>
                                @endif
                            </a>
                        </div>
                        @endwhile
                    @else
                        <div class="col-24">
                            <h3>No results found</h3>
                            <p>Sorry, nothing matched your search criteria. Please try again with some different keywords.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
