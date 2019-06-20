<?php
require 'header.php';
?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Login Modal -->
<?php
require ('login.php');  

?>   
      
<!-- Register Modal -->
<?php
require ('register.php');  

?>     
    
    
    
<!-- Carousel Section -->   
    
<?php include 'carousel.php';?>

<!-- Carousel Section --> 


<!-- DatePicker Section -->

<div id="search" class="bg-1">
  <div class="container">
    <h3 class="text-center">Discover</h3>
    <h2 class="text-center">A & Z Hotels and Resort</h2>
    <p class="text-center">Let's start to planning your Wonderfully Trips! <br> Remember to book your Hotel!</p>
    <?php include 'datepicker.php'?>
  </div>
</div>

<!-- DatePicker Section -->   
    
    
<!-- Container (The Band Section) -->
<div id="location" class="container text-center">
  <h3>EXPLORE OUR LOCATION</h3>
  <p><em>Where We Are!</em></p>
  <p>Travelling with loved ones can be life-affirming – even transformative. But opportunities are scarce and we often find ourselves skimming through life. We had a conversation with three individuals about time, and, through a couple of surprises, reminded them to take their time with the people they love most.</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <a href="#demo" data-toggle="collapse">
        <img src="img/melbourne_city.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <p class="text-center"><strong>MELBOURNE BRANCH</strong></p><br>
      <div id="demo" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <a href="#demo2" data-toggle="collapse">
        <img src="img/sydney_city.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <p class="text-center"><strong>SYDNEY BRANCH</strong></p><br>
     <div id="demo2" class="collapse">
        <p>Drummer</p>
        <p>Loves drummin'</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <a href="#demo3" data-toggle="collapse">
        <img src="img/brisbane_city.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <p class="text-center"><strong>BRISBANE BRANCH</strong></p><br>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
      <a href="#demo4" data-toggle="collapse">
        <img src="img/goldcoast_city.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <p class="text-center"><strong>GOLD COAST BRANCH</strong></p><br>
      <div id="demo4" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
    <div class="col-sm-4">
      <a href="#demo5" data-toggle="collapse">
        <img src="img/perth_city.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <p class="text-center"><strong>PERTH BRANCH</strong></p><br>
      <div id="demo5" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
    </div>
</div>

<!-- Container (About Us Section) -->
<div id="aboutUs" class="bg-1">
  <div class="container">
    <h3 class="text-center">ABOUT US</h3>
    <p  style="font-size:15px;" class="text-center">Our hotels story!<br>At A & Z Hotel, we believe in recognizing a familiar face, welcoming a new one and treating everyone we meet the way we would want to be treated ourselves. Whether you work with us, stay with us, live with us or discover with us, we believe our purpose is to create impressions that will stay with you for a lifetime. It comes from our belief that life is richer when we truly connect to the people and the world around us.</p>
    <ul class="list-group">
      <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li> 
      <li class="list-group-item">November <span class="badge">3</span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="paris.jpg" alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Friday 27 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="newyork.jpg" alt="New York" width="400" height="300">
          <p><strong>New York</strong></p>
          <p>Saturday 28 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contactUs" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Melbourne, Australia</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +61 41233212</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: aw.hotel.resort@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">From The Blog</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
    <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
    <li><a data-toggle="tab" href="#menu2">Peter</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Mike Ross, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Chandler Bing, Guitarist</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Peter Griffin, Bass player</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<!--<img src="img/calm_picture_01.jpg" class="img-responsive" style="width:100%">-->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.986385155847!2d153.0200383143025!3d-27.469683223277247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDI4JzEwLjkiUyAxNTPCsDAxJzIwLjAiRQ!5e0!3m2!1sen!2sau!4v1558548086342!5m2!1sen!2sau" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<!-- Footer -->

<?php include 'footer.php';?>
    
<!-- Footer -->
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
