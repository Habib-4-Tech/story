-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 07:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `story`
--
CREATE DATABASE IF NOT EXISTS `story` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `story`;

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

DROP TABLE IF EXISTS `story`;
CREATE TABLE IF NOT EXISTS `story` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `body` longtext NOT NULL,
  `p_date` date NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `str_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `title`, `body`, `p_date`, `user_id`, `str_date`) VALUES
(6, 'Great editing has been achived by new software', 'Vitae auctor eu augue ut lectus arcu bibendum at. Arcu dui vivamus arcu felis bibendum ut tristique et. Ut eu sem integer vitae justo. Dapibus ultrices in iaculis nunc. Fusce ut placerat orci nulla. Morbi tristique senectus et netus et malesuada fames ac turpis. Tincidunt praesent semper feugiat nibh. Sed enim ut sem viverra aliquet eget sit. Sit amet volutpat consequat mauris nunc congue nisi vitae. Id ornare arcu odio ut sem nulla pharetra. Etiam non quam lacus suspendisse faucibus interdum posuere. Rhoncus mattis rhoncus urna neque viverra justo nec ultrices dui. Enim nunc faucibus a pellentesque sit amet porttitor.', '2022-05-18', 'TZxpWZ007', '  18 May 2022'),
(10, 'Final check for E sports week', 'Vitae congue mauris rhoncus aenean vel elit scelerisque. Aliquam sem et tortor consequat id porta nibh venenatis cras. Ut diam quam nulla porttitor. Nec feugiat in fermentum posuere. Donec adipiscing tristique risus nec feugiat in fermentum. Tincidunt arcu non sodales neque sodales. In est ante in nibh mauris cursus mattis molestie. At augue eget arcu dictum varius. Feugiat scelerisque varius morbi enim. Commodo ullamcorper a lacus vestibulum sed arcu non odio. Ac feugiat sed lectus vestibulum. Elit eget gravida cum sociis. Ante metus dictum at tempor commodo ullamcorper a lacus vestibulum. Dui sapien eget mi proin. Porta nibh venenatis cras sed felis eget velit aliquet.', '2022-05-18', 'TZxpWZ007', ' 18 May 2022'),
(11, 'This band aid like tracker could shed light on your insomnia', 'Nec ullamcorper sit amet risus. Curabitur gravida arcu ac tortor dignissim convallis aenean et tortor. Feugiat vivamus at augue eget arcu dictum varius. Velit dignissim sodales ut eu sem. Tellus id interdum velit laoreet id. Facilisi etiam dignissim diam quis enim. Ac tincidunt vitae semper quis lectus nulla at. Commodo odio aenean sed adipiscing diam. Elit scelerisque mauris pellentesque pulvinar pellentesque. Ultrices tincidunt arcu non sodales neque. Ipsum a arcu cursus vitae congue mauris rhoncus aenean vel. Enim tortor at auctor urna nunc id. Ornare massa eget egestas purus. Amet justo donec enim diam vulputate. Lorem sed risus ultricies tristique nulla aliquet enim.', '2022-01-04', 'GGxpWZ008', ' 04 January 2022'),
(15, 'The Bangladesh story', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempor orci eu lobortis elementum nibh tellus molestie. Tempus quam pellentesque nec nam aliquam sem et. Ante in nibh mauris cursus mattis molestie. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Quam quisque id diam vel quam elementum pulvinar etiam non. Tortor id aliquet lectus proin. Vitae ultricies leo integer malesuada nunc vel risus commodo. Urna duis convallis convallis tellus id interdum velit laoreet id. Nulla malesuada pellentesque elit eget. Cursus vitae congue mauris rhoncus aenean vel elit scelerisque mauris. Ultrices dui sapien eget mi proin sed. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere. Sed cras ornare arcu dui vivamus arcu. Dignissim convallis aenean et tortor at risus viverra. Pretium lectus quam id leo in. Magna fermentum iaculis eu non diam phasellus vestibulum lorem. Eget velit aliquet sagittis id consectetur. Commodo elit at imperdiet dui accumsan sit amet nulla facilisi. Nullam eget felis eget nunc lobortis mattis.', '2022-05-20', 'HZ007xGG200', ' 20 May 2022'),
(19, 'Shrek Getting Rebooted', 'Ut tristique et egestas quis ipsum suspendisse ultrices gravida. Venenatis lectus magna fringilla urna porttitor. Adipiscing elit duis tristique sollicitudin nibh sit. Sed id semper risus in hendrerit gravida rutrum quisque. Sagittis id consectetur purus ut faucibus pulvinar elementum integer. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Risus commodo viverra maecenas accumsan lacus vel facilisis. Eget mi proin sed libero enim sed. Lacus sed turpis tincidunt id aliquet risus. Erat pellentesque adipiscing commodo elit at imperdiet. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Vitae purus faucibus ornare suspendisse sed nisi lacus. Eros in cursus turpis massa tincidunt dui ut ornare lectus. Etiam erat velit scelerisque in dictum non consectetur. Ultricies integer quis auctor elit sed vulputate mi sit. Enim ut sem viverra aliquet eget sit amet tellus cras. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet. Commodo ullamcorper a lacus vestibulum. Feugiat nisl pretium fusce id velit ut. Pretium nibh ipsum consequat nisl vel pretium.', '2022-05-20', 'TZxpWZ007', ' 20 May 2022'),
(21, 'RCB sneak into playoffs after Tim David', 'Odio morbi quis commodo odio aenean sed. Tellus cras adipiscing enim eu turpis egestas pretium aenean. Mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et. Lacus vel facilisis volutpat est velit egestas dui id. Amet consectetur adipiscing elit duis tristique sollicitudin. Aliquet enim tortor at auctor urna nunc id cursus. Aenean sed adipiscing diam donec adipiscing tristique risus. Suspendisse in est ante in nibh mauris. Quis blandit turpis cursus in hac habitasse. Sed risus ultricies tristique nulla aliquet enim tortor. Feugiat sed lectus vestibulum mattis ullamcorper velit sed. Tincidunt eget nullam non nisi est sit. Pretium lectus quam id leo in vitae turpis massa. Sem viverra aliquet eget sit amet. Cursus mattis molestie a iaculis at erat. Sit amet consectetur adipiscing elit pellentesque habitant. Turpis in eu mi bibendum. Elementum facilisis leo vel fringilla est ullamcorper. Tristique sollicitudin nibh sit amet commodo nulla facilisi. Odio ut enim blandit volutpat maecenas.', '2022-05-22', 'GGxpWZ008', '  22 May 2022'),
(22, 'Hollywood forgives Will Smith Finally some good news for the actor', 'Risus viverra adipiscing at in tellus integer feugiat. Tincidunt nunc pulvinar sapien et. Pulvinar etiam non quam lacus suspendisse faucibus interdum. Auctor urna nunc id cursus metus aliquam eleifend mi. Tincidunt id aliquet risus feugiat. Suscipit adipiscing bibendum est ultricies. Nunc mattis enim ut tellus elementum sagittis vitae et leo. Non enim praesent elementum facilisis leo vel fringilla est ullamcorper. Montes nascetur ridiculus mus mauris vitae ultricies leo. Viverra mauris in aliquam sem fringilla ut morbi tincidunt. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Non arcu risus quis varius. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Sit amet mattis vulputate enim nulla aliquet. Odio eu feugiat pretium nibh ipsum consequat nisl. Est lorem ipsum dolor sit amet. Tortor at risus viverra adipiscing at in tellus. Amet risus nullam eget felis. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et.', '2022-05-22', 'GGxpWZ008', ' 22 May 2022'),
(23, 'New WB CEO Reportedly Meeting With JK Rowling About More Harry Potter', 'Congue quisque egestas diam in. Ipsum a arcu cursus vitae congue mauris. Mauris pharetra et ultrices neque ornare aenean euismod elementum. Eu non diam phasellus vestibulum. Feugiat sed lectus vestibulum mattis. Curabitur gravida arcu ac tortor dignissim convallis. Et ligula ullamcorper malesuada proin. Scelerisque felis imperdiet proin fermentum leo vel. Dictumst vestibulum rhoncus est pellentesque elit. Nisl nisi scelerisque eu ultrices vitae. Ipsum faucibus vitae aliquet nec ullamcorper.', '2022-05-04', 'Jkhp435000', ' 04 May 2022'),
(24, 'J.K. Rowling Approached To Take Harry Potter Universe Ahead By Warner Bros CEO David Zaslav', 'Ac auctor augue mauris augue neque gravida in fermentum et. Interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Pellentesque habitant morbi tristique senectus et. Mollis nunc sed id semper risus in hendrerit gravida rutrum. Odio ut sem nulla pharetra diam sit amet nisl. Euismod in pellentesque massa placerat. Ipsum dolor sit amet consectetur adipiscing elit ut aliquam purus. Lacinia quis vel eros donec ac odio tempor orci dapibus. Sit amet volutpat consequat mauris nunc congue nisi vitae. Sagittis purus sit amet volutpat consequat mauris nunc congue nisi.', '2022-05-22', 'Jkhp435000', ' 22 May 2022'),
(25, 'EA bans over 150 FIFA players from FGS and other esports competition', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-05-20', 'NoobFaiaz420', '  20 May 2022'),
(26, 'Potential candidates for the new Dignitas CSGO roster', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Viverra vitae congue eu consequat ac felis donec. Massa massa ultricies mi quis hendrerit dolor. Fusce ut placerat orci nulla. Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Tincidunt id aliquet risus feugiat in ante metus dictum. Neque viverra justo nec ultrices dui sapien eget mi. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et. Velit sed ullamcorper morbi tincidunt ornare massa eget. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Egestas congue quisque egestas diam. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Vulputate ut pharetra sit amet aliquam id diam.\r\n\r\nNon quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Ultrices eros in cursus turpis massa tincidunt dui ut ornare. Lectus nulla at volutpat diam ut. At risus viverra adipiscing at in. Euismod elementum nisi quis eleifend quam adipiscing vitae proin. Sit amet massa vitae tortor condimentum. Sapien faucibus et molestie ac. Tellus elementum sagittis vitae et. Faucibus pulvinar elementum integer enim neque volutpat. Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium.\r\n\r\nNeque vitae tempus quam pellentesque nec nam aliquam sem et. Risus feugiat in ante metus dictum at tempor commodo. Sit amet mauris commodo quis. Sed odio morbi quis commodo odio aenean sed. Cursus eget nunc scelerisque viverra mauris in aliquam. Purus sit amet volutpat consequat mauris nunc congue nisi. Facilisi etiam dignissim diam quis enim. Non odio euismod lacinia at quis risus sed vulputate. Nam libero justo laoreet sit. Quis enim lobortis scelerisque fermentum dui faucibus. A scelerisque purus semper eget duis at tellus. Lectus sit amet est placerat in egestas. Accumsan sit amet nulla facilisi morbi tempus iaculis urna id. Odio aenean sed adipiscing diam. Cum sociis natoque penatibus et magnis dis parturient montes nascetur. Velit aliquet sagittis id consectetur purus. Enim ut tellus elementum sagittis vitae et leo. Vitae congue mauris rhoncus aenean vel elit. Sociis natoque penatibus et magnis dis parturient. Scelerisque viverra mauris in aliquam sem fringilla ut.\r\n\r\nCursus metus aliquam eleifend mi. Odio euismod lacinia at quis risus. Dis parturient montes nascetur ridiculus mus mauris vitae. Sodales ut eu sem integer vitae justo eget magna. Est sit amet facilisis magna etiam tempor. Cursus metus aliquam eleifend mi in nulla. Urna et pharetra pharetra massa massa. Convallis a cras semper auctor neque vitae tempus quam. Non pulvinar neque laoreet suspendisse interdum consectetur libero id. Nullam non nisi est sit amet facilisis. Elit at imperdiet dui accumsan sit amet nulla facilisi morbi.\r\n\r\nPretium fusce id velit ut tortor. Semper eget duis at tellus at urna. Ac tortor dignissim convallis aenean. Purus non enim praesent elementum. Tellus orci ac auctor augue mauris augue neque gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. Laoreet non curabitur gravida arcu ac tortor dignissim. Semper auctor neque vitae tempus quam. Cursus sit amet dictum sit. Volutpat ac tincidunt vitae semper quis lectus nulla at.', '2022-05-19', 'NoobFaiaz420', ' 19 May 2022'),
(27, 'Overwatch League 2022 season becomes top heavy ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu dui vivamus arcu felis bibendum ut. Euismod nisi porta lorem mollis. Risus in hendrerit gravida rutrum quisque non. Ac tincidunt vitae semper quis lectus nulla at volutpat. Massa vitae tortor condimentum lacinia quis vel eros donec. Consectetur adipiscing elit ut aliquam purus. Est lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis. Lobortis elementum nibh tellus molestie nunc non blandit. Orci sagittis eu volutpat odio facilisis mauris sit amet.\r\n\r\nRhoncus dolor purus non enim praesent elementum facilisis. Tortor posuere ac ut consequat semper viverra nam libero justo. Proin sagittis nisl rhoncus mattis rhoncus urna neque viverra. Imperdiet sed euismod nisi porta lorem mollis. Tempus urna et pharetra pharetra massa massa ultricies mi quis. Aliquet sagittis id consectetur purus ut. Blandit massa enim nec dui nunc. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum. Volutpat odio facilisis mauris sit amet. Interdum velit euismod in pellentesque massa placerat duis ultricies lacus. Imperdiet dui accumsan sit amet nulla facilisi morbi. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus. Maecenas volutpat blandit aliquam etiam erat velit. Malesuada proin libero nunc consequat interdum varius sit. At augue eget arcu dictum varius duis. Auctor eu augue ut lectus arcu bibendum. Purus faucibus ornare suspendisse sed nisi lacus sed.', '2022-05-19', 'NoobFaiaz420', ' 19 May 2022'),
(28, 'Taylor Swift receives an honorary degree and addresses NYU graduating class', 'Id diam vel quam elementum pulvinar etiam non quam lacus. Auctor eu augue ut lectus arcu bibendum. Odio facilisis mauris sit amet massa. Placerat in egestas erat imperdiet sed euismod. Mi tempus imperdiet nulla malesuada pellentesque elit. Mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Arcu bibendum at varius vel pharetra vel turpis nunc eget. Ultrices dui sapien eget mi proin sed. Leo urna molestie at elementum eu facilisis. Purus in mollis nunc sed id semper risus in. Justo laoreet sit amet cursus. Dignissim sodales ut eu sem. Urna porttitor rhoncus dolor purus non enim praesent elementum.', '2022-05-21', 'HZ007xGG200', ' 21 May 2022'),
(32, '2022 Pulitzer Prizes in arts and letters go to Fat Ham', 'Dui accumsan sit amet nulla facilisi morbi. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Egestas dui id ornare arcu odio ut sem. Amet venenatis urna cursus eget nunc scelerisque viverra mauris in. Tempor nec feugiat nisl pretium fusce id velit ut. Dictum at tempor commodo ullamcorper a lacus vestibulum sed. Nunc consequat interdum varius sit. Ligula ullamcorper malesuada proin libero nunc. Congue mauris rhoncus aenean vel. Accumsan lacus vel facilisis volutpat est. Ac turpis egestas integer eget aliquet. Sed ullamcorper morbi tincidunt ornare massa eget egestas. Molestie ac feugiat sed lectus.', '2022-05-26', 'HZ007xGG200', ' 26 May 2022'),
(37, 'New action movie set to start production', 'Neque sodales ut etiam sit amet nisl purus in. Est placerat in egestas erat imperdiet sed euismod nisi porta. Vel pretium lectus quam id leo in vitae turpis massa. Pharetra convallis posuere morbi leo urna molestie at elementum. Id faucibus nisl tincidunt eget. Non pulvinar neque laoreet suspendisse. Neque gravida in fermentum et sollicitudin ac. Egestas dui id ornare arcu odio. Vulputate dignissim suspendisse in est ante in. Risus commodo viverra maecenas accumsan lacus. Non pulvinar neque laoreet suspendisse. Quam nulla porttitor massa id. Fusce ut placerat orci nulla pellentesque dignissim enim sit. Pellentesque habitant morbi tristique senectus et netus et malesuada. Duis tristique sollicitudin nibh sit amet commodo. Egestas congue quisque egestas diam in arcu cursus euismod quis. Faucibus interdum posuere lorem ipsum dolor sit amet consectetur adipiscing. Cursus metus aliquam eleifend mi in nulla posuere sollicitudin.', '2022-05-23', 'Jkhp435000', ' 23 May 2022');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
CREATE TABLE IF NOT EXISTS `user_data` (
  `user_id` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_name` varchar(70) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_id`, `password`, `full_name`) VALUES
('GGxpWZ008', 'Whileloop007', 'Md Habibur Rahman'),
('HZ007xGG200', 'Whileloop007', 'Md. Hasan Imam'),
('Jkhp435000', 'Laravel008', 'J.K. Rowling'),
('NoobFaiaz420', 'Noob420', 'Faiaz Khan'),
('TZxpWZ007', 'Whileloop007', 'Md. Abdur Rahman');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `story`
--
ALTER TABLE `story`
  ADD CONSTRAINT `story_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_data` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
