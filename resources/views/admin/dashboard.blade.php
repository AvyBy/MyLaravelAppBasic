<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Victoria - Court</title>

</head>

<style>
.row-centered {
text-align:center;
}
.col-centered {
width: 19%;
display:inline-block;
float:none;
}
.red{
  color: red;
}
.green{
  color: green;
}

.col-xs-5ths,
.col-sm-5ths,
.col-md-5ths,
.col-lg-5ths {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col-xs-5ths {
  width: 20%;
  float: left;
}

@media (min-width: 768px) {
  .col-sm-5ths {
    width: 20%;
    float: left;
  }
}

@media (min-width: 992px) {
  .col-md-5ths {
    width: 20%;
    float: left;
  }
}

@media (min-width: 1200px) {
  .col-lg-5ths {
    width: 20%;
    float: left;
  }
}


.btnHere
{
	padding: 30px;
	width: 100px;
	height: 100px;
}
.content2
{
	border-left : 2px solid black;
}
.button-choices{
	margin-top: 50px;
	margin-left: 100px; 
}
.choices-green{
	background-color: green;
	width: 100px;
	color: white;
}
.choices-blue{
	background-color: blue;
	width: 100px;
	color: white;
}
.choices-yellow{
	background-color: yellow;
	width: 100px;
	color: white;
}
.choices-red{
	background-color: red;
	width: 100px;
	color: white;
}
.test
{
	background: #000000;
	color: white;
}

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #555;
    outline: none;
    background-color: lightblue;
}
table {
    counter-reset: tableCount;     
}
.counterCell:before {              
    content: counter(tableCount); 
    counter-increment: tableCount; 
}
</style>

<body>
	@include('admin.header')
	<div class="main">			
		<div class="container" style="margin-top: 30px; margin-left: none; margin-right: none;">
			<div class="panel panel-default">
				<div class="panel-heading test" style="background:#000000; color: white; ">SIMPLE APPLICATION</div>
				<div class="panel-body">
					<div class="col-lg-8 content1">
						<div class="col-sm-2" >
							<button type="button" id="R1" class="btn btn-outline-dark btnHere">Room1</button>
						</div>
						<div class="col-sm-2">
							<button type="button" id="R2" class="btn btn-outline-dark btnHere">Room2</button>
						</div>
						<div class="col-sm-2">
							<button type="button" id="R3" class="btn btn-outline-dark btnHere">Room3</button>
						</div>
						<div class="col-sm-2">
							<button type="button" id="R4" class="btn btn-outline-dark btnHere">Room4</button>
						</div>
						<div class="col-sm-2">
							<button type="button" id="R5" class="btn btn-outline-dark btnHere">Room5</button>
						</div>
						<div class="col-sm-2">
							<button type="button" id="R6" class="btn btn-outline-dark btnHere">Room6</button>
						</div>

						<div class="col-lg-8 button-choices">
			                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			                    <button id="clean" class="btn choices-green">Clean</button>
			                </div>
			                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			                    <button id="dirty" class="btn choices-blue">Dirty</button>
			                </div>
			                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			                    <button id="cleaning" class="btn choices-yellow">Cleaning</button>
			                </div>
			                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			                    <button id="occupied" class="btn choices-red">Occupied</button>
			                </div>
		            	</div>
					</div>
					<div class="col-lg-4 content2">

						<div class="panel panel-primary">
					      <div class="panel-heading" style="border-bottom: 2px solid black">Occupied Room </div>
					      <div class="panel-body">
					      	<div class="table-responsive">          
							  <table class="table">
							    <thead>
							      <tr>
							        <th>#</th>
							        <th>Room Name</th>
							        <th>Price</th>
							      </tr>
							    </thead>
							    <tbody  id="getOccupied">
							      
							    </tbody>
							  </table>
							  </div>
							  <div>
							  	<input type="text" id="total" name="total" placeholder="Total">
							  </div>
							  <div>
							  	<button type="button" id="getCheck" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">Check-out</button>
							  </div>
					      </div>
					    </div>
						
					</div>
					
					
				</div>
			</div>
		</div> 
	</div>
	
								
	</div>	<!--/.main-->



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#000000; color: white; ">
        <h3 class="modal-title" id="exampleModalLongTitle">CHECK-OUT RECIEPT</h3>
        <button type="button" style="color: white;" class="close TryClear" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      		<div class="panel-body" style="padding: 20px 100px 20px 100px;">	
      			<div class="form-group row">
				  <label for="example-text-input"  class="col-2 col-form-label">Total:</label>
				  <div class="col-10">
				    <input class="form-control" id="getPriceOccupied" type="text">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input"  class="col-2 col-form-label">Cash:</label>
				  <div class="col-10">
				    <input class="form-control" id="getCash" type="number">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-email-input"  class="col-2 col-form-label">Change:</label>
				  <div class="col-10">
				    <input class="form-control" id="getChange" type="number">
				  </div>
				</div>
      		</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" id="DoneDeal" class="btn btn-primary">DONE</button>
      </div>
    </div>
  </div>
