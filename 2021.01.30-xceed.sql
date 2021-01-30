-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: xceed
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `kid` char(7) NOT NULL,
  `kodestorm` tinyint(1) DEFAULT NULL,
  `manager` tinyint(1) DEFAULT NULL,
  `techmaster` tinyint(1) DEFAULT NULL,
  `event4` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`kid`),
  CONSTRAINT `events_ibfk_1` FOREIGN KEY (`kid`) REFERENCES `user` (`kid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES ('K1009',0,1,1,0),('K1067',1,0,0,0),('K1147',0,0,1,0),('K1199',1,1,0,0),('K131',0,1,0,0),('K1412',0,0,1,0),('K1490',1,0,0,0),('K1504',0,1,0,0),('K1600',1,0,1,0),('K1800',1,0,0,0),('K1885',1,0,0,0),('K26',1,1,1,0),('K308',1,0,0,0),('K323',1,1,1,0),('K326',1,1,1,0),('K411',1,1,0,0),('K424',0,1,0,0),('K443',1,0,0,0),('K452',1,1,0,0),('K522',0,0,1,0),('K606',1,1,1,0),('K675',1,0,0,0),('K759',1,0,0,0),('K77',1,1,0,0),('K826',0,0,1,0),('K870',1,1,0,0),('K960',1,0,0,0);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment` (
  `kid` char(7) NOT NULL,
  `transaction_id` varchar(1000) DEFAULT NULL,
  `workshop` varchar(50) DEFAULT NULL,
  `paid` int DEFAULT NULL,
  PRIMARY KEY (`kid`),
  CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`kid`) REFERENCES `user` (`kid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prev`
--

DROP TABLE IF EXISTS `prev`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prev` (
  `prev` char(6) NOT NULL DEFAULT '211000',
  PRIMARY KEY (`prev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prev`
--

LOCK TABLES `prev` WRITE;
/*!40000 ALTER TABLE `prev` DISABLE KEYS */;
INSERT INTO `prev` VALUES ('1943');
/*!40000 ALTER TABLE `prev` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `queries`
--

DROP TABLE IF EXISTS `queries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `queries` (
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(45) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `msg` varchar(750) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `queries`
--

LOCK TABLES `queries` WRITE;
/*!40000 ALTER TABLE `queries` DISABLE KEYS */;
INSERT INTO `queries` VALUES ('Kavya','Sivachidambaram','kavyamsiva@gmail.com','TEST'),('Shruthi','Sundar','shruthi2k0@gmail.com','hello');
/*!40000 ALTER TABLE `queries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `kid` char(7) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `college_city` varchar(100) NOT NULL,
  `yr` int NOT NULL DEFAULT '0',
  `dept` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`kid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('K1009','$2y$10$E2zF1scmqvZptvXmiiOPG...uceA.UzGzdvGVJIYclar6gPzjgSR2','Shruthi','V','shru171102@gmail.com','9384666533','College of Engineering Guindy','Chennai',1,'Mechanical '),('K1067','$2y$10$ntt7gr7A5SKVnDUUN23vM.sqNGATa66MzjWJGarlwgPfLHg8actAy','Kavia','M','kaviaiit@gmail.com','9791709264','College of Engineering Guindy ','Chennai',3,'Computer Science and Engineering '),('K1081','$2y$10$vxPCHbvFZGodjS0pogEbN.rJIZjJjmKFYIX.rZ/cqtLjTPz3G4xie','Manishma','Sundararajan','smanishmaitvec@gmail.com','9444755523','Velammal Engineering College','Chennai',3,'Information technology'),('K1104','$2y$10$L7Q7sUgozpPmuz0Knyq4k.UkJQtK9AtqwfTzX8YwjgOLVZKPH9RJW','Joyce ','Joyce ','joyceafi444@gmail.com','6380729349','Psn engineering college ','Thirunelveli',2021,'4th year'),('K1128','$2y$10$6ISxD3OqXC7JNo7/vmbGEeFHq/3IvaJhyDiXRN8C3e42hg59M9nG.','Vetriselvan','T','vetriselvan1818@gmail.com','6383696950','Government College of Technology','Coimbatore',3,'ECE'),('K1137','$2y$10$9lkIv20TrNO4CPKaGbnaiuXgBrpsvwahWtunsKns4MRG1Z/1mUZ4q','Kapilesh','Guruprasad','kapsgurutn@gmail.com','9940377102','College of Engineering Guindy ','Chennai',3,'B E CSE'),('K1144','$2y$10$aM14B4d9OvvaaGGbsE61uuGg0U9Jq9SObve6nfUMhUy6nV0DwrsNm','Shruthi','Sivaraj geetha','shruthisg122000@gmail.com','9884668284','Anna university ','Chennai',3,'MSC Csc 5 yrs'),('K1147','$2y$10$4zNLwHKQ9JDZiaRWeWK.P.lL7TqRKZLI2OrzHP8ng9JgyHIw8xHYi','Rahul R Bharadwaj ','Rahul R Bharadwaj ','bharadwajrrahul@gmail.com','9566038744','Ceg','Chennai',3,'ECE'),('K1199','$2y$10$vEZVSSrAg6OUXN4p8kcD..kr.srOTwGMZUmxALBLENCC6DZ/4KTuC','Nithish Kumar','G S','nithishgs2000@gmail.com','7339318124','Madras Institute of Technology','Chengalpet',2,'Computer Technology'),('K1238','$2y$10$.lQPCNDqZXa2g0daa2F8H.mScuTEJ1qy4yZJDrhXi3v1NXkdkJJsm','Vivek','Ramkumar','vivek2322000@gmail.com','9176253929','Ceg','Chennai',3,'Cse'),('K1271','$2y$10$BHD6.J2XjdOjAP9SMIB1zessJlANtfQA9hsYfBzDaxQbSmKhshX0S','Abishek','Gurukumar','abishek2027@gmail.com','7339620270','Hindustan University','Chennai',2,'Cse'),('K1286','$2y$10$UB4XV2VRV/hR2ivyq789FeOwIw.1L7KtaD4dUtX9n73NWmF/Yeaoq','DINESH','S K','dineshsrinivasan2001@gmail.com','6369073734','Government college of technology','Coimbatore',3,'Computer science and engineering'),('K131','$2y$10$g7nUV.00sq1E21B8Vkaln.mwJXl0yzDSxzMIRJ.C9krntVoosO7da','Jaiprasad','E','jaiprasadelangovan@gmail.com','9585602888','College of Engineering,Guindy','Chennai',3,'Mechanical'),('K1343','$2y$10$USSdVGWQtFshb8k13VEBouAhS0PG7GZsr1uPYLXUKYsi68WoN3ifa','Aswin','Ravi','aswinwin94@gmail.com','9500180679','Jeppiar Institute of Technology','Chennai',2015,'IT'),('K1366','$2y$10$lpjF67xC2SLws1ay3hc5YeXfWkt/jJOx9m4mprFByjL4PQJPb0d.6','SATHISH KUMAR ','T','thiyakusathish2002@gmail.com','9361244198','GOVERNMENT COLLEGE OF ENGINEERING BARGUR ','Krishnagiri',2021,'MECHANICAL ENGINEERING'),('K1412','$2y$10$44IDM3i0hXk8BnvKM5cLYOo3rvZCnFbg5Ng1nZ9ChmXJ0w3bupMGW','Karthik','R','ravikarthik5609@gmail.com','9943269388','Government College of engineering, Bargur','Krishnagiri',2,'Mechanical'),('K1466','$2y$10$PqPy2GjT/nKunqFNEIpsuuBmeDLpB3N/T6LOTIGIrtqv1KmBxI0FO','Raju','Kumar','rockingraju6898@gmail.com','9693935279','Hindustan institute of technology and science','Kancheepuram',2,'Computer science engineering'),('K1481','$2y$10$ANmE0hdehedTTJvyL/QJIebHEyymc66KWCN074ckQW0TQoMWlQTm.','Logesh LGH','S','logeshlgh7@gmail.com','6381699863','Government College of Engineering','Krishnagiri',2020,'Electronics And Communications Engineering'),('K1486','$2y$10$o9vIthiPSVa5OV5nWNcnq.Ieu643sTa.D1qULoxyFPtz4/abKWhtG','SRIRANGA','GOPIKRISHNA G','gurramsriranga1202@gmail.com','6379068660','PANIMALAR INSTITUTE OF TECHNOLOGY','Chennai',2,'B.E.,COMPUTER SCIENCE AND ENGINEERING'),('K1490','$2y$10$jowK5v53w1QHXabfpHIdFuiW7VI3dEJk5p1AYHMPiAv4RRQSLab2y','SRIRANGA GOPIKRISHNA','G','gurramsriranga1202@outlook.com','6379068660','PANIMALAR INSTITUTE OF TECHNOLOGY','Chennai',2,'COMPUTER SCIENCE AND ENGINEERING'),('K1503','$2y$10$TV7Jt/.M/hLkId5esWWX6OFTKsw38GZo3dHAarGzTcBKN2VgSBfc2','Apprajit','Vaibhav','apprajitvaibhav@outlook.com','7358191702','Panimalar Institute of Technology','Thiruvallur',2020,'CSE'),('K1504','$2y$10$t0bZ.WKWEPsOkStx5jDUBeInUZFP4C62wBwu9l38HH/Dctq8ysQ9u','Heeraa','Ananthan','heeraaananthan@gmail.com','7032361770','Madras Institute of Technology','Chennai',1,'Computer Technology'),('K1551','$2y$10$EcB9lNip7kVBnM1VoeBF/uEPrbQ/7ZTui6RPjoIA80rV3erGqWqcu','J Sherin','Christy','jsherindorothychristy@gmail.com','8300837782','Loyola ICAM College of Engineering and Technology','Chennai',4,'Computer Science and Engineering'),('K1600','$2y$10$n.PPMrzGXIrV2OqFSQrdH.LWKhpR/bmAk3peSupHDGlUYOZZLlst2','Jashvinu','Y','jashvinu.y@gmail.com','9344208550','Anna University, Madras Institute of Technoloy ','Chennai',1,'Information technology'),('K1621','$2y$10$SL32Upx5IhnUaHJq8zKsTuXoSfouiF2V9umBSSwz5tO4wAAt.aZt.','Sangeetha','Rajan','sangeerajan2k1@gmail.com','8754587794','Anna university ','Chennai',2021,'Mathematics '),('K1647','$2y$10$zoGXjYpIMAm6UvqrjvFcaeolsO9lffz6J/DsbdFUHdfhTG1Yxaiq6','Swetha','Giri','swetha221196@gmail.com','8939500452','Smit','Chennai',2019,'AE'),('K1684','$2y$10$qX1vQT9.G/m2fQgrkfdOJOVB7yetT5PrHMTA.I8ysiCgmjllgwbSK','Mohamed','Jalaludeen M B','mbjalal2002@gmail.com','9789631491','College of Engineering Guindy','Chennai',2,'B E Mechanical'),('K1724','$2y$10$h0OhmCpxq33.LGGu78BIFOpwggvK96RG650Q9dgBqSbCth3IpBLGi','','','','','','',0,''),('K1755','$2y$10$LrljfkyGx7RWpIlwablzKOpcnfgHP7S/lkEcSbL8yN9qcHj/CelTq','Dinesh','Kumar','dkdinesh6688@gmail.com','9677026688','College of Engineering,Guindy','Chennai',2017,'Mathematics'),('K1800','$2y$10$MJXmUXL9RfnZXpGcJt/1i.ecItrXLBLiZ4T1Esao5ZdMleI7lLSqi','Srinath ','Sureshkumar','2018103070@annauniv.edu.in','7826081980','CEG, Chennai','Chennai',3,'CSE'),('K1842','$2y$10$q.2Ers15YK6Yfyb/i6czuOwrZCxHr2pZXH4zanERssc.37ValE0Wu','Sakthi','Aswin','aswin3012@gmail.com','8072840757','Mepco Schlenk Engineering College','Virudhunagar',3,'CSE'),('K1885','$2y$10$/jvSxvsleubX2QN14JRF9.lRaYJunWUw0lZAcRwMfkw/IVil7pI9m','Dhanush','Sridhar','dhanushsridhar2@gmail.comm','8825432440','CeG','Chennai',3,'CSE'),('K1903','$2y$10$GBVW8VoQjFG.7Gy4VE2M..WLbJlzpmUUWWcSyknnRyCdScdznWZKi','Wesline','Jones','samynathanrathinasamy@gmail.com','8190057312','Park college of engineering and technology','Coimbatore',3,'Mechatronics'),('K194','$2y$10$RWqtexpP8T99bhJG5fBkoeKTFDOmBYgZYnxNO1hRaSgrSOrGsaJfy','Boojithkrishna ','Venkatachalam ','boojithkrishnav26@gmail.com','9487494345','CEG','Chennai',3,'CSE'),('K1943','$2y$10$q7U/k3V5ejA9Me26YAUR9O8nlbV/eFVwIr8J0NmZ5GvrzFLssNyt6','Vaalarivan','P','pvaalarivan@gmail.com','9677190722','Anna University','Chennai',1,'Computer Science'),('K207','$2y$10$tKy35VKeZOdtr4uPSbXBkexxgcrw1gFl25HC0QNN2AlJXjhXF8v1i','Jeevan','R','jeevan.rames@gmail.com','7530025110','CEG','Chennai',2021,'ECE'),('K26','$2y$10$KTosY8..xmOkK0jegc0QlOR50m7wU9WQRtyV18nBqYW/tBVOHLj8K','Kavin Pragadeesh','K','kavinswealthvalley@gmail.com','9445290070','College of Engineering Guindy','Erode',4,'CSE'),('K263','$2y$10$kQvin22DpQUw8dpEYI32ze5XSweKWjloRHMY6hEDUNSednmE7tR2W','Yuvan','Karthi','yuvankarthi@gmail.com','6383266598','CEG','Chennai',3,'Ece'),('K269','$2y$10$Tg5E.elEoLi6GynQkCeoxuEKJoHRGMfuYOoY5NVLzrPGKhKiPNGJu','Sri','Harini','srikansud@gmail.com','9080495091','Ceg','Chennai',4,'Cse'),('K273','$2y$10$JrD.BaL0ngbaZMyi4eNYke6IeikVIRAqv/k5.suN6RO12JWExXllK','Sowmiya','S','soumiya2805@gmail.com','6383585099','College of Engineering, Guindy','Chennai',3,'CSE'),('K308','$2y$10$y9ajUVIgRfrNYXWHDiDUQuF/Soy5nTpnBJZkKv40eiiQ7IqJs8DuO','Jana','Ranjani','janaranjani2018@gmail.com','8754507955','CEG','Chennai',2022,'Ece'),('K323','$2y$10$FEiI5R3tGRecOZ0JSz9yf.O914CBe/PoGlkiqH/SyP86Qvx9J0/9q','Deepthi','V','deepthivsdd2@gmail.com','9489718955','CEG','Viluppuram',3,'IT'),('K326','$2y$10$hoY5JTpUjgRTpvdMGv7cEuqCYClywjPFYG8vBXDUAhF5fHK2ueTiG','Surya','N','meetsuryanagarajan@gmail.com','9500372299','CEG','Salem',3,'CSE'),('K362','$2y$10$tv76c4vrxbnFrF4nwrjbgeHQayM2zSrYTelcQ83QJc7HWSpKGVNa.','Praveen ','K P','praveenvel2017@gmail.com','9944505295','CEG','Chennai',4,'EE'),('K411','$2y$10$l6OxTUADh5la4fqNHeX6d.BssIIti3a./.j0TJMG3wZHUzPW2Gaym','Preethi ','Raju','preethiofficial01@gmail.com','9962434895','CEG','Chennai',3,'IST'),('K424','$2y$10$EOkLBTjmt1ISMl/s2l2F0.wqe3fHDPFiobdsJh3bikuoIJD6YSlwK','Raja','Ram','hattori392916@gmail.com','9089089088','ceg','Chengalpet',4,'cse'),('K443','$2y$10$vucsVQ4EvYMdRvhtYWGQyOpvQ3xURCQWanafOLxMhIyTzUY7B7tVK','Shruthi','Muthukumar','shruthi.harmini2001@gmail.com','9600522111','CEG','Chennai',3,'Cse'),('K452','$2y$10$ds1iTjl/fsCK34.mYz0DG.8Bhxfjqi1liYkPE487wkXbMSiFNrepG','SRIHARI','S','srihari961112@gmail.com','9901017871','College of Engineering - Guindy','Chennai',3,'CSE'),('K509','$2y$10$YWoXnMftdXIVZJiUaqaDdezi.E7wzeUTI09q5qvrxgNWhbBxI2nfO','Mohamed Farvez','Ali O A','starmakerjb2830@gmail.com','9894542681','College of Engineering, Guindy- Anna University','Chennai',3,'Mechanical Engineering'),('K522','$2y$10$UhtzgdgXW.j9clvXL2jkEOJa0ROWmvBJCtqKTtkCQ8V184/C.QnZ2','Mohamed Farvez Ali','O A','garbageacc1611@gmail.com','9894542681','College of Engineering,Guindy- Anna University','Chennai',3,'Mechanical Engineering'),('K568','$2y$10$yjZT9FbcirFoX.6TVMDlre2DRe4vNquUVovFR0S2w6k2aaXLAZqMa','Vikas','P','vikas190599@gmail.com','9566607499','ACT','Chennai',4,'materials science and engineering'),('K606','$2y$10$dqy2G1IdGrEEpE4F2q5kQupPQ1/VUGn/Zymial1O4.qe22.npOM6O','Visweshwaran ','Kumaradevan','viswesh11122000@gmail.com','9150568074','SRM ARTS AND SCIENCE COLLEGE ','Chennai',2,'BIOCHEMISTRY '),('K62','$2y$10$9MV4W9/JUdSFo3rtAJc99ewn512D5gCrQ264KgFcxQ8fQx5NWoK06','Kavya','Sivachidambaram','kavyamsiva@gmail.com','8903748043','College of Engineering Guindy','Chennai',4,'CSE'),('K643','$2y$10$LareMZqmgc1MDS46TXB5gOycXz31nVXPJad1IV0PdiGjzT/d64.A6','Girish','K','girish22krish@gmail.com','8939659829','madras institute of technology','Kancheepuram',3,'mechanical engineering'),('K659','$2y$10$t1CV438STGVbSneNBPtrr.SCc0bmzCNFyVnraql87BVwEG/8.80Ru','SANDURU ','K','mechanicalchan53@gmail.com','8124022074','ANNA UNIVERSITY CHENNAI-MIT Campus','Chennai',3,'Mechanical Engineering'),('K675','$2y$10$WCmoKouBkgAeXtVDhj/gcOcxBhcJGtsPtQ3I69QH6gK8.rIbv7r1S','Praveen','Kumar ','pkpraveen1102@gmail.com','6384726384','MIT','Chennai',2018,'ECE'),('K721','$2y$10$qx8J1mdeH4yym2VZviJyqOUp10NjI7D1TBp6SxwxghCgJzqOnYiQa','Aswin','RRV','achu.achu20@gmail.com','8148138619','CEG','Chennai',3,'CSE'),('K758','$2y$10$MbQwTABb9ua7Pb38mYs8TO2Ht73KtwIRfWsmPklpydd9qZ/RGfcD.','Diviya Seshani','Kumanan','diviyakuman@gmail.com','8608706034','CEG','Chennai',3,'Cse'),('K759','$2y$10$pA8EdB9oWDhxVk58U0F8mO9ivRT0/6myGsI848K78hAdDCdUXqZdy','test','test1234','test@test.com','7561623612','CEG','Chengalpet',4,'IT'),('K77','$2y$10$57H.P7k2dBATBo7ofVU2Y.FeNzPUlQbH4KRTXJW2JqdzMvCnWW9Au','Shruthi','Sundar','shruthi2k0@gmail.com','7358325784','CEG','Chennai',3,'CSE'),('K805','$2y$10$eW9TYcXww2REEEhatlycWufsEVsdaBPq1r3V.v3xp70PFYzivFgA6','Akash','Selvan','tamilsp2909@gmail.com','9629620853','Saranathan ','Trichirappalli',2,'EEE'),('K815','$2y$10$OJOTsA2HV5JDj3eW7yY4QeQzjfQLFYtw3aWLyM6ELZAy7DQ2hY0Sq','Mohammad','Muzammil','mohdmuzammil07112002@gmail.com','7068069173','College of Engineering Guindy, Anna University','Chennai',1,'Mechanical Engineering'),('K826','$2y$10$sqnLrzdkuPyRXlXpn7HM5.u0t8gtaYN8rexA.IEtpWNRAK0DPXf.C','Shyamkumar','M','shyam50400405@gmail.com','9150155684','Sri Sairam Engineering College','Chennai',2,'ECE'),('K870','$2y$10$YAn6WW.hFUAfuna5HmDdg.mRr5WoyvpKlLOp1eCswzyO0P3H44p1m','Ishaque','S','ishaqueishak11@gmail.com','7010456755','Anna university-Ceg','Chennai',3,'cse'),('K904','$2y$10$F4hQ.CVLzH8NmZ.I7UCRZuDK.6EVcwTtorizDF8uRZuGFcnRT2/jq','Vismitha','Surendran','vishmi.11dec@gmail.com','6379240220','Madras Institute Of Technology','Chennai',2000,'Computer technology'),('K960','$2y$10$NucQYY.m6HVUbhqeLjiB9.RsCBtN.RQbqFsdtTv.7OAS59bXti9LS','AJITH ','R','ajithr97510@gmail.com','8220177726','CEG','Chennai',3,'Computer Science ');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workshops`
--

DROP TABLE IF EXISTS `workshops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `workshops` (
  `kid` char(7) NOT NULL,
  `email` varchar(100) NOT NULL,
  `workshop_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kid`),
  CONSTRAINT `workshops_ibfk_1` FOREIGN KEY (`kid`) REFERENCES `user` (`kid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workshops`
--

LOCK TABLES `workshops` WRITE;
/*!40000 ALTER TABLE `workshops` DISABLE KEYS */;
INSERT INTO `workshops` VALUES ('K1104','joyceafi444@gmail.com','w1'),('K1128','vetriselvan1818@gmail.com','w1'),('K1144','shruthisg122000@gmail.com','w1'),('K1271','abishek2027@gmail.com','w1'),('K131','jaiprasadelangovan@gmail.com','w2'),('K1343','aswinwin94@gmail.com','w1'),('K1466','rockingraju6898@gmail.com','w1'),('K1481','logeshlgh7@gmail.com','w2'),('K1504','heeraaananthan@gmail.com','w1'),('K1551','jsherindorothychristy@gmail.com','w1'),('K1600','jashvinu.y@gmail.com','w1'),('K1621','sangeerajan2k1@gmail.com','w1'),('K1647','swetha221196@gmail.com','w1'),('K1684','mbjalal2002@gmail.com','w2'),('K1755','dkdinesh6688@gmail.com','w1'),('K194','boojithkrishnav26@gmail.com','w1'),('K207','jeevan.rames@gmail.com','w2'),('K26','kavinswealthvalley@gmail.com','w1'),('K263','yuvankarthi@gmail.com','w2'),('K269','srikansud@gmail.com','w2'),('K273','soumiya2805@gmail.com','w1'),('K323','deepthivsdd2@gmail.com','w1'),('K326','meetsuryanagarajan@gmail.com','w2'),('K362','praveenvel2017@gmail.com','w1'),('K568','vikas190599@gmail.com','w1'),('K606','viswesh11122000@gmail.com','w1'),('K62','kavyamsiva@gmail.com','w1'),('K643','girish22krish@gmail.com','w2'),('K659','mechanicalchan53@gmail.com','w2'),('K77','shruthi2k0@gmail.com','w2');
/*!40000 ALTER TABLE `workshops` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-30 16:27:06
