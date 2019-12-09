-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 01:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery2`
--
CREATE DATABASE IF NOT EXISTS `bakery2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bakery2`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `commentFrom` varchar(15) NOT NULL,
  `commentTo` varchar(15) NOT NULL,
  `commentText` varchar(140) NOT NULL,
  `commentDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentID`, `commentFrom`, `commentTo`, `commentText`, `commentDate`) VALUES
(66, 'Admin10!', 'Paula10!', 'Test\r\n', '2019-12-09 01:23:16'),
(67, 'Admin10!', 'Paula10!', 'Test Way to go ', '2019-12-09 01:24:00'),
(68, 'Admin10!', 'Paula10!', 'Thank you', '2019-12-09 01:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(11) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventCode` varchar(10) NOT NULL,
  `eventLocation` varchar(255) NOT NULL,
  `eventTime` varchar(25) NOT NULL,
  `eventDiscription` varchar(255) NOT NULL,
  `eventCost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `eventName`, `eventCode`, `eventLocation`, `eventTime`, `eventDiscription`, `eventCost`) VALUES
(13, 'Turkey Time', 'Turk', '593 South Alams St\r\nLicoln NE, 68504\r\n', '11/20/2019 at 1pm', 'You will be able to learn how to make the most amazing turkey....Ever', 150),
(14, 'Christmas Pies', 'Chris', '593 South Alams St\r\nLicoln NE, 68504\r\n', '12/18/2019 at 1pm', 'Joy to the World its Pie time', 35),
(49, 'Meet Santa', 'santa', '2435 N 85th st, Lincoln NE, 68547', '1:00 PM', 'Come take pictures with Santa!!', 25),
(50, 'Wrap Gifts', 'gifts', '2435 N 85th st, Lincoln NE, 68547', '3:00 PM', 'Come wrap all your Christmas gifts with us. All will be included with payment( Paper, bows, and more)', 25),
(51, 'Star Cookies', 'star', '2435 N 85th st, Lincoln NE, 68547', '1:00 PM', 'Come bake some amazing cookies with us, Hot Coco is includes!!', 25);

-- --------------------------------------------------------

--
-- Table structure for table `loggedevents`
--

CREATE TABLE `loggedevents` (
  `log_id` int(11) NOT NULL,
  `fk_user` varchar(11) NOT NULL,
  `fk_events` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loggedevents`
--

INSERT INTO `loggedevents` (`log_id`, `fk_user`, `fk_events`, `date`) VALUES
(26, 'Millerbaby1', 28, '2019-12-05'),
(27, 'Millerbaby1', 13, '2019-12-05'),
(28, 'Millerbaby1', 14, '2019-12-08'),
(29, 'Paula10!', 13, '2019-12-09'),
(30, 'Paula10!', 13, '2019-12-09'),
(31, 'Paula10!', 13, '2019-12-09'),
(32, 'Paula10!', 13, '2019-12-09'),
(33, 'Paula10!', 14, '2019-12-09'),
(34, 'Paula10!', 14, '2019-12-09'),
(35, 'Paula10!', 14, '2019-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `sur_id` int(11) NOT NULL,
  `fk_user` varchar(11) NOT NULL,
  `quality` varchar(255) NOT NULL,
  `recommend` varchar(25) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`sur_id`, `fk_user`, `quality`, `recommend`, `comments`, `date`) VALUES
