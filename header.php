<!DOCTYPE html>
<html lang="en">
<head>
  <title>mitgsl</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="artCss/styleArtsansar.css">
  <link rel="stylesheet" type="text/css" href="/style/artistofweek.css"> <!-- for artistof week css -->
  <link rel="stylesheet" type="text/css" href="artistWeek.css">
  <link rel="stylesheet" type="text/css" href="cart.css">

</head>


<header class="row">

      <div class="col-md-4">
      <h4 style="text-align: center;"> Art Sansar</h4>
    </div>
<!-- above search right side -->


    <div class= "col-md-4">
      <form action="/hms/accommodations" method="GET"> 
        <div class="row">
         <!--  <div class="col-xs-12 col-md-4"> -->
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search here.." id="txtSearch"/>
              <div class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </div>
            </div>
         <!--  </div> -->
        </div>
      </form>
    </div>
<!--     above search box -->



  <div class= "col-md-4 " >

  <ul class= "nav navbar-nav  navbar-right" >
        <li id="noeffect"> <a href="artistpage.html" style="color:white"><span class="glyphicon glyphicon-profile"></span> My Profile</a></li>
        <li id="noeffect"> <a href="#" style="color:white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li id="noeffect"><a href="#" style="color:white"><span class="glyphicon glyphicon-sign-up"></span> Sign Up</a></li>
        <li id="noeffect"><a href="cart.html" style="color:white"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
</ul>
        </div>

 </header>
 <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <!-- <a class="navbar-brand" href="#brand"><img src="#" class="logo" alt=""></a >-->
        </div>
        <!-- End Header Navigation -->



        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-center">
                <li><a href="home.html">Home</a></li>                    
                <li><a href="artist.html">Artist</a></li>


                    <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Catagories <b class="caret"></b></a>

                    <ul class="dropdown-menu" >
                        <li><a href="painting.html" >Painting</a></li>
                        <li><a href="sketching.html">Sketching</a></li>
                        <li><a href="papercrafts.html">Paper Crafts</a></li>
                    </ul>
                </li>
                <li><a href="customizeArt.html">Customized Art</a></li>
                <li><a href="about.html">About Us</a></li>
            </ul>



        </div><!-- /.navbar-collapse -->
    </div>   

</nav>

</html>