

CREATE TABLE `book` (
  `Book_id` int(10) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(30) NOT NULL,
  `Book_author` varchar(30) NOT NULL,
  `YearOfPub` varchar(10) NOT NULL,
  `BStatus` varchar(30) NOT NULL,
  `Bedition` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `Bimage` varchar(100) NOT NULL,
  `book_shelves` int(100) NOT NULL,
  PRIMARY KEY (`Book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1016 DEFAULT CHARSET=utf8mb4;

INSERT INTO book VALUES("1012","C#","Anders Hejlsberg","1989","Avialable","1st","8","images/jBpp8HrS/","23");
INSERT INTO book VALUES("1013","C","Dennis Ritchie","1978 ","Avialable","1st","8","","23");
INSERT INTO book VALUES("1014","Harry Potter","J. K. Rowling","21 Novembe","Avialable","1st","3","","1");
INSERT INTO book VALUES("1015","Java","James Gosling","1995","available","1st","8","","20");



CREATE TABLE `issue_book` (
  `issue_id` int(100) NOT NULL AUTO_INCREMENT,
  `Student_id` int(100) NOT NULL,
  `Book_id` int(30) NOT NULL,
  `approved_book` varchar(30) NOT NULL,
  `issued_date` varchar(100) NOT NULL,
  `Igetdate` varchar(100) NOT NULL,
  `return_date` date NOT NULL,
  `Remark` varchar(100) NOT NULL,
  PRIMARY KEY (`issue_id`),
  KEY `Student_id` (`Student_id`),
  KEY `Book_id` (`Book_id`),
  CONSTRAINT `issue_book_ibfk_1` FOREIGN KEY (`Student_id`) REFERENCES `student` (`Student_id`),
  CONSTRAINT `issue_book_ibfk_2` FOREIGN KEY (`Book_id`) REFERENCES `book` (`Book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=236 DEFAULT CHARSET=utf8mb4;

INSERT INTO issue_book VALUES("221","49","1012","APPROVED","2021-06-10","2021-06-11","2021-06-14","RETURNED");
INSERT INTO issue_book VALUES("222","49","1013","APPROVED","2021-06-10","2021-06-11","2021-06-14","RETURNED");
INSERT INTO issue_book VALUES("223","48","1013","APPROVED","2021-06-10","2021-06-11","2021-06-14","RETURNED");
INSERT INTO issue_book VALUES("224","49","1013","APPROVED","2021-06-10","2021-06-10","2021-06-15","RETURNED");
INSERT INTO issue_book VALUES("225","49","1014","APPROVED","2021-09-10","2021-09-11","2021-09-14","RETURNED");
INSERT INTO issue_book VALUES("226","49","1012","DISAPPROVED","2021-06-11","","0000-00-00","RETURNED");
INSERT INTO issue_book VALUES("227","49","1012","APPROVED","2021-06-11","2021-06-12","2021-06-15","RETURNED");
INSERT INTO issue_book VALUES("228","49","1012","APPROVED","2021-06-11","2021-06-12","2021-06-14","RETURNED");
INSERT INTO issue_book VALUES("229","49","1012","DISAPPROVED","2021-06-11","","0000-00-00","RETURNED");
INSERT INTO issue_book VALUES("230","49","1012","APPROVED","2021-09-16","2021-09-16","2021-09-18","");
INSERT INTO issue_book VALUES("231","49","1012","","","","0000-00-00","");
INSERT INTO issue_book VALUES("232","49","1013","","","","0000-00-00","");
INSERT INTO issue_book VALUES("233","49","1014","","","","0000-00-00","");
INSERT INTO issue_book VALUES("234","49","1015","","","","0000-00-00","");
INSERT INTO issue_book VALUES("235","49","1014","","","","0000-00-00","");



CREATE TABLE `lbrarian` (
  `lib_Id` int(10) NOT NULL AUTO_INCREMENT,
  `lib_fName` varchar(30) NOT NULL,
  `lib_Mname` varchar(30) NOT NULL,
  `lib_Lname` varchar(30) NOT NULL,
  `lib_address` varchar(30) NOT NULL,
  `lib_age` int(30) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `lib_Password` varchar(100) NOT NULL,
  PRIMARY KEY (`lib_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10112 DEFAULT CHARSET=utf8mb4;

INSERT INTO lbrarian VALUES("10109","Joe Ryan ","cabizares","Victorillo","Mayana city of naga cebu","30","gwapo","$2y$10$/qGLRw6ZOYTK26LmdT5NbeQAOVp6ewKrh0oU8euvP8LENnqiCpC2a");
INSERT INTO lbrarian VALUES("10110","mike","gwapo","bustamante","minglanilla","20","mike","$2y$10$biwoH01A5CWTTEfMnhc3x.PX7Z5Yij9nP8gW2EdflG1rMf.lp5jOe");
INSERT INTO lbrarian VALUES("10111","ryan","cabi","victorillo","Mayana","24","ryan123","$2y$10$2puNHJOoxdAkyIPzHJeHxuoU4cFqene1.MPJqDGwebfr8xZH0j84m");



CREATE TABLE `student` (
  `Student_id` int(10) NOT NULL AUTO_INCREMENT,
  `Student_Fname` varchar(30) NOT NULL,
  `Student_Mname` varchar(30) NOT NULL,
  `Student_Lname` varchar(30) NOT NULL,
  `Student_course` varchar(30) NOT NULL,
  `Student_Year` varchar(30) NOT NULL,
  `Stud_Address` varchar(30) NOT NULL,
  `School_id` varchar(100) NOT NULL,
  `Stud_pass` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;

INSERT INTO student VALUES("46","justine","gwapo","salmeron","BSIT","3rd","pangdan","SCC-18-0007415","$2y$10$4OOdkq6JjG4uI2.4Me7rhu3GrkEGuvIiT7JBMTF0S60QSpTGuOCta","09362986398");
INSERT INTO student VALUES("47","Japet","Lasprilla","Abad","BSIT","3rd","Calajo-an","12-12345","$2y$10$fCCbdwBrHY1yUNS43yx/eOMBrL91L0NVPkY9yVSANmqdZjrGQSmGm","09327727312");
INSERT INTO student VALUES("48","james","barnayha","salmeron","BSIT","3rd year","pangdan","SCC-18-0007416","$2y$10$k1CMhY2XHgTcU/mPP8VSje3K0/mx1emMKvytO1XeIFdgPp.t76nYO","09551129028");
INSERT INTO student VALUES("49","Joe Ryan","cabizares","Victorillo","BSIT","3rd","mayana","SCC-18-0007313","$2y$10$tzabDtB.8Tr6hXX3sWlWk.sBUU.vruRtfWmpz7CY/a14gO7LnPsQy","09362986398");

