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
			
			<div id="shopping_cart">
			
				<span style="float:right;font-size:18px;padding:5px;line-height:40px;">
				
				Welcome Guest <b style="color:yellow">Shopping Cart- </b>Total Items-Total Price:<a href="cart.php" style="color:yellow">Go to Cart</a>
				
				</span>
			
			</div>
			
			
			
				<div id="product_box">
			<?php
			
			if(isset($_GET['pro_id'])){
				$product_id = $_GET['pro_id'];
				
				$get_pro = "select * from products where product_id='$product_id'";
		$run_pro = mysqli_query($con,$get_pro);
		
		
		while($row_pro=mysqli_fetch_array($run_pro)){
			$pro_id = $row_pro['product_id'];
			$pro_title = $row_pro['product_title'];
			$pro_price = $row_pro['product_price'];
			$pro_image = $row_pro['product_image'];
			$pro_desc = $row_pro['product_desc'];
			
		echo"
		
			<div id ='single_product'>
			
				<h3>$pro_title</h3>
				<img src ='admin_area/product_images/$pro_image' width = '400px' height='300px'/>
				<p><b> $ $pro_price</b></p>
				<p> $pro_desc</p>
				
				<a href='index.php'>Go Back</a>
				<a href='index.php?pro_id=$pro_id'><button style='float=right'>Add To Cart</button></a>
		
			</div>
		";	
		}
			}
			?>	
				
				</div>
			
			</div>
			
			</div>
			
<?php 
	include 'footer.php';
?>