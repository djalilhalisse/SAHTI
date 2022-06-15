-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 08:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahti`
--

-- --------------------------------------------------------

--
-- Table structure for table `liste_medecins`
--

CREATE TABLE `liste_medecins` (
  `id_medecin` int(11) NOT NULL,
  `email_medecin` varchar(200) NOT NULL,
  `pass_medecin` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `specialite` varchar(1000) NOT NULL,
  `prix` decimal(20,0) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `temps_travail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liste_medecins`
--

INSERT INTO `liste_medecins` (`id_medecin`, `email_medecin`, `pass_medecin`, `nom`, `image`, `specialite`, `prix`, `adresse`, `telephone`, `temps_travail`) VALUES
(1, 'bensalahmed@gmail.com', '123', 'Dr. BENSALAH MED', '01.png', 'Interniste', '2000', 'Boulevard Bouzerad Hocine 2, Annaba 23000', '038405615', '8 AM - 5 PM'),
(2, 'rahmoun@gmail.com', '123', 'Dr. RAHMOUNE', '02.png', 'Interniste', '2500', 'Cité safsaf 1276 logts bloc 3 n 1077', '0657762477', '8 AM - 4 PM'),
(3, 'chorfi@gmail.com', '123', 'Dr. CHORFI', '03.png', 'Psychologue', '3000', 'B 7 N° 50. cité 08 Mai 1945, Annaba', '0542309259', '08 AM - 03 PM'),
(4, 'boukhezzaamina@gmail.com', '123', 'Dr. BOUKHEZZA AMINA', '04.png', 'Gynecologist', '1500', 'Cité El Rym Bat N° K03 1er étage N°29, Annaba', '0658235969', '09 AM - 06 PM'),
(5, 'dridnouredin@gmail.com', '123', 'Dr. DRID NOUREDDINE', '05.png', 'Généraliste', '3000', '29 Rue du C.N.R.A., Annaba', '038863522', '07 AM - 04 PM'),
(6, 'lazharsaadi@gmail.com', '123', 'Dr. LAZHAR SAADI', '06.png', 'ORL', '3500', '56 Av. Abdelhamid Ben Badis, Annaba', '0668337803', '08 AM - 04 PM'),
(7, 'hadibymounir@gmail.com', '123', 'Dr. HADIBY MOUNIR', '07.png', 'Dermatologist', '3500', '8 Rue Pasteur, Mayer', '0663544097', '07 AM - 05 PM'),
(8, 'hamidtiti@gmail.com', '123', 'Dr. ABDELHAMID TITI', '08.png', 'Dermatologist', '3500', 'Cite 8 mai 1945 logt 88 Bt 2 N: 9, Annaba', '0672201360', '08 AM - 04 PM'),
(9, 'essalhikebouchi@gmail.com', '123', 'Dr. ESSALHI KEBOUCHI HOUDA', '09.png', 'Pédiatre', '4000', '38 Rue des Violettes, Eliza 23001', '0556425791', '08 AM - 06 PM'),
(10, 'sebbarnadjib@gmail.com', '123', 'Dr. SEBBAR Med NADJIB', '10.png', 'Dentiste', '2000', 'Rue Zenine Larbi, Annaba', '0664391250', '09 AM - 05 PM'),
(11, 'halisseimen@gmail.com', '123', 'Dr. HALISSE IMENE', '11.png', 'Dentiste', '2500', '1er étage, 56 Avenue Colonel Amirouche, Annaba', '0554770707', '08 AM - 06 PM'),
(12, 'benahmedkarim@gmail.com', '123', 'Dr. BENHAMED KARIM', '12.png', 'Ophthalmologist', '1500', '4 chemins de la colonne, Bd Ernesto Che Guevara, Annaba', '0675891946', '08 AM - 03 PM');

-- --------------------------------------------------------

--
-- Table structure for table `liste_patients`
--

CREATE TABLE `liste_patients` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(50) DEFAULT NULL,
  `email_utilisateur` varchar(50) DEFAULT NULL,
  `motdepasse_utilisateur` varchar(20) DEFAULT NULL,
  `user_type` int(1) DEFAULT NULL COMMENT '1-User, 2-Admin',
  `telephone` int(15) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liste_patients`
