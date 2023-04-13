<?php

add_action("admin_menu", "ps_plugin_setup_menu");

function ps_plugin_setup_menu()
{
    add_menu_page(
        "Prop Search",
        "Prop Search",
        "manage_options",
        "prop-search",
        "ps_init",
        "dashicons-search"
    );
}

function ps_init()
{
    $user = wp_get_current_user();
    $user_display_name = $user->display_name;
    echo "<center><br><h1 class='sc_table_head'>Howdy, " .
        $user_display_name .
        "! - Thank you for using Prop Search</h1><br>
		<img src='https://ssdserver9.com/wp-content/uploads/2023/01/1674283939373.png' style='width:150px;'><br>
	<a href='https://ssdserver9.com/plugins/black-search-pro'><button class='sc_table_head_btn'>Visit Plugin Site</button></a></center>";
    $ps_search_one = plugins_url("/images/ps_search_one.jpg", __FILE__);
    $ps_search_two = plugins_url("/images/ps_search_two.jpg", __FILE__);
    $ps_search_three = plugins_url("/images/ps_search_three.jpg", __FILE__);
    $ps_search_four = plugins_url("/images/ps_search_four.jpg", __FILE__);
    $ps_search_five = plugins_url("/images/ps_search_five.jpg", __FILE__);
    $ps_search_six = plugins_url("/images/ps_search_six.jpg", __FILE__);
    $ps_search_seven = plugins_url("/images/ps_search_seven.jpg", __FILE__);
    $ps_search_eight = plugins_url("/images/ps_search_eight.jpg", __FILE__);
    $ps_search_nine = plugins_url("/images/ps_search_nine.jpg", __FILE__);
    $ps_search_ten = plugins_url("/images/ps_search_ten.jpg", __FILE__);

    echo "<br>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

<style>
body{
background: #ffffff;
}

.notice{
display:none;
}


.sc_table_head_btn{
background: #ff0000;
color: #ffffff;
border-radius : 20px;
padding: 10px;
font-family: 'nunito';
border: solid 2px #ff0000;
cursor: pointer;
}

table {
  font-family: 'nunito';
  border-collapse: collapse;
  width: 70%;
  text-align : center;
  content-align : center;
  box-shadow: 20px 20px 50px grey;
  border-radius: 20px;
}

th {
  text-align: left;
  padding: 8px;
  text-align: center;
  text-transform: uppercase;
}

td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align: center;
  font-size: 20px;
  border-left: none;
  border-right: none;
}

.sc_table_head{
  font-family: 'nunito';
}

.ps_footer_credits{
  font-family: 'nunito';
  margin-top: 50px;
}

tr {
  background-color: #ffffff;
  text-align: center;
}
</style>
</head>
<body>

<center><table>
  <tr>
    <th style='border-radius: 20px 0px 0px 0px; border-right:solid 1px #dddddd;'><h1>Style<h1></th>
    <th style='border-radius: 0px 20px 0px 0px;'><h1>Shortcode<h1></th>
  </tr>
  <tr>
    <td style='border-right:solid 1px #dddddd;'><img src=" .
        $ps_search_one .
        " style='width:500px'></td>
    <td>[prop_search_one]</td>
  </tr>
  <tr>
    <td style='border-right:solid 1px #dddddd;'><img src=" .
        $ps_search_two .
        " style='width:500px'></td>
    <td>[prop_search_two]</td>
  </tr>
  <tr>
    <td style='border-right:solid 1px #dddddd;'><img src=" .
        $ps_search_three .
        " style='width:500px'></td>
    <td>[prop_search_three]</td>
  </tr>
  <tr>
    <td style='border-right:solid 1px #dddddd;'><img src=" .
        $ps_search_four .
        " style='width:500px'></td>
    <td>[prop_search_four]</td>
  </tr>
  <tr>
    <td style='border-right:solid 1px #dddddd;'><img src=" .
        $ps_search_five .
        " style='width:500px'></td>
    <td>[prop_search_five]</td>
  </tr>
  <tr>
    <td style='border-right:solid 1px #dddddd;'><img src=" .
        $ps_search_six .
        " style='width:500px'></td>
    <td>[prop_search_six]</td>
  </tr>
   <tr>
    <td style='border-right:solid 1px #dddddd;'><img src=" .
        $ps_search_seven .
        " style='width:500px'></td>
    <td>[prop_search_seven]</td>
  </tr>
    <tr>
    <td style='border-right:solid 1px #dddddd;'><img src=" .
        $ps_search_eight .
        " style='width:500px'></td>
    <td>[prop_search_eight]</td>
  </tr>
    <tr>
    <td style='border-right:solid 1px #dddddd;'><img src=" .
        $ps_search_nine .
        " style='width:500px'></td>
    <td>[prop_search_nine]</td>
  </tr>
    <tr>
    <td style='border-radius: 0px 0px 0px 20px; border:none; border-right:solid 1px #dddddd;'><img src=" .
        $ps_search_ten .
        " style='width:500px'></td>
    <td style='border-radius: 0px 0px 20px 0px; border:none;'>[prop_search_ten]</td>
  </tr>
</table></center>
<center><br><h4 class='ps_footer_credits'>A plugin by Ssd Server 9 Inc ®</h4><center>
</body>
</html>";
}
