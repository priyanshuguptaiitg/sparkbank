<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png" />
  <link rel="manifest" href="/fav/site.webmanifest" />
  <link rel="mask-icon" href="/fav/safari-pinned-tab.svg" color="#5bbad5" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <title>Basic Banking System</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light">
    <a class="navbar-brand" href="index.php" style="color:#C0392B;"> <b>SPARK BANK</b> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><span class="navbar-toggler-icon"></span></button>
    <a class="navbar-brand" href="index.php" style="color:#C0392B;"> Don't just save money, grow it too! </a>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link active" href="index.php" style="color : #C0392B;"><b>Home</b></a></li>
        <li class="nav-item"><a class="nav-link" href="php/createuser.php" style="color : #C0392B;"><b>Create</b></a></li>
        <li class="nav-item"><a class="nav-link" href="php/transfermoney.php" style="color : #C0392B;"><b>Transfer</b></a></li>
        <li class="nav-item"><a class="nav-link" href="php/transactionhistory.php" style="color : #C0392B;"><b>History</b></a></li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row intro py-1" style="background-color:cornflowerblue;">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h1>Welcome to <br> <big> SPARK BANK </big> <br> <small>Tomorrow starts today !!</small></h1>
        </div>
      </div>
      <div class="col-sm-12 col-md img text-center">
        <img src="img/bank2.png" class="img-fluid pt-2" style="margin-top:25px;padding:5px;width:30%">
      </div>
    </div><br>
    <div class="row activity text-center">
      <div class="col-md act">
        <a href="php/createuser.php"><button style="background-color : #2785C4;">Create a User</button></a><br>
        <img src="img/user.jpg" class="img-fluid">
      </div>
      <div class="col-md act">
        <a href="php/transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a><br>
        <img src="img/transfer.jpg" class="img-fluid">
      </div>
      <div class="col-md act">
        <a href="php/transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a><br>
        <img src="img/history.jpg" class="img-fluid">
      </div>
    </div>
  </div>
  <footer class="text-center mt-5 py-2"><b>&copy Priyanshu Gupta, 2021</b></footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
