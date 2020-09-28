-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 08:24 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `Location_ID` varchar(30) NOT NULL,
  `Customer_ID` varchar(30) NOT NULL,
  `Customer_No` varchar(40) NOT NULL,
  `Acc_Parent` varchar(30) NOT NULL,
  `Company_Name` varchar(120) NOT NULL,
  `Address` tinytext NOT NULL,
  `Street` varchar(100) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Province` varchar(45) NOT NULL,
  `ZipCode` varchar(15) NOT NULL,
  `Phone` varchar(40) NOT NULL,
  `Fax` varchar(30) NOT NULL,
  `NPWP` varchar(25) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'ACTIVE',
  `PIC` varchar(30) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Primary_Contact_No` varchar(40) NOT NULL,
  `PPH` int(1) NOT NULL,
  `C_Collector` varchar(30) NOT NULL,
  `VAT_Address` text NOT NULL,
  `VAT_Street` varchar(100) NOT NULL,
  `VAT_City` varchar(30) NOT NULL,
  `VAT_Country` varchar(40) NOT NULL,
  `VAT_Phone` varchar(40) NOT NULL,
  `VAT_NAME` varchar(60) NOT NULL,
  `VAT_NAME2` varchar(60) NOT NULL,
  `VAT_Prefix` varchar(10) NOT NULL DEFAULT '040',
  `Sales_Person` varchar(40) NOT NULL,
  `Sales_Teritory` varchar(30) NOT NULL,
  `Contract_Start` date NOT NULL,
  `Contract_End` date NOT NULL,
  `Contract_No` varchar(100) NOT NULL,
  `Contract_State` varchar(30) NOT NULL COMMENT 'NEW,RENEWAL,AUTO_RENEWAL,TENDER',
  `Created_Date` date NOT NULL,
  `Created_By` varchar(60) NOT NULL,
  `PIC_Billing_Name` varchar(60) NOT NULL,
  `PIC_Billing_Phone` varchar(30) NOT NULL,
  `PIC_Billing_Email` varchar(30) NOT NULL,
  `PIC_Billing_Fax` varchar(30) NOT NULL,
  `Due_Days` int(4) NOT NULL DEFAULT '30',
  `Billing_Type` varchar(30) NOT NULL DEFAULT 'BULK',
  `Bill_Scope` varchar(30) NOT NULL DEFAULT 'ALL',
  `Fixed_Value` double(40,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Location_ID`, `Customer_ID`, `Customer_No`, `Acc_Parent`, `Company_Name`, `Address`, `Street`, `City`, `Province`, `ZipCode`, `Phone`, `Fax`, `NPWP`, `Status`, `PIC`, `Position`, `Email`, `Primary_Contact_No`, `PPH`, `C_Collector`, `VAT_Address`, `VAT_Street`, `VAT_City`, `VAT_Country`, `VAT_Phone`, `VAT_NAME`, `VAT_NAME2`, `VAT_Prefix`, `Sales_Person`, `Sales_Teritory`, `Contract_Start`, `Contract_End`, `Contract_No`, `Contract_State`, `Created_Date`, `Created_By`, `PIC_Billing_Name`, `PIC_Billing_Phone`, `PIC_Billing_Email`, `PIC_Billing_Fax`, `Due_Days`, `Billing_Type`, `Bill_Scope`, `Fixed_Value`) VALUES
(9218, 'SIP-HO', '10000007', 'S-002ZO', 'Skyline', 'PT. Skyline Semesta', 'Komp Luxor Permai Kav. 24 Kebonjati Bandung', '', 'Bandung', 'Jawa Barat', '40181', '022 4239760', '022 4201968', '21.083.437.0-428.000', 'ACTIVE', 'Frans Agus Budiharto', 'Direktur', 'info@skylinesemesta.com', '022 71335312', 0, '', 'Komp Luxor Permai Kav. 24 Kebonjati - Andir', '', 'Bandung', '', '', '', '', '040', '', '', '0000-00-00', '0000-00-00', '', '', '2016-02-09', '', 'Futri Dania', '', '', '022 4239760', 7, 'BULK,PER_LINK', 'ALL', 0),
(9223, 'SIP-HO', '10000012', '10000012', 'Melsa', 'Melvar Lintasnusa, PT', 'Paskal Hyper Square Blok C39-41, Jl. H. O. S. Tjokroaminoto 25-27, Kebon Jeruk, Andir, Bandung City, West Java 40181', 'H. O. S. Tjokroaminoto (Pasirkaliki)', 'Bandung', 'Jawa Barat', '40181', '022 86061101', '022 86061111', '01.622.218.4-423.000', 'ACTIVE', 'Tri Sumarti', 'Senior Corporate Sales', 'tri@melsa.co.id', '082218859808', 0, '', 'Jl. Ir. H. Juanda No. 43 A, Tamansari - Bandung Wetan,', 'Kota Bandung - Jawa Barat', '', '', '', 'Melvar Lintasnusa, PT', '', '040', '', '', '0000-00-00', '0000-00-00', '', '', '2016-02-09', '', 'Hira Hendari', '', '', '022 86061101', 30, 'BULK,PER_LINK', 'ALL', 0),
(10000208, 'MEDAN', '10000096', '', 'MNC Media', 'PT MNC Kabel Mediacom', 'MNC Tower Lt 12A', 'Jl. Kebon Sirih No. 17-19, Menteng', 'JAKARTA PUSAT', 'DKI JAKARTA', '10340', '021 - 39700113', '', '03.256.238.1-021.000', 'ACTIVE', 'Denny Varlie', 'Corp. Sales MKM', 'denny.varlie@mncgroup.com', '08114670307 / 082267636369', 0, '', 'MNC Tower Lt. 26 ', 'Jl. Kebon Sirih No. 17-19, Kebon Sirih-Menteng', 'JAKARTA PUSAT', '', '', 'PT MNC Kabel Mediacom', '', '010', '', '', '2020-02-28', '2020-02-28', '', '', '2020-02-28', 'eka.yuni1', 'Purwa', '08975975961', 'dwi.purwaka@mncgroup.com', '', 30, 'BULK', 'ALL', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_activation`
--

CREATE TABLE `customer_activation` (
  `ID` int(11) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Task_ID` varchar(50) NOT NULL,
  `Desktop_Survey` datetime NOT NULL,
  `Note_Survey` text NOT NULL,
  `Customer_ID` varchar(50) NOT NULL,
  `Customer_Name` varchar(100) NOT NULL,
  `Customer_Sub_Name` varchar(100) NOT NULL,
  `Link_Name` varchar(100) NOT NULL,
  `Customer_Sub_Address` text NOT NULL,
  `City` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `PIC` varchar(40) DEFAULT NULL,
  `PIC2` varchar(40) DEFAULT NULL,
  `PIC2_Phone` varchar(30) NOT NULL,
  `PIC2_Telp` varchar(30) NOT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Fax` varchar(50) NOT NULL,
  `Handphone` varchar(50) NOT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Latitude` varchar(50) NOT NULL,
  `Longitude` varchar(50) NOT NULL,
  `Registration_Date` date NOT NULL,
  `RFS_Date` date NOT NULL,
  `SPK_Release` date NOT NULL,
  `Activation_Date` date NOT NULL,
  `Start_Billing` date NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Status_Date` date NOT NULL,
  `Services` varchar(30) NOT NULL,
  `WO_No` varchar(50) NOT NULL,
  `FAB_No` varchar(50) NOT NULL,
  `BAA_No` varchar(50) NOT NULL,
  `SPK_No` varchar(50) NOT NULL,
  `Note` text NOT NULL,
  `Created_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Created_By` varchar(30) NOT NULL,
  `Week_Num` int(4) NOT NULL,
  `Monthly_Price` double(40,0) NOT NULL,
  `Monthly_PPN` varchar(30) NOT NULL DEFAULT 'EXCLUDE',
  `Installation` double(40,0) NOT NULL,
  `Installation_PPN` varchar(30) NOT NULL,
  `Technical_ID` varchar(40) NOT NULL,
  `Sub_Product` varchar(30) NOT NULL,
  `Region` varchar(40) NOT NULL,
  `Bandwidth` int(5) NOT NULL,
  `Num_Core` int(2) NOT NULL,
  `Vendor_ID` varchar(50) NOT NULL,
  `Estimasi_Panjang_Kabel` varchar(30) NOT NULL,
  `Material_Dibutuhkan` text NOT NULL,
  `Survey_Oleh` varchar(30) NOT NULL,
  `Status_Coverage` varchar(30) NOT NULL,
  `Keterangan_Survey` text NOT NULL,
  `Jenis_Kabel` text NOT NULL,
  `Contract_Start` date NOT NULL,
  `Contract_End` date NOT NULL,
  `ONU_Type` varchar(50) NOT NULL,
  `MAC_Address` varchar(70) NOT NULL,
  `Media_Converter` varchar(50) NOT NULL,
  `Serial_Number` varchar(100) NOT NULL,
  `OTB` varchar(50) NOT NULL,
  `Pigtail` varchar(200) NOT NULL,
  `Signal_CPE` varchar(30) NOT NULL,
  `VLAN` int(10) NOT NULL,
  `To_Invoice` int(1) NOT NULL DEFAULT '1',
  `Subtotal` double(40,0) NOT NULL,
  `PPN` double(40,0) NOT NULL,
  `Total` double(40,0) NOT NULL,
  `PPH` double(40,0) NOT NULL,
  `DU_No` varchar(40) NOT NULL,
  `DU_Date` date NOT NULL,
  `Old_Bandwidth` int(4) NOT NULL,
  `Dismantled_Date` date NOT NULL,
  `Dismantled_Note` text NOT NULL,
  `Dismantled_No` varchar(50) NOT NULL,
  `POP_ID` varchar(30) NOT NULL,
  `OLT_ID` varchar(30) NOT NULL,
  `OTB_ID` varchar(30) NOT NULL,
  `JB_ID` varchar(30) NOT NULL,
  `Splitter_ID` varchar(30) NOT NULL,
  `ONU_ID` varchar(40) NOT NULL,
  `Technical_Status` varchar(30) NOT NULL,
  `Technical_Update_By` varchar(30) NOT NULL,
  `Technical_Update_Date` datetime NOT NULL,
  `Ticket_No` varchar(70) NOT NULL,
  `Start_Error_Date` datetime NOT NULL,
  `Connection_Status` varchar(10) NOT NULL,
  `Connection_Check` datetime NOT NULL,
  `Installation_Issued` int(1) NOT NULL,
  `Installation_Proforma` varchar(50) NOT NULL,
  `Installation_Proforma_Date` datetime NOT NULL,
  `Group_Name` varchar(30) NOT NULL DEFAULT 'NORMAL',
  `Counting_Mode` varchar(30) NOT NULL DEFAULT 'NORMAL',
  `Billing_Type` varchar(50) NOT NULL,
  `Adjustments` double(40,0) NOT NULL,
  `Adjustments_PPN` double(30,0) NOT NULL,
  `Note_Adjustments` text NOT NULL,
  `Remove_From_Lists` int(1) NOT NULL,
  `Sales_Ins_Val` double(40,0) NOT NULL,
  `Migrasi` int(1) NOT NULL,
  `Migrasi_By` varchar(30) NOT NULL,
  `Migrasi_Date` datetime NOT NULL,
  `Migrasi_Status` varchar(20) NOT NULL,
  `Migrasi_For` varchar(50) NOT NULL,
  `Actions_By` varchar(30) NOT NULL,
  `Last_Activity_By` varchar(30) NOT NULL,
  `Last_Activity_Date` datetime NOT NULL,
  `Last_Activity` varchar(100) NOT NULL,
  `Last_Activity_Note` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_activation`
--

INSERT INTO `customer_activation` (`ID`, `Location`, `Task_ID`, `Desktop_Survey`, `Note_Survey`, `Customer_ID`, `Customer_Name`, `Customer_Sub_Name`, `Link_Name`, `Customer_Sub_Address`, `City`, `Province`, `PIC`, `PIC2`, `PIC2_Phone`, `PIC2_Telp`, `Phone`, `Fax`, `Handphone`, `Position`, `Email`, `Latitude`, `Longitude`, `Registration_Date`, `RFS_Date`, `SPK_Release`, `Activation_Date`, `Start_Billing`, `Status`, `Status_Date`, `Services`, `WO_No`, `FAB_No`, `BAA_No`, `SPK_No`, `Note`, `Created_Date`, `Created_By`, `Week_Num`, `Monthly_Price`, `Monthly_PPN`, `Installation`, `Installation_PPN`, `Technical_ID`, `Sub_Product`, `Region`, `Bandwidth`, `Num_Core`, `Vendor_ID`, `Estimasi_Panjang_Kabel`, `Material_Dibutuhkan`, `Survey_Oleh`, `Status_Coverage`, `Keterangan_Survey`, `Jenis_Kabel`, `Contract_Start`, `Contract_End`, `ONU_Type`, `MAC_Address`, `Media_Converter`, `Serial_Number`, `OTB`, `Pigtail`, `Signal_CPE`, `VLAN`, `To_Invoice`, `Subtotal`, `PPN`, `Total`, `PPH`, `DU_No`, `DU_Date`, `Old_Bandwidth`, `Dismantled_Date`, `Dismantled_Note`, `Dismantled_No`, `POP_ID`, `OLT_ID`, `OTB_ID`, `JB_ID`, `Splitter_ID`, `ONU_ID`, `Technical_Status`, `Technical_Update_By`, `Technical_Update_Date`, `Ticket_No`, `Start_Error_Date`, `Connection_Status`, `Connection_Check`, `Installation_Issued`, `Installation_Proforma`, `Installation_Proforma_Date`, `Group_Name`, `Counting_Mode`, `Billing_Type`, `Adjustments`, `Adjustments_PPN`, `Note_Adjustments`, `Remove_From_Lists`, `Sales_Ins_Val`, `Migrasi`, `Migrasi_By`, `Migrasi_Date`, `Migrasi_Status`, `Migrasi_For`, `Actions_By`, `Last_Activity_By`, `Last_Activity_Date`, `Last_Activity`, `Last_Activity_Note`) VALUES
(1, 'SIP-BDO', '110000007', '0000-00-00 00:00:00', '', '10000007', 'Skyline Semesta  PT', 'Teodore Garmindo Industri', 'Teodore Garmindo Industri ', 'Jl. Industri IV No. 10 Leuwigajah  Cimahi ', 'CIMAHI', 'JAWA BARAT', 'Frans Agus Budiharto', 'Syifa Syaadah', '', '022 4239760', '022 4239760', '022 4201968', '022 71335312', 'Direktur', 'info@skylinesemesta.com', '-6.908249', '107.548774', '0000-00-00', '0000-00-00', '0000-00-00', '2014-02-01', '2014-02-01', 'DISMANTLED', '0000-00-00', 'FTTX', '', '', '53/BAA-DIVRE3/04/2018', '', '', '0000-00-00 00:00:00', '', 0, 1200000, 'EXCLUDE', 3000000, 'EXCLUDE', '', 'REGULER', '', 15, 0, '61900019', '500', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 1095, 0, 0, 0, 0, 0, '', '0000-00-00', 0, '2018-09-30', '', '02/BAP-DIVRE3/10/2018', '0', '0', '0', '0', '0', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 1, 'PRF-SIP-HO/1710-0112-1', '0000-00-00 00:00:00', 'S-001A', '', 'BULK', 0, 0, '', 0, 0, 0, '', '0000-00-00 00:00:00', '', '', ' ', '', '2014-02-01 00:00:00', 'INSTALASI', ''),
(2, 'SIP-BDO', '210000007', '0000-00-00 00:00:00', '', '10000007', 'Skyline Semesta  PT', 'PT Sinar Continental', ' PT Sinar Continental', 'Jl. Industri II No. 20 Leuwigajah  Cimahi', 'CIMAHI', 'JAWA BARAT', 'Frans Agus Budiharto', 'Syifa Syaadah', '', '022 4239760', '022 4239760', '022 4201968', '022 71335312', 'Direktur', 'info@skylinesemesta.com', '-6.912266', '107.543018', '0000-00-00', '0000-00-00', '0000-00-00', '2014-02-01', '2014-02-01', 'DISMANTLED', '0000-00-00', 'FTTX', '', '', '', '', '', '0000-00-00 00:00:00', '', 0, 1750000, 'EXCLUDE', 3000000, 'EXCLUDE', '', 'REGULER', '', 15, 0, '61900019', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 1096, 0, 0, 0, 0, 0, '', '0000-00-00', 0, '2018-08-14', 'info dari skyline link sudah tidak digunakan per 14 Agustus 2018', '32/BAP-DIVRE3/08/2018', '0', '0', '0', '0', '0', '', '', '', '0000-00-00 00:00:00', 'TO/DIVRE3/04-1808/093445', '2018-08-04 20:15:00', '', '0000-00-00 00:00:00', 1, '', '0000-00-00 00:00:00', 'S-001A', '', 'BULK', 0, 0, '', 0, 0, 0, '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', ''),
(3, 'SIP-BDO', '310000007', '0000-00-00 00:00:00', '', '10000007', 'Skyline Semesta  PT', 'CV. Almasindo', 'CV. Almasindo', 'Jl. Industri II/6 Leuwigajah  Cimahi', 'CIMAHI', 'JAWA BARAT', 'Frans Agus Budiharto', 'Syifa Syaadah', '', '022 4239760', '022 4239760', '022 4201968', '022 71335312', 'Direktur', 'info@skylinesemesta.com', '-6.908129', '107.546230', '0000-00-00', '0000-00-00', '0000-00-00', '2014-05-01', '0000-00-00', 'DISMANTLED', '0000-00-00', 'FTTX', '', '', '', '', '', '0000-00-00 00:00:00', '', 0, 1300000, 'EXCLUDE', 3000000, 'EXCLUDE', '', 'REGULER', '', 15, 0, '61900019', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', 1082, 0, 0, 0, 0, 0, '01/BADU-DIVRE3/04/2018', '0000-00-00', 15, '2018-08-14', 'info dari skyline link sudah tidak digunakan per 14 Agustus 2018', '31/BAP-DIVRE3/08/2018', '0', '0', '0', '0', '0', '', '', '', '0000-00-00 00:00:00', 'TO/DIVRE3/04-1808/093423', '2018-08-04 20:15:00', '', '0000-00-00 00:00:00', 1, '', '0000-00-00 00:00:00', 'S-001A', '', 'BULK', 0, 0, '', 0, 0, 0, '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Customer_ID` (`Customer_ID`);

--
-- Indexes for table `customer_activation`
--
ALTER TABLE `customer_activation`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Task_ID` (`Task_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000211;

--
-- AUTO_INCREMENT for table `customer_activation`
--
ALTER TABLE `customer_activation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6549;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
