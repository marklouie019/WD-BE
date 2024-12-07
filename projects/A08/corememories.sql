-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 10:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(2000) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'JOY.png', 'It was during my mid-freshman year when my uncle gifted me a brand-new laptop I had been wanting since the start of the year. The wait was worth it—I could finally explore and enhance my skills in design and technology, including software development tools that I couldn’t fully utilize on my old laptop and phone. I was overjoyed at the time, and it significantly improved my technological skills by allowing me to practice at home anytime and anywhere.', 'yellow'),
(2, 1, 'JOY.png', 'I was playing Minecraft Java when I discovered that I could use a mod to enhance my gameplay and experience. Curious, I checked the mod’s description on the website I was using, which directed me to a GitHub link containing all the development files for the mod. It was mesmerizing, offering me a glimpse of what technology is capable of. At the time, I wasn’t yet an IT student, and the GitHub code felt overwhelming and intimidating. However, as I explored the code for reference to create my own mod, I was amazed by the dedication and skill of the developers who had crafted it in such a short period. The amount of effort and passion they poured into both the game and the field inspired me. It made me realize that I, too, could achieve what they had and sparked my belief in my potential to be one of them.', 'yellow'),
(3, 1, 'JOY.png', 'Recently, in my midterms, I completed my projects after a full week of sleepless nights. The result was satisfying, as it represents a significant part of my technological identity. Beyond technology, this achievement also played an essential role in shaping my confidence and motivation in life.', 'yellow'),
(4, 2, 'JOY.png', 'I was in elementary school when I stumbled upon my cousin\'s drawings. They were comics with an anime style. From that point, I was amazed at how she created such good artwork and told stories through her drawings. Inspired, I decided to try drawing myself. Before that, I didn’t know how to draw, but my cousin’s work motivated me to be creative and pursue drawing and design. That core memory remains the foundation of my creativity today.', 'yellow'),
(5, 2, 'JOY.png', 'When I entered high school, I started to develop a deeper interest in drawing. I enjoyed art subjects because they allowed me to pursue my passion. In one class, we were tasked with drawing tools, and I dedicated myself to creating a perfect piece. My effort paid off as it earned the highest score in class and helped me secure a spot in the top 10. While I didn’t aim for that recognition, my drawing skills played a key role in my achievement. This motivated me to study harder and continue pursuing my passion for art.', 'yellow'),
(6, 2, 'JOY.png', 'During my first half-year in college, my passion for drawing reached its peak and evolved into graphic design and UI/UX design for frontend web development. When my professor introduced Figma to us as a tool for designing and planning apps, it became a crucial part of developing my design skills. Figma’s versatility in app and web design made it my primary tool for planning and creating websites. My involvement in the design committee of my department also contributed significantly to my growth. This core memory has greatly shaped my creativity. Being part of my department’s design committee further shaped my creativity. Collaborating with others on projects like posters and web layouts taught me teamwork, attention to detail, and balancing aesthetics with functionality. These experiences built my confidence and strengthened the foundation of my creativity, inspiring me to keep growing as a designer.', 'yellow'),
(7, 3, 'JOY.png', 'I have a friend I met back in high school who has shaped who I am today. We became close, sharing stories about our lives, giving each other advice, and teaching each other new things. On my birthday, when I had nothing planned and wasn’t even celebrating, he invited me to the mall and treated me. I was incredibly happy and deeply grateful for his thoughtfulness. That moment left a lasting impression on me, and this memory will always remain in my heart.', 'yellow'),
(8, 3, 'JOY.png', 'In my early days in college, I only had my best friend to hang out with and attend classes. Then we met another friend who shared the same vibe as us. I liked that she was very thoughtful and generous to me and my best friend. She eventually became my best friend too, and we shared many moments together, hanging out whenever we needed time to unwind.', 'yellow'),
(9, 3, 'SADNESS.png', 'The night before our final presentation, we decided to go out to eat when, suddenly, we found ourselves locked out of my friend’s apartment, leaving the keys inside. We didn’t know what to do and were very upset because our laptops were inside, and the presentation was scheduled for the next morning. The project wasn’t even 100% complete. Thankfully, we eventually managed to get back inside and finish the project. The situations proved the loyalty of our friendship in bad and good times.', 'blue'),
(10, 4, 'ANGER.png', 'During the pandemic, I played Mobile Legends as an experiment, just to try and see how it was played. At first, I was very frustrated because it was so difficult to play. The matchmaking felt unfair, as I was often matched with highly experienced players while I was just a beginner. Despite this, the thrill of the challenge kept me coming back. The characters, gameplay, graphics, effects, and music amazed me, and even though the game often frustrated me, I always looked forward to playing again.', 'red'),
(11, 4, 'JOY.png', 'After getting a laptop, I finally played many PC games I had always wanted to try, especially Minecraft Java. I became addicted to the game, even applying mods and shaders to enhance its visual graphics, which left me in awe. Its unique art style, music, gameplay, and vibrant community truly shaped my gaming personality and deepened my love for games.', 'yellow'),
(12, 4, 'SADNESS.png', 'A friend gifted me GTA V on Steam, but I was initially sad and disappointed because my laptop didn’t have enough space to download it. I thought I could finally play the game I had wanted since childhood, only to discover it wouldn’t work. Determined, I searched for solutions, freed up space, and finally played the game, fulfilling a long-held dream.', 'blue');

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Technology<br>Island', 'The hub of innovation and curiosity, where my love for all things tech thrives.', 'Technology Island represents my fascination with the digital world and its endless possibilities. From coding late into the night to exploring cutting-edge gadgets, this island is the foundation of my passion for solving problems, building tools, and connecting with the future. It’s where creativity meets logic, fueling my ambition to harness the power of technology to make life better.', NULL, 'technology-island.gif', 'active'),
(2, 'Creativity<br>Island', 'A vibrant sanctuary where imagination knows no bounds and ideas come to life.', 'Creativity Island is the heart of my artistic expression and innovation. It’s where I design, build, and explore new ways to bring my visions to reality—whether it’s crafting a stunning visual, telling a compelling story, or designing engaging user experiences. This island reminds me that creativity is the spark that turns dreams into reality and challenges into opportunities.', NULL, 'creativity-island.gif', 'active'),
(3, 'Friendship<br>Island', 'The core of trust and connection, where relationships flourish and memories are built.', 'Friendship Island celebrates the bonds I share with the people who matter most. It’s where laughter, support, and understanding come together to create lifelong memories. From unforgettable adventures to heartfelt conversations, this island reminds me of the importance of companionship, loyalty, and shared experiences in shaping who I am.', NULL, 'friendship-island.gif', 'active'),
(4, 'Gaming<br>Island', 'A world of adventure and strategy, where I embrace challenges and connect with my inner gamer.', 'Gaming Island is my portal to excitement, teamwork, and relaxation. It’s where I immerse myself in thrilling stories, solve complex puzzles, and engage in epic battles. Whether solo or with friends, gaming fuels my competitive spirit and hones my skills in decision-making, strategy, and collaboration. It’s a place where fun meets learning and endless worlds await exploration.', NULL, 'gaming-island.gif', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
