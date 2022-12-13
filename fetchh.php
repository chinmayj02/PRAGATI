<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-info">
              <h4 class="tect-red">fecthing data from database</h4>

            </div>
            <div class="card-body">
              <?php 
$username="root";
$password="";
$server='localhost';
$db='pragati';
$con=  mysqli_connect($server,$username,$password,$db);
              $query="SELECT * FROM items";
              $query_run=mysqli_query($con,$query);?>
<table class="table">
  <thead>
    <tr>
      <th>
        Item ID
      </th>
      <th>
                producer ID

      </th>
      <th>
Item name      </th>
      <th>
        Price
      </th>
<th>
  Description
</th>   
<th>Image</th>
 </tr>
  </thead>
  <tbody> 
    <?php 
    if(mysqli_num_rows($query_run)>0){

foreach($query_run as $row){
 // echo $row['Item_Id'];
 ?> 
 <tr>
      <td> <?php echo $row['Item_Id']; ?></td>
      <td> <?php echo $row['Prod_Id']; ?></td>
      <td> <?php echo $row['Items_name']; ?></td>

      <td> <?php echo $row['price']; ?></td>
      <td> <?php echo $row['Description']; ?></td>
      <td> 
        <img src="upload/<?php echo $row['Image'] ;?>" max-width="20%">
      </td>
      <td> 
        
    

    </tr>
 <?php 
}
    } //record is there or not;
    else{
      ?>
      <tr>
      <td>No record found</td>
    </tr>
     <?php }
    
  ?>
  </tbody>
</table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
