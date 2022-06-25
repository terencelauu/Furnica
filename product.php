<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Furnica</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="js/cart.js"></script>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<body>
	<header>
		<a href="index.php"><img src="img/logo.png" width="197" height="99" alt="img1" /></a>
		<nav>
			<ul class="nav_links">
				<li><a href="index.php">Home</a></li>
				<li><a href="product.php">Products</a></li>
				<li><a href="cart.php">Cart</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="aboutus.php">About Us</a></li>
			</ul>
		</nav>
	</header>
	<div class="content2">
		<div class="title">Products</div>
		<div class="break"></div>
		<div class="subtitle">Category</div>
		<div class="break2"></div>
		<div class="furnctg" id="ctg">
			<div><a href="#tbdk">Tables & Desks</a></div>
			<div><a href="#chairs">Chairs</a></div>
			<div><a href="#sofas">Sofas</a></div>
			<div><a href="#beds">Beds</a></div>
			<div><a href="#cab">Cabinets</a></div>
		</div>
		<div class="products">
			<div class="break"></div>
			<div class="subtitle" id="tbdk">Tables & Desks</div>
			<div class="break2"></div>
			<fieldset class="col1">
				<img src="img/furn/lagkapten-alex-desk-black-brown__1022394_pe832705_s5.png" class="img1">
				<div class="furnname">Work Desk</div>
				<div class="furnprice">
					<p>RM 400</p>
				</div>
				<button type="button" onclick="addfurn('Work Desk','400')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<fieldset class="col2">
				<img src="img/furn/ingo-table-pine__0737092_pe740877_s5.png" class="img1">
				<div class="furnname">Dining Table</div>
				<div class="furnprice">
					<p>RM 300</p>
				</div>
				<button type="button" onclick="addfurn('Dining Table','300')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<div class="break"></div>

			<div class="subtitle" id="chairs">Chairs</div>
			<div class="break2"></div>

			<fieldset class="col1">
				<img src="img/furn/kaettil-chair-white-knisa-light-grey__1016338_pe830329_s5.png" class="img1">
				<div class="furnname">Dining Chair</div>
				<div class="furnprice">
					<p>RM 70</p>
				</div>
				<button type="button" onclick="addfurn('Dining Chair','70')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<fieldset class="col2">
				<img src="img/furn/langfjaell-office-chair-gunnared-dark-grey-white__0726973_pe735474_s5.png"
					class="img1">
				<div class="furnname">Desk Chair</div>
				<div class="furnprice">
					<p>RM 90</p>
				</div>
				<button type="button" onclick="addfurn('Desk Chair','90')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<div class="break"></div>

			<div class="subtitle" id="sofas">Sofas</div>
			<div class="break2"></div>
			<fieldset class="col1">
				<img src="img/furn/landskrona-two-seat-sofa-grann-bomstad-black-wood__0320951_pe514801_s5.png"
					class="img1">
				<div class="furnname">Leather Sofa</div>
				<div class="furnprice">
					<p>RM 1050</p>
				</div>
				<button type="button" onclick="addfurn('Leather Sofa','1050')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<fieldset class="col2">
				<img src="img/furn/vinliden-3-seat-sofa-hillared-anthracite__0852750_pe780239_s5.png" class="img1">
				<div class="furnname">Fabric Sofa</div>
				<div class="furnprice">
					<p>RM 1000</p>
				</div>
				<button type="button" onclick="addfurn('Fabric Sofa','1000')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<div class="break"></div>

			<div class="subtitle" id="beds">Beds</div>
			<div class="break2"></div>
			<fieldset class="col1">
				<img src="img/furn/slattum-upholstered-bed-frame-knisa-light-grey__0768244_pe754388_s5.png"
					class="img1">
				<div class="furnname">Fabric Bed</div>
				<div class="furnprice">
					<p>RM 1000</p>
				</div>
				<button type="button" onclick="addfurn('Fabric Bed','1000')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<fieldset class="col2">
				<img src="img/furn/malm-bed-frame-high-w-2-storage-boxes-black-brown-luroey__0637597_pe698414_s5.png"
					class="img1">
				<div class="furnname">Wooden Bed</div>
				<div class="furnprice">
					<p>RM 1500</p>
				</div>
				<button type="button" onclick="addfurn('Wooden Bed','1500')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<div class="break"></div>

			<div class="subtitle" id="cab">Cabinets</div>
			<div class="break2"></div>

			<fieldset class="col1">
				<img src="img/furn/klackenaes-sideboard-black-oak-veneer-brown-stained__1016126_pe830224_s5.png"
					class="img1">
				<div class="furnname">Wooden Cabinet</div>
				<div class="furnprice">
					<p>RM 800</p>
				</div>
				<button type="button" onclick="addfurn('Wooden Cabinet','800')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<fieldset class="col2">
				<img src="img/furn/milsbo-glass-door-cabinet-anthracite__0647484_pe704497_s5.png" class="img1">
				<div class="furnname">Display Cabinet</div>
				<div class="furnprice">
					<p>RM 1000</p>
				</div>
				<button type="button" onclick="addfurn('Display Cabinet','1000')" class="btnatc">Add to Cart</button>
			</fieldset>
			<div class="break"></div>
			<div class="break"></div>
		</div>
	</div>
</body>

</html>