--

INSERT INTO `liste_patients` (`id_utilisateur`, `nom_utilisateur`, `email_utilisateur`, `motdepasse_utilisateur`, `user_type`, `telephone`, `createDate`) VALUES
(1, 'Admin', 'admin', '123', 2, 0, '2022-06-11 13:42:00'),
(25, 'Abdeldjalil Halisse', 'halisse2001@gmail.com', '123456789', 1, 664322524, '2022-05-28 23:07:08'),
(28, 'Halisse Med Raid', 'raidhalisse@gmail.com', '123456789', 1, 796527078, '2022-06-10 02:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id_rdv` int(11) NOT NULL,
  `nom_rdv` varchar(50) NOT NULL,
  `email_rdv` varchar(50) NOT NULL,
  `telephone_rdv` int(15) NOT NULL,
  `medecin` varchar(60) NOT NULL,
  `date_rdv` varchar(25) NOT NULL,
  `temps_rdv` time NOT NULL,
  `message_rdv` varchar(500) NOT NULL,
  `etat` int(1) NOT NULL COMMENT '0-Réservé,1-Annulé, 2-Visité',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rendez_vous`
--

INSERT INTO `rendez_vous` (`id_rdv`, `nom_rdv`, `email_rdv`, `telephone_rdv`, `medecin`, `date_rdv`, `temps_rdv`, `message_rdv`, `etat`, `timestamp`) VALUES
(71, 'Halisse Med Raid', 'raidhalisse@gmail.com', 791125697, 'Dr. DRID NOUREDDINE', '2022-07-20', '11:00:00', 'Hello', 1, '2022-06-12 01:50:15'),
(73, 'Halisse Med Raid', 'raidhalisse@gmail.com', 791125697, 'Dr. RAHMOUNE', '2022-06-23', '11:00:00', 'Thanks', 0, '2022-06-12 02:14:36'),
(74, 'Abdeldjalil Halisse', 'halisse2001@gmail.com', 666666666, 'Dr. RAHMOUNE', '2022-07-14', '12:45:00', 'Merci :)', 0, '2022-06-13 02:12:46'),
(75, 'Abdeldjalil Halisse', 'djalilhalisse@gmail.com', 664322524, 'Dr. BOUKHEZZA AMINA', '2022-07-08', '12:45:00', 'Help', 0, '2022-06-13 02:14:33'),
(76, 'Abdeldjalil Halisse', 'halisse2001@gmail.com', 777777777, 'Dr. HALISSE IMENE', '2022-07-09', '09:45:00', 'Thanks', 0, '2022-06-13 02:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `table_contact`
--

CREATE TABLE `table_contact` (
  `id_contact` int(11) NOT NULL,
  `nom_contact` varchar(50) DEFAULT NULL,
  `email_contact` varchar(50) DEFAULT NULL,
  `sujet_contact` varchar(150) DEFAULT NULL,
  `message_contact` varchar(500) DEFAULT NULL,
  `temps_contact` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_contact`
--

INSERT INTO `table_contact` (`id_contact`, `nom_contact`, `email_contact`, `sujet_contact`, `message_contact`, `temps_contact`) VALUES
(14, 'abdeldjalilhalisse', 'djalilhalisse@gmail.com', 'Heart', 'Hello', '2022-05-29 21:44:49'),
(15, 'Halisse Med Raid', 'raidhalisse@gmail.com', 'Heart', 'Helppp', '2022-06-10 02:35:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liste_medecins`
--
ALTER TABLE `liste_medecins`
  ADD PRIMARY KEY (`id_medecin`);

--
-- Indexes for table `liste_patients`
--
ALTER TABLE `liste_patients`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Indexes for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id_rdv`);

--
-- Indexes for table `table_contact`
--
ALTER TABLE `table_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `liste_patients`
--
ALTER TABLE `liste_patients`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id_rdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `table_contact`
--
ALTER TABLE `table_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
