-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 02:54 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testp`
--

-- --------------------------------------------------------

--
-- --------------------------------------------------------

--
-- Table structure for table `registrattion`
--
127.0.0.1/testp/registration/		http://localhost/phpmyadmin/sql.php?server=1&db=testp&table=registration&pos=0
 Showing rows 0 -  5 (6 total, Query took 0.0008 seconds.)

SELECT * FROM `registration`


name	age	contact	email	address	city	
bxb	xbbxb	bxxsvb	ghh@gmail.com	chattagram	Chataagram	
dxgx	xdg	xdgx	xggd@gmail.com	cvbc	cbc	
cbcvb	cbvcb	cbcbv	bvcb	cvbcvb	vcbcb	
cbc	fxdf	xvcxv	xcvx@gmail.com	dfffdg	ggd	
hemel	25	01816554108	hemel@gmail.com	chattagram	Chataagram	
ytctudcut	hgcyc	gccty	hgxtyx	uyccuycv	Chataagram	
--
-- Table structure for table `addbook'
--

CREATE TABLE `tbl_borrow` (
  `b_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `cd` date NOT NULL,
  `rd` date NOT NULL,
  `ncopy` int(11) NOT NULL,
  `returned_on` date NOT NULL,
  `fine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_borrow`
--
--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mobile` int(15) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `address`, `mobile`, `street`, `city`, `age`, `pass`) VALUES
(1, 'mj', 'mj@gmail.com', 'jjfbdb', 145625666, 'jjfbdb', 'gkkjs', '20', 'mj1526'),
(2, 'MJobair', 'jobair@gmail.com', 'jjfbdb', 1578875454, 'jjfbdb', 'gkkjs', '29', 'mj1526');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_borrow`
--
ALTER TABLE `tbl_borrow`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_borrow`
--
ALTER TABLE `tbl_borrow`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
