function addfurn(furnname, furnprice) {
	if (localStorage.getItem("selected_furnname") === null) {
		var furnname_array = [];
		var furnprice_array = [];
		furnname_array.push(furnname); //array.push means add 1 more data to the array at ending of array (try google)
		furnprice_array.push(furnprice);
		localStorage.setItem('selected_furnname', JSON.stringify(furnname_array));
		localStorage.setItem('selected_furnprice', JSON.stringify(furnprice_array));
	} else {
		var furnname_array = [];
		var furnprice_array = [];
		var furnname_array = JSON.parse(localStorage.getItem("selected_furnname"));//retrive furnname data first then baru push new furnname into current data
		var furnprice_array = JSON.parse(localStorage.getItem("selected_furnprice"));

		furnname_array.push(furnname);
		furnprice_array.push(furnprice);
		localStorage.setItem('selected_furnname', JSON.stringify(furnname_array));
		localStorage.setItem('selected_furnprice', JSON.stringify(furnprice_array));
	}
}

function displayfurn() {
	var furn_array = JSON.parse(localStorage.getItem("selected_furnname"));//get furniture name
	var furn_price = JSON.parse(localStorage.getItem("selected_furnprice"));//get furniture price
	//console.table(furn_array);
	var counter = 0;
	var tablestring = "<table><>"
	while (counter < furn_array.length) {
		//console.log("Furniture "+parseInt(counter+1)  +" name :" +furn_array[counter]);
		//console.log("Furniture "+parseInt(counter+1)  +" price :" +furn_price[counter]);
		markup = "<tr><td>" + parseInt(counter + 1) + "</td><td>" + furn_array[counter] + "</td><td><input type='number' value='1' class='quantity' id='quantity_item"
			+ parseInt(counter + 1) + "' onchange=changequantity(" + parseInt(counter + 1) + "," + furn_price[counter] + ") name='quantity_item" + parseInt(counter + 1)
			+ "' min='1' step='1'>" + "</td><td><input type='text' readonly class='price' id='price_item" + parseInt(counter + 1) + "' value='RM " + furn_price[counter]
			+ "' name='price_item" + parseInt(counter + 1) + "'></td></tr>";
		$(".summary tbody").append(markup);
		counter++;
	}
}

function clearfurn() { //used after click submit order button in summary page
	localStorage.clear();
}

$(document).ready(function () {
	displayfurn();
	//must be inside document.ready function
	$('.summary').DataTable({
		columnDefs: [
			{
				targets: [0, 1, 2, 3],//align text in table to be center
				className: 'dt-body-center'
			}
		]
	});

	//var myTable =$('.summary').DataTable();

	//$('.summary tbody tr:first').remove();
	calculatetotal();
});
var totalquantity = 0;
function changequantity(index, furnprice) {
	//console.log($("#quantity_item"+index).val());
	//console.log($("#price_item"+index).val());
	var price = Number($("#quantity_item" + index).val()) * Number(furnprice);
	$("#price_item" + index).val('RM ' + price.toFixed(2));
	calculatetotal();
}

function calculatetotal() {
	var subtotal = 0;
	$('.price').each(function () {
		var totalprice = $(this).val();
		var price = $(this).val().replace('RM', '');
		//price=Number(price);
		//console.log(price);   //prints: 123
		subtotal += Number(price);
	});
	var totalquantity = 0;
	$('.quantity').each(function () {
		var quantity = $(this).val();
		totalquantity += parseInt($(this).val());
	});
	//console.log(subtotal.toFixed(2));


	if (totalquantity >= 5 && totalquantity <= 10) {
		var discount = 0.05;
		var discount_rate = "5%";
	} else if (totalquantity > 10) {
		var discount = 0.15;
		var discount_rate = "15%";
	} else {
		var discount = 0;
		var discount_rate = "0%";
	}

	if (subtotal > 100) {
		var postage = 0;
	} else {
		var postage = 10;
	}

	var discount_price = subtotal * discount;
	var total = subtotal - discount_price + postage;
	$(".subtotal").html('RM ' + subtotal.toFixed(2));
	$(".postage").html('RM ' + postage.toFixed(2));
	$(".discount").html('RM ' + discount_price.toFixed(2));
	$(".discount_rate").html('Discount (' + discount_rate + ')');
	$(".total").html('RM ' + total.toFixed(2));
}

function confirmorder() {
	clearfurn();
	alert("Furniture ordered successfully.");
	location.href = "product.php";
}

$(document).ready(function () {
	$("a").on('click', function (event) {

		if (this.hash !== "") {
			// Prevent default anchor click behavior
			event.preventDefault();

			// Store hash
			var hash = this.hash;

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function () {

				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			});
		}
	});
});