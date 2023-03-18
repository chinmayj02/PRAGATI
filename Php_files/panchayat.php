<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Producer Awareness</title>
  </head> 
    
  <body class="container bg-light">
    <!-- Start Header form -->
    <div class="text-center pt-5">
      <!-- <img src="logo.jpeg" alt="network-logo" width="140" height="140" /> -->
      <h2>PANCHAYAT EVENT INFORMATION</h2>
    </div>
    <!-- End Header form -->
  
    <!-- Start Card -->
    <div class="card">
      <!-- Start Card Body -->
      <div class="card-body">
        <!-- Start Form -->
        <form id="LoginForm" action="panchayat.php" method="post" class="needs-validation" novalidate autocomplete="off">
          <!-- Start Input Name -->
          <div class="row">
            <div class="form-group col-md-4">
            <label for="inputId">Email:</label>
            <input type="text" class="form-control" id="inputid" name="emailp" placeholder="Your Id" required />
            <small class="form-text text-muted">Please fill the email-Id</small>
          </div> 
          <div class="form-group col-md-4">
            <label for="inputaccode">Panchayat Name: </label>
            <input type="text" class="form-control" id="inputcode" name="Panchayat" placeholder="Panchayat name" required />
            <small class="form-text text-muted">Please fill the panchayat name</small>
          </div>
          <div class="form-group col-md-4">
            <label for="inputaccname">Program Date: </label>
            <input type="date" class="form-control" id="inputacc-name" name="Program" placeholder="Programme date" required />
            <small class="form-text text-muted">Please select the date</small>
          </div>
          <div class="form-group col-md-4">
                 
            <label for="inputcap">Programme time: </label>
            <input type="TIME" class="form-control" id="inputc" name="ptime" placeholder="Total Capacity" required />
            <small class="form-text text-muted">Please select the programme time</small>
          </div> 
          <!-- <div class="row">
            <div class="form-group col-md-4">
            
              <label for="inputbstatus">Building Status </label>
              <br><select id="bldg-status" name="bldg-status">
              <option>Select Building Status</option>
              <option value="Active">Active</option>
              <option value="Permanently Closed">Permanently Closed</option>
              <option value="Temporarily Closed">Temporarily Closed</option>
            </select></div> -->
            <div class="form-group col-md-4">
              <label for="inputbstatus">Country:</label>
              <br> <select id="gen" name="CPanchayat">
               <option>Select Country</option>
               <option value="1">India</option>
             </select></div>  
              <!-- <div class="form-group col-md-4">
            
                <label for="inputbstatus">Gender:</label>
               <br> <select id="gen" name="gen">
                <option>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select></div> </div> -->
              
                <div class="form-group col-md-4">
                 
                  <label for="inputbstatus">State:</label>
                  <br> <select id="gen" name="SPanchayat">
                   <option>Select State</option>
                   <option value="Goa">Goa</option>
                   <option value="Maharsatra">Maharastra</option>
                   <option value="Kerala">Kerala</option>
                   <option value="Delhi">Delhi</option>
                   <option value="Hyderabad">Hyderabad</option>
                   <option value="Andhra Pradesh">Andhra Pradesh</option>
                   <option value="Assam">Assam</option>



                 </select></div>
              
                <div class="form-group col-md-4">
                
                  <label for="inputbstatus">Panchayat Program type:</label>
                  <br> <select id="gen" name="Panchayat_program">
                   <option>Select type</option>
                   <option value="Hands on training">Hands on training</option>
                   <option value="Workshop">Workshop</option>
                   <option value="Other">Other</option>
                 </select></div> 
                </div>
               
                
            
         <!-- Start Submit Button --><center>
         <button class="visible" class="btn btn-primary btn-block col-lg-2" name="submit" type="submit">Submit</button>
         <!-- End Submit Button --></center>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="emp.js"></script>
    <!-- Start Scritp for Form -->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <!-- End Scritp for Form -->
    <footer>
        <div class="my-4 text-muted text-center">
          <p>© pragati</p>
        </div>
      </footer>
  </body> 
  <?php
include 'connection.php';
if(isset($_POST['submit'])){


$pname=$_POST['Panchayat']; 
$pdate=$_POST['Program'];
$country=$_POST['CPanchayat'];
$state=$_POST['SPanchayat'];
$pemail=$_POST['emailp'];
$ptime=$_POST['ptime'];
$panchayat_program_type=$_POST['Panchayat_program'];
//$programme_name=$_POST['Panchayat'];

$insertquery="INSERT INTO `panchayat`(`Panchayat_Name`, `date_of_prog`, `country`, `state`, `panchayat_email`,`programme_name`,`time_of_program`) VALUES ('$pname','$pdate','$country','$state','$pemail','$panchayat_program_type','$ptime')";
$result=mysqli_query($con,$insertquery); 
if($result){
  ?> 
  <script> 
    alert("data  inserted");
  </script>
  <?php 
} 
}?>