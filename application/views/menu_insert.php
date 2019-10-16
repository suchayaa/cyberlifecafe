<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>
<?php echo form_open('Menu/insert/menu');?>
	รหัสเมนู : <input type="text" name="menu_id" value=""><br>
	ชื่อเมนู : <input type="text" name="menu_name" value=""><br>

	ประเภท : <select name="mcategory_id">
		<?php  foreach ($category as $key): ?>
		<option value="<?php echo $key['category_id'] ?>"><?php echo $key['category_name'] ?></option>
		<?php endforeach; ?>

</select><br>

	รหัสร้านค้า : <input type="text" name="mshop_id" value=""><br>
			
	<input type="submit" value="Submit">
<?php echo form_close();?>
</body>
</html>