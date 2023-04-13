<?php

if (!defined("ABSPATH")) {
    exit(); // Exit if accessed directly.
}

register_activation_hook(BLACK_PRO_SEARCH_BASE, "woo_search_pro_forms");

add_action("wp_enqueue_scripts", "bps_plugin_style");

/* Style One */

add_filter("get_product_search_form", "black_pro_search_one");

function black_pro_search_one($form)
{
    $form =
        '<div class="bps-wrapper">
<form role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
			<label class="screen-reader-text" for="s">' .
        __("Search for:", "woocommerce") .
        '</label>
			<input type="text" value="' .
        get_search_query() .
        '" name="s" id="bps_search_one" placeholder="' .
        __("Search...", "woocommerce") .
        '" />
			<input type="submit" id="bps_submit_one" value="' .
        esc_attr__("Search", "woocommerce") .
        '" />
			<input type="hidden" name="post_type" value="product" />
	</form>		
	</div>
';
    return $form;
}

add_shortcode("black_pro_search_one", "black_pro_search_one");

/* Style two */

add_filter("get_product_search_form", "black_pro_search_two");

function black_pro_search_two($form)
{
    $form =
        '<div class="bps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="bps_search_two" placeholder="' .
        __("Search...", "woocommerce") .
        '" />
  <button type="submit" id="bps_submit_two" value="' .
        esc_attr__("Search", "woocommerce") .
        '" />Search</button>
			<input type="hidden" name="post_type" value="product" />

	</form>
	</div>';
    return $form;
}

add_shortcode("black_pro_search_two", "black_pro_search_two");

/* Style Three */

add_filter("get_product_search_form", "black_pro_search_three");

function black_pro_search_three($form)
{
    $form =
        '<div class="bps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="bps_search_two" placeholder="' .
        __("Search...", "woocommerce") .
        '" />
  <button type="submit" id="bps_submit_three" value="' .
        esc_attr__("Search", "woocommerce") .
        '" /><i class="fa fa-search"></i></button>
			<input type="hidden" name="post_type" value="product" />
	</form>
	</div>';
    return $form;
}

add_shortcode("black_pro_search_three", "black_pro_search_three");

/* Style Four */

add_filter("get_product_search_form", "black_pro_search_four");

function black_pro_search_four($form)
{
    $form =
        '<div class="bps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="bps_search_two" placeholder="' .
        __("Search...", "woocommerce") .
        '" />
  <button type="submit" id="bps_submit_four" value="' .
        esc_attr__("Search", "woocommerce") .
        '" /><i class="fa fa-search"></i></button>
			<input type="hidden" name="post_type" value="product" />
	</form>
	</div>';
    return $form;
}

add_shortcode("black_pro_search_four", "black_pro_search_four");

/* Style Five */

add_filter("get_product_search_form", "black_pro_search_five");

function black_pro_search_five($form)
{
    $form =
        '<div class="bps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="bps_search_three" placeholder="' .
        __("Search...", "woocommerce") .
        '" />
  <button type="submit" id="bps_submit_five" value="' .
        esc_attr__("Search", "woocommerce") .
        '" /><i class="fa fa-search"></i></button>
			<input type="hidden" name="post_type" value="product" />
	</form>
	</div>';
    return $form;
}

add_shortcode("black_pro_search_five", "black_pro_search_five");

/* Style Six */

add_filter("get_product_search_form", "black_pro_search_six");

function black_pro_search_six($form)
{
    $form =
        '<div class="bps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="bps_search_three" placeholder="' .
        __("Search...", "woocommerce") .
        '" />
  <button type="submit" id="bps_submit_six" value="' .
        esc_attr__("Search", "woocommerce") .
        '" /><i class="fa fa-search"></i></button>
			<input type="hidden" name="post_type" value="product" />
	</form>
	</div>';
    return $form;
}

add_shortcode("black_pro_search_six", "black_pro_search_six");

/* Style Seven */

add_filter("get_product_search_form", "black_pro_search_seven");

function black_pro_search_seven($form)
{
    $form =
        '<div class="bps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="bps_search_three" placeholder="' .
        __("Search...", "woocommerce") .
        '" />
  <button type="submit" id="bps_submit_seven" value="' .
        esc_attr__("Search", "woocommerce") .
        '" /><i class="fa fa-search"></i></button>
			<input type="hidden" name="post_type" value="product" />
	</form>
	</div>';
    return $form;
}

add_shortcode("black_pro_search_seven", "black_pro_search_seven");

/* Style Eight */

add_filter("get_product_search_form", "black_pro_search_eight");

function black_pro_search_eight($form)
{
    $form =
        '<div class="bps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="bps_search_four" placeholder="' .
        __("Search...", "woocommerce") .
        '" />
      <button type="submit" id="bps_submit_eight" value="' .
        esc_attr__("Search", "woocommerce") .
        '" /><i class="fa fa-search"></i></button>

			<input type="hidden" name="post_type" value="product" />
	</form>
	</div>';
    return $form;
}

add_shortcode("black_pro_search_eight", "black_pro_search_eight");

/* Style Nine */

add_filter("get_product_search_form", "black_pro_search_nine");

function black_pro_search_nine($form)
{
    $form =
        '<div class="bps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="bps_search_four" placeholder="' .
        __("Search...", "woocommerce") .
        '" />

			<input type="hidden" name="post_type" value="product" />
	</form>
	</div>';
    return $form;
}

add_shortcode("black_pro_search_nine", "black_pro_search_nine");

/* Style Ten */

add_filter("get_product_search_form", "black_pro_search_ten");

function black_pro_search_ten($form)
{
    $form =
        '<div class="bps-wrapper">
	<form class="searchform cf" role="search" method="get" id="searchform" action="' .
        esc_url(home_url("/")) .
        '">
  <input type="text" value="' .
        get_search_query() .
        '" name="s" id="bps_search_four" placeholder="' .
        __("Search...", "woocommerce") .
        '" />
    <button type="submit" id="bps_submit_ten" value="' .
        esc_attr__("Search", "woocommerce") .
        '" /><i class="fa fa-search"></i></button>

			<input type="hidden" name="post_type" value="product" />
	</form>
	</div>';
    return $form;
}

add_shortcode("black_pro_search_ten", "black_pro_search_ten");
