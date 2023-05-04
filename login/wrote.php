<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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
body, html {
  height: 100%;
  margin: 0;
  font-family:Lucida, sans-serif ;
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
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS0W8Y5uR9voqJQ4llx79tN1lB7uRgzMITHKI4wjsp2ZMGDGA2s&usqp=CAU");
  height: 35%;
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
#qwe {
float: right;
}
div.j {
width:50%;
margin:auto;
background: linear-gradient(to bottom, #ff99cc 0%, #ffffcc 100%);
padding:10px;
text-align: center;
font-size:18px;
}
div.s {
width:50%;
margin:auto;
background: linear-gradient(to top right, #cc33ff 0%, #ffffcc 100%);
padding:20px;
font-size:18px;
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
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">HOW CHRISTIE WROTE</h1>
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
<div class="j">
<b><i>Plots come to me at such odd moments, when I am walking along the street, or examining a hat shop...suddenly a splendid idea comes into my head. </i></b>
<br><br>
<center>- Agatha Christie, An Autobiography</center>
</div>
<br><br>
<div class="s">
Spending most of her time with imaginary friends, Agatha Clarissa Miller’s unconventional childhood fostered an extraordinary imagination. Against her mother’s wishes, she taught herself to read and had little or no formal education until the age of fifteen or sixteen when she was sent to a finishing school in Paris.<br><br>

Agatha Christie always said that she had no ambition to be a writer although she made her debut in print at the age of eleven with a poem printed in a local London newspaper. Finding herself in bed with influenza, her mother suggested she write down the stories she was so fond of telling. And so a lifelong passion began. By her late teens she had had several poems published in The Poetry Review and had written a number of short stories. But it was her sister’s challenge to write a detective story that would later spark what would become her illustrious career.<br><br>

Agatha Christie wrote about the world she knew and saw, drawing on the military gentlemen, lords and ladies, spinsters, widows and doctors of her family’s circle of friends and acquaintances. She was a natural observer and her descriptions of village politics, local rivalries and family jealousies are often painfully accurate. Mathew Prichard describes her as a “person who listened more than she talked, who saw more than she was seen.”<br><br>

The most everyday events and casual observations could trigger the idea for a new plot. Her second book The Secret Adversary stemmed from a conversation overheard in a tea shop: “Two people were talking at a table nearby, discussing somebody called Jane Fish… That, I thought, would make a good beginning to a story — a name overheard at a tea shop — an unusual name, so that whoever heard it remembered it. A name like Jane Fish, or perhaps Jane Finn would be even better.”<br><br>

And how were these ideas turned into novels? She made endless notes in dozens of notebooks, jotting down erratic ideas and potential plots and characters as they came to her “I usually have about half a dozen (notebooks) on hand and I used to make notes in them of ideas that struck me, or about some poison or drug, or a clever little bit of swindling that I had read about in the paper”.<br><br>

Of the more than one hundred notebooks that must have existed, 73 have survived and John Curran’s detailed and thorough analysis provides a veritable treasure trove of revelations about her stories and how they evolved (see Agatha Christie’s Secret Notebooks). The notebooks themselves include previously unpublished material and are an intriguing look into her mind and craft. The seeds for several stories are easily identified. In 1963 a notebook held details of a plot in development: “West Indian book – Miss M? Poirot . . . B & E apparently devoted – actually B and G (Georgina) had affair for years . . . old ‘frog’ Major knows – has seen him before – he is killed”<br><br>

A Caribbean Mystery was published in 1964 with the “Old Frog” as the novel’s first victim. The Caribbean island is beautifully described and was probably based on St. Lucia, an island that Christie had visited on holiday. But many of the hundreds of plots and red herrings from her fertile imagination never actually made it into print and as she herself said: “Nothing turns out quite in the way that you thought it would when you are sketching out notes for the first chapter, or walking about muttering to yourself and seeing a story unroll.”<br><br>

She spent the majority of time with each book working out all the plot details and clues in her head or her notebooks before she actually started writing. Her son-in-law Anthony Hicks once said: “You never saw her writing”, she never “shut herself away, like other writers do.”<br><br>

As grandson Mathew Prichard explains, “she then used to dictate her stories into a machine called a Dictaphone and then a secretary typed this up into a typescript, which my grandmother would correct by hand. I think that, before the war, before Dictaphones were invented, she probably used to write the stories out in longhand and then somebody used to type them. She wasn’t very mechanical, she wrote in a very natural way and she wrote very quickly. I think a book used to take her, in the 1950s, just a couple of months to write and then a month to revise before it was sent off to the publishers. Once the whole process of writing the book had finished then sometimes she used to read the stories to us after dinner, one chapter or two chapters at a time. I think we were used as her guinea pigs at that stage; to find out what the reaction of the general public would be. Of course, apart from my family, there were usually some other guests here and reactions were very different. Only my mother always knew who the murderer was, the rest of us were sometimes successful and sometimes not. My grandfather was usually asleep for most of the time that these stories were read but the rest of us were usually very attentive. It was a lovely family occasion and then a couple of months later we would see these stories in the bookshops.”<br><br>
</div>
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
    <a class="w3-button w3-theme" href="http://localhost/package/login/wrote.php"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>
</body>
</html>