</div>

<script>
	    $(document).ready(function() {
	    	//----Codes here
	    	var getRoom;
	    	var arrayID=[];
	    	var amount;
	    	var a1 =0;
	    	var a2 =0;
	    	var a3 =0;
	    	var a4 =0;
	    	var a5 =0;
	    	var a6 =0;

	    	$('#R1').click(function(){
				   	getRoom =1;	
				   	// alert("DJFDJ");
	    	})
	    	$('#R2').click(function(){
				   	getRoom =2;	
	    	})
	    	$('#R3').click(function(){
				   	getRoom =3;	
	    	})
	    	$('#R4').click(function(){
				   	getRoom =4;	
	    	})
	    	$('#R5').click(function(){
				   	getRoom =5;	
	    	})
	    	$('#R6').click(function(){
				   	getRoom =6;	
	    	})

	    	$('#clean').click(function(){

				// alert("I am an alert box!");
	    		if (getRoom ==1) 
	    		{
	    			$('#R1').css('background-color', 'green');
	    			$('#rm1').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 1;
					 });
					 a1 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 

	    		}
	    		else if (getRoom ==2) 
	    		{
	    			$('#R2').css('background-color', 'green');
	    			$('#rm2').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 2;
					 });
					 a2 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==3) 
	    		{
	    			$('#R3').css('background-color', 'green');
	    			$('#rm3').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 3;
					 });
					 a3 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==4) 
	    		{
	    			$('#R4').css('background-color', 'green');
	    			$('#rm4').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 4;
					 });
					 a4 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==5) 
	    		{
	    			$('#R5').css('background-color', 'green');
	    			$('#rm5').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 5;
					 });
					 a5 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==6) 
	    		{
	    			$('#R6').css('background-color', 'green');
	    			$('#rm6').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 6;
					 });
					 a6 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    	})
	    	$('#dirty').click(function(){
			  if (getRoom ==1) 
	    		{
	    			$('#R1').css('background-color', 'blue');
	    			$('#rm1').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 1;
					 });
					 a1 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==2) 
	    		{
	    			$('#R2').css('background-color', 'blue');
	    			$('#rm2').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 2;
					 });
					 a2 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==3) 
	    		{
	    			$('#R3').css('background-color', 'blue');
	    			$('#rm3').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 3;
					 });
					 a3 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==4) 
	    		{
	    			$('#R4').css('background-color', 'blue');
	    			$('#rm4').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 4;
					 });
					 a4 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==5) 
	    		{
	    			$('#R5').css('background-color', 'blue');
	    			$('#rm5').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 5;
					 });
					 a5 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==6) 
	    		{
	    			$('#R6').css('background-color', 'blue');
	    			$('#rm6').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 6;
					 });
					 a6 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
					}
			   
	    	})
	    	$('#cleaning').click(function(){
			   
			   if (getRoom ==1) 
	    		{
	    			$('#R1').css('background-color', 'yellow');
	    			$('#rm1').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 1;
					 });
					 a1 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==2) 
	    		{
	    			$('#R2').css('background-color', 'yellow');
	    			$('#rm2').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 2;
					 });
					 a2 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==3) 
	    		{
	    			$('#R3').css('background-color', 'yellow');
	    			$('#rm3').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 3;
					 });
					 a3 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==4) 
	    		{
	    			$('#R4').css('background-color', 'yellow');
	    			$('#rm4').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 4;
					 });
					 a4 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==5) 
	    		{
	    			$('#R5').css('background-color', 'yellow');
	    			$('#rm5').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 5;
					 });
					 a5 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
	    		}
	    		else if (getRoom ==6) 
	    		{
	    			$('#R6').css('background-color', 'yellow');
	    			$('#rm6').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 6;
					 });
					 a6 =0;
					 amount = a1+ a2+ a3+a4+a5+a6;
			   		 $('#total').val(amount.toString()); 
				}
	    	})
	    	$('#occupied').click(function(){
			   if (getRoom ==1) 
	    		{
	    			$('#R1').css('background-color', 'red');
	    			a1=100;
	    			if (jQuery.inArray(1, arrayID)!='-1') {
					} else {
						arrayID.push(1);
						$('#getOccupied').append('<tr id="rm1"><td class="counterCell"></td><td>Room1</td><td>100</td></tr>');
					}
	    		}
	    		else if (getRoom ==2) 
	    		{
	    			$('#R2').css('background-color', 'red');
	    			a2=200;
	    			if (jQuery.inArray(2, arrayID)!='-1') {
					} else {
						arrayID.push(2);
						$('#getOccupied').append('<tr id="rm2"><td class="counterCell"></td><td>Room2</td><td>200</td></tr>');
					}
	    		}
	    		else if (getRoom ==3) 
	    		{
	    			$('#R3').css('background-color', 'red');
	    			a3=300;
	    			if (jQuery.inArray(3, arrayID)!='-1') {
					} else {
						arrayID.push(3);
						$('#getOccupied').append('<tr id="rm3"><td class="counterCell"></td><td>Room3</td><td>300</td></tr>');
					}
	    		}
	    		else if (getRoom ==4) 
	    		{
	    			$('#R4').css('background-color', 'red');
	    			a4=400;
	    			if (jQuery.inArray(4, arrayID)!='-1') {
					} else {
						arrayID.push(4);
						$('#getOccupied').append('<tr id="rm4"><td class="counterCell"></td><td>Room4</td><td>400</td></tr>');
					}
	    		}
	    		else if (getRoom ==5) 
	    		{
	    			$('#R5').css('background-color', 'red');
	    			a5=500;
	    			if (jQuery.inArray(5, arrayID)!='-1') {
					} else {
						arrayID.push(5);
						$('#getOccupied').append('<tr id="rm5"><td class="counterCell"></td><td>Room5</td><td>500</td></tr>');
					}
	    		}
	    		else if (getRoom ==6) 
	    		{
	    			$('#R6').css('background-color', 'red');
	    			a6=600;
	    			if (jQuery.inArray(6, arrayID)!='-1') {
					} else {
						arrayID.push(6);
						$('#getOccupied').append('<tr id="rm6"><td class="counterCell"></td><td>Room6</td><td>600</td></tr>');
					}
	    		}
	    		amount = a1+ a2+ a3+a4+a5+a6;
			   $('#total').val(amount.toString()); 
	    	})


    		$('#getCheck').click(function(){
    			$('#getPriceOccupied').val(amount.toString())
	    	})

	    	$('#getCash').keyup(function(){
	    		var tender = $('#getCash').val();
	    		var amount = $('#getPriceOccupied').val();
	    		var total = tender - amount;
	    		$('#getChange').val(total.toString());
	    	})

	    	$('#DoneDeal').click(function(){
	    		setTimeout(function(){
                   location.reload(); // then reload the page.(3)
	            }, 500);
	    	})

	    	$('.TryClear').click(function(){
	    		$('#getCash').val("");                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
	    		$('#getChange').val("");
	    	})
	    });
	</script>
</body>

</html>
