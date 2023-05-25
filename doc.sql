-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2023 at 05:22 AM
-- Server version: 8.0.33-0ubuntu0.20.04.2
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doc`
--

-- --------------------------------------------------------

--
-- Table structure for table `disability`
--

CREATE TABLE `disability` (
  `disability_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `disability_notes` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distributions`
--

CREATE TABLE `distributions` (
  `Id` int NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `value` decimal(10,2) DEFAULT NULL,
  `uom` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `economic_improvement_indicator`
--

CREATE TABLE `economic_improvement_indicator` (
  `Id` int NOT NULL,
  `improvement_indicator` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `economic_wellbeing_status`
--

CREATE TABLE `economic_wellbeing_status` (
  `Id` int NOT NULL,
  `assessment_date` date DEFAULT NULL,
  `income_amount` decimal(10,2) DEFAULT NULL,
  `income_frequency` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nutritional_survey_score` decimal(5,2) DEFAULT NULL,
  `school_fees_paid` decimal(10,2) DEFAULT NULL,
  `rent` decimal(10,2) DEFAULT NULL,
  `medications` decimal(10,2) DEFAULT NULL,
  `housing_condition` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `assessment_of_vulnerability` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `health conditions`
--

CREATE TABLE `health conditions` (
  `condition_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `condition_notes` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `household`
--

CREATE TABLE `household` (
  `household_Id` int NOT NULL,
  `service_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `social_worker` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `subcounty` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ward` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `residential_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `landowner_flag` tinyint(1) DEFAULT NULL,
  `household_notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `attachments` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `income_source`
--

CREATE TABLE `income_source` (
  `income_source_Id` int NOT NULL,
  `income_source_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `livestock`
--

CREATE TABLE `livestock` (
  `livestock_Id` int NOT NULL,
  `livestock_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `animals_owned` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `second_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `surname` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `primary_contact_flag` tinyint(1) DEFAULT NULL,
  `direct_beneficiary_flag` tinyint(1) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` int DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `occupation_or_school_level` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `client_notes` text COLLATE utf8mb4_general_ci,
  `ice_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ice_phone` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `caregiver_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `table_banking_savings_amount` decimal(10,2) DEFAULT NULL,
  `admission_number` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `transport_status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_contact_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `parent_contact_phone_number` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `program_level` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `physio_services_received` text COLLATE utf8mb4_general_ci,
  `adpk_registered` tinyint(1) DEFAULT NULL,
  `nhif_coverage` tinyint(1) DEFAULT NULL,
  `nssf_coverage` tinyint(1) DEFAULT NULL,
  `bursaries_received` text COLLATE utf8mb4_general_ci,
  `condition_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `condition_notes` text COLLATE utf8mb4_general_ci,
  `member_notes` text COLLATE utf8mb4_general_ci,
  `attachments` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poverty_issues`
--

CREATE TABLE `poverty_issues` (
  `poverty_issues_Id` int NOT NULL,
  `poverty_issue_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program activity`
--

CREATE TABLE `program activity` (
  `activity_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `event_description` text COLLATE utf8mb4_general_ci,
  `activity_date` date DEFAULT NULL,
  `school_fees_charged` decimal(10,2) DEFAULT NULL,
  `transport_fees_charged` decimal(10,2) DEFAULT NULL,
  `progress_milestones_reached` text COLLATE utf8mb4_general_ci,
  `recurring_event_flag` tinyint(1) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_general_ci,
  `aggregate_tracking_flag` tinyint(1) DEFAULT NULL,
  `aggregate_event_number_of_attendees-adult_female` int DEFAULT NULL,
  `aggregate_event_number_of_attendees-adult_male` int DEFAULT NULL,
  `aggregate_event_number_of_attendees-child_female` int DEFAULT NULL,
  `aggregate_event_number_of_attendees-child_male` int DEFAULT NULL,
  `home_visitor_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `attachments` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `responsible_social_worker` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `program_begin_date` date DEFAULT NULL,
  `program_exited_date` date DEFAULT NULL,
  `program_exited_reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `home_based_care_flag` tinyint(1) DEFAULT NULL,
  `cohort_identifier` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `referral_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referral_date` date DEFAULT NULL,
  `follow_up_date` date DEFAULT NULL,
  `referral_outcome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distributions`
--
ALTER TABLE `distributions`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `economic_improvement_indicator`
--
ALTER TABLE `economic_improvement_indicator`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `economic_wellbeing_status`
--
ALTER TABLE `economic_wellbeing_status`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `household`
--
ALTER TABLE `household`
  ADD PRIMARY KEY (`household_Id`);

--
-- Indexes for table `income_source`
--
ALTER TABLE `income_source`
  ADD PRIMARY KEY (`income_source_Id`);

--
-- Indexes for table `livestock`
--
ALTER TABLE `livestock`
  ADD PRIMARY KEY (`livestock_Id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `poverty_issues`
--
ALTER TABLE `poverty_issues`
  ADD PRIMARY KEY (`poverty_issues_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distributions`
--
ALTER TABLE `distributions`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `economic_improvement_indicator`
--
ALTER TABLE `economic_improvement_indicator`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `economic_wellbeing_status`
--
ALTER TABLE `economic_wellbeing_status`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income_source`
--
ALTER TABLE `income_source`
  MODIFY `income_source_Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `livestock`
--
ALTER TABLE `livestock`
  MODIFY `livestock_Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poverty_issues`
--
ALTER TABLE `poverty_issues`
  MODIFY `poverty_issues_Id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
