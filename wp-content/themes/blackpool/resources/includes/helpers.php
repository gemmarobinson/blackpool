<?php
    function get_excerpt(){
        if ( has_excerpt() ) {
            return the_excerpt();
        }
        $excerpt = get_the_content();
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, 200);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt .= "...";
        return $excerpt;
    }

    // Allow editors to access the Menus page under Appearance but hide other options
    // Note that users who know the correct path to the hidden options can still access them
    function hide_menu() {
        $user = wp_get_current_user();

        // Check if the current user is an Editor
        if ( in_array( 'editor', (array) $user->roles ) ) {

            // They're an editor, so grant the edit_theme_options capability if they don't have it
            if ( ! current_user_can( 'edit_theme_options' ) ) {
                $role_object = get_role( 'editor' );
                $role_object->add_cap( 'edit_theme_options' );
            }

            // Hide the Themes page
            remove_submenu_page( 'themes.php', 'themes.php' );

            // Hide the Widgets page
            remove_submenu_page( 'themes.php', 'widgets.php' );

            // Hide the Customize page
            remove_submenu_page( 'themes.php', 'customize.php' );

            // Remove Customize from the Appearance submenu
            global $submenu;
            unset($submenu['themes.php'][6]);
        }
    }
    add_action('admin_menu', 'hide_menu', 10);

    // Allow editors to access Forms
    $editor = get_role( 'editor' );
    $editor->add_cap( 'gravityforms_edit_forms' );
    $editor->add_cap( 'gravityforms_delete_forms' );
    $editor->add_cap( 'gravityforms_create_form' );
    $editor->add_cap( 'gravityforms_view_entries' );
    $editor->add_cap( 'gravityforms_edit_entries' );
    $editor->add_cap( 'gravityforms_delete_entries' );
    $editor->add_cap( 'gravityforms_view_settings' );
    $editor->add_cap( 'gravityforms_edit_settings' );
    $editor->add_cap( 'gravityforms_export_entries' );
    $editor->add_cap( 'gravityforms_view_entry_notes' );
    $editor->add_cap( 'gravityforms_edit_entry_notes' );

    // Make sure featured images are enabled
    add_theme_support( 'post-thumbnails' );

    function excerpt($limit) {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).'...';
        } else {
            $excerpt = implode(" ",$excerpt);
        }
        $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
        return $excerpt;
    }

    function content($limit) {
        $content = explode(' ', get_the_content(), $limit);
        if (count($content)>=$limit) {
            array_pop($content);
            $content = implode(" ",$content).'...';
        } else {
            $content = implode(" ",$content);
        }
        $content = preg_replace('/[.+]/','', $content);
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]>', $content);
        return $content;
    }
