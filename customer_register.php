<?php 
	include("header.php");
?>

	

			
			<div class="content_wrapper">
			
			<div id="sidebar">
			
					<div id="sidebar_title">Categories</div>
					<ul id="cats">
						<?php
						getCats();
						
						?>
						
						
					<ul>	
					<div id="sidebar_title">Brands</div>
				
					
					<ul id="cats">
				
						<?php
					getBrands();
					
					?>
				
					<ul>
					
			
			
			
			</div>
			
			<div id="content_area">
			
			<?php  cart(); ?>
			
			
			<div id="shopping_cart">
			
				<span style="float:right;font-size:18px;padding:5px;line-height:40px;">
				
				Welcome Guest <b style="color:yellow">Shopping Cart- </b>Total Items:  <?php total_items();?>  Total Price: <?php total_price();?>  <a href="cart.php" style="color:yellow">Go to Cart</a>
				
				</span>
			
			</div>
			
				<form action="customer_register.php" method="post" enctype= "multipart/form-data">
			
				<table align ="center"width="750">
				
				<tr>
					<td colspan="6"><h2>Create an Account</h2></td>
				</tr>
				
				
				
				<tr>
					<td align="right">Customer Name: </td>
					<td><input type="text" name="c_name" required/></td>
				</tr>
				
				
				<tr>
					<td align="right">Customer Email:</td>
					<td><input type="email" name="c_email" id="email"></td>
					<td id="result"></td>
				</tr>
				
				<tr>
					<td align="right">Customer Password:</td>
					<td><input type="password" name="c_pass" /></td>
				</tr>
				
				<tr>
					<td align="right">Customer Image:</td>
					<td><input type="file" name="c_image" /></td>
				</tr>
				
				
				
				<tr>
					<td align="right">Customer Country:</td>
					<td>
					<select name="c_country">
						<option>Select a Country</option>
						<option>Bangladesh</option>
						<option>China</option>
						<option>UK</option>
						<option>USA</option>
						<option>Australia</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td align="right">Customer City:</td>
					<td><input type="text" name="c_city"/></td>
				</tr>
				
				<tr>
					<td align="right">Customer Contact:</td>
					<td><input type="text" name="c_contact" /></td>
				</tr>
				
				<tr>
					<td align="right">Customer Address:</td>
					<td><input type ="text" name="c_address"/></td>
				</tr>
				
				<tr align="center">
					<td colspan="6"><input type="submit" name="register" value="Create Account"  onsubmit="return validate()"/></td>
				</tr>
				
				</table>
				</form>
			</div>
			
			</div>
			
<?php 
	include("footer.php");
?>

<?php
	global $con;
	if(isset($_POST['register'])){
		$ip = getIp();
		
		
		$c_name= $_POST['c_name'];
		$c_email= $_POST['c_email'];
		$c_pass= $_POST['c_pass'];
		$c_image= $_FILES['c_image']['name'];
		$c_image_tmp= $_FILES['c_image']['tmp_name'];
		$c_country= $_POST['c_country'];
		$c_city= $_POST['c_city'];
		$c_contact= $_POST['c_contact'];
		$c_address= $_POST['c_address'];
		
		move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
		$insert_c = "insert into customers(customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image)values('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_image','$c_address')";
		
		$run_c = mysqli_query($con,$insert_c);
		
		$sel_cart ="select * from cart where ip_add='$ip'";
		
		$run_cart = mysqli_query($con,$sel_cart);
		
		
		
		$check_cart=mysqli_num_rows($run_cart);
		
		if($check_cart==0){
			$_SESSION['customer_email']=$c_email;
			
			echo "<script>alert('Account Created!')</script>";
			echo "<script>window.open('customer_login.php','_self')</script>";
			
		}
			else{
				
				$_SESSION['customer_email']=$c_email;
				
				echo "<script>alert('Account Created!')</script>";
			echo "<script>window.open('customer_login.php','_self')</script>";
				
				
			}
		}
	


?>