(20, 'Paula10!', 'The sweets were amazing.', 'Yes', 'Thank you for the fast service. ', '2019-12-09'),
(21, 'Paula10!', 'The cake was kinda dry', 'No', 'Will not return', '2019-12-09'),
(22, 'Paula10!', 'Best Cupcakes ever!!!', 'Yes', 'Love this place', '2019-12-09'),
(23, 'Paula10!', 'Loved my wedding cake ', 'Yes', 'Awesome people', '2019-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `sweets`
--

CREATE TABLE `sweets` (
  `sweetsID` int(11) NOT NULL,
  `sweetTypeID` int(11) NOT NULL,
  `sweetsCode` varchar(10) NOT NULL,
  `sweetsName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `listPrice` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sweets`
--

INSERT INTO `sweets` (`sweetsID`, `sweetTypeID`, `sweetsCode`, `sweetsName`, `description`, `listPrice`) VALUES
(1, 1, 'co', 'chocolate chip cookies', 'This is the best chocolate chip cookie recipe ever! No funny ingredients, no chilling time, etc. Just a simple, straightforward, amazingly delicious, doughy yet still fully cooked, chocolate chip cookie that turns out perfectly every single time! ', '3.50'),
(2, 1, 'Br', 'Brownie Cookie', 'Do you like Brownies! I am happy to report that these Brownie Cookies taste exactly like brownies.\r\nThey are chewy, fudgy, and melt-in-your-mouth delicious!', '3.50'),
(3, 1, 'red', 'Red Velvet', 'Red velvet cake meets a soft-baked chocolate chip cookie today. A blissful marriage of two classic desserts!', '3.50'),
(4, 3, 'Rustic', 'Rustic Wedding Cake', 'With berries, blooms, and other nature-inspired details, rustic wedding cakes are the countryside confections of choice that have guests scrambling to score a slice.', '350.00'),
(5, 2, 'SmCup', 's\'mores cupcakes', 'There\'s no denying it. And now you can have everything you love about s mores - buttery graham crackers, melty chocolate, and toasted marshmallow - in a cupcake! Its the best of both worlds!!', '4.50'),
(6, 2, 'bday', 'Birthday Cake Cupcake', 'These cupcakes are packed full of colorful sprinkles and made with a simple white cake base, then topped off with a sweet vanilla buttercream (and, of course, sprinkles!).', '4.50'),
(7, 2, 'sunday', 'Sunday CupCake', 'I scream for Ice cream we all scream for Ice cream. Your inner child called and specifically asked for you to make these immediately.', '4.50'),
(8, 3, 'cheese', 'Cheese Cake ', 'Let Them Eat Cheesecake. This is probably one of the most beautiful wedding cakes we have done in a while. Only the top tier is traditional wedding cake. The other four tiers are cheesecake -- chocolate marble, strawberry, amaretto, and plain!', '400.50'),
(9, 3, 'Weeding', 'White Wedding Cake', 'This beautiful Cake is accent with fresh white flowers, is simple yet beautiful. It is A two-tiered wedding cake with all-over ruffle details and sugar flower.', '300.00');

-- --------------------------------------------------------

--
-- Table structure for table `sweetstype`
--

CREATE TABLE `sweetstype` (
  `sweetTypeID` int(11) NOT NULL,
  `sweetTypeName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sweetstype`
--

INSERT INTO `sweetstype` (`sweetTypeID`, `sweetTypeName`) VALUES
(1, 'Cookies'),
(2, 'Cupcakes'),
(3, 'Cakes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uName` varchar(15) NOT NULL,
  `fName` char(20) NOT NULL,
  `lName` char(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userType` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uName`, `fName`, `lName`, `email`, `password`, `userType`) VALUES
('Admin10!', 'PaulaAdmin', 'TestAdmin', 'Admin@sweets.com', '$2y$12$JTeFANiw8U6QKEBSU/SMaOnA1RuZJh3CAm/nALMOu09qnbAro22f.', 'admin'),
('dghfgh', 'Paula', 'Miller', 'paulagraves211@yahoo.com', '$2y$12$GWfAgKjsS2QvDWk5J41B7OGhTJRLb9NttKp02IoJTJxM2D2.E1xe2', ''),
('Millerlolo10', 'Paula', 'John', 'LoloMiller@yahoo.com', '$2y$12$LHdcAXYKjn6ieDTsoADxZujQRkWbpmGCb/lEBK249OW4koafiyMQS', 'admin'),
('Millers1!', 'Bob', 'Test', 'Test@yahoo.com', '$2y$12$elFbYVj0l1VmjvsdTGFLJ.U0xmTg/PGoZykavQG4X5HsJ6ZUrOViO', ''),
('Paula10!', 'Paula', 'Miller', 'PaulaMiller211@yahoo.com', '$2y$12$nvVrxQfaqc4G.U8gP8PYWuxspZ1b8N9trxp1YOQ/WGWFM8aGXd5hi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`),
  ADD UNIQUE KEY `eventCode` (`eventCode`);

--
-- Indexes for table `loggedevents`
--
ALTER TABLE `loggedevents`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`sur_id`);

--
-- Indexes for table `sweets`
--
ALTER TABLE `sweets`
  ADD PRIMARY KEY (`sweetsID`),
  ADD UNIQUE KEY `sweetsCode` (`sweetsCode`),
  ADD KEY `categoryID` (`sweetTypeID`);

--
-- Indexes for table `sweetstype`
--
ALTER TABLE `sweetstype`
  ADD PRIMARY KEY (`sweetTypeID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `loggedevents`
--
ALTER TABLE `loggedevents`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `sur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sweets`
--
ALTER TABLE `sweets`
  MODIFY `sweetsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
