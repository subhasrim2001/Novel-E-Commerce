<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family:Lucida, sans-serif ;
}
.topnav {
  overflow: hidden;
  background-color: #851B53;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 15px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: grey;
  color: white;
}

.topnav .icon {
  display: none;
}

.topnav a.logo {
  font-size: 25px;
  font-weight: bold;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.header-right {
    float: right;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
 #intf {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #BE1B3B;
  text-align: center;
  cursor: pointer;
  width: 30%;
  font-family:"Times New Roman", Times, serif;
  font-size: 18px;
  margin:auto;
}
div.e {
	font-size: 20px;
	background: linear-gradient(to bottom left, #00ccff 0%, #ffff99 100%);
}
div.p {
	font-size:50px;
	font-weight:bold;
	background-color:pink;
	color:brown;
	text-align:center;
}
#mySidenav a {
  position: fixed;
  right: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 16px;
  font-weight:bold;
  color: white;
  border-radius: 5px 0px 0px 5px;
  z-index: 1;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://images.immediate.co.uk/production/volatile/sites/3/2020/01/agatha-christie-books-33ea1e4.jpg?quality=90&resize=768,574");
  height: 30%;
  background-position: center;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

#mySidenav a:hover {
  right: 0;
}


#home {
  top: 120px;
  background-color: #ff5050;
}

#about {
  top: 180px;
  background-color:#00cc66;
}

#products {
  top: 240px;
  background-color: #ff5050;
}

#pages {
  top: 300px;
  background-color: #00cc66;
}

#contact {
  top: 360px;
  background-color: #ff5050;
}

div.a {
background-color:#666666;
width:100%;
text-align:center;
font-size:20px;
color:white;
}
div.b1 {
background-color:#3D3D3D;
width:100%;
text-align:center;
font-size:20px;
color:white;
}
div.c1 {
float:left;
padding:40px 0px 20px 130px;
}
div.c {
float:left;
padding:40px 0px 20px 180px;
}
div.d {
float:left;
padding:40px 20px 20px 0px;
}
div.q1 {
float:left;
padding:20px;
width:20%;
}
div.q2 {
float:left;
padding:20px;
text-align:center;
background: linear-gradient(to bottom, #0099cc 0%, #ffffcc 100%);
min-width: 700px;
}
div.q {
margin:auto;
outline:1px;
}
table#table1 th {
  border: 1px solid grey;
  background-color: yellow;
 
}
A {text-decoration: none;}

div.f {
  padding: 30px;
  margin: auto;
}

div.b {
padding:53px;
float: left;
}

