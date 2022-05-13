-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 09:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ads` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`id`, `link`, `ads`, `type`, `created_at`, `updated_at`) VALUES
(5, 'https://www.youtube.com/', 'image/ads/627638b1195d1.jpg', 0, NULL, NULL),
(6, 'https://www.youtube.com/', 'image/ads/627646b543a93.jpg', 1, NULL, NULL),
(7, 'https://www.youtube.com/', 'image/ads/62763e994d9b1.jpg', 1, NULL, NULL),
(8, 'https://www.youtube.com/', 'image/ads/62763ec4b5f89.jpg', 0, NULL, NULL),
(9, 'https://www.youtube.com/', 'image/ads/62763eff14125.jpg', 1, NULL, NULL),
(10, 'https://www.youtube.com/', 'image/ads/62763f0df053d.jfif', 0, NULL, NULL),
(11, 'https://www.youtube.com/', 'image/ads/62764741c6f0b.jpg', 1, NULL, NULL),
(12, 'https://www.youtube.com/', 'image/ads/6276474ccb367.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_bang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_eng`, `category_bang`, `soft_delete`, `created_at`, `updated_at`) VALUES
(8, 'NATIONAL', 'জাতীয়', '0', NULL, NULL),
(9, 'POLITICS', 'রাজনীতি', '0', NULL, NULL),
(10, 'GAME', 'খেলা', '0', NULL, NULL),
(11, 'INTERNATIONAL', 'আন্তর্জাতিক', '0', NULL, NULL),
(12, 'ENTERTAINMENT', 'বিনোদন', '0', NULL, NULL),
(13, 'EDUCATIUON', 'শিক্ষা', '0', NULL, NULL),
(14, 'LIFESTYLE', 'লাইফ স্টাইল', '0', NULL, NULL),
(15, 'ECONOMY', 'অর্থনীতি', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districs`
--

CREATE TABLE `districs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_bang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districs`
--

INSERT INTO `districs` (`id`, `district_eng`, `district_bang`, `created_at`, `updated_at`) VALUES
(3, 'Jhalokati', 'ঝালকাঠি', NULL, NULL),
(4, 'Bhola', 'ভোলা', NULL, NULL),
(6, 'Barisal', 'বরিশাল', NULL, NULL),
(7, 'Barguna', 'বরগুনা', NULL, NULL),
(8, 'Patuakhali', 'পটুয়াখালী', NULL, NULL),
(9, 'Pirojpur', 'পিরোজপুর', NULL, NULL),
(10, 'Bandarban', 'বান্দরবান', NULL, NULL),
(11, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', NULL, NULL),
(12, 'Chandpur', 'চাঁদপুর', NULL, NULL),
(13, 'Chittagong', 'চট্টগ্রাম', NULL, NULL),
(14, 'Comilla', 'কুমিল্লা', NULL, NULL),
(15, 'Cox\'s Bazar', 'কক্সবাজার', NULL, NULL),
(16, 'Feni', 'ফেনী', NULL, NULL),
(17, 'Khagrachhari', 'খাগড়াছড়ি', NULL, NULL),
(18, 'Lakshmipur', 'লক্ষ্মীপুর', NULL, NULL),
(19, 'Noakhali', 'নোয়াখালী', NULL, NULL),
(20, 'Rangamati', 'রাঙ্গামাটি', NULL, NULL),
(21, 'Dhaka', 'ঢাকা', NULL, NULL),
(22, 'Faridpur', 'ফরিদপুর', NULL, NULL),
(23, 'Gazipur', 'গাজীপুর', NULL, NULL),
(24, 'Gopalganj', 'গোপালগঞ্জ', NULL, NULL),
(25, 'Kishoreganj', 'কিশোরগঞ্জ', NULL, NULL),
(26, 'Madaripur', 'মাদারীপুর', NULL, NULL),
(27, 'Manikganj', 'মানিকগঞ্জ', NULL, NULL),
(28, 'Munshiganj', 'মুন্সীগঞ্জ', NULL, NULL),
(29, 'Narayanganj', 'নারায়ণগঞ্জ', NULL, NULL),
(30, 'Narsingdi', 'নরসিংদী', NULL, NULL),
(31, 'Rajbari', 'রাজবাড়ী', NULL, NULL),
(32, 'Shariatpur', 'শরীয়তপুর', NULL, NULL),
(33, 'Tangail', 'টাঙ্গাইল', NULL, NULL),
(34, 'Bagerhat', 'বাগেরহাট', NULL, NULL),
(35, 'Chuadanga', 'চুয়াডাঙ্গা', NULL, NULL),
(36, 'Jessore', 'যশোর', NULL, NULL),
(37, 'Jhenaidah', 'ঝিনাইদহ', NULL, NULL),
(38, 'Khulna', 'খুলনা', NULL, NULL),
(39, 'Kushtia', 'কুষ্টিয়া', NULL, NULL),
(40, 'Magura', 'মাগুরা', NULL, NULL),
(41, 'Meherpur', 'মেহেরপুর', NULL, NULL),
(42, 'Narail', 'নড়াইল', NULL, NULL),
(43, 'Satkhira', 'সাতক্ষীরা', NULL, NULL),
(44, 'Jamalpur', 'জামালপুর', NULL, NULL),
(45, 'Mymensingh', 'ময়মনসিংহ', NULL, NULL),
(46, 'Netrokona', 'নেত্রকোণা', NULL, NULL),
(47, 'Sherpur', 'শেরপুর', NULL, NULL),
(48, 'Bogra', 'বগুড়া', NULL, NULL),
(49, 'Joypurhat', 'জয়পুরহাট', NULL, NULL),
(50, 'Naogaon', 'নওগাঁ', NULL, NULL),
(51, 'Natore', 'নাটোর', NULL, NULL),
(52, 'Chapai Nawabganj', 'চাঁপাইনবাবগঞ্জ', NULL, NULL),
(53, 'Pabna', 'পাবনা', NULL, NULL),
(54, 'Rajshahi', 'রাজশাহী', NULL, NULL),
(55, 'Sirajganj', 'সিরাজগঞ্জ', NULL, NULL),
(56, 'Dinajpur', 'দিনাজপুর', NULL, NULL),
(57, 'Gaibandha', 'গাইবান্ধা', NULL, NULL),
(58, 'Kurigram', 'কুড়িগ্রাম', NULL, NULL),
(59, 'Lalmonirhat', 'লালমনিরহাট', NULL, NULL),
(60, 'Nilphamari', 'নীলফামারী', NULL, NULL),
(61, 'Panchagarh', 'পঞ্চগড়', NULL, NULL),
(62, 'Rangpur', 'রংপুর', NULL, NULL),
(63, 'Thakurgaon', 'ঠাকুরগাঁও', NULL, NULL),
(64, 'Habiganj', 'হবিগঞ্জ', NULL, NULL),
(65, 'Moulvibazar', 'মৌলভীবাজার', NULL, NULL),
(66, 'Sunamganj', 'সুনামগঞ্জ', NULL, NULL),
(67, 'Sylhet', 'সিলেট', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `livetvs`
--

CREATE TABLE `livetvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `embed_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livetvs`
--

INSERT INTO `livetvs` (`id`, `embed_code`, `status`, `created_at`, `updated_at`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/coyXJ0Zs5x0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '1', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_04_28_105236_create_sessions_table', 1),
(7, '2022_04_28_173347_create_category_table', 1),
(8, '2022_04_28_173526_create_subcategory_table', 1),
(9, '2022_04_30_044756_create_districs_table', 2),
(10, '2022_04_30_045041_create_subdistricts_table', 2),
(11, '2022_04_30_142453_create_posts_table', 3),
(12, '2022_05_02_115607_create_socials_table', 4),
(13, '2022_05_02_121350_create_socials_table', 5),
(14, '2022_05_02_133308_create_seos_table', 6),
(15, '2022_05_02_143203_create_prayers_table', 7),
(16, '2022_05_02_174239_create_livetvs_table', 8),
(17, '2022_05_03_062519_create_notices_table', 9),
(18, '2022_05_03_065310_create_websites_table', 10),
(19, '2022_05_03_171545_create_photos_table', 11),
(20, '2022_05_03_181357_create_photos_table', 12),
(21, '2022_05_03_182101_create_photos_table', 13),
(22, '2022_05_04_061538_create_videos_table', 14),
(23, '2022_05_06_181136_create_adds_table', 15),
(24, '2022_05_09_083638_create_websitesettings_table', 16),
(25, '2022_05_09_084225_create_websitesettings_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>Today holiday</p>', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo_title`, `photo`, `type`, `created_at`, `updated_at`) VALUES
(2, 'Crowds overflow at Naogaon tourist center', 'image/photogallery/627413a67c8a9.jpg', '0', NULL, NULL),
(3, 'Jackfruit ceremony in the village. Picture taken from Kiraton village of Karimganj upazila of Kishoreganj district', 'image/photogallery/6274136b9477e.jpg', '1', NULL, NULL),
(5, 'The sidewalk is like a golden egg', 'image/photogallery/627413c14bcc6.jpg', '0', NULL, NULL),
(6, 'Ivanka Trump and Jared Kushner.', 'image/photogallery/627414b94d2be.jpg', '0', NULL, NULL),
(7, 'Taskin is going to England', 'image/photogallery/627414f0eaee9.jpg', '0', NULL, NULL),
(8, 'Delhi is playing without Mostafiz', 'image/photogallery/6274153113d89.jpg', '0', NULL, NULL),
(9, 'Ronaldo is the best goal scorer of April', 'image/photogallery/6274156380e8a.jpg', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `district_id` int(11) NOT NULL,
  `subdistrict_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `title_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_bang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags_bang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` int(11) DEFAULT NULL,
  `first_section` int(11) DEFAULT NULL,
  `first_section_thumnail` int(11) DEFAULT NULL,
  `bigthumnail` int(11) DEFAULT NULL,
  `post_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `subcategory_id`, `district_id`, `subdistrict_id`, `user_id`, `title_eng`, `title_bang`, `image`, `details_eng`, `details_bang`, `tags_eng`, `tags_bang`, `headline`, `first_section`, `first_section_thumnail`, `bigthumnail`, `post_date`, `post_month`, `created_at`, `updated_at`) VALUES
(11, 8, 15, 21, 10, 1, 'The Prime Minister called upon the people to enjoy Eid in accordance with the rules of health', 'স্বাস্থ্যবিধি মেনে ঈদের আনন্দ উপভোগের আহ্বান প্রধানমন্ত্রীর', 'image/postimg/62739e99d85ca.jpg', '<p>On the occasion of Eid-ul-Fitr, the main religious festival of Muslims, Prime Minister Sheikh Hasina conveyed her sincere greetings to all Muslims of the country and the world and wished them a happy Eid.</p><p><br></p><p>The Prime Minister said Eid teaches a unique lesson of peace, compassion and brotherhood. Forgetting violence, hatred and violence, people are bound in the bond of equality, friendship and recent. Eid brings a message of happiness in the lives of all, rich and poor alike. The joy of Eid is for all of us.</p>', '<p>মুসলমানদের প্রধান ধর্মীয় উৎসব ঈদুল ফিতর উপলক্ষে দেশবাসী ও বিশ্বের সকল মুসলমানকে আন্তরিক শুভেচ্ছা ও ঈদ মোবারক জানিয়ে দেওয়া এক বাণীতে স্বাস্থ্যবিধি মেনে ঈদের আনন্দ উপভোগের আহ্বান জানিয়েছেন প্রধানমন্ত্রী শেখ হাসিনা।&nbsp;</p><p>প্রধানমন্ত্রী বলেন, ঈদ শান্তি, সহমর্মিতা ও ভ্রাতৃত্ববোধের অনুপম শিক্ষা দেয়। হিংসা-বিদ্বেষ ও হানাহানি ভুলে মানুষ সাম্য, মৈত্রী ও সম্প্রতীর বন্ধনে আবদ্ধ হয়।ঈদ ধনী-গরিব নির্বিশেষে সকলের জীবনে আনন্দের বার্তা নিয়ে আসে। ঈদের আনন্দ আমাদের সবার।&nbsp;</p>', 'source', 'উৎস', 1, NULL, 1, 1, '05-05-2022', 'May', NULL, NULL),
(12, 8, 19, 21, 9, 1, 'The price of 12 kg LPG lotus is 104 rupees', '১২ কেজি এলপিজির দাম কমল ১০৪ টাকা', 'image/postimg/6273a0e4e7328.jpg', '<p>The Bangladesh Energy Regulatory Commission (BERC) has reduced the price of liquefied petroleum gas (LPG). In the private sector, the maximum retail price of 12 kg LPG cylinders including VAT has been reduced from Tk 1,439 to Tk 1,035 and set at Tk 1,335. The new price will be effective from 6 pm on Thursday.</p><p>The BERC said in a statement on Thursday.</p><p>In April, the price of 5 kg LGP including VAT at the consumer level was Rs 80, which was reduced to Rs 612 in May.</p>', '<p>তরলীকৃত পেট্রোলিয়াম গ্যাসের (এলপিজি) দাম কমিয়েছে বাংলাদেশ এনার্জি রেগুলেটরি কমিশন (বিইআরসি)। বেসরকারি খাতে ১২ কেজির এলপিজি সিলিন্ডার মূসকসহ সর্বোচ্চ খুচরা মূল্য ১ হাজার ৪৩৯ টাকা থেকে ১০৪ টাকা কমিয়ে ১ হাজার ৩৩৫ টাকা নির্ধারণ করা হয়েছে।&nbsp; বৃহস্পতিবার সন্ধ্যা ৬টা থেকে নতুন এ দাম কার্যকর হবে।&nbsp;</p><p>বৃহস্পতিবার বিইআরসি এক বিজ্ঞপ্তিতে এ তথ্য জানায়।&nbsp;</p><p>বিজ্ঞপ্তিতে বলা হয়, এপ্রিলে ভোক্তপর্যায়ে মূসকসহ সাড়ে ৫ কেজির এলজিপির দাম ছিল ৬৬০ টাকা, যা মে মাসে কমে ৬১২ টাকা করা হয়েছে।</p>', 'source', 'উৎস', NULL, NULL, NULL, 1, '05-05-2022', 'May', NULL, NULL),
(13, 8, 15, 21, 3, 1, 'Let\'s not bring danger while enjoying: President', 'আনন্দ করতে গিয়ে যেন আমরা বিপদ ডেকে না আনি: রাষ্ট্রপতি', 'image/postimg/6273a18308743.jpg', '<p>After the coronavirus epidemic situation returned to Eid, but to avoid the infection, everyone should be careful and rejoice, said the President. Abdul Hamid.</p><p>He gave this warning in a video message addressed to the people from Bangabhaban on Tuesday wishing Eid.</p><p>Abdul Hamid said that due to the Corona epidemic, no religious festival of any community including Eid could be celebrated and enjoyed in the expected joyous atmosphere in the last two years.</p>', '<p>করোনাভাইরাস মহামারির পরিস্থিতি কাটিয়ে ঈদ ফিরলেও সংক্রমণ এড়াতে সবাইকে সতর্ক থেকে আনন্দ করতে বলেছেন রাষ্ট্রপতি মো. আবদুল হামিদ।</p><p><br></p><p>ঈদের শুভেচ্ছা জানিয়ে মঙ্গলবার বঙ্গভবন থেকে দেশবাসীর উদ্দেশে এক ভিডিও বার্তায় এই সতর্কবার্তা দেন তিনি।</p><p>আবদুল হামিদ বলেন, করোনা মাহামারির কারণে বিগত দুই বছর ঈদসহ কোনো সম্প্রদায়ের কোনো ধর্মীয় উৎসবই প্রত্যাশিত আনন্দঘন পরিবেশে উদযাপন ও উপভোগ করা যায়নি।</p>', 'source', 'উৎস', NULL, 1, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(14, 8, 11, 21, 3, 1, 'Detectives are looking for others', 'রিমান্ডে পাওয়া তথ্যে অন্যদের খুঁজছে গোয়েন্দারা', 'image/postimg/6273a2324d16d.jpg', '<p>Five students arrested in connection with the murder of Nahid Hossain in a clash between Dhaka College students and shopkeepers in New Market have been remanded in DB custody. According to the information obtained from their interrogation, the Dhaka Metropolitan Detective Police (DB) is working to arrest the others involved.</p><p>In addition to analyzing the video footage, the beginning of the incident is being known from the arrestees. He asserted that his confession had been obtained through torture.</p>', '<p>নিউমার্কেটের দোকানকর্মীদের সঙ্গে ঢাকা কলেজের শিক্ষার্থীদের সংঘর্ষে নাহিদ হোসেনকে হত্যায় জড়িত অভিযোগে গ্রেফতার পাঁচ ছাত্র ডিবি হেফাজতে রিমান্ডে রয়েছেন। তাদের জিজ্ঞাসাবাদ করে পাওয়া তথ্য অনুযায়ী জড়িত অন্যদের গ্রেফতারে কাজ করছে ঢাকা মহানগর গোয়েন্দা পুলিশ (ডিবি)।</p><p><br></p><p>ভিডিও ফুটেজ বিশ্লেষণের পাশাপাশি সেদিনের ঘটনার আদ্যপ্রান্ত জানা হচ্ছে গ্রেফতারদের কাছ থেকে। তারা হত্যার উদ্দেশ্যে হামলা করেননি বলে জিজ্ঞাসাবাদে জানিয়েছেন।&nbsp;</p>', NULL, NULL, NULL, 1, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(15, 9, 26, 67, 17, 1, 'After 33 months, he went to his area and said what Obaidul Quader said', '৩৩ মাস পর নিজ এলাকায় গিয়ে যা বললেন ওবায়দুল কাদের', 'image/postimg/6273a34b0752e.jpg', '<p>Awami League General Secretary Road Transport and Bridges Minister Obaidul Quader said people laugh when they hear about the BNP movement. In the last 13 years, BNP has called for movement 26 times. Couldn\'t in 13 years, which year? Everyone\'s question about their movement - this year or that year the movement will be a year!</p><p>He said this while exchanging Eid greetings at his home in Kompaniganj Upazila, constituency of Obaidul Quader on Thursday afternoon.</p>', '<p>আওয়ামী লীগের সাধারণ সম্পাদক সড়ক পরিবহণ ও সেতুমন্ত্রী ওবায়দুল কাদের বলেন, বিএনপির আন্দোলনের কথা শুনে মানুষ হাসে। গত ১৩ বছরে বিএনপি ২৬ বার আন্দোলনের ডাক দিয়েছে। ১৩ বছরে পারলা না, কোন বছর পারবে? তাদের আন্দোলনের বিষয়ে সবারই প্রশ্ন- এই বছর না ওই বছর আন্দোলন হবে কোন বছর!</p><p>বৃহস্পতিবার দুপুরে ওবায়দুল কাদের এর নির্বাচনি এলাকা কোম্পানীগঞ্জ উপজেলায় নিজ বাড়িতে ঈদের শুভেচ্ছা বিনিময়ের সময় এসব কথা বলেন।</p>', 'source', 'উৎস', NULL, NULL, NULL, 1, '05-05-2022', 'May', NULL, NULL),
(16, 9, 27, 67, 18, 1, '\'Two laws in force in the country\'', '\'দেশে চলছে দুই আইন\'', 'image/postimg/6273a3bede329.jpg', '<p>BNP senior joint secretary general Ruhul Kabir Rizvi has alleged that two laws are in force in the country. He said two laws are in force in the country. The Prime Minister has turned a blind eye to law and justice. Judicial decision is being taken with vengeance and revelation of Ganobhaban for BNP and opposition parties and people of opinion.</p><p><br></p><p>Rizvi made the remarks at a press conference at the party\'s central office in Naya Paltan in the capital on Wednesday.</p>', '<p>দেশে দুই আইন চলছে বলে অভিযোগ করেছেন বিএনপির সিনিয়র যুগ্ম মহাসচিব রুহুল কবির রিজভী। তিনি বলেছেন, দেশে চলছে দুই আইন। আইন ও বিচারের চোখ কানা করে দিয়েছেন প্রধানমন্ত্রী। বিএনপি এবং বিরোধী দল ও মতের মানুষের জন্য প্রতিহিংসামূলক ও গণভবনের ওহি দিয়ে চলছে বিচারিক সিদ্ধান্ত।</p><p><br></p><p>রিজভী বুধবার রাজধানীর নয়াপল্টনে দলের কেন্দ্রীয় কার্যালয়ে এক সংবাদ সম্মেলনে এসব কথা বলেন।</p>', 'source', 'উৎস', NULL, 1, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(17, 9, 26, 67, 20, 1, 'Haji Selim obeyed the law and left the country: Home Minister', 'হাজি সেলিম আইন মেনেই দেশের বাইরে গিয়েছিলেন: স্বরাষ্ট্রমন্ত্রী', 'image/postimg/6273a46a75379.jpg', '<p>Home Minister Asaduzzaman Khan has said that Awami League MP Haji Selim, who was sentenced to 10 years in a corruption case, left the country in compliance with the law.</p><p><br></p><p>He said Haji Selim went to the bank for emergency treatment. Is back again. Legally as far as the question is concerned, he is a Member of Parliament, he is respectful of the law. He left with the law in mind. He has obeyed the law, he has obeyed the law again.</p>', '<p>দুর্নীতি মামলায় ১০ বছরের দণ্ডপ্রাপ্ত আওয়ামী লীগ সংসদ সদস্য হাজি সেলিম আইন মেনেই দেশের বাইরে গিয়েছিলেন বলে মন্তব্য করেছেন স্বরাষ্ট্রমন্ত্রী আসাদুজ্জামান খান।&nbsp;</p><p><br></p><p>তিনি বলেন, হাজি সেলিম জরুরি চিকিৎসার জন্য ব্যাংককে গিয়েছিলেন। আবার ফেরত চলে এসেছেন। আইনগতভাবে যেটুকু প্রশ্ন আসে, তিনি একজন সংসদ সদস্য, তিনি আইনের প্রতি শ্রদ্ধাশীল। আইনকে মাথায় রেখেই তিনি গিয়েছেন। তিনি আইন মেনেই গিয়েছেন, আইন মেনেই আবার চলে এসেছেন।</p>', 'source', 'উৎস', NULL, 1, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(18, 10, 13, 62, 12, 1, 'Bangladesh team got good news during Eid holidays', 'ঈদের ছুটির মধ্যে সুখবর পেল বাংলাদেশ দল', 'image/postimg/6273a4fd2e024.jpg', '<p>Bangladesh team got good news during Eid holiday.</p><p><br></p><p>Mahmudullah Riyadh\'s team has risen one step in the T20 rankings.</p><p>Bangladesh has risen from ninth to eighth place in the weekly rankings published by the ICC on Wednesday.</p><p>Like Bangladesh, good news has come to the Sri Lankan camp as well. The Lankans have improved one step. The island nation has risen from tenth to ninth place.</p><p><br></p><p>India is at the top of the rankings in this edition.</p>', '<p>ঈদের ছুটির আমেজে সুখবর পেল বাংলাদেশ দল।&nbsp;</p><p>টি-টোয়েন্টি র‌্যাংকিংয়ে এক ধাপ ওপরে উঠল মাহমুউল্লাহ রিয়াদের দল।&nbsp;</p><p>বুধবার আইসিসি প্রকাশিত সাপ্তাহিক র‌্যাংকিংয়ে নবম স্থান থেকে অষ্টম স্থানে উঠে এসেছে বাংলাদেশ।&nbsp;</p><p><br></p><p>বাংলাদেশের মতো সুখবর এসেছে শ্রীলংকা শিবিরেও। এক ধাপ উন্নতি ঘটেছে লংকানদের। দশম স্থান থেকে নবম স্থানে উঠে এসেছে দ্বীপরাষ্ট্রের দেশ।&nbsp;</p><p><br></p><p>এ সংস্করণে র‌্যাংকিংয়ে শীর্ষেই রয়েছে ভারত।&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, 1, '05-05-2022', 'May', NULL, NULL),
(19, 10, 30, 62, 12, 1, 'Mbappe is in the year, not Messi Neymar', 'বর্ষসেরায় আছেন এমবাপ্পে, নেই মেসি নেইমার', 'image/postimg/6273aea6a6543.jpg', '<p>Messi-Neymar fans will be disappointed to see the shortlist of awards for the best player of the year in French League One.</p><p><br></p><p><br></p><p>Although PSG star French forward Killian Mbappe was named in it, there are no two best stars of Brazil and Argentina.</p><p><br></p><p>Lionel Messi and Neymar Jr. did not find a place in this list considering their performance this season.</p>', '<p>ফ্রেঞ্চ লিগ ওয়ানের বর্ষসেরা খেলোয়াড়ের পুরস্কার সংক্ষিপ্ত&nbsp; তালিকা দেখে হতাশ হবেন মেসি-নেইমারের ভক্তরা।&nbsp;</p><p><br></p><p><br></p><p>তাতে পিএসজি তারকা ফরাসি ফরোয়ার্ড কিলিয়ান এমবাপ্পের নাম উঠলেও নেই ব্রাজিল ও আর্জেন্টিনার সময়ের দুই সেরা তারকা।</p><p><br></p><p>চলতি মৌসুমের পারফরম্যান্স বিবেচনায় লিওনেল মেসি ও নেইমার জুনিয়র জায়গা পাননি এ তালিকায়।</p>', 'source', 'উৎস', NULL, 1, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(20, 10, 13, 62, 13, 1, 'The record that England set after 28 years', '২৭ বছর পর যে ‘রেকর্ড’ গড়ল ইংল্যান্ড', 'image/postimg/6273b0d343d19.jpg', '<p>England have dropped to a 28-year low in the International Cricket Council\'s Test rankings.</p><p><br></p><p><br></p><p>After the recent Ashes series loss under the captaincy of the former Joe Root, the English also lost the Test series in the West Indies tour.</p><p><br></p><p>That\'s why England dropped to sixth place in the latest ICC Test rankings. After 26 years, the English dropped so low in the rankings. Before their rating point 6, England was in such a bad position in 1995.</p>', '<p>আন্তর্জাতিক ক্রিকেট কাউন্সিলের টেস্ট র‌্যাঙ্কিংয়ে ২৭ বছরের সর্বনিম্ন রেটিং পয়েন্টে নেমে গেছে ইংল্যান্ড ক্রিকেট দল।&nbsp;</p><p><br></p><p><br></p><p>সদ্য সাবেক হওয়া জো রুটের অধিনায়কত্বে সবশেষ অ্যাশেজ সিরিজ হারের পর ওয়েস্ট ইন্ডিজ সফরেও টেস্ট সিরিজ হারে ইংলিশরা।&nbsp;&nbsp;</p><p><br></p><p>যে কারণে আইসিসির সবশেষ টেস্ট র‌্যাঙ্কিংয়ে ষষ্ঠ স্থানে নেমে গেছে ইংল্যান্ড। ২৭ বছর পর র‌্যাংকিংয়ে এতটা নিচে নামল ইংলিশরা। তাদের রেটিং পয়েন্ট ৮৮ এর আগে ১৯৯৫ সালে এমন খারাপ পজিশনে ছিল ইংল্যান্ড।</p>', 'source', 'উৎস', NULL, 1, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(21, 11, 22, 13, 14, 1, 'The West is preventing the operation in Ukraine from ending \'quickly\': Russia', 'ইউক্রেনে অভিযান ‘দ্রুত শেষ’ হতে বাধা দিচ্ছে পশ্চিমারা: রাশিয়া', 'image/postimg/6273b719c3730.jpg', '<p>The New York Times reported on Wednesday that Ukraine had assassinated several Russian generals with the help of intelligence provided by US intelligence.</p><p><br></p><p><br></p><p>Russia\'s spokesman Dmitry Peskov was asked about the New York Times\' claim.</p><p><br></p><p>Peskov said Russia knew that the United States, the United Kingdom and NATO were providing intelligence to Ukraine.</p>', '<p>যুক্তরাষ্ট্রের গণমাধ্যম নিউইয়র্ক টাইমস বুধবার তাদের একটি প্রতিবেদনে জানিয়েছে, যুক্তরাষ্ট্রের গোয়েন্দাদের দেওয়া গোয়েন্দা তথ্যের সহায়তা নিয়ে কয়েকজন রুশ জেনারেলকে হত্যা করেছে ইউক্রেন।&nbsp;</p><p><br></p><p><br></p><p>নিউইয়র্ক টাইমসের এ দাবির বিষয়ে জিজ্ঞেস করা হয় রাশিয়ার মুখপাত্র দিমিত্রি পেসকোভের কাছে।&nbsp;</p><p><br></p><p>পেসকোভ জানান, যুক্তরাষ্ট্র, যুক্তরাজ্য এবং ন্যাটো যে ইউক্রেনকে গোয়েন্দা তথ্য দিচ্ছে এটি রাশিয়া জানে।&nbsp;</p>', 'source', 'উৎস', NULL, NULL, NULL, 1, '05-05-2022', 'May', NULL, NULL),
(22, 11, 24, 18, 18, 1, 'Everyone on the Sri Lankan Cricket Board is a thief: Ranatunga', 'শ্রীলংকান ক্রিকেট বোর্ডের সবাই চোর: রানাতুঙ্গা', 'image/postimg/6273ba78978f9.jpg', '<p>Former Sri Lanka World Cup-winning captain Arjuna Ranatunga has said that all the thieves in Sri Lanka have taken over the cricket board posts.</p><p><br></p><p><br></p><p>The former captain, who won the World Cup in 1998, said that when the time comes for the election of the cricket board, there will be 143-144 voters. The whole thing revolves around money transactions. Those who have been playing cricket since 2015 have done everything randomly. At the moment we need a good sports minister who can work on issues.</p>', '<p>শ্রীলংকার বিশ্বকাপজয়ী সাবেক অধিনায়ক অর্জুনা রানাতুঙ্গা বলেছেন, শ্রীলংকায় সব চোরেরা ক্রিকেট বোর্ডের পদগুলো দখল করে নিয়েছে।&nbsp;</p><p><br></p><p><br></p><p>১৯৯৬ সালের বিশ্বকাপজয়ী সাবেক এই অধিনায়ক বলেছেন, ক্রিকেট বোর্ডের নির্বাচনের সময় এলে দেখবেন ১৪৩-১৪৪ জন ভোটার। পুরো ব্যাপারটাই অর্থের লেনদেনের ওপর চলে। ২০১৫ সালের পর যারা ক্রিকেট চালাচ্ছে, তারা সব এলোমেলো করে ফেলেছে। এ মুহূর্তে আমাদের একজন ভালো ক্রীড়ামন্ত্রী দরকার, যিনি বিষয়গুলো নিয়ে কাজ করতে পারবেন।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(23, 11, NULL, 18, 12, 1, 'Everyone on the Sri Lankan Cricket Board is a thief: Ranatunga', 'শ্রীলংকান ক্রিকেট বোর্ডের সবাই চোর: রানাতুঙ্গা', 'image/postimg/6273bad94c191.jpg', '<p>Former Sri Lanka World Cup-winning captain Arjuna Ranatunga has said that all the thieves in Sri Lanka have taken over the cricket board posts.</p><p><br></p><p><br></p><p>The former captain, who won the World Cup in 1998, said that when the time comes for the election of the cricket board, there will be 143-144 voters. The whole thing revolves around money transactions. Those who have been playing cricket since 2015 have done everything randomly. At the moment we need a good sports minister who can work on issues.</p>', '<p>শ্রীলংকার বিশ্বকাপজয়ী সাবেক অধিনায়ক অর্জুনা রানাতুঙ্গা বলেছেন, শ্রীলংকায় সব চোরেরা ক্রিকেট বোর্ডের পদগুলো দখল করে নিয়েছে।&nbsp;</p><p><br></p><p><br></p><p>১৯৯৬ সালের বিশ্বকাপজয়ী সাবেক এই অধিনায়ক বলেছেন, ক্রিকেট বোর্ডের নির্বাচনের সময় এলে দেখবেন ১৪৩-১৪৪ জন ভোটার। পুরো ব্যাপারটাই অর্থের লেনদেনের ওপর চলে। ২০১৫ সালের পর যারা ক্রিকেট চালাচ্ছে, তারা সব এলোমেলো করে ফেলেছে। এ মুহূর্তে আমাদের একজন ভালো ক্রীড়ামন্ত্রী দরকার, যিনি বিষয়গুলো নিয়ে কাজ করতে পারবেন।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(24, 12, 34, 67, 18, 1, 'The way Raj fulfilled the expectations of his girlfriend on Eid', 'ঈদে যেভাবে পরীমনির আশা পূরণ করলেন রাজ', 'image/postimg/6273e200229aa.jpg', '<p>One of the most popular heroines of Dhaliwood movies, Parimani\'s life has taken a big storm. Boat club scandals, arrests in drug cases, imprisonment and marriages all happened in the same calendar year.</p><p><br></p><p><br></p><p>Parimani wants to settle down after marriage. She also has children. After a while, the child will light up his and Raj\'s house.</p><p><br></p><p>This is the first Eid of Raj Pari after marriage. On Eid-ul-Fitr, Parimani took a deposit to go for a walk. According to his wife\'s wishes, Raj went to Cox\'s Bazar with her.</p>', '<p>ঢালিউড সিনেমার অন্যতম জনপ্রিয় নায়িকা পরীমনির জীবনে বড় ঝড় বয়ে গেছে। বোট ক্লাব কাণ্ড, মাদক মামলায় গ্রেফতার, কারাগার ও বিয়ে সবকিছু একই পঞ্জিকা বর্ষে ঘটেছে।&nbsp;</p><p><br></p><p><br></p><p>বিয়ের পর কিছুটা থিতু হতে চাইছেন পরীমনি। সন্তানও নিয়েছেন। কিছুদিন পরই তার ও রাজের ঘর আলো করবে সন্তান।</p><p><br></p><p>বিয়ের পর রাজ পরীর এটাই প্রথম ঈদ। ঈদুল ফিতরে পরীমনি বায়না ধরেছিলেন ঘুরতে যাওয়ার। স্ত্রীর ইচ্ছে অনুযায়ী তাকে নিয়ে কক্সবাজার বেড়াতে গেছেন রাজ।</p>', 'source', 'উৎস', NULL, NULL, NULL, 1, '05-05-2022', 'May', NULL, NULL),
(25, 12, 35, 23, 12, 1, 'Alia\'s Jupiter peaks', 'আলিয়ার বৃহস্পতি তুঙ্গে', 'image/postimg/6273e26cc0589.jpg', '<p>2022 Salta is like Alia Bhatt. Gangubai Kathiawari has been released this year. The film has caused a stir at the box office. Her colleagues are full of praise for the heroine\'s performance in such a difficult character.</p><p><br></p><p><br></p><p>This Bollywood sensation has also entered a new chapter in personal life this year. Alia tied the knot with her longtime boyfriend Ranbir Kapoor in April. The much-discussed marriage in Beetown has not stopped.</p>', '<p>২০২২ সালটা যেন আলিয়া ভাটের। গাঙ্গুবাই কাথিয়াওয়াড়ি মুক্তি পেয়েছে এ বছর। ছবিটি বক্স অফিসে তোলপাড় সৃষ্টি করেছে। এমন কঠিন একটি চরিত্রে নায়িকার অভিনয়ের প্রশংসায় পঞ্চমুখ তার সহকর্মীরা।</p><p><br></p><p><br></p><p>এই বলিউড সেনসেশন ব্যক্তিগত জীবনেও নতুন অধ্যায়ে প্রবেশ করেছে চলতি বছর। এপ্রিলে দীর্ঘদিনের প্রেমিক রণবীর কাপুরের সঙ্গে সাতপাকে বাঁধা পড়েছেন আলিয়া। বহুল আলোচিত এই বিয়ে নিয়ে বিটাউনে আলোচনা এখনও থেমে যায়নি।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(26, 12, 36, 19, 6, 1, 'Another popular pair breakup in Tollywood!', 'টালিউডের আরেক জনপ্রিয় জুটির ব্রেকআপ!', 'image/postimg/6273e2dfe57e4.jpg', '<p>The game of breaking up is going on in Tollywood. Popular couple Bonnie Sengupta and Kaushani Mukherjee\'s love affair is an open secret. They did not hide their relationship.</p><p><br></p><p><br></p><p>Now it is heard that this couple is also moving towards separation.</p><p><br></p><p>Bani-Kaushani stopped talking for about a week. But not a day could go by without seeing each other. The buzzing sweet couple\'s journey together in Talipara is probably going to end here. Both have admitted to monomalinya.</p>', '<p>টালিউডে চলছে সম্পর্ক ভাঙা-গড়ার খেলা। জনপ্রিয় জুটি বনি সেনগুপ্ত ও কৌশানি মুখোপাধ্যায়ের প্রেমের বিষয়টি অনেকটাই ওপেন সিক্রেট। তারা নিজেদের সম্পর্ক নিয়ে লুকোচুরি করেননি।</p><p><br></p><p><br></p><p>এবার শোনা যাচ্ছে এই জুটিও বিচ্ছেদের দিকে এগোচ্ছে।</p><p><br></p><p>প্রায় এক সপ্তাহ ধরে নাকি কথা বন্ধ বনি-কৌশানির। অথচ একদিনও একে অন্যকে না দেখে থাকতে পারতেন না। টালিপাড়ায় গুঞ্জন মিষ্টি এই জুটির একসঙ্গে পথচলা সম্ভবত এখানেই শেষ হতে চলেছে। মনোমালিন্যের কথা দুজনেই স্বীকার করেছেন।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(27, 13, 42, 16, 18, 1, 'Dental admission test on April 22, 121 people against one seat', 'ডেন্টালে ভর্তি পরীক্ষা ২২ এপ্রিল, এক আসনের বিপরীতে ১২১ জন', 'image/postimg/6273e59ad50a3.jpg', '<p>Admission test in Government Dental College and Dental Unit for 2021-22 academic year will be held on 22nd April.</p><p><br></p><p><br></p><p>This year 121 students will take part in this admission battle for each seat. Last year, there were 98 students per seat.</p><p><br></p><p>Application for admission in 2021-22 academic year started on 20th March. This activity runs until 11:59 pm on March 30. Admission collection will start from 17th April and will continue till 19th April.</p>', '<p>সরকারি ডেন্টাল কলেজ ও ডেন্টাল ইউনিটে ২০২১-২২ শিক্ষাবর্ষে ভর্তি পরীক্ষা আগামী ২২ এপ্রিল অনুষ্ঠিত হবে।&nbsp;</p><p><br></p><p><br></p><p>এ বছর প্রতি আসনের বিপরীতে ১২১ জন শিক্ষার্থী এই ভর্তিযুদ্ধে অংশ নেবেন। গত বছর প্রতি আসনের বিপরীতে ছিলেন ৯৭ জন শিক্ষার্থী।&nbsp;</p><p><br></p><p>গত ২০ মার্চ ২০২১-২২ শিক্ষাবর্ষে ভর্তির আবেদন শুরু হয়। এই কার্যক্রম চলে ৩০ মার্চ রাত ১১টা ৫৯ মিনিট পর্যন্ত। আগামী ১৭ এপ্রিল থেকে প্রবেশপত্র সংগ্রহ শুরু হয়ে ১৯ এপ্রিল পর্যন্ত চলবে।</p>', 'source', 'উৎস', NULL, NULL, NULL, 1, '05-05-2022', 'May', NULL, NULL),
(28, 13, 42, 56, 11, 1, 'Publication of SSC exam routine, must follow 14 instructions', 'এসএসসি পরীক্ষার রুটিন প্রকাশ, মানতে হবে ১৪ নির্দেশনা', 'image/postimg/6273e5fec3c06.jpg', '<p>The Inter-Education Board Coordinating Committee has published the routine of SSC examination this year. It has been seen that this year\'s secondary examination will start on June 19 at 10 am with the examination of Bangla first paper. It will end on July 6. The practical test has been directed to be completed between 13th and 19th July.</p><p><br></p><p><br></p><p>This information was given in a press release sent from Dhaka Education Board on Wednesday.</p>', '<p>চলতি বছর এসএসসি পরীক্ষার রুটিন প্রকাশ করেছে আন্তঃশিক্ষা বোর্ড সমন্বয়ক কমিটি। এতে দেখা গেছে, আগামী ১৯ জুন সকাল ১০টায় বাংলা প্রথমপত্রের পরীক্ষার মধ্য দিয়ে শুরু হবে এবারের মাধ্যমিক পরীক্ষা।&nbsp; শেষ হবে ৬ জুলাই। আর ব্যবহারিক পরীক্ষা ১৩ থেকে ১৯ জুলাইয়ের মধ্যে শেষ করতে নির্দেশনা দেওয়া হয়েছে।</p><p><br></p><p><br></p><p>বুধবার ঢাকা শিক্ষা বোর্ড থেকে পাঠানো এক সংবাদ বিজ্ঞপ্তিতে এ তথ্য জানানো হয়।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(29, 13, 44, 16, 12, 1, 'The wait for medical admission is coming to an end at noon', 'মেডিকেলে ভর্তিচ্ছুদের প্রতীক্ষার অবসান ঘটছে দুপুরে', 'image/postimg/6273e6b039aa3.jpg', '<p>The results of the admission test for the first year of MBBS 2021-22 academic year in government and private medical colleges of the country will be released at 1 pm.</p><p><br></p><p><br></p><p>The results will be published in the conference room on the second floor of the old building of the health department at Mohakhali in the capital. It will be attended by Health and Family Welfare Minister Zahid Malek and top officials of the ministry and the health education department.</p>', '<p>এমবিবিএস ২০২১-২২ শিক্ষাবর্ষে দেশের সরকারি ও বেসরকারি মেডিকেল কলেজে প্রথম বর্ষে ভর্তি পরীক্ষার ফল দুপুর ১টায় প্রকাশ করা হবে।&nbsp;&nbsp;</p><p><br></p><p><br></p><p>রাজধানীর মহাখালীতে স্বাস্থ্য অধিদপ্তরের পুরাতন ভবনের দ্বিতীয় তলার সম্মেলনকক্ষে ফল প্রকাশনা অনুষ্ঠান হবে।&nbsp; এতে স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রী জাহিদ মালেকসহ মন্ত্রণালয় ও স্বাস্থ্য শিক্ষা অধিদপ্তরের শীর্ষ কর্মকর্তারা উপস্থিত থাকবেন।</p><p><br></p><p>সোমবার স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়ের জনসংযোগ কর্মকর্তা মাঈদুল ইসলাম প্রধান স্বাক্ষরিত এক চিঠিতে বিষয়টি জানানো হয়।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(34, 13, 43, 18, 10, 1, 'The short syllabus is the admission test of RU', 'সংক্ষিপ্ত সিলেবাসেই হচ্ছে রাবির ভর্তি পরীক্ষা', 'image/postimg/6273f0e970888.jpg', '<p>In the 2021-22 academic year of Rajshahi University, questions will be asked in the light of the short syllabus in the admission test of the 1st year of graduation. AHM Aslam Hossain, head of the academic branch of the university, confirmed the information on Sunday evening.</p><p><br></p><p><br></p><p>He said that in the light of the short syllabus in which this year\'s HSC examination has been held, the question of RBI admission test will be. Earlier, the matter was approved at a meeting of the admission committee on April 11.</p>', '<p>রাজশাহী বিশ্ববিদ্যালয়ের ২০২১-২২ শিক্ষাবর্ষে স্নাতক ১ম বর্ষের ভর্তি পরীক্ষায় সংক্ষিপ্ত সিলেবাসের আলোকেই প্রশ্ন করা হবে। রোববার সন্ধ্যায় বিশ্ববিদ্যালয়ের একাডেমিক শাখার প্রধান এএইচ এম আসলাম হোসাইন এ তথ্য নিশ্চিত করেন।</p><p><br></p><p><br></p><p>তিনি বলেন, এবারের এইচএসসি পরীক্ষা যে সংক্ষিপ্ত সিলেবাসে অনুষ্ঠিত হয়েছে সেই সিলেবাসের আলোকে রাবির ভর্তি পরীক্ষার প্রশ্ন হবে। এর আগে ১১ এপ্রিল ভর্তি পরীক্ষা সংক্রান্ত ভর্তি কমিটির সভায় উক্ত বিষয়টি অনুমোদন হয়েছে।&nbsp;</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(35, 13, 44, 16, 10, 1, 'বুয়েটে ভর্তি পরীক্ষার আবেদন শুরু', 'বুয়েটে ভর্তি পরীক্ষার আবেদন শুরু', 'image/postimg/6273f14806ac4.jpg', '<p>Bangladesh University of Engineering (BUET) 2021-22 academic year undergraduate class admission test application has started.</p><p><br></p><p><br></p><p>The initial application for BUET graduate admission has started online from 10 am on April 17. It will continue till 3 pm on April 25. Application fee can be submitted through mobile or online banking till 3 pm on 26th April.</p>', '<p>বাংলাদেশ প্রকৌশল বিশ্ববিদ্যালয়ে (বুয়েট) ২০২১-২২ শিক্ষাবর্ষের স্নাতক শ্রেণির ভর্তি পরীক্ষার আবেদন শুরু হয়েছে।</p><p><br></p><p><br></p><p>১৬ এপ্রিল সকাল ১০টা থেকে অনলাইনের মাধ্যমে বুয়েটের স্নাতক ভর্তির প্রাথমিক আবেদন শুরু হয়েছে। চলবে ২৫ এপ্রিল বেলা ৩টা পর্যন্ত। মোবাইল বা অনলাইন ব্যাংকিংয়ের মাধ্যমে আবেদন ফি জমা দেওয়া যাবে ২৬ এপ্রিল বেলা ৩টা পর্যন্ত।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(36, 13, 44, 17, 18, 1, 'Publication of the results of the degree examination of the National University', 'জাতীয় বিশ্ববিদ্যালয়ের ডিগ্রি পরীক্ষার ফল প্রকাশ', 'image/postimg/6273f1aa442b7.jpg', '<p>The results of the old syllabus (special) examination of 2016 degree pass and certificate course held under the National University have been published. The results were released on Monday at 4 pm.</p><p><br></p><p><br></p><p>Candidate registration and college wise results are available on the university website from 8 pm.</p>', '<p>জাতীয় বিশ্ববিদ্যালয়ের অধীনে অনুষ্ঠিত ২০১৮ সালের ডিগ্রি পাশ ও সার্টিফিকেট কোর্স পুরাতন সিলেবাস (বিশেষ) পরীক্ষার ফলাফল প্রকাশিত হয়েছে। সোমবার বিকাল ৪টায় এ ফল প্রকাশিত হয়।</p><p><br></p><p><br></p><p>পরীক্ষার্থীর রেজিস্ট্রেশন ও কলেজওয়ারি ফলাফল বিশ্ববিদ্যালয়ের ওয়েবসাইটে রাত ৮টা থেকে পাওয়া যাচ্ছে।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(37, 13, 43, 14, 3, 1, 'GPA-5 directly from the challenge!', 'চ্যালেঞ্জ করে ফেল থেকে সরাসরি জিপিএ-৫!', 'image/postimg/6273f20ba568e.jpg', '<p>The results of the Higher Secondary Certificate (HSC) and equivalent examination book re-examination have been published today (Sunday). Different education boards publish these results separately. The results have been posted on the website of the concerned board. SMS has also been sent to the mobile phones of those whose results have changed.</p><p><br></p><p><br></p><p>Professor SM Amirul Islam, Controller of Examinations, Dhaka Board of Education, said:</p>', '<p>উচ্চ মাধ্যমিক সার্টিফিকেট (এইচএসসি) ও সমমান পরীক্ষার খাতা পুনর্নিরীক্ষার ফল আজ (রোববার) প্রকাশিত হয়েছে। বিভিন্ন শিক্ষা বোর্ড আলাদাভাবে এই ফল প্রকাশ করে। ফল সংশ্লিষ্ট বোর্ডের ওয়েবসাইটে তুলে দেওয়া হয়েছে। যাদের ফল পরিবর্তন হয়েছে তাদের মোবাইল ফোনে এসএমএসও পাঠানো হয়েছে।</p><p><br></p><p><br></p><p>ঢাকা শিক্ষা বোর্ডের পরীক্ষা নিয়ন্ত্রক অধ্যাপক এসএম আমিরুল ইসলাম জানান, সাধারণত এইচএসসি ফল প্রকাশের পর ৭ দিন ধরে ফলের পুনর্নিরীক্ষার আবেদন নেওয়া হয়, আর ফল প্রকাশ করা হয় একমাসের মধ্যে।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(38, 14, 45, 23, 6, 1, 'If the first child has heart disease, what happens to the second child?', 'প্রথম সন্তানের হৃদরোগ হলে কি দ্বিতীয়টিরও হয়?', 'image/postimg/6273f697e063b.jpg', '<p>Children with congenital heart disease are exposed to various health risks from an early age. They have to take special care.</p><p><br></p><p><br></p><p>Many people do not know congenital heart disease, but many babies are normal at birth. Severe heart disease can be detected in a baby 3 months after birth.</p><p><br></p><p>If the first child has congenital heart disease, when should the second child be planned, and the risk of congenital heart disease in the second child is also written in detail.</p>', '<p>জন্মগত হৃদরোগে আক্রান্ত শিশু ছোটবেলা থেকেই নানান স্বাস্থ্যঝুঁকিতে থাকে।&nbsp; তাদের বিশেষ যত্ন নিতে হয়।</p><p><br></p><p><br></p><p>অনেকেরই জানা নেই জন্মগত হৃদরোগ হলেও অনেক শিশু জন্মের সময় স্বাভাবিক থাকে।&nbsp; জন্মের ৩ মাস পর শিশুর গুরুতর হৃদরোগ ধরা পড়তে পারে।&nbsp;</p><p><br></p><p>প্রথম সন্তানের জন্মগত হৃদরোগ হলে দ্বিতীয় সন্তানের জন্য কখন পরিকল্পনা করা উচিত, আর দ্বিতীয় শিশুরও জন্মগত হৃদরোগ হওয়ার আশঙ্কা কতটুকু এ নিয়ে বিস্তারিত লিখেছেন শিশুরোগ&nbsp;</p>', 'source', 'উৎস', NULL, NULL, NULL, 1, '05-05-2022', 'May', NULL, NULL),
(39, 14, 45, 15, 7, 1, 'Here are some important tips for healthy teeth', 'সুস্থ দাঁতের জন্য মেনে চলুন কিছু গুরুত্বপূর্ণ পরামর্শ', 'image/postimg/6273f7686e916.jpg', '<p><br></p><p>Our country is developing day by day in tandem with the outside world. The dental system has become much more modern. Progress has been made in the medical system. But people at the village level in most parts of Bangladesh still do not know how to brush teeth? With what, how many times are you in the middle?</p><p><br></p><p><br></p><p>No matter how modern the medical system, in a country where people do not know how to brush their teeth properly, there is no way to improve their oral and dental health system.</p><p><br></p>', '<p>আমাদের দেশ বহির্বিশ্বের সঙ্গে তাল মিলিয়ে দিন দিন উন্নত হচ্ছে। দন্ত চিকিৎসা ব্যবস্থায় অনেক আধুনিক হয়েছে। চিকিৎসা ব্যবস্থায় এসেছে অগ্রগতি। কিন্তু সারা বাংলাদেশের অধিকাংশ বিভাগের গ্রাম পর্যায়ের মানুষ এখনো জানেন না কিভাবে দাঁত&nbsp; মাজতে হয়? কী দিয়ে, কয়বার মাজতে হয়?</p><p><br></p><p><br></p><p>চিকিৎসা ব্যবস্থা যতই আধুনিক হোক না কেন, যে দেশের মানুষ ঠিক মতো দাঁত ব্রাশ করতে জানে না,তাদের মুখ ও দন্ত স্বাস্হ্য ব্যবস্থায় কোনো অবস্থাতেই উন্নতি সম্ভব নয়।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(40, 14, 45, 21, 7, 1, 'Why is there a slight fever?', 'অল্প অল্প জ্বর কেন হয়?', 'image/postimg/6273fe9b214a0.jpg', '<p>There are different types of fever. Many have a fever with chills. Fever comes when someone leaves again. Often there is a mild fever, which lasts for several days.</p><p><br></p><p>Fever levels indicate many diseases. Ibn Sina Diagnostic and Consultation Center has given details in this regard</p>', '<p>জ্বরের রকমফের আছে। অনেকের কাঁপুনি দিয়ে জ্বর আসে। আবার কারও ছেড়ে ছেড়ে জ্বর আসে। অনেক সময় হালকা জ্বর থাকে গায়ে, যেটির যন্ত্রণা বেশ কয়েক দিন বইতে হয়।</p><p><br></p><p>জ্বরের মাত্রা বহু রোগের নির্দেশ করে।&nbsp; এ বিষয়ে বিস্তারিত জানিয়েছেন ইবনে সিনা ডায়াগনস্টিক অ্যান্ড কনসালটেশন সেন্টারের</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(41, 14, 46, 67, 17, 1, 'Goodbye Lisbon', 'বিদায় লিসবন', 'image/postimg/6273ff25553bd.jpg', '<p>I was flipping through an eighteenth century gramophone, next to some rare records, from Michael Jackson to Madonna, from Guns N \'Roses to Nusrat Fateh Ali Khan, who is not there. In fact, I am now standing at the Chor Bazaar or Flea Market, behind the cathedral, across the river Tagus, whose literary name is Fiera da Ladara.</p><p><br></p><p><br></p><p>Yesterday I came back from Sintra, a town 40 kilometers away from Lisbon</p>', '<p>আঠারোশ শতকের একটা গ্রামোফোন উলটে-পালটে দেখছিলাম, পাশেই বেশ কিছু দুর্লভ রেকর্ডস, মাইকেল জ্যাকসন থেকে ম্যাডোনা, গানস অ্যান্ড রোজেস থেকে নুসরাত ফতেহ আলি খাঁ, কে নেই সেখানে। আসলে এখন আমি দাঁড়িয়ে আছি তাগুস নদীর পার ঘেষে ক্যাথেড্রালের পিছনে চোর বাজার বা ফ্লি মার্কেটে যার কেতাবি নাম ফিয়েরা দ্যা লাডারা।</p><p><br></p><p><br></p><p>গতকাল ঘুরে এসেছি লিসবন থেকে ৪০ কিলোমিটার দূরবর্তী শহর সিন্ত্রা থেকে</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(42, 14, 46, 67, 19, 1, 'Cape Roca: The end of Europe', 'কেপ রোকা: ইউরোপের শেষ প্রান্ত', 'image/postimg/6273fff997aec.jpg', '<p>In the words of the Portuguese poet Louis Camus, this is the place where the land ends and the sea begins. Europe on one side and America on the other. I will come back later. Oh yes, that\'s what I was saying. The clock ticked 1 o\'clock when I set foot on Sintra\'s land, stopping at several stations on the way from Rosio in Lisbon. Although not a very ideal time to start a day tour, this summer time in most European cities it is 9 o\'clock in the evening, I was a little reassured to know.</p>', '<p>পর্তুগিজ কবি লুইস কামেসের ভাষায় এটি সেই জায়গা যেখানে ভূমির শেষ এবং সমুদ্র শুরু। এপারে ইউরোপ, ওপারে আমেরিকা। সে কথায় পরে আসছি। ও হ্যাঁ, যা বলছিলাম। লিসবনের রসিও থেকে রওনা হয়ে পথে বেশ কিছু স্টেশনে যাত্রা বিরতি দিয়ে সিন্ত্রার মাটিতে যখন পা রাখলাম ততক্ষণে ঘড়ির কাঁটা ১টা ছুঁই ছুঁই। ডে ট্যুর শুরু করার খুব আদর্শ সময় না হলেও, গ্রীষ্মের এ সময় ইউরোপের অধিকাংশ শহরে সন্ধ্যা হয় ৯টায়, জেনে একটু আশ্বস্ত হলাম।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(43, 15, 47, 21, 10, 1, 'Maximum remittance in 11 months', '১১ মাসের মধ্যে সর্বোচ্চ রেমিট্যান্স', 'image/postimg/62740fb2ca1ed.jpg', '<p>The highest remittance in the last 11 months came in April. This month, expatriates sent more than কোটি 200 billion (2 billion) in remittances. At the current exchange rate (7 rupees 45 paise per dollar) this amount stands at 16 thousand 362 crore 12 lakh rupees. In April last year, 206 crore 8 lakh dollars came.</p><p><br></p><p>The previous two months, December and January, came in at ৬ 183.6 million and কোটি 180.45 million, respectively. The banks said that the remittance flow decreased in February as it was 28 days.</p>', '<p>গত ১১ মাসের মধ্যে সবচেয়ে বেশি রেমিট্যান্স এসেছে এপ্রিল মাসে। এ মাসে প্রবাসীরা ২০০ কোটি (২ বিলিয়ন) ডলারের বেশি রেমিট্যান্স পাঠিয়েছেন। যা বর্তমান বিনিময় হার (প্রতি ডলার ৮৬ টাকা ৪৫ পয়সা) হিসাবে টাকায় এই অর্থের পরিমাণ দাঁড়ায় ১৭ হাজার ৩৭২ কোটি ১২ লাখ টাকা। গত বছরের এপ্রিলে এসেছিল ২০৬ কোটি ৭৬ লাখ ডলার।&nbsp;</p><p><br></p><p>তার আগের দুই মাস ডিসেম্বর ও জানুয়ারিতে এসেছিল যথাক্রমে ১৬৩ কোটি ৬ লাখ ও ১৭০ কোটি ৪৫ লাখ ডলার। ফেব্রুয়ারি মাস ২৮ দিন হওয়ায় ওই মাসে রেমিট্যান্স প্রবাহ কমেছিল বলে জানায় ব্যাংকগুলো।</p>', 'source', 'উৎস', NULL, NULL, NULL, 1, '05-05-2022', 'May', NULL, NULL),
(44, 15, 47, 21, 7, 1, 'Tk 8412 crore in salaries and allowances of government employees * Tk 18145 crore in subsidy incentives and cash loans', 'সরকারি চারকিজীবীদের বেতন-ভাতায় ৭৬৪১২ কোটি টাকা * ভর্তুকি প্রণোদনা ও নগদ ঋণে ১৭৭১৪৫ কোটি টাকা', 'image/postimg/6274110ec6205.jpg', '<p>Despite following the policy of austerity measures, the allocation for salaries and allowances of government employees is increasing in the next budget. In the same way, large amount has to be calculated to pay interest on domestic and foreign loans. And as a result of the ongoing Ukraine-Russia war, the government has to adjust the rising prices of fuel oil, fertilizer and gas in the world market.</p><p><br></p><p>In order to deal with this situation, a large allocation is to be made in the subsidy and incentive sector for the coming year. As a result, 49 percent of the new budget will be spent on these three sectors. In terms of money, it is 3 lakh 33 thousand 732 crore rupees.</p>', '<p>ব্যয় সংকোচন নীতির পথে হাঁটলেও আগামী বাজেটে সরকারি চাকরিজীবীদের বেতন-ভাতায় বরাদ্দ বাড়ছে। একইভাবে দেশি ও বিদেশি ঋণের সুদ পরিশোধেও বড় অঙ্ক গুনতে হবে। আর চলমান ইউক্রেন-রাশিয়া যুদ্ধের প্রভাবে বিশ্ববাজারে বেড়ে যাওয়া জ্বালানি তেল, সার, গ্যাসের বর্ধিত মূল্য সমন্বয় করতে হচ্ছে সরকারকে।</p><p><br></p><p><br></p><p>এ পরিস্থিতি মোকাবিলায় আগামী বছরের জন্য ভর্তুকি ও প্রণোদনা খাতে বড় ধরনের বরাদ্দ বাড়াতে হচ্ছে। ফলে উল্লেখিত তিনটি খাতে নতুন বাজেটের ৪৯ শতাংশই ব্যয় হবে। টাকার অঙ্কে এটি ৩ লাখ ৩৩ হাজার ৮৩২ কোটি টাকা।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(45, 15, 48, 67, 18, 1, 'Imposing 25 percent LC margin on import of goods', 'পণ্য আমদানিতে ২৫ ভাগ এলসি মার্জিন আরোপ', 'image/postimg/6274118b501c0.jpg', '<p>Bangladesh Bank has imposed 25 per cent LC margin on the opening of import credit or LC for all other commodities except some essential commodities.</p><p><br></p><p>From now on, importers will have to pay at least 25 per cent margin at the time of opening LC on imports of all products except baby food, fuel oil, essential food items, life-saving medicines, local and export oriented industries and agricultural related products. Also the LC cannot be opened.</p>', '<p><br></p><p>অত্যাবশ্যতকীয় কিছু পণ্য ছাড়া বাকি সব পণ্য আমদানির ঋণপত্র বা এলসি খোলার ক্ষেত্রে ২৫ শতাংশ এলসি মার্জিন আরোপ করেছে বাংলাদেশ ব্যাংক।&nbsp;</p><p><br></p><p>এখন থেকে শিশু খাদ্য, জ্বালানি তেল, অত্যাবশ্যকীয় খাদ্যপণ্য, জীবন রক্ষাকারী ওষুধ, স্থানীয় ও রপ্তানিমুখী শিল্প এবং কৃষি খাত সংশ্লিস্ট পণ্য আমদানি ব্যতীত বাকি সব পণ্য আমদানিতে এলসি খোলার সময় আমদানিকারকদেরকে কমপক্ষে ২৫ শতাংশ মার্জিন দিতে হবে। এছাড়া এলসি খোলা যাবে না।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL),
(46, 15, 48, 62, 11, 1, 'Export earnings record after Russia-Ukraine war', 'রাশিয়া-ইউক্রেন যুদ্ধের পরও রপ্তানি আয়ে রেকর্ড', 'image/postimg/627411deefafd.jpg', '<p>Throughout the month of March there was a war between Russia and Ukraine. Which has negatively affected the whole world. However, even in such a situation, the positive trend of increasing the export income of the country has continued.</p><p><br></p><p><br></p><p><br></p><p>In the third month of March this year, the exporters of Bangladesh brought in 48 crore 22 lakh (4.6 billion) dollars in foreign exchange by exporting various products. Export earnings have increased in almost all sectors, not just readymade garments.</p><p><br></p><p>At the current exchange rate (6 rupees 20 paise), this amount is more than 41 thousand crore rupees.</p>', '<p>মার্চ মাস জুড়ে ছিল রাশিয়া-ইউক্রেন যুদ্ধ। যার নেতিবাচক প্রভাব পড়েছে গোটা বিশ্বে। তবে এমন পরিস্থিতিতেও দেশের রপ্তানি আয় বৃদ্ধির ইতিবাচক ধারা অব্যাহত রয়েছে।&nbsp;</p><p><br></p><p><br></p><p><br></p><p>চলতি বছরের তৃতীয় মাস মার্চে বিভিন্ন পণ্য রপ্তানি করে ৪৭৬ কোটি ২২ লাখ (৪.৭৬ বিলিয়ন) ডলার বিদেশি মুদ্রা এনেছেন বাংলাদেশের রপ্তানিকারকরা। শুধু তৈরি পোশাক নয়, প্রায় সব খাতেই রপ্তানি আয় বেড়েছে।&nbsp;</p><p><br></p><p>বর্তমান বিনিময় হার (৮৬ টাকা ২০ পয়সা) হিসাবে টাকার অঙ্কে এই অর্থের পরিমাণ ৪১ হাজার কোটি টাকার বেশি।</p>', 'source', 'উৎস', NULL, NULL, NULL, NULL, '05-05-2022', 'May', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prayers`
--

CREATE TABLE `prayers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fajor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jahor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magrib` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `esha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jummah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prayers`
--

INSERT INTO `prayers` (`id`, `fajor`, `jahor`, `asor`, `magrib`, `esha`, `jummah`, `created_at`, `updated_at`) VALUES
(1, '4.05 AM', '1.00 PM', '4:31 PM', '6:27  PM', '7:47  PM', '12.30 PM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_varification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alexa_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_author`, `meta_title`, `meta_keyword`, `meta_description`, `google_analytics`, `google_varification`, `alexa_analytics`, `created_at`, `updated_at`) VALUES
(1, 'Meta Author', 'Meta Title', 'Meta Keyword', '<p>Meta Description<span style=\"font-weight: initial;\">Meta Description</span><span style=\"font-weight: initial;\">Meta Description</span><br></p>', 'Google Analytics', 'Google Varification', 'Alexa Analytics', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('J6rd2oILQ4Qxw48h0gNgqVmub7T0zgAakeBkovKS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36', 'YTo2OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiblN5T1hKQWhoSWZKYUxWd2hzV2pRbmVjMjMxSHR1NDBkSzQzM3g3cSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRpZGJNVTdXbXE5YnU0cHR1b1l3dVp1aUQyUW5HcnBCamFOR0k2OEc4SzAzRncvZEZDL0t3SyI7fQ==', 1652462498),
('WpG3kJQdD83OjllDUjigPwFYsSwlGomzQZeMrBhW', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.64 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoid2pNSUR1R0wxQ28xMmNNV2FCTm0xaVV3elE2S0IyYUFhT2ROZHhWMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdWJkaXN0cmljdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGlkYk1VN1dtcTlidTRwdHVvWXd1WnVpRDJRbkdycEJqYU5HSTY4RzhLMDNGdy9kRkMvS3dLIjtzOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1652470918);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `instagram`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/?lang=en', 'https://www.youtube.com/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_bang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_eng`, `subcategory_bang`, `created_at`, `updated_at`) VALUES
(11, '8', 'Justice', 'আইন-বিচার', NULL, NULL),
(12, '8', 'Crime', 'অপরাধ', NULL, NULL),
(14, '11', 'Middle East', 'মধ্যপ্রাচ্য', NULL, NULL),
(15, '8', 'Government', 'সরকার', NULL, NULL),
(16, '8', 'The media', 'গণমাধ্যম', NULL, NULL),
(17, '8', 'Accident', 'দুর্ঘটনা', NULL, NULL),
(18, '8', 'Mourning', 'শোক', NULL, NULL),
(19, '8', 'Others', 'অন্যান্য', NULL, NULL),
(20, '11', 'Africa', 'আফ্রিকা', NULL, NULL),
(21, '11', 'Europe', 'ইউরোপ', NULL, NULL),
(22, '11', 'United States', 'যুক্তরাষ্ট্র', NULL, NULL),
(23, '11', 'South America', 'দক্ষিণ আমেরিকা', NULL, NULL),
(24, '11', 'Asia', 'এশিয়া', NULL, NULL),
(25, '11', 'Others', 'অন্যান্য', NULL, NULL),
(26, '9', 'Awami League', 'আওয়ামী লীগ', NULL, NULL),
(27, '9', 'BNP', 'বিএনপি', NULL, NULL),
(28, '9', 'National Party', 'জাতীয় পার্টি', NULL, NULL),
(29, '9', 'Others', 'অন্যান্য', NULL, NULL),
(30, '10', 'Football', 'ফুটবল', NULL, NULL),
(31, '10', 'Tennis', 'টেনিস', NULL, NULL),
(32, '10', 'Interview', 'সাক্ষাৎকার', NULL, NULL),
(33, '10', 'Others', 'অন্যান্য', NULL, NULL),
(34, '12', 'Dhaliwood', 'ঢালিউড', NULL, NULL),
(35, '12', 'Bollywood', 'বলিউড', NULL, NULL),
(36, '12', 'Tollywood', 'টালিউড', NULL, NULL),
(37, '12', 'Hollywood', 'হলিউড', NULL, NULL),
(38, '12', 'Drama', 'নাটক', NULL, NULL),
(39, '12', 'Song', 'গান', NULL, NULL),
(40, '12', 'Interview', 'সাক্ষাৎকার', NULL, NULL),
(41, '12', 'Others', 'অন্যান্য', NULL, NULL),
(42, '13', 'Admission', 'ভর্তি', NULL, NULL),
(43, '13', 'Test', 'পরীক্ষা', NULL, NULL),
(44, '13', 'The result', 'ফলাফল', NULL, NULL),
(45, '14', 'My family', 'আমার পরিবার', NULL, NULL),
(46, '14', 'Travel', 'ভ্রমণ', NULL, NULL),
(47, '15', 'Budget', 'বাজেট', NULL, NULL),
(48, '15', 'Import-export', 'আমদানি-রপ্তানি', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subdistricts`
--

CREATE TABLE `subdistricts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdistrict_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdistrict_bang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subdistricts`
--

INSERT INTO `subdistricts` (`id`, `district_id`, `subdistrict_eng`, `subdistrict_bang`, `created_at`, `updated_at`) VALUES
(3, '21', 'Keraniganj Upazila', 'কেরানীগঞ্জ উপজেলা', NULL, NULL),
(6, '21', 'Dohar Upazila', 'দোহার উপজেলা', NULL, NULL),
(7, '21', 'Dhamrai Upazila', 'ধামরাই উপজেলা', NULL, NULL),
(8, '21', 'Nawabganj Upazila', 'নবাবগঞ্জ উপজেলা', NULL, NULL),
(9, '21', 'Savar Upazila', 'সাভার উপজেলা', NULL, NULL),
(10, '21', 'Dhaka Sadar', 'ঢাকা সদর', NULL, NULL),
(11, '62', 'Rangpur Sadar', 'রংপুর সদর', NULL, NULL),
(12, '62', 'Badarganj', 'বদরগঞ্জ', NULL, NULL),
(13, '62', 'Haragach', 'হারাগাছ', NULL, NULL),
(14, '13', 'Karnafuli', 'কর্ণফুলী', NULL, NULL),
(15, '13', 'Kotwali', 'কোতোয়ালি', NULL, NULL),
(16, '13', 'Khulshi', 'খুলশী', NULL, NULL),
(17, '67', 'Beanibazar', 'বিয়ানীবাজার', NULL, NULL),
(18, '67', 'Bishwanath', 'বিশ্বনাথ', NULL, NULL),
(19, '67', 'Companiganj', 'কোম্পানীগঞ্জ', NULL, NULL),
(20, '67', 'Dakshin Surma', 'দক্ষিণ সুরমা', NULL, NULL),
(21, '54', 'Bagha Upazila', 'বাঘা উপজেলা', NULL, NULL),
(22, '54', 'Bagmara Upazila', 'বাগমারা উপজেলা', NULL, NULL),
(23, '54', 'Boalia Thana', 'বোয়ালিয়া থানা', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `setting` int(11) DEFAULT NULL,
  `website` int(11) DEFAULT NULL,
  `gallery` int(11) DEFAULT NULL,
  `ads` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `image`, `gender`, `position`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `type`, `category`, `district`, `post`, `setting`, `website`, `gallery`, `ads`, `role`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$idbMU7Wmq9bu4ptuoYwuZuiD2QnGrpBjaNGI68G8K03Fw/dFC/KwK', '01727038318', 'Narayanganj', '202205130640avatar-3637425__340.webp', 'Male', 'MD', NULL, NULL, NULL, 'O3TiKEz31ctdJPDSyfWcDa5sJXfUfopFIW9pGXQbrc5YXGEuaiDpPBpSvcbl', 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, '2022-04-28 22:55:45', '2022-05-13 11:21:09'),
(3, 'Kobir', 'rayhankobir7512@gmail.com', NULL, '$2y$10$CNkMxmHUyPTAdPdQQOcXWuXj9NGUtYd.6ABRMfdPwC.Id4npp8jGK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HWcqznT9uhSkpwmVU2hk35S4pHNYH3K4nOrERg6DHbx6FCg2epp7OYn69LGo', 0, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_title`, `embed_code`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Juganttor TV', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ah7CDz5ACX4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '1', NULL, NULL),
(3, 'Somoy TV', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/LCvhG9BEzv4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '0', NULL, NULL),
(4, 'My TV', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/o0KyBaRnKrY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '0', NULL, NULL),
(5, 'Channel24', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/w9KVDJoKfuQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '0', NULL, NULL),
(6, 'Jamuna', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/c6jwvMKPBQA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `website_name`, `website_link`, `created_at`, `updated_at`) VALUES
(4, 'Prothom Alo', 'https://www.prothomalo.com/', NULL, NULL),
(5, 'Jugantor', 'https://www.jugantor.com/', NULL, NULL),
(6, 'Ittefaq', 'https://www.ittefaq.com.bd/', NULL, NULL),
(7, 'Jaijaidin', 'https://www.jaijaidinbd.com/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websitesettings`
--

CREATE TABLE `websitesettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_eng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_bang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_eng` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_bang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websitesettings`
--

INSERT INTO `websitesettings` (`id`, `logo`, `phone_eng`, `phone_bang`, `email`, `address_eng`, `address_bang`, `created_at`, `updated_at`) VALUES
(1, 'image/setting/62795893a43bc.png', '01727038318', '01727038318', 'rayhankobir7512@gmail.com', '<p>Siddhirganj,Narayanganj<br></p>', '<p>সিদ্ধিরগঞ্জ, নারায়ণগঞ্জ</p><div><br></div>', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districs`
--
ALTER TABLE `districs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `livetvs`
--
ALTER TABLE `livetvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayers`
--
ALTER TABLE `prayers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subdistricts`
--
ALTER TABLE `subdistricts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websitesettings`
--
ALTER TABLE `websitesettings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `districs`
--
ALTER TABLE `districs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `livetvs`
--
ALTER TABLE `livetvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `prayers`
--
ALTER TABLE `prayers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `subdistricts`
--
ALTER TABLE `subdistricts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `websitesettings`
--
ALTER TABLE `websitesettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
