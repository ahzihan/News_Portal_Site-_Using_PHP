-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 09:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `photo`) VALUES
(1, 'Md Akbar Hossain', 'images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(4, 'Entertainment'),
(3, 'International'),
(2, 'National'),
(5, 'Politics'),
(1, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `categoryID`, `heading`, `photo`, `description`) VALUES
(1, 1, 'This is heading 123', '821637.jpg', 'This is a Apple'),
(2, 2, 'This is a Banana', '681111.jpg', 'This is a Banana'),
(3, 3, 'This is ', '112941.jpg', 'Description 3'),
(4, 4, 'Heading 4', '790255.jpg', 'Closes all files that are open in the Source Editor area.'),
(5, 3, 'Heading 4', '4.jpg', 'Closes all files that are open in the Source Editor area.'),
(9, 4, 'তুর্কি সুলতান এরদোয়ান কখনো ঘুমান না', '5.jpg', 'যত শত্রু তত মর্যাদা, পুরোনো এই জার্মান প্রবাদকে কাজেকর্মে ফলিয়ে তুলছে তুরস্ক। ইরান ও আজারবাইজান ছাড়া আর সব প্রতিবেশীর সঙ্গে শত্রুতা তার। একসময় অনেকগুলো ফ্রন্টে একসঙ্গে যুদ্ধ চালাবার তাকদ দেখিয়েছিল যুক্তরাষ্ট্র। তুর্কি সুলতানের উচ্চাভিলাষ সেই পর্যায়ে না গেলেও লক্ষণ সে রকমই। \r\n\r\n২০০৩ সালে প্রথম ক্ষমতায় আসেন তুর্কি একেপি পার্টির নেতা রিসেপ তাইয়েপ এরদোয়ান—আরবি উচ্চারণে রজব তৈয়ব রিদওয়ান। ক্ষমতার ১৭ বছরে এসে তিনি বদলে দিয়েছেন এক পুরোনো রুশ কৌতুকের অর্থ। এক গ্রাম্য ইহুদি তরুণ যুদ্ধ যাচ্ছে। ছেলেকে বিদায় দেওয়ার সময় মা তার মাথায় হাত বোলাতে বোলাতে বলছে, ‘বাবা, বেশি পরিশ্রম করবি না। একটা করে তুর্কি মারবি আর জিরিয়ে নিবি।’ \r\n\r\nপ্রথম বিশ্বযুদ্ধে পরাজয়ের পর ইউরোপে এমনই ছিল তুরস্কের ভাবমূর্তি। ওই গ্রামীণ বৃদ্ধাও সেটা জানতেন। অবক্ষয়িত অটোমান সেনাদের হত্যাকে মনে করেছিলেন এমনই ডালভাত। তাই বলছেন, ‘একটা করে তুর্কি মারবি আর জিরিয়ে নিবি।’। ছেলেটা তখন মাকে বলে, ‘কিন্তু তুর্কিরা যদি আমাকে মারে?’ মা তো অবাক, ‘তোকে মারবে কেন, তুই তাদের কী ক্ষতি করেছিস?’ এই ছিল সে সময়ের গড়পড়তা ইউরোপীয় মনস্তত্ত্ব।'),
(10, 4, 'কোভিডে বাংলাদেশ এখন অনেকটাই নিরাপদ: স্বাস্থ্যমন্ত্রী', '7.jpg', 'স্বাস্থ্যমন্ত্রী জাহিদ মালেক বলেছেন, বাংলাদেশে করোনায় আক্রান্ত বিবেচনায় মৃত্যুর হার বিশ্বের সবচেয়ে কম দেশের কাতারেই রয়েছে। তিনি আরও বলেন, কোভিডে বাংলাদেশ এখন অনেকটাই নিরাপদ। এসব কিছুই সম্ভব হয়েছে প্রধানমন্ত্রীর সঠিক দিকনির্দেশনা ও দেশের স্বাস্থ্যকর্মীদের নিরলস প্রচেষ্টার ফলে।\r\n\r\nরাজধানীর শিশু হাসপাতালে আজ রোববার ‘জাতীয় ভিটামিন এ প্লাস ক্যাম্পেইন-২০২০’–এর উদ্বোধনের সময় এসব কথা বলেন স্বাস্থ্যমন্ত্রী। তিনি আরও বলেন, গত মার্চে কোভিড-১৯ যখন দেশে প্রথম চলে আসে, তখন নানা মানুষ নানা রকম জল্পনাকল্পনা শুরু করে। তখন বলা হতো, বাংলাদেশে মানুষের লাশ রাস্তায় পড়ে থাকবে। করোনায় লাখ লাখ মানুষ মারা যাবেন। অথচ বাংলাদেশে কোভিডে আক্রান্ত বিবেচনায় মৃত্যুর হার বিশ্বের সবচেয়ে কম দেশের কাতারেই রয়েছে। আক্রান্ত ও মৃত্যুতে বাংলাদেশ পার্শ্ববর্তী দেশ ভারত বা ইউরোপ, আমেরিকা থেকে অনেক ভালো অবস্থায় আছে।\r\n\r\n জাহিদ মালেক বলেন, আজকের প্রতিটি সুস্থ শিশুই আগামী দিনের উজ্জ্বল বাংলাদেশের কান্ডারি হবে। আজকের শিশুকে টিকা দিলে সেই সন্তান ভবিষ্যতের সুস্থ ও মেধাবী সন্তান হবে। এ সন্তান ভবিষ্যৎ বাংলাদেশের নেতৃত্ব দেবে। একইভাবে এই টিকা না দেওয়া হলে সন্তান নানা রোগে আক্রান্ত হতে পারে।'),
(11, 5, 'মাস্কের কিছু অজানা ব্যবহার', '8.jpg', 'ইদানীং অনেকেই ‘মুখোশধারী’ হতে নারাজ। মানে, মাস্ক পরতে বেজায় অনীহা। অথচ করোনাকালের শুরুতে অনেকেই মাস্কের দোকানে হামলে পড়েছিলেন। কেউ কেউ গুদামজাত করেছেন বলেও শোনা গেছে। এখন যদি ব্যবহারই না থাকে, তাহলে সেই মাস্কগুলোর কী হবে? আশার কথা হলো, মাস্ক কেবল মুখ ঢাকতেই নয়, আরও অনেক কাজের কাজি। এর আরও অনেক ব্যবহারই আছে, যা হয়তো আপনার অজানা। জেনে নিন সেসব...'),
(14, 2, 'Hello', '234778.jpg', 'Azurs bateau leurs l\'amour dans les, verte de les torpeurs flache mystiques l\'amour, martyr les laissé vers aux dans flache de impassibles. L\'horizon j\'aurais  taché ces escorté et. Et pôles les trombes triomphants noyé tout sous bas, sidéraux chair mois nasses mer lune de, péninsules lichens tapages ô et, écroulement et enivrantes ventouses pas des. A bleuités dérades délires bords milieu montrer ô. D\'or et des descendaient vents anglais nos cinquante des éveils, je et sidéraux tout les sures l\'horizon ne ma qu\'un, du yeux tempete des les faisaient un. La l\'horizon mon juillets a victimes ni n\'ont récifs, les mes de qui n\'auraient des éblouies, les  mes des vomissures sous. Marais eau équipages soleil noyés qu\'un de, sanglot des lenteurs poetes azurs vers flamands voir, nuits d\'ombres démarrées bonaces mes et revé - que vacheries, avec bonaces équipages haleurs appelle éternels des ont. Des gouvernail d\'europe je les, milieu glauques vins taché des taches ces que mer. Entonnoirs et laissé mon j\'aille vents poussifs. Je le la pourrit balottant pantheres et punaises un. Aux l\'homme bords violettes de. Vacheries des sont gouvernail de plus  du, mystiques loin et querelles j\'ai éblouies or seves. Coque repeché  punaises léger descendaient. Regretter milieu vins d\'ombres sous. Les dix descendaient dans anciens je énormes de les des, des les je enlever de. Des courus plus golfes revé a des un accroupi de, comme je ou mai clapotements -. Douce désire j\'ai mai plus fumant qu\'on l\'oeil, puis femme moi de les est. De descend restais au dont. Poussifs inouies flottaison t\'exiles parfois avaient hanses mufle cloués, désire les leur dorades songer, plus de cotons je braises martyr leur un tristesses. Jaune d\'eau au sont dorades l\'orgueil de lunules cataractant cieux, courants les mystiques peuple je plus entonnoirs tapages clabaudeurs.'),
(15, 1, 'ওয়াটসন-প্লেসিসের অবিশ্বাস্য জুটিতে পাঞ্জাবকে হারালো চেন্নাই', '530514.jpg', 'তিন বছর আগে গৌতম গম্ভীর ও ক্রিস লিনের করা একটি রেকর্ড ভাঙার জন্য আর মাত্র ৪ রান করলেই হতো শেন ওয়াটসন ও ফাফ ডু প্লেসিসের। কিন্তু তা করতে না পারলেও অবিশ্বাস্য ওপেনিং জুটিতে চেন্নাই সুপার কিংসকে জয়ে ফেরালেন তারা।\r\n\r\n \r\nরোববার (০৪ অক্টোবর) রাতে দুবাই আন্তর্জাতিক ‍স্টেডিয়ামে কিংস ইলেভেন পাঞ্জাবের দেওয়া ১৭৯ রানের লক্ষ্যে ব্যাট করতে নেমে কোনো উইকেট না হারিয়েই ১০ উইকেটের জয় তুলে নেয় মহেন্দ্র সিং ধোনির দল। দুই ওপেনার ওয়াটসন ও ডু প্লেসিসের নিরবিচ্ছিন্ন জুটিতে ১৭.৪ ওভারে বিনা উইকেটে ১৮১ রান করে চেন্নাই। তার আগে ৪ উইকেটে ১৭৮ রান করে পাঞ্জাব।  \r\n\r\nআইপিএলের ইতিহাসে এখন পযর্ন্ত সর্বোচ্চ্  ওপেনিং জুটি গম্ভীর ও লিনের। ২০১৭ সালে রাজকোটে গুজরাট লায়ন্সের বিপক্ষে ওপেনিংয়ে ১৮৪ রান করেছিলেন কলকাতা নাইট রাইডার্সের এই দুই তারকা। এবার তার খুব কাছে গিয়েও প্রতিপক্ষের রান আগেই টপকে যাওয়ায় রেকর্ডটি নিজেদের করে নিতে পারেননি ওয়াটসন-ডু প্লেসিস।  \r\n\r\nদুবাইতে টসে জিতে পাঞ্জাবও ওপেনিংয়ে শুরুটা করে দুর্দান্ত। দলীয় ৬১ রানে মায়াঙ্ক আগরওয়াল (২৬) সাজঘরে ফিরলেও মানদীপ সিং (২৭) ও নিকোলাস পুরানের সঙ্গে (৩৩) ছোট ছোট জুটি গড়ে ফিফটি তুলে নেন অধিনায়ক লোকেশ রাহুল। শেষ উইকেট হিসেবে তিনি ফেরেন ৫২ বলে ৬৩ রান করে। তার ইনিংসটি সাজানো ছিল ৭ চার ও ১ ছয়ে। শেষদিকে ১১ রানে গ্লেন ম্যাক্সওয়েল এবং সরফরাজ খান অপরাজিত থাকেন ১৪ রানে।  \r\n\r\nরান তাড়া করতে নেমে পাঞ্চাবের বোলারদের কোনো সুবিধা করতে দেননি ওয়াটসন-ডু প্লেসিস। ওয়াটসন ৫৩ বলে ১১ চার ও ৩ ছক্কায় ৮৩ রানে অপরাজিত ছিলেন। সমান বলে ১১ চার ও ১ ছক্কায় ৮৭ রানে অপরাজিত থাকেন ডু প্লেসিস। '),
(16, 4, 'ওয়াটসন-প্লেসিসের অবিশ্বাস্য জুটিতে পাঞ্জাবকে হারালো চেন্নাই', '186829.jpg', 'bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `heading` (`heading`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD CONSTRAINT `tbl_news_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `tbl_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
