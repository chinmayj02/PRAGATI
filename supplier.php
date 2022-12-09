<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
   background-repeat:no-repeat;
    background-size:cover;

}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text],input[type=number],textarea{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}



/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color:rgb(37, 116, 161);
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  background-color: #45a049;
  
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}



</style>
</head>
<body background="background.jpg">

<form action="" method="post">
  <div class="container">
    <h1>Registration of your product</h1>
    <p>Please fill in this form to sell your products.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="pdid"><b>Item_id</b></label>
    <input type="number" placeholder="Item_id" name="idid" id="pdid">
<label for="Country"><b>Country</b></label>
<input type="text" placeholder="Country" name="ctry" id="ctry" required>
<label for="State"><b>State</b></label>
<input type="text" placeholder="State" name="state" id="state" required>
<label for="itnm"><b>Item Name</b></label>
    <input type="text" placeholder="Enter Item Name" name="itnm" id="itnm" required>
    <label for="prc"><b>Price</b></label>
    <input type="number" placeholder="Enter Price" name="prc" id="prc" required>
<label for="Picture"><b>Upload Picture of the certificate pertaining to the product</b></label> 
<br><br>
<input type="file" id="myFile" name="filename">
<br><br>
<label for="Picture"><b>Upload Picture of your Product</b></label> 
<br><br>
 TOP VIEW:<input type="file" id="myFile" name="filename" >
  SIDE VIEW:<input type="file" id="myFile" name="filename" >
  <br><br>
  <label for="Description"><b>Description of your Product</b></label> 
  <br>
 <textarea id="txtarea" name="Description" placeholder="Write something.." style="height:300px" required></textarea>

    <hr>
    

    <button type="submit" class="registerbtn" name="submit">Register</button>

  </div>
  
  

</form>
</body>
</html><?php
include 'connection.php';
if(isset($_POST['submit'])){

$id=$_POST['idid'];
$item_name=$_POST['itnm'];
$Prod_Id=$_POST['pdid'];
$price=$_POST['prc'];

$insertquery="INSERT INTO `items`(`Item_Id`, `Items_name`, `Prod_Id`, `price`) VALUES ('$id','$item_name','$Prod_Id','$price')";
$result=mysqli_query($con,$insertquery); 
if($result){
  ?> 
  <script> 
    alert("data inserted");
  </script>
  <?php 
}
}
?>