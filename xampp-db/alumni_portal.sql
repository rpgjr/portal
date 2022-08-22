-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 06:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminID` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminID`, `username`, `email`, `password`, `accessType`, `created_at`, `updated_at`) VALUES
(1, 'IT_admin', 'rodrigo21geneta@gmail.com', 'itadmin', 'Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alumni_lists`
--

CREATE TABLE `alumni_lists` (
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  `byear` int(11) NOT NULL,
  `bmonth` int(11) NOT NULL,
  `bday` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumni_lists`
--

INSERT INTO `alumni_lists` (`lastname`, `firstname`, `middlename`, `studNumber`, `course`, `batch`, `byear`, `bmonth`, `bday`, `created_at`, `updated_at`) VALUES
('Geneta', 'Rodrigo Jr. ', 'Pilariza', '2019-00433-TG-0', 'BSIT', 2019, 2001, 1, 31, '2022-08-18 14:42:11', '2022-08-18 14:42:11'),
('Mama', 'Hadijah', 'Tambogon', '2019-00434-TG-0', 'BSIT', 2019, 2001, 9, 29, '2022-08-18 14:42:11', '2022-08-18 14:42:11'),
('Gierza', 'Lougen', 'Princess', '2019-00435-TG-0', 'BSIT', 2019, 1999, 3, 3, '2022-08-18 14:42:11', '2022-08-18 14:42:11'),
('Trinidad', 'Hannah Jane', 'Depression ', '2019-00436-TG-0', 'BSIT', 2019, 2001, 5, 22, '2022-08-18 14:42:11', '2022-08-18 14:42:11'),
('Claveria', 'Rein Andrei', 'Gono', '2019-00437-TG-0', 'BSIT', 2019, 2001, 2, 13, '2022-08-18 14:42:11', '2022-08-18 14:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `careerID` int(10) UNSIGNED NOT NULL,
  `job_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carRequest` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`careerID`, `job_name`, `company`, `salary`, `description`, `category`, `email`, `number`, `username`, `carRequest`, `created_at`, `updated_at`) VALUES
(2, 'Sample', 'Sample Inc.', 123, '1231231231', 'Engineering', 'sample@gmail.com', '123', 'rodgeneta', 1, '2022-08-16 11:22:45', '2022-08-16 11:22:45'),
(3, 'admin sample', 'sample inc', 1231231, 'sdasdasda', 'IT', 'sample@gmail.com', '1231231231231', 'IT_admin', 1, '2022-08-16 11:36:32', '2022-08-16 11:36:32'),
(4, 'Sample Job 2', 'sample Inc', 2000, 'sana all may trabaho na', 'Accounting', 'one@gmail.com', '0912334345', 'IT_admin', 1, '2022-08-20 17:35:04', '2022-08-20 17:35:04'),
(5, 'sample 4', '4th sample', 50000, 'wala kang gagawin', 'IT', 'two@gmail.com', '0934554', 'IT_admin', 1, '2022-08-20 17:43:42', '2022-08-20 17:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `career_applicants`
--

CREATE TABLE `career_applicants` (
  `applicantID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `careerID` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --
-- Dumping data for table `career_applicants`
--

INSERT INTO `career_applicants` (`applicantID`, `userID`, `careerID`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL),
(4, 1, 5, NULL, NULL),
(6, 3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseDesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `courseDesc`) VALUES
('DICT', 'Diploma in Information Communication Technology'),
('BSAM', 'Bachelor of Science in Actuarial Mathematics'),
('BSBA-HRDM', 'Bachelor of Science in Business Administration Major in Human Resource Development Management'),
('BSBA-MM', 'Bachelor of Science in Business Administration Major in Marketing Management'),
('BSECE', 'Bachelor of Science in Electronics and Communications Engineering'),
('BSEd-English', 'Bachelor in Secondary Education Major in English'),
('BSEd-Social Studies', 'Bachelor in Secondary Education Major in Social Studies'),
('BSIT', 'Bachelor of Science in Information Technology'),
('BSME', 'Bachelor of Science in Mechanical Engineering'),
('BSEM', 'Bachelor of Science in Entrepreneurial Management'),
('BSEd-Mathematics', 'Bachelor in Secondary Education Major in Mathematics'),
('BBA-Management', 'Bachelor in Business Administration Major in Management'),
('BEM', 'Bachelor in Entrepreneurial Management'),
('BCDPM', 'Bachelor of Computer in Data Processing Management'),
('DOMT-LOM', 'Diploma in Office Management Technology with specialization in Legal Office Management'),
('DICMT', 'Diploma in Information Communication Management Technology'),
('DAMT', 'Diploma in Accounting Management Technology'),
('BSOA-LT', 'Bachelor of Science in Office Administration Major in Legal Transcription'),
('PBDM', 'Post Baccalaureate Diploma in Management'),
('DMET', 'Diploma in Mechanical Engineering Technology'),
('BSA', 'Bachelor of Science in Accountancy');

-- --------------------------------------------------------

--
-- Table structure for table `exit_interview`
--

CREATE TABLE `exit_interview` (
  `exitID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civil_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cityAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec1_q1` int(11) NOT NULL,
  `sec1_q2` int(11) NOT NULL,
  `sec1_q3` int(11) NOT NULL,
  `sec1_q4` int(11) NOT NULL,
  `sec1_q5` int(11) NOT NULL,
  `sec1_q6` int(11) NOT NULL,
  `sec1_q7` int(11) NOT NULL,
  `sec2_q1` int(11) NOT NULL,
  `sec2_q2` int(11) NOT NULL,
  `sec2_q3` int(11) NOT NULL,
  `sec3_q1` int(11) NOT NULL,
  `sec3_q2` int(11) NOT NULL,
  `sec3_q3` int(11) NOT NULL,
  `sec4_q1` int(11) NOT NULL,
  `sec4_q2` int(11) NOT NULL,
  `sec4_q3` int(11) NOT NULL,
  `sec5_q1` int(11) NOT NULL,
  `sec5_q2` int(11) NOT NULL,
  `sec5_q3` int(11) NOT NULL,
  `sec6_q1` int(11) NOT NULL,
  `sec6_q2` int(11) NOT NULL,
  `sec6_q3` int(11) NOT NULL,
  `sec7_q1` int(11) NOT NULL,
  `sec7_q2` int(11) NOT NULL,
  `sec7_q3` int(11) NOT NULL,
  `sec8_q1` int(11) NOT NULL,
  `sec8_q2` int(11) NOT NULL,
  `sec8_q3` int(11) NOT NULL,
  `sec9_q1` int(11) NOT NULL,
  `sec9_q2` int(11) NOT NULL,
  `sec9_q3` int(11) NOT NULL,
  `sec10_q1` int(11) NOT NULL,
  `sec10_q2` int(11) NOT NULL,
  `sec10_q3` int(11) NOT NULL,
  `sec11_q1` int(11) NOT NULL,
  `sec11_q2` int(11) NOT NULL,
  `sec11_q3` int(11) NOT NULL,
  `sec12_q1` int(11) NOT NULL,
  `sec12_q2` int(11) NOT NULL,
  `sec12_q3` int(11) NOT NULL,
  `sec13_q1` int(11) NOT NULL,
  `sec13_q2` int(11) NOT NULL,
  `sec13_q3` int(11) NOT NULL,
  `sec14_q1` int(11) NOT NULL,
  `sec14_q2` int(11) NOT NULL,
  `sec14_q3` int(11) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exit_interview`
--

INSERT INTO `exit_interview` (`exitID`, `userID`, `lastName`, `firstName`, `middleName`, `gender`, `age`, `civil_status`, `number`, `email`, `studNumber`, `courseID`, `year`, `cityAddress`, `emp_status`, `reason`, `sec1_q1`, `sec1_q2`, `sec1_q3`, `sec1_q4`, `sec1_q5`, `sec1_q6`, `sec1_q7`, `sec2_q1`, `sec2_q2`, `sec2_q3`, `sec3_q1`, `sec3_q2`, `sec3_q3`, `sec4_q1`, `sec4_q2`, `sec4_q3`, `sec5_q1`, `sec5_q2`, `sec5_q3`, `sec6_q1`, `sec6_q2`, `sec6_q3`, `sec7_q1`, `sec7_q2`, `sec7_q3`, `sec8_q1`, `sec8_q2`, `sec8_q3`, `sec9_q1`, `sec9_q2`, `sec9_q3`, `sec10_q1`, `sec10_q2`, `sec10_q3`, `sec11_q1`, `sec11_q2`, `sec11_q3`, `sec12_q1`, `sec12_q2`, `sec12_q3`, `sec13_q1`, `sec13_q2`, `sec13_q3`, `sec14_q1`, `sec14_q2`, `sec14_q3`, `comment`, `created_at`, `updated_at`) VALUES
(1, 3, 'Mama', 'Hadijah', 'Tambogon', 'Female', '21', 'Married', '09452262002', 'sample@gmail.com', '2019-00434-TG-0', 'BSEd-Social Studies', '4th Year', 'sa lower', 'N/A', 'Graduation', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, NULL, '2022-08-21 20:50:55', '2022-08-21 20:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_08_06_154640_create_courses_table', 1),
(3, '2022_08_06_165204_create_user_accounts_table', 1),
(4, '2022_08_11_180436_create_admins_table', 1),
(5, '2022_08_11_231155_create_alumni_lists_table', 1),
(6, '2022_08_13_114304_create_careers_table', 1),
(7, '2022_08_16_181620_create_forms_table', 1),
(8, '2022_08_16_181806_create_form_questions_table', 1),
(25, '2022_08_16_194558_create_tracers_table', 2),
(26, '2022_08_16_203526_create_alumni_tracers_table', 2),
(27, '2022_08_17_181334_create_tracer_answers_table', 2),
(31, '2022_08_19_203113_create_tbl_alumni_table', 3),
(32, '2014_10_12_000000_create_users_table', 4),
(33, '2022_08_21_005357_create_career_applicants_table', 5),
(37, '2022_08_21_174556_create_pds_table', 6),
(45, '2022_08_21_210331_create_exit_interview_table', 7),
(46, '2022_08_21_224118_create_sas_form_table', 8);

-- -- --------------------------------------------------------

--
-- Table structure for table `pds`
--

CREATE TABLE `pds` (
  `pdsID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bday` date NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cityAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincialAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fathersName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathersNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothersName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothersNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `officeDates` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seminar1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seminar1Date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seminar2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seminar2Date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seminar3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seminar3Date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submissionDate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pds`
--

INSERT INTO `pds` (`pdsID`, `userID`, `lastName`, `firstName`, `middleName`, `gender`, `age`, `bday`, `number`, `email`, `religion`, `courseID`, `batch`, `cityAddress`, `provincialAddress`, `fathersName`, `fathersNumber`, `mothersName`, `mothersNumber`, `office`, `position`, `officeDates`, `seminar1`, `seminar1Date`, `seminar2`, `seminar2Date`, `seminar3`, `seminar3Date`, `submissionDate`, `created_at`, `updated_at`) VALUES
(1, 3, 'Mama', 'Hadijah', 'Tambogon', 'Female', '21', '2001-09-29', '09452262002', 'admin_rod@gmail.com', 'Muslim', 'BSEd-Social Studies', '2022', 'sa lower', NULL, 'Dance With My Father', '099991111', 'Mama Ohhhhhh', '0988883333', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2022-08-22', '2022-08-21 20:53:59', '2022-08-21 20:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sas_form`
--

CREATE TABLE `sas_form` (
  `sasID` int(10) UNSIGNED NOT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stakeholder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semesters` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sas_q1` int(11) NOT NULL,
  `sas_q2` int(11) NOT NULL,
  `sas_q3` int(11) NOT NULL,
  `sas_q4` int(11) NOT NULL,
  `sas_q5` int(11) NOT NULL,
  `sas_q6` int(11) NOT NULL,
  `sas_q7` int(11) NOT NULL,
  `sas_q8` int(11) NOT NULL,
  `sas_q9` int(11) NOT NULL,
  `sas_q10` int(11) NOT NULL,
  `sas_q11` int(11) NOT NULL,
  `sas_q12` int(11) NOT NULL,
  `sas_q13` int(11) NOT NULL,
  `sas_q14` int(11) NOT NULL,
  `sas_q15` int(11) NOT NULL,
  `sas_q16` int(11) NOT NULL,
  `sas_q17` int(11) NOT NULL,
  `sas_q18` int(11) NOT NULL,
  `sas_q19` int(11) NOT NULL,
  `sas_q20` int(11) NOT NULL,
  `sas_q21` int(11) NOT NULL,
  `sas_q22` int(11) NOT NULL,
  `sas_q23` int(11) NOT NULL,
  `sas_q24` int(11) NOT NULL,
  `sas_q25` int(11) NOT NULL,
  `sas_q26` int(11) NOT NULL,
  `sas_q27` int(11) NOT NULL,
  `sas_q28` int(11) NOT NULL,
  `sas_q29` int(11) NOT NULL,
  `sas_q30` int(11) NOT NULL,
  `sas_q31` int(11) NOT NULL,
  `sas_q32` int(11) NOT NULL,
  `sas_q33` int(11) NOT NULL,
  `sas_q34` int(11) NOT NULL,
  `sas_q35` int(11) NOT NULL,
  `sas_q36` int(11) NOT NULL,
  `sas_q37` int(11) NOT NULL,
  `sas_q38` int(11) NOT NULL,
  `sas_q39` int(11) NOT NULL,
  `sas_q40` int(11) NOT NULL,
  `sas_q41` int(11) NOT NULL,
  `sas_q42` int(11) NOT NULL,
  `sas_q43` int(11) NOT NULL,
  `sas_q44` int(11) NOT NULL,
  `sas_q45` int(11) NOT NULL,
  `sas_q46` int(11) NOT NULL,
  `sas_q47` int(11) NOT NULL,
  `sas_q48` int(11) NOT NULL,
  `sas_q49` int(11) NOT NULL,
  `sas_q50` int(11) NOT NULL,
  `sas_q51` int(11) NOT NULL,
  `sas_q52` int(11) NOT NULL,
  `sas_q53` int(11) NOT NULL,
  `sas_q54` int(11) NOT NULL,
  `sas_q55` int(11) NOT NULL,
  `sas_q56` int(11) NOT NULL,
  `sas_q57` int(11) NOT NULL,
  `sas_q58` int(11) NOT NULL,
  `sas_q59` int(11) NOT NULL,
  `sas_q60` int(11) NOT NULL,
  `sas_q61` int(11) NOT NULL,
  `sas_q62` int(11) NOT NULL,
  `sas_q63` int(11) NOT NULL,
  `sas_q64` int(11) NOT NULL,
  `sas_q65` int(11) NOT NULL,
  `sas_q66` int(11) NOT NULL,
  `sas_q67` int(11) NOT NULL,
  `sas_q68` int(11) NOT NULL,
  `sas_q69` int(11) NOT NULL,
  `sas_q70` int(11) NOT NULL,
  `sas_q71` int(11) NOT NULL,
  `sas_q72` int(11) NOT NULL,
  `sas_q73` int(11) NOT NULL,
  `sas_q74` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sas_form`
--

INSERT INTO `sas_form` (`sasID`, `userID`, `lastName`, `firstName`, `middleName`, `gender`, `age`, `email`, `stakeholder`, `semesters`, `sas_q1`, `sas_q2`, `sas_q3`, `sas_q4`, `sas_q5`, `sas_q6`, `sas_q7`, `sas_q8`, `sas_q9`, `sas_q10`, `sas_q11`, `sas_q12`, `sas_q13`, `sas_q14`, `sas_q15`, `sas_q16`, `sas_q17`, `sas_q18`, `sas_q19`, `sas_q20`, `sas_q21`, `sas_q22`, `sas_q23`, `sas_q24`, `sas_q25`, `sas_q26`, `sas_q27`, `sas_q28`, `sas_q29`, `sas_q30`, `sas_q31`, `sas_q32`, `sas_q33`, `sas_q34`, `sas_q35`, `sas_q36`, `sas_q37`, `sas_q38`, `sas_q39`, `sas_q40`, `sas_q41`, `sas_q42`, `sas_q43`, `sas_q44`, `sas_q45`, `sas_q46`, `sas_q47`, `sas_q48`, `sas_q49`, `sas_q50`, `sas_q51`, `sas_q52`, `sas_q53`, `sas_q54`, `sas_q55`, `sas_q56`, `sas_q57`, `sas_q58`, `sas_q59`, `sas_q60`, `sas_q61`, `sas_q62`, `sas_q63`, `sas_q64`, `sas_q65`, `sas_q66`, `sas_q67`, `sas_q68`, `sas_q69`, `sas_q70`, `sas_q71`, `sas_q72`, `sas_q73`, `sas_q74`, `created_at`, `updated_at`) VALUES
(1, 3, 'Mama', 'Hadijah', 'Tambogon', 'Female', '21', 'sample@gmail.com', 'Student', '8 or more', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-08-21 20:52:48', '2022-08-21 20:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumni`
--

CREATE TABLE `tbl_alumni` (
  `userID` int(10) UNSIGNED NOT NULL,
  `studNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bday` date NOT NULL,
  `age` int(11) NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cityAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincialAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_alumni`
--

INSERT INTO `tbl_alumni` (`userID`, `studNumber`, `lastName`, `firstName`, `middleName`, `courseID`, `batch`, `gender`, `bday`, `age`, `religion`, `cityAddress`, `provincialAddress`, `email`, `email_verified_at`, `number`, `username`, `password`, `accessType`, `created_at`, `updated_at`) VALUES
(1, '2019-00433-TG-0', 'Geneta', 'Rodrigo Jr.', 'Pilariza', 'BSIT', 2019, 'Male', '2001-01-31', 21, 'Roman Catholic', '#27 General Santos Avenue, Lower Bicutan, Taguig City', NULL, 'rodrigo21geneta@gmail.com', '2022-08-22 04:47:16', '0912311231', 'rodgeneta', '$2y$10$x3ziGSemE0TMjqQSxLi09.dItlu04A/khrfWC0MhtmIqqNS8Ln6Jq', 'alumni', '2022-08-19 13:10:22', '2022-08-19 13:10:22'),
(3, '2019-00434-TG-0', 'Mama', 'Hadijah', 'Tambogon', 'BSEd-Social Studies', 2022, 'Female', '2001-09-29', 21, 'Muslim', 'sa lower', NULL, 'admin_rod@gmail.com', '2022-08-21 20:37:20', '09452262002', 'hadijah0316', '$2y$10$gif1v0fBsVYZx5DNe16DMONBMloGIdvnwgPBYpSYkjEeiXCAVeWT6', 'alumni', '2022-08-21 12:37:20', '2022-08-21 12:37:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`careerID`);

--
-- Indexes for table `career_applicants`
--
ALTER TABLE `career_applicants`
  ADD PRIMARY KEY (`applicantID`),
  ADD KEY `career_applicants_userid_foreign` (`userID`),
  ADD KEY `career_applicants_careerid_foreign` (`careerID`);

--
-- Indexes for table `exit_interview`
--
ALTER TABLE `exit_interview`
  ADD PRIMARY KEY (`exitID`),
  ADD KEY `exit_interview_userid_foreign` (`userID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pds`
--
ALTER TABLE `pds`
  ADD PRIMARY KEY (`pdsID`),
  ADD KEY `pds_userid_foreign` (`userID`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sas_form`
--
ALTER TABLE `sas_form`
  ADD PRIMARY KEY (`sasID`),
  ADD KEY `sas_form_userid_foreign` (`userID`);

--
-- Indexes for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `careerID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `career_applicants`
--
ALTER TABLE `career_applicants`
  MODIFY `applicantID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exit_interview`
--
ALTER TABLE `exit_interview`
  MODIFY `exitID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pds`
--
ALTER TABLE `pds`
  MODIFY `pdsID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sas_form`
--
ALTER TABLE `sas_form`
  MODIFY `sasID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_alumni`
--
ALTER TABLE `tbl_alumni`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `career_applicants`
--
ALTER TABLE `career_applicants`
  ADD CONSTRAINT `career_applicants_careerid_foreign` FOREIGN KEY (`careerID`) REFERENCES `careers` (`careerID`),
  ADD CONSTRAINT `career_applicants_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `tbl_alumni` (`userID`);

--
-- Constraints for table `exit_interview`
--
ALTER TABLE `exit_interview`
  ADD CONSTRAINT `exit_interview_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `tbl_alumni` (`userID`);

--
-- Constraints for table `pds`
--
ALTER TABLE `pds`
  ADD CONSTRAINT `pds_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `tbl_alumni` (`userID`);

--
-- Constraints for table `sas_form`
--
ALTER TABLE `sas_form`
  ADD CONSTRAINT `sas_form_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `tbl_alumni` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
