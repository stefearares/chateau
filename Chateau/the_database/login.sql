-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 08:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `pass`) VALUES
(1, 'Rares', 'qwerty12'),
(2, 'test', '$2y$10$iN2YsWt/BlAiFhOsZq0wz.uYkkwYiezMjeJtIIBt9DaB/mLzjbu36'),
(3, 'Andra', '$2y$10$NUr1qq4ipXL5aMACJt9nQO2aBq7otqzg8pveSL7ugRYfeD9.WFv6u'),
(20, 'test12', '$2y$10$f10zO1EANfH1ZrN3lb56l.eR07FlFhcshpc.mIa4FVEiDeklmKyCm'),
(21, 'ioanstefea', '$2y$10$fQ6QwIP7vlkQWPWYFNZXSe5B5/XfQP0sOGRk25LDF9qRoXs0WQU1q'),
(22, 'viostefea', '$2y$10$rk5B7TlfsuMw3LY0nysdiuxw1Q4u7cojYM53T4UHt3oUNt36XkLlm'),
(23, 'test3', '$2y$10$6irYHRUCBzoMl4ZJGz7E5OV/uBPFVjWAE2oLRjBJBzfXJDL4aIX7u'),
(24, 'test4', '$2y$10$DcEdQaLdapvFpzVkDM6G5eqNWMgF7DJbu9.hTLBpUL5wRJDZEUg7e'),
(25, 'test6', '$2y$10$i3fIsTUVqkod6gT2CXaFweKo6whbCfXb32XQB.tpup4uChOTQmtha'),
(26, 'test10', '$2y$10$jNiZ8AJi3lhN3A0rAXz6IeE5LT4MonEZ5Okkc1hm9iizhhJ0H8NZG'),
(27, 'andra17', '$2y$10$AsLuioihlQzzC7j9P058COMn.Biu2TtwyEycrbjDFo9HOlFgnEH2W'),
(28, 'test11', '$2y$10$W7VS.yc2W1L8l7akYyTi1uBYCyBYfapgE4SX88sgFn.KVmft1dN9e'),
(29, 'test13', '$2y$10$xBAaAj3j8VOtTDK/ILXy2.RdiJ/1Xck2cwhjoFlXppbIyoC7JRlD6'),
(30, 'test14', '$2y$10$PGO2RHtykoNGzF031DhWWuQX79snvqk9X6Y/zPRaoMDJsVl24rTCK'),
(31, 'test15', '$2y$10$CFIAHdD2JCRW1n7iBiNXvuVvifbHHaDHlrjAsIXShW0QwFk7Lfq3S'),
(32, 'test16', '$2y$10$7cTB1IqWJ8JyHUrit93sYOwHcmjKhObSpEfkc0DAS9rwFVQV5Nwf2'),
(33, 'test17', '$2y$10$eCMgulC52CrEwaPp7kaydeVB4FoIOtFlwYzd.v/FOGJ3rbZP35NXa'),
(34, 'test18', '$2y$10$UQ2YhiZXUaTjwBMJwglY5OdY3s/veZkxYpnHXEjEPC4B1komQTRWi'),
(35, 'test19', '$2y$10$kAyV05d3l2mf9otO42hyFuc641O/T6N0suYjNGd.Okorkf2LbtNn.'),
(36, 'test20', '$2y$10$xbXlw2ivj6d2.qaSGCtktOBYJo/AFl/Td.ZsfVPSFhQLcw/L6CZHu'),
(37, 'test21', '$2y$10$Qqpge7m5X4h4nCPXhgXoL.cyq0VkGYt5jrlkTah4.yyZZ9tHIh1RO'),
(38, 'test22', '$2y$10$1kYUGTHeAd6dfdptZXBrcO0vgUsvQciWPCcUT3962TbvNEsQJgHN2'),
(39, 'test23', '$2y$10$Rzdx.GDmvoj49Ovk2C.G0O/hHLsOq0fXbyYomvCAPVn0zL0RQcyTW'),
(40, 'test24', '$2y$10$mfPoLoXKbe1O3f4GPlh4FuvaqK2GV9oOhXF.xmYZUdxC6WXFo5MnW'),
(41, 'test25', '$2y$10$uF1di6bytnm3nnGBeBWZ7.4RD7KXCFAupbcvC1OUyZj2rih9D5Z1.'),
(42, 'test26', '$2y$10$vhgV/tmUFFT.l6F.3.ygzu0s8A.KckyglNLFJh7HgfYuWvdM/u3Zq'),
(43, 'test28', '$2y$10$CgoU7Dk.mgekvgaGH8PDN.H29ZvZFnXuNeBi/9tr6hJtYiDpc7OzS'),
(44, 'test29', '$2y$10$xNluJf93hMFmzSyerFqPaukGZPWxR02E9hD9gi9pNcxw.IjfOnSUG'),
(45, 'test30', '$2y$10$zPPrXVtEgeOZGPLehKj2uOfr.i7m2NIBJorhI5mm.UjoxX/S4a5Wm'),
(46, 'test31', '$2y$10$YY1Oo5IMlSIYsonuYBDmNOnzDxOhUujnOzefUzz.qXwGdZRBOKqwS'),
(47, 'test32', '$2y$10$0JeesCX4EZbEk1dXCJ/qQ.2vxSwEtyFpp1Wcablnz9wBKFAzPiG5G'),
(48, 'test33', '$2y$10$ROXWycWHrcUuDDBX3k3H1OUGYSmmr6DTjsZTHyeeuRiR1NHmA2Pi2'),
(49, 'test34', '$2y$10$CmvQdk9en3TSMrsjyf5Cl.pFOYwiDJh.efLuZpv88ntrvEQ.FkIFS'),
(50, 'test35', '$2y$10$A2yn5PyOyNMp9gtsXhkoo.gG4IYZ2gRUaraWWe6lZuinR/tDm.CyK'),
(51, 'test36', '$2y$10$3UDgdUH7SpvehmqC1Ez3OeeeYkAy8rB33kGrdsBij3Bm.Tvu/Rdkq'),
(52, 'test37', '$2y$10$cBNtiupUlPH87aV8FPa05.gPEaHIpqqPQg3gY/QumleFidPrglmWO'),
(53, 'test38', '$2y$10$n3C/0bE5ChCChol0le4yzuyyNo.9gqN2IpWZK45aJ/G9eOyXBcozm'),
(54, 'test39', '$2y$10$Bs4V4AL6ptPoOgt3.3Q.8u1Ac5M3qDuCOT/yjtUFekUf9YjW0c6Cy'),
(55, 'test40', '$2y$10$i25JyWmGnItcC0akjTBTFuwei9j1WL0AYOcTW2PEUTeTnOJAcXKEO'),
(56, 'test41', '$2y$10$zCU.Z7lRo5JvrM/PqqDXhu7rFhdLIk83MPDhydP3gsVU/6mTptOsC'),
(57, 'test42', '$2y$10$dfeZ82rcWDTniqGB5GbEA.tTaT9/i2gwJESilCIttLRGIRkPvW33y'),
(58, 'test58', '$2y$10$rr9268ExRRMKeJx3Jm6VKuZPOsfpaHZjSHwKYlwm6vUrm1uHmo96O'),
(59, 'test59', '$2y$10$xA.T.A/9YTtVyMis2oI2KOw8GVwxVi.FQUXuRHgRpxA0AfQsnWsOC'),
(60, 'test60', '$2y$10$Xr7GPjSR4mc0qD0K6UfTBe5PAsAHQLFdcgx/eeJtRkAVg7JSDLDnG'),
(61, 'test61', '$2y$10$xEH7TAoqgPZo7NcItare9umCZa4nn56wTFeS6euJfSW0cyvkpjJZW'),
(62, 'test62', '$2y$10$i.QV2iscWZn.q4LOhzRwz.5pGCz3ujceXigNYts0H8DNN41A3Djqa'),
(63, 'test63', '$2y$10$hBDkJI70fNWarr46uECMcecLskMRGnunFzzjwwCVOwzYZ.DdjsNPq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
