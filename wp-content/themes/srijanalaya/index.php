<?php
if( wp_is_mobile() ) {
  include('index-mobile.php');

} else {
	include('index-large.php');
}