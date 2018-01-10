-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 06:21 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `back`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `fname` varchar(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `no_of_people` int(11) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`fname`, `aname`, `no_of_people`, `date`, `username`) VALUES
('nidhi', '', 5, '2017-11-16', ''),
('nidhi', 'Pangong lake camping in Leh', 3, '2017-11-26', 'nidhi'),
('harshit', 'River Rafting in Kundalika', 3, '2017-11-26', 'hvshah97'),
('nidhi', 'River Rafting in Meghalaya', 3, '2017-11-28', 'nidhi'),
('', 'RockClimbing At Hampi', 5, '2017-10-14', 'hvshah97'),
('', 'Scuba Diving at Andaman Islands', 10, '2017-12-24', 'nidhi'),
('nidhi', 'Trek To Sengottaraayar Malai In Coonoor Near Ooty', 3, '2017-11-24', 'nidhi'),
('nidhi', 'Trekking in Manali', 10, '2017-11-12', 'nidhi'),
('abcd', 'Water Sports in Goa', 3, '2017-11-26', 'nidhi'),
('nidhi', 'Wildlife Safari in Rajsthan', 5, '2017-11-27', 'nidhi'),
('nidhi', 'River Rafting in Meghalaya', 3, '2017-11-24', 'nidhi');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `fullname` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `msg` varchar(900) NOT NULL,
  `reply` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`fullname`, `emailid`, `country`, `msg`, `reply`) VALUES
('harshit shah', 'hvshah97@gmail.com', 'india', 'hi, i would like to know the exact itineary ', 0),
('Nidhi Sankhesara', 'nidhi.s@somaiya.edu', 'india', 'Hello, I previously booked an activity with your firm but later i cancelled the activity.But i have not received the refund.Please look into the matter. ', 0),
('harshit shah', 'hvshah97@gmail.com', 'india', 'query', 0),
('harshit shah', 'hvshah97@gmail.com', 'india', 'query', 0),
('harshit shah', 'hvshah97@gmail.com', 'india', 'query', 0),
('Nidhi Sankhesara', 'mjhgdgaj@gmail.com', 'canada', 'bv', 0),
('Nidhi Sankhesara', 'mjhgdgaj@gmail.com', 'canada', 'bv', 0),
('harshit shah', 'hvshah97@gmail.com', 'india', 'hello', 0),
('harshit shah', 'hvshah97@gmail.com', 'india', '', 0),
('', '', 'india', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `card_no` bigint(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `expiry` varchar(100) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`card_no`, `fullname`, `expiry`, `cvv`) VALUES
(1111222233334444, 'harshit shah', '12/2017', 123),
(9999888877776666, 'mansi shah ', '12/2018', 123);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `aname` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `description` varchar(900) NOT NULL,
  `availability` int(11) NOT NULL,
  `type` varchar(5) NOT NULL,
  `picid` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`aname`, `place`, `description`, `availability`, `type`, `picid`, `duration`, `cost`) VALUES
