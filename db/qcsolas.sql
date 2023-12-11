-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 08:37 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qcsolas`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_lhu`
--

CREATE TABLE `jenis_lhu` (
  `id` int(11) NOT NULL,
  `jenis_lhu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_lhu`
--

INSERT INTO `jenis_lhu` (`id`, `jenis_lhu`) VALUES
(1, 'Obat Jadi'),
(2, 'BBA'),
(3, 'BBP'),
(4, 'MikroBiologi BB'),
(5, 'MikroBiologi OJ'),
(7, 'BKP');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `produk_type` varchar(256) NOT NULL,
  `kode_produk` varchar(256) NOT NULL,
  `sales_type` varchar(256) DEFAULT NULL,
  `produk_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `produk_type`, `kode_produk`, `sales_type`, `produk_name`) VALUES
(1, 'Prodak Jadi', 'REGLARF F60', 'REG', 'Arfen Forte 60'),
(2, 'Prodak Jadi', 'NRTARF100', 'NON.REG', 'Arfen Kaplet'),
(3, 'Prodak Jadi', 'REGLARF60', 'REG', 'Arfen Suspensi 60'),
(4, 'Prodak Jadi', '3SKACLS50', '3S', 'Ascolas Kapsul 50'),
(5, 'Prodak Jadi', 'REGKAXN30', 'REG', 'Axtan Kapsul'),
(6, 'Prodak Jadi', 'REGLAXN60', 'REG', 'Axtan Sirup 60'),
(7, 'Prodak Jadi', 'REGIDBXF', 'REG', 'Baxcef'),
(8, 'Prodak Jadi', '3SCBTL', '3S', 'Bital'),
(9, 'Prodak Jadi', 'REGTBZN100', 'REG', 'Brazine Kaplet'),
(10, 'Prodak Jadi', '3STCFM100', '3S', 'Cafmosol Kaplet'),
(11, 'Prodak Jadi', '3SKCLM100', '3S', 'Calcimega Kapsul'),
(12, 'Prodak Jadi', 'REGKCRN', '', 'Carniten'),
(13, 'Prodak Jadi', '', '', 'Cefadroxil DS'),
(14, 'Prodak Jadi', '', '', 'Cefadroxil Kps'),
(15, 'Prodak Jadi', 'NRTCTL50', 'NON.REG', 'Cetrol Kaplet'),
(16, 'Prodak Jadi', '', '', 'Chlorphenamine Maleate'),
(17, 'Prodak Jadi', 'NRTCMX100', 'NON.REG', 'Cimexol Kaplet'),
(18, 'Prodak Jadi', 'NRTCLD100', 'NON.REG', 'Colidium Kaplet'),
(19, 'Prodak Jadi', '3SCCFT', '3S', 'Confortin'),
(20, 'Prodak Jadi', 'REGTCBXD4000.30', 'REG', 'Curbex D4000'),
(21, 'Prodak Jadi', 'REGLCBX100', 'REG', 'Curbexon Syrup 100'),
(22, 'Prodak Jadi', 'EXLCBX60', 'EXPORT', 'Curbexon Syrup 60 Ex.MYA'),
(23, 'Prodak Jadi', 'REGKCBV50', 'REG', 'Curbexvit Kapsul'),
(24, 'Prodak Jadi', 'REGLDXLF60', 'REG', 'Droxal Forte 60'),
(25, 'Prodak Jadi', 'REGKDXL50', 'REG', 'Droxal Kapsul'),
(26, 'Prodak Jadi', 'REGLDXL60', 'REG', 'Droxal Syrup 60'),
(27, 'Prodak Jadi', 'XELLENBL', '', 'Ellen White Body Lotion'),
(28, 'Prodak Jadi', 'REGIDFSZ', 'REG', 'Fastzol'),
(29, 'Prodak Jadi', 'REGKFXM30', 'REG', 'Fixam Kapsul'),
(30, 'Prodak Jadi', 'REGLFXM60', 'REG', 'Fixam Syrup 60'),
(31, 'Prodak Jadi', 'REGTFLG100', 'REG', 'Flagsol Kaplet'),
(32, 'Prodak Jadi', 'REGLFLG60', 'REG', 'Flagsol Syrup 60'),
(33, 'Prodak Jadi', 'REGTFLM50', 'REG', 'Flamoxi Kaplet'),
(34, 'Prodak Jadi', '3STFLT100', '3S', 'Folate Kaplet'),
(35, 'Prodak Jadi', 'REGKFLTN30', 'REG', 'Folaten Kapsul'),
(36, 'Prodak Jadi', 'REGLFTS120', 'REG', 'Fortusin Syrup 120'),
(37, 'Prodak Jadi', 'REGLFTS60', 'REG', 'Fortusin Syrup 60'),
(38, 'Prodak Jadi', 'EXLFTS60', 'Export', 'Fortusin Syrup 60 Ex.MYA'),
(39, 'Prodak Jadi', 'REGKFCT100', 'REG', 'Fucotrap Kapsul 100'),
(40, 'Prodak Jadi', 'REGKFCT50', 'REG', 'Fucotrap Kapsul 50'),
(41, 'Prodak Jadi', 'REGLFCT100', 'REG', 'Fucotrap Syrup 100'),
(42, 'Prodak Jadi', 'REGLGDL60', 'REG', 'Gigadryl Syrup 60'),
(43, 'Prodak Jadi', 'EXLGDLCAM60', 'Export', 'Gigadryl Syrup 60 Ex.CAM'),
(44, 'Prodak Jadi', 'EXLGDLMYA60', 'Export', 'Gigadryl Syrup 60 Ex.MYA'),
(45, 'Prodak Jadi', 'REGKGTS30', 'REG', 'Glutasol Kapsul 30'),
(46, 'Prodak Jadi', 'REGLKMS15', 'REG', 'Kamolas Drops 15'),
(47, 'Prodak Jadi', 'REGLKMS F60', 'REG', 'Kamolas Forte 60'),
(48, 'Prodak Jadi', 'NRTKMS100', 'NON.REG', 'Kamolas Kaplet'),
(49, 'Prodak Jadi', 'NRLKMS60', 'NON.REG', 'Kamolas Syrup 60'),
(50, 'Prodak Jadi', 'EXLKMS60', 'Export', 'Kamolas Syrup 60 Ex.MYA'),
(51, 'Prodak Jadi', 'REGKLAC50', 'REG', 'Lactasin Kapsul'),
(52, 'Prodak Jadi', 'REGKLXD20', 'REG', 'Lexid Kapsul'),
(53, 'Prodak Jadi', 'NRTLDF100', 'NON.REG', 'Lodecon Forte Kaplet'),
(54, 'Prodak Jadi', 'NRTLDC100', 'NON.REG', 'Lodecon Kaplet'),
(55, 'Prodak Jadi', 'EXTLDC100', 'Export', 'Lodecon Kaplet Ex.MYA'),
(56, 'Prodak Jadi', 'REGCLKS', 'REG', 'Loksin'),
(57, 'Prodak Jadi', 'XMEANINGFULBL500', '', 'Meaningful Beauty Lotion'),
(58, 'Prodak Jadi', 'XMEANINGFULBM500', '', 'Meaningful Beauty Milk'),
(59, 'Prodak Jadi', 'REGTMTSL8', 'REG', 'Methysol Kaplet'),
(60, 'Prodak Jadi', 'NRTMXL100', 'NON.REG', 'Moxalas Kaplet'),
(61, 'Prodak Jadi', 'NRLMXL60', 'NON.REG', 'Moxalas Suspensi 60'),
(62, 'Prodak Jadi', 'EXLMXL60', 'Export', 'Moxalas Suspensi 60 Ex.MYA'),
(63, 'Prodak Jadi', 'REGLMVR15', 'REG', 'Muveron Drops 15'),
(64, 'Prodak Jadi', 'REGLMVR100', 'REG', 'Muveron Syrup 100'),
(65, 'Prodak Jadi', 'REGTNTS100', 'REG', 'Nootrisol Kaplet'),
(66, 'Prodak Jadi', 'REGKNFL100', 'REG', 'Norflam Kapsul'),
(67, 'Prodak Jadi', '3SCNVS', '3S', 'Novelas'),
(68, 'Prodak Jadi', 'REGKOBN50', 'REG', 'Obdhamin Kapsul'),
(69, 'Prodak Jadi', 'NRTORP200', 'NON.REG', 'Orphen Kaplet'),
(70, 'Prodak Jadi', 'REGKOVP50', 'REG', 'Osvion Plus Kapsul'),
(71, 'Prodak Jadi', 'REGKOXL100', 'REG', 'Oxcal Kapsul'),
(72, 'Prodak Jadi', 'REGLPCM120', 'REG', 'Pectum Syrup 120'),
(73, 'Prodak Jadi', 'REGLPCM60', 'REG', 'Pectum Syrup 60'),
(74, 'Prodak Jadi', '3SKPMX50', '3S', 'Primunox Kapsul'),
(75, 'Prodak Jadi', 'REGKPSV50', 'REG', 'Proseval Kapsul'),
(76, 'Prodak Jadi', 'REGTQNX30', 'REG', 'Qinox Kaplet'),
(77, 'Prodak Jadi', 'REGTQNT20', 'REG', 'Quinotic Kaplet'),
(78, 'Prodak Jadi', 'NRKRED30', 'NON.REG', 'Redusec Kapsul'),
(79, 'Prodak Jadi', 'XSECRETBL', '', 'Secret Body Lotion'),
(80, 'Prodak Jadi', 'XSECRETBM', '', 'Secret Body Milk'),
(81, 'Prodak Jadi', 'XSECRETREDFLOWERBL', '', 'Secret Red Flower Soft Body Lotion'),
(82, 'Prodak Jadi', 'XSECRETREDFLOWERBM', '', 'Secret Red Flower Soft Body Milk '),
(83, 'Prodak Jadi', 'NRTSIN30', 'NON.REG', 'Sintrol Kaplet'),
(84, 'Prodak Jadi', 'REGIDSFX', 'REG', 'Solafexone'),
(85, 'Prodak Jadi', '3SLSFZ60', '3S', 'Solafluz Syrup 60'),
(86, 'Prodak Jadi', 'EXLSFZ60', 'Export', 'Solafluz Syrup 60 Ex.MYA'),
(87, 'Prodak Jadi', 'REGTSLN100', 'REG', 'Solaneuron Kaplet'),
(88, 'Prodak Jadi', 'NRTSLC100', 'NON.REG', 'Solasic Kaplet'),
(89, 'Prodak Jadi', 'EXTSLC100', 'Export', 'Solasic Kaplet Ex.MYA'),
(90, 'Prodak Jadi', 'NRLSTM DS60', 'NON.REG', 'Solathim Dry Syrup 60'),
(91, 'Prodak Jadi', 'NRKSTM100', 'NON.REG', 'Solathim Kapsul'),
(92, 'Prodak Jadi', 'NRTSDX200', 'NON.REG', 'Soldextam Kaplet'),
(93, 'Prodak Jadi', 'NRLSPO DS60', 'NON.REG', 'Solpenox Dry Syrup 60'),
(94, 'Prodak Jadi', 'EXLSPO DS60', 'Export', 'Solpenox Dry Syrup 60 Ex.MYA'),
(95, 'Prodak Jadi', 'NRTSPO100', 'NON.REG', 'Solpenox Kaplet'),
(96, 'Prodak Jadi', 'REGLSPS100', 'REG', 'Solpepsa Syrup 100'),
(97, 'Prodak Jadi', 'NRKSTL100', 'NON.REG', 'Soltralin Kapsul'),
(98, 'Prodak Jadi', 'REGLSBD15', 'REG', 'Solvita Baby Drops 15'),
(99, 'Prodak Jadi', 'EXLSBD15', 'Export', 'Solvita Baby Drops 15 Ex.MYA'),
(100, 'Prodak Jadi', '3SKSVC50', '3S', 'Solvita C Kapsul'),
(101, 'Prodak Jadi', '3STSVD1000', '3S', 'Solvita D 1000 Kaplet'),
(102, 'Prodak Jadi', '3SKSVDEX50', '3S', 'Solvita Dex Kapsul'),
(103, 'Prodak Jadi', '3SKSVJOINT50', '3S', 'Solvita Joint Kapsul'),
(104, 'Prodak Jadi', '3SKSVMAX30', '3S', 'Solvita Max 30 kapsul'),
(105, 'Prodak Jadi', '3SKSVMAX50', '3S', 'Solvita Max Kapsul 50'),
(106, 'Prodak Jadi', '3SLSVP60', '3S', 'Solvita Plus Syrup 60'),
(107, 'Prodak Jadi', 'EXLSVPCAM60', 'Export', 'Solvita Plus Syrup 60 Ex.CAM'),
(108, 'Prodak Jadi', 'EXLSVPMYA60', 'Export', 'Solvita Plus Syrup 60 Ex.MYA'),
(109, 'Prodak Jadi', '3SLSVA60', '3S', 'Solvita Syrup 60'),
(110, 'Prodak Jadi', 'EXLSVA60', 'Export', 'Solvita Syrup 60 Ex.MYA'),
(111, 'Prodak Jadi', '3SKSVZ100', '3S', 'Solvita Z 10 Kapsul'),
(112, 'Prodak Jadi', '3SKSVZ25x4', '3S', 'Solvita Z 4 Kapsul'),
(113, 'Prodak Jadi', '3SKSVZ50', '3S', 'Solvita Z Kapsul 50'),
(114, 'Prodak Jadi', '3STSVL100', '3S', 'Solvitral Kaplet'),
(115, 'Prodak Jadi', 'EXTSVL100', 'Export', 'Solvitral Kaplet Ex.MYA'),
(116, 'Prodak Jadi', '3SKSVN100', '3S', 'Solvitron Kapsul'),
(117, 'Prodak Jadi', 'X3SKSVN100MYA', '', 'Solvitron Kapsul Ex.MYA'),
(118, 'Prodak Jadi', 'NRLSVN60', 'NON.REG', 'Solvitron Syrup 60'),
(119, 'Prodak Jadi', 'REGKSTX50', 'REG', 'Stimox Kapsul'),
(120, 'Prodak Jadi', 'REGLSTX60', 'REG', 'Stimox Syrup 60'),
(121, 'Prodak Jadi', 'REGKTNSL30', 'REG', 'Tenasol Kapsul'),
(122, 'Prodak Jadi', 'NRTTCG100', 'NON.REG', 'Ticomag Kaplet'),
(123, 'Prodak Jadi', 'NRTTPM100', 'NON.REG', 'Topram Kaplet'),
(124, 'Prodak Jadi', '3SLTRD15', '3S', 'Truvit Drops 15'),
(125, 'Prodak Jadi', '3SLTRU60', '3S', 'Truvit Syrup 60'),
(126, 'Prodak Jadi', '3SKVGM30', '3S', 'Vegamon Kapsul'),
(127, 'Prodak Jadi', 'REGKVRN100', 'REG', 'Verona Kapsul'),
(128, 'Prodak Jadi', 'NRLVCD60', 'NON.REG', 'Vical-D Syrup 60'),
(129, 'Prodak Jadi', 'EXLVCDCAM60', 'Export', 'Vical-D Syrup 60 Ex.CAM'),
(130, 'Prodak Jadi', 'EXLVCDMYA60', 'Export', 'Vical-D Syrup 60 Ex.MYA'),
(131, 'Prodak Jadi', 'REGKVTX30', 'REG', 'Vistanax Kapsul'),
(132, 'Prodak Jadi', '3SKVTWL30', '3S', 'Vitawell Kapsul'),
(133, 'Prodak Jadi', '3SKVTM100', '3S', 'Vitromega Kapsul'),
(134, 'Prodak Jadi', 'X3SKVTM100CAM', '', 'Vitromega Kapsul Ex.CAM'),
(135, 'Prodak Jadi', 'EXKVTM100', 'Export', 'Vitromega Kapsul Ex.MYA'),
(136, 'Prodak Jadi', 'REGKVLX50', 'REG', 'Voldilex Kapsul'),
(137, 'Prodak Jadi', 'REGKVMLS50', 'REG', 'Vomilas Kapsul'),
(138, 'Prodak Jadi', 'NRTXLM100', 'NON.REG', 'Xicalom Kaplet'),
(139, 'Prodak Jadi', 'REGILZTR', 'REG', 'Zetron'),
(140, 'Prodak Jadi', 'REGTZTH', 'REG', 'Zithrolas Kaplet'),
(141, 'Bahan Baku', 'B006', '', 'AMB'),
(142, 'Bahan Baku', 'B001', '', 'Acetone'),
(143, 'Bahan Baku', 'B002', '', 'Acid Citric / Asam Sitrat anhidrat'),
(144, 'Bahan Baku', 'A001', '', 'Acid Undecylenic'),
(145, 'Bahan Baku', 'B003', '', 'Aerolac CS 183'),
(146, 'Bahan Baku', 'B004', '', 'Aerosil / Colloidal Silicon Dioxide'),
(147, 'Bahan Baku', 'A002', '', 'Al. Kalium Sulfat /Tawas'),
(148, 'Bahan Baku', 'A003', '', 'Al. Kloral Hidrat ACH 232'),
(149, 'Bahan Baku', 'A004', '', 'Alii Sativi Bulbus Extract / Garlic Extract'),
(150, 'Bahan Baku', 'A160', '', 'Alium Sativum Oil'),
(151, 'Bahan Baku', 'B169', '', 'Alkohol Bilas'),
(152, 'Bahan Baku', 'B170', '', 'Alkohol Non Cukai'),
(153, 'Bahan Baku', 'A005', '', 'Allantoin'),
(154, 'Bahan Baku', 'A006', '', 'Aloevera Ext Liquid'),
(155, 'Bahan Baku', 'A055', '', 'Aluminium Hydroxide dried gel'),
(156, 'Bahan Baku', 'B007', '', 'Amilum Manihot'),
(157, 'Bahan Baku', 'B008', '', 'Amilum Maydis'),
(158, 'Bahan Baku', 'A007', '', 'Ammonium chloride'),
(159, 'Bahan Baku', 'A008', '', 'Amoxicillin Trihidrat Compacted'),
(160, 'Bahan Baku', 'A009', '', 'Amoxicillin Trihidrat Powder'),
(161, 'Bahan Baku', 'B009', '', 'Apple Green'),
(162, 'Bahan Baku', 'B010', '', 'AquaDM'),
(163, 'Bahan Baku', 'A155', '', 'Arbutin Beta (Pro B)'),
(164, 'Bahan Baku', 'A010', '', 'Areca Catechu Ext.sicc'),
(165, 'Bahan Baku', 'A011', '', 'Asam Benzoat'),
(166, 'Bahan Baku', 'A012', '', 'Asam Folat'),
(167, 'Bahan Baku', 'A013', '', 'Asam Mefenamat Powder'),
(168, 'Bahan Baku', 'B011', '', 'Asam Oleat'),
(169, 'Bahan Baku', 'A014', '', 'Asam Salisilat'),
(170, 'Bahan Baku', 'B012', '', 'Asam Stearat'),
(171, 'Bahan Baku', 'B013', '', 'Aspartam'),
(172, 'Bahan Baku', 'A015', '', 'Astaxanthin Beadlet 2,5%'),
(173, 'Bahan Baku', 'A016', '', 'Astaxanthin oil 10%'),
(174, 'Bahan Baku', 'A017', '', 'Attapulgit'),
(175, 'Bahan Baku', 'B014', '', 'Avicel PH 101 / Microcrystaline Cellulose PH 101'),
(176, 'Bahan Baku', 'B015', '', 'Avicel PH102 / Microcrystaline Cellulose PH 102'),
(177, 'Bahan Baku', 'B016', '', 'Avicel RC 591'),
(178, 'Bahan Baku', 'A018', '', 'Banaba Extrak'),
(179, 'Bahan Baku', 'B017', '', 'Banana Flavour Liq 51466 C'),
(180, 'Bahan Baku', 'B018', '', 'Belsil 040'),
(181, 'Bahan Baku', 'B019', '', 'Belsil DMC 100/ Dimethicone'),
(182, 'Bahan Baku', 'A019', '', 'Beta Caroten 10 % '),
(183, 'Bahan Baku', 'A020', '', 'Betamethason Diprop.'),
(184, 'Bahan Baku', 'A021', '', 'Bilberry Dry Extract'),
(185, 'Bahan Baku', 'A022', '', 'Biotin'),
(186, 'Bahan Baku', 'B020', '', 'Blackcurrant Flavour Liquid'),
(187, 'Bahan Baku', 'B174', '', 'Blossomy Floret ex Mane'),
(188, 'Bahan Baku', 'A023', '', 'Borax'),
(189, 'Bahan Baku', 'A024', '', 'Bromhexine HCl'),
(190, 'Bahan Baku', 'A025', '', 'Caffein'),
(191, 'Bahan Baku', 'B021', '', 'Calamine'),
(192, 'Bahan Baku', 'A026', '', 'Calcium Gluconate'),
(193, 'Bahan Baku', 'A027', '', 'Calcium Lactate'),
(194, 'Bahan Baku', 'A028', '', 'Calcium Panthothenate'),
(195, 'Bahan Baku', 'A029', '', 'Camelia Sinensis Extract / Green Tea Extract'),
(196, 'Bahan Baku', 'B022', '', 'Caramel Colour'),
(197, 'Bahan Baku', 'A030', '', 'Carbazocrom Sod. Sulfat'),
(198, 'Bahan Baku', 'B023', '', 'Carbopol 940 / Synthalen K'),
(199, 'Bahan Baku', 'B042', '', 'Carmoisine Lake'),
(200, 'Bahan Baku', 'B024', '', 'Cassa White Parfum'),
(201, 'Bahan Baku', 'A031', '', 'Cefadroxil Monohydrate Compected ex DSM'),
(202, 'Bahan Baku', 'A032', '', 'Cefadroxil Monohydrate Powder ex DSM'),
(203, 'Bahan Baku', 'A033', '', 'Cefixime Trihidrate micronised'),
(204, 'Bahan Baku', 'A158', '', 'Ceftriaxone Sod ex Hammy Korea'),
(205, 'Bahan Baku', 'B025', '', 'Cellogen FSH / Sodium Carboxy Methyl Cellulose'),
(206, 'Bahan Baku', 'B026', '', 'Cerra Alba / White Beeswax'),
(207, 'Bahan Baku', 'B027', '', 'Cetil Alkohol'),
(208, 'Bahan Baku', 'A034', '', 'Cetirizine HCl'),
(209, 'Bahan Baku', 'B028', '', 'Cetostearyl Alkohol / Lanette O'),
(210, 'Bahan Baku', 'A035', '', 'Chamomile Extrak'),
(211, 'Bahan Baku', 'B029', '', 'Champora'),
(212, 'Bahan Baku', 'B167', '', 'Chic Parfume (Megasetia)'),
(213, 'Bahan Baku', 'A036', '', 'Chloramphenicol Base'),
(214, 'Bahan Baku', 'B030', '', 'Chlorhexidin HCl'),
(215, 'Bahan Baku', 'A037', '', 'Chlorpheniramin Maleat /CTM'),
(216, 'Bahan Baku', 'A038', '', 'Chondroitin Sulphate'),
(217, 'Bahan Baku', 'A039', '', 'Cimetidine'),
(218, 'Bahan Baku', 'A040', '', 'Cimifuga rasemosa Ext sicc / Black Cohosh'),
(219, 'Bahan Baku', 'A041', '', 'Cinnamon Bark extract'),
(220, 'Bahan Baku', 'A042', '', 'Cinnarizine'),
(221, 'Bahan Baku', 'A043', '', 'Ciprofloxacin HCl Powder'),
(222, 'Bahan Baku', 'A044', '', 'Clobetasol Prop.'),
(223, 'Bahan Baku', 'A156', '', 'Co-Q 10'),
(224, 'Bahan Baku', 'A045', '', 'Colostrum Bovine'),
(225, 'Bahan Baku', 'B031', '', 'Cuddle Parfum'),
(226, 'Bahan Baku', 'A046', '', 'Cupri Sulfat'),
(227, 'Bahan Baku', 'A047', '', 'Curcuma Domestica Ext.sicc'),
(228, 'Bahan Baku', 'A048', '', 'Curcuma Xanthorriza Extr.Sicc'),
(229, 'Bahan Baku', 'B033', '', 'DM Hidantoin Liquid / Nipaguard DMDMH'),
(230, 'Bahan Baku', 'A049', '', 'Dexamethasone'),
(231, 'Bahan Baku', 'A050', '', 'Dexchlorpheniramine Maleate'),
(232, 'Bahan Baku', 'A051', '', 'Dexpanthenol'),
(233, 'Bahan Baku', 'A052', '', 'Dextromethorphan HBr'),
(234, 'Bahan Baku', 'A053', '', 'Dibasic Calsium Phosphate'),
(235, 'Bahan Baku', 'B032', '', 'Dicafos Granul'),
(236, 'Bahan Baku', 'A054', '', 'Diphenhydramine HCl'),
(237, 'Bahan Baku', 'B130', '', 'Disodium EDTA'),
(238, 'Bahan Baku', 'B162', '', 'Disolcel (Crosscarmellose Sodium)'),
(239, 'Bahan Baku', 'A121', '', 'Driphorm-HiDHA 50'),
(240, 'Bahan Baku', 'B034', '', 'Dry Flo PC'),
(241, 'Bahan Baku', 'A056', '', 'Dry Vitamin A Acetate 500'),
(242, 'Bahan Baku', 'A057', '', 'Dry Vitamin D3, Type 100 CWS'),
(243, 'Bahan Baku', 'A058', '', 'Dry Vitamin E 50% CWS'),
(244, 'Bahan Baku', 'B035', '', 'Dye tartrazine Yellow'),
(245, 'Bahan Baku', 'A059', '', 'Echinaceae Purpurea Dry Ekstrak'),
(246, 'Bahan Baku', 'B039', '', 'Edicol Erythrosin'),
(247, 'Bahan Baku', 'B036', '', 'Edicol S tartrazine'),
(248, 'Bahan Baku', 'A060', '', 'Ekstrak Liver'),
(249, 'Bahan Baku', 'B037', '', 'Emulgade 1000 NI/Cetomagrogol '),
(250, 'Bahan Baku', 'B005', '', 'Ethanol 96%'),
(251, 'Bahan Baku', 'B038', '', 'Ethylcellulose'),
(252, 'Bahan Baku', 'A061', '', 'Eucaliptus oil / Minyak  Kayu putih'),
(253, 'Bahan Baku', 'B040', '', 'Eurocert Rasberry red'),
(254, 'Bahan Baku', 'B041', '', 'Eurocert Sunset Yellow C115986 / Edigol Sunset Yellow C1 No. 15985'),
(255, 'Bahan Baku', 'B043', '', 'Eurolake Sunset Yellow'),
(256, 'Bahan Baku', 'B044', '', 'EurolakeTartrazin19140 / FD&C Yellow 5 Alum Lake'),
(257, 'Bahan Baku', 'A164', '', 'Extract Aloe Vera'),
(258, 'Bahan Baku', 'A062', '', 'Extract Thymi'),
(259, 'Bahan Baku', 'A064', '', 'Ferrous  Fumarate'),
(260, 'Bahan Baku', 'A063', '', 'Ferrous Gluconate'),
(261, 'Bahan Baku', 'A166', '', 'Fish Collagen'),
(262, 'Bahan Baku', 'B165', '', 'Fleurilia'),
(263, 'Bahan Baku', 'B176', '', 'Florite'),
(264, 'Bahan Baku', 'B045', '', 'Formalin'),
(265, 'Bahan Baku', 'B046', '', 'Fres Apricot'),
(266, 'Bahan Baku', 'A065', '', 'Fucoidan'),
(267, 'Bahan Baku', 'A066', '', 'Ginkgo Biloba Extract Powder'),
(268, 'Bahan Baku', 'A067', '', 'Ginseng Ext.sicc'),
(269, 'Bahan Baku', 'A068', '', 'Gliseril Guaiacolat / Guaifenesin'),
(270, 'Bahan Baku', 'B047', '', 'Glucosa Liquid'),
(271, 'Bahan Baku', 'A069', '', 'Glukosamine HCl'),
(272, 'Bahan Baku', 'B049', '', 'Glycerin'),
(273, 'Bahan Baku', 'A071', '', 'Glycyrrhiza glabra radix EX VICA'),
(274, 'Bahan Baku', 'B048', '', 'Glyseril Monostearat / Cutin'),
(275, 'Bahan Baku', 'A072', '', 'Grindelia Camporum Ext sicc'),
(276, 'Bahan Baku', 'A073', '', 'Guazumae Folium Extract'),
(277, 'Bahan Baku', 'A074', '', 'Gum Arabica'),
(278, 'Bahan Baku', 'A075', '', 'Gymnema Sylvestre Extract'),
(279, 'Bahan Baku', 'A076', '', 'Hidrokortison Asetat Micronized'),
(280, 'Bahan Baku', 'A077', '', 'Ibuprofen BP'),
(281, 'Bahan Baku', 'A165', '', 'Ibuprofen Micronized'),
(282, 'Bahan Baku', 'B050', '', 'Icing Sugar'),
(283, 'Bahan Baku', 'B051', '', 'Ionol / BHT'),
(284, 'Bahan Baku', 'B052', '', 'Iso Propil Alkohol (IPHA)'),
(285, 'Bahan Baku', 'B053', '', 'Isopropil Alkohol'),
(286, 'Bahan Baku', 'B054', '', 'Isopropyl Miristat'),
(287, 'Bahan Baku', 'A078', '', 'Kalium Iodida'),
(288, 'Bahan Baku', 'A079', '', 'Kaolin'),
(289, 'Bahan Baku', 'B055', '', 'Kapsul No. 0 KAST Green(563)-Yellow(462)'),
(290, 'Bahan Baku', 'B056', '', 'Kapsul No. 0 KATR /KCLM Caramel (126)-Ivory (412)'),
(291, 'Bahan Baku', 'B057', '', 'Kapsul No. 0 KCLM Caramel (126) - Ivory (412)'),
(292, 'Bahan Baku', 'B058', '', 'Kapsul No. 0 KDXL  Swedish Orange  -  Rich Yellow 22.724-41.738'),
(293, 'Bahan Baku', 'B059', '', 'Kapsul No. 0 KLAC Blue 663 - Yellow 463'),
(294, 'Bahan Baku', 'B060', '', 'Kapsul No. 0 KNFL Blue (663)-White (909)'),
(295, 'Bahan Baku', 'B061', '', 'Kapsul No. 0 KOBN  Maroon (763) - light pink (226)'),
(296, 'Bahan Baku', 'B062', '', 'Kapsul No. 0 KOSP Brown (161)- Yellow (463)'),
(297, 'Bahan Baku', 'B063', '', 'Kapsul No. 0 KOXL Green (563)-Ivory(414)'),
(298, 'Bahan Baku', 'B064', '', 'Kapsul No. 0 KPRI Maroon 763 - Pink 228'),
(299, 'Bahan Baku', 'B065', '', 'Kapsul No. 0 KPSV, SVZ  Scarlet  (278)- Orange (361)'),
(300, 'Bahan Baku', 'B067', '', 'Kapsul No. 0 KSTM 500 Green-L.Green (5610-5160)'),
(301, 'Bahan Baku', 'B068', '', 'Kapsul No. 0 KSTX Purple (722)-yellow (463)'),
(302, 'Bahan Baku', 'B069', '', 'Kapsul No. 0 KVTM Maroon  7760 -Ivory 4140, SVDex'),
(303, 'Bahan Baku', 'B070', '', 'Kapsul No. 0 KXMN Blue (663)-Ivory (412)'),
(304, 'Bahan Baku', 'B071', '', 'Kapsul No. 2 KAXT  Caramel (1260) - Brown ( 1900 )'),
(305, 'Bahan Baku', 'B072', '', 'Kapsul No. 2 KFCT Green Sparkle 13703 - 13703'),
(306, 'Bahan Baku', 'B073', '', 'Kapsul No. 2 KFXM Green Op (18.715) - L.Green Op(17.720)'),
(307, 'Bahan Baku', 'B074', '', 'Kapsul No. 2 KLXD 20 BlueOp (6840)-Ligth Blue Op.(6120)'),
(308, 'Bahan Baku', 'B075', '', 'Kapsul No. 2 KVLX  Pink (232) - Pink (232)'),
(309, 'Bahan Baku', 'B076', '', 'Kapsul No. 2 KVRN Scarlet(274)-Yellow(463)'),
(310, 'Bahan Baku', 'B079', '', 'Kapsul No.0 KLIV Warna'),
(311, 'Bahan Baku', 'B078', '', 'Kapsul No.0 KVGM   S Orange - S Yellow  '),
(312, 'Bahan Baku', 'B077', '', 'Kapsul No.0 KVTX,VGM, TSL  Warna M Maroon-M Maroon 33.724-33.724/7793-7793'),
(313, 'Bahan Baku', 'B080', '', 'Kapsul No.2 KFCT 100 Warna Blue Sparkle 03.708-03.708'),
(314, 'Bahan Baku', 'B083', '', 'Kapsul No.2 KSVN Mr/Mr (7760-7760) (33.727-33.724 Capsugel)'),
(315, 'Bahan Baku', 'B066', '', 'Kapsul no. 0 KSTL 500 Org 3500- Yellow 4630, CBV, SVC'),
(316, 'Bahan Baku', 'B081', '', 'Kapsul no.2 KRED  Pink 2320 - White 9090 ; 24.713-44.700'),
(317, 'Bahan Baku', 'B082', '', 'Kapsul no.2 KSTL 250 orange-orange 3540-3540'),
(318, 'Bahan Baku', 'B084', '', 'Kapsul no.2 SOLACHLOR 250 Blue-Blue 6940-6490'),
(319, 'Bahan Baku', 'B085', '', 'Kenzo Flower / Coquelicot R1 10709'),
(320, 'Bahan Baku', 'B086', '', 'Kolicoat Protect'),
(321, 'Bahan Baku', 'B163', '', 'Kollidon 25'),
(322, 'Bahan Baku', 'B161', '', 'Kollidon CL'),
(323, 'Bahan Baku', 'A157', '', 'L- Carnitine Fumarat'),
(324, 'Bahan Baku', 'A081', '', 'L-Arginine HCl'),
(325, 'Bahan Baku', 'A070', '', 'L-Glutamic Acid'),
(326, 'Bahan Baku', 'A167', '', 'L-Glutathione'),
(327, 'Bahan Baku', 'A084', '', 'L-Tripthophan'),
(328, 'Bahan Baku', 'B092', '', 'LHPC LH 11'),
(329, 'Bahan Baku', 'B175', '', 'Lact Supertab'),
(330, 'Bahan Baku', 'B168', '', 'Lactose Hydrate Mod Spray Dry Fast Flo'),
(331, 'Bahan Baku', 'B087', '', 'Laktose M 100'),
(332, 'Bahan Baku', 'B088', '', 'Laktose M 200'),
(333, 'Bahan Baku', 'B089', '', 'Laktose M 80'),
(334, 'Bahan Baku', 'A080', '', 'Lansoprazole Pellet 10 %'),
(335, 'Bahan Baku', 'A082', '', 'Lechitin'),
(336, 'Bahan Baku', 'B090', '', 'Lemon Flavour 502142 CT'),
(337, 'Bahan Baku', 'B091', '', 'Lemon flavour Liquid 51416 CE'),
(338, 'Bahan Baku', 'A083', '', 'Loperamide'),
(339, 'Bahan Baku', 'B093', '', 'Ludipress'),
(340, 'Bahan Baku', 'A085', '', 'Lutein 5%'),
(341, 'Bahan Baku', 'A086', '', 'Lysine HCl'),
(342, 'Bahan Baku', 'A087', '', 'Madu murni Liquid'),
(343, 'Bahan Baku', 'A088', '', 'Magnesium Hidroksida'),
(344, 'Bahan Baku', 'B094', '', 'Magnesium Stearate'),
(345, 'Bahan Baku', 'A089', '', 'Magnesium Sulfat'),
(346, 'Bahan Baku', 'A090', '', 'Mangan Sulfat'),
(347, 'Bahan Baku', 'B095', '', 'Manitol Kristal'),
(348, 'Bahan Baku', 'A091', '', 'Meloxicam'),
(349, 'Bahan Baku', 'B096', '', 'Menthol'),
(350, 'Bahan Baku', 'B097', '', 'Methilen Chlorid'),
(351, 'Bahan Baku', 'A173', '', 'Methyl Prednisolone'),
(352, 'Bahan Baku', 'A092', '', 'Methylsulfonilmethane'),
(353, 'Bahan Baku', 'A093', '', 'Metochloperamide HCl'),
(354, 'Bahan Baku', 'A161', '', 'Metronidazole Base'),
(355, 'Bahan Baku', 'A094', '', 'Metronidazole Benzoate'),
(356, 'Bahan Baku', 'A095', '', 'Mg. Aspartate'),
(357, 'Bahan Baku', 'B098', '', 'Milk Amino 20 Code 02500/Phytelene Witch Hazel/Camomile'),
(358, 'Bahan Baku', 'B171', '', 'Mint Flavour Liq'),
(359, 'Bahan Baku', 'A096', '', 'Mometasone Furoat Micronized'),
(360, 'Bahan Baku', 'A097', '', 'Naltrexone HCl'),
(361, 'Bahan Baku', 'A098', '', 'Natrium Flurida'),
(362, 'Bahan Baku', 'A169', '', 'Nattokinase (Soybean)'),
(363, 'Bahan Baku', 'B099', '', 'Neusillin UFLA / Magnesium Aluminium Silicate'),
(364, 'Bahan Baku', 'A099', '', 'Nicotinamide'),
(365, 'Bahan Baku', 'B100', '', 'Nipagin / Methyl p-Hidroksi benzoat / Methyl Paraben'),
(366, 'Bahan Baku', 'B101', '', 'Nipasol / Propil Paraben'),
(367, 'Bahan Baku', 'B102', '', 'Novemer'),
(368, 'Bahan Baku', 'B164', '', 'Ocean Fresh'),
(369, 'Bahan Baku', 'B103', '', 'Oleum Anisi'),
(370, 'Bahan Baku', 'A101', '', 'Olive Oil'),
(371, 'Bahan Baku', 'A102', '', 'Omega 3'),
(372, 'Bahan Baku', 'A103', '', 'Omeprazole Pellets 8,5%'),
(373, 'Bahan Baku', 'B104', '', 'Opa Dry II'),
(374, 'Bahan Baku', 'B105', '', 'Orange Ag'),
(375, 'Bahan Baku', 'B107', '', 'Orange Flavour Liq 51941 CE'),
(376, 'Bahan Baku', 'B106', '', 'Orange dry flavour'),
(377, 'Bahan Baku', 'B111', '', 'PEG 4000 / Polyethylene Glycol 4000'),
(378, 'Bahan Baku', 'B112', '', 'PEG 6000'),
(379, 'Bahan Baku', 'A104', '', 'Papain Ekstrak'),
(380, 'Bahan Baku', 'A105', '', 'Paracetamol Kristal'),
(381, 'Bahan Baku', 'A106', '', 'Paracetamol Micronized Ex Hebei Jiheng'),
(382, 'Bahan Baku', 'A107', '', 'Paracetamol Powder'),
(383, 'Bahan Baku', 'B109', '', 'Parafin Liquid'),
(384, 'Bahan Baku', 'B108', '', 'Parafin Solid Album'),
(385, 'Bahan Baku', 'B110', '', 'Peach Parfum'),
(386, 'Bahan Baku', 'B166', '', 'Peach Parfume (Megasetia)'),
(387, 'Bahan Baku', 'A108', '', 'Pectin'),
(388, 'Bahan Baku', 'B113', '', 'Pemulen'),
(389, 'Bahan Baku', 'B114', '', 'Pepermint oil Liq flavour'),
(390, 'Bahan Baku', 'B115', '', 'Pharmacoat 606'),
(391, 'Bahan Baku', 'B116', '', 'Pharmacoat 615'),
(392, 'Bahan Baku', 'A109', '', 'Phenylephrine HCl'),
(393, 'Bahan Baku', 'A110', '', 'Phyllanthus Niruri Herba Ext / Meniran'),
(394, 'Bahan Baku', 'A111', '', 'Piper betle Ext sicc'),
(395, 'Bahan Baku', 'A112', '', 'Piracetam'),
(396, 'Bahan Baku', 'A113', '', 'Piroxicam'),
(397, 'Bahan Baku', 'B118', '', 'Polishing Wax'),
(398, 'Bahan Baku', 'A114', '', 'Polyanthi Folium Extract'),
(399, 'Bahan Baku', 'A115', '', 'Portulaca Extrak '),
(400, 'Bahan Baku', 'B117', '', 'Povidone K-30'),
(401, 'Bahan Baku', 'A116', '', 'Prebiotik (Chycory Inulin Extrak) / Fos-P Pwd'),
(402, 'Bahan Baku', 'B160', '', 'Pregelatinized Starch/ Starch 1500'),
(403, 'Bahan Baku', 'B119', '', 'Primojel / Sod Starch Glicolat'),
(404, 'Bahan Baku', 'A117', '', 'Pro-B'),
(405, 'Bahan Baku', 'A118', '', 'Promethazine HCl'),
(406, 'Bahan Baku', 'B120', '', 'Propylene Glycol'),
(407, 'Bahan Baku', 'B121', '', 'Prosolv SMCC'),
(408, 'Bahan Baku', 'A119', '', 'Psidii Folium Ext.sicc'),
(409, 'Bahan Baku', 'A120', '', 'Pueraria Mirifica'),
(410, 'Bahan Baku', 'B159', '', 'RBD Soybean Oil'),
(411, 'Bahan Baku', 'A122', '', 'Rofufa 10-N-6 Oil / Omega 3,6'),
(412, 'Bahan Baku', 'A123', '', 'Rofufa 30-N3-Oil / DHA'),
(413, 'Bahan Baku', 'B173', '', 'Rosella Quartz ex Mane'),
(414, 'Bahan Baku', 'B122', '', 'Ruby Flavour 110866B'),
(415, 'Bahan Baku', 'B123', '', 'Saccharose / Sugar Type R1'),
(416, 'Bahan Baku', 'B124', '', 'Saccharose Sugar EEC No.1'),
(417, 'Bahan Baku', 'A162', '', 'Salbutamol Sulfat'),
(418, 'Bahan Baku', 'A124', '', 'Saurapus Androgynus / Sweet Leaf Bush (Daun Katuk)'),
(419, 'Bahan Baku', 'A100', '', 'Selenium / Lynside Forte 1000'),
(420, 'Bahan Baku', 'B178', '', 'Sepineo P 600'),
(421, 'Bahan Baku', 'B125', '', 'Seppic ( Seppigel )'),
(422, 'Bahan Baku', 'A126', '', 'Serotiopeptidase Ekstrak'),
(423, 'Bahan Baku', 'B172', '', 'SheffCoat PVA Plus'),
(424, 'Bahan Baku', 'A127', '', 'Simethicone'),
(425, 'Bahan Baku', 'A128', '', 'Simvastatin'),
(426, 'Bahan Baku', 'B177', '', 'Sipernat 50S'),
(427, 'Bahan Baku', 'B127', '', 'Sod. Benzoate'),
(428, 'Bahan Baku', 'B128', '', 'Sod. Cloride'),
(429, 'Bahan Baku', 'B129', '', 'Sod. Cyclamate'),
(430, 'Bahan Baku', 'B131', '', 'Sod. Fosfat Anhidrat'),
(431, 'Bahan Baku', 'B133', '', 'Sod. Lauril Sulfat / Texapon'),
(432, 'Bahan Baku', 'B134', '', 'Sod. Saccharin'),
(433, 'Bahan Baku', 'B135', '', 'Sod. Sitrat'),
(434, 'Bahan Baku', 'B136', '', 'Sodium Bi Carbonat ( Na2CO3)'),
(435, 'Bahan Baku', 'B132', '', 'Sodium Hydroxide'),
(436, 'Bahan Baku', 'B137', '', 'Sodium Metabisulfit'),
(437, 'Bahan Baku', 'A129', '', 'Sonchi Folium Extract'),
(438, 'Bahan Baku', 'B138', '', 'Sorbitan Oleate / Span 80'),
(439, 'Bahan Baku', 'B139', '', 'Sorbitol'),
(440, 'Bahan Baku', 'B141', '', 'Strawberry Powder Durarom'),
(441, 'Bahan Baku', 'B140', '', 'Strawberry flavour Liquid 42311 C'),
(442, 'Bahan Baku', 'B142', '', 'Strawbery flavour powder 52311'),
(443, 'Bahan Baku', 'A130', '', 'Succus Liquritae'),
(444, 'Bahan Baku', 'A168', '', 'Sucralfate'),
(445, 'Bahan Baku', 'B143', '', 'Sucralose'),
(446, 'Bahan Baku', 'A131', '', 'Sulfamethoxazole'),
(447, 'Bahan Baku', 'A132', '', 'Sulfur Powder'),
(448, 'Bahan Baku', 'A133', '', 'Sylimarin (Milk Thistle Extract 80%)'),
(449, 'Bahan Baku', 'B126', '', 'Synthetic Aluminium Silicate'),
(450, 'Bahan Baku', 'B144', '', 'Tab Coat MB'),
(451, 'Bahan Baku', 'B145', '', 'Tabletose'),
(452, 'Bahan Baku', 'B146', '', 'Talk'),
(453, 'Bahan Baku', 'B147', '', 'Talk Osmanthus'),
(454, 'Bahan Baku', 'A134', '', 'Taurine'),
(455, 'Bahan Baku', 'B148', '', 'Teepol'),
(456, 'Bahan Baku', 'A135', '', 'Tetracycline HCl'),
(457, 'Bahan Baku', 'A163', '', 'Theofilin Anhydrat'),
(458, 'Bahan Baku', 'A136', '', 'Thiamphenicol'),
(459, 'Bahan Baku', 'B149', '', 'Titanium dioxide'),
(460, 'Bahan Baku', 'A137', '', 'Triclosan'),
(461, 'Bahan Baku', 'B150', '', 'Trietanolamin'),
(462, 'Bahan Baku', 'A138', '', 'Trimethoprim'),
(463, 'Bahan Baku', 'B151', '', 'Tutti Frutty dry flavour'),
(464, 'Bahan Baku', 'B152', '', 'Tutty Frutty Flavour Liq'),
(465, 'Bahan Baku', 'B153', '', 'Tween 80 / Polysorbate 80'),
(466, 'Bahan Baku', 'B154', '', 'Ultrez 10'),
(467, 'Bahan Baku', 'A139', '', 'Valeriana Radix'),
(468, 'Bahan Baku', 'B155', '', 'Vanilla Flavour Liquid'),
(469, 'Bahan Baku', 'B156', '', 'Vaselin Album'),
(470, 'Bahan Baku', 'A159', '', 'Virgin Olive Oil'),
(471, 'Bahan Baku', 'A140', '', 'Vit B-2 HCl/ Riboflavin HCl'),
(472, 'Bahan Baku', 'A141', '', 'Vit B-2 Sod. Fosfat'),
(473, 'Bahan Baku', 'A142', '', 'Vit. A Palmitate Liquid'),
(474, 'Bahan Baku', 'A143', '', 'Vit. B-1 / Thiamine HCl'),
(475, 'Bahan Baku', 'A144', '', 'Vit. B-12 / Cyanocobalamine'),
(476, 'Bahan Baku', 'A145', '', 'Vit. B-6 / Pyridoxine HCl'),
(477, 'Bahan Baku', 'A146', '', 'Vit. D 3 Liquid'),
(478, 'Bahan Baku', 'B157', '', 'Vitacel A 300'),
(479, 'Bahan Baku', 'A147', '', 'Vitamin C Coated'),
(480, 'Bahan Baku', 'A148', '', 'Vitamin C Powder'),
(481, 'Bahan Baku', 'A149', '', 'Vitamin E Acetate Liquid'),
(482, 'Bahan Baku', 'A170', '', 'Vitamin K2'),
(483, 'Bahan Baku', 'A172', '', 'Wellmune'),
(484, 'Bahan Baku', 'B158', '', 'Xanthan Gum'),
(485, 'Bahan Baku', 'A150', '', 'Zeaxanthin'),
(486, 'Bahan Baku', 'A151', '', 'Zeng Oxid'),
(487, 'Bahan Baku', 'A171', '', 'Zinc Picolinate'),
(488, 'Bahan Baku', 'A125', '', 'Zinc Sulphate'),
(489, 'Bahan Baku', 'A152', '', 'Zingiberis officinalis rhizomae'),
(490, 'Bahan Baku', 'A153', '', 'Zn'),
(491, 'Bahan Baku', 'A154', '', 'Zn-Fosfat'),
(492, 'Bahan Kemas', 'D098', '', 'Alufoil  FS Folaten Kapsul 260 mm'),
(493, 'Bahan Kemas', 'E038', '', 'Alufoil BS Silver 260 mmg'),
(494, 'Bahan Kemas', 'G001', '', 'Alufoil Sachet Betiga OPP-20/PE-12/SUR-25 Prk'),
(495, 'Bahan Kemas', 'E036', '', 'Alufoil Strip Back Side Cellophane/PE20/AL15/EAA30 265mm Doff BS ksvmax,KSVA joint'),
(496, 'Bahan Kemas', 'F001', '', 'Alufoil Strip Back Side Ex Lodecon Kaplet 260 Silver PET12/PE20/AL12/PE30'),
(497, 'Bahan Kemas', 'F002', '', 'Alufoil Strip Back Side Ex Solasic 12/PE-30  260 Silver'),
(498, 'Bahan Kemas', 'F003', '', 'Alufoil Strip Back Side Ex Solvitral 260mm Gold PET12/PE20/AL20/PE30'),
(499, 'Bahan Kemas', 'F004', '', 'Alufoil Strip Back Side Ex Solvitron 12/SUR-30 260 Gold'),
(500, 'Bahan Kemas', 'F005', '', 'Alufoil Strip Back Side Ex Vitromega 15/SUR-30 My & Kbj 265 Silver'),
(501, 'Bahan Kemas', 'F006', '', 'Alufoil Strip Back Side Ex Vitromega My & Kbj 265 PET12/PE20/AL15/PE30'),
(502, 'Bahan Kemas', 'E001 ', '', 'Alufoil Strip Back Side MSAT/PE20/AL12/PE25 195 doff'),
(503, 'Bahan Kemas', 'E002', '', 'Alufoil Strip Back Side MSAT/PE20/AL12/PE30 195 Silver'),
(504, 'Bahan Kemas', 'E003', '', 'Alufoil Strip Back Side MSAT/PE20/AL12/PE30 260mm Silver'),
(505, 'Bahan Kemas', 'E006', '', 'Alufoil Strip Back Side MSAT/PE20/AL12/SUR30 195 Gold'),
(506, 'Bahan Kemas', 'E004', '', 'Alufoil Strip Back Side MSAT/PE20/AL12/SUR30 260 Gold '),
(507, 'Bahan Kemas', 'E007', '', 'Alufoil Strip Back Side MSAT/PE20/AL15/PE30 195 Silver'),
(508, 'Bahan Kemas', 'E008', '', 'Alufoil Strip Back Side MSAT/PE20/AL15/SUR30 265mm Silver doff'),
(509, 'Bahan Kemas', 'E009', '', 'Alufoil Strip Back Side MSAT/PE20/AL20/PE30  260 Silver '),
(510, 'Bahan Kemas', 'E010', '', 'Alufoil Strip Back Side MSAT/PE20/AL20/SUR30  260mm Gold'),
(511, 'Bahan Kemas', 'E011', '', 'Alufoil Strip Back Side MSAT/PE20/AL20/SUR30  260mm Silver'),
(512, 'Bahan Kemas', 'E012', '', 'Alufoil Strip Back Side MSAT/PE20/AL20/SUR30  265mm Silver'),
(513, 'Bahan Kemas', 'E013', '', 'Alufoil Strip Back Side MSAT22/PE15/AL20/EAA30  260 Gold'),
(514, 'Bahan Kemas', 'E014', '', 'Alufoil Strip Back Side MSATPE20/AL12/PE30  232 Silver'),
(515, 'Bahan Kemas', 'E028', '', 'Alufoil Strip Back Side PET 12/PE-20/AL-20/PE-30 260mm Doff'),
(516, 'Bahan Kemas', 'E029', '', 'Alufoil Strip Back Side PET 12/PE-20/AL-20/PE-30 265mm Doff'),
(517, 'Bahan Kemas', 'E020', '', 'Alufoil Strip Back Side PET 12/PE20/AL15/PE30 232 Silver'),
(518, 'Bahan Kemas', 'E032', '', 'Alufoil Strip Back Side PET 12/PE20/AL15/SUR30 265mm Gold'),
(519, 'Bahan Kemas', 'E030', '', 'Alufoil Strip Back Side PET 12/PE20/AL20/PE30 260mm Gold'),
(520, 'Bahan Kemas', 'E019', '', 'Alufoil Strip Back Side PET 20 /E20/AL15 /SUR 30 135 mm'),
(521, 'Bahan Kemas', 'E015', '', 'Alufoil Strip Back Side PET/PE20/AL12/PE30 232mm Doff'),
(522, 'Bahan Kemas', 'E023', '', 'Alufoil Strip Back Side PET/PE20/AL12/PE30 260mm Silver'),
(523, 'Bahan Kemas', 'E022', '', 'Alufoil Strip Back Side PET/PE20/AL15/SUR30 265mm Silver'),
(524, 'Bahan Kemas', 'E027', '', 'Alufoil Strip Back Side PET/PE20/AL15/SUR30/260mm Gold'),
(525, 'Bahan Kemas', 'E021', '', 'Alufoil Strip Back Side PET/PE20/AL20/PE30 195 Silver'),
(526, 'Bahan Kemas', 'E025', '', 'Alufoil Strip Back Side PET12/PE20/AL12/SUR30 260 Silver'),
(527, 'Bahan Kemas', 'E026', '', 'Alufoil Strip Back Side PET12/PE20/AL15/PE30 195mm Silver'),
(528, 'Bahan Kemas', 'E024', '', 'Alufoil Strip Back Side PET12/PE20/AL15/PE30 265mm Silver'),
(529, 'Bahan Kemas', 'E033', '', 'Alufoil Strip Back Side PT/PE15/AL12/EAA30 264mm Silver BS Zitrolas'),
(530, 'Bahan Kemas', 'E034', '', 'Alufoil Strip Back Side PT/PE20/AL12/EAA30 264mm Silver BS Quinotic'),
(531, 'Bahan Kemas', 'E031', '', 'Alufoil Strip Back Side PVC Rigid Transparant Uk. 110mm x 350my x 400m'),
(532, 'Bahan Kemas', 'E016', '', 'Alufoil Strip Back Side Polynium  Al 20 Dry PE 40 232mm'),
(533, 'Bahan Kemas', 'E018', '', 'Alufoil Strip Back Side Polynium Al 20 Dry PE 40 195 mm'),
(534, 'Bahan Kemas', 'E017', '', 'Alufoil Strip Back Side Polynium Al 20 Dry PE 40 260mm'),
(535, 'Bahan Kemas', 'E005', '', 'Alufoil Strip Back Side SPET12/PE20/AL15/SPE25 265 Silver'),
(536, 'Bahan Kemas', 'E035', '', 'Alufoil Strip Back Side SPET12/PE20/AL20/EAA30 265mm Doff BS Vitawell'),
(537, 'Bahan Kemas', 'D001', '', 'Alufoil Strip Front Side Anstrep Kaplet 195 mm MSAT-300/PE-20/AL-12/PE-30 '),
(538, 'Bahan Kemas', 'D002', '', 'Alufoil Strip Front Side Antrexol Kapsul 265 mm MSAT-300/PE-20/AL-20/SUR-30'),
(539, 'Bahan Kemas', 'D003', '', 'Alufoil Strip Front Side Arfen Kaplet 260mm PET12/PE20/AL15/PE30'),
(540, 'Bahan Kemas', 'D080', '', 'Alufoil Strip Front Side Ascolas 265mm PET12/PE20/AL15/SUR30'),
(541, 'Bahan Kemas', 'D004', '', 'Alufoil Strip Front Side Asten Kapsul 265 mm PTP/AL-20 110 MM'),
(542, 'Bahan Kemas', 'D005', '', 'Alufoil Strip Front Side Axtan Kapsul 260mm Cellophane/PE20/AL20/Surlyn30'),
(543, 'Bahan Kemas', 'D006', '', 'Alufoil Strip Front Side Brazine Kaplet 232mm Polynium AL-20/PE-40'),
(544, 'Bahan Kemas', 'D067', '', 'Alufoil Strip Front Side Brontez 232 mm PET/PE-20/AL-12/PE-30'),
(545, 'Bahan Kemas', 'D009', '', 'Alufoil Strip Front Side Cafmosol Kaplet  195 mm PE20/AL-12/PE25'),
(546, 'Bahan Kemas', 'D008', '', 'Alufoil Strip Front Side Cafmosol Kaplet 195 mm MSAT-300/PE-20/AL-15/PE-30'),
(547, 'Bahan Kemas', 'D071', '', 'Alufoil Strip Front Side Cafmosol Kaplet 195mm PET/PE-20/AL-15/PE-30'),
(548, 'Bahan Kemas', 'D007', '', 'Alufoil Strip Front Side Cafmosol Kaplet 260 mm'),
(549, 'Bahan Kemas', 'D068', '', 'Alufoil Strip Front Side Calcimega Kapsul'),
(550, 'Bahan Kemas', 'D010', '', 'Alufoil Strip Front Side Calcimega Kapsul 265 mm MSAT-300/PE-20/AL-15/SUR-30'),
(551, 'Bahan Kemas', 'D011', '', 'Alufoil Strip Front Side Carniten Soft Kapsul PTP/AL-20  110 MM'),
(552, 'Bahan Kemas', 'D012', '', 'Alufoil Strip Front Side Cefadroxil Kapsul 135mm PET12/PE-20/AL-15/SUR-30'),
(553, 'Bahan Kemas', 'D013', '', 'Alufoil Strip Front Side Cetrol Kaplet 232mm PET12/PE20/AL12/PE30'),
(554, 'Bahan Kemas', 'D082', '', 'Alufoil Strip Front Side Chlorphenamine Maleate 4mg Kaplet 232mm PET12/PE20/AL12/PE30'),
(555, 'Bahan Kemas', 'D014', '', 'Alufoil Strip Front Side Chromazol Kaplet 232 mm Polinium AL 20 Dry PE 40'),
(556, 'Bahan Kemas', 'D015', '', 'Alufoil Strip Front Side Cimexol Kaplet 260mm Polynium AL-20/Dry/PE-40'),
(557, 'Bahan Kemas', 'D065', '', 'Alufoil Strip Front Side Colicol Soft Kapsul PTP/AL-20  110 MM'),
(558, 'Bahan Kemas', 'D016', '', 'Alufoil Strip Front Side Colidium Kaplet 232mm Polynium AL-20/Dry/PE-40'),
(559, 'Bahan Kemas', 'D095', '', 'Alufoil Strip Front Side Curbex-D 4000 Kaplet 232mm MSAT/PE20/AL12/PE30'),
(560, 'Bahan Kemas', 'D079', '', 'Alufoil Strip Front Side Curbexvit Kapsul 265mm PET12/PE20/AL15/SUR30'),
(561, 'Bahan Kemas', 'D091', '', 'Alufoil Strip Front Side Dexsol 260mm PET12/PE20/AL12/PE30'),
(562, 'Bahan Kemas', 'D017', '', 'Alufoil Strip Front Side Droxal Kapsul 265mm Cell PT/PE20/AL15/EAA30'),
(563, 'Bahan Kemas', 'D018', '', 'Alufoil Strip Front Side Fixam  Kapsul 260 mm Cellophane/PE-20/AL-15/EAA-30'),
(564, 'Bahan Kemas', 'D066', '', 'Alufoil Strip Front Side Flagsol Kaplet 260mm PET/PE-20/AL-12/PE-30'),
(565, 'Bahan Kemas', 'D019', '', 'Alufoil Strip Front Side Flamoxi Kaplet  232mm MSAT/PE-20/AL-12/PE-30'),
(566, 'Bahan Kemas', 'D094', '', 'Alufoil Strip Front Side Folate kaplet 232mm PET12/PE20/AL12/PE30'),
(567, 'Bahan Kemas', 'D021', '', 'Alufoil Strip Front Side Fucotrap 100 Kapsul 260mm Cellophane/PE15/AL20/EAA30'),
(568, 'Bahan Kemas', 'D020', '', 'Alufoil Strip Front Side Fucotrap 50 Kapsul 260mm MSAT/AL-12/SUR-30'),
(569, 'Bahan Kemas', 'D081', '', 'Alufoil Strip Front Side Glutasol 265mm PET12/PE20/AL15/SUR30'),
(570, 'Bahan Kemas', 'D022', '', 'Alufoil Strip Front Side Kamolas Kaplet 260mm PET-12/PE-20/AL-12/PE-30'),
(571, 'Bahan Kemas', 'D023', '', 'Alufoil Strip Front Side Lactasin Kapsul 265mm MSAT/PE-20/AL-20/SUR-30'),
(572, 'Bahan Kemas', 'D024', '', 'Alufoil Strip Front Side Lexid Kaplet 260mm Cellophane/PE-20/AL-15/EAA-30'),
(573, 'Bahan Kemas', 'D025', '', 'Alufoil Strip Front Side Livitron Kapsul 265 mm PET-12/PE-20/AL-15/SUR-30 '),
(574, 'Bahan Kemas', 'D026', '', 'Alufoil Strip Front Side Lodecon Forte 195 mm MSAT-300/PE-20/AL-15/PE-30'),
(575, 'Bahan Kemas', 'D027', '', 'Alufoil Strip Front Side Lodecon Forte 195 mm PE20/AL-12/PE25'),
(576, 'Bahan Kemas', 'D072', '', 'Alufoil Strip Front Side Lodecon Forte 195mm PET/PE-20/AL-15/PE-30'),
(577, 'Bahan Kemas', 'D028', '', 'Alufoil Strip Front Side Lodecon Kaplet 260mm PET12/PE20/AL12/PE30'),
(578, 'Bahan Kemas', 'D096', '', 'Alufoil Strip Front Side Methysol-8 Kaplet 232mm MSAT/PE20/AL12/PE30'),
(579, 'Bahan Kemas', 'D030', '', 'Alufoil Strip Front Side Moxalas Kaplet 260mm PET12/PE20/AL15/PE30'),
(580, 'Bahan Kemas', 'D029', '', 'Alufoil Strip Front Side Moxalas Kaplet PET12/PE20/AL15/PE30 260 mm'),
(581, 'Bahan Kemas', 'D031', '', 'Alufoil Strip Front Side Nootrisol Kaplet 260mm PET12/PE20/AL15/PE30'),
(582, 'Bahan Kemas', 'D032', '', 'Alufoil Strip Front Side Norflam Kapsul 265mm PET12/PE-20/AL-12/EAA-30'),
(583, 'Bahan Kemas', 'D033', '', 'Alufoil Strip Front Side Obdhamin Kapsul 265mm PET/PE-20/AL-20/PE-30'),
(584, 'Bahan Kemas', 'D078', '', 'Alufoil Strip Front Side Orphen Kaplet 232 mm AL-20/Dry/PE-40'),
(585, 'Bahan Kemas', 'D034', '', 'Alufoil Strip Front Side Orphen Kaplet 232mm PET12/PE-20/AL-12/PE-30'),
(586, 'Bahan Kemas', 'D035', '', 'Alufoil Strip Front Side Osvion Plus Kapsul 265mm SPET/PE20/AL20/EAA30'),
(587, 'Bahan Kemas', 'D036', '', 'Alufoil Strip Front Side Oxcal Kapsul 265mm PET-12/PE-20/AL-20/EAA-30'),
(588, 'Bahan Kemas', 'D083', '', 'Alufoil Strip Front Side Paracetamol 500mg Kaplet 260mm Polynium AL-20/PE-40'),
(589, 'Bahan Kemas', 'D037', '', 'Alufoil Strip Front Side Primunox Kapsul 265mm PET12/PE-20/AL-15/PE-30'),
(590, 'Bahan Kemas', 'D038', '', 'Alufoil Strip Front Side Proseval Kapsul 265mm MSAT/PE-20/AL-20/SUR-30'),
(591, 'Bahan Kemas', 'D039', '', 'Alufoil Strip Front Side Qinox kaplet 260mm MSAT/PE-20/AL-20/SUR-30'),
(592, 'Bahan Kemas', 'D089', '', 'Alufoil Strip Front Side Quinotic Kaplet 264mm PT/PE20/AL12/EAA30'),
(593, 'Bahan Kemas', 'D040', '', 'Alufoil Strip Front Side Redusec  Kapsul ExH PET12/PE20/AL15/PE30'),
(594, 'Bahan Kemas', 'D041', '', 'Alufoil Strip Front Side Redusec Kapsul 260mm PET12/PE-20/AL-12/PE-30'),
(595, 'Bahan Kemas', 'D042', '', 'Alufoil Strip Front Side Sintrol Kaplet 232mm PET12/PE20/AL15/PE30'),
(596, 'Bahan Kemas', 'D043', '', 'Alufoil Strip Front Side Solaneuron Kaplet 260mm PET12/PE-20/AL-20/PE-30'),
(597, 'Bahan Kemas', 'D044', '', 'Alufoil Strip Front Side Solasic Exp. My  Kaplet AL-20/Dry/PE-40 260 mm'),
(598, 'Bahan Kemas', 'D045', '', 'Alufoil Strip Front Side Solasic Kaplet 260mm PET12/PE20/AL12/PE30'),
(599, 'Bahan Kemas', 'D076', '', 'Alufoil Strip Front Side Solathim 500 Kapsul 265 mm SPET-12/PE-20/AL-15/SPE-25'),
(600, 'Bahan Kemas', 'D046', '', 'Alufoil Strip Front Side Solathim 500 Kapsul 265mm PET-12/PE-20/AL-15/PE-30'),
(601, 'Bahan Kemas', 'D047', '', 'Alufoil Strip Front Side Soldextam Kaplet 232 mm Polynium AL-20/Dry/PE-40'),
(602, 'Bahan Kemas', 'D073', '', 'Alufoil Strip Front Side Soldextam Kaplet 232mm PET12/PE20/AL12/PE30'),
(603, 'Bahan Kemas', 'D048', '', 'Alufoil Strip Front Side Solpenox Kaplet 195mm AL-20/Dry/PE-40'),
(604, 'Bahan Kemas', 'D075', '', 'Alufoil Strip Front Side Solpenox Kaplet 260mm PET12/PE20/AL20/PE30'),
(605, 'Bahan Kemas', 'D070', '', 'Alufoil Strip Front Side Solpenox Kaplet pet/pe20/AL12/pe30'),
(606, 'Bahan Kemas', 'D049', '', 'Alufoil Strip Front Side Soltralin 500 Kapsul 265mm PET/PE-20/AL-15/PE-30'),
(607, 'Bahan Kemas', 'D084', '', 'Alufoil Strip Front Side Solvita D 1000 232mm PET12/PE20/AL12/PE30'),
(608, 'Bahan Kemas', 'D090', '', 'Alufoil Strip Front Side Solvita D 5000 232mm PET12/PE20/AL12/PE30'),
(609, 'Bahan Kemas', 'D093', '', 'Alufoil Strip Front Side Solvita Joint Kapsul 265mm PET12/PE20/AL15/EAA30'),
(610, 'Bahan Kemas', 'D088', '', 'Alufoil Strip Front Side Solvita MAX Kapsul 265mm PET12/PE20/AL15/EAA30'),
(611, 'Bahan Kemas', 'D085', '', 'Alufoil Strip Front Side Solvita Z Kapsul 10x10 265mm PET12/PE20/AL15/EAA30'),
(612, 'Bahan Kemas', 'D050', '', 'Alufoil Strip Front Side Solvitral Kaplet 260 mm MSAT/PE-20/AL-12/SUR-30'),
(613, 'Bahan Kemas', 'D077', '', 'Alufoil Strip Front Side Solvitral Kaplet 260mm PET12/PE-20/AL-12/PE-30'),
(614, 'Bahan Kemas', 'D051', '', 'Alufoil Strip Front Side Solvitron Kapsul 260 mm MSAT-300/PE-20/AL-12/SUR-30'),
(615, 'Bahan Kemas', 'D069', '', 'Alufoil Strip Front Side Solvitron Kapsul 260mm PET/PE-20/AL-12/EAA-30'),
(616, 'Bahan Kemas', 'D052', '', 'Alufoil Strip Front Side Stimox Kapsul 265mm SPET12/PE-15/AL-20/EAA-30'),
(617, 'Bahan Kemas', 'D092', '', 'Alufoil Strip Front Side Tenasol Kapsul 265mm PET12/PE20/AL15/SUR30'),
(618, 'Bahan Kemas', 'D054', '', 'Alufoil Strip Front Side Ticomag  Kaplet 260mm PET12/PE20/AL15/PE30'),
(619, 'Bahan Kemas', 'D053', '', 'Alufoil Strip Front Side Ticomag Kaplet PET12/PE20/AL15/PE30 260 mm'),
(620, 'Bahan Kemas', 'D055', '', 'Alufoil Strip Front Side Topram kaplet 232mm Polynium AL-20/Dry/PE-40'),
(621, 'Bahan Kemas', 'D056', '', 'Alufoil Strip Front Side Vegamon Kapsul 265mm MSAT/PE-20/AL-15/SUR-30'),
(622, 'Bahan Kemas', 'D057', '', 'Alufoil Strip Front Side Verona Kapsul 260mm MSAT/PE-20/AL-20/SUR-30'),
(623, 'Bahan Kemas', 'D058', '', 'Alufoil Strip Front Side Vistanax Kapsul 265mm MSAT/PE-20/AL-15/SUR-30'),
(624, 'Bahan Kemas', 'D086', '', 'Alufoil Strip Front Side Vitawell Kapsul 265mm SPET12/PE20/AL20/EAA30'),
(625, 'Bahan Kemas', 'D059', '', 'Alufoil Strip Front Side Vitromega  Kapsul  Export 265 mm MSAT-300/PE-20/AL-15/SUR-30'),
(626, 'Bahan Kemas', 'D074', '', 'Alufoil Strip Front Side Vitromega Kapsul Exp 265mm PET12/PE-20/AL-15/SUR-30'),
(627, 'Bahan Kemas', 'D060', '', 'Alufoil Strip Front Side Vitromega kapsul 265mm PET12/PE-20/AL-20/EAA-30'),
(628, 'Bahan Kemas', 'D061', '', 'Alufoil Strip Front Side Voldilex Kapsul 260mm MSAT/PE-20/AL-20/SUR-30'),
(629, 'Bahan Kemas', 'D062', '', 'Alufoil Strip Front Side Vomilas Kapsul PTP/AL-20  110 MM'),
(630, 'Bahan Kemas', 'D063', '', 'Alufoil Strip Front Side Xicalom Kaplet 232mm PET12/PE20/AL12/PE30'),
(631, 'Bahan Kemas', 'D064', '', 'Alufoil Strip Front Side Xomnia Kapsul 265 mm MSAT-300/PE-20/AL-20/SUR-30'),
(632, 'Bahan Kemas', 'D087', '', 'Alufoil Strip Front Side Zithrolas Kaplet 264mm PT/PE15/AL12/EAA30'),
(633, 'Bahan Kemas', 'C001', '', 'Amplop Orphen'),
(634, 'Bahan Kemas', 'A001', '', 'Botol  & Tutup @ 30 Kaps'),
(635, 'Bahan Kemas', 'A003', '', 'Botol  Secret Cream  BL 500ml'),
(636, 'Bahan Kemas', 'A004', '', 'Botol  Secret Cream  BM 500ml'),
(637, 'Bahan Kemas', 'A024', '', 'Botol Ester-C 60ml Solvita C 500'),
(638, 'Bahan Kemas', 'A006', '', 'Botol Gelas 100 ml'),
(639, 'Bahan Kemas', 'A008', '', 'Botol Gelas 120 ml oval'),
(640, 'Bahan Kemas', 'A007', '', 'Botol Gelas 20 ml'),
(641, 'Bahan Kemas', 'A005', '', 'Botol Gelas 60ml'),
(642, 'Bahan Kemas', 'A009', '', 'Botol Gelas K 31,5'),
(643, 'Bahan Kemas', 'A010', '', 'Botol Plastik  karyana 10x15'),
(644, 'Bahan Kemas', 'A012', '', 'Botol Plastik Novelas 50 ml'),
(645, 'Bahan Kemas', 'A011', '', 'Botol Plastik coklat 60 ml'),
(646, 'Bahan Kemas', 'A023', '', 'Botol Polos Ellen White'),
(647, 'Bahan Kemas', 'A025', '', 'Botol Secret Red Flower'),
(648, 'Bahan Kemas', 'A002', '', 'Botol Secret polos'),
(649, 'Bahan Kemas', 'I010', '', 'Catch Cover HVS Cafmosol kaplet'),
(650, 'Bahan Kemas', 'I036', '', 'Catch Cover HVS Kamolas Kaplet'),
(651, 'Bahan Kemas', 'I046', '', 'Catch Cover HVS Lodecon Kaplet'),
(652, 'Bahan Kemas', 'I074', '', 'Catch Cover HVS Solaneuron Kaplet'),
(653, 'Bahan Kemas', 'I099', '', 'Catch Cover HVS Ticomag Kaplet'),
(654, 'Bahan Kemas', 'I045', '', 'Catch cover HVS Lodecon Forte Kaplet'),
(655, 'Bahan Kemas', 'H001', '', 'Etiket Anstrep Suspensi AP 85g'),
(656, 'Bahan Kemas', 'H060', '', 'Etiket Arfen Forte AP 85g'),
(657, 'Bahan Kemas', 'H059', '', 'Etiket Arfen Suspensi AP 85g'),
(658, 'Bahan Kemas', 'H073', '', 'Etiket Ascolas Botol Ester c'),
(659, 'Bahan Kemas', 'H002', '', 'Etiket Axtan Syrup AP 85g'),
(660, 'Bahan Kemas', 'H058', '', 'Etiket Baxcef AP 85g'),
(661, 'Bahan Kemas', 'H003', '', 'Etiket Bital Balsam AP 85g'),
(662, 'Bahan Kemas', 'H004', '', 'Etiket Cefadroxil DS AP 85g'),
(663, 'Bahan Kemas', 'H005', '', 'Etiket Cefadroxil DS Forte AP 85g'),
(664, 'Bahan Kemas', 'H006', '', 'Etiket Curbexon Syrup 100 ml AP 85g'),
(665, 'Bahan Kemas', 'H007', '', 'Etiket Curbexon Syrup 60 AP 85g'),
(666, 'Bahan Kemas', 'H008', '', 'Etiket Curbexon Syrup Ex.My AP 85g'),
(667, 'Bahan Kemas', 'H077', '', 'Etiket Deconic BP Syrup'),
(668, 'Bahan Kemas', 'H076', '', 'Etiket Deconic Syrup'),
(669, 'Bahan Kemas', 'H009', '', 'Etiket Droxal Dry Syrup AP 85g'),
(670, 'Bahan Kemas', 'H010', '', 'Etiket Droxal Forte Dry Syrup AP 85g'),
(671, 'Bahan Kemas', 'H070', '', 'Etiket Fastzol AP 85g'),
(672, 'Bahan Kemas', 'H011', '', 'Etiket Fixam Dry Syrup AP 85g'),
(673, 'Bahan Kemas', 'H057', '', 'Etiket Flagsol Syrup  Export Kbj AP 85g'),
(674, 'Bahan Kemas', 'H012', '', 'Etiket Flagsol Syrup AP 85g'),
(675, 'Bahan Kemas', 'H013', '', 'Etiket Fortusin Syrup  60 ml AP 85g'),
(676, 'Bahan Kemas', 'H014', '', 'Etiket Fortusin Syrup 120 ml AP 85g'),
(677, 'Bahan Kemas', 'H015', '', 'Etiket Fortusin Syrup Ex.My AP 85g'),
(678, 'Bahan Kemas', 'H066', '', 'Etiket Fucotrap syrup 100 AP 85g'),
(679, 'Bahan Kemas', 'H016', '', 'Etiket Gigadril Syrup AP 85g'),
(680, 'Bahan Kemas', 'H017', '', 'Etiket Gigadryl Syrup Ex. KBJ AP 85g'),
(681, 'Bahan Kemas', 'H018', '', 'Etiket Gigadryl Syrup Ex. My AP 85g'),
(682, 'Bahan Kemas', 'H074', '', 'Etiket Glutasol Botol Ester c'),
(683, 'Bahan Kemas', 'H019', '', 'Etiket Grovita Syrup AP 85g'),
(684, 'Bahan Kemas', 'H020', '', 'Etiket Kamolas Drop AP 85g'),
(685, 'Bahan Kemas', 'H021', '', 'Etiket Kamolas Kaplet 1000 AP 85g'),
(686, 'Bahan Kemas', 'H022', '', 'Etiket Kamolas Syrup AP 85g'),
(687, 'Bahan Kemas', 'H023', '', 'Etiket Kamolas Syrup Ex.My AP 85g'),
(688, 'Bahan Kemas', 'H024', '', 'Etiket Kamolas Syrup Forte AP 85g'),
(689, 'Bahan Kemas', 'H025', '', 'Etiket Lipidon Soft Kapsul AP 85g'),
(690, 'Bahan Kemas', 'H026', '', 'Etiket Moxalas Suspensi AP 85g'),
(691, 'Bahan Kemas', 'H027', '', 'Etiket Moxalas Syrup Ex.My AP 85g'),
(692, 'Bahan Kemas', 'H028', '', 'Etiket Muveron Drop Syrup AP 85g'),
(693, 'Bahan Kemas', 'H029', '', 'Etiket Muveron Syrup AP 85g'),
(694, 'Bahan Kemas', 'H061', '', 'Etiket PENEM AP 85g'),
(695, 'Bahan Kemas', 'H030', '', 'Etiket Pectum Syrup 120 ml AP 85g'),
(696, 'Bahan Kemas', 'H031', '', 'Etiket Pectum Syrup 60 ml AP 85g'),
(697, 'Bahan Kemas', 'H032', '', 'Etiket Rigotin Soft Kapsul AP 85g'),
(698, 'Bahan Kemas', 'H079', '', 'Etiket Secret Red Flower Body Lotion'),
(699, 'Bahan Kemas', 'H080', '', 'Etiket Secret Red Flower Body Milk'),
(700, 'Bahan Kemas', 'H033', '', 'Etiket Solachlor 250 kapsul AP 85g'),
(701, 'Bahan Kemas', 'H056', '', 'Etiket Solafexone Inj AP 85g'),
(702, 'Bahan Kemas', 'H035', '', 'Etiket Solafluz Syrup Ex. My AP 85g'),
(703, 'Bahan Kemas', 'H034', '', 'Etiket Solafluz syrup AP 85g'),
(704, 'Bahan Kemas', 'H036', '', 'Etiket Solathim Dry Syrup AP 85g'),
(705, 'Bahan Kemas', 'H037', '', 'Etiket Solpenox Dry Syrup AP 85g'),
(706, 'Bahan Kemas', 'H038', '', 'Etiket Solpenox Dry Syrup Ex.My AP 85g'),
(707, 'Bahan Kemas', 'H071', '', 'Etiket Solpepsa AP 85g'),
(708, 'Bahan Kemas', 'H039', '', 'Etiket Soltralin 250 kapsul AP 85g'),
(709, 'Bahan Kemas', 'H040', '', 'Etiket Solvita Baby Drop AP 85g'),
(710, 'Bahan Kemas', 'H041', '', 'Etiket Solvita Baby Drop sy Ex. My AP 85g'),
(711, 'Bahan Kemas', 'H075', '', 'Etiket Solvita MAX Botol Ester c'),
(712, 'Bahan Kemas', 'H042', '', 'Etiket Solvita Plus Syrup AP 85g'),
(713, 'Bahan Kemas', 'H043', '', 'Etiket Solvita Plus Syrup Ex My AP 85g'),
(714, 'Bahan Kemas', 'H044', '', 'Etiket Solvita Plus Syrup Ex.KBJ AP 85g'),
(715, 'Bahan Kemas', 'H045', '', 'Etiket Solvita Syrup AP 85g'),
(716, 'Bahan Kemas', 'H046', '', 'Etiket Solvita Syrup Ex My AP 85g'),
(717, 'Bahan Kemas', 'H047', '', 'Etiket Solvitron  Syrup AP 85g'),
(718, 'Bahan Kemas', 'H064', '', 'Etiket Stiker Ellen Body Lotion'),
(719, 'Bahan Kemas', 'H065', '', 'Etiket Stiker Ellen Body Milk'),
(720, 'Bahan Kemas', 'H048', '', 'Etiket Stiker Secrets Body Lotion Ex AP 85g'),
(721, 'Bahan Kemas', 'H049', '', 'Etiket Stiker Secrets Body Milk Ex AP 85g'),
(722, 'Bahan Kemas', 'H062', '', 'Etiket Stiker Secrets Meaningfull Body Lotion'),
(723, 'Bahan Kemas', 'H063', '', 'Etiket Stiker Secrets Meaningfull Body Milk'),
(724, 'Bahan Kemas', 'H067', '', 'Etiket Stiker Solvita C500 cromo lintec + uv + Pond setengah tembus'),
(725, 'Bahan Kemas', 'H069', '', 'Etiket Stiker Solvita DEX cromo lintec + uv + Pond setengah tembus'),
(726, 'Bahan Kemas', 'H068', '', 'Etiket Stiker Solvita Z cromo lintec + uv + Pond setengah tembus'),
(727, 'Bahan Kemas', 'H072', '', 'Etiket Stiker Zetron'),
(728, 'Bahan Kemas', 'H050', '', 'Etiket Stimox Syrup AP 85g'),
(729, 'Bahan Kemas', 'H078', '', 'Etiket Sucralfeat Suspensi'),
(730, 'Bahan Kemas', 'S001', '', 'Etiket Topix Tersedia disini'),
(731, 'Bahan Kemas', 'H051', '', 'Etiket Truvit Drop Syrup 15 ml AP 85g'),
(732, 'Bahan Kemas', 'H052', '', 'Etiket Truvit Syrup AP 85g'),
(733, 'Bahan Kemas', 'H053', '', 'Etiket Vical D Syrup AP 85g'),
(734, 'Bahan Kemas', 'H055', '', 'Etiket Vical D Syrup Ex My AP 85g'),
(735, 'Bahan Kemas', 'H054', '', 'Etiket Vical D Syrup Ex. KBJ AP 85g'),
(736, 'Bahan Kemas', 'S002', '', 'Hanger Betiga uk. 16x11x5.5 cm'),
(737, 'Bahan Kemas', 'K002', '', 'Inner Box Anstrep Suspensi Duplex 270g,UV'),
(738, 'Bahan Kemas', 'K001', '', 'Inner Box Anstrep kaplet Duplex 310g,UV'),
(739, 'Bahan Kemas', 'K003', '', 'Inner Box Antrexol Kapsul Duplex 310g,UV'),
(740, 'Bahan Kemas', 'K004', '', 'Inner Box Arfen Kaplet Duplex 310g,UV'),
(741, 'Bahan Kemas', 'K133', '', 'Inner Box Arfen Suspensi Forte Ivory 300g,UV');
INSERT INTO `produk` (`id`, `produk_type`, `kode_produk`, `sales_type`, `produk_name`) VALUES
(742, 'Bahan Kemas', 'K132', '', 'Inner Box Arfen Suspensi Ivory 300g,UV'),
(743, 'Bahan Kemas', 'K142', '', 'Inner Box Ascolas Kapsul Ivory 300g,UV'),
(744, 'Bahan Kemas', 'K005', '', 'Inner Box Asten Soft Kapsul Duplex 310g,UV'),
(745, 'Bahan Kemas', 'K006', '', 'Inner Box Axtan Kapsul Duplex 310g,UV'),
(746, 'Bahan Kemas', 'K007', '', 'Inner Box Axtan Syrup Ivory 300g,UV'),
(747, 'Bahan Kemas', 'K131', '', 'Inner Box Baxcef Ivory 300g,UV'),
(748, 'Bahan Kemas', 'K008', '', 'Inner Box Bital Balsam Ivory 300g,UV'),
(749, 'Bahan Kemas', 'K009', '', 'Inner Box Brazine Kaplet Duplex 310g,UV'),
(750, 'Bahan Kemas', 'K128', '', 'Inner Box Brontez Kaplet Duplex 310g,UV'),
(751, 'Bahan Kemas', 'K010', '', 'Inner Box Cafmosol kaplet Duplex 310g,UV'),
(752, 'Bahan Kemas', 'K011', '', 'Inner Box Calcimega Kapsul Duplex 310g,UV'),
(753, 'Bahan Kemas', 'K012', '', 'Inner Box Carniten Soft Kapsul Duplex 310g,UV'),
(754, 'Bahan Kemas', 'K013', '', 'Inner Box Cefadroxil DS Duplex 270g,UV'),
(755, 'Bahan Kemas', 'K014', '', 'Inner Box Cefadroxil DS Forte'),
(756, 'Bahan Kemas', 'K015', '', 'Inner Box Cefadroxil Kapsul Duplex 270g,UV'),
(757, 'Bahan Kemas', 'K016', '', 'Inner Box Cetrol Kaplet Duplex 310g,UV'),
(758, 'Bahan Kemas', 'K145', '', 'Inner Box Chlorphenamine Maleate 4mg Kaplet'),
(759, 'Bahan Kemas', 'K017', '', 'Inner Box Chromazol Kaplet Duplex 270g,UV'),
(760, 'Bahan Kemas', 'K018', '', 'Inner Box Cimexol Kaplet Duplex 310g,UV'),
(761, 'Bahan Kemas', 'K126', '', 'Inner Box Colicol Soft Kapsul Duplex 270g,UV'),
(762, 'Bahan Kemas', 'K019', '', 'Inner Box Collidium Kaplet Duplex 310g,UV'),
(763, 'Bahan Kemas', 'K020', '', 'Inner Box Confortin Gel Ivory 300g,UV'),
(764, 'Bahan Kemas', 'K165', '', 'Inner Box Curbex D 4000 Ivory 300g,UV'),
(765, 'Bahan Kemas', 'K021', '', 'Inner Box Curbexon Syrup 100 ml Ivory 300g,UV'),
(766, 'Bahan Kemas', 'K022', '', 'Inner Box Curbexon Syrup 60 ml Ivory 300g,UV'),
(767, 'Bahan Kemas', 'K023', '', 'Inner Box Curbexon Syrup Ex.My Duplex 310g,UV'),
(768, 'Bahan Kemas', 'K139', '', 'Inner Box Curbexvit Kapsul Ivory 300g,UV'),
(769, 'Bahan Kemas', 'K162', '', 'Inner Box Deconic BP Syrup'),
(770, 'Bahan Kemas', 'K161', '', 'Inner Box Deconic Syrup'),
(771, 'Bahan Kemas', 'K158', '', 'Inner Box Dexsol Kapsul'),
(772, 'Bahan Kemas', 'K024', '', 'Inner Box Droxal Dry Syrup Ivory 300g,UV'),
(773, 'Bahan Kemas', 'K025', '', 'Inner Box Droxal Forte Dry Syrup Ivory 300g,UV'),
(774, 'Bahan Kemas', 'K026', '', 'Inner Box Droxal Kapsul Duplex 310g,UV'),
(775, 'Bahan Kemas', 'K137', '', 'Inner Box Ellen Body Lotion Ivory 350g,UV'),
(776, 'Bahan Kemas', 'K138', '', 'Inner Box Ellen Body Milk Ivory 350g,UV'),
(777, 'Bahan Kemas', 'K150', '', 'Inner Box Fastzol Serbuk Injeksi Ivory 300g,UV'),
(778, 'Bahan Kemas', 'K027', '', 'Inner Box Fixam  Kapsul Duplex 310g,UV'),
(779, 'Bahan Kemas', 'K028', '', 'Inner Box Fixam Dry Syrup Ivory 300g,UV'),
(780, 'Bahan Kemas', 'K127', '', 'Inner Box Flagsol Kaplet Duplex 310g,UV'),
(781, 'Bahan Kemas', 'K129', '', 'Inner Box Flagsol Syrup  Export Kbj Duplex 310g,UV'),
(782, 'Bahan Kemas', 'K029', '', 'Inner Box Flagsol Syrup Duplex 310g,UV'),
(783, 'Bahan Kemas', 'K030', '', 'Inner Box Flamoxi Kaplet Duplex 310g,UV'),
(784, 'Bahan Kemas', 'K164', '', 'Inner Box Folate Kaplet'),
(785, 'Bahan Kemas', 'K168', '', 'Inner Box Folaten Kapsul'),
(786, 'Bahan Kemas', 'K031', '', 'Inner Box Fortusin Syrup 120 ml Ivory 300g,UV'),
(787, 'Bahan Kemas', 'K032', '', 'Inner Box Fortusin Syrup 60 ML Ivory 300g,UV'),
(788, 'Bahan Kemas', 'K033', '', 'Inner Box Fortusin Syrup Ex.My Duplex 310g,UV'),
(789, 'Bahan Kemas', 'K034', '', 'Inner Box Fucotrap 100 Kapsul Ivory 300g,UV'),
(790, 'Bahan Kemas', 'K035', '', 'Inner Box Fucotrap 50 Kapsul Ivory 300g,UV'),
(791, 'Bahan Kemas', 'K141', '', 'Inner Box Fucotrap Syrup 100 Ivory 300g,UV'),
(792, 'Bahan Kemas', 'K036', '', 'Inner Box Gigadril Syrup Duplex 310g,UV'),
(793, 'Bahan Kemas', 'K037', '', 'Inner Box Gigadryl Syrup Ex. KBJ Duplex 310g,UV'),
(794, 'Bahan Kemas', 'K038', '', 'Inner Box Gigadyrl Syrup Ex My Duplex 310g,UV'),
(795, 'Bahan Kemas', 'K143', '', 'Inner Box Glutasol Kapsul 5x10 Ivory 300g,UV'),
(796, 'Bahan Kemas', 'K144', '', 'Inner Box Glutasol Kapsul 5x6 Ivory 300g,UV'),
(797, 'Bahan Kemas', 'K039', '', 'Inner Box Grovita Syrup'),
(798, 'Bahan Kemas', 'K040', '', 'Inner Box Kamolas Drops Ivory 300g,UV'),
(799, 'Bahan Kemas', 'K041', '', 'Inner Box Kamolas Kaplet Duplex 310g,UV'),
(800, 'Bahan Kemas', 'K042', '', 'Inner Box Kamolas Syrup Duplex 310g,UV'),
(801, 'Bahan Kemas', 'K043', '', 'Inner Box Kamolas Syrup Ex.My Duplex 310g,UV'),
(802, 'Bahan Kemas', 'K044', '', 'Inner Box Kamolas Syrup Forte Ivory 300g,UV'),
(803, 'Bahan Kemas', 'K045', '', 'Inner Box Lactasin Kapsul Duplex 310g,UV'),
(804, 'Bahan Kemas', 'K046', '', 'Inner Box Lexid Kapsul Duplex 310g,UV'),
(805, 'Bahan Kemas', 'K047', '', 'Inner Box Lipidon Soft Kapsul Duplex 310g,UV'),
(806, 'Bahan Kemas', 'K048', '', 'Inner Box Livitron Kapsul'),
(807, 'Bahan Kemas', 'K049', '', 'Inner Box Lodecon Forte kaplet Ivory 300g,UV'),
(808, 'Bahan Kemas', 'K050', '', 'Inner Box Lodecon Kaplet Duplex 310g,UV'),
(809, 'Bahan Kemas', 'K051', '', 'Inner Box Lodecon kaplet Ex My Duplex 310g,UV'),
(810, 'Bahan Kemas', 'K052', '', 'Inner Box Loksin Cream Duplex 310g,UV'),
(811, 'Bahan Kemas', 'K166', '', 'Inner Box Methysol-8 Ivory 300g,UV'),
(812, 'Bahan Kemas', 'K053', '', 'Inner Box Moxalas Kaplet Duplex 310g,UV'),
(813, 'Bahan Kemas', 'K054', '', 'Inner Box Moxalas Suspensi Duplex 310g,UV'),
(814, 'Bahan Kemas', 'K055', '', 'Inner Box Moxalas Syrup Ex. My Duplex 310g,UV'),
(815, 'Bahan Kemas', 'K056', '', 'Inner Box Muveron Drop Syrup Ivory 300g,UV'),
(816, 'Bahan Kemas', 'K057', '', 'Inner Box Muveron Syrup Ivory 300g,UV'),
(817, 'Bahan Kemas', 'K058', '', 'Inner Box Nootrisol  Kaplet Duplex 310g,UV'),
(818, 'Bahan Kemas', 'K059', '', 'Inner Box Norflam Kapsul Ivory 300g,UV'),
(819, 'Bahan Kemas', 'K060', '', 'Inner Box Novelas Lotion Ivory 300g,UV'),
(820, 'Bahan Kemas', 'K062', '', 'Inner Box Obdhamin Kapsul 50 (besar) Ivory 300g,UV'),
(821, 'Bahan Kemas', 'K140', '', 'Inner Box Obdhamin kapsul Kecil Ivory 300g,UV'),
(822, 'Bahan Kemas', 'K063', '', 'Inner Box Orphen Kaplet Ivory 300g,UV'),
(823, 'Bahan Kemas', 'K064', '', 'Inner Box Osvion Plus Kapsul Duplex 310g,UV'),
(824, 'Bahan Kemas', 'K065', '', 'Inner Box Oxcal Kapsul Duplex 310g,UV'),
(825, 'Bahan Kemas', 'K134', '', 'Inner Box PENEM Ivory 300g,UV'),
(826, 'Bahan Kemas', 'K146', '', 'Inner Box Paracetamol 500mg Kaplet'),
(827, 'Bahan Kemas', 'K066', '', 'Inner Box Pectum Syrup 120 ml Ivory 300g,UV'),
(828, 'Bahan Kemas', 'K067', '', 'Inner Box Pectum Syrup 60 ml Ivory 300g,UV'),
(829, 'Bahan Kemas', 'K068', '', 'Inner Box Primunox  Kapsul  Duplex 310g,UV'),
(830, 'Bahan Kemas', 'K069', '', 'Inner Box Proseval Kapsul Duplex 310g,UV'),
(831, 'Bahan Kemas', 'K070', '', 'Inner Box Qinox Kaplet Duplex 310g,UV'),
(832, 'Bahan Kemas', 'K156', '', 'Inner Box Quinotic Kaplet'),
(833, 'Bahan Kemas', 'K071', '', 'Inner Box Redusec Kapsul Duplex 310g,UV'),
(834, 'Bahan Kemas', 'K072', '', 'Inner Box Redusec Kapsul ExH  '),
(835, 'Bahan Kemas', 'K073', '', 'Inner Box Rigotin Soft Kapsul Duplex 310g,UV'),
(836, 'Bahan Kemas', 'K074', '', 'Inner Box Salep Topix Duplex 310g,UV'),
(837, 'Bahan Kemas', 'K075', '', 'Inner Box Secret Cream Exp.'),
(838, 'Bahan Kemas', 'K076', '', 'Inner Box Secrets Body Lotion Ex Ivory 300g,UV'),
(839, 'Bahan Kemas', 'K077', '', 'Inner Box Secrets Body Milk Ex Ivory 300g,UV'),
(840, 'Bahan Kemas', 'K135', '', 'Inner Box Secrets Meaningfull Body Lotion Ivory 350g,UV'),
(841, 'Bahan Kemas', 'K136', '', 'Inner Box Secrets Meaningfull Body Milk Ivory 350g,UV'),
(842, 'Bahan Kemas', 'K078', '', 'Inner Box Sintrol Kaplet Duplex 310g,UV'),
(843, 'Bahan Kemas', 'K079', '', 'Inner Box Solacort Cream Duplex 270g,UV'),
(844, 'Bahan Kemas', 'K125', '', 'Inner Box Solafexone Inj Ivory 300g,UV'),
(845, 'Bahan Kemas', 'K081', '', 'Inner Box Solafluz Syrup  Ex My Duplex 310g,UV'),
(846, 'Bahan Kemas', 'K080', '', 'Inner Box Solafluz Syrup Duplex 310g,UV'),
(847, 'Bahan Kemas', 'K082', '', 'Inner Box Solaneuron Kaplet Duplex 310g,UV'),
(848, 'Bahan Kemas', 'K083', '', 'Inner Box Solasic kaplet Duplex 310g,UV'),
(849, 'Bahan Kemas', 'K084', '', 'Inner Box SolasicKaplet Ex. My Duplex 310g,UV'),
(850, 'Bahan Kemas', 'K085', '', 'Inner Box Solathim 500 Kapsul Duplex 310g,UV'),
(851, 'Bahan Kemas', 'K086', '', 'Inner Box Solathim Dry Syrup Duplex 310g,UV'),
(852, 'Bahan Kemas', 'K087', '', 'Inner Box Soldextam Kaplet Duplex 310g,UV'),
(853, 'Bahan Kemas', 'K088', '', 'Inner Box Solpenox Dry Syrup Duplex 310g,UV'),
(854, 'Bahan Kemas', 'K089', '', 'Inner Box Solpenox DrySyrup Ex. My Duplex 310g,UV'),
(855, 'Bahan Kemas', 'K090', '', 'Inner Box Solpenox Kaplet Duplex 310g,UV'),
(856, 'Bahan Kemas', 'K151', '', 'Inner Box Solpepsa Suspensi Ivory 300g,UV'),
(857, 'Bahan Kemas', 'K091', '', 'Inner Box Soltralin 500 Kapsul Duplex 310g,UV'),
(858, 'Bahan Kemas', 'K092', '', 'Inner Box Solvita Baby Drop Ivory 300g,UV'),
(859, 'Bahan Kemas', 'K093', '', 'Inner Box Solvita Baby Drop Syrup  Ex My Duplex 310g,UV'),
(860, 'Bahan Kemas', 'K147', '', 'Inner Box Solvita D 1000'),
(861, 'Bahan Kemas', 'K157', '', 'Inner Box Solvita D 5000'),
(862, 'Bahan Kemas', 'K160', '', 'Inner Box Solvita Joint Kapsul'),
(863, 'Bahan Kemas', 'K155', '', 'Inner Box Solvita Max Kapsul'),
(864, 'Bahan Kemas', 'K094', '', 'Inner Box Solvita Plus Syrup Duplex 310g,UV'),
(865, 'Bahan Kemas', 'K095', '', 'Inner Box Solvita Plus Syrup Ex My Duplex 310g,UV'),
(866, 'Bahan Kemas', 'K096', '', 'Inner Box Solvita Plus Syrup Ex.KBJ Duplex 310g,UV'),
(867, 'Bahan Kemas', 'K097', '', 'Inner Box Solvita Syrup Duplex 310g,UV'),
(868, 'Bahan Kemas', 'K098', '', 'Inner Box Solvita Syrup Ex My Duplex 310g,UV'),
(869, 'Bahan Kemas', 'K148', '', 'Inner Box Solvita Z Kapsul 10x10'),
(870, 'Bahan Kemas', 'K149', '', 'Inner Box Solvita Z Kapsul 25x1x4'),
(871, 'Bahan Kemas', 'K099', '', 'Inner Box Solvitral Kaplet Duplex 310g,UV'),
(872, 'Bahan Kemas', 'K100', '', 'Inner Box Solvitral Kaplet Ex My Duplex 310g,UV'),
(873, 'Bahan Kemas', 'K102', '', 'Inner Box Solvitron Kapsul  Ex My Duplex 310g,UV'),
(874, 'Bahan Kemas', 'K101', '', 'Inner Box Solvitron Kapsul Duplex 310g,UV'),
(875, 'Bahan Kemas', 'K103', '', 'Inner Box Solvitron Syrup Duplex 310g,UV'),
(876, 'Bahan Kemas', 'K104', '', 'Inner Box Stimox  Syrup Ivory 300g,UV'),
(877, 'Bahan Kemas', 'K105', '', 'Inner Box Stimox Kapsul Duplex 310g,UV'),
(878, 'Bahan Kemas', 'K163', '', 'Inner Box Sucralfeat Suspensi'),
(879, 'Bahan Kemas', 'K159', '', 'Inner Box Tenasol Kapsul'),
(880, 'Bahan Kemas', 'K106', '', 'Inner Box Ticomag Kaplet Duplex 310g,UV'),
(881, 'Bahan Kemas', 'K107', '', 'Inner Box Topram Kaplet Duplex 310g,UV'),
(882, 'Bahan Kemas', 'K108', '', 'Inner Box Truvit  Syrup Duplex 310g,UV'),
(883, 'Bahan Kemas', 'K109', '', 'Inner Box Truvit Drop Syrup 15 ml Duplex 310g,UV'),
(884, 'Bahan Kemas', 'K110', '', 'Inner Box Vegamon Kapsul Duplex 310g,UV'),
(885, 'Bahan Kemas', 'K111', '', 'Inner Box Velostin  Gel Duplex 310g,UV'),
(886, 'Bahan Kemas', 'K112', '', 'Inner Box Verona Kapsul Duplex 310g,UV'),
(887, 'Bahan Kemas', 'K113', '', 'Inner Box Vestrol Gel Duplex 310g,UV'),
(888, 'Bahan Kemas', 'K114', '', 'Inner Box Vical D Syrup Duplex 310g,UV'),
(889, 'Bahan Kemas', 'K116', '', 'Inner Box Vical D Syrup Ex My Duplex 310g,UV'),
(890, 'Bahan Kemas', 'K115', '', 'Inner Box Vical D Syrup Ex. KBJ Duplex 310g,UV'),
(891, 'Bahan Kemas', 'K117', '', 'Inner Box Vistanax Kapsul Duplex 310g,UV'),
(892, 'Bahan Kemas', 'K152', '', 'Inner Box Vitawell Kapsul'),
(893, 'Bahan Kemas', 'K118', '', 'Inner Box Vitomega Kapsul Ex. Kbj Duplex 310g,UV'),
(894, 'Bahan Kemas', 'K119', '', 'Inner Box Vitromega kapsul Duplex 310g,UV'),
(895, 'Bahan Kemas', 'K120', '', 'Inner Box Vitromega kapsul Ex My Duplex 310g,UV'),
(896, 'Bahan Kemas', 'K121', '', 'Inner Box Voldilex Kapsul Duplex 310g,UV'),
(897, 'Bahan Kemas', 'K122', '', 'Inner Box Vomilas Soft Kapsul Duplex 310g,UV'),
(898, 'Bahan Kemas', 'K123', '', 'Inner Box Xicalom Kaplet Duplex 310g,UV'),
(899, 'Bahan Kemas', 'K124', '', 'Inner Box Xomnia Kapsul Duplex 310g,UV'),
(900, 'Bahan Kemas', 'K154', '', 'Inner Box Zetron Injeksi'),
(901, 'Bahan Kemas', 'K153', '', 'Inner Box Zitrolas Kaplet'),
(902, 'Bahan Kemas', 'K130', '', 'Inner Box Ziven kaplet Duplex 310g,UV'),
(903, 'Bahan Kemas', 'B001', '', 'Inner Pot SalepTopix  '),
(904, 'Bahan Kemas', 'B013', '', 'Innerplug Botol Ester-C 60ml Solvita C 500'),
(905, 'Bahan Kemas', 'P001', '', 'Inti Staples Karton'),
(906, 'Bahan Kemas', 'P002', '', 'Inti Staples No.10-1m'),
(907, 'Bahan Kemas', 'C005', '', 'Kantong Plastik Logo solas Uk 14 x 9 cm'),
(908, 'Bahan Kemas', 'C004', '', 'Kantong Plastik Logo solas Uk 25 x 9 cm'),
(909, 'Bahan Kemas', 'C002', '', 'Kantong Plastik Logo solas Uk 30 x 12 cm'),
(910, 'Bahan Kemas', 'C003', '', 'Kantong Plastik Logo solas Uk 30 x 20 cm'),
(911, 'Bahan Kemas', 'C006', '', 'Kantong Plastik Plastik polos Uk 25 x 9 cm'),
(912, 'Bahan Kemas', 'M008 -1', '', 'Karton Baby Drop Syrup No.8 Ex My Uk.  31x28x17'),
(913, 'Bahan Kemas', 'M021', '', 'Karton Baxcef'),
(914, 'Bahan Kemas', 'M015', '', 'Karton Betiga  Uk. 48.5x44x35 cm'),
(915, 'Bahan Kemas', 'M001-2', '', 'Karton Curbexon Syrup No. 1 Ex.My Uk.450x270x120'),
(916, 'Bahan Kemas', 'M025', '', 'Karton Ellen White Body Lotion'),
(917, 'Bahan Kemas', 'M026', '', 'Karton Ellen White Body Milk'),
(918, 'Bahan Kemas', 'M001-15', '', 'Karton Flagsol Syrup  Export Kbj No. 1 Uk.450x275x120'),
(919, 'Bahan Kemas', 'M001-3', '', 'Karton Fortusin Syrup No. 1 Ex.My Uk.450x275x120'),
(920, 'Bahan Kemas', 'M001-4', '', 'Karton Gigadryl Syrup No. 1 Ex. KBJ Uk.450x275x120'),
(921, 'Bahan Kemas', 'M001-5', '', 'Karton Gygadryl Syrup No.1 Ex My Uk.450x275x120'),
(922, 'Bahan Kemas', 'M001-6', '', 'Karton Kamolas Syrup No. 1 Ex.My Uk.450x275x120'),
(923, 'Bahan Kemas', 'M001-7', '', 'Karton Kamolas Syrup No.1 Lkl Uk.450x275x120'),
(924, 'Bahan Kemas', 'M029', '', 'Karton Karton Fastzol'),
(925, 'Bahan Kemas', 'M002-6', '', 'Karton Lodecon kaplet Ex My Uk. 430x285x370'),
(926, 'Bahan Kemas', 'M001-8', '', 'Karton Moxalas Suspensi No. 1 Ex.My Uk.450x275x120'),
(927, 'Bahan Kemas', 'M012', '', 'Karton No. 12 Uk.38.2 X 24.7 X 15 CM'),
(928, 'Bahan Kemas', 'M013', '', 'Karton No. 13 UK;31.5 X 34.5 X 21 cm'),
(929, 'Bahan Kemas', 'M027', '', 'Karton No. 14 KOBN Kecil, KVWL'),
(930, 'Bahan Kemas', 'M028', '', 'Karton No. 15 (TCFM,KVRN) UK.43x29x36cm'),
(931, 'Bahan Kemas', 'M031', '', 'Karton No. 16 (TLDF)'),
(932, 'Bahan Kemas', 'M001-1', '', 'Karton No. 1A Uk 450x270x120'),
(933, 'Bahan Kemas', 'M005', '', 'Karton No. 5 Uk 490x300x130cm'),
(934, 'Bahan Kemas', 'M006', '', 'Karton No. 6 Uk 487x292x123'),
(935, 'Bahan Kemas', 'M007', '', 'Karton No. 7 Uk. 450 x 285 x110'),
(936, 'Bahan Kemas', 'M001', '', 'Karton No.1 Uk.450x270x120'),
(937, 'Bahan Kemas', 'M002', '', 'Karton No.2 Uk. 425x280x355'),
(938, 'Bahan Kemas', 'M003', '', 'Karton No.3 Uk 450x335x312'),
(939, 'Bahan Kemas', 'M004', '', 'Karton No.4 Uk 57,5x34,5x21cm'),
(940, 'Bahan Kemas', 'M007-1', '', 'Karton No.7 A 450x285x110'),
(941, 'Bahan Kemas', 'M008', '', 'Karton No.8 Uk.  31x28x17'),
(942, 'Bahan Kemas', 'M009', '', 'Karton No.9 Uk. 49,5x35,5x39,5'),
(943, 'Bahan Kemas', 'M007-2', '', 'Karton Novelas Lotion No. 7B'),
(944, 'Bahan Kemas', 'M014', '', 'Karton Obdhamin Kecil No. 14'),
(945, 'Bahan Kemas', 'M004-1', '', 'Karton Orphen No.4 Lkl Uk 57,5x34,5x21cm'),
(946, 'Bahan Kemas', 'M022', '', 'Karton PENEM'),
(947, 'Bahan Kemas', 'M034-1', '', 'Karton Partisi Secret Red 1'),
(948, 'Bahan Kemas', 'M034-2', '', 'Karton Partisi Secret Red 2'),
(949, 'Bahan Kemas', 'M004-2', '', 'Karton Redusec ExH No. 4 Uk 57,5x34,5x21cm'),
(950, 'Bahan Kemas', 'M016', '', 'Karton Secret Body Lotion Ex UK.32X19.5X26.5 CM'),
(951, 'Bahan Kemas', 'M017', '', 'Karton Secret Body Milk Ex'),
(952, 'Bahan Kemas', 'M020', '', 'Karton Secret Cream Exp.'),
(953, 'Bahan Kemas', 'M032', '', 'Karton Secret Red Flower Body Lotion'),
(954, 'Bahan Kemas', 'M033', '', 'Karton Secret Red Flower Body Milk'),
(955, 'Bahan Kemas', 'M023', '', 'Karton Secrets Meaningfull Body Lotion'),
(956, 'Bahan Kemas', 'M024', '', 'Karton Secrets Meaningfull Body Milk'),
(957, 'Bahan Kemas', 'M010', '', 'Karton Solacort Cream No. 10 UK.24X19X9.2 CM'),
(958, 'Bahan Kemas', 'M019', '', 'Karton Solafexone'),
(959, 'Bahan Kemas', 'M001-9', '', 'Karton Solafluz Syrup No. 1 Ex My Uk.450x275x120'),
(960, 'Bahan Kemas', 'M002-1', '', 'Karton Solasic Kaplet  No. 2  Ex My Uk. 430x285x370'),
(961, 'Bahan Kemas', 'M005-1', '', 'Karton Solpenox Dry Syrup Ex.My Uk 490x300x130'),
(962, 'Bahan Kemas', 'M001-10', '', 'Karton Solvita Plus Syrup No. 1 Ex My Uk.450x275x120'),
(963, 'Bahan Kemas', 'M001-11', '', 'Karton Solvita Plus Syrup No. 1 Ex.KBJ Uk.450x275x120'),
(964, 'Bahan Kemas', 'M001-12', '', 'Karton Solvita Syrup Ex No.1 My Uk.450x275x120'),
(965, 'Bahan Kemas', 'M002-2', '', 'Karton Solvitral Kaplet  No. 2  Lkl Uk. 430x285x370'),
(966, 'Bahan Kemas', 'M002-3', '', 'Karton Solvitral Kaplet  No. 2 Ex My Uk. 430x285x370'),
(967, 'Bahan Kemas', 'M002-4', '', 'Karton Solvitron Kapsul No.2 Ex My Uk. 430x285x370'),
(968, 'Bahan Kemas', 'M002-5', '', 'Karton Solvitron Kapsul No.2 Lkl Uk. 430x285x370'),
(969, 'Bahan Kemas', 'M018', '', 'Karton Topix Uk. 39x36x24 cm'),
(970, 'Bahan Kemas', 'M011', '', 'Karton Velostin Gel  No.11 45 x 30 x 13,5'),
(971, 'Bahan Kemas', 'M001-14', '', 'Karton Vical D Syrup Ex No.1 My Uk.450x275x120'),
(972, 'Bahan Kemas', 'M001-13', '', 'Karton Vical D SyrupNo. 1  Ex. KBJ Uk.450x270x120'),
(973, 'Bahan Kemas', 'M009-2', '', 'Karton Vitromega Kapsul Ex. Kbj  No.9 Uk.  49,5x35,5x39,5'),
(974, 'Bahan Kemas', 'M009-1', '', 'Karton Vitromega Kapsul Ex.My No.9 Uk.  49,5x35,5x39,5'),
(975, 'Bahan Kemas', 'M030', '', 'Karton Zetron Injeksi'),
(976, 'Bahan Kemas', 'N001', '', 'Label Outer Box Anstrep Kaplet'),
(977, 'Bahan Kemas', 'N002', '', 'Label Outer Box Anstrep Suspensi'),
(978, 'Bahan Kemas', 'N003', '', 'Label Outer Box Antrexol Kapsul '),
(979, 'Bahan Kemas', 'N107', '', 'Label Outer Box Arfen Forte'),
(980, 'Bahan Kemas', 'N004', '', 'Label Outer Box Arfen Kaplet'),
(981, 'Bahan Kemas', 'N106', '', 'Label Outer Box Arfen Suspensi'),
(982, 'Bahan Kemas', 'N111', '', 'Label Outer Box Ascolas '),
(983, 'Bahan Kemas', 'N125', '', 'Label Outer Box Ascolas Kapsul'),
(984, 'Bahan Kemas', 'N005', '', 'Label Outer Box Asten Kapsul '),
(985, 'Bahan Kemas', 'N006', '', 'Label Outer Box Axtan Kapsul'),
(986, 'Bahan Kemas', 'N007', '', 'Label Outer Box Axtan Syrup'),
(987, 'Bahan Kemas', 'N008', '', 'Label Outer Box Bital Balsam'),
(988, 'Bahan Kemas', 'N009', '', 'Label Outer Box Brazine Kaplet '),
(989, 'Bahan Kemas', 'N105', '', 'Label Outer Box Brontez Kaplet'),
(990, 'Bahan Kemas', 'N010', '', 'Label Outer Box Cafmosol kaplet'),
(991, 'Bahan Kemas', 'N011', '', 'Label Outer Box Calcimega Kapsul '),
(992, 'Bahan Kemas', 'N012', '', 'Label Outer Box Carniten Soft Kapsul '),
(993, 'Bahan Kemas', 'N013', '', 'Label Outer Box Cefadroxil  Forte'),
(994, 'Bahan Kemas', 'N014', '', 'Label Outer Box Cefadroxil DS'),
(995, 'Bahan Kemas', 'N015', '', 'Label Outer Box Cefadroxil Monohydrate Kapsul'),
(996, 'Bahan Kemas', 'N016', '', 'Label Outer Box Cetrol Kaplet'),
(997, 'Bahan Kemas', 'N117', '', 'Label Outer Box Chlorphenamine Maleate 4mg Kaplet'),
(998, 'Bahan Kemas', 'N017', '', 'Label Outer Box Chromazol Kaplet'),
(999, 'Bahan Kemas', 'N018', '', 'Label Outer Box Cimexol Kaplet '),
(1000, 'Bahan Kemas', 'N103', '', 'Label Outer Box Colicol'),
(1001, 'Bahan Kemas', 'N019', '', 'Label Outer Box Collidium Kaplet'),
(1002, 'Bahan Kemas', 'N020', '', 'Label Outer Box Confortin Gel'),
(1003, 'Bahan Kemas', 'N138', '', 'Label Outer Box Curbex-D 4000 Kaplet'),
(1004, 'Bahan Kemas', 'N021', '', 'Label Outer Box Curbexon Syrup'),
(1005, 'Bahan Kemas', 'N022', '', 'Label Outer Box Curbexon Syrup 100 ml'),
(1006, 'Bahan Kemas', 'N108', '', 'Label Outer Box Curbexvit Kapsul'),
(1007, 'Bahan Kemas', 'N135', '', 'Label Outer Box Deconic BP Syrup'),
(1008, 'Bahan Kemas', 'N134', '', 'Label Outer Box Deconic Syrup'),
(1009, 'Bahan Kemas', 'N131', '', 'Label Outer Box Dexsol'),
(1010, 'Bahan Kemas', 'N023', '', 'Label Outer Box Droxal Dry Syrup'),
(1011, 'Bahan Kemas', 'N024', '', 'Label Outer Box Droxal Forte Dry Syrup'),
(1012, 'Bahan Kemas', 'N025', '', 'Label Outer Box Droxal Kapsul'),
(1013, 'Bahan Kemas', 'N027', '', 'Label Outer Box Fixam Dry Syrup'),
(1014, 'Bahan Kemas', 'N026', '', 'Label Outer Box Fixam Kapsul '),
(1015, 'Bahan Kemas', 'N104', '', 'Label Outer Box Flagsol Kaplet'),
(1016, 'Bahan Kemas', 'N028', '', 'Label Outer Box Flagsol Syrup'),
(1017, 'Bahan Kemas', 'N029', '', 'Label Outer Box Flamoxi Kaplet'),
(1018, 'Bahan Kemas', 'N137', '', 'Label Outer Box Folate Kaplet'),
(1019, 'Bahan Kemas', 'N140', '', 'Label Outer Box Folaten'),
(1020, 'Bahan Kemas', 'N030', '', 'Label Outer Box Fortusin Syrup 120 ml'),
(1021, 'Bahan Kemas', 'N031', '', 'Label Outer Box Fortusin Syrup 60 ml'),
(1022, 'Bahan Kemas', 'N032', '', 'Label Outer Box Fucotrap 100'),
(1023, 'Bahan Kemas', 'N110', '', 'Label Outer Box Fucotrap 100 Syrup'),
(1024, 'Bahan Kemas', 'N033', '', 'Label Outer Box Fucotrap Kapsul'),
(1025, 'Bahan Kemas', 'N034', '', 'Label Outer Box Gigadryl syrup'),
(1026, 'Bahan Kemas', 'N114', '', 'Label Outer Box Glutasol 30'),
(1027, 'Bahan Kemas', 'N113', '', 'Label Outer Box Glutasol 50'),
(1028, 'Bahan Kemas', 'N126', '', 'Label Outer Box Glutasol Kapsul'),
(1029, 'Bahan Kemas', 'N035', '', 'Label Outer Box Grovita Syrup'),
(1030, 'Bahan Kemas', 'N036', '', 'Label Outer Box Kamolas Drops'),
(1031, 'Bahan Kemas', 'N037', '', 'Label Outer Box Kamolas Kaplet 100'),
(1032, 'Bahan Kemas', 'N038', '', 'Label Outer Box Kamolas Kaplet 1000'),
(1033, 'Bahan Kemas', 'N039', '', 'Label Outer Box Kamolas Syrup'),
(1034, 'Bahan Kemas', 'N040', '', 'Label Outer Box Kamolas Syrup Forte'),
(1035, 'Bahan Kemas', 'N041', '', 'Label Outer Box Lactasin Kapsul'),
(1036, 'Bahan Kemas', 'N042', '', 'Label Outer Box Lexid Kapsul'),
(1037, 'Bahan Kemas', 'N043', '', 'Label Outer Box Lipidon Soft Kapsul'),
(1038, 'Bahan Kemas', 'N044', '', 'Label Outer Box Livitron Kapsul'),
(1039, 'Bahan Kemas', 'N045', '', 'Label Outer Box Lodecon Forte Kaplet'),
(1040, 'Bahan Kemas', 'N046', '', 'Label Outer Box Lodecon Kaplet'),
(1041, 'Bahan Kemas', 'N047', '', 'Label Outer Box Loksin Cream'),
(1042, 'Bahan Kemas', 'N139', '', 'Label Outer Box Methysol-8 Kaplet'),
(1043, 'Bahan Kemas', 'N048', '', 'Label Outer Box Moxalas Kaplet'),
(1044, 'Bahan Kemas', 'N049', '', 'Label Outer Box Moxalas Suspensi'),
(1045, 'Bahan Kemas', 'N050', '', 'Label Outer Box Muveron Drop Syrup'),
(1046, 'Bahan Kemas', 'N051', '', 'Label Outer Box Muveron Syrup'),
(1047, 'Bahan Kemas', 'N052', '', 'Label Outer Box Nootrisol Kaplet'),
(1048, 'Bahan Kemas', 'N053', '', 'Label Outer Box Norflam Kapsul'),
(1049, 'Bahan Kemas', 'N054', '', 'Label Outer Box Novelas'),
(1050, 'Bahan Kemas', 'N055', '', 'Label Outer Box Obdhamin Kapsul'),
(1051, 'Bahan Kemas', 'N109', '', 'Label Outer Box Obdhamin Kapsul Kecil'),
(1052, 'Bahan Kemas', 'N056', '', 'Label Outer Box Orphen Kaplet'),
(1053, 'Bahan Kemas', 'N057', '', 'Label Outer Box Osvion Plus Kapsul'),
(1054, 'Bahan Kemas', 'N058', '', 'Label Outer Box Oxcal Kapsul'),
(1055, 'Bahan Kemas', 'N118', '', 'Label Outer Box Paracetamol 500mg Kaplet'),
(1056, 'Bahan Kemas', 'N059', '', 'Label Outer Box Pectum Syrup'),
(1057, 'Bahan Kemas', 'N060', '', 'Label Outer Box Pectum Syrup 120 ml'),
(1058, 'Bahan Kemas', 'N061', '', 'Label Outer Box Primunox Kapsul'),
(1059, 'Bahan Kemas', 'N062', '', 'Label Outer Box Proseval Kapsul'),
(1060, 'Bahan Kemas', 'N063', '', 'Label Outer Box Qinox Kaplet'),
(1061, 'Bahan Kemas', 'N129', '', 'Label Outer Box Quinotic'),
(1062, 'Bahan Kemas', 'N064', '', 'Label Outer Box Redusec'),
(1063, 'Bahan Kemas', 'N065', '', 'Label Outer Box Rigotin Soft Kapsul'),
(1064, 'Bahan Kemas', 'N066', '', 'Label Outer Box Salep Topix'),
(1065, 'Bahan Kemas', 'N067', '', 'Label Outer Box Sintrol Kaplet '),
(1066, 'Bahan Kemas', 'N068', '', 'Label Outer Box Solachlor Kapsul 1000'),
(1067, 'Bahan Kemas', 'N069', '', 'Label Outer Box Solacort Cream'),
(1068, 'Bahan Kemas', 'N070', '', 'Label Outer Box Solafluz Syrup'),
(1069, 'Bahan Kemas', 'N071', '', 'Label Outer Box Solaneuron Kaplet '),
(1070, 'Bahan Kemas', 'N072', '', 'Label Outer Box Solasic kaplet'),
(1071, 'Bahan Kemas', 'N073', '', 'Label Outer Box Solathim Dry Syrup'),
(1072, 'Bahan Kemas', 'N074', '', 'Label Outer Box Solathim Kapsul'),
(1073, 'Bahan Kemas', 'N075', '', 'Label Outer Box Soldextam Kaplet'),
(1074, 'Bahan Kemas', 'N076', '', 'Label Outer Box Solpenox Dry Syrup'),
(1075, 'Bahan Kemas', 'N077', '', 'Label Outer Box Solpenox kaplet'),
(1076, 'Bahan Kemas', 'N122', '', 'Label Outer Box Solpepsa'),
(1077, 'Bahan Kemas', 'N078', '', 'Label Outer Box Soltralin 500 Kapsul'),
(1078, 'Bahan Kemas', 'N079', '', 'Label Outer Box Soltralin Kapsul 1000'),
(1079, 'Bahan Kemas', 'N080', '', 'Label Outer Box Solvita Baby Drop'),
(1080, 'Bahan Kemas', 'N112', '', 'Label Outer Box Solvita C 500'),
(1081, 'Bahan Kemas', 'N119', '', 'Label Outer Box Solvita D 1000'),
(1082, 'Bahan Kemas', 'N130', '', 'Label Outer Box Solvita D 5000'),
(1083, 'Bahan Kemas', 'N116', '', 'Label Outer Box Solvita DEX'),
(1084, 'Bahan Kemas', 'N133', '', 'Label Outer Box Solvita Joint Kapsul'),
(1085, 'Bahan Kemas', 'N128', '', 'Label Outer Box Solvita MAX Botol'),
(1086, 'Bahan Kemas', 'N127', '', 'Label Outer Box Solvita MAX Kapsul'),
(1087, 'Bahan Kemas', 'N081', '', 'Label Outer Box Solvita Plus Syrup'),
(1088, 'Bahan Kemas', 'N082', '', 'Label Outer Box Solvita Syrup'),
(1089, 'Bahan Kemas', 'N115', '', 'Label Outer Box Solvita Z'),
(1090, 'Bahan Kemas', 'N120', '', 'Label Outer Box Solvita Z Kapsul 10x10'),
(1091, 'Bahan Kemas', 'N121', '', 'Label Outer Box Solvita Z Kapsul 25x1x4'),
(1092, 'Bahan Kemas', 'N083', '', 'Label Outer Box Solvitral Kaplet'),
(1093, 'Bahan Kemas', 'N084', '', 'Label Outer Box Solvitron Kapsul'),
(1094, 'Bahan Kemas', 'N085', '', 'Label Outer Box Solvitron Syrup'),
(1095, 'Bahan Kemas', 'N086', '', 'Label Outer Box Stimox Kapsul '),
(1096, 'Bahan Kemas', 'N087', '', 'Label Outer Box Stimox Syrup'),
(1097, 'Bahan Kemas', 'N136', '', 'Label Outer Box Sucralfeat Suspensi'),
(1098, 'Bahan Kemas', 'N132', '', 'Label Outer Box Tenasol'),
(1099, 'Bahan Kemas', 'N088', '', 'Label Outer Box Ticomag Kaplet'),
(1100, 'Bahan Kemas', 'N089', '', 'Label Outer Box Topram Kaplet'),
(1101, 'Bahan Kemas', 'N091', '', 'Label Outer Box Truvit Drop Syrup 15 ml'),
(1102, 'Bahan Kemas', 'N090', '', 'Label Outer Box Truvit Syrup'),
(1103, 'Bahan Kemas', 'N092', '', 'Label Outer Box Vegamon Kapsul'),
(1104, 'Bahan Kemas', 'N093', '', 'Label Outer Box Velostin Gel'),
(1105, 'Bahan Kemas', 'N094', '', 'Label Outer Box Verona Kapsul '),
(1106, 'Bahan Kemas', 'N095', '', 'Label Outer Box Vestrol Gel'),
(1107, 'Bahan Kemas', 'N096', '', 'Label Outer Box Vical D Syrup'),
(1108, 'Bahan Kemas', 'N097', '', 'Label Outer Box Vistanax Kapsul'),
(1109, 'Bahan Kemas', 'N123', '', 'Label Outer Box Vitawell'),
(1110, 'Bahan Kemas', 'N098', '', 'Label Outer Box Vitromega kapsul'),
(1111, 'Bahan Kemas', 'N099', '', 'Label Outer Box Voldilex Kapsul'),
(1112, 'Bahan Kemas', 'N100', '', 'Label Outer Box Vomil Soft Kapsul'),
(1113, 'Bahan Kemas', 'N101', '', 'Label Outer Box Xicalom Kaplet'),
(1114, 'Bahan Kemas', 'N102', '', 'Label Outer Box Xomnia Kapsul '),
(1115, 'Bahan Kemas', 'N124', '', 'Label Outer Box Zithrolas'),
(1116, 'Bahan Kemas', 'S003', '', 'Label Pengemasan'),
(1117, 'Bahan Kemas', 'S004', '', 'Label Pengemasan Ex'),
(1118, 'Bahan Kemas', 'I001', '', 'Leaflet Anstrep Kaplet HVS'),
(1119, 'Bahan Kemas', 'I002', '', 'Leaflet Anstrep Suspensi HVS'),
(1120, 'Bahan Kemas', 'I003', '', 'Leaflet Antrexol Kapsul HVS'),
(1121, 'Bahan Kemas', 'I004', '', 'Leaflet Arfen Kaplet HVS'),
(1122, 'Bahan Kemas', 'I125', '', 'Leaflet Arfen Suspensi HVS'),
(1123, 'Bahan Kemas', 'I129', '', 'Leaflet Ascolas HVS'),
(1124, 'Bahan Kemas', 'I005', '', 'Leaflet Asten Soft Kapsul HVS'),
(1125, 'Bahan Kemas', 'I006', '', 'Leaflet Axtan  Kapsul HVS'),
(1126, 'Bahan Kemas', 'I007', '', 'Leaflet Axtan Syrup HVS'),
(1127, 'Bahan Kemas', 'I124', '', 'Leaflet Baxcef HVS'),
(1128, 'Bahan Kemas', 'I008', '', 'Leaflet Bital Balsam HVS'),
(1129, 'Bahan Kemas', 'I009', '', 'Leaflet Brazine Kaplet HVS'),
(1130, 'Bahan Kemas', 'I121', '', 'Leaflet Brontez Kaplet HVS'),
(1131, 'Bahan Kemas', 'I011', '', 'Leaflet Calcimega Kapsul HVS'),
(1132, 'Bahan Kemas', 'I012', '', 'Leaflet Carniten Soft Kapsul HVS'),
(1133, 'Bahan Kemas', 'I013', '', 'Leaflet Cefadroxil DS,Forte,Kapsul HVS'),
(1134, 'Bahan Kemas', 'I014', '', 'Leaflet Cetrol  Kaplet  HVS'),
(1135, 'Bahan Kemas', 'S005', '', 'Leaflet Chepalon'),
(1136, 'Bahan Kemas', 'I131', '', 'Leaflet Chlorphenamine Maleate 4mg Kaplet HVS'),
(1137, 'Bahan Kemas', 'I015', '', 'Leaflet Chromazol Kaplet HVS'),
(1138, 'Bahan Kemas', 'I016', '', 'Leaflet Cimexol Kaplet HVS'),
(1139, 'Bahan Kemas', 'I118', '', 'Leaflet Colicol HVS'),
(1140, 'Bahan Kemas', 'I017', '', 'Leaflet Collidium Kaplet HVS'),
(1141, 'Bahan Kemas', 'I018', '', 'Leaflet Confortin Gel HVS'),
(1142, 'Bahan Kemas', 'I150', '', 'Leaflet Curbex D4000 Kaplet Salut Selaput HVS'),
(1143, 'Bahan Kemas', 'I019', '', 'Leaflet Curbexon Syrup 100 ml HVS'),
(1144, 'Bahan Kemas', 'I020', '', 'Leaflet Curbexon Syrup 60 ml HVS'),
(1145, 'Bahan Kemas', 'I021', '', 'Leaflet Curbexon Syrup Ex.My HVS'),
(1146, 'Bahan Kemas', 'I127', '', 'Leaflet Curbexvit Kapsul HVS'),
(1147, 'Bahan Kemas', 'I147', '', 'Leaflet Deconic BP Syrup'),
(1148, 'Bahan Kemas', 'I146', '', 'Leaflet Deconic Syrup'),
(1149, 'Bahan Kemas', 'I143', '', 'Leaflet Dexsol Kapsul'),
(1150, 'Bahan Kemas', 'I022', '', 'Leaflet Droxal Dry Syrup & Forte & Kapsul HVS'),
(1151, 'Bahan Kemas', 'I135', '', 'Leaflet Fastzol HVS'),
(1152, 'Bahan Kemas', 'I023', '', 'Leaflet Fixam  Kapsul  dan Dry Syrup HVS'),
(1153, 'Bahan Kemas', 'I120', '', 'Leaflet Flagsol Kaplet HVS'),
(1154, 'Bahan Kemas', 'I122', '', 'Leaflet Flagsol Syrup  Export Kbj HVS'),
(1155, 'Bahan Kemas', 'I024', '', 'Leaflet Flagsol Syrup HVS'),
(1156, 'Bahan Kemas', 'I025', '', 'Leaflet Flamoxi  Kaplet  HVS'),
(1157, 'Bahan Kemas', 'I149', '', 'Leaflet Folate Kaplet HVS'),
(1158, 'Bahan Kemas', 'I153', '', 'Leaflet Folaten kapsul'),
(1159, 'Bahan Kemas', 'I026', '', 'Leaflet Fortusin Syrup (60 ml & 120 ml) HVS'),
(1160, 'Bahan Kemas', 'I027', '', 'Leaflet Fortusin Syrup 120 ml HVS'),
(1161, 'Bahan Kemas', 'I028', '', 'Leaflet Fortusin Syrup Ex.My HVS'),
(1162, 'Bahan Kemas', 'I029', '', 'Leaflet Fucotrap 100 HVS'),
(1163, 'Bahan Kemas', 'I030', '', 'Leaflet Fucotrap Kapsul HVS'),
(1164, 'Bahan Kemas', 'I128', '', 'Leaflet Fucotrap Syrup 100 HVS'),
(1165, 'Bahan Kemas', 'I031', '', 'Leaflet Gigadril Syrup HVS'),
(1166, 'Bahan Kemas', 'I032', '', 'Leaflet Gigadryl Syrup Ex. KBJ HVS'),
(1167, 'Bahan Kemas', 'I033', '', 'Leaflet Gigadyrl Syrup Ex My HVS'),
(1168, 'Bahan Kemas', 'I130', '', 'Leaflet Glutasol 50 HVS'),
(1169, 'Bahan Kemas', 'I034', '', 'Leaflet Grovita Syrup HVS'),
(1170, 'Bahan Kemas', 'I035', '', 'Leaflet Kamolas Drops  & Forte HVS'),
(1171, 'Bahan Kemas', 'I037', '', 'Leaflet Kamolas Kaplet 1000 HVS'),
(1172, 'Bahan Kemas', 'I039', '', 'Leaflet Kamolas Syrup Ex.My HVS'),
(1173, 'Bahan Kemas', 'I040', '', 'Leaflet Kamolas Syrup Forte HVS'),
(1174, 'Bahan Kemas', 'I038', '', 'Leaflet Kamolas Syrup HVS'),
(1175, 'Bahan Kemas', 'I041', '', 'Leaflet Lactasin Kapsul HVS'),
(1176, 'Bahan Kemas', 'I042', '', 'Leaflet Lexid  Kapul HVS'),
(1177, 'Bahan Kemas', 'I043', '', 'Leaflet Lipidon Soft Kapsul HVS'),
(1178, 'Bahan Kemas', 'I044', '', 'Leaflet Livitron Kapsul HVS'),
(1179, 'Bahan Kemas', 'I047', '', 'Leaflet Lodecon Kaplet Ex My HVS'),
(1180, 'Bahan Kemas', 'I048', '', 'Leaflet Loksin Cream HVS'),
(1181, 'Bahan Kemas', 'I151', '', 'Leaflet Methysol-8 Kaplet'),
(1182, 'Bahan Kemas', 'I049', '', 'Leaflet Moxalas  Syrup Ex. My HVS'),
(1183, 'Bahan Kemas', 'I050', '', 'Leaflet Moxalas Kaplet HVS'),
(1184, 'Bahan Kemas', 'I051', '', 'Leaflet Moxalas Suspensi & Kaplet HVS'),
(1185, 'Bahan Kemas', 'I052', '', 'Leaflet Muveron Drop Syrup HVS'),
(1186, 'Bahan Kemas', 'I053', '', 'Leaflet Muveron Syrup HVS'),
(1187, 'Bahan Kemas', 'I054', '', 'Leaflet Nootrisol  Kaplet HVS'),
(1188, 'Bahan Kemas', 'I055', '', 'Leaflet Norflam Kapsul HVS'),
(1189, 'Bahan Kemas', 'I056', '', 'Leaflet Novelas HVS'),
(1190, 'Bahan Kemas', 'I057', '', 'Leaflet Obdhamin Kapsul HVS'),
(1191, 'Bahan Kemas', 'I058', '', 'Leaflet Orphen Kaplet HVS'),
(1192, 'Bahan Kemas', 'I059', '', 'Leaflet Osvion Plus Kapsul HVS'),
(1193, 'Bahan Kemas', 'I060', '', 'Leaflet Oxcal Kapsul HVS'),
(1194, 'Bahan Kemas', 'I126', '', 'Leaflet PENEM HVS'),
(1195, 'Bahan Kemas', 'I132', '', 'Leaflet Paracetamol 500mg Kaplet HVS'),
(1196, 'Bahan Kemas', 'I061', '', 'Leaflet Pectum Syrup 120 ml HVS'),
(1197, 'Bahan Kemas', 'I062', '', 'Leaflet Pectum Syrup 60 & 120 ml HVS'),
(1198, 'Bahan Kemas', 'I063', '', 'Leaflet Primunox  Kapsul  HVS'),
(1199, 'Bahan Kemas', 'I064', '', 'Leaflet Proseval Kapsul HVS'),
(1200, 'Bahan Kemas', 'I065', '', 'Leaflet Qinox Kaplet HVS'),
(1201, 'Bahan Kemas', 'I141', '', 'Leaflet Quinotic Kaplet Salut Selaput HVS'),
(1202, 'Bahan Kemas', 'I066', '', 'Leaflet Redusec Kapsul HVS'),
(1203, 'Bahan Kemas', 'I067', '', 'Leaflet Rigotin Soft Kapsul HVS'),
(1204, 'Bahan Kemas', 'I068', '', 'Leaflet Secret Cream Exp. HVS'),
(1205, 'Bahan Kemas', 'I069', '', 'Leaflet Sintrol  Kaplet HVS'),
(1206, 'Bahan Kemas', 'I070', '', 'Leaflet Solachlor 250 kapsul HVS'),
(1207, 'Bahan Kemas', 'I071', '', 'Leaflet Solacort Cream HVS'),
(1208, 'Bahan Kemas', 'I119', '', 'Leaflet Solafexone HVS'),
(1209, 'Bahan Kemas', 'I073', '', 'Leaflet Solafluz Syrup Ex My HVS'),
(1210, 'Bahan Kemas', 'I072', '', 'Leaflet Solafluz Syrup HVS'),
(1211, 'Bahan Kemas', 'I075', '', 'Leaflet Solasic kaplet HVS'),
(1212, 'Bahan Kemas', 'I076', '', 'Leaflet SolasicKaplet Ex. My HVS'),
(1213, 'Bahan Kemas', 'I077', '', 'Leaflet Solathim DS & Kapsul HVS'),
(1214, 'Bahan Kemas', 'I078', '', 'Leaflet Solathim Kapsul HVS'),
(1215, 'Bahan Kemas', 'I079', '', 'Leaflet Soldextam Kaplet HVS'),
(1216, 'Bahan Kemas', 'I081', '', 'Leaflet Solpenox Dry Syrup Ex. My HVS'),
(1217, 'Bahan Kemas', 'I080', '', 'Leaflet Solpenox Dry Syrup/kaplet HVS'),
(1218, 'Bahan Kemas', 'I082', '', 'Leaflet Solpenox kaplet HVS'),
(1219, 'Bahan Kemas', 'I136', '', 'Leaflet Solpepsa HVS'),
(1220, 'Bahan Kemas', 'I083', '', 'Leaflet Soltralin 250 kapsul HVS'),
(1221, 'Bahan Kemas', 'I084', '', 'Leaflet Soltralin 500 Kapsul HVS'),
(1222, 'Bahan Kemas', 'I085', '', 'Leaflet Solvita Baby Drop HVS'),
(1223, 'Bahan Kemas', 'I086', '', 'Leaflet Solvita Baby Drop Syrup  Ex My HVS'),
(1224, 'Bahan Kemas', 'I133', '', 'Leaflet Solvita D 1000 HVS'),
(1225, 'Bahan Kemas', 'I142', '', 'Leaflet Solvita D 5000'),
(1226, 'Bahan Kemas', 'I145', '', 'Leaflet Solvita Joint Kapsul HVS'),
(1227, 'Bahan Kemas', 'I140', '', 'Leaflet Solvita Max Kapsul HVS'),
(1228, 'Bahan Kemas', 'I088', '', 'Leaflet Solvita Plus Syrup Ex My HVS'),
(1229, 'Bahan Kemas', 'I089', '', 'Leaflet Solvita Plus Syrup Ex.KBJ HVS'),
(1230, 'Bahan Kemas', 'I087', '', 'Leaflet Solvita Plus Syrup HVS'),
(1231, 'Bahan Kemas', 'I091', '', 'Leaflet Solvita Syrup Ex My HVS'),
(1232, 'Bahan Kemas', 'I090', '', 'Leaflet Solvita Syrup HVS'),
(1233, 'Bahan Kemas', 'I134', '', 'Leaflet Solvita Z Kapsul Catch Cover HVS'),
(1234, 'Bahan Kemas', 'I093', '', 'Leaflet Solvitral Kaplet Ex My HVS'),
(1235, 'Bahan Kemas', 'I092', '', 'Leaflet Solvitral Kaplet HVS'),
(1236, 'Bahan Kemas', 'I095', '', 'Leaflet Solvitron Kapsul  Ex My HVS'),
(1237, 'Bahan Kemas', 'I094', '', 'Leaflet Solvitron Kapsul HVS'),
(1238, 'Bahan Kemas', 'I096', '', 'Leaflet Solvitron Syrup HVS'),
(1239, 'Bahan Kemas', 'I097', '', 'Leaflet Stimox Kapsul HVS'),
(1240, 'Bahan Kemas', 'I098', '', 'Leaflet Stimox Syrup HVS'),
(1241, 'Bahan Kemas', 'I148', '', 'Leaflet Sucralfeat Suspensi'),
(1242, 'Bahan Kemas', 'I144', '', 'Leaflet Tenasol Kapsul HVS'),
(1243, 'Bahan Kemas', 'I100', '', 'Leaflet Topram HVS'),
(1244, 'Bahan Kemas', 'I101', '', 'Leaflet Truvit Drop Syrup 15 ml HVS'),
(1245, 'Bahan Kemas', 'I102', '', 'Leaflet Truvit Syrup HVS'),
(1246, 'Bahan Kemas', 'I103', '', 'Leaflet Vegamon Kapsul HVS'),
(1247, 'Bahan Kemas', 'I104', '', 'Leaflet Velostin  Gel HVS'),
(1248, 'Bahan Kemas', 'I105', '', 'Leaflet Verona Kapsul HVS'),
(1249, 'Bahan Kemas', 'I106', '', 'Leaflet Vestrol Gel HVS'),
(1250, 'Bahan Kemas', 'I109', '', 'Leaflet Vical D Syrup Ex My HVS'),
(1251, 'Bahan Kemas', 'I108', '', 'Leaflet Vical D Syrup Ex. KBJ HVS'),
(1252, 'Bahan Kemas', 'I107', '', 'Leaflet Vical D Syrup HVS'),
(1253, 'Bahan Kemas', 'I110', '', 'Leaflet Vistanax Kapsul HVS'),
(1254, 'Bahan Kemas', 'I137', '', 'Leaflet Vitawell Kapsul HVS'),
(1255, 'Bahan Kemas', 'I111', '', 'Leaflet Vitomega Kapsul Ex. Kbj HVS'),
(1256, 'Bahan Kemas', 'I112', '', 'Leaflet Vitomega Kapsul Ex. My HVS'),
(1257, 'Bahan Kemas', 'I113', '', 'Leaflet Vitromega kapsul HVS'),
(1258, 'Bahan Kemas', 'I114', '', 'Leaflet Voldilex  Kapsul HVS'),
(1259, 'Bahan Kemas', 'I115', '', 'Leaflet Vomilas Soft Kapsul HVS'),
(1260, 'Bahan Kemas', 'I116', '', 'Leaflet Xicalom Kaplet HVS'),
(1261, 'Bahan Kemas', 'I117', '', 'Leaflet Xomnia Kapsul HVS'),
(1262, 'Bahan Kemas', 'I139', '', 'Leaflet Zetron Injeksi HVS'),
(1263, 'Bahan Kemas', 'I138', '', 'Leaflet Zitrolas Kaplet HVS'),
(1264, 'Bahan Kemas', 'I123', '', 'Leaflet Ziven kaplet HVS'),
(1265, 'Bahan Kemas', 'Q001', '', 'Lem Fox'),
(1266, 'Bahan Kemas', 'S006', '', 'Memo Solvita Baby Drop'),
(1267, 'Bahan Kemas', 'S007', '', 'Memo Vical D'),
(1268, 'Bahan Kemas', 'B006', '', 'PP Cap Alu  D 3,15 cm'),
(1269, 'Bahan Kemas', 'B004', '', 'PP Cap Alu D 2,2 cm'),
(1270, 'Bahan Kemas', 'B005', '', 'PP Cap Alu D 2,8 cm'),
(1271, 'Bahan Kemas', 'J002', '', 'Pipet Tetes'),
(1272, 'Bahan Kemas', 'O001', '', 'Plak Band Coklat'),
(1273, 'Bahan Kemas', 'O001', '', 'Plak Band Solas 48x100 Mm'),
(1274, 'Bahan Kemas', 'T001', '', 'Plakban Bening'),
(1275, 'Bahan Kemas', 'B002', '', 'Plastik  karyana dalam 10x15'),
(1276, 'Bahan Kemas', 'T002', '', 'Plastik Sample'),
(1277, 'Bahan Kemas', 'L002', '', 'Plastik Sring Pack Baby Drop /secret Uk 16,5 x 40 cm'),
(1278, 'Bahan Kemas', 'L001', '', 'Plastik Sring Pack Baby Drop Uk 21,5 x 20,5 cm'),
(1279, 'Bahan Kemas', 'L003', '', 'Plastik Sring Pack Betiga Uk. 19cmx20cmx40 mc'),
(1280, 'Bahan Kemas', 'L004', '', 'Plastik Sring Pack Novelas Uk 21,5 x 20,5 cm'),
(1281, 'Bahan Kemas', 'L005', '', 'Plastik Sring Pack Sring Tutup Novelas'),
(1282, 'Bahan Kemas', 'L006', '', 'Plastik Sring Pack Sring Tutup SBD'),
(1283, 'Bahan Kemas', 'L007', '', 'Plastik Sring Pack Topix U Uk. 26 x 23 cm'),
(1284, 'Bahan Kemas', 'L008', '', 'Plastik Sring secret Red Flower'),
(1285, 'Bahan Kemas', 'T003', '', 'Plastik Uk.120x80x0,5 (Massa)'),
(1286, 'Bahan Kemas', 'T004', '', 'Plastik Uk.20x30x0,5 (1Kg)'),
(1287, 'Bahan Kemas', 'T005', '', 'Plastik Uk.35x45x0,5 (5Kg)'),
(1288, 'Bahan Kemas', 'T006', '', 'Plastik Uk.40x60x0,5 (10Kg)'),
(1289, 'Bahan Kemas', 'T007', '', 'Plastik Uk.50x86x0,5 (15Kg)'),
(1290, 'Bahan Kemas', 'B003', '', 'Plastik karyana luar 10x15'),
(1291, 'Bahan Kemas', 'A022', '', 'Polos Bulat Meaningful'),
(1292, 'Bahan Kemas', 'A013', '', 'Pot Gelas 40g'),
(1293, 'Bahan Kemas', 'A014', '', 'Pot Plastik Topix 10g'),
(1294, 'Bahan Kemas', 'B011', '', 'Pump Botol Polos Ellen White'),
(1295, 'Bahan Kemas', 'R001', '', 'Selotip Solas 24 X 100 Mm'),
(1296, 'Bahan Kemas', 'J001', '', 'Sendok Plastik 5 Ml'),
(1297, 'Bahan Kemas', 'S008', '', 'Silika Gel'),
(1298, 'Bahan Kemas', 'S009', '', 'Stereofom'),
(1299, 'Bahan Kemas', 'S010', '', 'Stiker Anti Anemi'),
(1300, 'Bahan Kemas', 'S011', '', 'Stiker Anti Anemi (Baru)'),
(1301, 'Bahan Kemas', 'S012', '', 'Stiker Bital untuk Caper'),
(1302, 'Bahan Kemas', 'S013', '', 'Stiker Bonus Topix'),
(1303, 'Bahan Kemas', 'S014', '', 'Stiker Rasa Baru GDL '),
(1304, 'Bahan Kemas', 'S015', '', 'Stiker Stawberi untuk Solathim DS'),
(1305, 'Bahan Kemas', 'S016', '', 'Stiker Topix Tutup Botol'),
(1306, 'Bahan Kemas', 'S017', '', 'Stiker Vitro mega'),
(1307, 'Bahan Kemas', 'A015', '', 'Tube Confortin Gel &Tutup 20g'),
(1308, 'Bahan Kemas', 'A016', '', 'Tube Loksin Krim 10g'),
(1309, 'Bahan Kemas', 'A017', '', 'Tube Plastik Novelas & Tutup 50g'),
(1310, 'Bahan Kemas', 'A021', '', 'Tube Secret Cream'),
(1311, 'Bahan Kemas', 'A018', '', 'Tube Solacort Cream&Tutup 5g'),
(1312, 'Bahan Kemas', 'A019', '', 'Tube Velostin Gel &Tutup 30g'),
(1313, 'Bahan Kemas', 'A020', '', 'Tube Vestrol Gel 10g'),
(1314, 'Bahan Kemas', 'B012', '', 'Tutup Botol Ester-C 60ml Solvita C 500'),
(1315, 'Bahan Kemas', 'B010', '', 'Tutup Botol Polos Bulat Meaningful'),
(1316, 'Bahan Kemas', 'B008', '', 'Tutup Botol Secret '),
(1317, 'Bahan Kemas', 'B014', '', 'Tutup Botol Secret Red Flower'),
(1318, 'Bahan Kemas', 'B007', '', 'Tutup Botol gelas 40 g (Bital)'),
(1319, 'Bahan Kemas', 'B009', '', 'Tutup Pot Salep Topix');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id` int(11) NOT NULL,
  `satuan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id`, `satuan`) VALUES
