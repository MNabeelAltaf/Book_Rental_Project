-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 10:10 PM
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
-- Database: `book_rental_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_table`
--

CREATE TABLE `books_table` (
  `Book_id` int(11) NOT NULL,
  `id` int(3) DEFAULT NULL,
  `title` varchar(107) DEFAULT NULL,
  `author` varchar(115) DEFAULT NULL,
  `isbn` varchar(10) DEFAULT NULL,
  `published_date` varchar(10) DEFAULT NULL,
  `publisher` varchar(55) DEFAULT NULL,
  `availability_status` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books_table`
--

INSERT INTO `books_table` (`Book_id`, `id`, `title`, `author`, `isbn`, `published_date`, `publisher`, `availability_status`) VALUES
(1, 1, 'Harry Potter and the Half-Blood Prince (Harry Potter #6)', 'J.K. Rowling/Mary GrandPrÃ©', '439785960', '2006-09-16', 'Scholastic Inc.', 'no'),
(2, 2, 'Harry Potter and the Order of the Phoenix (Harry Potter #5)', 'J.K. Rowling/Mary GrandPrÃ©', '439358078', '2004-09-01', 'Scholastic Inc.', 'no'),
(3, 3, 'Harry Potter and the Chamber of Secrets (Harry Potter #2)', 'J.K. Rowling', '439554896', '2003-11-01', 'Scholastic', 'no'),
(4, 4, 'Harry Potter and the Prisoner of Azkaban (Harry Potter #3)', 'J.K. Rowling/Mary GrandPrÃ©', '043965548X', '2004-05-01', 'Scholastic Inc.', 'no'),
(5, 5, 'Harry Potter Boxed Set Books 1-5 (Harry Potter #1-5)', 'J.K. Rowling/Mary GrandPrÃ©', '439682584', '2004-09-13', 'Scholastic', 'no'),
(6, 6, 'Unauthorized Harry Potter Book Seven News: \"Half-Blood Prince\" Analysis and Speculation', 'W. Frederick Zimmerman', '976540606', '2005-04-26', 'Nimble Books', 'no'),
(7, 7, 'Harry Potter Collection (Harry Potter #1-6)', 'J.K. Rowling', '439827604', '2005-09-12', 'Scholastic', 'yes'),
(8, 8, 'The Ultimate Hitchhiker\'s Guide: Five Complete Novels and One Story (Hitchhiker\'s Guide to the Galaxy #1-5)', 'Douglas Adams', '517226952', '2005-11-01', 'Gramercy Books', 'yes'),
(9, 9, 'The Ultimate Hitchhiker\'s Guide to the Galaxy (Hitchhiker\'s Guide to the Galaxy #1-5)', 'Douglas Adams', '345453743', '2002-04-30', 'Del Rey Books', 'yes'),
(10, 10, 'The Hitchhiker\'s Guide to the Galaxy (Hitchhiker\'s Guide to the Galaxy #1)', 'Douglas Adams', '1400052920', '2004-08-03', 'Crown', 'yes'),
(11, 11, 'The Hitchhiker\'s Guide to the Galaxy (Hitchhiker\'s Guide to the Galaxy #1)', 'Douglas Adams/Stephen Fry', '739322206', '2005-03-23', 'Random House Audio', 'yes'),
(12, 12, 'The Ultimate Hitchhiker\'s Guide (Hitchhiker\'s Guide to the Galaxy #1-5)', 'Douglas Adams', '517149257', '1996-01-17', 'Wings Books', 'yes'),
(13, 13, 'A Short History of Nearly Everything', 'Bill Bryson', '076790818X', '2004-09-14', 'Broadway Books', 'yes'),
(14, 14, 'Bill Bryson\'s African Diary', 'Bill Bryson', '767915062', '2002-12-03', 'Broadway Books', 'yes'),
(15, 15, 'Bryson\'s Dictionary of Troublesome Words: A Writer\'s Guide to Getting It Right', 'Bill Bryson', '767910435', '2004-09-14', 'Broadway Books', 'yes'),
(16, 16, 'In a Sunburned Country', 'Bill Bryson', '767903862', '2001-05-15', 'Broadway Books', 'no'),
(17, 17, 'I\'m a Stranger Here Myself: Notes on Returning to America After Twenty Years Away', 'Bill Bryson', '076790382X', '2000-06-28', 'Broadway Books', 'yes'),
(18, 18, 'The Lost Continent: Travels in Small Town America', 'Bill Bryson', '60920084', '1990-08-28', 'William Morrow Paperbacks', 'yes'),
(19, 19, 'Neither Here nor There: Travels in Europe', 'Bill Bryson', '380713802', '1993-03-28', 'William Morrow Paperbacks', 'yes'),
(20, 20, 'Notes from a Small Island', 'Bill Bryson', '380727501', '1997-05-28', 'William Morrow Paperbacks', 'yes'),
(21, 21, 'The Mother Tongue: English and How It Got That Way', 'Bill Bryson', '380715430', '1991-09-28', 'William Morrow Paperbacks', 'yes'),
(22, 22, 'J.R.R. Tolkien 4-Book Boxed Set: The Hobbit and The Lord of the Rings', 'J.R.R. Tolkien', '345538374', '2012-09-25', 'Ballantine Books', 'yes'),
(23, 23, 'The Lord of the Rings (The Lord of the Rings #1-3)', 'J.R.R. Tolkien', '618517650', '2004-10-21', 'Houghton Mifflin Harcourt', 'yes'),
(24, 24, 'The Fellowship of the Ring (The Lord of the Rings #1)', 'J.R.R. Tolkien', '618346252', '2003-09-05', 'Houghton Mifflin Harcourt', 'yes'),
(25, 25, 'The Lord of the Rings (The Lord of the Rings #1-3)', 'J.R.R. Tolkien/Alan Lee', '618260587', '2002-10-01', 'Houghton Mifflin Harcourt', 'yes'),
(26, 26, 'The Lord of the Rings: Weapons and Warfare', 'Chris Smith/Christopher Lee/Richard Taylor', '618391002', '2003-11-05', 'Houghton Mifflin Harcourt', 'yes'),
(27, 27, 'The Lord of the Rings: Complete Visual Companion', 'Jude Fisher', '618510826', '2004-11-15', 'Houghton Mifflin Harcourt', 'yes'),
(28, 28, 'Agile Web Development with Rails: A Pragmatic Guide', 'Dave Thomas/David Heinemeier Hansson/Leon Breedt/Mike Clark/Thomas Fuchs/Andreas Schwarz', '097669400X', '2005-07-28', 'Pragmatic Bookshelf', 'yes'),
(29, 29, 'Hatchet (Brian\'s Saga #1)', 'Gary Paulsen', '689840926', '2000-04-01', 'Atheneum Books for Young Readers: Richard Jackson Books', 'yes'),
(30, 30, 'Hatchet: A Guide for Using \"Hatchet\" in the Classroom', 'Donna Ickes/Edward Sciranko/Keith Vasconcelles', '1557344493', '1994-08-28', 'Teacher Created Resources', 'yes'),
(31, 31, 'Guts: The True Stories behind Hatchet and the Brian Books', 'Gary Paulsen', '385326505', '2001-01-23', 'Delacorte Press', 'yes'),
(32, 32, 'Molly Hatchet - 5 of the Best', 'Molly Hatchet', '1575606240', '2003-06-10', 'Cherry Lane Music Company', 'yes'),
(33, 33, 'Hatchet Jobs: Writings on Contemporary Fiction', 'Dale Peck', '1595580271', '2005-11-01', 'The New Press', 'yes'),
(34, 34, 'A Changeling for All Seasons (Changeling Seasons #1)', 'Angela Knight/Sahara Kelly/Judy Mays/Marteeka Karland/Kate Douglas/Shelby Morgen/Lacey Savage/Kate Hill/Willa Okati', '1595962808', '2005-11-01', 'Changeling Press', 'yes'),
(35, 35, 'Changeling (Changeling #1)', 'Delia Sherman', '670059676', '2006-08-17', 'Viking Juvenile', 'yes'),
(36, 36, 'The Changeling Sea', 'Patricia A. McKillip', '141312629', '2003-04-14', 'Firebird', 'yes'),
(37, 37, 'The Changeling', 'Zilpha Keatley Snyder', '595321801', '2004-06-08', 'iUniverse', 'yes'),
(38, 38, 'The Changeling', 'Kate Horsley', '1590301943', '2005-04-12', 'Shambhala', 'yes'),
(39, 39, 'The Changeling (Daughters of England #15)', 'Philippa Carr', '449146979', '1990-08-28', 'Ivy Books', 'yes'),
(40, 40, 'The Known World', 'Edward P. Jones', '61159174', '2006-08-29', 'Amistad', 'yes'),
(41, 41, 'The Known World', 'Edward P. Jones/Kevin R. Free', '006076273X', '2004-06-15', 'HarperAudio', 'yes'),
(42, 42, 'The Known World', 'Edward P. Jones', '60749911', '2004-06-15', 'Harper', 'yes'),
(43, 43, 'Traders Guns & Money: Knowns and Unknowns in the Dazzling World of Derivatives', 'Satyajit Das', '273704745', '2006-05-15', 'FT Press', 'yes'),
(44, 44, 'Artesia: Adventures in the Known World', 'Mark Smylie', '1932386106', '2005-12-14', 'Archaia', 'yes'),
(45, 45, 'The John McPhee Reader (John McPhee Reader #1)', 'John McPhee/William Howarth', '374517193', '1982-06-01', 'Farrar Straus and Giroux', 'yes'),
(46, 46, 'Uncommon Carriers', 'John McPhee', '374280398', '2006-05-16', 'Farrar Straus Giroux', 'yes'),
(47, 47, 'Heirs of General Practice', 'John McPhee', '374519749', '1986-04-01', 'Farrar Straus and Giroux', 'yes'),
(48, 48, 'The Control of Nature', 'John McPhee', '374522596', '1990-09-01', 'Farrar Straus and Giroux', 'yes'),
(49, 49, 'Annals of the Former World', 'John McPhee', '374518734', '1999-01-06', 'Farrar Straus and Giroux', 'yes'),
(50, 50, 'Coming Into the Country', 'John McPhee', '374522871', '1991-04-01', 'Farrar Straus and Giroux', 'yes'),
(51, 51, 'La Place de la Concorde Suisse', 'John McPhee', '374519323', '1994-04-01', 'Farrar Straus and Giroux', 'yes'),
(52, 52, 'Giving Good Weight', 'John McPhee', '374516006', '1994-04-01', 'Farrar Straus and Giroux', 'yes'),
(53, 53, 'Rising from the Plains', 'John McPhee', '374520658', '1987-11-01', 'Farrar Straus and Giroux', 'yes'),
(54, 54, 'The Heidi Chronicles', 'Wendy Wasserstein', '822205106', '2002-03-01', 'Dramatists Play Service', 'yes'),
(55, 55, 'The Heidi Chronicles: Uncommon Women and Others & Isn\'t It Romantic', 'Wendy Wasserstein', '679734996', '1991-07-02', 'Vintage', 'yes'),
(56, 56, 'Active Literacy Across the Curriculum: Strategies for Reading Writing Speaking and Listening', 'Heidi Hayes Jacobs', '1596670231', '2006-03-29', 'Routledge', 'yes'),
(57, 57, 'Simply Beautiful Beaded Jewelry', 'Heidi Boyd', '1581807740', '2006-03-14', 'North Light Books', 'yes'),
(58, 58, 'Always Enough: God\'s Miraculous Provision Among the Poorest Children on Earth', 'Heidi Baker/Rolland Baker', '800793617', '2003-09-01', 'Chosen Books', 'yes'),
(59, 59, 'Mapping the Big Picture: Integrating Curriculum & Assessment K-12', 'Heidi Hayes Jacobs', '871202867', '1997-01-28', 'Association for Supervision & Curriculum Development', 'yes'),
(60, 60, 'Heidi (Heidi #1-2)', 'Johanna Spyri/Beverly Cleary/Angelo Rinaldi', '753454947', '2002-11-15', 'Kingfisher', 'yes'),
(61, 61, 'Getting Results with Curriculum Mapping', 'Heidi Hayes Jacobs', '871209993', '2004-11-15', 'ASCD', 'yes'),
(62, 62, 'There\'s Always Enough: The Miraculous Move of God in Mozambique', 'Rolland Baker/Heidi Baker', '1852402873', '2003-04-28', 'Sovereign World', 'yes'),
(63, 63, 'What to Expect the First Year (What to Expect)', 'Heidi Murkoff/Sharon Mazel/Arlene Eisenberg/Sandee Hathaway/Mark D. Widome', '761129588', '2003-10-16', 'Workman Publishing Company', 'yes'),
(64, 64, 'The Player\'s Handbook: The Ultimate Guide on Dating and Relationships', 'Heidi Fleiss/Libby Keatinge', '972016414', '2004-05-10', 'One Hour Entertainment', 'yes'),
(65, 65, 'Simply Beautiful Beading: 53 Quick and Easy Projects', 'Heidi Boyd', '1581805632', '2004-08-19', 'North Light Books', 'yes'),
(66, 66, 'God Emperor of Dune (Dune Chronicles #4)', 'Frank Herbert', '441294677', '1987-06-15', 'Ace Books', 'yes'),
(67, 67, 'Chapterhouse: Dune (Dune Chronicles #6)', 'Frank Herbert', '441102670', '1987-07-01', 'Ace Books', 'yes'),
(68, 68, 'Dune Messiah (Dune Chronicles #2)', 'Frank Herbert', '441172695', '1987-07-15', 'Ace Books', 'yes'),
(69, 69, 'Dreamer of Dune: The Biography of Frank Herbert', 'Brian Herbert', '765306476', '2004-07-01', 'Tor Books', 'yes'),
(70, 70, 'Heretics of Dune (Dune Chronicles #5)', 'Frank Herbert', '399128980', '1984-04-16', 'Putnam', 'yes'),
(71, 71, 'The Road to Dune', 'Frank Herbert/Brian Herbert/Kevin J. Anderson', '765353709', '2006-08-29', 'Tor Science Fiction', 'yes'),
(72, 72, 'Heretics of Dune (Dune Chronicles #5)', 'Frank Herbert', '441328008', '1987-08-15', 'Ace Books', 'yes'),
(73, 73, 'The Lord of the Rings: The Art of the Fellowship of the Ring', 'Gary Russell', '618212906', '2002-06-12', 'Houghton Mifflin Harcourt', 'yes'),
(74, 74, 'The Power of One (The Power of One #1)', 'Bryce Courtenay', '034541005X', '1996-09-29', 'Ballantine Books', 'yes'),
(75, 75, 'The Power of One (The Power of One #1)', 'Bryce Courtenay', '385732546', '2005-09-13', 'Delacorte Books for Young Readers', 'yes'),
(76, 76, 'The Power of One: One Person One Rule One Month', 'John C. Maxwell/Stephen R. Graves/Thomas G. Addington', '785260056', '2004-11-01', 'Thomas Nelson', 'yes'),
(77, 77, 'Power of an Hour: Business and Life Mastery in One Hour a Week', 'Dave Lakhani', '471780936', '2006-05-19', 'Wiley', 'yes'),
(78, 78, 'The Power of One: The Solo Play for Playwrights Actors and Directors', 'Louis E. Catron', '325001537', '2000-02-07', 'Heinemann Drama', 'yes'),
(79, 79, 'How to Buy Sell & Profit on eBay: Kick-Start Your Home-Based Business in Just Thirty Days', 'Adam Ginsberg', '006076287X', '2005-05-03', 'William Morrow Paperbacks', 'yes'),
(80, 80, 'eBay for Dummies', 'Marsha Collier', '470045299', '2006-10-30', 'Wiley', 'yes'),
(81, 81, 'What to Sell on ebay and Where to Get It: The Definitive Guide to Product Sourcing for eBay and Beyond', 'Chris Malta/Lisa Suttora', '72262788', '2006-01-24', 'McGraw-Hill', 'yes'),
(82, 82, 'Starting an eBay Business for Dummies', 'Marsha Collier', '764569244', '2004-09-17', 'Wiley', 'yes'),
(83, 83, 'eBay: Top 100 Simplified Tips & Tricks', 'Julia Wilkinson', '471933821', '2006-06-06', 'Wiley', 'yes'),
(84, 84, 'ebay Timesaving Techniques for Dummies', 'Marsha Collier', '764559915', '2004-05-31', 'Wiley', 'yes'),
(85, 85, 'eBay Business All-in-One Desk Reference for Dummies', 'Marsha Collier', '764584383', '2005-04-25', 'Wiley', 'yes'),
(86, 86, 'Ruby Cookbook', 'Lucas Carlson/Leonard Richardson', '596523696', '2006-07-29', 'O\'Reilly Media', 'yes'),
(87, 87, 'Ruby Ann\'s Down Home Trailer Park Cookbook', 'Ruby Ann Boxcar', '806523492', '2005-05-03', 'Citadel', 'yes'),
(88, 88, 'Ruby Ann\'s Down Home Trailer Park BBQin\' Cookbook', 'Ruby Ann Boxcar', '806525363', '2005-05-03', 'Citadel', 'yes'),
(89, 89, 'Rails Cookbook: Recipes for Rapid Web Development with Ruby', 'Rob Orsini', '596527314', '2007-01-01', 'O\'Reilly Media', 'yes'),
(90, 90, 'Anna Karenina', 'Leo Tolstoy/Richard Pevear/Larissa Volokhonsky', '143035002', '2004-05-31', 'Penguin Classics', 'yes'),
(91, 91, 'Anna Karenina', 'Leo Tolstoy/David Magarshack/Priscilla Meyer', '451528611', '2002-11-05', 'Signet', 'yes'),
(92, 92, 'Anna Karenina', 'Leo Tolstoy/Richard Pevear/Larissa Volokhonsky/John Bayley', '140449175', '2003-01-30', 'Penguin Books', 'yes'),
(93, 93, 'CliffsNotes on Tolstoy\'s Anna Karenina', 'Marianne Sturman/Leo Tolstoy', '822001837', '1965-11-26', 'Cliffs Notes', 'yes'),
(94, 94, 'Anna Karenina', 'Leo Tolstoy/Amy Mandelker/Constance Garnett', '1593080271', '2003-07-01', 'Barnes & Noble Classics', 'yes'),
(95, 95, 'Anna Karenina', 'Leo Tolstoy/Louise Maude/Aylmer Maude', '486437965', '2004-11-23', 'Dover Publications', 'yes'),
(96, 96, 'Anna Karenina', 'Leo Tolstoy/Constance Garnett/Amy Mandelker', '1593081774', '2004-08-26', 'Barnes & Noble', 'yes'),
(97, 97, 'Dinner with Anna Karenina', 'Gloria Goldreich', '778322270', '2006-01-28', 'Mira Books', 'yes'),
(98, 98, 'Tolstoy: Anna Karenina', 'Anthony Thorlby', '521313252', '1987-11-26', 'Cambridge University Press', 'yes'),
(99, 99, 'Untouchable', 'Mulk Raj Anand/E.M. Forster', '140183957', '1990-07-03', 'Penguin Books', 'yes'),
(100, 100, 'You Bright and Risen Angels', 'William T. Vollmann', '140110879', '1988-12-01', 'Penguin Books', 'yes'),
(101, 101, 'The Ice-Shirt (Seven Dreams #1)', 'William T. Vollmann', '140131965', '1993-08-01', 'Penguin Books', 'yes'),
(102, 102, 'Poor People', 'William T. Vollmann', '60878827', '2007-02-27', 'Ecco', 'yes'),
(103, 103, 'Las aventuras de Tom Sawyer', 'Mark Twain', '8497646983', '2006-05-28', 'Edimat Libros', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `book_rented`
--

CREATE TABLE `book_rented` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_date` datetime NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rented_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_rented`
--

INSERT INTO `book_rented` (`id`, `book_id`, `title`, `author`, `published_date`, `publisher`, `isbn`, `user_email`, `rented_date`, `created_at`, `updated_at`) VALUES
(22, 2, 'Harry Potter and the Order of the Phoenix (Harry Potter #5)', 'J.K. Rowling/Mary GrandPrÃ©', '2004-09-01 00:00:00', 'Scholastic Inc.', '439358078', 'hello1@gmail.com', '2023-10-12 22:18:20', '2023-10-12 17:18:20', '2023-10-12 17:18:20'),
(23, 3, 'Harry Potter and the Chamber of Secrets (Harry Potter #2)', 'J.K. Rowling', '2003-11-01 00:00:00', 'Scholastic', '439554896', 'hello1@gmail.com', '2023-10-12 22:18:28', '2023-10-12 17:18:28', '2023-10-12 17:18:28'),
(29, 4, 'Harry Potter and the Prisoner of Azkaban (Harry Potter #3)', 'J.K. Rowling/Mary GrandPrÃ©', '2004-05-01 00:00:00', 'Scholastic Inc.', '043965548X', 'test_user1@gmail.com', '2023-10-12 22:23:33', '2023-10-12 17:23:33', '2023-10-12 17:23:33'),
(30, 5, 'Harry Potter Boxed Set Books 1-5 (Harry Potter #1-5)', 'J.K. Rowling/Mary GrandPrÃ©', '2004-09-13 00:00:00', 'Scholastic', '439682584', 'test_user1@gmail.com', '2023-10-12 22:23:40', '2023-10-12 17:23:40', '2023-10-12 17:23:40'),
(31, 103, 'Las aventuras de Tom Sawyer', 'Mark Twain', '2006-05-28 00:00:00', 'Edimat Libros', '8497646983', 'test_user1@gmail.com', '2023-10-12 21:04:47', '2023-10-12 17:26:11', '2023-10-12 17:26:11'),
(33, 1, 'Harry Potter and the Half-Blood Prince (Harry Potter #6)', 'J.K. Rowling/Mary GrandPrÃ©', '2006-09-16 00:00:00', 'Scholastic Inc.', '439785960', 'nabeelaltaf@outlook.com', '2023-10-13 21:47:30', '2023-10-13 16:47:30', '2023-10-13 16:47:30'),
(34, 6, 'Unauthorized Harry Potter Book Seven News: \"Half-Blood Prince\" Analysis and Speculation', 'W. Frederick Zimmerman', '2005-04-26 00:00:00', 'Nimble Books', '976540606', 'nabeelaltaf@outlook.com', '2023-10-13 22:29:07', '2023-10-13 17:29:07', '2023-10-13 17:29:07'),
(35, 16, 'In a Sunburned Country', 'Bill Bryson', '2001-05-15 00:00:00', 'Broadway Books', '767903862', 'xyz@xyz.com', '2023-10-14 00:39:59', '2023-10-13 19:39:59', '2023-10-13 19:39:59');

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
(2, '2023_10_09_130204_create_users_tale', 1),
(3, '2023_10_09_134603_add_image_name_col_in_user_table', 2),
(4, '2023_10_10_194823_create_book_table', 3),
(5, '2023_10_10_195851_add__genre_col_in_books_table', 4),
(6, '2023_10_10_201314_create_isbn_col_in_book_table', 5),
(7, '2023_10_10_201852_add_books_rented_col__in_user_table', 6),
(8, '2023_10_11_183727_make_rented_books_table', 7),
(9, '2023_10_11_190444_add_date_column_in_book_rented_table', 8);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `books_rented` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image_name`, `books_rented`, `created_at`, `updated_at`) VALUES
(3, 'xyz', 'xyz@xyz.com', '$2y$10$.F64hhiFOZQv4uN08DMIZOqfFHDo2rDQJRf/z49NgVP8uuUjShDJG', 'fVOTddlDdCrDpsCAhrkIhhLunXKEvujWCwj5J6hV.jpg', 0, '2023-10-09 14:31:19', '2023-10-13 14:39:35'),
(4, 'test_user1', 'test_user1@gmail.com', '$2y$10$lohc9fAN47lNn30NhjwSIO6dZy91HRO3ujmNq/NpYvqKL/IeBrGiC', 'PMICbgTJQUoEAjyDixrjztG7p2mRbkWSi5XgK3gE.jpg', NULL, '2023-10-10 15:29:05', '2023-10-13 14:41:29'),
(5, 'hello1', 'hello1@gmail.com', '$2y$10$5b9NJdKxB.8rKV6wjrEOOuC0C8UbzGHG89138H1RFi2mUmB5F38lS', 'pahJn6STnyF4wEOrZYIQcN2vNBVcZuZlzjTEcCVX.jpg', NULL, '2023-10-11 17:15:28', '2023-10-13 14:40:39'),
(6, 'nabeel', 'nabeelaltaf@outlook.com', '$2y$10$n.QOC3gMx6qOqSUcQ/MuwuaBaTY1XlXnDaWEzzqG/ggPu0bcRyMhq', 'v8Q2b6Wthcn9d6mu00Gpm7BI9nbBWQxsgoISI71x.jpg', NULL, '2023-10-13 11:47:11', '2023-10-13 14:39:11'),
(8, 'test_user_2', 'test_user2@gmail.com', '$2y$10$8m3mCorh/yCXa4350Psju.QAdjo3CFwBF1/gDNFdtVahAp7A/58pC', 'FecRCU6woPposNAi4zBgICzo420h5KSskxd1uicQ.jpg', NULL, '2023-10-13 15:02:43', '2023-10-13 15:08:46'),
(9, 'test_user_3', 'test_user3@gmail.com', '$2y$10$62Fx.x0uphkWV2gLZ7XEEuLgHZC31EE5uZ94DqXVxlAlfEA8cZnxC', 'liAiwOFv0QKhNcXvfgfTCCBS3YoyCIgUXTkoANPQ.jpg', NULL, '2023-10-13 15:05:03', '2023-10-13 15:05:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_table`
--
ALTER TABLE `books_table`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `book_rented`
--
ALTER TABLE `book_rented`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books_table`
--
ALTER TABLE `books_table`
  MODIFY `Book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `book_rented`
--
ALTER TABLE `book_rented`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
