<?php

  

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TURF! Store</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Be Vietnam' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>

</head>
<body>

  <div class="image"></div>

  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Store</h1>
        <div class="list-group">
          <span class="list-group-item active">Terms</span>
          <span class="list-group-item terms">Products are <b>non-refundable</b></span>
          <span class="list-group-item terms">Products can <b>not</b> be transfered to other accounts</span>
          <span class="list-group-item terms">Breaking our rules could result in <b>removal of product</b></span>
        </div>
        
        <div class="list-group">
          <span class="list-group-item active">Recent Purchases</span>
          <span class="list-group-item purchases"><img src="img/profile.png" class="profile-img"><b class="crop">Username</b><span class="date" id="purchaseDate">Today 18:05</span>
            <br>Product</span>
          <span class="list-group-item purchases"><img src="img/profile.png" class="profile-img"><b class="ellipsis">Username</b><span class="date">Today 11:25</span>
            <br>Product</span>
          <span class="list-group-item purchases"><img src="img/profile.png" class="profile-img"><b class="ellipsis">Username</b><span class="date">Sunday 19:09</span>
            <br>Product</span>
          <span class="list-group-item purchases"><img src="img/profile.png" class="profile-img"><b class="ellipsis">Username</b><span class="date">Sunday 19:09</span>
            <br>Product</span>
        </div>

      </div>
      <div class="col-lg-9">
        <br>
        <div class="row">
          <div class="col-lg-5 col-md-6 mb-3">
            <div class="card h-100">
              <img class="card-img-top" src="img/1month.png" alt="">
              <div class="card-body vip-body">
                <h4 class="card-title">1 Month Vip <span class="badge badge-secondary">$2,90</span></h4>
                <ul>
                  <li>Damage indicators</li>
                  <li>Reserved slot</li>
                  <li>Votekick & votemap</li>
                  <li>Radio commands</li>
                  <li>Clan & chattag</li>
                  <li>Discord role</li>
                </ul>
              </div>
              <div class="card-footer">
                <center><button type="button" class="btn paypal">Buy with <span class="fa fa-paypal"></span> Paypal</button></center>
                <!--<button type="button" class="btn creditcard">Buy with <i class="fa fa-credit-card"></i></button>-->
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-6 mb-3">
            <div class="card h-100">
              <img class="card-img-top" src="img/permanent.png" alt="">
              <div class="card-body vip-body">
                <h4 class="card-title">Lifetime Vip <span class="badge badge-secondary">$29,90</span></h4>
                <ul>
                  <li>Damage indicators</li>
                  <li>Reserved slot</li>
                  <li>Votekick & votemap</li>
                  <li>Radio commands</li>
                  <li>Clan & chattag</li>
                  <li>Discord role</li>
                </ul>
              </div>
              <div class="card-footer">
                <center><button type="button" class="btn paypal">Buy with <span class="fa fa-paypal"></span> Paypal</button></center>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-6 mb-3">
            <div class="card h-100">
              <img class="card-img-top" src="img/ingameunban.png" alt="">
              <div class="card-body">
                <h4 class="card-title">In-game unban <span class="badge badge-secondary">$9,90</span></h4>
                <ul>
                  <li>We will unban your account from all our in-game servers.</li>
                </ul>
              </div>
              <div class="card-footer">
                <center><button type="button" class="btn paypal">Buy with <span class="fa fa-paypal"></span> Paypal</button></center>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-6 mb-3">
            <div class="card h-100">
              <img class="card-img-top" src="img/discordunban.png" alt="">
              <div class="card-body">
                <h4 class="card-title">Discord unban <span class="badge badge-secondary">$9,90</span></h4>
                <ul>
                  <li>We will unban your account from our Discord server.</li>
                </ul>
              </div>
              <div class="card-footer">
                <center><button type="button" class="btn paypal">Buy with <span class="fa fa-paypal"></span> Paypal</button></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  
    var formated_date = moment(new Date()).format('YYYY-MM-DD HH:mm');
    var today_date = moment(formated_date).calendar(null, {
      lastDay : '[Yesterday] HH:mm',
      sameDay : '[Today] HH:mm',
      nextDay : '[Tomorrow] HH:mm',
      lastWeek : '[Last] dddd [at] HH:mm',
      nextWeek : 'dddd [at] HH:mm',
      sameElse : 'L'
    });
    console.log(today_date);
    document.getElementById('purchaseDate').innerHTML = today_date;
  
  </script>

</body>
</html>
