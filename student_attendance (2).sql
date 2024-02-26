-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 03:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_record`
--

CREATE TABLE `students_record` (
  `s_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `course` text NOT NULL,
  `section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_record`
--

INSERT INTO `students_record` (`s_id`, `user_id`, `firstName`, `lastName`, `course`, `section`) VALUES
(6, 3, '', '', '', ''),
(10, 18, 'jay', 'ocat', 'BSIT 3B', '3b'),
(11, 18, 'mae', 'ocat', 'kkk', '3c'),
(15, 21, '', '', '', ''),
(17, 21, '', '', '', ''),
(18, 21, 'bae', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `user_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fName`, `lName`, `email`, `user_pass`) VALUES
(2, '', '', '', '$2y$10$QSGLEQpRl1vanBux64x1h.mj1W60IJAFgpjHkIFDGzr/inrFHPeHm'),
(3, '', '', '', '$2y$10$HjY6AoawqVvdtg4lVu4v3eF58TQO2L3.QNfU3c8qnPmXMbM1O6zha'),
(4, 'jay ', 'ocat', 'jayrtfgg@gmail.com', '$2y$10$yPmC2RYuV14JfKYu1y9T1egEdP5jkhTAR1LlpyJ/V7d3ctURAoERu'),
(5, 'jay ', 'ocat', 'jayrtfgg@gmail.com', '$2y$10$OuJGc2cFhbuJ0oIKvQ7/e.ZrGU84Gv7NkFWYfCG/fzAjEnRIKKcGK'),
(6, '', '', '', '$2y$10$mD9gGHDKoX9qQrU/2JPaauAQm/Sl9E6WKsWXH.CchatyB1PXmm.lC'),
(7, '', '', '', '$2y$10$3qehR3neju4o/JzIf8geLul0HvEUkbiG3flt/7xtXGfFvM94BP2k.'),
(8, 'jay ', 'ocat', 'jayrtfgg@gmail.com', '$2y$10$/.Yc49H4uSz7R3RDoqeasOdXwU1KjpxhQCl0qkPsWMHpC.x9sBkGO'),
(9, '', '', '', '$2y$10$aL4I1YBWYOIOBR/Aolv0HuCO/.by5Xm8GbD1XlH7fcpeP36UFxgya'),
(10, '', '', '', '$2y$10$PVAIqI6Sv6wDTjIl.Cc8T.M8zgGvfcJ4VgSD1wsk4QXF6owgeAc4O'),
(11, '', '', '', '$2y$10$ZUz8r7cTBImy3mbRQM0RquY4m5IXGoS4IbFgLNsr2I5l7d62LvoW6'),
(12, '', '', '', '$2y$10$8EPQwSdftpJSfJsochN.dee/cAbodySkP5mYqk2CMehRSlwNPIbPu'),
(13, '', '', '', '$2y$10$m2JJIGlcHPtRCc4p9cAY0ualofQxeTR1/ggUTphCMe1rLzV1LJ8FG'),
(14, '', '', '', '$2y$10$tGy9Rif5IIB3KYMhN8fgjOy5V5yB.BER8j39Fb0vldv.RmgIl0XFa'),
(15, '', '', '', '$2y$10$5z/0TYmNOoCcuFXqNd4/9u8tvV8dY2j8c/bouYu4pnAV.e7dPyohe'),
(16, 'jay ', 'ocat', 'jayrtfgg@gmail.com', '$2y$10$i6IK0XlEJsU6s9w1BQxEGunP8ya6cj.RcTJRXODMU0XBzF5tVbtUm'),
(17, 'jay ', 'ocat', 'jayrtfgg@gmail.com', '$2y$10$X/HUv9BlG8wmkzaK901hEuIY6Qe9MmFYKvyqzMF9XJKFFITJx36Ve'),
(18, '', '', '', '$2y$10$BqfSc2tLlUtJ5pqSCfEYB.g528OyyzlACN5SLnxoH5KVyIwwxZtkW'),
(19, 'jay ', 'ocat', 'jayrtfgg@gmail.com', '$2y$10$3//PRiLDbtx8gxDTzGxTMueR/AeLA7KrPxX4oS3E0qZwg1hxo/Q/G'),
(20, '', '', '', '$2y$10$qf4NX5KgiHuv9HqjVCtF1uuzCFxNE.HLqXcl.wCyw4kwkiOz6M2d6'),
(21, '', '', '', '$2y$10$XXI0RNpYAjXPCZy.tx0lGepnqi5WgRv4aD8MXR/vJ/ra/qgA2P/.6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_record`
--
ALTER TABLE `students_record`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_record`
--
ALTER TABLE `students_record`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
