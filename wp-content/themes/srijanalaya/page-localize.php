
<?php
/*Template Name:localize
*/
get_header();
?>
<div class="container locale_entry">
	<?php
	global $wpdb;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$table='localize';
		$locale_key=$_POST['locale_key'];
		$nepali=$_POST['nepali'];
		$english=$_POST['english'];
			$dbdata=array('locale_key'=>$_POST['locale_key'],'en'=>$_POST['english'],'ne'=>$_POST['nepali']);

		$data = $wpdb->get_results("SELECT *  FROM localize WHERE locale_key='$locale_key'");
		if(count($data)!=0){
			echo "<br/><p class='warning'>locale_key already exists.</p><p class='green'>Old Data replaced!!!</p>";
			$wpdb->update($table,$dbdata,array('locale_key'=>$locale_key));
		}else {
			$wpdb->insert($table,$dbdata);
			echo "done";
		}
	}
	else {
		echo "<p>fail</p>";





	}
	?>

	<div class="col-sm-6">
		<form method="POST" action= "<?php echo htmlspecialchars(site_url().'/localize');?>">
			<label for="locale_key">Locale_key</label><input type="text"  name="locale_key">
			<label for="nepali">Nepali</label><input type="text"  name="nepali">
			<label for="english">English</label><input type="text"  name="english"><br/>
			<button type="submit" class="btn" value="submit">submit</button>
		</form>

	</div>
	<div class="col-sm-6">
		<div class="locale_table">
			<table class="table">
				<tr>
					<th>Locale_key</th>
					<th>Nepali</th>
					<th>English</th>
				</tr>

				<?php 
				$data = $wpdb->get_results("SELECT *  FROM localize");

				foreach ($data as $key => $value) { ?>
				<tr>
					<td><?php echo $value->locale_key;?></td>
					<td><?php echo $value->ne;?></td>
					<td><?php echo $value->en;?></td>
				</tr>
				<?php }?>

			</table>
		</div>
	</div>
</div>