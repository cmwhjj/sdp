-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 09:26 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_name`) VALUES
(1, 'lai', 'lai', 'lai');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `book_price` decimal(10,0) NOT NULL,
  `book_description` text NOT NULL,
  `book_publisher` varchar(50) NOT NULL,
  `book_year` int(11) NOT NULL,
  `book_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `genre_id`, `book_price`, `book_description`, `book_publisher`, `book_year`, `book_stock`) VALUES
(1, 'Into the Water', 1, '20', 'An addictive new novel of psychological suspense from the author of #1 New York Times bestseller and global phenomenon The Girl on the Train\r\n\r\n“Hawkins is at the forefront of a group of female authors—think Gillian Flynn and Megan Abbott—who have reinvigorated the literary suspense novel by tapping a rich vein of psychological menace and social unease… there’s a certain solace to a dark escape, in the promise of submerged truths coming to light.” —Vogue\r\n\r\nA single mother turns up dead at the bottom of the river that runs through town. Earlier in the summer, a vulnerable teenage girl met the same fate. They are not the first women lost to these dark waters, but their deaths disturb the river and its history, dredging up secrets long submerged.\r\n \r\nLeft behind is a lonely fifteen-year-old girl. Parentless and friendless, she now finds herself in the care of her mother\'s sister, a fearful stranger who has been dragged back to the place she deliberately ran from—a place to which she vowed she\'d never return.\r\n \r\nWith the same propulsive writing and acute understanding of human instincts that captivated millions of readers around the world in her explosive debut thriller, The Girl on the Train, Paula Hawkins delivers an urgent, twisting, deeply satisfying read that hinges on the deceptiveness of emotion and memory, as well as the devastating ways that the past can reach a long arm into the present.\r\n \r\nBeware a calm surface—you never know what lies beneath.', 'Paula Hawkins', 2017, 20),
(2, 'The Woman in Cabin 10', 1, '20', '"Lo Blacklock, a journalist who writes for a travel magazine, has just been given the assignment of a lifetime: a week on a luxury cruise with only a handful of cabins. At first, Lo\'s stay is nothing but pleasant as the exclusive cruise ship, the Aurora, begins her voyage in the picturesque North Sea. But as the week wears on, frigid winds ship the deck, gray skies fall, and Lo witnesses what she can only describe as a dark and terrifying nightmare: a woman being thrown overboard. The problem? All passengers remain accounted for--and so, the ship sails on as if nothing has happened, despite Lo\'s desperate attempts to convey that something has gone terribly wrong."', 'Ruth Ware', 2017, 20),
(3, 'Fifty Shades of Grey', 2, '30', 'Fifty Shades of Grey is a 2011 erotic romance novel by British author E. L. James, originally a Twilight fanfiction with Christian Grey as a non-vampire Edward Cullen and Anastasia Steele as a wan, gamine Bella Swan', ' E. L. James', 2011, 20),
(4, 'Love Story', 2, '30', 'Love Story is a 1970 romance novel by American writer Erich Segal. The book\'s origins lay in a screenplay that Segal wrote, and that was subsequently approved for production by Paramount Pictures', 'Erich Segal', 1970, 20),
(5, 'SorrowtoothpasteMirrorcream', 3, '25', 'Poetry. East Asia Studies. Women\'s Studies. Translated from the Korean by Don Mee Choi. "Her poems are not ironic. They are direct, deliberately grotesque, theatrical, unsettling, excessive, visceral and somatic. This is feminist surrealism loaded with shifting, playful linguistics that both defile and defy traditional roles for women"—Pam Brown', 'Kim Hyesoon', 2011, 20),
(6, 'TheMorningNewsisExciting', 3, '25', '"The Morning News makes the divide between poetry and prose pointless. Choi is not particularly interested in the art/academic blurring of poetry/prose, but in taking each area to its limits." Sande Cohen\r\n\r\n"This collection arrives below the 38th parallel, crosses transnational distances, and dwells within the traumatic and triumphant experience of women as exiles and against empire. Choi translates feminist politics into an experimental poetry that demilitarizes, deconstructs, and decolonizes any master narrative." Craig Santos Perez\r\n\r\n"In this book, Choi transits and translates the doubleness of self, kin, home and nation shattered by past colonialism and by continuing imperialism and capitalist predation." Minnie Bruce Pratt', 'Don Mee Choi', 2010, 20),
(7, 'Directingthedocumentary', 4, '28', 'Directing the Documentary, Sixth Edition is the definitive book on the form, offering time-tested principles to help you master the craft. Ideal for documentary courses as well as aspiring and established documentary filmmakers, this book has it all, with in-depth lessons and insider perspectives on every aspect of preproduction, production, and postproduction. Focusing on the hands-on work needed to make your concept a reality, this new edition covers it all, from the fundamental to advanced elements of directing and more. It includes dozens of projects, practical exercises, and thought-provoking questions, and provides best practices for researching and honing your documentary idea, developing a crew, guiding your team, maintaining control throughout the shoot, and much more.', 'Michael Rabiger', 1987, 20),
(8, 'Intro to Documentary', 4, '28', 'This new edition of Bill Nichols’s bestselling text provides an up-to-date introduction to the most important issues in documentary history and criticism. Designed for students in any field that makes use of visual evidence and persuasive strategies, Introduction to Documentary identifies the distinguishing qualities of documentary and teaches the viewer how to read documentary film. Each chapter takes up a discrete question, from "How did documentary filmmaking get started?" to "Why are ethical issues central to documentary filmmaking?" Carefully revised to take account of new work and trends, this volume includes information on more than 100 documentaries released since the first edition, an expanded treatment of the six documentary modes, new still images, and a greatly expanded list of distributors.', 'Bill Nichols', 2001, 20),
(9, 'Acting for Animators', 5, '35', 'Ed Hooks\' indispensable acting guidebook for animators has been fully updated and improved! \r\n\r\nHooks uses basic acting theory to explain everything from character movement and facial expressions to interaction and scene construction. Just as acting on film and on stage are very different disciplines, so is the use of acting theory in creating an animated character, scene or story. Acting for Animators is full of essential craft tips from an acting master. ', 'Ed Hooks', 2011, 20),
(10, 'The Art of Tangled', 5, '35', 'A lighthearted twist on Rapunzel, the beloved fairy tale from the Brothers Grimm, Tangled brims with thrilling adventure, a distinctive cast of characters, a daring heroine, and, of course, seventy feet of golden hair. Featuring the stunning concept art behind the newest Disney masterpiece, The Art of Tangled also includes a preface by John Lasseter, a foreword by Directors Nathan Greno and Byron Howard, and interviews with the artists, animators, and production team—including Art Director David Goetz—that shed light on the history and artistry of this landmark film.', 'Jeff Kurtti', 2010, 20),
(11, 'MurderontheOrientExpress', 6, '38', 'Murder on the Orient Express is a detective novel by Agatha Christie featuring the Belgian detective Hercule Poirot. It was first published in the United Kingdom by the Collins Crime Club on 1 January 1934', 'Agatha Christie', 1934, 20),
(12, 'A Study in Scarlet', 6, '38', 'A Study in Scarlet is an 1887 detective novel by British author Arthur Conan Doyle. Written in 1886, the story marks the first appearance of Sherlock Holmes and Dr. Watson, who would become two of the most famous characters in popular fiction', 'Arthur Conan Doyle', 1887, 20);

