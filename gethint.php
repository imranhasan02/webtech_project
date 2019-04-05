<?php
	$con = mysqli_connect("localhost","root","","ecommerce");
	if(mysqli_connect_errno()){	
		echo "The connection is no established:". mysqli_connect_error();
	}

	$query = $_GET['q'];

	if(!empty($query)){
		$sql="SELECT product_title, product_id FROM products where product_title like '%$query%'";

		if ($result=mysqli_query($con,$sql))
		  {
		  $rowcount=mysqli_num_rows($result);
		  if($rowcount > 0) {
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$id = $row['product_id'];
				$title = $row['product_title'];
				echo "<a href='details.php?pro_id=$id'>$title</a> <br/>";
			}
		  } else {
		  	echo "No result found";
		  }
		  mysqli_free_result($result);
		  }

		mysqli_close($con);
	}
?>