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
				
				<?php
				
					if(!isset($_SESSION['customer_email'])){
						
						//echo "<a href='checkout.php' style='color:orange'>Login</a>";
					}
					else{
						echo "<a href='logout.php' style='color:orange'>LogOut</a>";
						
					}
				
				?>
				
				
				
				</span>
			
			</div>
			
			
			
			
			
				<div id="product_box">
				
				<?php  getPro(); ?>
				<?php  getCatPro(); ?>
				<?php  getBrandPro(); ?>
				
				
				</div>
			
			</div>
			
			</div>
<?php 
	include("footer.php");
?>