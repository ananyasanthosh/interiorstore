<html>
<head></head>
<body style="background-image: url('../images/projects');background-repeat: no-repeat">
<h2 align="center"</h2>
<?php
include 'connection.php';


$sql='SELECT  * FROM shoppingcart';

$result=$connection->query($sql);


if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        ?>

        <table align="center" border="1">
            <tr>
                <td><img width="150px" height="150px" name='image' src="../images/projects<?php echo $row['shopping_pic']; ?> "></td>
                <!--            <td><input type='text' id='' name='shopping_id' value="--><?php //echo $row['shopping_id']; ?><!-- "></td>-->
                <td><input type='text' id='' name='shopping_name' value="<?php echo $row['shopping_name']; ?> "></td>

                <td><input type='text' id='' name='shopping_price' value="<?php echo $row['shopping_price']; ?> "></td>


            </tr>
        </table>
        </br>
        <?php
    }
}
?>

</body>
</html>
