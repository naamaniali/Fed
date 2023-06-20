<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="bobi.css"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="icon" href="Sprites/njoy-logo.png">
	<link rel="stylesheet" type="text/css" href="bobi.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>
<body>
	<div id="background">
	<img id="logo" src="Sprites/njoy1-showcase.png">
	</div>
	
	<ul class="nav nav-pills justify-content-center">
			<li class="nav-item">
					<a class="nav-link" href="gallery.html"><i class="fas fa-images"></i> Gallery </a>
				</li>

	  <li class="nav-item dropdown">
	    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-book"></i> Мenu</a>
	    <div class="dropdown-menu">
	      <a class="dropdown-item" href="content.html"><i class="fas fa-list-ul"></i> Foods </a>
	      <a class="dropdown-item" href="request.html"><i class="fas fa-shopping-basket"></i> Reservation </a>
	      <a class="dropdown-item" href="alergens.html"><i class="fas fa-allergies"></i> Services</a>
	    </div>
	  </li>
     <li class="nav-item">
	    <a class="nav-link active" href="index.html"><i class="fas fa-home"></i> Get a Quote </a>
	  </li>
	  
	  <li class="nav-item">
	    <a class="nav-link" href="contacts.html"><i id="contact-icon" class="fas fa-mobile-alt"></i> Contacts</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="for-me.html"><i id="contact-icon" class="fas fa-user-check"></i> About Us </a>
		</li>
	</ul>
	
<!-- 	<div id="slider">
	<figure>
		<img src="Images/bread.png">
		<img src="Images/meatballs.png">
		<img src="Images/cake.png">
		<img src="Images/raspberry.png">
		<img src="Images/steak.png">
		</figure>
	</div> -->
	
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="Images/bread.png" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="Images/meatballs.png" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="Images/cake.png" alt="Third slide">
	    </div>
	     <div class="carousel-item">
	      <img class="d-block w-100" src="Images/raspberry.png" alt="Third slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="Images/steak.png" alt="Third slide">
	    </div>
	  </div>
	</div>
	
	<div id="stripe"> </div>
		<div class="dark">
	<h1 class="page-title"> Quote Us!!</h1>
		<form action="connect.php" method="POST">
		<center>
			<input type="text"  name="fname" placeholder="First Name" required><br>
			<input type="text"  name="lname" placeholder="Last Name" required><br>
			<input type="text"  name="Gender" placeholder="Gender" required><br>
			<input type="text"  name="Email" placeholder="Email" required><br>
			<input type="text" name="date" placeholder="Date of Event" required><br><br>
			<input type="text" name="Event" placeholder="Type of Event" required><br>
			<input type="text" name="Venue" placeholder="Venue" required><br>
			<input type="text" name="Motif" placeholder="Motif" required><br>
			<input type="text" name="Type" placeholder="Type of Services you need?" size="28" required><br>
			<input type="text" name="Budget" placeholder="Estimated Budget per pax" size="28" required><br>
			<input type="text" name="Request"  size="100" placeholder="Other addditional request" required></textarea> <br><br>
			
			<label for="checkbox"> CLICK IF YOU ACCEPT THE TERMS & CONDITIONS BELOW.</label>
			<input type="checkbox" id="checkbox" required> <br>
			
			<input type="submit" value="submit" name="submit"><br><br>
			
			<p>1.First Come, First Serve Basis <br>

2.The client shall pay a reservation fee of Php5,000.00 to block the slot. Such amount shall be deducted from the total cost. <br>

3.Fifty Percent (50%) Down payment shall be paid at least one (1) month before the event <br>

4.The balance shall be paid in FULL in CASH in one week before the event. Cheques shall not be accepted. <br>

5.All Prices are exclusive of 12% Value Added Tax and Delivery and Pull-Out Fee. <br>

6.Free Delivery within Quezon City area if the amount to be rented is more than Ten thousand (Php10,000.00) pesos. <br>

7.Twenty Percent (20%) of the contract price shall be charged upon cancellation of the contract.<br>

8.All payments shall be forfeited if cancellation is done two (2) days before the event date. <br>

9.There shall be an additional charge of Php 50.00 per floor per waiter staff if the venue is in building without the service elevator brand additional of Php100 per wait staff if the loading area is 50 meters away from the venue. <br>

10.Any losses, breakage, gate entrance fee and caterer’s bond and other charges at the venue shall be charged to the client’s bill. <br>

11.For Rental of Items: Rate of Rental is computed on a daily basis or on the date specified on the contract.  The client shall be obliged to return the rented items after the event.  <br>

12.The security deposit shall be treated as liquidated damages in case the client shall not return on time for any reason whatsoever. <br> However, in case the client incurs a delay in the return of the whole set of the rented items, the client shall be charged additional damages in the amount equivalent per day of contract for every day of delay.<br>

13.This Contract shall take effect only upon payment of the price agreed upon.<br>

14.Four (4) Hours of Waiter Service only,  Php50.00 per hour will be charged in excess thereof.<br><br>

		</center>
		</form>
		</div>
	<div id="stripe"> </div>
	
	
<div id="background-img">
<div class="container">
	<div class="row">
	    <div class="container">
        
            <blockquote class="quote-card blue-card">
              <p>
               You don't need a silver fork to eat good food.
             </p>
        
             <cite>
              Paul Pierce
            </cite>
          </blockquote>

          <blockquote class="quote-card red-card">
            <p>
            	Food is all we are. It is an extension of nationalist and ethnic sentiment,
            of your personal history, your province, your region, your family ...
            An integral part of the beginning.
            </p>
        
            <cite>
              Zion Williamson
            </cite>
          </blockquote>
        
          <blockquote class="quote-card green-card">
            <p>
              Eating is not just about getting energy. It is an experience.
            </p>
        
            <cite>
              Ja Morant
            </cite>
          </blockquote>
        
        </div>
	</div>
</div>
</div>
	
	<div class="red-line-bottom">
		<div class="text-bottom">
			<div id="stars"><p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></div>
		<p><i class="fas fa-certificate"></i> 100% Guaranteed quality </p>
		<p><i class="fas fa-utensils"></i> NJOY CATERING 2021 &copy;</p>
		</div>
	</div>
	
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
