<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ALL SUPPLIED ITEMS</h2>
    <table border=2>
        <tr>
            <td>#</td>
            <td>PRODUCT NAME</td>
            <td>WEIGHT</td>
            <td>CERTIFICATION</td>
            <td>PRICE</td>
            <td>INTRO_DATE</td>
            <td>EXP_DATE</td>
            <td>ACTION</td>
        </tr>
    <?php
    require 'config.php';
    $query = "SELECT * FROM product_details";
    $rows = mysqli_query($conn,$query);
    $i = 1;

    ?>
    <?php
    foreach($rows as $row):?>
        <tr id=<?php echo $row["product_id"];?>>
        <td><?php echo $i++;?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['weight']?></td>
        <td><?php echo $row['cert_details']?></td>
        <td><?php echo $row['price']?></td>
        <td><?php echo $row['intro_date']?></td>
        <td><?php echo $row['exp_data']?></td>
        <td>
            <a href="editproduct.php?id=<?php echo $row['product_id'];?>">Edit</a>
            <button type="button" onclick="submitProduct(<?php echo $row['product_id'];?>)">Delete</button> 
        </td>
    </tr>
    <?php endforeach; ?>
    
    </table>
    <br>
    <a href="addProduct.php"> ADD USER</a>
    <?php require 'script.php'; ?>
</body>
</html>