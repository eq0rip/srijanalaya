<?php
if(( is_mobile() )) {
  include('index-mobile.php');
} 
else {
	include('index-large.php');
}