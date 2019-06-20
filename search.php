<?php
require 'header.php';
include 'includes/dB_connection.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 style="color:grey;">Catogories</h1>
                <hr>
                <!-- Hotel City Database showing-->
                <h3 style="letter-spacing:1.5px; font-size:20px;" class="text-info">Filter by Price</h3>
                <ul class="list-group">
                <?php
                    $sql = "SELECT DISTINCT(RoomPrice) FROM room_list ORDER BY RoomID ASC";
                    $result=$connect->query($sql);
                    while($row=$result->fetch_assoc()){
                ?>
                <li class="list-group-item">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input room_check" value="<?= $row['RoomPrice']; ?>" id="room_price">  <?= $row['RoomPrice']; ?>
                        </label>
                    </div>    
                </li>
                <?php } ?>
                </ul>
                <!-- Hotel Star Rating Database showing -->
                <h3 style="letter-spacing:1.5px; font-size:20px;" class="text-info">Filter by Type Of Room</h3>
                <ul class="list-group">
                <?php
                    $sql = "SELECT DISTINCT(TypeOfRoom) FROM room_list ORDER BY RoomID ASC";
                    $result=$connect->query($sql);
                    while($row=$result->fetch_assoc()){
                ?>
                <li class="list-group-item">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input room_check" value="<?= $row['TypeOfRoom']; ?>" id="typeOfRoom">  <?= $row['TypeOfRoom']; ?>
                        </label>
                    </div>    
                </li>
                <?php } ?>
                </ul>
             </div>
            <div class="col-lg-9">
               <h1 class="text-left" id="textChange" style="letter-spacing:0.5px; color:black;">All Rooms</h1>
                <hr>
                <div class="text-center">
                    <img src="img/loading.gif" id="loading" width="200" style="display:none">   
                </div>
                <div class="row" id="result">
                    
                    <?php
                        $sql = "SELECT * FROM room_list WHERE 1 ";
                            
                            //"SELECT * FROM hotel_list WHERE HotelAvailability = '1' ORDER BY HotelID ASC";
                        $result = $connect->query($sql);
                        while($row = $result->fetch_assoc()){
                    ?>
                            <div href="" class="card mb-3" style="max-width: 100%;">
                                <hr>
                                <div class="row no-gutters">
                                    <div href="img/room_image/<?=$row['RoomImage']; ?>" class="col-md-4" data-toggle="lightbox" data-title="<?=$row['TypeOfRoom']; ?>">
                                        <img src="img/room_image/<?=$row['RoomImage']; ?>" style="width:100%; height:100%;" class="img-fluid">
                                    </div>
                                <div class="col-md-8">
                                <a class="card-body" style="text-decoration:none; letter-spacing:1px;" data-toggle="lightbox" data-title="<?=$row['TypeOfRoom']; ?>"  data-footer="
                                
                                <a href=img/room_image/<?=$row['RoomImage']; ?> data-toggle=lightbox data-gallery=example-gallery data-type=image>
                                <img src=img/room_image/<?=$row['RoomImage']; ?> style=width:20%; height:20%; class=img-fluid>
                                </a>
                                
                                <a href=img/room_image/deluxe_king_room_1.jpg data-toggle=lightbox data-gallery=example-gallery data-type=image>
                                <img src=img/room_image/deluxe_king_room_1.jpg ; style=width:20%; height:20%; class=img-fluid>
                                </a>
                                
                                <a href=img/room_image/deluxe_king_room_2.jpg data-toggle=lightbox data-gallery=example-gallery data-type=image>
                                <img src=img/room_image/deluxe_king_room_2.jpg ; style=width:20%; height:20%; class=img-fluid>
                                </a>
                                
                                <a href=img/room_image/deluxe_king_room_3.jpg data-toggle=lightbox data-gallery=example-gallery data-type=image>
                                <img src=img/room_image/deluxe_king_room_3.jpg ; style=width:20%; height:20%; class=img-fluid>
                                </a>
                                
<!--                                <h1 style=font-size:35px; ><?= $row['TypeOfRoom'] ?></h1>-->
                                
                                <h5 style= position:left; letter-spacing:0.5px; font-size:22px; color:red;>Room Prices:</h5>
                                
                                <h2 class=card-title text-danger style=font-size:25px; >$ <?= number_format($row['RoomPrice']); ?> /per night</h2>
                                
                                <p class=card-text><?= $row['RoomDescription'] ?></p>
                                
                                <a href=# class=btn btn-success btn-block >Reserve This Room</a>
                                
                                <a href=# class=btn btn-success btn-block >Add to Favorite List</a>
                                
                                " >
                                

                                <h2 style="margin-top:10px;" class="text-light bg-info text-center rounded p-1"><?= $row['TypeOfRoom'] ?></h2>

                                <h5 class="card-title text-danger" style=" margin:10px; letter-spacing:0.5px; font-size:16px; color:red;" >Room Prices:</h5>
                                
                                <h5 class="card-title text-danger" style="font-size:25px;" >$ <?= number_format($row['RoomPrice']); ?> /per night</h5>
                                
<!--                                
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
-->
                                </a>
                                </div>
                              </div>
                            </div>
                            <hr>                                                    
                            <?php } ?>                    
                          </div>
                    </div>
                </div>
        </div>

<!--'.$row['TypeOfRoom'].'-->


<script type="text/javascript">
    $(document).ready(function(){
        
        $(".room_check").click(function(){
           $("#loading").show("slow");
            var action = 'data';
            var room_price = get_filter_text('room_price');
            var typeOfRoom = get_filter_text('typeOfRoom');
            
            $.ajax({
                url:'filterAction.php',
                method:'POST',
                data:{action:action,room_price:room_price,typeOfRoom:typeOfRoom},
                success:function(response){
                    $("#result").html(response);
                    $("#loading").hide("fast");
                    $("#textChange").text("Filtered Room");
                }
            });
            
        });
        
        function get_filter_text(text_id){
            var filterData = [];
            $('#'+text_id+':checked').each(function(){
                filterData.push($(this).val());
            });
            return filterData;
        }
        
    });

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
            ekkoLigh
});

    
</script>


<?php include 'footer.php';?>