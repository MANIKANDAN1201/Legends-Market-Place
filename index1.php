<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Books">
    <meta name="author" content="Shivangi Gupta">
    <title>Legends Market Place</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
    <style>
     body {
    background-color: white;
    color: black; /* Change text color to black */
}

.modal-header {
    background: #D67B22;
    color: #D67B22;
    font-weight: 800;
}

.modal-body {
    font-weight: 800;
}

.modal-body ul {
    list-style: none;
}

.modal .btn {
    background: #D67B22;
    color: #fff;
}

.modal a {
    color: #D67B22;
}

.modal-backdrop {
    position: inherit !important;
}

#login_button,
#register_button {
    background: none;
    color: #D67B22 !important;
}

#query_button {
    position: fixed;
    right: 0px;
    bottom: 0px;
    padding: 10px 80px;
    background-color: #D67B22;
    color: #fff;
    border-color: #f05f40;
    border-radius: 2px;
}

@media (max-width: 767px) {
    #query_button {
        padding: 5px 20px;
    }
}
.book-block {
        position: relative;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .book-block:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .book-block .tag {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #D67B22;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 12px;
    }

    .book-block .tag-side {
        position: absolute;
        top: 10px;
        left: 10px;
    }

    .book-block img.book {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto; /* Center align */
    }

    .book-block hr {
        border-color: #ddd;
        margin: 10px 0;
    }

    .book-block .price {
        font-weight: bold;
        color: #333;
    }

    .book-block .discount {
        color: #F08080; /* Light coral */
    }

#bannerimage {
    width: 100%;
    background-image: url(img/bookbackgrd.jpg);
    height: 405px;
    background-color: white;
    background-position: center;
}
#aboutus {
    padding: 40px 0; /* Adjust as needed */
}

#aboutus h2 {
    font-size: 36px;
    font-weight: bold;
    color: #333; /* Adjust text color */
}

#aboutus p {
    font-size: 18px;
    line-height: 1.6;
    color: #666; /* Adjust text color */
}

/* Additional styles to make it more attractive */
#aboutus {
    background-color: #add8e6; /* Background color */
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Box shadow for depth */
}

#aboutus h2 {
    margin-bottom: 20px; /* Space between heading and paragraph */
}

#aboutus p {
    margin-bottom: 0; /* Remove default margin */
}
/* Custom styles */
h1.display-4 {
    color: #333; /* Adjust text color */
    font-weight: bold;
}

p.lead {
    color: #666; /* Adjust text color */
}

h2.h4 {
    color: #555; /* Adjust text color */
    font-weight: bold; /* Adjust
}

.carousel-inner .item img {
        width: 100%;
        height: auto;

        max-height: 500px;
        object-fit: cover; 
    }


.text {
    color: black; /* Change text color to black */
    font-size: 30px;
    font-weight: 800;
    text-align: center;
    line-height: 40px;
}
</style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="padding: 1px;"><img class="img-responsive" alt="Brand" src="img/logo.jpg"  style="width: 147px;margin: 0px;"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav navbar-right">

<!-- <?php 
        if(!isset($_SESSION['user11']))
          {
            echo'
            <li> <a href="index.php" class="btn btn-lg" >Home </a> </li>
            <li> <a href="#shop" class="btn btn-lg" > Shop</a> </li>
                    <li> <a href="cart.php" class="btn btn-lg"> Cart </a> </li>; 
                    <li> <a href="destroy.php" class="btn btn-lg"> Logout</a> </li>';

          }
          else
          {   echo' <li> <a href="#" class="btn btn-lg"> Hello ' .$_SESSION['user11']. '</a></li>
            <li> <a href="#aboutus" class="btn btn-lg" > About us </a> </li>
            <li> <a href="#shop" class="btn btn-lg" > Shop</a> </li>
                    <li> <a href="cart.php" class="btn btn-lg"> Cart </a> </li>; 
                    <li> <a href="destroy.php" class="btn btn-lg"> LogOut </a> </li>';
          }
               
          ?>-->
<li> <a href="index.php" class="btn btn-lg"> Home </a> </li>';
<li> <a href="#aboutus" class="btn btn-lg" > About us </a> </li>
            <li> <a href="#shop" class="btn btn-lg" > Shop</a> </li>
                    <li> <a href="cart.php" class="btn btn-lg"> Cart </a> </li>; 
                    <li> <a href="destroy.php" class="btn btn-lg"> LogOut </a> </li>';

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  <div id="top" >
      <div id="searchbox" class="container-fluid" style="width:112%;margin-left:-6%;margin-right:-6%;">
          <div>
              <form role="search" method="POST" action="Result.php">
                  <input type="text" class="form-control" name="keyword" style="width:80%;margin:20px 10% 20px 10%;" placeholder="Search for a Book , Author Or Category">
              </form>
          </div>
        <div id="bannerimage" style="text-align: center;">
    <div class="container">
        <div id="banner_content" style="margin-top: 150px;">
            <h1 style="color: white; font-size: 48px; font-weight: bold;">Discover. Read. Connect.</h1>
            <p style="color: white; font-size: 24px;">Where books come to life.</p>
        </div>
    </div>
