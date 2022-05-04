@php
    /**
     *  This uses ACF field group: "Page Content"
     *  If using this partial make sure that the "Page Content"
     *  field group is visible for your template
     */
    $id = get_the_id();
    if(is_home()){
        $id = get_option( 'page_for_posts' );
    }
@endphp

{!! the_content() !!}