(' Adventure Desert Camp in Rajasthan', 'Rajasthan', 'Rajasthan boasts its undulating landscape which is dominated by the golden sand dunes and this three day camp in Jodhpur willprovide you an amazing experience.\r\n\r\nGet a chance to visit to two ethnic communities as well.\r\n\r\nBask in the alluring sun set views which make Rajasthan shine in the evening; relish the glittering ambiance while you ride a camel through the desert.', 12, 'land', 'rajasthan_camp.png', '2 Days and 1 night', 5000),
(' Bird Watching in Ooty', 'Ooty', 'Birding in Ooty gives the photographer and wildlife lover in you a treat of a lifetime! The vivid colours will give your soul the peace it deserves!\r\n\r\n \r\n\r\nIf discovering exotic wildlife in the hills enthrals you, then this near to 4 hours’ birding in Ooty is the right activity for you this long weekend!', 70, 'land', 'ooty_bird.png', '1 Days and 0 Nights', 200),
(' Helicopter Trip On Andaman Islands', 'Andaman', 'Get ready to take part in an exhilarating aerial adventure above the turquoise waters of Andaman encircled by the enchanting greenery.\r\n\r\nThis is a three hour journey beginning from Port Blair and this is the trip letting you see the twin islands, the North and the South.\r\n\r\nGet picked up from your hotel and start the trip at 07:40 AM. Be amused while you soar like a bird above Havelock, North Passage, Saddle Peak, Ross and Smith Island and you will reach Diglipur.', 15, 'air', 'andaman_heli.png', '1 days and 0 nights', 4000),
('Bike Trip in Leh', 'Leh', 'Experience your version of The Motorcycle Diaries as you partake in this mesmerizing Leh ladakh bike trip of a lifetime Experience the supernatural allures of the mountains of the North over two weeks!\r\n\r\nBeginning from Delhi, take home the rewards of an opportunity that allows you to discover yourself in a world that beholds such astonishing visions. Relish the strenuous yet picturesque journey along the winding foothills and curves that will make the adrenaline pump through your veins on your Manali to Leh bike trip!', 90, 'land', 'leh_bike.png', '10 Days and 9 Nights', 25000),
('Camping at Umiam Lake In Meghalaya', 'Meghalaya', 'Indulge in an array of activities in the heart of the Northeastern India like never before\r\n\r\nReach Barapani at around 10 am and engage yourself in activities like rock climbing, rappelling, joomering, zip-lining, and many more.\r\n\r\nAs the night falls enjoy the campfire with musical performed by all team members.\r\n\r\nEnjoy a delightful night trek through the woods in the island.', 44, 'land', 'megha_camp.png', '2 days and 1 nights', 2000),
('Camping in Ooty', 'Ooty', 'Enjoy the escapade at the campsite with the chirping of birds and soothing music of the river and sleep forgetting all the worries. Feel the chillness near the waterfall and the camping experience will be made reverberating.', 50, 'land', 'ooty_camp.png', '1 Days and 0 Nights', 1000),
('Chadar trek in Leh', 'Leh', 'Nestled deep within the whirly passages of the snow-clad mountains, this frozen river also entices thousand of trekkers from different corners of the world. Popularly known as the \'Chadar Trek\' due to the formation of the thick blanket of the snow, it is considered as one of the challenging as well as tricky treks in the world.\r\n\r\nWhen this happens, the only way to continue with the trek is to hike through the snowy rocks and boulders besides the river.', 50, 'land', 'leh_trek.png', '9 Days and 8 Nights', 20000),
('Coral Reefs in Andaman  ', 'Andaman', 'Jolly Buoy Island or Red Skin Island for the best view of the multicoloured coral reefs that Andaman is famous for. It is always amazing to look at something from the last glacial period when the melting ice caused sea levels to rise and flood the continental shelves.', 50, 'water', 'andaman_coral.png', '1 days and 0 nights', 1000),
('Cruise in Goa', 'Goa', 'Witness coastal Goa like never before by indulging in this exciting luxury cruise that provides you with an unparalleled experience for 3 days.\r\n\r\nThis cruise is generally included in the North Goa Tours arranged by the GTDC. This is an hour long cruise on the Santa Monica which takes guests out on a leisurely sail down the River Mandovi from the Santa Monica jetty in Panaji.', 352, 'water', 'goa_cruise.png', '3 Days and 2 Nights', 10000),
('Elephant Waterfall Rapelling in Meghalaya', 'Meghalaya', 'Elephant Falls at Meghalaya solely holds the attraction of Upper Shillong. Specially in the rainy seasons, Elephant Falls comes to its full vigor and justifies its name.\r\n\r\nWaterfall rapelling at Elephant falls is one of the most thrilling things to do in Shillong. You have to descend through or alongside the waterfall for this activity. One has to be very careful while at it.', 35, 'water', 'megha_rapelling.png', '1 day and 0 nights', 250),
('Goechala Trek', 'Sikkim', 'Goecha La trek is a dream and desire for hundreds of adventure lovers throughout the country. Entangled amidst vibrant and colourful flora and fauna. it is a great pleasure to watch the summits.\r\n\r\nThe trek begins with your arrival at Bagdogra Airport or NJP railway station. Yuksom is where you will stay on the first night and from there, the exciting trek to Goechala commences.', 25, 'land', 'sikkim_trek2.png', '1 day and 1 night', 14000),
('Hot Air Balloon Rides in Rajsthan', 'Rajasthan', 'Check this package of hot air balloon safari in Jaipur that welcomes all those adventure freaks who want to soar like a bird. A hot air balloon can accommodate six people at a time and this would be a perfect adventure time with your friends or family.\r\n', 48, 'air', 'rajasthan_ball.png', '1 Days and 0 night', 5000),
('Hot Air Ballooning in Maharashtra', 'Maharashtra', 'Hot air ballooning in Maharashtra is mostly organised in the hill station of Lonavala.As the place lies 2050 feet above sea level in the hills of the Sahyadri Range of the Western Ghats, the weather here does not become unbearably hot.The forts of Lohagad and Visapur are important tourist attractions here that you may visit if your stay in Lonavala is long.', 12, 'air', 'lonavala.jpg', '1 day and 0 nights', 12000),
('Island Hopping in Andaman', 'Andaman', 'Get ready to be a part of this extensive tour of Andaman Islands, the most scenic location possible on earth.\r\n\r\nRoss Island and Chidiatapu have a lot in its gallery to unwind before the eyes of its visitors, because of that, you will need a whole day to explore these idyllic locations genuinely. Chidiatapu is 30 KM away from Port Blair, accommodating different species of birds in large numbers and the perfect spot to witness the most beautiful sunset on the Andaman Islands.', 45, 'water', 'andaman_island.png', '1 days and 0 nights', 2000),
('Kanchendzonga National Park', 'Sikkim', 'Kanchendzonga National Park is one of the UNESCO World Heritage and the largest wildlife reserve in Sikkim. It is one of the primary tourist attractions of Sikkim. The park attracts visitors from all over the world due to its flourishing vegetation which comprises of temperate wild leaf jungle dominated by oaks, diverse coniferous jungle comprising of fir, birch, maple, willow and others.', 35, 'land', 'sikkim_trek.png', '2 day and 1 night', 5000),
('Lohagad Fort Trek', 'Maharashtra', 'A significant chunk of Maharashtra is covered by the Western Ghats, known for their natural beauty and biodiversity.The trek to Lohagad Fort, a hilltop fortress built by the Marathas, begins from a village, known as Bhaje. You reach the fortress after walking through thickly forested hills and climbing a staircase.', 48, 'land', 'lohagad.jpg', '1 day and 1 night', 15000),
('Palace Hopping in Rajasthan', 'Rajasthan', 'The princely state of Rajasthan is famed for its glorious past, rich culture, and splendid heritage. The best palaces in Rajasthan – beautiful and grand – stand as testament to this fact.\r\n\r\nStart exploring the hidden features of this royal city starting with visiting the famous palaces like Amber Fort, Lake Palace and Lalgarh Palace.', 42, 'land', 'rajasthan_palace.png', '1 Days and 0 night', 500),
('Pangong lake camping in Leh', 'Leh', 'Experience the perfect camping experience under the clear night sky. Nestled amidst the bank of Pangong Lake in Spangmik, it has been considered as a heaven for the thrill seekers and the adventurers. Offering some of the spectacular view of the mountains of the Changchenmo range to the north you will feel like staying at this place forever.\r\n\r\nSpend some time staring at the reflection of the mountains as the shimmering water of Pangong Lake slowly changes its colour from bluish to greenish.', 20, 'land', 'leh_camp.png', '2 Days and 1 Nights', 2000),
('Paragliding At Solang Valley,Manali', 'Manali', 'A side valley at the top of Kullu, Solang is a traveller\'s dream. While visiting the beautiful valley, there are plenty of adventure sports that one can indulge in.', 52, 'air', 'manali_para.jpg', '1 day and 0 night', 8000),
('Paragliding near Kamshet', 'Maharashtra', 'Kamshet, a small town located off old Mumbai, is famous for two things: The OSHO Ashram and paragliding. The reliable weather conditions make it one of the most sought after and popular destination for paragliding.', 50, 'air', 'parakamset.jpg', '1 day and 0 night', 4999),
('River Rafting in Kundalika', 'Maharashtra', 'If you seek thrill and adventure, then a Kundalika River rafting expedition can be something that will definitely excite you. This river is situated in the state of Maharashtra and originates from the town of Bhira. Along the banks of this small rivulet are located towns like Salav, Kolad, Chaul, Roha and Korlai. This water body is fed by the surplus water from the Mulshi Dam Project. There lies a historical trade route from Tamhini Ghat Road that descends towards the Kundalika Valley.\r\n', 51, 'water', 'kundalika.jpg', '2 day and 1 night', 5210),
('River Rafting in Meghalaya', 'Meghalaya', 'Embark in this exciting and the most adventurous fun filled river rafting activity of 1 hour in Dawki.\r\n\r\nStart your activity after reaching Dawki at around 11.00 AM in the morning.\r\n\r\nRaft through the strong current of the water and conquer the strong waves.\r\n\r\nAfter this activity enjoy a delicious lunch.', 15, 'water', 'megha_rafting.png', '1 days and 0 nights', 1500),
('River Rafting near Bajura', 'Manali', 'The River Beas comes across as a perfect avenue for adventurers to indulge in some exhilarating rafting action amidst grade II and III rapids. An hour-long session of river rafting is sure to satiate your adventure craving. ', 43, 'water', 'manali_river.jpg', '1 day and 1 night', 7000),
('RockClimbing At Hampi', 'Hampi', 'Hampi is a place of historical significance and is one of the UNESCO Heritage Sites in India. It was the capital of the Vijaynagar kingdom during 13th to 16th century AD. Hampi houses giant temples, palaces, forts, monolithic structures, ancient monuments and their impressive ruins. A major part of the landscape is dotted with granite boulders or crags”ranging from 4 m to 60 m. One can find Rock Climbing enthusiasts from different nationalities here, all trying to test their skills and enjoy the challenge offered and hence Hampi rock climbing becomes one such place for international rock climbers to visit.', 100, 'land', 'hampi.jpg', '1 day and 1 night', 7000),
('Scuba Diving at Andaman Islands', 'Andaman ', 'Andaman is a kaleidoscope of colourful marine life and coral reefs. The sea is a pristine experience for divers with a lot of treasure to be explored. Due to less diver impact, you can discover an entire new sea world here.', 100, 'water', 'andaman.jpg', '1 day and 1 night', 10000),
('Sikkim Dzongri Trek', 'Sikkim', 'This enchanting 11 day tour of Sikkim including Dzongri enables you to revel in a distinct experience since the location is brimming with serenity.\r\n\r\nEmbark on this tour that starts at Bagdogra and then move to witness the unrivaled tranquility of Gangtok, Yuksom, Tshoka, Dzongri and Darjeeling.\r\n\r\nPass through the captivating mountain peaks, monasteries, tea plantations, museum and pagodas.', 20, 'land', 'sikkim_park.png', '1 day and 1 night', 22000),
('Silk Route Cycling Tour in Sikkim', 'Sikkim', 'This is one of the best adventurous trips through the Silk Route in Sikkim for 7 days covering the beautiful locations around Kanchenjunga and the Himalayan ranges.\r\n\r\nGet a transfer from New Jalpaiguri to Sillery Gaon from where you will start your cycling trip through the serene valleys and scenic mountain roads.\r\n\r\nRishikhola, Zuluk, Nathang Valley etc are the major points to visit during your tour.', 46, 'land', 'sikkim_biking.png', '1 day and 1 night', 20000),
('Skiing in Manali', 'Manali', 'Skiing is another thrill for adventure lovers while touring Manali, as they can indulge in some high adrenaline skiing sessions in the snow-clad mountains that surround the hill station. Want something even more thrilling? Go for heli-skiing or yak-skiing to make your experience unforgettable.', 100, 'land', 'manali_skiing.jpg', '1 day and 1 night', 10000),
('Trek To Sengottaraayar Malai In Coonoor Near Ooty', 'Ooty', 'Delight in this trekking expedition that enables you to witness the stunning beauty of Nilgiri\'s. This is a trip that provides you with the scenic views of the tea estates and surrounding hills.\r\n\r\nYou will trek through beautiful tiny hamlets, tea estates, lush-green thickets – rivet in this amazing trek that provides you with ample natural beauty.', 50, 'land', 'ooty_trek.png', '1 Days and 0 Nights', 1000),
('Trek To The Living Root Bridges In Meghalaya', 'Meghalaya', 'Get ready to revel in a breathtaking scenery with this trekking trip to the living root bridge or the double decker root bridge in Cherrapunji.\r\n\r\nThe way leading to the destination is more exciting as you cross thick jungles, stone steps, water streams etc and the view from the spot is amazing.\r\n\r\nTyrna village is the base point of this 1.5 hour long trek.\r\n\r\nDuring this three day guided trekking trip, you will be staying in a home-stay in Nongriat village.', 42, 'land', 'megha_trek.png', '3 days and 2 nights', 3500),
('Trekking in Goa', 'Goa', 'Trekking at Udaan Dongor in Goa provides you a wild experience of a lifetime along with your friends or family.\r\nThe trek begins as you depart from Panjim at 7:00 AM after getting picked up and arrive at the start point. Start trekking at 9:45 Am after a quick breifing from your guide and enjoy the amazing views.\r\nNavigate through rugged terrains and deceitful wilderness that provides you with serene views of Goa.', 20, 'land', 'goa_trek.png', '1 Days and 0 Nights', 2500),
('Trekking in Manali', 'Manali', 'Manali is an absolute delight for adventurers looking to take on the jagged hills. A great base camp for treks, Manali\'s Mountaineering Institute offers several types of high altitude hiking and rock climbing opportunities.', 40, 'land', 'manali_trek.jpg', '1 day and 1 night', 4000),
('Water Sports in Andaman', 'Andaman', 'Water Sports are most sought after adventure activities in Andaman for anyone who happens to visit these exotic locales. Spend first day at Port Blair for adventurous sporting activities such as Jet Ski, speed boats and banana rides. Second day enjoy the picturesque location of HAVELOCK for snorkeling, scuba diving and sea walk.', 50, 'water', 'andaman_water.png', '2 days and 1 nights', 8000),
('Water Sports in Goa', 'Goa', 'Goa is definitely an important beach destination for all travelers in the world and there  are hundreds of activities offered at the different beaches in Goa to make each one enjoy the level best.\r\nPartake in this one day tour after reaching Panjim in the morning around 09:00 am.\r\nYou will reach the island around 11:00 am.\r\nThe activities included in the package are Jetski, Banana Ride, Bumper Ride, Kayaking Ride, Water Zorbing, Fishing, Battery Boat, Paddle Boat etc.', 50, 'water', 'goa_water.png', '1 Days and 0 Nights', 2500),
('Wildlife Safari in Rajsthan', 'Rajasthan', 'A one day tour of Ranthanmbore from Jaipur would be an impressive tour for those who are looking for a differing travelling experience in Rajasthan.\r\n\r\nThis extensive trip starts from Jaipur around 08:30 AM. Approximately 4 hours journey will cover 145 KM in total.\r\n\r\nHop on a canter that is going to take you through the natural habitat of leopards, bears, deer, hyena, wild boars, tigers and rare wildlife species.', 25, 'land', 'rajasthan_park.png', '1 Days and 0 night', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `username` varchar(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `star` int(11) NOT NULL,
  `review` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`username`, `aname`, `star`, `review`) VALUES
('hvshah97', 'RockClimbing At Hampi', 4, 'liked it'),
('nidhi', 'Scuba Diving at Andaman Islands', 5, 'it was an amazing experience. '),
('nidhi', 'Trekking in Manali', 5, 'One of the best experiences ever. The entire tour was awesome. The guides were very helpful. '),
('nidhi', 'Wildlife Safari in Rajsthan', 0, 'It was an amazing Experience'),
('nidhi', 'Wildlife Safari in Rajsthan', 0, 'It was an amazing Experience'),
('hvshah97', 'River Rafting in Kundalika', 3, 'A great place'),
('', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `username`, `password`, `emailid`, `phone`) VALUES
('dhriti', 'dhriti', '123456789', 'dhriti.shah@somaiya.edu', '8888888888'),
('Harshit Shah', 'hvshah97', 'hvshah97', 'hvshah97@gmail.com', '9820130163'),
('Nidhi Sankhesara', 'nidhi', 'poiuytrewq', 'nidhi.s@somaiya.edu', '9664002597'),
('Nidhi Sankhesara', 'nidhi1', 'nidhi1', 'n@somaiya.edu', '787878787878');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`card_no`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`aname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
