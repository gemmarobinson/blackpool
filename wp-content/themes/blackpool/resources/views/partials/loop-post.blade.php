@php
    $id = $post->$id;
@endphp

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