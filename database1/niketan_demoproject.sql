-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 08:48 AM
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
-- Database: `niketan_demoproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_customers`
--

CREATE TABLE `add_customers` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_customers`
--

INSERT INTO `add_customers` (`id`, `name`) VALUES
(1, 'dc'),
(3, 'niketan'),
(4, 'dc');

-- --------------------------------------------------------

--
-- Table structure for table `add_design_documents`
--

CREATE TABLE `add_design_documents` (
  `id` int(20) NOT NULL,
  `part_number` varchar(20) NOT NULL,
  `part_description` varchar(20) NOT NULL,
  `document_name` varchar(20) NOT NULL,
  `revision_number` varchar(20) NOT NULL,
  `revision_remark` varchar(20) NOT NULL,
  `revision_date` varchar(20) NOT NULL,
  `upload_drawing` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_design_documents`
--

INSERT INTO `add_design_documents` (`id`, `part_number`, `part_description`, `document_name`, `revision_number`, `revision_remark`, `revision_date`, `upload_drawing`) VALUES
(1, '001', 'new', 'hh', '1', 'hello', '2023-05-12', 'part_creation_ppap_s'),
(2, '001', 'new', 'yes', '3', 'ok', '2023-05-13', 'part_creation_ppap_s'),
(4, '001', 'new', 'yes', '3', 'first', '2023-05-13', 'part_creation_ppap_s'),
(8, '001', 'new', 'yes1', '3', '2', '2023-05-13', 'User_Image6_(2)2.jpg'),
(9, '001', 'new', 'yes1', '3', '2', '2023-05-13', 'User_Image6_(2)3.jpg'),
(10, '001', 'new', 'yes1', '3', '2', '2023-05-13', 'User_Image6_(2)4.jpg'),
(11, '001', 'new', 'yes1', '3', '2', '2023-05-13', 'User_Image6_(2)5.jpg'),
(12, '001', 'new', 'yes1', '3', '2', '2023-05-13', 'User_Image6_(2)6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_design_index`
--

CREATE TABLE `add_design_index` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_design_index`
--

INSERT INTO `add_design_index` (`id`, `name`) VALUES
(1, 'ss'),
(5, 'hello'),
(9, 'dc');

-- --------------------------------------------------------

--
-- Table structure for table `add_email_masters`
--

CREATE TABLE `add_email_masters` (
  `id` int(20) NOT NULL,
  `email_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_email_masters`
--

INSERT INTO `add_email_masters` (`id`, `email_id`) VALUES
(1, 'ss@gmail.com'),
(3, 'zdvzd1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `add_operation_number`
--

CREATE TABLE `add_operation_number` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_operation_number`
--

INSERT INTO `add_operation_number` (`id`, `name`) VALUES
(1, 'ss'),
(3, 'hello1');

-- --------------------------------------------------------

--
-- Table structure for table `add_part_family`
--

CREATE TABLE `add_part_family` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_part_family`
--

INSERT INTO `add_part_family` (`id`, `name`) VALUES
(1, 'dc'),
(2, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `add_part_type`
--

CREATE TABLE `add_part_type` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_part_type`
--

INSERT INTO `add_part_type` (`id`, `name`) VALUES
(1, 'ss'),
(2, 'dc');

-- --------------------------------------------------------

--
-- Table structure for table `add_ppap_index_master`
--

CREATE TABLE `add_ppap_index_master` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_ppap_index_master`
--

INSERT INTO `add_ppap_index_master` (`id`, `name`) VALUES
(1, 'ss'),
(2, 'hello1'),
(4, 'dc'),
(5, 'dc1');

-- --------------------------------------------------------

--
-- Table structure for table `add_slide_show`
--

CREATE TABLE `add_slide_show` (
  `id` int(20) NOT NULL,
  `select_screen` varchar(20) NOT NULL,
  `upload_image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_slide_show`
--

INSERT INTO `add_slide_show` (`id`, `select_screen`, `upload_image`) VALUES
(3, 'screen-3', 'User_Image22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_standard_library`
--

CREATE TABLE `add_standard_library` (
  `id` int(20) NOT NULL,
  `document_name` varchar(20) NOT NULL,
  `upload_operation_drawing` varchar(20) NOT NULL,
  `revision_number` varchar(20) NOT NULL,
  `revision_remark` varchar(20) NOT NULL,
  `revision_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_standard_library`
--

INSERT INTO `add_standard_library` (`id`, `document_name`, `upload_operation_drawing`, `revision_number`, `revision_remark`, `revision_date`) VALUES
(1, 'hh', 'User_Image6_(2)8.jpg', '1', 'ok', '2023-05-14'),
(2, 'hello', 'User_Image6_(2)81.jp', '01', '2', '2023-05-14'),
(3, 'yes1', 'User_Image6_(2)9.jpg', '01', '2', '2023-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `add_standard_library_revision`
--

CREATE TABLE `add_standard_library_revision` (
  `id` int(20) NOT NULL,
  `document_name` varchar(20) NOT NULL,
  `upload_operation_drawing` varchar(20) NOT NULL,
  `revision_number` varchar(20) NOT NULL,
  `revision_remark` varchar(20) NOT NULL,
  `revision_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_standard_library_revision`
--

INSERT INTO `add_standard_library_revision` (`id`, `document_name`, `upload_operation_drawing`, `revision_number`, `revision_remark`, `revision_date`) VALUES
(1, 'hh', 'User_Image6_(2)83.jp', '1', 'ok', '2023-05-14'),
(2, 'hh', 'User_Image6_(2)10.jp', '2', 'second', '2023-05-14'),
(3, 'hello', 'User_Image6_(2)84.jp', '01', 'ok', '2023-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `master_add`
--

CREATE TABLE `master_add` (
  `id` int(20) NOT NULL,
  `master_name` varchar(20) NOT NULL,
  `master_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_add`
--

INSERT INTO `master_add` (`id`, `master_name`, `master_no`) VALUES
(1, 'hello', '001'),
(2, 'a', '0'),
(4, 'd', '004'),
(5, 'hello', '005');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(20) NOT NULL,
  `part_number` varchar(20) NOT NULL,
  `part_description` varchar(20) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `part_type` varchar(20) NOT NULL,
  `part_family` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `part_number`, `part_description`, `customer_name`, `part_type`, `part_family`) VALUES
(1, '001', 'new', 'niketan', 'dc', 'hello'),
(2, '002', 'Nipple1', 'dc', 'ss', 'dc');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `drawing_upload` varchar(20) NOT NULL,
  `drawing_download` varchar(20) NOT NULL,
  `cad_download` varchar(20) NOT NULL,
  `cad_upload` varchar(20) NOT NULL,
  `model_download` varchar(20) NOT NULL,
  `model_upload` varchar(20) NOT NULL,
  `other_doc_1_download` varchar(20) NOT NULL,
  `other_doc_1_upload` varchar(20) NOT NULL,
  `other_doc_2_download` varchar(20) NOT NULL,
  `other_doc_2_upload` varchar(20) NOT NULL,
  `ppap_download` varchar(20) NOT NULL,
  `ppap_upload` varchar(20) NOT NULL,
  `operation_download` varchar(20) NOT NULL,
  `operation_upload` varchar(20) NOT NULL,
  `other_data_download` varchar(20) NOT NULL,
  `other_data_upload` varchar(20) NOT NULL,
  `mis_data_download` varchar(20) NOT NULL,
  `mis_data_upload` varchar(20) NOT NULL,
  `plant` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `plant_head` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_email`, `user_pass`, `user_name`, `user_type`, `drawing_upload`, `drawing_download`, `cad_download`, `cad_upload`, `model_download`, `model_upload`, `other_doc_1_download`, `other_doc_1_upload`, `other_doc_2_download`, `other_doc_2_upload`, `ppap_download`, `ppap_upload`, `operation_download`, `operation_upload`, `other_data_download`, `other_data_upload`, `mis_data_download`, `mis_data_upload`, `plant`, `department`, `plant_head`) VALUES
(1, 'admin@admin.com', 'admin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'admin@admin.com', 'xzx', 'dd', 'super_admin', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'P1', 'D1', 'no'),
(4, 'admin@admin.com', ' aa', 'hello', 'PPAP Admin', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'P2', 'D3', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_customers`
--
ALTER TABLE `add_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_design_documents`
--
ALTER TABLE `add_design_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_design_index`
--
ALTER TABLE `add_design_index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_email_masters`
--
ALTER TABLE `add_email_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_operation_number`
--
ALTER TABLE `add_operation_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_part_family`
--
ALTER TABLE `add_part_family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_part_type`
--
ALTER TABLE `add_part_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_ppap_index_master`
--
ALTER TABLE `add_ppap_index_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_slide_show`
--
ALTER TABLE `add_slide_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_standard_library`
--
ALTER TABLE `add_standard_library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_standard_library_revision`
--
ALTER TABLE `add_standard_library_revision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_add`
--
ALTER TABLE `master_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_customers`
--
ALTER TABLE `add_customers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_design_documents`
--
ALTER TABLE `add_design_documents`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `add_design_index`
--
ALTER TABLE `add_design_index`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `add_email_masters`
--
ALTER TABLE `add_email_masters`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_operation_number`
--
ALTER TABLE `add_operation_number`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `add_part_family`
--
ALTER TABLE `add_part_family`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_part_type`
--
ALTER TABLE `add_part_type`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_ppap_index_master`
--
ALTER TABLE `add_ppap_index_master`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_slide_show`
--
ALTER TABLE `add_slide_show`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_standard_library`
--
ALTER TABLE `add_standard_library`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_standard_library_revision`
--
ALTER TABLE `add_standard_library_revision`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_add`
--
ALTER TABLE `master_add`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
