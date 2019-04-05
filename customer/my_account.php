<?php 
	include("../header.php");
?>



			
			<div class="content_wrapper">
			
			<div id="sidebar">
			
					<div id="sidebar_title">Categories</div>
					<ul id="cats">
						<?php
						getCats();
						
						?>
					<ul>	
		
			
			</div>
			
			
			
			<div id="content_area">
			
			<?php  cart(); ?>
			
			
			<div id="shopping_cart">
			
				<span style="float:right;font-size:18px;padding:5px;line-height:40px;">
				
				
				<?php
				
					if(isset($_SESSION['customer_email'])){
						
						echo "<b>Welcome:</b>" . $_SESSION['customer_email'];
						
					}
					
				?>
				
				
				
				<?php
				
					if(!isset($_SESSION['customer_email'])){
						
						echo "<a href='checkout.php' style='color:orange'>Login</a>";
					}
					else{
						echo "<a href='logout.php' style='color:orange'>LogOut</a>";
						
					}
				
				?>
				
				
				
				</span>
			
			</div>
			
			
			
			
			
				<div id="product_box">
				
				Hello User !

				
				</div>
				
			</div>
<?php 
	include("../footer.php");
?>