(1, 'BATCH'),
(2, 'KG'),
(3, 'G'),
(4, 'BOTOL'),
(5, 'VIAL'),
(6, 'BOX'),
(8, 'UNIT'),
(9, 'ZAK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pdf_book`
--

CREATE TABLE `tb_pdf_book` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jenis_lhu` varchar(100) NOT NULL,
  `file_lhu` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pdf_book`
--

INSERT INTO `tb_pdf_book` (`id`, `id_produk`, `jenis_lhu`, `file_lhu`) VALUES
(148, 58, 'BBA', '8778e4f0f1396fb90fc3dfbde59ce3af.pdf'),
(149, 2, 'Mikro Biologi BB', '4e8c4d32b6b3c77ade883c5673120189.pdf'),
(150, 18, 'Mikro Biologi OJ', 'c7ecdb8a8333d6f4fe7ec909e6b6b988.pdf'),
(151, 28, 'Mikro Biologi BB', 'default.pdf'),
(152, 12, 'Mikro Biologi BB', 'default.pdf'),
(153, 1346, 'Obat Jadi', '9f9f90a6886619d2d3561b749c7f31ec.pdf'),
(154, 6, 'BBT', '62366c65b10d5a17fa56eb93dab4ff0a.pdf'),
(155, 8, 'Mikro Biologi BB', '3ff3e17279e38abcd6e61bbd7e73b7bf.pdf'),
(156, 1, 'Obat Jadi', 'default.pdf'),
(157, 1, 'Obat Jadi', 'default.pdf'),
(158, 53, 'BBA', 'default.pdf'),
(159, 157, 'BBP', 'default.pdf'),
(160, 43, 'BKP', 'default.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Ryan', 'ryana6661007@gmail.com', 'default.jpg', '$2y$10$TdJeRU9/rK1wVNEuB1Zkoe3Wi4dpBgzWJMhXaEhD79DuAzirx0cMq', 3, 1, '0000-00-00'),
(4, 'SLS.MGR.QC', 'mgr@gmail.com', 'default.jpg', '$2y$10$9/6uaCYqpBWjTtXWszWn8egSaOuBi/OLWIfjqDNpuUm.giRXp3386', 1, 1, '0000-00-00'),
(5, 'SLS.QC.1', 'qc1@gmail.com', 'default.jpg', '$2y$10$GQCW.2kaITWfKA2KaHgkv.Q7UFnTM4KSDmskxnFYjlLf7z8/c97T6', 2, 1, '0000-00-00'),
(10, 'Aam Priatna', 'ryana666fdsfdsf1007@gmail.com', 'default.jpg', '$2y$10$tHmVJxe9xVsaWcLiMVzDJugZ8djGvbYUwQdKyrdh9crybfPCgdyQe', 1, 1, '2017-01-14'),
(11, 'Valentio', 'valen@gmail.com', 'default.jpg', '$2y$10$xvI9UZe6syAZ26ipSm.SS.MQ4T8UBdQqoeEoeNOzOrmUREIZqHKmy', 1, 1, '0000-00-00'),
(13, 'Valentio', 'admin@gmail.com', 'default.jpg', '$2y$10$MItJ9TOLnxluR7H2mn5s3OBxJbOy1LKEz12q5PoNbCTv4oLUU3rW2', 3, 1, '2023-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(32, 1, 2),
(25, 1, 4),
(20, 2, 2),
(31, 3, 1),
(27, 3, 2),
(41, 3, 3),
(34, 3, 4),
(30, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_data_bbp_bba_history`
--

CREATE TABLE `user_data_bbp_bba_history` (
  `id` int(11) NOT NULL,
  `nomer_analisa` varchar(200) NOT NULL,
  `nomer_batch` varchar(200) NOT NULL,
  `tgl_sampling` date NOT NULL,
  `exp_date` date NOT NULL,
  `produsen` varchar(200) NOT NULL,
  `supplier` varchar(200) NOT NULL,
  `jumlah_penerimaan` int(11) NOT NULL,
  `no_protap_analisa_bb` varchar(200) NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `id_tb_pdf_book` int(11) NOT NULL,
  `print_lhu` tinyint(1) DEFAULT NULL,
  `print_date` date DEFAULT NULL,
  `users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data_bbp_bba_history`
--

INSERT INTO `user_data_bbp_bba_history` (`id`, `nomer_analisa`, `nomer_batch`, `tgl_sampling`, `exp_date`, `produsen`, `supplier`, `jumlah_penerimaan`, `no_protap_analisa_bb`, `tgl_berlaku`, `id_tb_pdf_book`, `print_lhu`, `print_date`, `users`) VALUES
(1, 'test', 'test', '0000-00-00', '2003-11-11', '12', '12', 12, '12', '1970-01-01', 159, 1, '2023-12-11', 13),
(2, 'test', 'test', '0000-00-00', '2000-11-11', 'test', 'test', 5, 'test', '2000-11-11', 159, NULL, '2023-12-11', 13),
(3, 'a', 'a', '0000-00-00', '2023-12-12', 'a', 'a', 2, 'test', '2023-12-14', 148, 1, '2023-12-11', 13),
(4, 'test', 'test', '2023-12-14', '2023-12-13', 'test', 'test', 2, 'test', '2023-12-16', 158, 1, '2023-12-11', 13),
(5, 'b', 'b', '1970-01-01', '1970-01-01', 'b', 'b', 23, 'b', '1970-01-01', 159, 1, '2023-12-11', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user_data_bkp_history`
--

CREATE TABLE `user_data_bkp_history` (
  `id` int(11) NOT NULL,
  `nomer_analisa` varchar(200) NOT NULL,
  `nomer_batch` varchar(200) NOT NULL,
  `exp_date` date NOT NULL,
  `tgl_kedatangan` date NOT NULL,
  `nama_produsen` varchar(150) NOT NULL,
  `nama_supplier` varchar(150) NOT NULL,
  `jumlah_bahan` int(11) NOT NULL,
  `id_tb_pdf_book` int(11) NOT NULL,
  `print_date` date DEFAULT NULL,
  `print_lhu` tinyint(1) DEFAULT NULL,
  `users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data_bkp_history`
--

INSERT INTO `user_data_bkp_history` (`id`, `nomer_analisa`, `nomer_batch`, `exp_date`, `tgl_kedatangan`, `nama_produsen`, `nama_supplier`, `jumlah_bahan`, `id_tb_pdf_book`, `print_date`, `print_lhu`, `users`) VALUES
(1, 'b', 'b', '2002-11-11', '2000-11-11', '2003-11-12', 'test', 2, 160, '2023-12-11', 1, 13),
(2, 'test', 'test', '1970-01-01', '7712-12-06', '1267-12-26', 'test', 5, 160, '2023-12-11', 1, 13),
(3, 'MNB1982', '1982MNB', '2023-12-14', '2023-12-21', '2023-12-22', 'dadang', 5, 160, '2023-12-11', 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `user_data_lhu_history`
--

CREATE TABLE `user_data_lhu_history` (
  `id` int(11) NOT NULL,
  `nomer_analisa` varchar(256) NOT NULL,
  `nomer_batch` varchar(256) NOT NULL,
  `exp_date` date DEFAULT NULL,
  `tgl_produksi` date DEFAULT NULL,
  `tgl_sampling` date DEFAULT NULL,
  `besaran_batch` int(12) NOT NULL,
  `satuan` varchar(128) NOT NULL,
  `id_tb_pdf_book` int(11) NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `active_print_cover` tinyint(1) DEFAULT NULL,
  `active_print_lhu` tinyint(1) DEFAULT NULL,
  `print_date` date DEFAULT NULL,
  `users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data_lhu_history`
--

INSERT INTO `user_data_lhu_history` (`id`, `nomer_analisa`, `nomer_batch`, `exp_date`, `tgl_produksi`, `tgl_sampling`, `besaran_batch`, `satuan`, `id_tb_pdf_book`, `is_active`, `active_print_cover`, `active_print_lhu`, `print_date`, `users`) VALUES
(91, 'RGLF2023', '001', '2023-12-16', '2023-12-21', '2023-12-30', 5, 'BATCH', 156, 1, 1, 1, '2023-12-10', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Item'),
(5, 'Superuser');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User'),
(3, 'Superuser');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Administrator', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Dashboard', 'user', 'fas fa-fw fa-tachometer-alt', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Entry LHU', 'admin/datalhu', 'fas fa-fw fa-sharp fa-light fa-book', 1),
(8, 4, 'Jenis LHU', 'item', 'fa fa-fw fa-light fa-pen-nib', 1),
(10, 2, 'Obat Jadi', 'user/datalhuuser', 'fas fa-fw fa-sharp fa-light fa-book\r\n', 1),
(13, 4, 'Satuan', 'item/satuan', 'fa fa-fw fa-solid fa-layer-group', 1),
(14, 5, 'Role', 'superuser/role', 'fas fa-fw fa-user-tie', 1),
(15, 4, 'Prodak', 'item/prodak', 'fa fa-fw fa-sharp fa-light fa-capsules', 1),
(17, 5, 'Users Management', 'superuser/usersmanagement', 'fa fa-solid fa-users', 1),
(18, 2, 'BBP', 'user/bbp', 'fas fa-fw fa-sharp fa-light fa-book', 1),
(19, 2, 'BBA', 'user/bba', 'fas fa-fw fa-sharp fa-light fa-book ', 1),
(20, 2, 'BKP', 'user/bkp', 'fas fa-fw fa-sharp fa-light fa-book ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_lhu`
--
ALTER TABLE `jenis_lhu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pdf_book`
--
ALTER TABLE `tb_pdf_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kode_produk` (`id_produk`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`,`menu_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `user_data_bbp_bba_history`
--
ALTER TABLE `user_data_bbp_bba_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data_bkp_history`
--
ALTER TABLE `user_data_bkp_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data_lhu_history`
--
ALTER TABLE `user_data_lhu_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tb_pdf_book` (`id_tb_pdf_book`),
  ADD KEY `users` (`users`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_lhu`
--
ALTER TABLE `jenis_lhu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1320;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pdf_book`
--
ALTER TABLE `tb_pdf_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_data_bbp_bba_history`
--
ALTER TABLE `user_data_bbp_bba_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_data_bkp_history`
--
ALTER TABLE `user_data_bkp_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_data_lhu_history`
--
ALTER TABLE `user_data_lhu_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
