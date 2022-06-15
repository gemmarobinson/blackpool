@extends('layouts.app')

@section('content')

@php
    $post_count = 0;
    $id = get_the_id();
    if(is_home()){
        $id = get_option( 'page_for_posts' );
    }
    global $wp_query;
@endphp

@include('partials.post-hero')

<section class="two-col-blog">
    <div class="container">
        <div class="row">
            @if(!have_posts())
                <div class="alert alert-warning">
                    {{ __('Sorry, no results were found.', 'sage') }}
                </div>
            @else
                @while(have_posts()) @php(the_post())
                    @php($post_count++)
                    @include('partials.loop-'.get_post_type())
                @endwhile
            @endif
        </div>
        <div class="row">
            <div class="col-24 mt-3 mt-lg-5">

                <div class="page-number">
                    @php($paged = (get_query_var('paged')) ? get_query_var('paged') : 1)
                    Page {{ $paged }}
                </div>
                
                {!! get_the_posts_navigation(
                    array(
                        'prev_text' => 'Older Posts',
                        'next_text' => 'Newer Posts')
                    )
                !!}
            </div>
        </div>
    </div>
</section>

@endsection
