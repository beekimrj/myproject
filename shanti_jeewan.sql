-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2019 at 05:55 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shanti_jeewan`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(100) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `about`, `image`) VALUES
(14, 'Christmas', '777029-widescreen-christmas-hd-wallpapers-1920x1200.jpg'),
(15, 'happy face', '116660-gorgerous-happy-background-1920x1200-for-iphone-5s.jpg'),
(16, 'Baby', '116663-large-happy-background-1920x1080-samsung.jpg'),
(17, 'Santa Claus', '148467-download-santa-wallpaper-2560x1600-windows-7.jpg'),
(19, 'Nature', '9633-nature-wallpaper-1920x1195-windows.jpg'),
(20, 'War', '379850-download-war-wallpaper-2560x1440.jpg'),
(21, 'Christmas Tree', '777170-vertical-christmas-hd-wallpapers-1920x1080.jpg'),
(22, 'Life', '411392-jesus-hd-wallpaper-1920x1440-high-resolution.jpg'),
(23, 'Is there?', '411402-jesus-hd-wallpaper-1920x1200-for-mac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newstory`
--

CREATE TABLE `newstory` (
  `id` int(100) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(15) NOT NULL,
  `story` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `content`) VALUES
(1, 'first noticed', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras leo nunc, convallis vel lorem a, sollicitudin tempus dolor. Quisque congue orci vitae nulla vulputate, non lacinia orci molestie. Duis ultrices diam at tristique viverra. Pellentesque eu dolor vel leo auctor consequat. Vivamus vel urna eu nibh placerat ornare. Etiam venenatis, ex eu egestas interdum, tellus dui elementum lorem, at pulvinar ligula justo ac risus. Proin pretium ultricies justo. In euismod tristique auctor. Morbi elementum lacus sed nisl dapibus, faucibus rhoncus velit sodales. Nullam congue sapien a tortor laoreet, nec accumsan arcu auctor. Nullam tincidunt nunc sed felis iaculis viverra. Quisque elementum sed nisl ac placerat. Quisque rhoncus imperdiet felis, id consequat augue lobortis nec. Etiam sed ultricies risus. Maecenas sit amet eros pellentesque, blandit nunc vel, semper odio. Quisque sollicitudin condimentum dictum. Praesent sodales maximus mauris eu hendrerit. Quisque et lectus eu orci vehicula bibe'),
(2, 'second noticeds', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras leo nunc, convallis vel lorem a, sollicitudin tempus dolor. Quisque congue orci vitae nulla vulputate, non lacinia orci molestie. Duis ultrices diam at tristique viverra. Pellentesque eu dolor vel leo auctor consequat. Vivamus vel urna eu nibh placerat ornare. Etiam venenatis, ex eu egestas interdum, tellus dui elementum lorem, at pulvinar ligula justo ac risus. Proin pretium ultricies justo. In euismod tristique auctor. Morbi elementum lacus sed nisl dapibus, faucibus rhoncus velit sodales. Nullam congue sapien a tortor laoreet, nec accumsan arcu auctor. Nullam tincidunt nunc sed felis iaculis viverra. Quisque elementum sed nisl ac placerat. Quisque rhoncus imperdiet felis, id consequat augue lobortis nec. Etiam sed ultricies risus. Maecenas sit amet eros pellentesque, blandit nunc vel, semper odio. Quisque sollicitudin condimentum dictum. Praesent sodales maximus mauris eu hendrerit. Quisque et lectus eu orci vehicula bibe');

-- --------------------------------------------------------

--
-- Table structure for table `saturdayturn`
--

CREATE TABLE `saturdayturn` (
  `id` int(100) NOT NULL,
  `time` varchar(15) NOT NULL DEFAULT '8:30',
  `lead` varchar(40) NOT NULL,
  `preach` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saturdayturn`
--

INSERT INTO `saturdayturn` (`id`, `time`, `lead`, `preach`) VALUES
(1, '8:30:00', 'Rameshwor Yadav', 'ahem bahadurs');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(15) NOT NULL,
  `story` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `firstname`, `lastname`, `email`, `number`, `story`) VALUES
(12, 'Hari', 'Thapa', 'hari.123@gmail.com', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras leo nunc, convallis velc lorem a, sollicitudin tempus dolor. Quisque congue orci vitae nulla vulputate, non lacinia orci molestie. Duis ultrices diam at tristique viverra. Pellentesque eu dolor vel leo auctor consequat. Vivamus vel urna eu nibh placerat ornare. Etiam venenatis, ex eu egestas interdum, tellus dui elementum lorem, at pulvinar ligula justo ac risus. Proin pretium ultricies justo. In euismod tristique auctor. Morbi elementum lacus sed nisl dapibus, faucibus rhoncus velit sodales. Nullam congue sapien a tortor laoreet, nec accumsan arcu auctor. Nullam tincidunt nunc sed felis iaculis viverra. Quisque elementum sed nisl ac placerat. Quisque rhoncus imperdiet felis, id consequat augue lobortis nec. Etiam sed ultricies risus. Maecenas sit amet eros pellentesque, blandit nunc vel, semper odio. Quisque sollicitudin condimentum dictum. Praesent sodales maximus mauris eu hendrerit. Quisque et lectus eu orci vehicula bib'),
(13, 'Ranjit', 'Bisunkhe', 'bisunranjit@yahoo.com', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras leo nunc, convallis velc lorem a, sollicitudin tempus dolor. Quisque congue orci vitae nulla vulputate, non lacinia orci molestie. Duis ultrices diam at tristique viverra. Pellentesque eu dolor vel leo auctor consequat. Vivamus vel urna eu nibh placerat ornare. Etiam venenatis, ex eu egestas interdum, tellus dui elementum lorem, at pulvinar ligula justo ac risus. Proin pretium ultricies justo. In euismod tristique auctor. Morbi elementum lacus sed nisl dapibus, faucibus rhoncus velit sodales. Nullam congue sapien a tortor laoreet, nec accumsan arcu auctor. Nullam tincidunt nunc sed felis iaculis viverra. Quisque elementum sed nisl ac placerat. Quisque rhoncus imperdiet felis, id consequat augue lobortis nec. Etiam sed ultricies risus. Maecenas sit amet eros pellentesque, blandit nunc vel, semper odio. Quisque sollicitudin condimentum dictum. Praesent sodales maximus mauris eu hendrerit. Quisque et lectus eu orci vehicula bib'),
(14, 'Ramesh', 'Bahadur', 'bahadurramesh@gmail.com', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras leo nunc, convallis velc lorem a, sollicitudin tempus dolor. Quisque congue orci vitae nulla vulputate, non lacinia orci molestie. Duis ultrices diam at tristique viverra. Pellentesque eu dolor vel leo auctor consequat. Vivamus vel urna eu nibh placerat ornare. Etiam venenatis, ex eu egestas interdum, tellus dui elementum lorem, at pulvinar ligula justo ac risus. Proin pretium ultricies justo. In euismod tristique auctor. Morbi elementum lacus sed nisl dapibus, faucibus rhoncus velit sodales. Nullam congue sapien a tortor laoreet, nec accumsan arcu auctor. Nullam tincidunt nunc sed felis iaculis viverra. Quisque elementum sed nisl ac placerat. Quisque rhoncus imperdiet felis, id consequat augue lobortis nec. Etiam sed ultricies risus. Maecenas sit amet eros pellentesque, blandit nunc vel, semper odio. Quisque sollicitudin condimentum dictum. Praesent sodales maximus mauris eu hendrerit. Quisque et lectus eu orci vehicula bib');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `image`, `role`) VALUES
(1, 'biki', 'password', 'biki', 'maharjan', 'beekimrj@gmail.com', '', 'admin'),
(2, 'hope', 'hope123', 'hope', 'maharjan', 'hopemaharjan@gmail.com', '', 'user'),
(5, 'lg', 'acer', 'LG', 'Bahadur', 'lg@acer.com', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newstory`
--
ALTER TABLE `newstory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saturdayturn`
--
ALTER TABLE `saturdayturn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `newstory`
--
ALTER TABLE `newstory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `saturdayturn`
--
ALTER TABLE `saturdayturn`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
