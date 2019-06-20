-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2019 at 03:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `az_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `userID` int(100) NOT NULL,
  `ipADD` int(100) NOT NULL,
  `productID` int(100) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_list`
--

CREATE TABLE `hotel_list` (
  `HotelID` int(25) NOT NULL,
  `HotelName` varchar(255) NOT NULL,
  `HotelAddress` varchar(255) DEFAULT NULL,
  `HotelAddress2` varchar(255) NOT NULL,
  `HotelCity` varchar(255) NOT NULL,
  `HotelState` varchar(255) NOT NULL,
  `HotelPostalCode` varchar(255) NOT NULL,
  `HotelPhoneNumber` varchar(255) NOT NULL,
  `HotelImage` varchar(255) NOT NULL,
  `HotelRating` enum('1 star','2 stars','3 stars','4 stars','5 stars') NOT NULL,
  `HotelCountry` varchar(255) NOT NULL,
  `HotelAvailability` enum('1','0') NOT NULL,
  `DeluxeKingRoomAvailability` enum('1','0') NOT NULL,
  `DeluxeKingRoomPrice` int(25) NOT NULL,
  `DeluxeTwinRoomAvailability` enum('1','0') NOT NULL,
  `DeluxeTwinRoomPrice` int(25) NOT NULL,
  `ExcutiveKingRoomAvailability` enum('1','0') NOT NULL,
  `ExcutiveKingRoomPrice` int(25) NOT NULL,
  `PrimierKingRoomAvailability` enum('1','0') NOT NULL,
  `PrimierKingRoomPrice` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_list`
--

INSERT INTO `hotel_list` (`HotelID`, `HotelName`, `HotelAddress`, `HotelAddress2`, `HotelCity`, `HotelState`, `HotelPostalCode`, `HotelPhoneNumber`, `HotelImage`, `HotelRating`, `HotelCountry`, `HotelAvailability`, `DeluxeKingRoomAvailability`, `DeluxeKingRoomPrice`, `DeluxeTwinRoomAvailability`, `DeluxeTwinRoomPrice`, `ExcutiveKingRoomAvailability`, `ExcutiveKingRoomPrice`, `PrimierKingRoomAvailability`, `PrimierKingRoomPrice`) VALUES
(1, 'A & Z Hotel (Melbounre)', '2 Convention Centre Place', '', 'Melbourne CBD', 'VIC', '3006', '+61412345678', 'img/adult-bread-chef-280121.jpg', '1 star', 'Australia', '1', '1', 450, '1', 350, '1', 500, '1', 600),
(2, 'A & Z Hotel (Brisbane)', '123 Collins Street', '', 'Brisbane CBD', 'QLD', '3000', '+61423456789', 'img/adult-bread-chef-280121.jpg', '2 stars', 'Australia', '1', '1', 450, '1', 350, '1', 500, '1', 600),
(3, 'A & Z Hotel (Sydney)', '100 Murray Street', '', 'Sydney CBD', 'NSW', '2009', '+61421341245', 'img/alcoholic-beverage-bed-bedroom-1579253.jpg', '3 stars', 'Australia', '1', '1', 450, '1', 350, '1', 500, '1', 600),
(4, 'A & Z Hotel (Perth)', '75 Wentworth Avenue', '', 'Perth CBD', 'WA', '2000', '+61423452673', 'img/adult-bread-chef-280121.jpg', '4 stars', 'Australia', '1', '1', 450, '1', 350, '1', 500, '1', 600),
(5, 'A & Z Hotel (Gold Coast)', '75 Wentworth Avenue', '', 'Gold Coast', 'QLD', '2000', '+61418292939', 'img/adult-bread-chef-280121.jpg', '5 stars', 'Australia', '1', '1', 450, '1', 350, '1', 500, '1', 600);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(100) NOT NULL,
  `userID` int(100) NOT NULL,
  `productID` int(100) NOT NULL,
  `qty` int(5) NOT NULL,
  `trxID` varchar(100) NOT NULL,
  `paymentSTATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_list`
--

CREATE TABLE `room_list` (
  `RoomID` int(25) NOT NULL,
  `TypeOfRoom` enum('Standard Twin Room','Deluxe King Room','Excutive King Room','Primier King Room') NOT NULL,
  `RoomPrice` int(11) NOT NULL,
  `RoomAvailability` enum('available','unavailable','','') NOT NULL,
  `RoomDescription` longtext NOT NULL,
  `RoomImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_list`
--

INSERT INTO `room_list` (`RoomID`, `TypeOfRoom`, `RoomPrice`, `RoomAvailability`, `RoomDescription`, `RoomImage`) VALUES
(1, 'Standard Twin Room', 350, 'available', 'A twin room is for 2 persons travelling however the room normally has 2 beds. A triple room accommodates up to 3 people with either one double and a single bed or a combination of beds and roll-aways.\r\n<br>\r\n<br>\r\n<strong>ROOM FEATURES:<strong>have Complimentary Internet in room, 40 inch LCD flatscreen television with in-room movies, Workspace with large desk, Modern ensuite bathroom with spacious walk-in shower, Coffee/tea making facilities and Chaise lounge.', 'bed-bedroom-cozy-164595.jpg'),
(2, 'Deluxe King Room', 450, 'available', 'Enjoy a king bed in this stylish room in the heart of Melbourne. Designed for natural and comfortable living, this room offers views of the atrium or city.  Stay connected with complimentray WIFI in your room.\r\n<br>\r\n<br>\r\n<strong>ROOM FEATURES:<strong>have Complimentary Internet in room, 40 inch LCD flatscreen television with in-room movies, iPad/iPod docking station, Workspace with large desk, Modern ensuite bathroom with spacious walk-in shower, Minibar, Coffee/tea making facilities and Chaise lounge.', 'deluxe_king_room_2.jpg'),
(3, 'Excutive King Room', 550, 'available', 'New Executive King rooms feature 25 sqm of superior design and comfort with Luxury king-sized beds, Smart TV, unlimited free Wi-Fi, chic bathroom amenities and in-room dining.\r\n<br>\r\n<br>\r\nGuest can access the Business Lounge located on the same level to relax or work while enjoying panoramic views and all-day refreshment.\r\n<br>\r\n<br>\r\nThe Executive King Room is ideal for the solo guest or couple, with a layout designed to maximise space, and thoughtful touches for a memorable stay.\r\n<br>\r\n<br>\r\n<strong>ROOM FEATURES:<strong>have Complimentary Internet in room, 55 inch LCD flatscreen television with in-room movies, iPad/iPod docking station, Workspace with large desk, Modern ensuite bathroom with spacious walk-in shower, Minibar, Coffee/tea making facilities and Chaise lounge.', 'excutive_king_room_1.jpg'),
(4, 'Primier King Room', 650, 'available', 'Primier King Rooms all enjoy an ensuite bathroom and comfortable King size bed. In addition, a large working desk, 55 inch LCD TV with Foxtel offering complimentary move channels. With hotel facilities close by you will enjoy easy access to all facilities including complimentary Wi-Fi, 24 hours a day. This room is suitable for up to 2 people.\r\n<br>\r\n<br>\r\n<strong>ROOM FEATURES:<strong>have Complimentary Internet in room, 55 inch LCD flatscreen television with in-room movies, iPad/iPod docking station, Workspace with large desk, Modern ensuite bathroom with spacious walk-in shower, Minibar, Coffee/tea making facilities and Chaise lounge.', 'primier_king_room_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `userID` int(25) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`userID`, `firstName`, `lastName`, `email`, `password`, `DOB`) VALUES
(20, 'A', 'A', 'A@gmail.com', '$2y$10$5WPzvflbEcpzD6nY9iRMh.0hNQaXBHpCo0SbHxhvw11BOp/E/PthK', '2019-06-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_list`
--
ALTER TABLE `hotel_list`
  ADD PRIMARY KEY (`HotelID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `room_list`
--
ALTER TABLE `room_list`
  ADD PRIMARY KEY (`RoomID`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_list`
--
ALTER TABLE `hotel_list`
  MODIFY `HotelID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `room_list`
--
ALTER TABLE `room_list`
  MODIFY `RoomID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `userID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
