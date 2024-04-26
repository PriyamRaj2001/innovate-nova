-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 09:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innovatenova`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `title` varchar(111) NOT NULL,
  `header` varchar(111) NOT NULL,
  `descr` varchar(1111) NOT NULL,
  `image` longblob NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `title`, `header`, `descr`, `image`, `Created_at`, `updated_at`) VALUES
(1, '', ' Unleash the Power of Creativity with our Web Development, Graphics, and Content Writing Expertise!', 'We have designed a website to showcase our extensive skill and knowledge in web development, graphics, and content writing. Our website serves as a testament to our expertise in these areas, featuring a visually captivating design that highlights our creative abilities. Through engaging content, we demonstrate our proficiency in web development, showcasing our ability to create dynamic and responsive websites that provide seamless user experiences. Our graphic design portfolio showcases our talent in creating visually stunning graphics and illustrations that captivate audiences. Additionally, we exhibit our prowess in content writing, crafting compelling and informative articles that effectively communicate messages and engage readers. Our website serves as a comprehensive display of our capabilities, demonstrating our dedication to delivering high-quality work and providing exceptional services to our clients.', 0x75706c6f6164732f61626f75742e706e67, '2023-04-29 05:15:19', '2023-05-25 17:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin@gmail.com', '7079@admin');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descr` varchar(500) NOT NULL,
  `link` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `post_by` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `title`, `descr`, `link`, `date`, `post_by`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Trending about ChatGPT', 'Stay ahead of the curve with our cutting-edge ChatGPT services, revolutionizing the way we interact and communicate in the digital age.', '', '2023-04-18', 'Om Prakash Kumar', 0x75706c6f6164732f44657369676e6572202832292e706e67, '2023-04-30 13:37:16', '2023-05-25 18:52:29'),
