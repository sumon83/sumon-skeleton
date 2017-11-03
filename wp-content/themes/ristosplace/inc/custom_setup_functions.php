<?php

// slider 
function zwsristosplace_custom_post_slide()
{
    $labels = array(
        'name' => _x('', 'post type general name'),
        'singular_name' => _x('slide', 'post type singular name'),
        'add_new' => _x('Add New', 'slide'),
        'add_new_item' => __('Add New Slide'),
        'edit_item' => __('Edit Slide'),
        'new_item' => __('New Slide'),
        'all_items' => __('All Slides'),
        'view_item' => __('View Slide'),
        'search_items' => __('Search Slide'),
        'not_found' => __('No slide found'),
        'not_found_in_trash' => __('No slide found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Slides'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'This is all about slider',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'thumbnail'),
        'has_archive' => true,
    );

    register_post_type('slide', $args);
}

add_action('init', 'zwsristosplace_custom_post_slide');

function zwsristosplace_slider_image_size_setup()
{

    add_image_size('slide', 1400, 420, true); // (cropped)
}

add_action('after_setup_theme', 'zwsristosplace_slider_image_size_setup');

//slider meta box
function zwsristosplace_slide_meta_box_add()
{
    add_meta_box('my-meta-box-id', 'Slider Content', 'zwsristosplace_slide_meta_box_details', 'slide', 'normal', 'high');
}

add_action('add_meta_boxes', 'zwsristosplace_slide_meta_box_add');

function zwsristosplace_slide_meta_box_details()
{
// $post is already set, and contains an object: the WordPress post
    global $post;
    $values = get_post_custom($post->ID);

    $text_slide_dexcription = isset($values['slider_description_text']) ? $values['slider_description_text'] : '';
    $level_text_slider_button = isset($values['slider_button_text']) ? $values['slider_button_text'] : '';
    $text_slider_start_now_url = isset($values['slider_button_text_url']) ? $values['slider_button_text_url'] : '';
    ?>
    <div id="wpbody-content" aria-label="Main content" tabindex="0">
        <table class="form-table">

            <tr class="form-field form-required">
                <th scope="row">
                    <label for="slider_description_text">Slider Description</label>
                </th>
                <td>
                    <textarea name="slider_description_text" id="slider_description_text" cols="20"><?php
                        if ($values == NULL || $values == '') {
                            echo '';
                        } else {
                            echo $text_slide_dexcription[0];
                        }
                        ?>
                    </textarea>
                </td>
            </tr>
            <tr class="form-field form-required">
                <th scope="row">
                    <label for="slider_button_text">Slider Button Text</label>
                </th>
                <td>
                    <input type="text" name="slider_button_text" id="slider_button_text" value="<?php
                    if ($values == NULL || $values == '') {
                        echo '';
                    } else {
                        echo $level_text_slider_button[0];
                    }
                    ?>"/>
                </td>
            </tr>
            <tr class="form-field form-required">
                <th scope="row">
                    <label for="slider_button_text_url">Slider Button URL</label>
                </th>
                <td>
                    <input type="text" name="slider_button_text_url" id="slider_button_text_url" value="<?php
                    if ($values == NULL || $values == '') {
                        echo '';
                    } else {
                        echo $text_slider_start_now_url[0];
                    }
                    ?>"/>
                </td>
            </tr>
        </table>
    </div>

    <?php
}

add_action('save_post', 'zwsristosplace_slider_meta_box_save');

function zwsristosplace_slider_meta_box_save($post_id)
{
// now we can actually save the data
    $allowed = array(
        'a' => array(// on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
// Make sure your data is set before trying to save it

    if (isset($_POST['slider_description_text'])) {
        update_post_meta($post_id, 'slider_description_text', wp_kses($_POST['slider_description_text'], $allowed));
    }
    if (isset($_POST['slider_button_text_url'])) {
        update_post_meta($post_id, 'slider_button_text_url', wp_kses($_POST['slider_button_text_url'], $allowed));
    }
    if (isset($_POST['slider_button_text'])) {
        update_post_meta($post_id, 'slider_button_text', wp_kses($_POST['slider_button_text'], $allowed));
    }
}

// end of slider