.mySlides {display: none}
#intf  {
  border-radius: 5px;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #BE1B3B;
  text-align: center;
  cursor: pointer;
  width: 70%;
  font-family:"Times New Roman", Times, serif;
  font-size: 14px;
  margin:auto;
}
#intf:hover {
  opacity: 0.7;
}
div.p {
	font-size:35px;
	font-weight:bold;
	background-color:pink;
	color:brown;
	text-align:center;
}
div.s {
	font-size:18px;
	background: linear-gradient(to right, #ffffff 0%, #ffff00 100%);
	color: black;
	margin: auto;
	width: 600px;
	padding: 20px;
}
</style>
</head>

<body>
<!-- Navbar -->
<div class="topnav" id="myTopnav">
	<a href="http://localhost/package/login/hhome1.php">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSg_0rkxtmrAuZNlTg56ji2fx4qClIrF4ZAtsV_CBi9If-gdYgW&usqp=CAU" style="width:60px">
	</a>
	<a href="http://localhost/package/login/hhome1.php" class="logo aq">THE HOME OF <br>AGATHA CHRISTIE</a>
<div class="header-right">
  <a href="http://localhost/package/login/hhome1.php" class="active"><br>Home</a>
  <a href="http://localhost/package/login/about.php"><br>About</a>
  <a href="http://localhost/package/login/product.php"><br>Products</a>
  <div class="dropdown">
    <button class="dropbtn"><br>Pages 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      	<a href="http://localhost/package/login/login.php" target="_blank">Login</a>
		<a href="http://localhost/package/login/signup.php" target="_blank">Sign Up</a>
		<a href="index.php?logout=1" target="_blank">Signout</a>
		<a href="http://localhost/package/cart/public/" target="_blank">Shop Now</a>
    </div>
  </div>  
  <a href="http://localhost/package/login/contactus/index.php" target="_blank"><br>Contact</a>
	<?php
		if(isset($_SESSION['id'])): ?>
		
		<h3 style="color:white;"> Welcome, <?php echo $_SESSION['username']; ?></h3>
		
	<?php endif; ?>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>

<!--Sidenav bar-->
<div id="mySidenav" class="sidenav">
  <a href="http://localhost/package/login/hhome1.php" id="home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
  <a href="http://localhost/package/login/about.php" id="about">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About</a>
  <a href="http://localhost/package/login/product.php" id="products">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Products</a>
  <a href="http://localhost/package/cart/public/" target="_blank" id="pages">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ShopNow</a>
  <a href="http://localhost/package/login/contactus/index.php" target="_blank" id="contact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</a>
</div>

<br>
<div class="p">
	The Top Five Miss Marple Novels
</div>
<br><br>
<div class="s">
	Are you looking for a great Miss Marple mystery to read? Here are our<br>
	introductions to the top five Miss Marple mysteries!<br><br>

<b><i>The Body in the Library</i></b>
<br><br>
The Bantrys’ morning gets off to a shocking start when a corpse is <br>
discovered in their St. Mary Mead home – a glamorous blonde woman <br>
has been strangled. Faced with a scandal that could make them pariahs<br>
 in the village, Dolly Bantry calls the one woman who can save them: her<br>
 dear friend Miss Marple. But what do a stolen car, a suspicious adoption,<br>
 and a shady entertainment business have to do with the crime? It’s up to<br>
 Miss Marple to unravel the secrets and lies, and solve the case before <br>
 another innocent life is lost.<br><br>
 
 <b><i>The Moving Finger</i></b>
<br><br>
Lymstock used to be such a quiet, peaceful village. Then the poison pen<br>
 letters started, accusing the residents of all sorts of scandalous<br>
 behaviour. Most people laughed them off … until one woman took poison<br>
 after receiving one, making the village wonder if maybe, just maybe, <br>
 there was something to these wild accusations after all. Fortunately, Miss<br>
 Marple comes to town, and she devises a plan to catch a killer…<br><br>

<b><i>Sleeping Murder</i></b>
<br><br>
When New Zealander Gwenda Reed moves to southern England with her <br>
new husband, she is excited to start a new life in the countryside, and is<br>
 drawn to a house that seems oddly familiar to her. As time passes, <br>
 Gwenda discovers hidden secrets in the house that awaken a disturbing<br>
 sense of déjà vu, and a trip to the theatre stirs a horrible vision of a<br>
 strangled woman. Is it all just a nightmare? Is Gwenda ill, as she fears?<br>
 Miss Marple doesn’t think so, and has a theory as to what really happened.<br><br>

<b><i>A Murder is Announced</i></b>
<br><br>
One wouldn’t think that a killer would advertise an upcoming crime in the <br>
local newspaper, but the village of Chipping Cleghorn is surprised to see<br>
 an advertisement inviting them to a murder. The villagers, recovering <br>
 from the fallout of WWII, assume that it’s all a diverting party game! <br>
 When the appointed time comes, the lights go out and real bullets fly. A<br>
 masked man lies dead, but was he the intended victim? It’s going to take<br>
 a genius to sort the truth from the lies and figure out who’s behind a <br>
 mounting body count. Fortunately, Miss Marple has just arrived in town!<br><br>

<b><i>A Pocket Full of Rye</i></b>
<br><br>
"Sing a song of sixpence, a pocket full of rye". So the nursery rhyme goes.<br>
 And when businessman Rex Fortescue is found dead in his office with rye <br>
 grains in his pocket, the situation is highly suspicious. After a former maid <br>
 of Miss Marple’s becomes mixed up in the affair, the beloved sleuth gets <br>
 to work, befriending the murder victim’s family to get closer to the case.<br>
 Miss Marple has never been so driven to bring a murderer to justice, <br>
 because this time it’s personal…<br><br>
 
 </div>
 <br>
<br>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-pink" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-pink w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="http://localhost/package/login/hhome1.php" target="_self">AC Association</a></p>
  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-pink w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="http://localhost/package/login/topfive.php"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

</body>
</html>
 