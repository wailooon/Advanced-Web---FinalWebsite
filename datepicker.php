  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="datepicker_controller.js"></script>

<?php
include 'includes/dB_connection.php';

$query = "SELECT DISTINCT(HotelName) FROM hotel_list WHERE HotelAvailability = '1' ORDER BY HotelID ASC";
$result = mysqli_query($connect,$query);
?>

<!--
<script>
  $( function() {
    var availableDestination = [
      "Melbourne",
      "Brisbane",
      "Gold Coast",
      "Sydney"
    ];
    $( "#destination" ).autocomplete({
      source: availableDestination
    });
  } );
  </script>
-->
    
<!--
  <script>


  $( function() {
      var todayDate= new Date();
      var maxDate = new Date();
      var dataFormat = "dd/mm/yy",
      checkin = $( "#check-in" ).datepicker({
          showAnim:"slideDown",
          dateFormat:"dd/mm/yy",
          defaultDate:"+1w",
          changeMonth:true,
          showButtonPanel: true,
          numberOfMonths:2,
          minDate:todayDate,
      })
      .on("change",function(){
          checkout.datepicker( "option", "minDate", getData(this) );
      }),
    checkout = $( "#check-out" ).datepicker({
          showAnim:"slideDown",
          dateFormat:"dd/mm/yy",  
          defaultDate:"+1w",
          changeMonth:true,
          showButtonPanel: true,
          numberOfMonths:2
      })
      .on("change",function(){
          checkin.datepicker( "option", todayDate, getData(this) );
      });

      function getData(element){
        var date;
        try{
            date = $.datepicker.parseDate( dataFormat, element.value);
        }catch(error){
            date = null;
        }
        return date;
        }
      });
  </script>
-->

    <form action="search.php" method="post">
    <div class="well well-lg">
        <div class="container-fluid">    
    <div class="row">   
        <div class="col-lg-3">
            <div class="column">
                <Label for="destination">Destination:</Label>
                <select class="form-control" type="text" name="hotelbranch" placeholder="Select the branch:">
                <?php
                    if($result)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            $hotelName = $row['HotelName'];
                            echo "<option value='$hotelName'>$hotelName</option>";
                        } 
                    }   
                ?>
                </select>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="column">
                <Label for="check-in">Check-In:</Label>        
                <input class="form-control" type="text" id="check-in" name="checkin" placeholder="Check-In">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="column">
                <Label for="check-out">Check-Out:</Label>
                <input class="form-control" type="text" id="check-out" name="checkout" placeholder="Check-Out">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="column">
                <Label for="adult">Adult:</Label>
                <select class="form-control" type="text" id="adult" name="adult">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2" selected>2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="column">
                <Label for="child">Child:</Label>
                <select class="form-control" type="text" id="child" name="child">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="column">
                <Label for="room">Room:</Label>
                <select class="form-control" type="text" id="room" name="room">
                    <option value="0">0</option>
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
        </div>
        <div class="col-lg-1">
            <div class="column">
                <Label> </Label>
                <button type="submit" name="submit-search" class="btn btn-primary">Search</button>
            </div>
        </div>
    </div>
</div> 
</div> 
    </form>