(3, 'Ai ', ' AI is an advanced technology that uses machine learning and algorithms to simulate human intelligence, enabling machines to perform tasks and make decisions autonomously.', '', '2023-05-01', 'Abhishek Raj', 0x75706c6f6164732f4d656d6f7261626c652064657369676e20312e706e67, '2023-05-25 19:46:26', '2023-05-25 19:46:26'),
(4, ' Ai War', 'The AI war escalated, with advanced algorithms battling for dominance, shaping the future of technology and raising ethical concerns.<br><br>', '', '2023-05-04', 'Priyam ', 0x75706c6f6164732f4d656d6f7261626c652064657369676e2031202832292e706e67, '2023-05-25 19:50:20', '2023-05-25 19:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `choose_service`
--

CREATE TABLE `choose_service` (
  `choose_service_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `image` longblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choose_service`
--

INSERT INTO `choose_service` (`choose_service_id`, `title`, `descr`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Web Designing', 'As a customer-focused organization, we are dedicated to helping businesses like yours achieve success by providing innovative solutions that meet your unique needs. With a testimonial of experts in various areas of technology, including software developme', 0x75706c6f6164732f5765622e706e67, '2023-04-29 05:47:45', '2023-05-25 17:44:21'),
(4, 'Graphics Design', 'As a customer-focused organization, we are dedicated to helping businesses like yours achieve success by providing innovative solutions that meet your unique needs. With a testimonial of experts in various areas of technology, including software developme', 0x75706c6f6164732f47726170686963732e706e67, '2023-04-30 13:11:17', '2023-05-25 17:44:41'),
(5, 'Content Writing', 'As a customer-focused organization, we are dedicated to helping businesses like yours achieve success by providing innovative solutions that meet your unique needs. With a testimonial of experts in various areas of technology, including software developme', 0x75706c6f6164732f636f6e74656e742e706e67, '2023-05-25 17:45:05', '2023-05-25 17:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `contact_details_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`contact_details_id`, `email`, `number`, `address`, `fb`, `tw`, `insta`, `linkedin`, `created_at`, `updated_at`) VALUES
(3, 'opks47284@gmail.com', '+91 70798 98990', 'Hostel No 10, Maharishi Markandeshwar University, Mullan-Ambala Haryana 133207', 'https://www.facebook.com/profile.php?id=100027011629772', 'https://www.facebook.com/profile.php?id=100027011629772', 'https://www.facebook.com/profile.php?id=100027011629772', 'https://www.facebook.com/profile.php?id=100027011629772', '2023-05-01 04:49:04', '2023-05-01 04:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `contact_form_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`contact_form_id`, `name`, `email`, `number`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ram', '', '', '', '2023-05-01 05:13:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counter_project`
--

CREATE TABLE `counter_project` (
  `counter_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_number` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter_project`
--

INSERT INTO `counter_project` (`counter_id`, `project_name`, `project_number`, `created_at`, `updated_at`) VALUES
(1, 'SATISFIED CLIENTS', 45, '2023-04-28 13:59:02', '2023-05-01 05:47:56'),
(2, 'Project Complete', 12, '2023-04-28 13:59:10', '2023-05-01 05:46:39'),
(3, 'dummy', 10, '2023-04-28 13:59:19', '2023-05-01 05:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `home_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `header` varchar(100) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`home_id`, `title`, `icon`, `header`, `image`) VALUES
(4, 'Innovate Nova', 'fa-solid fa-fire', 'Our goal is to make your dream a reality and help your business grow.', 0x75706c6f6164732f6d61696e2e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `r_work`
--

CREATE TABLE `r_work` (
  `r_work_id` int(11) NOT NULL,
  `title` varchar(44) NOT NULL,
  `descr` varchar(1111) NOT NULL,
  `link` varchar(111) NOT NULL,
  `image` longblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_work`
--

INSERT INTO `r_work` (`r_work_id`, `title`, `descr`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Web Designing', 'As a customer-focused organization, we are dedicated to helping businesses like yours achieve success by providing innovative solutions that meet your unique needs. With a testimonial of experts in various areas of technology, including software developme', '', 0x75706c6f6164732f5765622e706e67, '2023-04-29 06:20:50', '2023-05-25 17:46:27'),
(2, 'Graphics Design', 'As a customer-focused organization, we are dedicated to helping businesses like yours achieve success by providing innovative solutions that meet your unique needs. With a testimonial of experts in various areas of technology, including software developme', '', 0x75706c6f6164732f47726170686963732e706e67, '2023-04-29 06:50:11', '2023-05-25 17:46:58'),
(3, 'Content Writing', 'As a customer-focused organization, we are dedicated to helping businesses like yours achieve success by providing innovative solutions that meet your unique needs. With a testimonial of experts in various areas of technology, including software developme', '', 0x75706c6f6164732f636f6e74656e742e706e67, '2023-04-30 06:43:40', '2023-05-25 17:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `header` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(110) NOT NULL,
  `descr` varchar(1111) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `header`, `icon`, `link`, `descr`, `created_at`, `updated_at`) VALUES
(1, 'Web Development ', 'icon fa fa-globe', '', '<p>Efficient web development services tailored to your needs, delivering innovative and user-friendly websites. Let us bring your online vision to life.<br></p>', '2023-04-29 05:21:45', '2023-05-25 17:36:46'),
(3, 'Graphics Designibg', 'icon fa fa-globe', '', '<p>Elevate your brand with stunning graphics that captivate, communicate, and leave a lasting impression. Let our expertise in graphic design bring your vision to life.</p>', '2023-04-29 05:22:05', '2023-05-25 17:38:09'),
(7, 'Content Writing', 'icon fa fa-globe', '', 'Engage your audience with compelling content that captivates, informs, and inspires. Elevate your brand\'s message with our expert content writing services.', '2023-05-25 17:42:53', '2023-05-25 17:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `desi` varchar(55) NOT NULL,
  `fb` varchar(55) NOT NULL,
  `tw` varchar(55) NOT NULL,
  `insta` varchar(55) NOT NULL,
  `linkedin` varchar(55) NOT NULL,
  `image` longblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `name`, `desi`, `fb`, `tw`, `insta`, `linkedin`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Om Prakash Kumar', 'CEO', 'https://www.facebook.com/profile.php?id=100027011629772', 'https://twitter.com/om_prakash_kr_', 'https://www.instagram.com/om_ji_16/', 'https://www.linkedin.com/in/om-ji/', 0x75706c6f6164732f6f6d702e706e67, '2023-04-29 07:54:45', '2023-05-25 18:28:24'),
(3, 'Abhishek Raj', 'Manager', '', '', '', '', 0x75706c6f6164732f616268692e706e67, '2023-04-29 07:59:44', '2023-05-25 18:06:33'),
(4, 'Priyam', 'Managing Director', '', '', '', '', 0x75706c6f6164732f6e696b6974412e6a7067, '2023-05-25 18:09:23', '2023-05-25 18:26:45'),
(5, 'Nikita', 'HR', '', '', '', '', 0x75706c6f6164732f50524959414d2e6a7067, '2023-05-25 18:11:05', '2023-05-25 18:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desi` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `name`, `desi`, `fb`, `tw`, `insta`, `linkedin`, `message`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Om', 'Developer  ', 'https://www.facebook.com/profile.php?id=100027011629772', 'https://www.facebook.com/profile.php?id=100027011629772', 'https://www.facebook.com/profile.php?id=100027011629772', 'https://www.facebook.com/profile.php?id=100027011629772', 'A developer is a professional who specializes in designing and creating software applications, websi', 0x75706c6f6164732f7072616b73682e6a7067, '2023-04-29 10:22:03', '2023-05-25 19:59:24'),
(3, 'Abhishek ', 'Designer', 'https://www.facebook.com/profile.php?id=100027011629772', 'https://www.facebook.com/profile.php?id=100027011629772', 'https://www.facebook.com/profile.php?id=100027011629772', 'https://www.facebook.com/profile.php?id=100027011629772', '<p>A designer is a creative professional who combines artistic skills and technical knowledge to cre', 0x75706c6f6164732f616268692e706e67, '2023-04-29 10:23:18', '2023-05-25 20:01:00'),
(4, 'Priyam', 'Manger', '', '', '', '', '<p>A manager plays a crucial role in overseeing operations, guiding and motivating employees, making', 0x75706c6f6164732f6e696b6974412e6a7067, '2023-05-25 20:02:11', '2023-05-25 20:02:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `choose_service`
--
ALTER TABLE `choose_service`
  ADD PRIMARY KEY (`choose_service_id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`contact_details_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`contact_form_id`);

--
-- Indexes for table `counter_project`
--
ALTER TABLE `counter_project`
  ADD PRIMARY KEY (`counter_id`);

--
-- Indexes for table `home_page`
--
ALTER TABLE `home_page`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `r_work`
--
ALTER TABLE `r_work`
  ADD PRIMARY KEY (`r_work_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `choose_service`
--
ALTER TABLE `choose_service`
  MODIFY `choose_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `contact_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `contact_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `counter_project`
--
ALTER TABLE `counter_project`
  MODIFY `counter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_page`
--
ALTER TABLE `home_page`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `r_work`
--
ALTER TABLE `r_work`
  MODIFY `r_work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