</div>

      <div class="container-fluid" id="header">
          <div class="row">
              <div class="col-md-3 col-lg-3" id="category">
                  <div style="background:#D67B22;color:#fff;font-weight:800;border:none;padding:15px;"> The Book Shop </div>
                  <ul>
                      <li> <a href="Product.php?value=entrance%20exam"> Entrance Exam </a> </li>
                      <li> <a href="Product.php?value=Literature%20and%20Fiction"> Literature & Fiction </a> </li>
                      <li> <a href="Product.php?value=Academic%20and%20Professional"> Academic & Professional </a> </li>
                      <li> <a href="Product.php?value=Biographies%20and%20Auto%20Biographies"> Biographies & Auto Biographies </a> </li>
                      <li> <a href="Product.php?value=Children%20and%20Teens"> Children & Teens </a> </li>
                      <li> <a href="Product.php?value=Regional%20Books"> Regional Books </a> </li>
                      <li> <a href="Product.php?value=Business%20and%20Management"> Business & Management </a> </li>
                      <li> <a href="Product.php?value=Health%20and%20Cooking"> Health and Cooking </a> </li>

                  </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                          <li data-target="#myCarousel" data-slide-to="4"></li>
                          <li data-target="#myCarousel" data-slide-to="5"></li>
                      </ol>
                      
                        <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                          <div class="item active">
                            <img class="img-responsive" src="img/carousel/1.jpg">
                          </div>

                          <div class="item">
                            <img  class="img-responsive "src="img\carousel\greekmeth (1).jpg" class="d-block w-100 vh-50">
                          </div>

                          <div class="item">
                            <img class="img-responsive" src="img/carousel/3.jpg">
                          </div>

                          <div class="item">
                            <img class="img-responsive"src="img/carousel/4.jpg">
                          </div>

                          <div class="item">
                            <img class="img-responsive" src="img/carousel/5.jpg">
                          </div>

                          <div class="item">
                            <img class="img-responsive" src="img/carousel/6.jpg">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-lg-3" id="offer">
                  <a href="Product.php?value=Regional%20Books">              <img class="img-responsive center-block" src="img/offers/1.png"></a>
                  <a href="Product.php?value=Health%20and%20Cooking">        <img class="img-responsive center-block" src="img/offers/2.png"></a>
                  <a href="Product.php?value=Academic%20and%20Professional"> <img class="img-responsive center-block" src="img/offers/3.png"></a>
              </div>
          </div>
      </div>
  </div>
<div class="container">
    <div class="row" style="margin-top: 80px;" id="aboutus">
        <div class="col-xs-12 text-center">
            <h2>About Us</h2>
            <p>Welcome to Legends Marketplace!

At Legends Marketplace, we are passionate about bringing the fascinating world of Greek mythology to life. Our site offers a rich blend of educational content, engaging blogs, and a marketplace for unique mythological merchandise.

Explore the legends, immerse yourself in ancient tales, and find exclusive items inspired by the gods and heroes of Greek mythology.

Thank you for joining us on this mythical journey!</p>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-xs-12 text-center">
            <h1 style="text:bold"class="display-4">Welcome to Legends Market Place</h1>
            <p class="lead">Explore our vast collection of books</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-xs-12 text-center">
            <h2 id="shop"class="h4">Our Collection</h2>
        </div>
    </div>
