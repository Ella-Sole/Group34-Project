
    <html>
        <head>
             <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <link rel="stylesheet" href="style.css"> 
        <title>Products</title>
        </head>
        <body>
        <?php 
    if (isset($_POST['submit'])){
        require_once('db.php');
        $search = isset($_POST['search']) ?trim($_POST['search']):'';
        if (empty($search)){
            echo "Error: Search bar empty";
            exit;
        }
        try{
            $result = "SELECT * FROM items_for_sale WHERE item_name LIKE %search% ";
            $rows = $db->query($result);
            if ( $rows && $rows->rowCount()> 0) {
        ?>
        <h1><?php $header = $rows->fetch();
        echo $header['item_name'];?>
		<table cellspacing="0"  cellpadding="5" id="myTable" >
	  <tr><th align='left'><b>Image</b></th>   <th align='left'><b>Item Name</b></th> <th align='left'><b>Price</b></th ></tr>
		<?php
		// Fetch and  print all  the product information.
			while  ($row =  $rows->fetch())	{
				echo  "<tr><td align='left'>" . $row['item_image'] . "</td>";
				echo  "<td align='left'>" . $row['item_name'] . "</td>";
				echo "<td align='left'>". $row['item_price'] . "</td></tr>\n";
			}
			echo  '</table>';
		}
		else {
			echo  "<p>No item available.</p>\n"; //no match found
		}
    }catch(PDOException $e){
        echo "A database error has occurred";
    }
	
}	
    ?>
    <a href = "checkout.html">Buy</a>
    </body>
    </html>