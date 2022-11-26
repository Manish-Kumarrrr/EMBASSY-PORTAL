-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 06:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `name` varchar(15) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `phone` bigint(15) NOT NULL,
  `adhaar` bigint(15) NOT NULL,
  `pan` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `pass` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `face` varchar(100) NOT NULL DEFAULT 'abc.jpg',
  `identity` varchar(100) NOT NULL DEFAULT 'xyj,jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`name`, `surname`, `email`, `phone`, `adhaar`, `pan`, `dob`, `pass`, `address`, `face`, `identity`) VALUES
('MANISH ', 'KUMAR', 'mk@io.com', 8210724391, 102030405060, 'BMWQ123456', '2003-09-09', '128', 'ASHOK NAGAR PATNA -20 ', 'idproof1.pdf', ' idproof3.pdf'),
('MANOJ', 'KUMAR', 'mnj@io.com', 7896724391, 112233445566, 'KPWQ123456', '2003-09-10', '129', 'Bahraich Lucknow UP INDIA', 'idproof2.pdf', ' idproof.txt'),
('CHANDRASEKHAR', 'GOUDA', 'csg@123gmail.com', 8210724389, 203040506070, 'BMWQ123896', '2022-11-02', '064', 'sonbhadra up', 'idproof1.pdf', ' idproof.txt'),
('MANISH', '', 'mk128@gmail.com', 8210724356, 605040302010, 'BMWQ9875', '2003-09-09', '128', 'B-401 HALL-4 IIITDM ,jabalpur,MADHYA PRADESH', '2022-10-13 (1).png', ' idproof3.pdf'),
('The', 'Great', 'great123@gmail.com', 7905636946, 714049507064, 'ABC12345', '2022-12-30', 'ASCD1234', 'PLOT NO 12, AMEER GHAR, DUBAI', '2022-10-13 (1).png', ' 2022-10-13 (2).png');

-- --------------------------------------------------------

--
-- Table structure for table `embassy`
--