</div>

  <div class="container-fluid text-center" id="new">
      <div class="row">
          <div class="col-sm-6 col-md-3 col-lg-3">
    <a href="description.php?ID=NEW-2&category=new">
        <div class="book-block">
            <div class="tag">New</div>
            <div class="tag-side"><img src="img/tag.png" alt="Tag"></div>
            <img class="book img-responsive" src="img\Atalanta.jpg" alt="Book Image">
            <hr>
            <div class="book-details">
                <p>Atlanta</p>
                <p class="price">Rs 113</p>
                <p class="discount">
                    <span style="text-decoration: line-through;">Rs 175</span>
                    <span class="label label-warning">35%</span>
                </p>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3 col-lg-3">
    <a href="description.php?ID=NEW-2&category=new">
        <div class="book-block">
            <div class="tag">New</div>
            <div class="tag-side"><img src="img/tag.png" alt="Tag"></div>
            <img class="book img-responsive" src="img\Clytemnestra.jpg" alt="Book Image">
            <hr>
            <div class="book-details">
                <p>Clytemnestra</p>
                <p class="price">Rs 68</p>
                <p class="discount">
                    <span style="text-decoration: line-through;">Rs 100</span>
                    <span class="label label-warning">43%</span>
                </p>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3 col-lg-3">
    <a href="description.php?ID=NEW-2&category=new">
        <div class="book-block">
            <div class="tag">New</div>
            <div class="tag-side"><img src="img/tag.png" alt="Tag"></div>
            <img class="book img-responsive" src="img\Antigoddess.jpg" alt="Book Image">
            <hr>
            <div class="book-details">
                <p>Antigoddess</p>
                <p class="price">Rs 100</p>
                <p class="discount">
                    <span style="text-decoration: line-through;">Rs 150</span>
                    <span class="label label-warning">30%</span>
                </p>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3 col-lg-3">
    <a href="description.php?ID=NEW-2&category=new">
        <div class="book-block">
            <div class="tag">New</div>
            <div class="tag-side"><img src="img/tag.png" alt="Tag"></div>
            <img class="book img-responsive" src="img\The-Odyssey-by-Homerjpg.jpg" alt="Book Image">
            <hr>
            <div class="book-details">
                <p>The-Odyssey-by-Homer</p>
                <p class="price">Rs 289</p>
                <p class="discount">
                    <span style="text-decoration: line-through;">Rs 435</span>
                    <span class="label label-warning">33%</span>
                </p>
            </div>
        </div>
    </a>
</div>
      </div>
  </div>
  
 

        <div class="container-fluid text-center" id="new">
      <div class="row">
          <div class="col-sm-6 col-md-3 col-lg-3">
           <a href="description.php?ID=NEW-1&category=new">
              <div class="book-block">
                  <div class="tag">New</div>
                  <div class="tag-side"><img src="img/tag.png"></div>
                  <img class="book block-center img-responsive" src="img\Atalanta.jpg">
                  <hr>
                  Atalanta<br>
                  Rs 113  &nbsp
                  <span style="text-decoration:line-through;color:#828282;"> 175 </span>
                  <span class="label label-warning">35%</span>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
           <a href="description.php?ID=NEW-2&category=new">
              <div class="book-block">
                  <div class="tag">New</div>
                  <div class="tag-side"><img src="img/tag.png"></div>
                  <img class="block-center img-responsive" src="img\Clytemnestra.jpg">
                  <hr>
                  Clytemnestra<br>
                  Rs 68 &nbsp
                  <span style="text-decoration:line-through;color:#828282;"> 120 </span>
                  <span class="label label-warning">43%</span>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
           <a href="description.php?ID=NEW-3&category=new">
              <div class="book-block">
                  <div class="tag">New</div>
                  <div class="tag-side"><img src="img/tag.png"></div>
                  <img class="block-center img-responsive" src="img\Antigoddess.jpg">
                  <hr>
                  Antigoddess<br>
                  Rs 400 &nbsp
                  <span style="text-decoration:line-through;color:#828282;"> 595 </span>
                  <span class="label label-warning">33%</span>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
           <a href="description.php?ID=NEW-4&category=new">
              <div class="book-block">
                  <div class="tag">New</div>
                  <div class="tag-side"><img src="img/tag.png"></div>
                  <img class="block-center img-responsive" src="img\The-Odyssey-by-Homerjpg.jpg">
                  <hr>
                  The-Odyssey-by-Homer<br>
                  Rs 289 &nbsp
                  <span style="text-decoration:line-through;color:#828282;"> 435 </span>
                  <span class="label label-warning">33%</span>
              </div>
            </a>
          </div>
      </div>
  </div>
  <div class="row mt-5">
        <div class="col-xs-12 text-center">
            <h2 class="h4">Articrafts</h2>
        </div>
    </div>