-- --------------------------------------------------------

--
-- Table structure for table `bookorder`
--

CREATE TABLE `bookorder` (
  `border_id` int(11) NOT NULL,
  `book_name` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_quantity` int(11) NOT NULL,
  `notice` int(11) NOT NULL,
  `publisher_email` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `publisher_name` int(11) NOT NULL,
  `order_load` varchar(20) NOT NULL DEFAULT 'Non',
  `order_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_gender` varchar(6) NOT NULL,
  `customer_username` varchar(20) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_trustworthy` varchar(20) DEFAULT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_dob` date NOT NULL,
  `customer_register_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_gender`, `customer_username`, `customer_password`, `customer_trustworthy`, `customer_phone`, `customer_email`, `customer_dob`, `customer_register_at`) VALUES
(3, 'lcm', 'Female', 'lcm12345', '4e4d6c332b6fe62a63afe56171fd3725', NULL, '01010101001', 'lcm@cm.com', '2018-05-20', '2018-01-20 09:00:56'),
(4, 'xdf', 'Male', 'xdf', '3736c1d713f9f55d523ce16885e2d840', NULL, 'xdf', 'xdf', '2018-03-20', '2018-01-20 09:02:06'),
(5, 'vjv', 'Male', 'vgj', 'ecdc515da5a8e6e665e416edbadb00c4', NULL, 'cfhch', 'jch', '2018-01-20', '2018-01-20 09:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `feedback_scale` int(11) NOT NULL,
  `feedback_text` varchar(512) NOT NULL,
  `feedback_left_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Thriller'),
(2, 'Romance'),
(3, 'Action'),
(4, 'Documentary'),
(5, 'Animation '),
(6, 'Mystery fiction');

-- --------------------------------------------------------

--
-- Table structure for table `loginrecord`
--

CREATE TABLE `loginrecord` (
  `customer_id` int(11) NOT NULL,
  `login_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `login_success` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginrecord`
--

INSERT INTO `loginrecord` (`customer_id`, `login_at`, `login_success`) VALUES
(3, '2018-01-20 09:29:17', 1),
(3, '2018-01-20 09:29:28', 1),
(3, '2018-01-20 09:32:14', 1),
(3, '2018-01-20 09:33:17', 1),
(3, '2018-01-27 05:03:09', 1),
(3, '2018-01-27 05:03:09', 1),
(3, '2018-01-27 05:27:04', 1),
(3, '2018-01-27 05:28:49', 1),
(3, '2018-01-27 05:29:55', 1),
(3, '2018-01-27 05:30:34', 1),
(3, '2018-01-27 05:40:56', 1),
(3, '2018-02-22 10:43:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `feedback_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `rating_scale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestbook`
--

CREATE TABLE `requestbook` (
  `admin_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_quantity` int(11) NOT NULL,
  `request_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `loginrecord`
--
ALTER TABLE `loginrecord`
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD KEY `feedback_id` (`feedback_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `requestbook`
--
ALTER TABLE `requestbook`
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `book_id` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `loginrecord`
--
ALTER TABLE `loginrecord`
  ADD CONSTRAINT `loginrecord_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`feedback_id`) REFERENCES `feedback` (`feedback_id`);

--
-- Constraints for table `requestbook`
--
ALTER TABLE `requestbook`
  ADD CONSTRAINT `requestbook_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `requestbook_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
