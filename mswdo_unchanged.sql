-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 07:51 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mswdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `pwd_info`
--

CREATE TABLE `pwd_info` (
  `pwd_id` int(11) NOT NULL,
  `application_status` varchar(15) NOT NULL,
  `ref_code` varchar(100) NOT NULL,
  `reg_type` varchar(10) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `disability_type` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `Age` varchar(10) NOT NULL,
  `mobile_no` varchar(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `civil` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `house_no` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `employment_status` varchar(50) NOT NULL,
  `employment_type` varchar(50) NOT NULL,
  `employer_type` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `employer_contact` varchar(50) NOT NULL,
  `philhealth_no` varchar(50) NOT NULL,
  `sss_no` varchar(50) NOT NULL,
  `gsis_no` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `spouse_name` varchar(50) NOT NULL,
  `child_no` varchar(50) NOT NULL,
  `guardian_name` varchar(50) NOT NULL,
  `guardian_contact` varchar(50) NOT NULL,
  `formal_pic` varchar(50) NOT NULL,
  `med_cert` varchar(50) NOT NULL,
  `brgy_cert` varchar(50) NOT NULL,
  `voter_id` varchar(50) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwd_info`
--

INSERT INTO `pwd_info` (`pwd_id`, `application_status`, `ref_code`, `reg_type`, `blood_type`, `fname`, `mname`, `lname`, `disability_type`, `dob`, `Age`, `mobile_no`, `email`, `gender`, `civil`, `region`, `province`, `city`, `barangay`, `house_no`, `education`, `employment_status`, `employment_type`, `employer_type`, `occupation`, `company_name`, `employer_contact`, `philhealth_no`, `sss_no`, `gsis_no`, `father_name`, `mother_name`, `spouse_name`, `child_no`, `guardian_name`, `guardian_contact`, `formal_pic`, `med_cert`, `brgy_cert`, `voter_id`, `remarks`) VALUES
(2, 'approved', 'a', 'New', 'A+', 'Darwin', 'Markyyy', 'Dimaano', 'Communtication Disability', '2022-06-28', '0', '09876789876', 'markss@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Bulilan_norte', '222', 'Elementary', 'Unemployed', 'Merin Na', 'N/a', 'Non-professional', 'N/a', 'N/A', '96796', '74574745', '6363', 'Dsada', 'Hdfhdf', 'Hdhd', 'One', 'Hdfd', '978097', 'homepage-pila3.jpg', 'homepage-pila.jpg', 'homepage-pila3.jpg', 'pila-logo.png', 'Comeback again'),
(3, '', '', 'New', 'A+', 'Fasfa', 'Fasfaf', 'Asfasfas', 'fasfaf', '2022-07-29', '', '86585685685', 'christophermorco02@gmail.com', 'male', 'single', '08', '0848', '084815', '084815020', '111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', 'new', 'a-', 'fsdgs', 'gdsgs', 'gsgsdgs', 'gdsgs', '2022-07-07', '', '64647547474', 'christophermorco02@gmail.com', 'female', 'divorced', '04', '0434', '043426', '043426006', '111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', 'new', 'a-', 'dasda', 'afasfas', 'adasdad', 'afasfas', '2022-07-15', '-1', '86585685685', 'christophermorco02@gmail.com', 'male', 'single', '03', '0314', '031414', '031414005', '111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', '', 'new', 'a-', 'fasfa', 'fasfa', 'gsgsg', 'fasfa', '1993-01-22', '29', '86585685685', 'christophermorco02@gmail.com', 'female', 'single', '11', '1123', '112323', '112323001', '111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '', '', 'new', 'a+', 'Darwin', 'Guilatco', 'Badillo', 'Guilatco', '1994-03-14', '28', '09876543212', 'darwin@gmail.com', 'male', 'widowed', '04', '0434', '043426', '043426015', '111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', 'new', 'a+', 'fasf', 'afasfas', 'fasfafasfa', 'afasfas', '1977-07-28', '44', '09876543456', 'kev@gmail.com', 'male', 'single', '05', '0505', '050502', '050502041', '111', 'elementary', 'employed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', '', 'new', 'ab+', 'Marjorie', 'Agarin', 'Maguyon', 'Agarin', '1990-12-05', '31', '09877898765', 'marjorie@gmail.com', 'female', 'single', '', '', '', 'pansol', '222', 'college', 'employed', '', '', '', '', '', '', '', '', 'sample', 'sample', 'sample', 'one', 'sample', '098765445678', '', '', '', '', ''),
(10, '', '', 'new', 'a+', 'sample', 'sample', 'sample', 'sample', '2016-07-06', '6', '09878900987', 'sample@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'santa_clara_sur', '999', 'college', 'unemployed', '', '', '', '', '', '', '', '', 'sample', 'sample', 'sample', 'one', 'sample', '09875676543', '', '', '', '', ''),
(11, '', '', 'New', 'AB-', 'Kc', 'Sample', 'Sample', 'Sample', '1998-07-08', '', '09877890987', 'example@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Santa_clara_norte', '444', 'Senior_high_school', 'Employed', 'N/a', 'N/a', 'Professional', 'N/a', 'N/A', '00-000000000-0', '00-0000000-0', '00000000000', 'Sample', 'Sample', 'Sample', 'One', 'Sample', '09876788765', '', '', '', '', ''),
(12, '', '', 'new', 'b-', 'gdsgs', 'fasfa', 'adasdad', 'fasfa', '2022-06-30', '0', '758585', 'christophermorco02@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'santa_clara_norte', '333', 'senior_high_school', 'unemployed', 'gdsgs', 'gsgsdg', 'non-professional', 'gsgsg', 'gsdgsg', 'gsdgs', 'gsdgdsg', 'gsdgsgs', 'gdsg', 'sgsg', 'sgsdg', 'three', 'gsdgds', 'gsgs', '', '', '', '', ''),
(13, '', '', 'new', 'o+', 'hdfhd', 'hdhd', 'hdhd', 'hdhd', '2022-07-20', '-1', 'hdfhd', 'christophermorco02@gmail.com', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'san_antonio', 'hdfhdf', 'elementary', 'unemployed', 'hdhd', 'hdfhd', 'professional', 'hdhdf', 'hdhd', 'hdfhdh', 'hdfh', 'hdfh', 'hdfhd', 'hdhd', 'hdf', 'one', 'hdfhd', 'hdhdh', '', '', '', '', ''),
(14, '', '', 'new', 'a+', 'gdsg', 'gsdgsgs', 'gsdgsgs', 'gsdgsgs', '2022-07-15', '0', '09877896898', 'kevchristophermorco@gmail.com', 'female', 'married', 'region_iv-a', 'laguna', 'pila', '', 'fasfa', 'elementary', 'employed', 'fafsf', 'fafas', 'professional', 'fafa', 'fasfa', 'fasfa', 'fasfaf', 'fasfafas', 'fasfa', 'fafa', 'fafa', 'two', 'fasfas', '57745747', '', '', '', '', ''),
(15, '', '', 'new', 'ab+', 'gdsgs', 'gdsg', 'gsdgs', 'gdsg', '2022-07-14', '0', 'gdsgdsgs', 'kevchristophermorco@gmail.com', 'male', 'widowed', 'region_iv-a', 'laguna', 'pila', 'san_antonio', '333', 'elementary', 'employed', 'gdsgs', 'gsdg', 'professional', 'gsdg', 'gdsgs', 'gsdgsdg', 'gdsgsd', 'gdsgsgs', 'gsdgds', 'gsdg', 'gsdgs', 'one', 'gsdgs', 'gdsgs', '', '', '', '', ''),
(16, '', '', 'new', 'ab+', 'gsdg', 'gsdg', 'sgsdgs', 'gsdg', '2022-07-16', '-1', 'gdsgs', 'kevchristophermorco@gmail.com', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'mojon', '546', 'college', 'employed', 'gsdgs', 'gsdg', 'non-professional', 'gsdgs', 'gdsgs', 'gsdgs', 'gsgs', 'gsdgs', 'gdsgs', 'gsdgs', 'gsdgs', 'four', 'gsdgds', 'gsdgsgs', '', '', '', '', ''),
(17, '', '', 'new', 'a-', 'gdsgd', 'fhdfhfd', 'hdfhd', 'fhdfhfd', '2022-07-01', '0', '856858', 'kevchristophermorco@gmail.com', 'male', 'widowed', 'region_iv-a', 'laguna', 'pila', 'pansol', '444', 'elementary', 'unemployed', '645754', 'gdfgd', 'professional', 'gdfgfd', 'gdfgd', 'gdfgdf', 'gdfgdf', 'gdfgd', 'gdfgfd', 'gdfg', 'dgdf', 'more_than_five', 'gd', 'gdfg', '', '', '', '', ''),
(18, '', '', 'new', 'o+', 'gdsgd', 'gdsg', 'test', 'gdsg', '2022-07-20', '-1', 'gsdgs', 'kevchristophermorco@gmail.com', 'female', 'widowed', 'region_iv-a', 'laguna', 'pila', 'pinagbayanan', 'ggg', 'junior_high_school', 'employed', 'gdsgs', 'gdsg', 'professional', 'gdfgfd', 'fasfa', 'fasfa', 'gdfgd', 'fasfafas', 'gds', 'gds', 'gsd', 'more_than_five', 'gds', 'gdsgsgs', '', '', '', '', ''),
(19, '', '', 'new', 'b+', 'gdsgs', 'gdsg', 'gsds', 'gdsg', '2022-07-21', '-1', 'gsds', 'kevchristophermorco@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'pansol', '444', 'junior_high_school', 'employed', 'gdsgs', 'fafas', 'professional', 'gdfgfd', 'gsdg', 'sgd', 'gsggs', 'gdsgs', 'df', 'hfdh', 'hdfh', 'more_than_five', 'hdfhd', '8696796', '', '', '', '', ''),
(20, '', '', 'new', 'o-', 'gdsgd', 'gdsg', 'gdsgs', 'gdsg', '2022-07-08', '0', '654', 'kevchristophermorco@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'pansol', '444', 'elementary', 'employed', 'gsd', 'gsdg', 'professional', 'gsd', 'gsdg', 'gsds', 'gsdg', 'gss', 'gsg', 'gdsg', 'gsd', 'one', 'gsdgs', 'gsdss', '', '', '', '', ''),
(21, '', '', 'new', 'a-', 'gdsgs', 'fhdfhfd', 'fasfafa', 'fhdfhfd', '2022-06-28', '0', '63463', 'kevchristophermorco@gmail.com', 'female', 'single', 'region_iv-a', 'laguna', 'pila', 'santa_clara_norte', '33', 'junior_high_school', 'employed', 'gsdgs', 'gs', 'non-professional', 'gdss', 'gsdg', 'sgsg', 'gsdgs', 'gsdg', 'gsgs', 'gsgs', 'gsgs', 'one', 'fasfas', '57745747', '', '', '', '', ''),
(22, '', '', 'new', 'o+', 'gdsgs', 'fhdfhfd', 'gsdgs', 'fhdfhfd', '2022-07-05', '0', '09877896898', 'kevchristophermorco@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'san_antonio', 'fasfa', 'elementary', 'employed', 'dsa', 'fas', 'professional', 'fasa', 'fasfa', 'fasfa', 'fasfa', 'fasfa', 'fasfa', 'fasfa', 'fafa', 'one', 'fas', 'faf', '', '', '', '', ''),
(23, '', '', 'new', 'a+', 'gdsgd', 'fhdfhfd', 'gsdgsgs', 'fhdfhfd', '2022-07-14', '0', 'gsdgs', 'kevchristophermorco@gmail.com', 'male', 'widowed', 'region_iv-a', 'laguna', 'pila', 'mojon', '33', 'elementary', 'employed', 'gsdg', 'gsdg', 'non-professional', 'fafa', 'fasfa', 'gsdgs', 'gsdgs', 'gsdgs', 'gsdgs', 'gsgs', 'gsg', 'four', 'gsdgs', 'gsgs', '', '', '', '', ''),
(24, '', '', 'new', 'o+', 'gsd', 'ggsdg', 'sgsg', 'ggsdg', '2022-07-20', '-1', 'gsdgsg', 'kevchristophermorco@gmail.com', 'male', 'widowed', 'region_iv-a', 'laguna', 'pila', 'santa_clara_sur', '444', 'junior_high_school', 'employed', 'gdsg', 'gsds', 'professional', 'fafa', 'gdsgs', 'gsdgs', 'gsdgs', 'gsdgs', 'gsdgs', 'gsdgs', 'gsdgds', 'two', 'gsdgs', 'gsdgsgs', '', '', '', '', ''),
(25, '', '', 'new', 'ab+', 'gsdgs', 'gsdgs', 'gsgs', 'gsdgs', '2022-07-27', '-1', '07078070707', 'kevchristophermorco@gmail.com', 'male', 'divorced', 'region_iv-a', 'laguna', 'pila', 'masico', '46', 'junior_high_school', 'employed', 'hdfhd', 'hdhd', 'non-professional', 'hdfh', 'hdh', 'hfdhd', 'hdfhd', 'hdhd', 'hdh', 'hdfh', 'hdf', 'four', 'hdhd', 'hdfhd', '', '', '', '', ''),
(26, '', '', 'new', 'b-', 'gdsgs', 'dsgsdgsdg', 'adasdad', 'dsgsdgsdg', '2022-07-14', '0', '75474', 'christophermorco02@gmail.com', 'male', 'married', 'region_iv-a', 'laguna', 'pila', '', '6457474', 'elementary', 'employed', 'gdsgs', 'gsdgs', 'non-professional', 'gsdgs', 'gsdgs', '37457', '754754', '74574', 'gsdg', 'gsdgs', 'gsdgs', 'three', 'gsgs', 'gsgsg', '', '', '', '', ''),
(27, '', '', 'new', 'a-', 'gdsgsg', 'afasfas', 'fasfaf', 'afasfas', '2022-07-16', '-1', '56856856858', 'christophermorco02@gmail.com', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'santa_clara_norte', '22', 'elementary', 'employed', 'fas', 'fasf', 'professional', 'fafa', 'fas', 'fasfa', 'fas', 'fasf', 'fasf', 'fasf', 'fas', 'one', 'faf', 'fasfa', '', '', '', '', ''),
(28, '', '', 'new', 'ab+', 'ffa', 'fas', 'fasfa', 'fas', '2022-07-27', '-1', '09877896898', 'kevchristophermorco@gmail.com', 'male', 'widowed', 'region_iv-a', 'laguna', 'pila', 'san_miguel', '33', 'elementary', 'employed', 'fasf', 'fasf', 'professional', 'fasfa', 'faf', 'afasf', 'fafa', 'fafa', 'fafa', 'fasfa', 'fasfa', 'more_than_five', 'fasfa', 'fasfa', '', '', '', '', ''),
(29, '', '', 'new', 'a+', 'gdsgs', 'gdsg', 'gsdgs', 'gdsg', '2022-07-22', '-1', '09877896898', 'kevchristophermorco@gmail.com', 'male', 'divorced', 'region_iv-a', 'laguna', 'pila', 'san_antonio', '333', 'elementary', 'employed', 'gdsgs', 'fafas', 'professional', 'fafa', 'fasfa', 'fasfa', 'gdfgd', 'fasfa', 'gdf', 'fasfa', 'gsdgs', 'four', 'gsdgs', '57745747', '', '', '', '', ''),
(30, '', '', 'new', 'a-', 'fasf', 'f', 'fasfa', 'f', '2022-06-28', '0', 'gsdgs', 'kevchristophermorco@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'san_antonio', '44', 'elementary', 'employed', 'gsdgs', 'fafas', 'non-professional', 'fafa', 'gdsgs', 'gdfgd', 'fasfa', 'gdfg', 'fasf', 'fas', 'fas', 'more_than_five', 'fasfa', 'fafa', '', '', '', '', ''),
(31, '', '', 'new', 'a+', 'gdsgd', 'fhdfhfd', 'gsdgsgs', 'fhdfhfd', '2022-07-13', '0', '09877896898', 'kevchristophermorco@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'linga', '222', 'elementary', 'employed', 'fas', 'gsdg', 'professional', 'fasfa', 'fasfa', 'fafa', 'fafa', 'fasfafa', 'fasa', 'fasafa', 'fasfafa', 'three', 'fasfa', '57745747', '', '', '', '', ''),
(32, '', '', 'new', 'o-', 'fsdf', 'fsdfs', 'fsdfs', 'fsdfs', '2022-07-06', '0', '09877896898', 'kevchristophermorco@gmail.com', 'male', 'widowed', 'region_iv-a', 'laguna', 'pila', 'pinagbayanan', '11', 'elementary', 'employed', 'fsdf', 'fas', 'professional', 'fdsf', 'gdsgs', 'gdfgd', 'gdfgd', 'gdfgd', 'fs', 'gds', 'fs', 'four', 'fdsf', '57745747', '', '', '', '', ''),
(33, '', '', 'new', 'o-', 'gdsgs', 'gdsg', 'gsdgs', 'gdsg', '2022-07-21', '-1', '09877896898', 'kevchristophermorco@gmail.com', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'pinagbayanan', '33', 'junior_high_school', 'unemployed', 'fas', 'fas', 'professional', 'fafs', 'fad', 'fds', 'fsdf', 'fsdfs', 'fsdfs', 'fsdfs', 'fsdf', 'one', 'fsdfs', 'fsfs', '', '', '', '', ''),
(34, '', '', 'new', 'b+', 'gdsgs', 'fasfa', 'adasdad', 'fasfa', '2022-07-22', '-1', 'fasfa', 'christophermorco02@gmail.com', 'female', 'single', 'region_iv-a', 'laguna', 'pila', 'labuin', '111', 'elementary', 'unemployed', 'sg', 'gdsgs', 'non-professional', 'gsgs', 'gsdg', 'gsgs', 'gsdgsg', 'gsgs', 'gsgs', 'gsdgs', 'gsgs', 'one', 'gsgs', '64745', '', '', '', '', ''),
(35, '', '', 'new', 'a-', 'gdsgsg', 'dasdad', 'fasfaf', 'dasdad', '2022-07-22', '-1', '86585685685', 'christophermorco02@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'pansol', '111', 'elementary', 'unemployed', 'gsdgs', 'gsdgs', 'professional', 'gsdgs', 'gsdg', 'gsdgs', 'gsdgs', 'gsdgs', 'gdsgs', 'gsgs', 'gsdgs', 'four', 'gsds', 'gsdgs', '', '', '', '', ''),
(36, '', '', 'new', 'o+', 'gds', 'gsg', 'gsdg', 'gsg', '2022-07-02', '0', '56856856858', 'christophermorco02@gmail.com', 'male', 'separated', 'region_iv-a', 'laguna', 'pila', 'san_miguel', '111', 'elementary', 'employed', 'gsdg', 'gsg', 'non-professional', 'gsdgs', 'gdsgs', 'gsgs', 'gsd', 'gsgs', 'gsgs', 'gsdgs', 'gsg', 'four', 'gsgs', 'gsgs', '', '', '', '', ''),
(37, '', '', 'new', 'o+', 'gdsgsg', 'ggsdgs', 'gsgsg', 'ggsdgs', '2022-07-16', '-1', '56856856858', 'christophermorco02@gmail.com', 'female', 'married', 'region_iv-a', 'laguna', 'pila', 'masico', '111', 'elementary', 'unemployed', 'fsgs', 'gdsg', 'professional', 'gs', 'gdsg', 'gsdgs', 'gsdgs', 'gsg', 'gsdgs', 'gsdgs', 'gsdgs', 'three', 'gsdgs', 'gsgs', '', '', '', '', ''),
(38, '', '', 'new', 'a-', 'hdfh', 'hd', 'hdfh', 'hd', '2022-07-06', '0', 'hdfhd', 'christophermorco02@gmail.com', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'pinagbayanan', '111', 'elementary', 'employed', 'fsfs', 'fsd', 'professional', 'gsdgs', 'fsd', 'gsdgds', 'gsdgs', 'twetw', 'hdfhd', 'hdfhd', 'hdfh', 'three', 'hdfhd', '8568585', '', '', '', '', ''),
(39, '', '', 'new', 'a+', 'gsdg', 'gsdg', 'gsgs', 'gsdg', '2022-07-15', '0', 'gsdgs', 'kevchristophermorco@gmail.com', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'pansol', '22', 'junior_high_school', 'employed', 'fasfa', 'fasf', 'non-professional', 'fasfa', 'fas', '67475', '634', 'gsg', 'gsdg', 'gsdgs', 'gdsgs', 'two', 'gsgs', '7474848', '', '', '', '', ''),
(40, '', '', 'new', 'o+', 'gsdgs', 'gsd', 'gsdgs', 'gsd', '2022-07-23', '-1', 'gdsg', 'kevchristophermorco@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'santa_clara_norte', '33', 'elementary', 'unemployed', 'gsdgs', 'fas', 'professional', 'fas', 'fasf', 'fasfa', 'gdfgd', 'gdsgs', 'fasf', 'fasfa', 'fasf', 'two', 'fasfa', 'fasfa', '', '', '', '', ''),
(41, '', '', 'new', 'b+', 'fasfa', 'ggsdgs', 'gsgsg', 'ggsdgs', '2022-07-02', '0', '86585685685', 'christophermorco02@gmail.com', 'female', 'married', 'region_iv-a', 'laguna', 'pila', 'pinagbayanan', '222', 'junior_high_school', 'unemployed', 'fasf', 'faf', 'n/a', 'fafa', 'fasf', 'fasfa', 'fasfa', 'fasfa', 'fasfa', 'fasf', 'fafa', 'four', 'fasfa', '6363436', '', '', '', '', ''),
(42, '', '', 'new', 'a-', 'gdsgsg', 'dasdad', 'gsdgsgs', 'dasdad', '2021-02-02', '1', '86585685685', 'darwin@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'san_antonio', 'ddd', 'elementary', 'employed', 'fds', 'gdsgs', 'professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'hdhd', 'two', 'hdhd', '643734', '', '', '', '', ''),
(43, '', '', 'new', 'a+', 'fasfa', 'ggsdgs', 'gsgsg', 'ggsdgs', '2022-07-14', '0', 'gsdgsgsdgs', 'christophermorco02@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'san_miguel', '111', 'junior_high_school', 'employed', 'fds', 'gdsgs', 'professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'hdhd', 'two', 'hdhd', '643734', '', '', '', '', ''),
(44, '', '', 'new', 'a+', 'fasfa', 'ggsdgs', 'gsgsg', 'ggsdgs', '2022-07-14', '0', 'gsdgsgsdgs', 'christophermorco02@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'san_miguel', '111', 'junior_high_school', 'employed', 'fds', 'gdsgs', 'professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'hdhd', 'two', 'hdhd', '643734', '', '', '', '', ''),
(45, '', '', 'new', 'a-', 'fasfa', 'fasfas', 'fasfa', 'fasfas', '2022-06-02', '0', '86585685685', 'christophermorco02@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'san_miguel', '111', 'elementary', 'employed', 'gsdg', 'gdsgs', 'professional', 'gsds', 'gdsg', '754754', '745747', '74574', 'fasf', 'fasfa', 'fasf', 'one', 'fasa', '643734', '', '', '', '', ''),
(46, '', '', 'new', 'a-', 'fasf', 'fasfa', 'fasfa', 'fasfa', '2000-07-02', '22', '86585685685', 'christophermorco02@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'san_antonio', '111', 'elementary', 'unemployed', 'fds', 'gdsgs', 'professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'hdhd', 'two', 'hdhd', '643734', '', '', '', '', ''),
(47, '', '', 'new', 'a-', 'dasda', 'fasfa', 'gsdgsgs', 'fasfa', '2001-02-16', '21', '86585685685', 'christophermorco02@gmail.com', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'san_miguel', '111', 'elementary', 'unemployed', 'fds', 'gdsgs', 'professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'fasf', 'two', 'hdhd', '643734', '', '', '', '', ''),
(48, '', '', 'new', 'a+', 'fsgdsg', 'dasdad', 'fasfa', 'dasdad', '2022-07-02', '0', '86585685685', 'christophermorco02@gmail.com', 'female', 'single', 'region_iv-a', 'laguna', 'pila', 'san_antonio', '111', 'elementary', 'unemployed', 'gsdg', 'gdsgs', 'professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'hdhd', 'one', 'hdhd', '643734', '', '', '', '', ''),
(49, '', '', 'new', 'a-', 'dasda', 'dasdad', 'gsgsg', 'dasdad', '2010-06-17', '12', '56856856858', 'christophermorco02@gmail.com', 'female', 'single', 'region_iv-a', 'laguna', 'pila', 'santa_clara_norte', '111', 'elementary', 'unemployed', 'gsdg', 'gdsgs', 'professional', 'gsdgs', 'gdsg', '754754', '745747', '74574', 'fasf', 'hdfhd', 'hdhd', 'two', 'hdhd', '643734', '', '', '', '', ''),
(50, '', '', 'new', 'a-', 'fasfa', 'fasfa', 'gsdgsgs', 'fasfa', '2019-06-01', '3', '86585685685', 'christophermorco02@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'pinagbayanan', '111', 'elementary', 'unemployed', 'fds', 'gdsgs', 'non-professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'hdhd', 'one', 'hdhd', '643734', '', '', '', '', ''),
(51, '', '', 'new', 'a+', 'fasfa', 'fasfa', 'gsdgsgs', 'fasfa', '2022-07-02', '0', '86585685685', 'christophermorco02@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'san_antonio', '111', 'elementary', 'employed', 'fds', 'gdsgs', 'n/a', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'hdhd', 'two', 'hdhd', '643734', '', '', '', '', ''),
(52, '', '', 'new', 'a-', 'dasda', '', 'gsdgsgs', '', '2022-07-15', '0', '86585685685', 'christophermorco02@gmail.com', 'female', 'married', 'region_iv-a', 'laguna', 'pila', 'san_miguel', '111', 'junior_high_school', 'employed', 'fds', 'gdsgs', 'non-professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'hdhd', 'two', 'hdhd', '643734', '', '', '', '', ''),
(53, '', '', 'new', 'a+', 'gdsgsg', 'empty', 'adasdad', 'empty', '2022-07-02', '0', '86585685685', 'christophermorco02@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'san_antonio', '111', 'elementary', 'employed', 'gsdg', 'gdsgs', 'professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'hdhd', 'one', 'hdhd', '643734', '', '', '', '', ''),
(54, '', '', 'new', 'a-', 'gdsgs', 'empty', 'adasdad', 'chronic_illness', '2022-07-30', '-1', '86585685685', 'christophermorco02@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'pinagbayanan', '111', 'elementary', 'employed', 'fds', 'gdsgs', 'non-professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'hdhd', 'two', 'hdhd', '643734', '', '', '', '', ''),
(55, '', '', 'New', 'A-', 'Darwins', 'Dasdad', 'Bads', 'Communtication_disability', '2022-06-30', '', '86585685685', 'ff@gmail.com', 'Male', 'Married', 'region_iv-a', 'laguna', 'pila', 'Santa_clara_norte', '111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, '', '', 'new', 'a+', 'gsdgs', 'gdsgs', 'gsdgs', 'orthopedic_disability', '2022-07-21', '-1', 'gsdgs', 'christophermorco02@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'san_miguel', '111', 'college', 'employed', 'fds', 'gdsgs', 'professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'gsd', 'gsgs', 'gsgs', 'two', 'gsdgs', 'gsgs', '', '', '', '', ''),
(57, '', '', 'new', 'a+', 'cxbcx', 'empty', 'bcxb', 'communtication_disability', '2022-03-31', '0', '86585685685', 'christophermorco02@gmail.com', 'male', 'widowed', 'region_iv-a', 'laguna', 'pila', 'san_miguel', '111', 'elementary', 'unemployed', 'hfdhd', 'hdfhd', 'non-professional', 'hdfhd', 'hdf', 'hdfhdf', 'hdfhd', 'hdfhdf', 'hdfh', 'hdfh', 'hdfhd', 'one', 'hdfhd', 'hdfdf', '', '', '', '', ''),
(58, '', '', 'new', 'a-', 'gdsgsg', 'empty', 'fasfa', 'learning_disability', '2022-07-02', '0', '86585685685', 'christophermorco02@gmail.com', 'male', 'single', 'region_iv-a', 'laguna', 'pila', 'santa_clara_norte', '111', 'elementary', 'employed', 'hdfh', 'hdfhd', 'n/a', 'gd', 'hdhd', '754754', '745747', '74574', 'hdfh', 'gsgs', 'hdfhdfhd', 'n/a', 'fasa', '643734', '', '', '', '', ''),
(59, '', '', 'new', 'a+', 'gdsgs', 'empty', 'gdsgs', 'chronic_illness', '2022-07-02', '0', '', 'empty', 'male', 'widowed', 'region_iv-a', 'laguna', 'pila', 'san_miguel', 'gsdgs', 'elementary', 'employed', 'gdsgs', 'gsgs', 'professional', 'gsd', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'fasf', 'one', 'hdfhd', '643734', '', '', '', '', ''),
(60, '', '', 'new', 'a+', 'gdsgsg', 'gdsgs', 'fasfaf', 'communtication_disability', '2022-07-02', '0', 'empty', 'empty', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'san_miguel', '111', 'elementary', 'employed', 'fds', 'gdsgs', 'professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'fasf', 'two', 'hdhd', 'gsgs', '', '', '', '', ''),
(61, '', '', 'new', 'a-', 'gdsgs', 'gsdgs', 'fasfa', 'chronic_illness', '2022-07-07', '0', '86585685685', 'christophermorco02@gmail.com', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'san_antonio', '111', 'elementary', 'unemployed', 'fds', 'ghdf', 'professional', 'gsds', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'hdhd', 'one', 'hdhd', '643734', '', '', '', '', ''),
(62, '', '', 'new', 'a-', 'gdsgs', 'N/A', 'gsdgsgs', 'communtication_disability', '2022-07-06', '0', 'N/A', 'N/A', 'male', 'widowed', 'region_iv-a', 'laguna', 'pila', 'pinagbayanan', '111', 'elementary', 'unemployed', 'fds', 'gdsgs', 'professional', 'gsdgs', 'gsdgs', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'N/A', '', 'hdhd', '643734', '', '', '', '', ''),
(63, '', '', 'new', 'a+', 'gdsgsg', 'N/A', 'gsgsg', 'orthopedic_disability', '2022-07-01', '0', 'N/A', 'N/A', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'pinagbayanan', '111', 'elementary', 'employed', 'N/A', 'N/A', 'professional', 'N/A', 'N/A', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'N/A', 'one', 'hdhd', '643734', '', '', '', '', ''),
(64, '', '', 'new', 'a+', 'gdsgsg', 'N/A', 'gsgsg', 'orthopedic_disability', '2022-07-01', '0', 'N/A', 'N/A', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'pinagbayanan', '111', 'elementary', 'employed', 'N/A', 'N/A', 'professional', 'N/A', 'N/A', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'N/A', 'one', 'hdhd', '643734', '', '', '', '', ''),
(65, '', '', 'new', 'b+', 'fasfa', 'N/A', 'gsdgsgs', 'communtication_disability', '2022-07-14', '0', 'N/A', 'N/A', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'santa_clara_norte', '111', 'elementary', 'unemployed', 'N/A', 'N/A', '', 'N/A', 'N/A', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'N/A', '', 'hdhd', '643734', '', '', '', '', ''),
(66, '', '', 'new', 'a+', 'gdsg', 'N/A', 'fasfaf', 'chronic_illness', '2022-07-14', '0', '86585685685', 'N/A', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'pinagbayanan', '111', 'junior_high_school', 'unemployed', 'N/A', 'N/A', 'non-professional', 'N/A', 'N/A', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'N/A', 'two', 'hdhd', '643734', '', '', '', '', ''),
(67, '', '', 'new', 'a+', 'gdsgs', 'N/A', 'gsdgsgs', 'learning_disability', '2022-07-02', '0', '56856856858', 'N/A', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'san_antonio', '111', 'junior_high_school', 'employed', 'N/A', 'N/A', 'non-professional', 'N/A', 'N/A', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'N/A', 'four', 'fasa', '643734', '', '', '', '', ''),
(68, '', '', 'new', 'a+', 'fasfa', 'N/A', 'gsdgsgs', 'chronic_illness', '2022-07-22', '-1', 'N/A', 'christophermorco02@gmail.com', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'santa_clara_norte', '111', 'elementary', 'employed', 'fds', 'N/A', 'professional', 'N/A', 'N/A', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'N/A', 'one', 'hdhd', '643734', '', '', '', '', ''),
(69, '', '', 'new', 'a-', 'fasfa', 'N/A', 'gsdgsgs', 'learning_disability', '2022-07-02', '0', 'N/A', 'N/A', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'santa_clara_sur', '111', 'elementary', 'employed', 'N/A', 'N/A', 'professional', 'N/A', 'N/A', '754754', '745747', '74574', 'hdfh', 'fasfa', 'hdhd', 'one', 'hdhd', '643734', '', '', '', '', ''),
(70, '', '', 'new', 'a+', 'fasfa', 'N/A', 'gsdgsgs', 'communtication_disability', '2022-07-09', '0', '86585685685', 'N/A', 'female', 'widowed', 'region_iv-a', 'laguna', 'pila', 'san_miguel', 'ddd', 'elementary', 'unemployed', 'N/A', 'N/A', 'non-professional', 'N/A', 'N/A', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'N/A', 'three', 'hdhd', '643734', '', '', '', '', ''),
(71, '', '', 'new', 'b+', 'fasfa', 'N/A', 'gsdgsgs', 'chronic_illness', '2022-07-09', '0', '86585685685', 'N/A', 'male', 'married', 'region_iv-a', 'laguna', 'pila', 'san_miguel', '111', 'junior_high_school', 'unemployed', 'N/A', 'gdsgs', 'professional', 'gd', 'hdf', '754754', '745747', '74574', 'hdfh', 'hdfhd', 'hdhd', 'three', 'hdhd', '643734', '', '', '', '', ''),
(72, '', '', 'New', 'O+', 'Mikko', 'Manalo', 'Manguera', 'Communtication Disability', '2022-07-02', '0', '86585685685', 'ff@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Santa_clara_sur', '111', 'Junior_high_school', 'Employed', 'Fasfa', 'N/a', 'Professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Fasfa', 'Fafas', 'N/a', 'One', 'Fasaf', 'Fafsa', '', '', '', '', ''),
(73, '', '', 'New', 'A+', 'Dasda', 'N/a', 'Fasfaf', 'Mental Disability', '2022-07-02', '0', '56856856858', 'N/A', 'Female', 'Single', 'region_iv-a', 'laguna', 'pila', 'Masico', 'gsdgs', 'Elementary', 'Employed', 'N/a', 'N/a', 'Non-professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Hdfhd', 'Gsgs', 'Two', 'Hdhd', '643734', '', '', '', '', ''),
(74, '', '', 'New', 'A-', 'Kevinss', 'Fasfa', 'Morcos', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila2.jpg', '', '', ''),
(75, '', '', '', '', 'Kevs', 'Fasfa', 'Morcs', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila2.jpg', '', '', ''),
(76, '', '', '', '', 'Zoren', 'Mark', 'Dimaano', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila2.jpg', '', '', ''),
(77, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila2.jpg', '', '', ''),
(78, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila.jpg', '', '', ''),
(79, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila.jpg', '', '', ''),
(80, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila.jpg', '', '', ''),
(83, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'pila-logo.png', '', '', ''),
(84, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'pila-logo.png', '', '', ''),
(85, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'pila-logo.png', '', '', ''),
(86, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila3.jpg', '', '', ''),
(87, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila3.jpg', '', '', ''),
(88, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila.jpg', '', '', ''),
(90, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila.jpg', '', '', ''),
(91, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila.jpg', '', '', ''),
(92, '', '', '', '', '', '', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'homepage-pila.jpg', '', '', ''),
(93, '', '', 'New', 'A-', 'Fasfa', 'N/a', 'Gsdgsgs', 'Chronic Illness', '2022-06-30', '0', 'N/A', 'N/A', 'Female', 'Single', 'region_iv-a', 'laguna', 'pila', 'Santa_clara_sur', '111', 'Elementary', 'Employed', 'N/a', 'N/a', 'Non-professional', 'N/a', 'N/A', 'hdfhdf', '745747', '74574', 'Hdfh', 'Gasga', 'N/a', 'Three', 'Fasaf', 'Fafsa', '', '', '', '', ''),
(94, '', '', 'New', 'A+', 'Fasf', 'Fasf', 'Afafa', 'Chronic Illness', '2022-07-01', '0', 'N/A', 'N/A', 'Male', 'Divorced', 'region_iv-a', 'laguna', 'pila', 'Pinagbayanan', '111', 'Elementary', 'Employed', 'N/a', 'N/a', 'Non-professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Hdfhd', 'N/a', 'One', 'Hdhd', '643734', '', 'homepage-pila.jpg', '', '', ''),
(95, '', '', 'New', 'A+', 'Fasfa', 'Dasdad', 'Gsdgsgs', 'Communtication Disability', '2022-07-22', '-1', 'gsdgsgsdgs', 'christophermorco02@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Tubuan', '111', 'Elementary', 'Employed', 'N/a', 'N/a', 'Professional', 'N/a', 'N/A', 'hdfhdf', '745747', '74574', 'Fasf', 'Hdfhd', 'N/a', 'Four', 'Hdhd', 'Hdfdf', '', 'mswdo-logo.png', 'homepage-pila2.jpg', '', ''),
(96, '', '', 'New', 'O-', 'Fasfa', 'N/a', 'Gsdgsgs', 'Chronic Illness', '2022-06-28', '0', '86585685685', 'twtww@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'San_miguel', 'ddd', 'Elementary', 'Employed', 'Fds', 'Gdsgs', 'Non-professional', 'Gsdgs', 'gdsg', '754754', '745747', '74574', 'Hdfh', 'Gsgs', 'Hdfhd', 'Four', 'Fasaf', '643734', '', 'sample-pic.jpg', 'uploadhomepage-pila3.jpg', '', ''),
(97, '', '', 'New', 'A+', 'Fasfa', 'Fasfa', 'Gsdgsgs', 'Chronic Illness', '2022-06-30', '0', '86585685685', 'twtww@gmail.com', 'Male', 'Married', 'region_iv-a', 'laguna', 'pila', 'Santa_clara_sur', '111', 'Junior_high_school', 'Employed', 'Fds', 'Hdfhd', 'Non-professional', 'Gsdgs', 'gsdgs', '754754', '745747', '74574', 'Fsa', 'Hdfhd', 'N/a', 'Four', 'Hdhd', '643734', '', 'testimonial-1.jpg', 'testimonial-2.jpg', '', ''),
(98, '', '', 'New', 'A+', 'Jane', 'Joe ', 'Dane', 'Communtication Disability', '2022-06-29', '0', '86585685685', 'christophermorco02@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'San_miguel', '555', 'Elementary', 'Employed', 'Hfdhd', 'N/a', 'Non-professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Hdfhd', 'N/a', 'Two', 'Hdfhd', '4574784', '', 'med-cert.jpg', 'brgy-certificate.jpeg', '', ''),
(99, '', '', 'New', 'A-', 'Danica', 'Reyes', 'Robles', 'Communtication Disability', '2022-07-08', '0', '86585685685', 'twtww@gmail.com', 'Male', 'Married', 'region_iv-a', 'laguna', 'pila', 'Labuin', '111', 'Junior_high_school', 'Employed', 'N/a', 'N/a', 'Non-professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Fasfa', 'Hdhd', 'Two', 'Fasaf', '643734', 'formal-pic.jpeg', 'med-cert.jpg', 'brgy-certificate.jpeg', 'voter-id.jpg', ''),
(100, '', '', 'New', 'O-', 'Daniel', 'Dave', 'Leo', 'Learning Disability', '2000-01-18', '22', '86585685685', 'darwin@gmail.com', 'Male', 'Widowed', 'region_iv-a', 'laguna', 'pila', 'San_miguel', '555', 'College', 'Employed', 'N/a', 'N/a', 'Professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Jane', 'Dianne', 'N/a', 'One', 'Harry', 'Styles', '', '', '', '', ''),
(101, '', '', 'New', 'AB+', 'Zayn', 'Reyes', 'Malik', 'Orthopedic Disability', '1999-03-18', '23', '86585685685', 'christophermorco02@gmail.com', 'Female', 'Divorced', 'region_iv-a', 'laguna', 'pila', 'Tubuan', '777', 'College', 'Employed', 'N/a', 'N/a', 'Professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Dave', 'Shelly', 'N/a', 'Two', 'Rose', '098756776', 'formal-pic.jpeg', 'brgy-certificate.jpeg', 'brgy-certificate.jpeg', 'voter-id.jpg', ''),
(102, '', '', 'New', 'A+', 'Darwin', 'Guilatco', 'Badillo', 'Visual Disability', '2022-07-01', '0', '86585685685', 'christophermorco02@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Aplaya', '111', 'Elementary', 'Employed', 'N/a', 'N/a', 'Professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Hdfhd', 'Hdhd', 'One', 'Hdhd', '643734', 'formal-pic.jpeg', 'med-cert.jpg', 'brgy-certificate.jpeg', 'voter-id.jpg', ''),
(103, '', '', 'New', 'A-', 'Gdsgsg', 'N/a', 'Fasfaf', 'Learning Disability', '1995-03-19', '27', '86585685685', 'ff@gmail.com', 'Male', 'Married', 'region_iv-a', 'laguna', 'pila', 'Santa_clara_sur', 'ddd', 'Elementary', 'Unemployed', 'N/a', 'N/a', 'Professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Fsa', 'Hdfh', 'N/a', 'Two', 'Hdhd', 'Hdfhd', 'EMPYRIAN-SHEETS-Lifestyle-Fitted-Sheet-Only-Calm-B', 'Pasted File at November 6, 2020 10_28 AM.png', '4.jpg', '1-D Silver-Grey.jpg', ''),
(104, '', '', 'New', 'A+', 'Fsgdsg', 'N/a', 'Gsdgsgs', 'Mental Disability', '2022-07-01', '0', '86585685685', 'christophermorco02@gmail.com', 'Male', 'Married', 'region_iv-a', 'laguna', 'pila', 'Pansol', '555', 'Junior_high_school', 'Employed', 'Fds', 'N/a', 'Non-professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Hdfhd', 'Hdfhd', 'More_than_five', 'Hdhd', '4574784', 'avatars.png', 'edit.jpg', 'desktop.png', '1-Normal-Printer-icon.png', ''),
(105, '', '', 'New', 'A+', 'Kevs', 'Fasfa', 'Gsdgsgs', 'Communtication Disability', '2004-02-19', '', '56856856858', 'darwin@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'San_miguel', '111', 'Senior_high_school', '', 'Hdfh', 'Gdsgs', 'Non-professional', 'Gsdgs', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Hdfhd', 'Hdhd', 'One', 'Hdfhd', '643734', 'Network Diagram.docx', 'Network Diagram.docx', 'Network Diagram.docx', 'Network Diagram.docx', ''),
(106, '', '1vt6ugVX', 'New', 'B+', 'Fasfa', 'Fasfa', 'Gsdgsgs', 'Chronic Illness', '2022-07-02', '0', 'fasfa', 'christophermorco02@gmail.com', 'Male', 'Married', 'region_iv-a', 'laguna', 'pila', 'San_antonio', '111', 'Junior_high_school', 'Employed', 'N/a', 'N/a', 'Non-professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Fasf', 'Hdfhd', 'Hdfhdfhd', 'One', 'Gsdgs', '643734', 'uploadhomepage-pila3.jpghomepage-pila3.jpg', 'imghomepage-pila2.jpg', 'uploadshomepage-pila.jpg', 'uploadhomepage-pila3.jpghomepage-pila3.jpg', ''),
(107, '', 'UnvOTkbM', 'New', 'A-', 'Fasfa', 'Fasfa', 'Gsdgsgs', 'Chronic Illness', '2022-07-02', '0', '86585685685', 'christophermorco02@gmail.com', 'Female', 'Widowed', 'region_iv-a', 'laguna', 'pila', 'San_miguel', '111', 'Junior_high_school', 'Employed', 'N/a', 'N/a', 'Professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Hdfhd', 'Gsgs', 'One', 'Hdhd', '643734', 'imghomepage-pila2.jpg', 'uploadshomepage-pila2.jpg', 'uploadshomepage-pila2.jpg', 'imghomepage-pila2.jpg', ''),
(108, '', '0dhAqObE', 'New', 'A+', 'Fasfa', 'N/a', 'Gsdgsgs', 'Communtication Disability', '2022-06-30', '0', '86585685685', 'twtww@hdhd', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Pinagbayanan', '111', 'Junior_high_school', 'Unemployed', 'N/a', 'N/a', 'Non-professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Hdfhd', 'Hdhd', 'One', 'Hdhd', '643734', 'uploadhomepage-pila.jpghomepage-pila.jpg', 'uploadshomepage-pila2.jpg', 'uploadhomepage-pila3.jpg', 'uploadpila-logo.png', ''),
(109, '', 'qTY0lMJL', 'New', 'A+', 'Dasda', 'N/a', 'Fasfaf', 'Communtication Disability', '2022-06-30', '0', '86585685685', 'christophermorco02@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Tubuan', '111', 'Elementary', 'Employed', 'Fds', 'N/a', 'Non-professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Gsgs', 'Hdhd', 'One', 'Hshs', '643734', 'imghomepage-pila2.jpg', 'uploadshomepage-pila2.jpg', 'uploadshomepage-pila.jpg', 'uploadshomepage-pila2.jpg', ''),
(110, '', '2amEhVIO', 'New', 'A+', 'Gdsgs', 'N/a', 'Fasfaf', 'Communtication Disability', '2022-06-28', '0', '86585685685', 'christophermorco02@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Pansol', '111', 'Junior_high_school', 'Employed', 'Fds', 'N/a', 'Professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Hdfhd', 'Hdhd', 'Three', 'Gsdgs', '643734', 'imghomepage-pila2.jpg', 'uploadhomepage-pila3.jpghomepage-pila3.jpg', 'uploadhomepage-pila3.jpghomepage-pila3.jpg', 'imghomepage-pila2.jpg', ''),
(111, '', 'Ds2OmfYp', 'New', 'A+', 'Dasda', 'Dasdad', 'Fasfaf', 'Learning Disability', '2022-07-02', '0', '86585685685', 'christophermorco02@gmail.com', 'Male', 'Married', 'region_iv-a', 'laguna', 'pila', 'San_antonio', '111', 'Elementary', 'Employed', 'N/a', 'N/a', 'Professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Hdfhd', 'Hdhd', 'Two', 'Hdfhd', '643734', 'imghomepage-pila2.jpg', 'uploadhomepage-pila3.jpghomepage-pila3.jpg', 'uploadpila-logo.png', 'uploadhomepage-pila.jpghomepage-pila.jpg', ''),
(112, 'One', '34bRQZMS', 'New', 'B+', 'Gdsgs', 'Gdsgs', 'Fasfa', 'Chronic Illness', '2022-07-15', '', '86585685685', 'christophermorco02@gmail.com', 'Male', 'Married', 'region_iv-a', 'laguna', 'pila', 'San_antonio', '111', 'Elementary', 'Unemployed', 'N/a', 'N/a', 'Professional', 'N/a', 'N/A', '754754', '745747', '74574', 'Hdfh', 'Hdfh', 'Hdhd', 'One', 'Hshs', '643734', 'homepage-pila4.jpg', 'pila-logo.png', 'homepage-pila2.jpg', 'brgy-certificate.jpeg', 'Comeback Tomorrow'),
(113, 'Rejected', 'qW9cp7Ct', 'Lost', 'O-', 'Darwin', 'Agarin', 'Dimaano', 'Chronic Illness', '2022-07-01', '', '09876789876', 'kev@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Santa_clara_norte', '222', 'Elementary', 'Unemployed', 'N/a', 'N/a', 'Non-professional', 'N/a', 'N/A', '542352', '74574745', '74574747', 'Ffasfa', 'Fas', 'Hdfh', 'Two', 'Hdfd', '7807808707', 'homepage-pila3.jpg', 'homepage-pila.jpg', 'med-cert.jpg', 'voter-id.jpg', 'Comeback Again');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `usertype`, `position`, `username`, `password`, `created_at`) VALUES
(1, 'pwd_admin', 'MWSDO Pila Federation Head', 'rosalie', 'pwdadmin123', '2022-07-17 08:44:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pwd_info`
--
ALTER TABLE `pwd_info`
  ADD PRIMARY KEY (`pwd_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pwd_info`
--
ALTER TABLE `pwd_info`
  MODIFY `pwd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