</div>
  <div class="container-fluid text-center" id="new">
      <div class="row">
          <div class="col-sm-6 col-md-3 col-lg-3">
           <a href="description.php?ID=NEW-1&category=new">
              <div class="book-block">
                  <div class="tag">New</div>
                  <div class="tag-side"><img src="img/tag.png"></div>
                  <img class="book block-center img-responsive" src="img\articrafts\articrafts1.jpg">
                  <hr>
                  Greek red figure pottery  <br>
                  Rs 100,000 &nbsp
                  <span style="text-decoration:line-through;color:#828282;"> 175,000 </span>
                  <span class="label label-warning">35%</span>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
           <a href="description.php?ID=NEW-2&category=new">
              <div class="book-block">
                  <div class="tag">New</div>
                  <div class="tag-side"><img src="img/tag.png"></div>
                  <img class="block-center img-responsive " src="img\articrafts\articrafts2.jpg">
                  <hr>
                  Greek Athenian black figure lekythos<br>
                  Rs 680,000&nbsp
                  <span style="text-decoration:line-through;color:#828282;"> 120,000 </span>
                  <span class="label label-warning">43%</span>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
           <a href="description.php?ID=NEW-3&category=new">
              <div class="book-block">
                  <div class="tag">New</div>
                  <div class="tag-side"><img src="img/tag.png"></div>
                  <img class="block-center img-responsive" src="img\articrafts\articrafts3.jpg">
                  <hr>
                  Greek Argive early pottery figure of Hera<br>
                  Rs 400,000 &nbsp
                  <span style="text-decoration:line-through;color:#828282;"> 595,000 </span>
                  <span class="label label-warning">33%</span>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
           <a href="description.php?ID=NEW-4&category=new">
              <div class="book-block">
                  <div class="tag">New</div>
                  <div class="tag-side"><img src="img/tag.png"></div>
                  <img class="block-center img-responsive" src="img\articrafts\articrafts4.jpg">
                  <hr>
                  Cretan Daedalic pottery goddess plaque
                  <br>
                  Rs 289,000 &nbsp
                  <span style="text-decoration:line-through;color:#828282;"> 435,000 </span>
                  <span class="label label-warning">33%</span>
              </div>
            </a>
          </div>
      </div>
  </div>
   

  <footer style="margin-left:-6%;margin-right:-6%;">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-1 col-md-1 col-lg-1">
              </div>
              <div class="col-xs-12 text-center">
    <h2>Let's Get In Touch!</h2>
    <hr class="primary;">
    <p>Still Confused? Give us a call or send us an email and we will get back to you as soon as possible!</p>
</div>
                  <div class="row">
                      <div class="col-md-6 text-center">
                          <span class="glyphicon glyphicon-earphone"></span>
                          <p>123-456-6789</p>
                      </div>
                      <div class="col-md-6 text-center">
                          <span class="glyphicon glyphicon-envelope"></span>
                          <p>BookStore@gmail.com</p>
                      </div>
                  </div>
              </div>
              <div class="hidden-sm-down col-md-2 col-lg-2">
              </div>
              <div class="col-sm-4 col-md-3 col-lg-3 text-center">
                  <h2 style="color:#D67B22;">Follow Us At</h2>
                  <div>
                      <a href="https://twitter.com/strandbookstore">
                      <img title="Twitter" alt="Twitter" src="img/social/twitter.png" width="35" height="35" />
                      </a>
                      <a href="https://www.linkedin.com/company/strand-book-store">
                      <img title="LinkedIn" alt="LinkedIn" src="img/social/linkedin.png" width="35" height="35" />
                      </a>
                      <a href="https://www.facebook.com/strandbookstore/">
                      <img title="Facebook" alt="Facebook" src="img/social/facebook.png" width="35" height="35" />
                      </a>
                      <a href="https://plus.google.com/111917722383378485041">
                      <img title="google+" alt="google+" src="img/social/google.jpg" width="35" height="35" />
                      </a>
                      <a href="https://www.pinterest.com/strandbookstore/">
                      <img title="Pinterest" alt="Pinterest" src="img/social/pinterest.jpg" width="35" height="35" />
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </footer>

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" id="query_button" class="btn btn-lg" data-toggle="modal" data-target="#query">Ask query</button>
  <!-- Modal -->
  <div class="modal fade" id="query" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header text-center">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Ask your query here</h4>
          </div>
          <div class="modal-body">           
                    <form method="post" action="query.php" class="form" role="form">
                        <div class="form-group">
                             <label class="sr-only" for="name">Name</label>
                             <input type="text" class="form-control"  placeholder="Your Name" name="sender" required>
                        </div>
                        <div class="form-group">
                             <label class="sr-only" for="email">Email</label>
                             <input type="email" class="form-control" placeholder="abc@gmail.com" name="senderEmail" required>
                        </div>
                        <div class="form-group">
                             <label class="sr-only" for="query">Message</label>
                             <textarea class="form-control" rows="5" cols="30" name="message" placeholder="Your Query" required></textarea>
                        </div>
                        <div class="form-group">
                              <button type="submit" name="submit" value="query" class="btn btn-block">
                                                              Send Query
                               </button>
                        </div>
                    </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>  
  </div>
</div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
          </body>
          </html>