CREATE TABLE `embassy` (
  `ambassador` varchar(50) NOT NULL,
  `country` varchar(40) NOT NULL,
  `location` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `embassy`
--

INSERT INTO `embassy` (`ambassador`, `country`, `location`, `address`, `email`, `website`, `phone`, `link`) VALUES
('Hon Barry O\'Farrell AO', 'AUSTRALIA', 'INDIA', '\r\nChanakyapuri, New Delhi, Delhi, India, 110021', 'ahc.newdelhi@dfat.gov.au', 'http://india.highcommission.gov.au/', '+911141399900', 'https://www.google.com/maps/search/?api=1&query=28.596766,77.191408'),
('Abdulrahman Mohamed Ahmed Al Gaoud', 'BAHRAIN', 'INDIA', '4, Pal amMar g,Vasant Vihar, New Delhi, India, 10057', 'bahrainembindia@yahoo.com', 'https://www.mofa.gov.bh/Default.aspx?tabid=5870&language=en-US', '+911126154154', 'https://www.google.com/maps/search/?api=1&query=28.556207,77.163953'),
('Andre Aranha Correa Do Lago', 'BRAZIL', 'INDIA', 'Aurangzeb Road, New Delhi, Delhi, India, 110011', 'ahc.newdelhi@dfat.gov.au', 'http://novadelhi.itamaraty.gov.br/en-us/', '+911123017301', 'https://www.google.com/maps/search/?api=1&query=28.601996,77.219466'),
('Nadir Patel', 'CANADA', 'INDIA', '7/8 Shantipath, Chanakyapuri, New Delhi, India, 110021', 'delhi@international.gc.ca', 'http://www.india.gc.ca/', '+911141782000', 'https://www.google.com/maps/search/?api=1&query=28.595835,77.186151'),
('Rudrendra Tandon', 'INDIA', 'AFGHANISTAN', 'Malalai Watt, Shahre-Nau Kabul Afghanistan', 'amb.kabul@mea.gov.in', 'https://www.eoi.gov.in/kabul/', '+93202200185', 'https://www.google.com/maps/search/?api=1&query=Malalai%20Watt,%20Shahre-Nau%20Kabul%20Afghanistan'),
('Piyush Srivastava', 'INDIA', 'BAHRAIN', 'Rd No 2819, Jidhafs, Manama, Bahrain', 'indemb@batelco.com.bh', 'https://www.eoi.gov.in/bahrain/', '+97317712683', 'https://www.google.com/maps/search/?api=1&query=26.234682,50.545981'),
('Suresh Reddy', 'INDIA', 'BRAZIL', 'SES 805 Lote 24-Asa Sul-Brasilia, DF, Brazil, 71620-285', 'indemb@indianembassy.org.br', 'http://www.indianembassy.org.br/', '+556132484006', 'https://www.google.com/maps/search/?api=1&query=-15.817458,-47.885351'),
('Ajay Bisaria', 'INDIA', 'CANADA', '201-325 Howe Street Vancouver, Canada, BC, V6C 1Z7', 'cons2.vancouver@mea.gov.in', 'https://www.cgivancouver.gov.in/', '+16046628811', 'https://www.google.com/maps/search/?api=1&query=49.286529,-123.114304'),
('Sujan R. Chinoy', 'INDIA', 'JAPAN', '2-2-11 Kudan-Minami, Chiyoda-ku, Tokyo, Japan, 102-0074\r\n', 'iec.tokyo@mea.gov.in', 'https://www.indembassy-tokyo.gov.in/', '+81332622391', 'https://www.google.com/maps/search/?api=1&query=35.69405,139.747156'),
('Naveen Srivastava', 'INDIA', 'NEPAL', '336 Kapurdhara Marg, Lainchaur P.O. Box 292 Kathmandu Nepal', 'NULL', 'http://www.indembkathmandu.gov.in/', '+97714410900', 'https://www.google.com/maps/search/?api=1&query=27.721512,85.317887'),
('NEETA BHUSHAN', 'INDIA', 'NEW ZEALAND', '\r\n133a/Onehunga Mall Road, Onehunga, Auckland, New Zealand, 1061', 'office@consulateofindia.in', 'NULL', '+6496366306', 'https://www.google.com/maps/search/?api=1&query=-15.817458,-47.885351'),
('G. Balasubramanian', 'INDIA', 'NIGERIA', 'Plot 364, Cadastral Zone Off Constitution Avenue Central Business District Abuja Nigeria', 'info.abuja@mea.gov.in', 'https://www.hciabuja.gov.in/', '+2347080622800/', 'https://www.google.com/maps/search/?api=1&query=Plot%20364,%20Cadastral%20Zone%20Off%20Constitution%20Avenue%20Central%20Business%20District%20Abuja%20Nigeria'),
('Suresh Kumar', 'INDIA', 'PAKISTAN', 'India House Aldwych Islamabad Pakistan', 'hicomind@isb.compol.com', 'NULL', '+9251220695054', 'https://www.google.com/maps/search/?api=1&query=India%20House%20Aldwych%20Islamabad%20Pakistan'),
('Pravan Kapoor', 'INDIA', 'RUSSIA', 'Vorontsovo Pole st., 6/8, 105064\r\n', 'amboffice.moscow@mea.gov.inhoc.moscow@mea.gov.incons.moscow@mea.gov.inforvisa', 'NULL', '+74957837535', 'https://www.google.com/maps/search/?api=1&query=55.752875,37.649858'),
('Sanjay Bhattacharyya', 'INDIA', 'SWITZERLAND', 'Kirchenfeldstrasse 28, Bern, Switzerland, 3005', 'india@indembassybern.ch', 'https://www.indembassybern.gov.in/', '+41313501130', 'https://www.google.com/maps/search/?api=1&query=46.939995,7.450502'),
('NAGESH SINGH', 'INDIA', 'THAILAND', '46 Soi Prasarnmitr, Sukhumvit Road, Soi 23, Bangkok, Thailand, 10110', 'indiaemb@indianembassy.in.th', 'http://www.indianembassy.in.th/', '+6622580300/6', 'https://www.google.com/maps/search/?api=1&query=13.742678,100.561644'),
('Navdeep Singh Suri', 'INDIA', 'UNITED ARAB EMIRATES', 'Plot No. 10, Sector W-59/02, Diplomatic Area, Off the Sheikh Rashid Bin Saeed Street, Abu Dhabi, United Arab Emirates', 'dcm@indembassyuae.org', 'http://www.indembassyuae.gov.in/', '+97124492700', 'https://www.google.com/maps/search/?api=1&query=24.425462,54.433625'),
('Vikram Doraiswami', 'INDIA', 'UNITED KINGDOM', '20 Augusta Street, Jewellery Quarter, Hockley, Birmingham, United Kingdom, B18 6JL\r\n', 'inf.birmingham@mea.gov.in', 'https://cgibirmingham.gov.in/', '+447424752082', 'https://www.google.com/maps/search/?api=1&query=52.488136,-1.910699'),
('Taranjit Singh Sandhu', 'INDIA', 'UNITED STATE OF AMERICA', '2107, Massachusetts Avenue, Washington, USA, NW 20008', 'amb.washington@mea.gov.in', 'http://www.indianembassy.org/', '+1202939700', 'https://www.google.com/maps/search/?api=1&query=38.911328,-77.047'),
('Satoshi Suzuki', 'JAPAN', 'INDIA', '7/8 Shantipath, Chanakyapuri, New Delhi, India, 110021', 'jpembjic@nd.mofa.go.jp', 'http://www.in.emb-japan.go.jp/', '+911126876582', 'https://www.google.com/maps/search/?api=1&query=28.600966,77.193226'),
('David Pine', 'NEW ZEALAND', 'INDIA', '\r\nNyaya Marg, Chanakyapuri, New Delhi, Delhi, India, 110021', 'nzhc@airtelmail.in', 'http://www.nzembassy.com/india', '+911123017301', 'https://www.google.com/maps/search/?api=1&query=28.587707,77.182049'),
('A. Elizabeth Jones', 'UNITED STATES OF AMERICA', 'INDIA', 'Shantipath, Chanakyapuri, New Delhi, India, 110021\r\n', 'support-india@ustraveldocs.com', 'https://in.usembassy.gov/embassy-consulates/new-delhi/', '+911124198000', 'https://www.google.com/maps/search/?api=1&query=28.595835,77.186151'),
('Meghan Gregonis', 'UNITED STATES OF AMERICA', 'UNITED ARAB EMIRATES', 'Airport Road, Embassies District, Abu Dhabi, United Arab Emirates, 4009', 'ghazalrs@state.gov', 'http://www.ae.usembassy.gov/', '+97124142200', 'https://www.google.com/maps/search/?api=1&query=24.424418,54.43371');

-- --------------------------------------------------------

--
-- Table structure for table `health_record`
--

CREATE TABLE `health_record` (
  `adhaar` bigint(12) NOT NULL,
  `record_id` varchar(20) NOT NULL,
  `blood_group` varchar(20) DEFAULT 'AB+',
  `dissabilities` varchar(50) DEFAULT NULL,
  `organisation` varchar(200) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `health` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health_record`
--

INSERT INTO `health_record` (`adhaar`, `record_id`, `blood_group`, `dissabilities`, `organisation`, `issue_date`, `health`) VALUES
(102030405060, '121', 'A', 'NULL', 'AIIMS', '2022-11-07', 'health1.txt'),
(112233445566, '1215689', 'B+', 'Blindness', 'AIIMS', '2022-11-09', 'health1.txt');

-- --------------------------------------------------------

--
-- Table structure for table `passport`
--

CREATE TABLE `passport` (
  `adhaar` bigint(20) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `occupation` varchar(250) NOT NULL,
  `qualification` varchar(250) NOT NULL,
  `income` varchar(250) NOT NULL,
  `criminal` varchar(250) NOT NULL,
  `incomeproof` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'PROCESSING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passport`
--

INSERT INTO `passport` (`adhaar`, `pass`, `occupation`, `qualification`, `income`, `criminal`, `incomeproof`, `status`) VALUES
(102030405060, '128', 'student', 'Btech', '00', 'crminalrecord3.pdf', 'income3.pdf', 'DENIED'),
(112233445566, '129', 'student', 'Btech', '00', 'crimnalrecard2.pdf', 'income2.pdf', 'ACCEPTED'),
(605040302010, '128', 'STUDENT', 'UNDERGRAD', '00.00', 'crminalrecord3.pdf', 'income1.jar', 'PROCESSING');

-- --------------------------------------------------------

--
-- Table structure for table `visa`
--

CREATE TABLE `visa` (
  `adhaar` bigint(20) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `visatype` varchar(250) NOT NULL,
  `supporteddoc` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'PROCESSING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visa`
--

INSERT INTO `visa` (`adhaar`, `nationality`, `visatype`, `supporteddoc`, `status`) VALUES
(102030405060, 'INDIAN', 'Student', 'idproof.txt', 'ACCEPTED'),
(112233445566, 'INDIAN', 'STUDENT', 'health.pdf', 'ACCEPTED'),
(123456789012, 'INDIAN', 'Student', 'health2.pdf', 'DENIED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`adhaar`);

--
-- Indexes for table `embassy`
--
ALTER TABLE `embassy`
  ADD PRIMARY KEY (`country`,`location`);

--
-- Indexes for table `health_record`
--
ALTER TABLE `health_record`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `adhaar` (`adhaar`);

--
-- Indexes for table `passport`
--
ALTER TABLE `passport`
  ADD PRIMARY KEY (`adhaar`);

--
-- Indexes for table `visa`
--
ALTER TABLE `visa`
  ADD PRIMARY KEY (`adhaar`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `health_record`
--
ALTER TABLE `health_record`
  ADD CONSTRAINT `health_record_ibfk_1` FOREIGN KEY (`adhaar`) REFERENCES `account` (`adhaar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
