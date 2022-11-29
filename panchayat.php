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
input[type=text], input[type=password],input[type=number]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.loginbtn {
  background-color:rgb(37, 116, 161);
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.loginbtn:hover {
background-color: #45a049
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */


</style>
<script type="text/javascript">

 // function validatep()
  {
    firstname=document.valp.Panchayat.value
    if(firstname >=65 && firstname <=90 || firstname >= 97 && firstname <= 122)
    { 
      return true;
    }
    else
    {
    alert("Invalid  Panchayat name");
    return false;
    }
    lastname=document.valp.SPanchayat.value
    if(lastname >=65 && lastname <=90 || lastname >= 97 && lastname <= 122)
    { 
      return true;
    }
    else
    {
    alert("Invalid State");
    return false;
    }
    address=document.valp.CPanchayat.value
    if(address >=65 && address <=90 || address >= 97 && address <= 122)
    { 
      return true;
    }
    else
    {
    alert("Invalid country");
    return false;
    }
email=document.valp.emailp.value
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return (true)
  }
  else{
    alert("You have entered an invalid email address!")
    return (false)
  }
  var num=document.valp.program.value;  
if (isNaN(num)){  
  alert("Enter a proper date ")
  return false;  
}else{  
  return true;  
  }  
  }
</script>
</head>
<body background="background.jpg">

<form action="" method="POST" name="valp" onsubmit="return validatep()">
    <div class="container">
    <h1>PANCHAYAT</h1>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="emailp" id="email" required>


<label><b>Panchayat Name: </b> </label>
<input type="text" id="panchayat" name="Panchayat" placeholder="panchayat name">  
<label><b>Program Date: </b> </label>
<input type="date" id="program" name="Program" placeholder="program date"> <br>
<label><b>Country: </b> </label>
<input type="text" id="panchayat" name="CPanchayat" placeholder="Country"> 
<label><b>State: </b> </label>
<input type="text" id="panchayat" name="SPanchayat" placeholder="State"> 
<label><b>Panchayat Program: </b> </label>
<br>
<input type="Radio" id="panchayat" name="HANDS on TRAINING" >Hands On Training <br>
<input type="Radio" id="panchayat" name="WORKSHOP" > Workshop<br>
 



    <button type="submit" class="loginbtn" name="submit">Submit</button>
    
    

</div>
</form>

</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])){


$pname=$_POST['Panchayat']; 
$pdate=$_POST['Program'];
$country=$_POST['CPanchayat'];
$state=$_POST['SPanchayat'];
$pemail=$_POST['emailp'];
//$programme_name=$_POST['Panchayat'];

$insertquery="INSERT INTO `panchayat`(`Panchayat_Name`, `date_of_prog`, `country`, `state`, `panchayat_email`) VALUES ('$pname','$pdate','$country','$state','$pemail')";
$result=mysqli_query($con,$insertquery); 
if($result){
  ?> 
  <script> 
    alert("data  inserted");
  </script>
  <?php 
} 
}?>