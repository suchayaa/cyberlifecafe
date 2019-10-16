<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>
<a href="<?php echo site_url('Url/form_menu_insert'); ?>">insert menu</a> <br>
	<?php  foreach ($menu as $key): ?>
	<?php echo $key['menu_id'] ?>
	<?php echo $key['menu_name'] ?>
	<?php echo $key['category_name'] ?>
	<?php echo $key['mshop_id'] ?>
 
 <!-- <a href="<?php echo site_url('Url/form_personal_update/'. $key['ID']) ?>">Update</a>
 <a href="<?php echo site_url('Personal/delete_personal/'. $key['ID']) ?>">Delete</a> -->
 <br>
<?php endforeach; ?>


</body>
</html>