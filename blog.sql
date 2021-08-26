-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 09:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `long_description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `long_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A Trip To Jaipur (Pink City)', 'Hawa Mahal: Jaipur’s most iconic landmark, the red and pink sandstone façade of Hawa Mahal or Palace of Winds is widely recognised. ', 'Hawa Mahal: Jaipur’s most iconic landmark, the red and pink sandstone façade of Hawa Mahal or Palace of Winds is widely recognised. Within its chambers, hidden from public view, the women of the royal house would secretly observe the activities on the street, through the palace’s latticework openings. A fine example of Mughal architecture, the pyramidal design of Hawa Mahal rises five-storeys from the ground.  Nahargarh Fort: Nahargarh Fort: Set on the edge of the Aravalli Hills, Nahargarh Fort is striking in stature. Built as the summer palace for the royal family, the main palace within the fort is known as Madhavendra Bhawan. In addition, there are nine other double-storied living spaces within the fort. An example of Indo-European architectural style, the royal frescos and marble engravings can still be see on the interior walls here. The views of Jaipur city are stunning from Nahagarh Fort.  Amber Fort: The charm of Amber Fort is undeniable. Perched on a hilltop, this 15th century fort is impressive –- both in terms of size and architecture. It can be accessed through imposing ramparts and cobbled pathways, leading to its gates. Built using Mughal-style architecture, the golden frontage is complemented by elaborate interiors. The ornate archways lead to expansive chambers, featuring hand-painted and mirrorworked ceilings and walls. The fort houses the Diwan-e-Aam, or ‘Hall of Public Audience’, the Diwan-e-Khas, or ‘Hall of Private Audience’, and also the Sheesh Mahal, the ‘Mirror Palace’. The splendor of Amber Fort is heightened during the Light and Sound Show in the evening, which is a must watch.  Jantar Mantar: Dating back to the 18th century, Jantar Mantar is an astronomical observation site and a testimony to the scholarly brilliance of a bygone era. Among the 20 instruments found at this UNESCO World Heritage Site, is the largest sundial in the world.', 'Hawa-Mahal-940x671.jpg', 1, '2021-08-23 18:52:22', '2021-08-25 13:09:00'),
(3, 'Trip To Vatican City', 'Rome is one of the popular tourist destinations accounting for over 9 million visitors every year. ', 'Rome is one of the popular tourist destinations accounting for over 9 million visitors every year. What makes Rome one of the preferred destinations is its architectural brilliance and some of the most exquisite art galleries and of course the great history of the roman empire which has widely propagated across the globe for centuries.Vatican City has been an integral part of Rome’s history and has played a crucial role in shaping the city over the years. Even though Vatican city nestles in the administrative province of Rome, it is a stand-alone entity with a surface area of 121 acres, the Smallest known country in the world, and has a separate administrative structure, governing policies, and citizenship as well.The St. Peters Basilica Continues Centre-Piece of The Vatican over the years with the count of Christians Piligrms increasing visiting exponential over the past few centuries. The Church believed to be one of the holiest churches as well as the largest church in the world. The meticulously Designed architecture of the Chruch dates back to the 16th century when Carlo Maderno, The Italian architect completed the previously halted structure. Each Statue that forms a facade of the Chruch has a Spiritual story behind it.  Once you enter the Church, You realize that it is not just the largest church in the world but also a magnificent museum. The Chruch is bestowed with rich work of art from the Renaissance era Artist like Michelangelo and Bernini. If you are interested in art and architecture and the related stories and Rome history it is always recommended to opt for a guided tour or make use of the audio guides available at the church.', 'HERO_UltimateRome_Hero_shutterstock789412159.jpg', 1, '2021-08-23 18:59:52', '2021-08-25 13:10:00'),
(4, 'A Trip To Manali', 'The river Beas flows through Manali and chances it will dominate the landscape during your stay in Manali.', 'The river Beas flows through Manali and chances it will dominate the landscape during your stay in Manali. You can enjoy your morning tea perched prettily on the lawns over this river as the gushing river makes music with birdsong. Enjoy this blissful time with your family, your partner and just by yourself. Open a book and be lost in it as the mountains lose themselves in the clouds. Or pack your bags and head down to the river for some rafting action..Walk up to the Hidimba temple on one of the evenings during your stay in Manali. It’s a simple walk through some beautiful forests.. A beautiful forest walk connects Old Manali to the Manali market. You walk through the thick deodar forest along the Beas river as numerous birds follow you. It’s hard to believe that the road is just a few meters away.. You can spend some time in the Solang valley to get that adrenaline going. Naggar palace is well preserved and will satiate the history buff in you..', 'manali.jpg', 1, '2021-08-24 15:18:44', '2021-08-25 13:11:00'),
(5, 'ssdsd', 'sdcsdc', '', 'ajanta-and-ellora-caves.jpg', 0, '2021-08-24 18:33:34', '2021-08-24 20:04:22'),
(6, 'A Trip To Himalaya', 'The Indian Himalayan Region dips and dives in and out of the Lesser, Greater, Tethys and Siwalik Ranges with the states of Jammu & Kashmir, Himachal Pradesh, Uttarakhand, Sikkim, Arunachal Pradesh, Assam and West Bengal claiming pieces of pie.', 'In january 2020 we got the oppertunity to travel on Himalaya(Sikkim) . On my first trip to india i was excited to see the golden triangle. But that is like only having one piece of the toblerone. The inidian Himalayas were like being presented with the whole bar and the giant one at that. The Indian Himalayan Region dips and dives in and out of the Lesser, Greater, Tethys and Siwalik Ranges with the states of Jammu & Kashmir, Himachal Pradesh, Uttarakhand, Sikkim, Arunachal Pradesh, Assam and West Bengal claiming pieces of pie.Dharamsala is the nearest town to the home to the Dalai Lama and the exiled Tibetan government, which is actually at McLeod Ganj, just 3km north of the town. The word Dharamsala means ‘spiritual dwelling’ and has been a place of pilgrimage for centuries. But you do feel a sense of greatness here, not just from His Holiness’ temple in the Tsuglag Khang complex but also from the omnipresence of the Himalayas.', 'himachal.jpg', 1, '2021-08-24 20:07:06', '2021-08-25 13:11:51'),
(7, 'Trip to Ajanta Ellora Caves', 'Ajanta and Ellora caves, considered to be one of the finest examples of ancient rock-cut caves, are located near Aurangabad in Maharashtra, India. Ajanta and Ellora caves complex is adorned with beautiful sculptures, paintings, and frescoes and include Buddhist monasteries, Hindu and Jain temples.', 'Ajanta and Ellora caves, considered to be one of the finest examples of ancient rock-cut caves, are located near Aurangabad in Maharashtra, India. Ajanta and Ellora caves complex is adorned with beautiful sculptures, paintings, and frescoes and include Buddhist monasteries, Hindu and Jain temples. The Ajanta caves are 29 in number and were built between the 2nd century BC and 6th century AD, whereas the Ellora Caves are more spread out and 34 in number and dates to the period between 6th and 11th Century AD.Having a striking resemblance to Taj Mahal, the Bibi ka Maqbara is a beautiful mausoleum of Rabia- Ul - Daurani alias Dilras Banu Begum, the wife of Mughal Emperor Aurangzeb. Bibi ka Maqbara was constructed by Aurangzeb in the year 1661 in the memory of his wife. Aurangzeb attributed this magnificent edifice in the name of his son Azam Shah who was born in the year 1653, so as to commemorate Rabia - Ul - Daurani, who left for her heavenly abode in the year 1657.  The monument resembles the famous Taj Mahal', 'ajanta-and-ellora-caves.jpg', 1, '2021-08-24 20:09:04', '2021-08-25 13:13:31'),
(8, 'hello', 'hello', 'hello', 'm.jpg', 0, '2021-08-25 19:13:30', '2021-08-25 19:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(4, 'Pratibha Singh', 'pratibhasingh31p@gmail.com', 'Jaipur Trip', 'Wants to know what is the best place in Jaipur.', '2021-08-23 20:16:19'),
(5, 'Ram', 'ram@gmail.com', 'Camera', 'Just Want to know about the camera you are using.', '2021-08-23 20:19:42'),
(6, 'Madhu Singh', 'madhu@gmail.com', 'Solo trip', 'Best Location for Solo trip', '2021-08-23 20:22:17'),
(8, 'test', 'test@gmail.com', 'test', 'test', '2021-08-25 13:18:46'),
(9, 'Anmol', 'anmol@gmail.com', 'hii', 'hiii', '2021-08-25 19:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'India', 'Hawa-Mahal-940x671.jpg', 1, '2021-08-23 16:53:38', '2021-08-24 21:04:47'),
(3, 'France', '9c.jpg', 1, '2021-08-23 18:59:17', '2021-08-24 21:04:37'),
(4, 'America', 'usa-best-places-las-vegas.jpg', 1, '2021-08-24 20:59:04', '2021-08-24 21:03:27'),
(5, 'England', '89.jpg', 1, '2021-08-24 21:09:46', '2021-08-24 21:10:18'),
(6, 'Pakistan', 'pak.jpg', 0, '2021-08-26 11:57:16', '2021-08-26 11:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `name`, `email`, `message`, `date`, `created_at`) VALUES
(1, 'Pratibha Singh', 'singhpratibha21v@gmail.com', 'hii', '2021-08-26', '2021-08-26 12:55:17'),
(2, 'Anmol', 'anmol@gmail.com', 'hello sir', '2021-08-26', '2021-08-26 13:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work`
--

CREATE TABLE `tbl_work` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_work`
--

INSERT INTO `tbl_work` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Pratibha Singh', 'pratibhasingh31p@gmail.com', 'hiii', '2021-08-26 11:49:56'),
(3, 'Anmol', 'anmol@gmail.com', 'hello', '2021-08-26 11:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `role` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `status`, `role`, `created_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 1, 1, '2021-08-23 14:15:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_work`
--
ALTER TABLE `tbl_work`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_work`
--
ALTER TABLE `tbl_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
