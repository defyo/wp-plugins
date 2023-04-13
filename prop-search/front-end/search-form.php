<?php

if (!defined("ABSPATH")) {
    exit(); // Exit if accessed directly.
}

register_activation_hook(PROP_SEARCH_BASE, "prop_search_forms");

add_action("wp_enqueue_scripts", "ps_plugin_style");

/* Style One */

add_filter("get_post_search_form", "prop_search_one");

function prop_search_one($form)
{
    $form =
        '<div class="ps-wrapper">
<form role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
			<label class="screen-reader-text" for="s">' .
        __("Search for:", "prop_search") .
        '</label>
			<input type="text" value="' .
        get_search_query() .
        '" name="s" id="ps_search_one" placeholder="' .
        __("Search...", "prop_search") .
        '" />
			<input type="submit" id="ps_submit_one" value="' .
        esc_attr__("Search", "prop_search") .
        '" />
			<input type="hidden" name="post_type" value="post" />
	</form>		
	</div>
';
    return $form;
}

add_shortcode("prop_search_one", "prop_search_one");

/* Style two */

add_filter("get_post_search_form", "prop_search_two");

function prop_search_two($form)
{
    $form =
        '<div class="ps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="ps_search_two" placeholder="' .
        __("Search...", "prop_search") .
        '" />
  <button type="submit" id="ps_submit_two" value="' .
        esc_attr__("Search", "prop_search") .
        '" />Search</button>
			<input type="hidden" name="post_type" value="post" />

	</form>
	</div>';
    return $form;
}

add_shortcode("prop_search_two", "prop_search_two");

/* Style Three */

add_filter("get_post_search_form", "prop_search_three");

function prop_search_three($form)
{
    $form =
        '<div class="ps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="ps_search_two" placeholder="' .
        __("Search...", "prop_search") .
        '" />
  <button type="submit" id="ps_submit_three" value="' .
        esc_attr__("Search", "prop_search") .
        '" /><i class="fa fa-search"></i></button>
			<input type="hidden" name="post_type" value="post" />
	</form>
	</div>';
    return $form;
}

add_shortcode("prop_search_three", "prop_search_three");

/* Style Four */

add_filter("get_post_search_form", "prop_search_four");

function prop_search_four($form)
{
    $form =
        '<div class="ps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="ps_search_two" placeholder="' .
        __("Search...", "prop_search") .
        '" />
  <button type="submit" id="ps_submit_four" value="' .
        esc_attr__("Search", "prop_search") .
        '" /><i class="fa fa-search"></i></button>
			<input type="hidden" name="post_type" value="post" />
	</form>
	</div>';
    return $form;
}

add_shortcode("prop_search_four", "prop_search_four");

/* Style Five */

add_filter("get_post_search_form", "prop_search_five");

function prop_search_five($form)
{
    $form =
        '<div class="ps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="ps_search_three" placeholder="' .
        __("Search...", "prop_search") .
        '" />
  <button type="submit" id="ps_submit_five" value="' .
        esc_attr__("Search", "prop_search") .
        '" /><i class="fa fa-search"></i></button>
			<input type="hidden" name="post_type" value="post" />
	</form>
	</div>';
    return $form;
}

add_shortcode("prop_search_five", "prop_search_five");

/* Style Six */

add_filter("get_post_search_form", "prop_search_six");

function prop_search_six($form)
{
    $form =
        '<div class="ps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="ps_search_three" placeholder="' .
        __("Search...", "prop_search") .
        '" />
  <button type="submit" id="ps_submit_six" value="' .
        esc_attr__("Search", "prop_search") .
        '" /><i class="fa fa-search"></i></button>
			<input type="hidden" name="post_type" value="post" />
	</form>
	</div>';
    return $form;
}

add_shortcode("prop_search_six", "prop_search_six");

/* Style Seven */

add_filter("get_post_search_form", "prop_search_seven");

function prop_search_seven($form)
{
    $form =
        '<div class="ps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="ps_search_three" placeholder="' .
        __("Search...", "prop_search") .
        '" />
  <button type="submit" id="ps_submit_seven" value="' .
        esc_attr__("Search", "prop_search") .
        '" /><i class="fa fa-search"></i></button>
			<input type="hidden" name="post_type" value="post" />
	</form>
	</div>';
    return $form;
}

add_shortcode("prop_search_seven", "prop_search_seven");

/* Style Eight */

add_filter("get_post_search_form", "prop_search_eight");

function prop_search_eight($form)
{
    $form =
        '<div class="ps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="ps_search_four" placeholder="' .
        __("Search...", "prop_search") .
        '" />
      <button type="submit" id="ps_submit_eight" value="' .
        esc_attr__("Search", "prop_search") .
        '" /><i class="fa fa-search"></i></button>

			<input type="hidden" name="post_type" value="post" />
	</form>
	</div>';
    return $form;
}

add_shortcode("prop_search_eight", "prop_search_eight");

/* Style Nine */

add_filter("get_post_search_form", "prop_search_nine");

function prop_search_nine($form)
{
    $form =
        '<div class="ps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="ps_search_four" placeholder="' .
        __("Search...", "prop_search") .
        '" />

			<input type="hidden" name="post_type" value="post" />
	</form>
	</div>';
    return $form;
}

add_shortcode("prop_search_nine", "prop_search_nine");

/* Style Ten */

add_filter("get_post_search_form", "prop_search_ten");

function prop_search_ten($form)
{
    $form =
        '<div class="ps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="ps_search_four" placeholder="' .
        __("Search...", "prop_search") .
        '" />
    <button type="submit" id="ps_submit_ten" value="' .
        esc_attr__("Search", "prop_search") .
        '" /><i class="fa fa-search"></i></button>

			<input type="hidden" name="post_type" value="post" />
	</form>
	</div>';
    return $form;
}

add_shortcode("prop_search_ten", "prop_search_ten");
