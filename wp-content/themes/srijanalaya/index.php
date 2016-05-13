<?php
if(( is_mobile() )) {
//if($_GET['m']=='true'){

  include('index-mobile.php');

} 
else {
	include('index-large.php');
}