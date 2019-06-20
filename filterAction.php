<?php
require 'includes/dB_connection.php';

if(isset($_POST["action"]))
{
    $query = "SELECT * FROM room_list WHERE 1";
        
        //" SELECT * FROM hotel_list WHERE HotelAvailability='1' ";
    
//    if(isset($_POST["hotel_city"]))
//    {
//        $city_filter = implode("','",$_POST['hotel_city']);
//        $query .="AND HotelCity IN('".$city_filter."')";
//    }
    
    if(isset($_POST["room_price"]))
    {
        $room_filter = implode("','",$_POST['room_price']);
        $query .=" AND RoomPrice IN('".$room_filter."')";
    }
    
    if(isset($_POST["typeOfRoom"]))
    {
        $typyOfRoom_filter = implode("','",$_POST['typeOfRoom']);
        $query .=" AND TypeOfRoom IN('".$typyOfRoom_filter."')";
    }
    
//    if(isset($_POST["minimum_price"],$_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
//    {
//        $query .= "AND DeluxeKingRoomPrice AND DeluxeTwinRoomPrice AND ExcutiveKingRoomPrice AND PrimierKingRoomPrice BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."' ";
//    }
    $result = $connect->query($query);
    $output ='';
    
    $rowcount = mysqli_num_rows($result);
    if($rowcount > 0){
    //if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $output .='<div href="" class="card mb-3" style="max-width: 100%;">
                                <hr>
                                <div class="row no-gutters">
                                    <div href=img/room_image/'.$row['RoomImage'].' class="col-md-4" data-toggle="lightbox" data-title='.$row['TypeOfRoom'].'>
                                        <img src=img/room_image/'.$row['RoomImage'].' style="width:100%; height:100%;" class="img-fluid">
                                    </div>
                                <div class="col-md-8">
                                <a class="card-body" style="text-decoration:none; letter-spacing:1px;" data-toggle="lightbox" data-title="'.$row['TypeOfRoom'].'"  data-footer="
                                
                                <a href=img/room_image/'.$row['RoomImage'].' data-toggle=lightbox data-gallery=example-gallery data-type=image>
                                <img src=img/room_image/'.$row['RoomImage'].' style=width:20%; height:20%; class=img-fluid>
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
                                
<!--                                <h1 style=font-size:35px; >'.$row['TypeOfRoom'].'</h1>-->
                                
                                <h5 style= position:left; letter-spacing:0.5px; font-size:22px; color:red;>Room Prices:</h5>
                                
                                <h2 class=card-title text-danger style=font-size:25px; >$ '.number_format($row['RoomPrice']).' /per night</h2>
                                
                                <p class=card-text>'.$row['RoomDescription'].'</p>
                                
                                <a href=# class=btn btn-success btn-block >Reserve This Room</a>
                                
                                <a href=# class=btn btn-success btn-block >Add to Favorite List</a>
                                
                                " >
                                

                                <h2 style="margin-top:10px;" class="text-light bg-info text-center rounded p-1"> '.$row['TypeOfRoom'].'</h2>

                                <h5 class="card-title text-danger" style=" margin:10px; letter-spacing:0.5px; font-size:16px; color:red;" >Room Prices:</h5>
                                
                                <h5 class="card-title text-danger" style="font-size:25px;" >$ '.number_format($row['RoomPrice']).' /per night</h5>
                                
<!--                                
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
-->
                                </a>
                                </div>
                              </div>
                            </div>
                            <hr>                                                    
                            <?php } ?>                    
                          </div>';
        }
    }
    else
    {
        $output = "<h3>No Products Found!</h3>";
    }
    echo $output;
}
?>


<script>    
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>


<!--
//if(isset($_POST["action"]))
//{
//    $query = " SELECT * FROM hotel_list WHERE HotelAvailability='1' ";
//    
//    if(isset($_POST["minimum_price"],$_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
//    {
//        $query .= "AND DeluxeKingRoomPrice AND DeluxeTwinRoomPrice AND ExcutiveKingRoomPrice AND PrimierKingRoomPrice BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."' ";
//    }
//    
//    if(isset($_POST["city"]))
//    {
//        $city_filter = implode("','",$_POST["city"]);
//        $query .="AND HotelCity IN('".$city_filter."')";
//        
//    }
//    
//    if(isset($_POST["rating"]))
//    {
//        $rating_filter = implode("','",$_POST["rating"]);
//        $query .="AND HotelRating IN('".$rating_filter."')";
//        
//    }
//   
//    
//    $statement = $connect->prepare($query);
//    $statement->execute();
//    $result = $statement->fetchAll();
//    $total_row = $statement->rowCount();
//    $output = '';
//    if($total_row > 0)
//    {
//        foreach($result as $row)
//        {
//            $output .= '<div class="col-sm-4 col-lg-3 col-md-3">
//                <div style="border:1px solid #ccc; border-radius:5px;
//                    padding:16px; margin-bottom:16px; height:450px; ">
//                    <img src="'.$row['HotelImage'].'" alt="" class="img-responsive" >
//                    
//                    <p>Rating: '.$row['HotelRating'].' <br/>
//                   
//                </div>
//            </div>
//            ';
//        }
//    } 
//    else
//    {
//        $output = '<h3>No Data Found</h3>';
//    }
//    echo $output;
//}
//
//if(isset($_POST["action"]))
//{
//    $query = " SELECT * FROM hotel_list WHERE HotelAvailability='1' ";
//    
//    if(isset($_POST["minimum_price"],$_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
//    {
//        $query .= "AND DeluxeKingRoomPrice AND DeluxeTwinRoomPrice AND ExcutiveKingRoomPrice AND PrimierKingRoomPrice BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."' ";
//    }
//    
//    if(isset($_POST["city"]))
//    {
//        $city_filter = implode("','",$_POST["city"]);
//        $query .="AND HotelCity IN('".$city_filter."')";
//        
//    }
//    
//    if(isset($_POST["rating"]))
//    {
//        $rating_filter = implode("','",$_POST["rating"]);
//        $query .="AND HotelRating IN('".$rating_filter."')";
//        
//    }
//   
//    
//    $statement = $connect->prepare($query);
//    $statement->execute();
//    $result = $statement->fetchAll();
//    $total_row = $statement->rowCount();
//    $output = '';
//    if($total_row > 0)
//    {
//        foreach($result as $row)
//        {
//            $output .= '<div class="col-sm-4 col-lg-3 col-md-3">
//                            <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px; ">
//                                <img src="hotel_website/'.$row['HotelImage'].'" alt="" class="img-responsive" >
//                                 <p>Rating: '.$row['HotelRating'].' <br/>
//                            </div>
//                        </div>';
//        }
//    } 
//    else
//    {
//        $output = '<h3>No Data Found</h3>';
//    }
//    echo $output;
//}
//
//
--->