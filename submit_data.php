<?php 

    include_once("includes/dbh.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Submit Data</title>
  </head>

  <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">Track Order</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="option-a.php">Order Status</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link active" href="submit_data.php">Submit Data</a>
                    </li>
                    
                   
                    
                  </ul>
                 
                </div>
              </div>
        </div>
      </nav>


      <div class="container order-wrap">
        <h2>Submit Order Data</h2>
        <form action="includes/connect.php" method="post">
            <div class="mb-3">
                <label for="orderNumber" class="form-label">Order Number</label>
                <input type="text" class="form-control" id="orderNumber" name="orderNumber">
            </div>
            <div class="mb-3">
                <label for="orderName" class="form-label">Order Name</label>
                <input type="text" class="form-control" id="orderName" name="orderName">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Expected Arrival Time</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>



            <label for="OrderStatus">Order Status</label>
            <select class="form-select" name="OrderStatus" id="OrderStatus">
                <option value="Processed">Processed</option>
                <option value="Shipped">Shipped</option>
                <option value="En Route">En Route</option>
                <option value="Arrived">Arrived</option>
            </select>
            <br>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

     







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


  </body>
</html>