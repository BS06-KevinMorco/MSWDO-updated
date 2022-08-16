-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 04:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `ref_code` varchar(30) NOT NULL,
  `reg_type` varchar(10) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `disability_type` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `Age` varchar(10) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `civil` varchar(20) NOT NULL,
  `region` varchar(25) NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `barangay` varchar(30) NOT NULL,
  `house_no` varchar(10) NOT NULL,
  `education` varchar(30) NOT NULL,
  `employment_status` varchar(30) NOT NULL,
  `employment_type` varchar(30) NOT NULL,
  `employer_type` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `employer_contact` varchar(30) NOT NULL,
  `philhealth_no` varchar(20) NOT NULL,
  `sss_no` varchar(20) NOT NULL,
  `gsis_no` varchar(20) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `spouse_name` varchar(50) NOT NULL,
  `child_no` varchar(10) NOT NULL,
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
(1, 'Pending', 'tBUmvoYA', 'New', 'B-', 'Maria', 'Matula', 'Maglasang', 'Communtication Disability', '1990-07-04', '32', '09643234566', 'triplem@gmail.com', 'Female', 'Single', 'region_iv-a', 'laguna', 'pila', 'Santa_clara_norte', '213', 'College', 'Employed', 'N/a', 'N/a', 'Non-professional', 'Globe', 'N/A', '1242467954679', '1547563579', '453276824643', 'John Maglasang', 'Jenny Maglasang', 'N/a', 'N/a', 'Jenny Maglasang', '09156784532', '015.jpg', 'med-cert.jpg', 'barangay-cert.jpg', 'voter.jpg', ''),
(2, 'Pending', '3m46Ok8v', 'New', 'A-', 'Timothy', 'N/a', 'Barlin', 'Communtication Disability', '1995-05-30', '27', '09435246678', 'timbarl@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Bukal', '229', 'College', 'Employed', 'Freelance', 'Freelance', 'Non-professional', 'N/a', 'N/A', '5436424585314', '1235113454', '35252353462', 'Jose Barlin', 'Miriam Barlin', 'N/a', 'N/a', 'Jose Barlin', '09535267531', '001.jpg', 'medcert.jpg', 'barangay.jpg', 'voter.jpg', ''),
(3, 'Pending', 'PgNRCxn5', 'New', 'AB+', 'Lawrence', 'Labrador', 'Teodoro', 'Psychosocial Disability', '2001-10-09', '20', '09753425478', 'lteodoro@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Masico', '43', 'Senior_high_school', 'Unemployed', 'N/a', 'N/a', 'N/a', 'N/a', 'N/A', 'N/A', 'N/A', 'N/A', 'Michael Teodoro', 'Missy Teodoro', 'N/a', 'N/a', 'Michael Teodoro', '09295863214', '002.jpg', 'medcert.jpg', 'barangay.jpg', 'voter.jpg', ''),
(4, 'Pending', 'E7SbMuHl', 'New', 'B+', 'Maria', 'Nana', 'Silva', 'Orthopedic Disability', '1997-08-07', '24', '09991458432', 'nanams@gmail.com', 'Female', 'Single', 'region_iv-a', 'laguna', 'pila', 'San_antonio', '546', 'College', 'Employed', 'Full Time', 'N/a', 'Professional', 'Solaire', '049321564', '1231231231234', '9824564782', '42135679531', 'Anthony Silva', 'Dorothy Silva', 'N/a', 'N/a', 'Dorothy Silva', '09457541234', '003.jpg', 'medcert.jpg', 'barangay.jpg', 'voter.jpg', ''),
(5, 'Pending', 'cs7wWAEi', 'New', 'A-', 'John', 'Bones', 'Jones', 'Chronic Illness', '1991-02-08', '31', '09551348275', 'bonesjones@gmail.com', 'Male', 'Married', 'region_iv-a', 'laguna', 'pila', 'Pansol', '555', 'College', 'Employed', 'Part Time', 'N/a', 'Professional', 'Converge', '049214333', '543642585314', '23543423', '24135679134', 'Totoy Jones', 'Nora Jones', 'Helena Jones', 'Three', 'Totoy Jones', '09535264545', '004.jpg', 'medcert.jpg', 'barangay.jpg', 'voter.jpg', ''),
(6, 'Pending', 'Us8wVr9b', 'New', 'B-', 'Erik', 'Chan', 'Tan', 'Mental Disability', '2000-09-15', '21', '09643543876', 'erikchantan15@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Concepcion', '12', 'Senior_high_school', 'Unemployed', 'N/a', 'N/a', 'N/a', 'N/a', 'N/A', 'N/A', 'N/A', 'N/A', 'Jerry Tan', 'Molly Tan', 'N/a', 'N/a', 'Molly Tan', '09156743288', '005.jpg', 'medcert.jpg', 'barangay.jpg', 'voter.jpg', ''),
(7, 'Pending', 'kecKhFLu', 'New', 'O+', 'Jerome', 'Ritualo', 'Dorado', 'Communtication Disability', '2000-08-25', '21', '09193308847', 'jeromerd2000@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Labuin', '6', 'Senior_high_school', 'Employed', 'Part Time', 'N/a', 'Non-professional', 'Mcdonalds', 'N/A', '224342586254', '3113546622', '44152351142', 'Junjun Dorado', 'Michelle Dorado', 'N/a', 'N/a', 'Junjun Dorado', '09294412315', '006.jpg', 'med-cert.jpg', 'barangay-cert.jpg', 'voter.jpg', ''),
(8, 'Pending', '8Erk0cO6', 'Lost', 'O-', 'Christie ', 'Diokno', 'Fermin', 'Psychosocial Disability', '1998-05-02', '24', '09165892256', 'christie0502@gmail.com', 'Female', 'Separated', 'region_iv-a', 'laguna', 'pila', 'Mojon', '115', 'College', 'Employed', 'Casual', 'Government', 'Professional', 'Mdrrmo', 'N/A', '2188563452875', '6644563551', '15627683345', 'Tom Fermin', 'Kris Fermin', 'N/a', 'N/a', 'Tom Fermin', '09296452119', '007.jpg', 'medcert.jpg', 'barangay.jpg', 'voter.jpg', ''),
(9, 'Pending', 'FqStuI7g', 'New', 'B+', 'Joseph', 'Torno', 'Gonzales', 'Chronic Illness', '1989-11-30', '32', '09192993155', 'josephtg@gmail.com', 'Male', 'Married', 'region_iv-a', 'laguna', 'pila', 'Linga', '213', 'College', 'Employed', 'Full Time', 'Private', 'Professional', 'Concentrix', 'N/A', '4246622118222', '5502218005', '120076856417', 'Tommy Gonzales', 'Josephine Gonzales', 'Denise Gonzales', 'Four', 'Josephine Gonzales', '09194665589', '008.jpg', 'medcert.jpg', 'barangay.jpg', 'voter.jpg', ''),
(10, 'Pending', 'cxftpGaV', 'New', 'O-', 'Jeffrey', 'De Leon', 'Constantino', 'Learning Disability', '2000-05-03', '22', '09452185508', 'jeff_const@yahoo.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Concepcion', '155', 'Senior_high_school', 'Unemployed', 'N/a', 'N/a', 'N/a', 'N/a', 'N/A', 'N/A', 'N/A', 'N/A', 'Tony Constantino', 'Mary Jane Constantino', 'N/a', 'N/a', 'Mary Jane Constantino', '09082157651', '009.jpg', 'medcert.jpg', 'barangay.jpg', 'voter.jpg', ''),
(11, 'Pending', '8mfDTQwO', 'New', 'AB+', 'Serge John', 'Medrano', 'Manzano', 'Mental Disability', '1993-04-07', '29', '09072157316', 'serg3j0hn@gmail.com', 'Male', 'Separated', 'region_iv-a', 'laguna', 'pila', 'Tubuan', '18', 'College', 'Employed', 'Job Order', 'Government', 'Professional', 'N/a', 'N/A', '2115532211900', '7447521997', '91555033964', 'Sergio Manzano', 'Luisa Manzano', 'N/a', 'One', 'Sergio Manzano', '09152184402', '010.jpg', 'medcert.jpg', 'barangay.jpg', 'voter.jpg', ''),
(12, 'Pending', 'GCQBPxK0', 'New', 'AB-', 'Maddy', 'Concepcion', 'Tolentino', 'Communtication Disability', '1999-07-09', '23', '09157011825', 'madzzz09@hotmail.com', 'Female', 'Single', 'region_iv-a', 'laguna', 'pila', 'Masico', '007', 'Senior_high_school', 'Unemployed', 'N/a', 'N/a', 'N/a', 'N/a', 'N/A', '4407194218331', 'N/A', 'N/A', 'Gregory Tolentino', 'Marites Concepcion', 'N/a', 'N/a', 'Gregory Tolentino', '09183198724', '011.jpg', 'medcert.jpg', 'barangay-cert.jpg', 'voter.jpg', ''),
(13, 'Pending', 'OaqQYdIm', 'New', 'O-', 'Victor', 'Fabian', 'Garcia', '', '1995-02-15', '27', '09185012219', 'officialvicg@gmail.com', 'Male', 'Single', 'region_iv-a', 'laguna', 'pila', 'Mojon', '019', 'College', 'Employed', 'Freelance', 'N/a', 'Non-professional', 'N/a', 'N/A', '2906559600223', '9942183672', '415591462342', 'Gregorio Garcia', 'Yvonne Garcia', 'N/a', 'N/a', 'Yvonne Garcia', '09162294417', '012.jpg', 'medcert.jpg', 'barangay.jpg', 'voter.jpg', ''),
(14, 'Pending', 'Gh2nLDvd', 'New', 'O+', 'Heather', 'Rodriguez', 'Diaz', 'Orthopedic Disability', '2001-06-20', '21', '09992267188', 'heatherslife@gmail.com', 'Female', 'Single', 'region_iv-a', 'laguna', 'pila', 'Bukal', '518', 'Senior_high_school', 'Employed', 'Part Time', 'Government', 'Non-professional', 'Peso', 'N/A', 'N/A', 'N/A', 'N/A', 'Nate Diaz', 'Grace Diaz', 'N/a', 'N/a', 'Nate Diaz', '09164192019', '013.jpg', 'medcert.jpg', 'barangay.jpg', 'voter.jpg', ''),
(15, 'Pending', 'hJDQ3fPk', 'New', 'AB-', 'Tamara', 'Ramos', 'Villanueva', 'Visual Disability', '1996-12-03', '25', '09158123554', 'tamaravrms@gmail.com', 'Female', 'Married', 'region_iv-a', 'laguna', 'pila', 'Bagong_pook', '091', 'College', 'Employed', 'Full Time', 'Private', 'Professional', 'Cognizant', 'N/A', '1478211923418', '0019625778', '21962351802', 'Renato Ramos', 'Sandara Ramos', 'Sheldon Villanueva', 'Two', 'Sandara Ramos', '09062158416', '014.jpg', 'medcert.jpg', 'barangay.jpg', 'voter.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `senior_info`
--

CREATE TABLE `senior_info` (
  `senior_id` int(11) NOT NULL,
  `application_status` varchar(15) NOT NULL,
  `ref_code` varchar(30) NOT NULL,
  `reg_type` varchar(10) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `Age` varchar(10) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `civil` varchar(20) NOT NULL,
  `region` varchar(25) NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `barangay` varchar(30) NOT NULL,
  `house_no` varchar(10) NOT NULL,
  `education` varchar(30) NOT NULL,
  `employment_status` varchar(30) NOT NULL,
  `employment_type` varchar(30) NOT NULL,
  `employer_type` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `employer_contact` varchar(30) NOT NULL,
  `philhealth_no` varchar(20) NOT NULL,
  `sss_no` varchar(20) NOT NULL,
  `gsis_no` varchar(20) NOT NULL,
  `spouse_name` varchar(50) NOT NULL,
  `child_no` varchar(10) NOT NULL,
  `formal_pic` varchar(50) NOT NULL,
  `med_cert` varchar(50) NOT NULL,
  `brgy_cert` varchar(50) NOT NULL,
  `voter_id` varchar(50) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `senior_info`
--

INSERT INTO `senior_info` (`senior_id`, `application_status`, `ref_code`, `reg_type`, `blood_type`, `fname`, `mname`, `lname`, `dob`, `Age`, `mobile_no`, `email`, `gender`, `civil`, `region`, `province`, `city`, `barangay`, `house_no`, `education`, `employment_status`, `employment_type`, `employer_type`, `occupation`, `company_name`, `employer_contact`, `philhealth_no`, `sss_no`, `gsis_no`, `spouse_name`, `child_no`, `formal_pic`, `med_cert`, `brgy_cert`, `voter_id`, `remarks`) VALUES
(1, 'Pending', 'MuEHIVgw', 'Old', 'B-', 'Arthur', 'Reyes', 'Delos Santos', '1967-06-22', '55', '09876541234', 'art@gmail.com', 'Male', 'Married', 'region_iv-a', 'laguna', 'pila', 'Mojon', '543 Mangga', 'College', 'Employed', 'Full Time', 'Government', 'Professional', 'Dswd', '09870987657', '4565466546546', '5464646478', '09876543212', 'Mary Jane', 'Two', '01.jpg', 'med-cert.jpg', 'brgy-certificate.jpeg', 'voter-id.jpg', 'To Be Announced'),
(2, 'Pending', 'bLuDpyYW', 'Lost', 'A+', 'Maria', 'Jade', 'Leo', '2022-07-02', '0', '09872345678', 'mar@gmail.com', 'Female', 'Single', 'region_iv-a', 'laguna', 'pila', 'Concepcion', '555 Elm St', 'College', 'Unemployed', 'N/a', 'N/a', 'Non-professional', 'N/a', 'N/A', '0987654321234', '9654654321', '98765432123', 'Mike Tyson', 'Two', '02.jpg', 'med-cert.jpg', 'brgy-certificate.jpeg', 'voter-id.jpg', 'To Be Announced');

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
(1, 'pwd_admin', 'MWSDO Pila Federation Head', 'rosalie', 'pwdadmin123', '2022-07-17 00:44:27'),
(2, 'senior_admin', 'MSWDO OSCA HEAD', 'ligaya sollano', 'senioradmin123', '2022-07-20 07:41:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pwd_info`
--
ALTER TABLE `pwd_info`
  ADD PRIMARY KEY (`pwd_id`);

--
-- Indexes for table `senior_info`
--
ALTER TABLE `senior_info`
  ADD PRIMARY KEY (`senior_id`);

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
  MODIFY `pwd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `senior_info`
--
ALTER TABLE `senior_info`
  MODIFY `senior_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
