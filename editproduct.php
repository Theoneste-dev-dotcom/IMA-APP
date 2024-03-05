<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1.0">
    <title>Edit product</title>
</head>
<body>
    <h2>Edit product</h2>

<form action="" autocomplete="off" method="post">
    
<?php 
        require 'config.php';
        $id = $_GET['id'];
        // $query = "SELECT * FROM product_details WHERE product_id = $id";
        // $rows =  mysqli_query($conn, $query);
        $rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM product_details WHERE product_id = $id"));
        ?>
  <input type="hidden" id="id" value="<?php echo $rows['product_id'];?>">      
 <label for=""> Product_name</label>
 <input type="text" id="product_name" value = "<?php echo $rows['name'];?>"><br><br>

 <label for=""> Product_weight</label>
 <input type="text" id="weight" value = "<?php echo $rows['weight'];?>"><br><br>

 <label for=""> Product_certification_details</label>
 <textarea  id="certification" cols="20" rows="5" value="<?php echo $rows['cert_details'];?>"></textarea><br><br>

 <label for=""> Product_price</label>
 <input type="text" id="price" value = "<?php echo $rows['price'];?>"><br><br>

 <label for="">Introductory_date</label>
 <input type="data" id="int_date" value="<?php echo $rows['intro_date'];?>"><br><br>

 <label for=""> Expry_date</label>
 <input type="text" id="exp_date" value = "<?php echo $rows['exp_data'];?>"><br>

  <button type="button" onclick="submitProduct('edit')">UPDATE</button>
    </form>

    <a href="index.php">GO TO INDEX</a>
    <?php require 'script.php'?>
 
</body>
</html>