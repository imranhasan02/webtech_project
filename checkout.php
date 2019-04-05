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
			
			
			
	
			
			
			<?php
			
			if(!isset($_SESSION['customer_email'])){
				
				include("payment.php");
				
			}
			else {
				
				include("payment.php");
				
			}
			
			
			?>
			
			
			
			
			
				</div>
			
			
			</div>
			
<?php 
	include("footer.php");
?>