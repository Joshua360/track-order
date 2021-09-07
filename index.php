<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Order Form</title>
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
                    <!-- <li class="nav-item">
                      <a class="nav-link active" href="option-a.php">Order Status</a>
                    </li> -->

                    <li class="nav-item">
                      <a class="nav-link active" href="submit_data.php">Submit Data</a>
                    </li>
                    
                   
                    
                  </ul>
                 
                </div>
              </div>
        </div>
      </nav>




      <div class="container order-wrap">
        <h2>Track Your Order Now</h2>
        <form class="row g-3" method="post" action="includes/track.php">
            
            <div class="col-auto">
              <label for="ordernumber" class="visually-hidden">Order Number</label>
              <input name="checkOrder" type="text" class="form-control" id="ordernumber" placeholder="Enter order number">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">Track Now</button>
            </div>
          </form>
    </div>

 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


  </body>
</html>