-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 01:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enigma`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `isaccess` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`, `email`, `isaccess`) VALUES
(1, 'vijai', '4321', 'mark@zuck.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `type` varchar(255) NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_events`
--

CREATE TABLE `main_events` (
  `eid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `type` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_events`
--

INSERT INTO `main_events` (`eid`, `name`, `description`, `type`, `time`, `date`, `email`) VALUES
(5, 'CODE DEBUGGING', 'Debugging means to run your code step by step in a debugging tool like Visual Studio, to find the exact point where you made a programming mistake.', 'technical', '10:28', '2024-04-12', ''),
(6, 'CODE MONK', 'Codemonk is a curated list of topics to help you improve your skills in the fundamental concepts of programming.', 'technical', '10:28', '2024-04-12', ''),
(7, 'WEB STACK', 'A web stack is a compilation of softwareA web stack is a type of solution stack, which is a collection of software for performing specific tasks. Web stacks are critical components for web applications as well as websites.', 'technical', '12:31', '2024-04-25', ''),
(9, 'NEED FOR SPEED', 'Need for Speed is a racing game franchise published by Electronic Arts and currently developed by Criterion Games, the developers of Burnout. ', 'Technical', '12:37', '2024-04-12', ''),
(10, 'ROBO WAR', 'Robo War is an open-source video game in which the player programs onscreen icon-like robots to battle each other with animation and sound effects.', 'Technical', '14:48', '2024-04-12', ''),
(13, 'RUBIK\'S RUCKUS', 'Whether you solve the Rubik\'s Cube in ten seconds or ten minutes— you experience a great sense of accomplishment and pride', 'Technical', '11:51', '2024-04-13', ''),
(14, 'SHARK TANK', '\"SarkTank Competition\" is a thrilling board game where players step into the shoes of entrepreneurs, pitching their innovative ideas to a panel of \"sarks\" (sharks).', 'technical', '12:06', '2024-04-13', ''),
(27, 'Graphic Design', 'Join our Graphic Design event for industry insights, workshops, networking, and inspiration. Elevate your skills and creativity with us', 'Technical', '14:13', '2024-03-14', ''),
(28, '(Mind Bend )Riddle', ' Engage in mind-bending puzzles, clues, and mysteries, competing or collaborating to solve them within a time limit.', 'technical', '14:14', '2024-03-08', ''),
(29, 'Circuit Design', 'Circuit Design event challenges participants to create innovative electronic circuits, fostering creativity, problem-solving, and engineering skills.', 'Technical', '19:12', '2024-03-13', ''),
(31, 'Bridge Kriti', 'Bridge Kriti: An innovative event fostering bridge-building skills, collaboration, and creativity through interactive challenges and problem-solving activities.', 'technical', '14:21', '2024-03-20', ''),
(32, 'Kho-kho', 'Kho Kho is a traditional Indian tag sport played between two teams. Each team takes turns chasing and defending, with the aim of tagging opponents. It requires speed, agility, and strategic teamwork to win.', 'Sport', '10:00', '2024-04-11', ''),
(34, 'Table tennis', 'Table tennis, also known as ping pong, is a fast-paced indoor sport played on a table divided by a net. Players use small paddles to hit a lightweight ball back and forth, aiming to score points by hitting the ball so that it lands on the opponent\'s side of the table. ', 'Sport', '10:00', '2024-04-11', ''),
(35, 'Football ', 'Football, often called soccer in some countries, is a globally beloved sport played between two teams of eleven players each. The objective is to score goals by getting the ball into the opposing team\'s net using any part of the body except the hands and arms. ', 'Sport', '05:14', '2024-04-11', ''),
(38, 'Volleyball', 'Volleyball is a team sport played with six players on each side, aiming to score points by hitting a ball over a net and into the opponent\'s court. Players use their hands or arms to pass, set, and spike the ball, with quick reflexes and teamwork being crucial for success.', 'Sport', '10:00', '2024-04-11', ''),
(39, 'Kabaddi', 'Kabaddi is a contact team sport originating from ancient India, typically played with two teams of seven players each. Players take turns sending a \"raider\" into the opposing team\'s half, aiming to tag as many defenders as possible while holding their breath and chanting \"kabaddi.\" ', 'Sport', '10:00', '2024-04-11', ''),
(40, 'Long Jump', 'Long jump is a track and field event where athletes sprint down a runway and jump horizontally as far as possible into a sandpit.', 'Sport', '16:17', '2024-04-11', ''),
(41, 'Basketball', 'Basketball is a fast-paced team sport played on a rectangular court, where two teams of five players each aim to score points by shooting a ball through the opponent\'s hoop while preventing them from doing the same.', 'Sport', '10:00', '2024-04-11', ''),
(42, 'High Jump', 'High jump is a track and field event where athletes attempt to jump over a horizontal bar, using a variety of techniques, with the goal of clearing the greatest height possible without knocking the bar off its supports.', 'Sport', '05:18', '2024-04-11', ''),
(43, 'Chess', 'Chess is a strategic board game played between two players, each controlling an army of pieces with the objective of checkmating the opponent\'s king, while also incorporating elements of foresight, planning, and tactical maneuvers.', 'Sport', '06:18', '2024-04-11', ''),
(44, 'Badminton', 'Badminton is a fast-paced racquet sport played with a shuttlecock, where players or teams hit it back and forth over a net, aiming to land it in the opponent\'s court while employing agility, accuracy, and power in their shots.', 'Sport', '10:00', '2024-04-11', ''),
(45, 'Shotput', 'Shot put is a track and field event where athletes throw a heavy metal ball (the shot) as far as possible from within a circle, employing techniques such as the glide or spin to generate momentum and achieve maximum distance.', 'Sport', '10:00', '2024-04-11', ''),
(46, 'Discus Throw', 'Discus throw is a track and field event where athletes aim to throw a heavy discus as far as possible from a circle. The thrower spins within the circle before releasing the discus, utilizing rotational momentum and proper technique to achieve maximum distance. ', 'Sport', '06:19', '2024-04-11', ''),
(47, '100m Race', 'The 100-meter race is a sprint event in track and field, where athletes compete to cover the distance of 100 meters in the shortest time possible. It demands explosive speed, power, and exceptional acceleration from the starting blocks, with competitors striving to cross the finish line first to claim victory.', 'Sport', '10:00', '2024-04-11', ''),
(48, 'Carrom', 'Carrom is a tabletop game played by flicking discs with a striker to pot them into corner pockets, while aiming to pocket all one\'s own pieces before the opponent does. It requires precision, strategy, and flicking skills to win matches in this popular game, often enjoyed in homes and clubs across various cultures.', 'Sport', '06:20', '2024-04-11', ''),
(49, 'Rangoli', ' Join us for a vibrant Rangoli competition organized by our cultural team! Show off your creativity and celebrate the beauty of Indian artistry with colorful designs and intricate patterns.', 'cultural', '11:11', '1111-11-11', ''),
(50, 'Flower Pot Making', ' The cultural team is hosting a fun-filled event for flower pot making, where participants can showcase their creativity by crafting unique pots. Join us for a day of artistic expression and community bonding!', 'cultural', '11:11', '1111-01-01', ''),
(51, 'Singing', 'Join us for an electrifying singing competition organized by our cultural team! Show off your vocal talents and compete for prizes while enjoying a night of music and fun.', 'cultural', '11:01', '4444-01-01', ''),
(52, 'Dancing', 'The cultural team presents an electrifying dancing competition featuring diverse styles, passionate performers, and vibrant music. Join us for an unforgettable evening celebrating the joy and artistry of dance.', 'cultural', '15:04', '45454-05-04', ''),
(53, 'Poster Making', 'The cultural team is hosting a Poster Making competition, inviting participants to showcase their creativity and express cultural themes through visual art. Join us for a fun and inspiring event!', 'cultural', '11:11', '4444-04-04', ''),
(54, 'Battle Of Bands', 'Join us for an electrifying Battle of the Bands competition organized by our cultural team! Witness talented musicians compete for glory, showcasing their skills and passion for music. Don\'t miss out!', 'cultural', '06:45', '0004-05-04', ''),
(55, 'Fitmistar', 'Come join us for the ultimate fitness showdown at the Fitmistar competition organized by our cultural team! Watch as participants showcase their strength, agility, and determination in a thrilling display of athleticism.', 'cultural', '11:01', '0001-11-11', ''),
(56, 'Skit', ' Get ready for an evening of laughter and entertainment at our Skit competition organized by the cultural team! Talented performers will captivate the audience with their comedic timing and creative storytelling.', 'cultural', '11:11', '0001-11-11', ''),
(57, 'Ethenic Modelling', 'Experience the beauty of diversity at our Ethnic Modeling event, curated by our cultural team! Celebrate traditional attire and cultural heritage as models showcase the elegance and richness of different ethnicities.', 'cultural', '01:11', '0001-01-01', ''),
(58, 'Laughter Drive', 'Get ready for an evening of laughter and entertainment at our Skit competition organized by the cultural team! Talented performers will captivate the audience with their comedic timing and creative storytelling.', 'cultural', '12:12', '0001-12-12', ''),
(59, 'Best out of waste', 'Join us for a creative showcase of ingenuity at the Best out of Waste event organized by our cultural team! Witness participants transform everyday materials into stunning works of art and functional items.', 'cultural', '11:02', '0001-11-11', ''),
(60, 'Mehandi Design', 'Parampara Mehandi Design Cultural Event: A vibrant celebration of tradition through intricate designs, music, dance, and rich cultural exchange.', 'cultural', '11:01', '0002-11-11', ''),
(62, 'T-Shirt Painting', 'Join us for a vibrant cultural event at Parampara T-Shirt Painting, celebrating creativity, community, and colorful expressions through art!\"', 'cultural', '11:01', '0121-12-12', ''),
(63, 'Dumb Charades', 'Parampara Dumb Charades: A cultural extravaganza where teams compete silently, expressing movies, books, and songs in a lively guessing game.', 'cultural', '11:01', '0001-11-11', ''),
(64, 'Poetry', 'Parampara Poetry Cultural event celebrates diverse poetic expressions, fostering creativity and community through rhythm, words, and cultural exchange.', 'cultural', '11:01', '0001-11-21', ''),
(65, 'Face Painting', 'Experience the vibrant hues of cultural diversity at \'Parampara\' 2024 with our Face Painting event. Express your heritage in a brushstroke, celebrating unity in diversity, in three colorful days.', 'cultural', '11:01', '0001-11-11', ''),
(66, 'Nail Art', 'Experience the vibrant fusion of tradition and creativity at \'Parampara\'s Nail Art cultural event. Explore intricate designs reflecting diverse cultures, spanning three days of exquisite nail artistry.', 'cultural', '11:01', '0001-01-01', ''),
(67, 'Ram Charit Manas Antakshari', 'Experience the essence of tradition at \'Parampara\' with our Ram Charit Manas Antakshari, a cultural celebration spanning three days, showcasing devotion, music, and timeless tales in a spirited competition.', 'cultural', '11:01', '0001-11-11', ''),
(68, 'Haritage Quiz', '.', 'cultural', '22:02', '0002-02-22', ''),
(69, 'Sanskrit Antakshari', '..', 'cultural', '11:01', '0002-11-11', ''),
(70, 'Jank Yard ', '\"Junk Yard\": Compete as junkyard owners, strategically collecting and selling scrap to amass wealth and dominate the market in this fast-paced board game of salvage and strategy.', 'Technical', '03:59', '0012-12-21', ''),
(71, 'Argu Shphere (Debate)', '\"Argu Sphere\" is a fun debate game where players discuss different topics, make arguments, and try to convince others to agree with them. It\'s all about having engaging conversations and practicing persuasive skills in a friendly competition.', 'Technical', '21:13', '0021-03-21', ''),
(72, 'Science Exhibitin', '\"Science Exhibitin\'\" is an interactive and educational board game where players compete by showcasing their knowledge of various scientific concepts through hands-on experiments, trivia questions, and creative presentations.', 'Technical', '12:03', '0004-04-04', ''),
(73, '(Lens Master) Photography', '\"Lens Master: Photography Events\" is a competitive board game where players showcase their photography skills through challenges and events, aiming to become the ultimate lens master. ', 'Technical', '21:21', '2004-04-05', ''),
(74, 'Visual vister (video documentary)', '\"Visual Vista: Documentary Showdown\" is an electrifying competition where filmmakers create captivating video documentaries, showcasing their storytelling prowess and visual expertise.', 'Technical', '12:34', '2025-01-12', ''),
(75, 'BGMI ', '\"BGMI Competition\" is a high-energy board game where players simulate intense battles from the popular mobile game BGMI, strategizing their moves to outsmart opponents and claim victory in thrilling showdowns.', 'Technical', '21:03', '64454-12-12', ''),
(76, 'Battle Of Brain (MCQ)', '\"Battle of Brain: MCQ Competition\" is an engaging board game where players test their knowledge and wit through multiple-choice questions (MCQs), competing to see who can answer the most questions correctly and emerge as the ultimate champion of intellect.', 'Technical', '12:45', '1255-11-11', ''),
(77, 'Amphibian Race', '\"Amphibian Race\" is a fast-paced board game where players guide colorful amphibians through obstacles and special abilities to be the first to reach the finish line.', 'Technical', '12:12', '0121-02-21', ''),
(79, 'Medi Quest ', 'Participants will engage in a general medical-related question competition, testing their knowledge and problem-solving skills. Don\'t miss out on this opportunity to showcase your expertise and win exciting prizes. Register now and get ready to compete!', 'Technical', '19:27', '2024-03-28', '');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `eid` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `eventname` varchar(1000) NOT NULL,
  `img` varchar(250) NOT NULL,
  `fb` varchar(250) NOT NULL,
  `insta` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `edu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`eid`, `name`, `type`, `position`, `eventname`, `img`, `fb`, `insta`, `twitter`, `linkedin`, `edu`) VALUES
(5, 'Sandeep Prajapati', 'Technical', 'head', 'All technical event head Contact info +916392424180', 'image\\heads\\mark.jpg', '', '', '', '', ''),
(6, 'Rajeev k Sharma', 'Technical', 'head', 'All technical event head Contact info +919696876515', 'image\\heads\\rajeev.jpg', '', '', '', '', ''),
(7, 'Amisha k Singh', 'Technical', 'head', 'All technical event head Contact info +918252888913', 'image\\heads\\amisha.jpg', '', '', '', '', ''),
(8, 'Krishna Chauhan', 'Technical', 'head', 'All technical event head Contact info +916307252761', 'image\\heads\\krishna.jpg', '', '', '', '', ''),
(10, 'Ritesh Yadav', 'Sport', 'head', 'All Sports event head Contact info +917317583330', 'image\\heads\\ritesh.jpg', '', '', '', '', ''),
(11, 'Raj Gupta', 'Sport', 'head', 'All Sports event head Contact info +916386461447', 'image\\heads\\raj.jpg', '', '', '', '', ''),
(13, 'Akshita Mishra', 'Sport', 'head', 'All Sports event head Contact info +918303242495', 'image\\heads\\akshita.jpg', '', '', '', '', ''),
(14, 'Aparajita Pathak', 'cultural', 'head', 'All Cultural event head Contact info +91 8887931882 , 7754073009', 'image\\heads\\aparajita.jpg', '', '', '', '', ''),
(15, 'Monishka Vishwakarma', 'cultural', 'head', 'All Cultural event head Contact info +91 9140704348', 'image\\heads\\monishka.jpg', '', '', '', '', ''),
(16, 'Akash Singh', 'cultural', 'head', 'All Cultural event head Contact info  +91 8423548840', 'image\\heads\\akash.jpg', '', '', '', '', ''),
(17, 'Md. Arshil ', 'cultural', 'head', 'All Cultural event head Contact info +91 6387506843', 'image\\heads\\arshil.jpg', '', '', '', '', ''),
(73, 'Achintya Srivastava', 'Technical', 'event-head', 'CODE DEBUGGING', '', '', '', '', '', ''),
(74, 'OM PANDEY', 'Technical', 'event-head', 'CODE DEBUGGING', '', '', '', '', '', ''),
(75, 'ANSH KUMAR', 'Technical', 'event-head', 'CODE DEBUGGING', '', '', '', '', '', ''),
(76, 'Akash pal', 'Technical', 'event-co-head', 'CODE DEBUGGING', '', '', '', '', '', ''),
(77, 'Vansh Jaiswal', 'Technical', 'event-co-head', 'CODE DEBUGGING', '', '', '', '', '', ''),
(78, 'Mr. Vijendra Pratap Singh (CS)', 'Technical', 'teacher', 'CODE DEBUGGING', '', '', '', '', '', ''),
(79, 'Mr. Ram Kumar Maurya( TA CSE)', 'Technical', 'teacher', 'CODE DEBUGGING', '', '', '', '', '', ''),
(80, 'Kartik Agrawal', 'Technical', 'event-head', 'CODE MONK (COMPETITIV )', '', '', '', '', '', ''),
(81, 'Pranshu Agrahari', 'Technical', 'event-head', 'CODE MONK(COMPETITIV E PROGRAMMING)', '', '', '', '', '', ''),
(82, 'Shivam Pandey', 'Technical', 'event-co-head', 'CODE MONK(COMPETITIV E PROGRAMMING)', '', '', '', '', '', ''),
(83, 'AJAY YADAV', 'Technical', 'event-co-head', 'CODE MONK(COMPETITIV E PROGRAMMING)', '', '', '', '', '', ''),
(84, 'Ms. Sonia Diwedi(EE)  ', 'Technical', 'teacher', 'CODE MONK(COMPETITIV E PROGRAMMING)', '', '', '', '', '', ''),
(85, 'Mr. Amiya Dhar Dwivedi(BCA)', 'Technical', 'teacher', 'CODE MONK(COMPETITIV E PROGRAMMING)', '', '', '', '', '', ''),
(86, 'Ms. Shivangi Srivastava(BCA) ', 'Technical', 'teacher', 'WEB STACK (WEB DEVELOPMENT)', '', '', '', '', '', ''),
(87, 'Mrs. Shivani Singh ( A Sci Dept Poly ) ', 'Technical', 'teacher', 'WEB STACK (WEB DEVELOPMENT)', '', '', '', '', '', ''),
(88, 'SAKSHI SHARMA', 'Technical', 'teacher', 'WEB STACK (WEB DEVELOPMENT)', '', '', '', '', '', ''),
(89, 'Swayam', 'Technical', 'event-head', 'WEB STACK (WEB DEVELOPMENT)', '', '', '', '', '', ''),
(90, 'Divyansh Srivastav', 'Technical', 'event-co-head', 'WEB STACK (WEB DEVELOPMENT)', '', '', '', '', '', ''),
(91, 'ROSHINI NISHAD', 'Technical', 'event-co-head', 'WEB STACK (WEB DEVELOPMENT)', '', '', '', '', '', ''),
(92, 'Sundram Shukla', 'Technical', 'event-head', 'BATTLE OF BRAIN', '', '', '', '', '', ''),
(93, 'AYUSH KUMAR', 'Technical', 'event-head', 'BATTLE OF BRAIN', '', '', '', '', '', ''),
(94, 'Mr. Abhishek Tiwari', 'Technical', 'teacher', 'BATTLE OF BRAIN', '', '', '', '', '', ''),
(95, 'Mr.Shailendra Kumar (Pharmacy)', 'Technical', 'teacher', 'BATTLE OF BRAIN', '', '', '', '', '', ''),
(96, 'CHAVI GUPTA', 'Technical', 'event-co-head', 'BATTLE OF BRAIN', '', '', '', '', '', ''),
(97, 'AVANTIKA RAI', 'Technical', 'event-co-head', 'BATTLE OF BRAIN', '', '', '', '', '', ''),
(98, 'Mr.Surya Pratap Gond (Pharmacy)', 'Technical', 'teacher', 'NEED FOR SPEED', '', '', '', '', '', ''),
(99, 'Mr.Himanshu Pathak  (Poly EE)', 'Technical', 'teacher', 'NEED FOR SPEED', '', '', '', '', '', ''),
(100, 'Aditya Nath Maurya', 'Technical', 'event-head', 'NEED FOR SPEED', '', '', '', '', '', ''),
(101, 'Ayush kr. Gupta', 'Technical', 'event-head', 'NEED FOR SPEED', '', '', '', '', '', ''),
(102, 'Ankit k Gupta', 'Technical', 'event-co-head', 'NEED FOR SPEED', '', '', '', '', '', ''),
(103, 'Krishna kant Sharma', 'Technical', 'event-co-head', 'NEED FOR SPEED', '', '', '', '', '', ''),
(104, 'Mr. Virendra Vikram Singh (Poly)', 'Technical', 'teacher', 'ROBO WAR', '', '', '', '', '', ''),
(105, 'Mr. Nitesh Rai (ME)', 'Technical', 'teacher', 'ROBO WAR', '', '', '', '', '', ''),
(106, 'Asutosh Tiwari', 'Technical', 'event-head', 'ROBO WAR', '', '', '', '', '', ''),
(107, 'VIVEK CHAUBEY', 'Technical', 'event-head', 'ROBO WAR', '', '', '', '', '', ''),
(108, 'Rajat Gupta', 'Technical', 'event-co-head', 'ROBO WAR', '', '', '', '', '', ''),
(109, 'kanhaiya yadav', 'Technical', 'event-co-head', 'ROBO WAR', '', '', '', '', '', ''),
(110, 'ANKIT SINGH', 'Technical', 'event-head', 'BRIDGE KRITI', '', '', '', '', '', ''),
(111, 'AMAN SINGH', 'Technical', 'event-head', 'BRIDGE KRITI', '', '', '', '', '', ''),
(112, 'Mr. Dinesh Patel (CE)', 'Technical', 'teacher', 'BRIDGE KRITI', '', '', '', '', '', ''),
(113, 'Mr. Abhraneel Sen Gupta (Poly)', 'Technical', 'teacher', 'BRIDGE KRITI', '', '', '', '', '', ''),
(114, 'Ms. Adiba Shakeel(T&P)', 'Technical', 'teacher', 'ARGU SPHERE (DEBATE)', '', '', '', '', '', ''),
(115, 'Ms. Garima Mishra(MBA)', 'Technical', 'teacher', 'ARGU SPHERE (DEBATE)', '', '', '', '', '', ''),
(116, 'SURAJ JAISWAL', 'Technical', 'event-head', 'ARGU SPHERE (DEBATE)', '', '', '', '', '', ''),
(117, 'Vaishnavi Madeshiya', 'Technical', 'event-head', 'ARGU SPHERE (DEBATE)', '', '', '', '', '', ''),
(118, 'Vaivhav anand triphati', 'Technical', 'event-head', 'ARGU SPHERE (DEBATE)', '', '', '', '', '', ''),
(119, 'Shrishti Srivastava', 'Technical', 'event-co-head', 'ARGU SPHERE (DEBATE)', '', '', '', '', '', ''),
(120, 'ADIYA TIWARI ', 'Technical', 'event-co-head', 'ARGU SPHERE (DEBATE)', '', '', '', '', '', ''),
(121, 'Shubhagaman Singh', 'Technical', 'event-head', 'JUNK YARD', '', '', '', '', '', ''),
(122, 'Rohit Kumar ', 'Technical', 'event-head', 'JUNK YARD', '', '', '', '', '', ''),
(123, 'Mr . Viipul Kumar', 'Technical', 'teacher', 'JUNK YARD', '', '', '', '', '', ''),
(124, 'Ms . Shalini Yadav (poly)', 'Technical', 'teacher', 'JUNK YARD', '', '', '', '', '', ''),
(125, 'Shalu Kumari Singh', 'Technical', 'event-head', 'JUNK YARD', '', '', '', '', '', ''),
(126, 'Priya Rao', 'Technical', 'event-co-head', 'JUNK YARD', '', '', '', '', '', ''),
(127, 'Mohd . Alam', 'Technical', 'event-co-head', 'JUNK YARD', '', '', '', '', '', ''),
(129, 'Ms. Puja Rakbhar(Poly) ', 'Technical', 'teacher', 'RUBIK\'S RUCKUS', '', '', '', '', '', ''),
(130, 'Anchal Verma', 'Sport', 'head', 'All Sports event head Contact info +917905342201', 'image\\heads\\anchal.jpg', '', '', '', '', ''),
(132, 'Alok Singh', 'Sport', 'event-head', 'kho kho', '', '', '', '', '', ''),
(133, 'Shubham mall', 'Sport', 'event-co-head', 'kho kho', '', '', '', '', '', ''),
(134, 'Aastha yadav', 'Sport', 'event-co-head', 'kho kho', '', '', '', '', '', ''),
(135, 'Vikash Mishra', 'Sport', 'event-head', 'kabaddi', '', '', '', '', '', ''),
(136, 'Anjali Singh', 'Sport', 'event-co-head', 'kabaddi', '', '', '', '', '', ''),
(137, 'Ankita Yadav', 'Sport', 'event-co-head', 'kabaddi', '', '', '', '', '', ''),
(138, 'Abhishek Maurya', 'Sport', 'event-head', 'Football', '', '', '', '', '', ''),
(139, 'Pranjal Sahani', 'Sport', 'event-co-head', 'Football', '', '', '', '', '', ''),
(140, 'Shivam Dubey', 'Sport', 'event-co-head', 'Football', '', '', '', '', '', ''),
(141, 'Yashi Sahu', 'Sport', 'event-head', 'Table tennis', '', '', '', '', '', ''),
(142, 'Ayush Kumar', 'Sport', 'event-co-head', 'Table tennis', '', '', '', '', '', ''),
(143, 'Ravi Vishwakarma', 'Sport', 'event-head', 'Basketball', '', '', '', '', '', ''),
(144, 'Shrishti Srivastav', 'Sport', 'event-co-head', 'Basketball', '', '', '', '', '', ''),
(145, 'Aditya Narayan Mishra', 'Sport', 'event-head', 'Volleyball', '', '', '', '', '', ''),
(146, 'Mahima Tripathi', 'Sport', 'event-co-head', 'Volleyball', '', '', '', '', '', ''),
(147, 'Munaf Ansari', 'Sport', 'event-co-head', 'Volleyball', '', '', '', '', '', ''),
(148, 'Asmita Tiwari', 'Sport', 'event-head', 'Badminton', '', '', '', '', '', ''),
(149, 'Divyansh pr. Singh', 'Sport', 'event-co-head', 'Badminton', '', '', '', '', '', ''),
(150, 'Amrita Kumari', 'Sport', 'event-co-head', 'Badminton', '', '', '', '', '', ''),
(151, 'Isha Pandey', 'Sport', 'event-head', 'chess', '', '', '', '', '', ''),
(152, 'Nitin Pandey', 'Sport', 'event-co-head', 'chess', '', '', '', '', '', ''),
(153, 'Harsh Mishra', 'Sport', 'event-co-head', 'chess', '', '', '', '', '', ''),
(154, 'Anurag Shukla', 'Sport', 'event-head', 'Long Jumb', '', '', '', '', '', ''),
(155, 'Ashish Singh', 'Sport', 'event-co-head', 'Long Jumb', '', '', '', '', '', ''),
(156, 'Anshul Srivastav', 'Sport', 'event-head', 'High Jump', '', '', '', '', '', ''),
(157, 'Anurag Pandey', 'Sport', 'event-co-head', 'High Jump', '', '', '', '', '', ''),
(158, 'Akash Agrawal', 'Sport', 'event-head', 'Discus Throw', '', '', '', '', '', ''),
(159, 'Gaurav Kushwaha', 'Sport', 'event-co-head', 'Discus Throw', '', '', '', '', '', ''),
(160, 'Ashish Gupta', 'Sport', 'event-head', 'Shotput', '', '', '', '', '', ''),
(161, 'Anisha Sahani', 'Sport', 'event-co-head', 'Shotput', '', '', '', '', '', ''),
(162, 'Abhay Mishra', 'Sport', 'event-head', '100m Race', '', '', '', '', '', ''),
(163, 'Shubham Pandey', 'Sport', 'event-co-head', '100m Race', '', '', '', '', '', ''),
(164, 'Apurv Upadhyay', 'Sport', 'event-head', 'Carrom ', '', '', '', '', '', ''),
(165, 'Anshika Mishra', 'Sport', 'event-co-head', 'Carrom ', '', '', '', '', '', ''),
(166, 'tderyui', 'cultural', 'event-head', 'dfhgjkl', 'uploads/Screenshot (4).png', '', '', '', '', ''),
(167, 'adsfghjh', 'Sport', 'Core Coordinator', 'sdfdghj', 'uploads/Screenshot (4).png', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobilNo` bigint(12) NOT NULL,
  `suggestions` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `phone`, `year`, `password`, `dept`) VALUES
(3, 'Niharika', 'niharika@gmail.com', '6392424180', '2', 'niharika', 'cse'),
(4, 'krishna', 'krishna@gmail.com', '96385710', '3', 'krishna@gmail.com', 'cse'),
(5, 'mark.mark.mark', 'mark@mark.mark', '1234567890', '3', 'mark@mark.mark', 'cse'),
(6, 'Rajeev', 'rajeevsharmamachphy@gmail.com', '9696876515', '3', '1234', 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `main_events`
--
ALTER TABLE `main_events`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `main_events`
--
ALTER TABLE `main_events`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `eid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
