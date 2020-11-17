CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `imagepath` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `category` VALUES (1,'PHP','asset/images/php.jpg','Leer meer over PHP'),(2,'C#','asset/images/csharp.jpg','Leer meer over C#'),(3,'Java','asset/images/java.jpg','Leer meer over Java'),(4,'HTML','asset/images/html5.jpg','Leer meer over HTML'),(5,'Javascript','asset/images/javascript.jpg','Leer meer over JavaScript'),(6,'CSS','asset/images/css3.jpg','Leer meer over CSS'),(7,'Git','asset/images/git.jpg','Leer meer over Git'),(8,'Ruby','asset/images/ruby.jpg','Leer meer over Ruby'),(9,'Python','asset/images/python.jpg','Leer meer over Python'),(10,'C++','asset/images/c++.jpg','Leer meer over C++'),(11,'SQL','asset/images/sql.jpg','Leer meer over SQL'),(12,'C','asset/images/c.jpg','Leer meer over C');
CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `videoid` int NOT NULL,
  `userid` int NOT NULL,
  `comment` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE `likes` (
  `idlike` int NOT NULL AUTO_INCREMENT,
  `dislike` int DEFAULT NULL,
  `islike` int DEFAULT NULL,
  `videos_id` int NOT NULL,
  `users_id` int NOT NULL,
  PRIMARY KEY (`idlike`)
);
CREATE TABLE `newsletter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `users` VALUES (1,'Rudy','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2020-10-22 11:26:49','2020-10-22 11:26:49',1),
                           (2,'Stephan','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2020-10-22 11:29:13','2020-10-22 11:29:13',1),
                           (3,'Mathijs','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2020-10-22 11:29:57','2020-10-22 11:29:57',1),
                           (4,'Fake','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2020-10-22 11:31:12','2020-10-22 11:31:12',1),
                           (5,'Admin','74913f5cd5f61ec0bcfdb775414c2fb3d161b620','2020-10-22 11:31:38','2020-10-22 11:31:38',1),
                           (6,'Dave','4db3053fb02e124fd8199388823f5a0a1e2f8778','2020-10-22 11:36:11','2020-10-22 11:36:11',0);

CREATE TABLE `videos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `videoname` varchar(55) NOT NULL,
  `description` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `imagepath` varchar(255) NOT NULL,
  `catid` int NOT NULL,
  PRIMARY KEY (`id`)

);
INSERT INTO `videos` VALUES (31,'HTML basics','Een uitleg over line breaks, comments en spacing ','.\\asset\\HTML Tutorial for Beginners - 02 - Line breaks, spacing, and comments.mp4','.\\asset\\Html video afbeelding 2.jpg',4),(32,'Javacript crash course','Een snelcurcus Javascript in 7 minuten','.\\asset\\Learn JavaScript in 7 minutes   Create Interactive Websites   Code in 5.mp4','.\\asset\\Javascript video afbeelding 1.jpg',5),(33,'Javascript voor beginners','Een uitleg in de basics van Javascript','.\\asset\\Getting Started With Javascript   Javascript Tutorial For Beginners.mp4','.\\asset\\Javascript video afbeelding 2.jpg',5),(34,'CSS tips & tricks','Handige CSS tips & tricks om het maximale uit CSS te halen','.\\asset\\5 CSS tricks every Web Developer should know in 2020.mp4','.\\asset\\CSS video afbeelding 1.jpg',6),(35,'CSS positions','Een uitleg over positionering binnen CSS','.\\asset\\Learn CSS Position In 9 Minutes.mp4','.\\asset\\CSS video afbeelding 2.jpg',6),(36,'Git voor beginners','De werking van Git uitgelegd in 2 minuten','.\\asset\\What is Git Explained in 2 Minutes!.mp4','.\\asset\\git video afbeelding 1.jpg',7),(37,'Git tutorial ','Een korte tutorial over de werking van Git','.\\asset\\Learn Git In 15 Minutes.mp4','.\\asset\\git video afbeelding 2.jpg',7),(38,'Ruby basics - variables & objects','Een uitleg over variabelen en objecten binnen Ruby','.\\asset\\Ruby from Scratch Variable Assignment and Objects - 002.mp4','.\\asset\\ruby video afbeelding 1.jpg',8),(39,'Ruby basics - classes & methods','Een uitleg over classes & methods binnen Ruby ','.\\asset\\Ruby from Scratch Class and Instance Methods - 003.mp4','.\\asset\\ruby video afbeelding 2.jpg',8),(40,'Python ','Een korte uitleg over wat Python inhoudt','.\\asset\\What is Python Why Python is So Popular.mp4','.\\asset\\python video afbeelding 1.jpg',9),(41,'Python - variables & data types','Een uitleg over de verschillende variabelen en data types binnen Python','.\\asset\\Variables & Data Types In Python   Python Tutorial For Beginners   Python Programming   Edureka.mp4','.\\asset\\python video afbeelding 2.jpg',9),(42,'C++ tutorial - Getting Started','Een uitleg over hoe te beginnen met C++','.\\asset\\C++ Programming Tutorial 2 - Installing g++ and Getting Started.mp4','.\\asset\\C++ video afbeelding.jpg',10),(43,'C++ tutorial - Variables','Een uitleg over variabelen binnen C++','.\\asset\\Variables in C++.mp4','.\\asset\\C++ video afbeelding 2.jpg',10),(44,'SQL basics ','De basics van SQL uitgelegd','.\\asset\\SQL Basics for Beginners   Learn SQL   SQL Tutorial for Beginners   Edureka.mp4','.\\asset\\sql video afbeelding 1.jpg',11),(45,'SQL tutorial ','Een snelcursus SQL in 10 minuten','.\\asset\\Learn Basic SQL in 10 Minutes.mp4','.\\asset\\sql video afbeelding 2.jpg',11),(46,'C - Intro ','Een intro in de C programmeertaal','.\\asset\\C Programming – Features & The First C Program.mp4','.\\asset\\C video afbeelding 1.jpg',12),(47,'C - Data types (Integers)','Een uitleg over integers binnen C','.\\asset\\Fundamental Data Types − Integer (Part 1).mp4','.\\asset\\C video afbeelding 2.jpg',12),(51,'C# - Variables','Een uitleg over variabelen in C#','.\\asset\\3 How To Create Variables In Csharp   Data Types In Csharp   Csharp Tutorial For Beginners   C Sharp Tutorial.mp4','.\\asset\\Csharp afbeelding 6.jpg',2),(52,'C# tutorial - classes & objects','Een uitleg over classes en objects in C#','.\\asset\\6 How To Create Classes And Objects In Csharp   Csharp Tutorial For Beginners   C Sharp Tutorial.mp4','.\\asset\\Csharp video afbeelding 2.jpg',2),(57,'HTML tutorial ','Een intro over HTML ','.\\asset\\1HTML Tutorial for Beginners.mp4','.\\asset\\1HTML video afbeelding 1.jpg',4),(61,'Constructors & destructors ','Een uitleg over constructors en destructors binnen PHP','.\\asset\\36 Constructors and Destructors in OOP PHP   Object Oriented PHP Tutorial For Beginners   mmtuts.mp4','.\\asset\\3php video afbeelding 2.jpg',1),(63,'Java intro ','Een intro in Java','.\\asset\\2Java Programming Tutorial 1 - Introduction to Java.mp4','.\\asset\\2Java video afbeelding 1.jpg',3),(64,'PHP basics','Een intro in PHP ','.\\asset\\5What Is PHP.mp4','.\\asset\\5PHP video (afbeelding).jpg',1),(65,'Java Syntax','Een uitleg over de syntax van Java','.\\asset\\2Program It Yourself in Java [Basics] - 1 - Syntax and Variables.mp4','.\\asset\\2Java video afbeelding 2.jpg',3);
