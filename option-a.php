<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Order Form</title>

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="css/a.css">
  </head>

  <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">Track order</a>
                    </li>
                  

                    <li class="nav-item">
                      <a class="nav-link active" href="submit_data.php">Submit Data</a>
                    </li>
                    
                   
                    
                  </ul>
                 
                </div>
              </div>
        </div>
      </nav>


<!-- <?php

require_once('includes/dbh.php');

$sql = "SELECT * FROM orders;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck>0){
  while($row=mysqli_fetch_assoc($result)){
    var_dump($row);

  }

}



?> -->


      <div class="container px-1 px-md-4 py-5 mx-auto">
        <div class="card">
            <h1 class="dad">Order Information</h1>

            <div class="row d-flex justify-content-between px-3 top">
                <div class="d-flex">
                    <h6 style="padding-right: 15px;">Order Number: <span class="text-primary font-weight-bold">#42536J</span></h6> <br>
                    <h6 style="display: inline-block;">Order Name: <span class="text-primary font-weight-bold">chris Embarambamba</span></h6>

                </div>
                <div class="d-flex flex-column text-sm-right">
                    <p class="mb-0">Expected to arrive on: <span class="font-weight-bold">06/09/21</span></p>
                </div>
                
            </div> <!-- Add class 'active' to progress -->
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <ul id="progressbar" class="text-center">
                        <li class="active step0"></li>
                        <li class="active step0"></li>
                        <li class="active step0"></li>
                        <li class="step0"></li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-between top">
                <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Processed</p>
                    </div>
                </div>
                <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Shipped</p>
                    </div>
                </div>
                <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">En Route</p>
                    </div>
                </div>
                <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Arrived</p>
                    </div>
                </div>


                
            </div>

        
              <div class="container notepad">
                <div class="mb-3">
                    <label for="textarea" class="form-label">Order Notebook</label>
                    <textarea class="form-control" id="textarea" rows="2" placeholder="Leave a note"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary mb-3">ADD NOTE</button>

                  </div>
              </div>
        </div>
    </div>

    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>


  </body>
</html>