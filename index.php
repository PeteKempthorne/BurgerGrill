<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<title>BURGER GRILL YEAH</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css"> 
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

<body>
<div class="container">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<div class="container-fluid">
		
		<a class="navbar-brand" href="#BurgerLink">Burger Grill</a>
		
		<div class="navbar-header"> 
		  <!-- Button that toggles the navbar on and off on small screens -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>		
		</div>
	  
		<!-- Nav links that go inside the collapsable menu when small screen or outside as normal links when not-->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a href="#OffersLink">Offers </a></li>
						<li class="nav-item"><a href="#MenuLink">Menu </a></li>
						<li class="nav-item"><a href="#AboutLink">About </a></li>
						<li class="nav-item"><a href="#ContactLink">Contact </a></li>				
				</ul>
			</div>
		</div>
	</nav>   

	
	<div class="row">
      
        <div class="col-lg-12">
		<a name="BurgerLink"></a> 
		<!-- Fluid image will resize depending on screen size. Might change or remove on small screens-->
		<img src="img/SplashBurger.jpg" class="img-fluid" alt="Yum" />
			<div class="burgContainer">
				<!-- Burger Grill text will be different sizes dependsing on screen size-->
				<div class="burgGrill d-none d-xl-block">
					<p id="xlrg1">BURGER </p> <p id="xlrg2">GRILL</p>
				</div>
				<div class="burgGrill d-none d-lg-block d-xl-none">
					<p id="lrg1">BURGER </p> <p id="lrg2">GRILL</p>
				</div>
				<div class="burgGrill d-none d-md-block d-lg-none">
					<p id="med1">BURGER </p> <p id="med2">GRILL</p>
				</div>
				<div class="burgGrill d-none d-sm-block d-md-none">
					<p id="small1">BURGER </p> <p id="small2">GRILL</p>
				</div>
				<div class="burgGrill d-block d-sm-none">
					<p id="xsmall1">BURGER </p> <p id="xsmall2">GRILL</p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="offers">
		<a name="OffersLink"></a> 
		<h3>Offers</h3>
		<hr />
		<br />
		
		<div class="row">
			<!-- Number of columns will differ depending on screen size-->
			<div class="offerWrap col col-lg-4 col-md-6 col-sm-12 col-12">				
				<img src="img/BurgerMeal.jpg" class="img-fluid" alt="Burger Meal" />
				<div class="offers-cell-text d-none d-sm-block">
					1 Million Dollar Burger Meal
				</div>
				<div class="offers-cell-text2 d-none d-sm-block">
					£5.49
				</div>	
				<!--Smallest screens needed smaller text for price and text overlays-->				
				<div class="offers-cell-text-xs d-block d-sm-none">
					1 Million Dollar Burger Meal
				</div>
				<div class="offers-cell-text2-xs d-block d-sm-none">
					£5.49
				</div>
			</div>
			<div class="offerWrap col col-lg-4 col-md-6 col-sm-12 col-12">
				<img src="img/burger_zinger.jpg" class="img-fluid" alt="Chicken Burger Meal" />	
				<div class="offers-cell-text d-none d-sm-block">
					Crazy Chicken Burger Meal
				</div>
				<div class="offers-cell-text2 d-none d-sm-block">
					£4.79
				</div>
				<div class="offers-cell-text-xs d-block d-sm-none">
					Crazy Chicken Burger Meal
				</div>
				<div class="offers-cell-text2-xs d-block d-sm-none">
					£4.79
				</div>
			</div>
			<div class="offerWrap col col-lg-4 col-md-6 col-sm-12 col-12">
				<img src="img/HotDogMeal.jpg" class="img-fluid" alt="Hot Dog Meal" />	
				<div class="offers-cell-text d-none d-sm-block">
					King Hot Dog Meal
				</div>
				<div class="offers-cell-text2 d-none d-sm-block">
					£3.49
				</div>
				<div class="offers-cell-text-xs d-block d-sm-none">
					King Hot Dog Meal
				</div>
				<div class="offers-cell-text2-xs d-block d-sm-none">
					£3.49
				</div>
			</div>
			<div class="offerWrap col col-lg-4 col-md-6 col-sm-12 col-12">
				<img src="img/burger_zinger.jpg" class="img-fluid" alt="Hot Dog Meal" />	

			</div>
			<div class="offerWrap col col-lg-4 col-md-6 col-sm-12 col-12">
				<img src="img/HotDogMeal.jpg" class="img-fluid" alt="Hot Dog Meal" />	

			</div>
			<div class="offerWrap col col-lg-4 col-md-6 col-sm-12 col-12">
				<img src="img/BurgerMeal.jpg" class="img-fluid" alt="Hot Dog Meal" />	

			</div>
		</div>					
	</div>
	
	<div id="menu">
		<a name="MenuLink"></a> 
		<h3>Menu</h3>
		<hr />

	
		<div class="row">		
			<!-- Menu goes into single column on small or extra small screens-->
			<!-- Nested grid also-->
			<div class="col col-lg-6 col-md-6 col-sm-12 col-12">	
				<div class="row">
					<div class="menu-title col col-lg-12 col-md-12 col-sm-12 col-12">
						<p>Starters</p>
					</div>
					<!-- Purposely didnt fill the 12 columns and left 1 out as I think it looks better-->
					<div class="menu-text col col-lg-9 col-md-9 col-sm-9 col-8">	
					<ul>
						<li>Prawn Cocktail</li>
						<li>Some kind of salad</li>
						<li>Cocktail de la Prawns</li>
						<li>Crisps</li>
						<li>Cocktail ou Crisps</li>
					</ul>
					</div>
					<div class="menu-price col col-lg-2 col-md-2 col-sm-2 col-3">	
						<p>£3.00</p>
						<p>£4.20</p>
						<p>£3.01</p>
						<p>£0.75</p>
						<p>£5.50</p>
					</div>
					<div class="menu-title col col-lg-12 col-md-12 col-sm-12 col-12">
						<p>Sides</p>
					</div>
					<div class="menu-text col col-lg-9 col-md-9 col-sm-9 col-8">	
					<ul>
						<li>Chips</li>
						<li>Cheesy Chips</li>
						<li>Curly Chips</li>
						<li>Onion Rings</li>
						<li>Beans</li>
						<li>Coleslaw</li>
						<li>Garlic Bread</li>
					</ul>
					</div>
					<div class="menu-price col col-lg-2 col-md-2 col-sm-2 col-3">	
						<p>£1.20</p>
						<p>£1.70</p>
						<p>£1.50</p>
						<p>£2.25</p>
						<p>£0.80</p>
						<p>£0.70</p>
						<p>£3.50</p>
					</div>
					<div class="menu-title col col-lg-12 col-md-12 col-sm-12 col-12">
						<p>Mains</p>
					</div>
					<div class="menu-text col col-lg-9 col-md-9 col-sm-9 col-8">	
					<ul>
						<li>1 Million Dollar Burger</li>
						<li>Bacon Double Cheeseburger</li>
						<li>King Hot Dog</li>
						<li>Crazy Chickenburger</li>
						<li>Omelette du Fromage</li>
						<li>Super Egg Burger</li>
						<li>Hawaiian Burger</li>
						<li>Queen Hot Dog</li>
						<li>Nuclear Burger</li>
						<li>Chicken Nuggets</li>
						<li>Sirloin Steak</li>
						<li>Scampi</li>
					</ul>
					</div>
					<div class="menu-price col col-lg-2 col-md-2 col-sm-2 col-3">	
						<p>£4.89</p>
						<p>£4.29</p>
						<p>£2.79</p>
						<p>£4.19</p>
						<p>£2.50</p>
						<p>£4.29</p>
						<p>£3.89</p>
						<p>£1.79</p>
						<p>£7.99</p>
						<p>£5.50</p>
						<p>£8.99</p>
						<p>£2.75</p>
					</div>
				</div>
			</div>
	
			<div class="col col-lg-6 col-md-6 col-sm-12 col-12">	
				<div class="row">
					<div class="menu-title col col-lg-12 col-md-12 col-sm-12 col-12">
						<p>Pizza (10 inch)</p>
					</div>
					<div class="menu-text col col-lg-9 col-md-9 col-sm-9 col-8">	
					<ul>
						<li>Margherita</li>
						<li>Ham and Pineapple</li>
						<li>Calzone</li>
						<li>Ham and Mushroom</li>
						<li>Jalpenos</li>
						<li>Chicken and Sweetcorn</li>
						<li>Doner</li>
						<li>BBQ Special</li>
						<li>Meat Feast</li>
						<li>Vegetarian Special</li>
					</ul>
					</div>
					<div class="menu-price col col-lg-2 col-md-2 col-sm-2 col-3">	
						<p>£7.29</p>
						<p>£8.49</p>
						<p>£8.49</p>
						<p>£8.49</p>
						<p>£8.49</p>
						<p>£8.49</p>
						<p>£8.49</p>
						<p>£8.49</p>
						<p>£8.49</p>
						<p>£7.69</p>
					</div>
					<div class="menu-title col col-lg-12 col-md-12 col-sm-12 col-12">
						<p>Drinks</p>
					</div>
					<div class="menu-text col col-lg-9 col-md-9 col-sm-9 col-8">	
					<ul>
						<li>Fanta</li>
						<li>Cola</li>
						<li>Sprite</li>
						<li>Water</li>
						<li>Orange Squash</li>
						<li>Slushee</li>
						<li>Banana and Strawberry Smoothie</li>
						<li>Cranberry Tea</li>
					</ul>
					</div>
					<div class="menu-price col col-lg-2 col-md-2 col-sm-2 col-3">	
						<p>£1.29</p>
						<p>£1.29</p>
						<p>£1.29</p>
						<p>£0.79</p>
						<p>£0.99</p>
						<p>£1.99</p>
						<p>£2.49</p>
						<p>£3.79</p>
					</div>
					<div class="menu-title col col-lg-12 col-md-12 col-sm-12 col-12">
						<p>Dessert</p>
					</div>
					<div class="menu-text col col-lg-9 col-md-9 col-sm-9 col-8">	
					<ul>
						<li>Ice Cream</li>
						<li>Chocolate Sunday</li>
						<li>Trifle</li>
						<li>Fruit Salad</li>
					</ul>
					</div>
					<div class="menu-price col col-lg-2 col-md-2 col-sm-2 col-3">	
						<p>£3.49</p>
						<p>£2.49</p>
						<p>£2.49</p>
						<p>£1.49</p>
					</div>
				</div>
			</div>			
		</div>
	
	</div>	


	<div id="about">
		<a name="AboutLink"></a> 
		<h3>About</h3>
		<hr />
		<br />
		<p>
			Best burgers in Bexhill and the world since 1801. All of our burgers are totally not ripped off other burger chains and they
			copied us. Everything is made with real beef even the chicken burgers and hot dogs and the drinks too!
		</p>
	</div>

	<div id="contact">
		<a name="ContactLink"></a> 
		<h3>Contact</h3>
		<hr />
		<br />
		<p>Email: <a href="mailto:BestBurgers@Burgergrill.co.uk">BestBurgers@Burgergrill.co.uk</a></p>
		<p>Phone: (01424) 666999</p>
		
	</div>

	<div id="bottom">
		<p>
		Peter Kempthorne 2018 	&copy;
		</p>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>

</body>
</html>