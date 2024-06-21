

CREATE TABLE `account` (
  `A_id` int(10) NOT NULL AUTO_INCREMENT,
  `A_Completename` varchar(100) NOT NULL,
  `A_username` varchar(50) NOT NULL,
  `A_password` varchar(100) NOT NULL,
  `A_type` varchar(50) NOT NULL,
  `Remark` varchar(10) NOT NULL,
  `Del` varchar(10) NOT NULL,
  PRIMARY KEY (`A_id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4;

INSERT INTO account VALUES("73","Rolando Oros","Rolando","$2y$10$qIGc43P6SzOufSL2mZZQ4Ov3hvnnLMW5ajgRf5hYQT5bJe/l94eSa","Admin","Approve","");
INSERT INTO account VALUES("149","Cecilia Castro","Cecilia","$2y$10$bMew/vwOo3Ge1QJAFnAgPejXED4Lbe9uhZyxjZYmDAFlih7i2EC76","Secretary","Approve","");
INSERT INTO account VALUES("150","Grace Jimenez","Grace","$2y$10$03XyNa0GDFnUMPoUo6VrdOBKNRgv2zKMSUxVC7AC3p2W38YKKg6AK","BHW","Approve","");
INSERT INTO account VALUES("151","Jaquelyn Oros","Jaquelyn","$2y$10$kXob904XRxgV3vGbGumJE.Q7yiJXwratqYqIUHux3uIBGBog4IZTK","Nurse","Approve","");
INSERT INTO account VALUES("152","lyn Manubag","lyn","$2y$10$jez1/LrcYsMSCZBmyZHpTOZZSXcHSr.utQbFTqMdLGL8hsT9/5SRC","BHW","Approve","");
INSERT INTO account VALUES("153","Michael John","Mike","$2y$10$UfEbUoDZrJqrR5HI.ro.UONB5CJ8Hqrcw9/f3PLxmcf2IjeblPF0S","Secretary","Approve","");
INSERT INTO account VALUES("154","Michael John","Mike","$2y$10$cLIogS60UI5UC7wFhCYAdu.w.x10Yy9Ffppz2ncr72WBnU6AQM3r2","Secretary","Approve","");
INSERT INTO account VALUES("155","Ryan Joe","Cabizares","$2y$10$zZTJG.D/LJodq8yjR8I8I.nMF/9qGf9vOcqMd/GI/TyRjeJg.0p.K","BHW","Approve","");
INSERT INTO account VALUES("156","Joe Ryan Victorillo","RYAN","$2y$10$GwrO3lszVSAtQ4xwL6V2F.MoaYdfM1bDtSURqKJdui37e/agp/U5y","Admin","Approve","");
INSERT INTO account VALUES("157","Justine salemeron","Salemeron","$2y$10$e3PtKWCJ7kgeavno8sxOUe7PLoY95Vr6prp6xBEtbQB4TNBpV28za","Admin","Approve","");
INSERT INTO account VALUES("158","jhon soposo","soposo","$2y$10$XGtNHwqMJQJeyP8rlZQkDelzQwKfYCdIhbFb//.BWKiKgTEJyamV6","Secretary","Approve","");



CREATE TABLE `certificate` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `resident_ID` int(10) NOT NULL,
  `P_id` int(10) NOT NULL,
  `Porpose` varchar(100) NOT NULL,
  `Approve` varchar(100) NOT NULL,
  `Requesteddate` date NOT NULL,
  `Certificate` varchar(100) NOT NULL,
  `Remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4060 DEFAULT CHARSET=utf8mb4;

INSERT INTO certificate VALUES("4053","2324","3022","School","Approve","2022-02-15","Barangay Residency","Done");
INSERT INTO certificate VALUES("4054","2322","3023","School","Approve","2022-02-16","Barangay Residency","Done");
INSERT INTO certificate VALUES("4055","2333","3022","Cutting Tree","Approve","2022-02-19","Cutting Tree Permit","Done");
INSERT INTO certificate VALUES("4056","2324","3022","School","Approve","2022-02-19","Barangay Clearance","Done");
INSERT INTO certificate VALUES("4057","2335","3028","Employment","Approve","2022-03-03","Barangay Residency","");
INSERT INTO certificate VALUES("4058","2325","3023","Cutting Tree","Approve","2022-03-07","Cutting Tree Permit","Done");
INSERT INTO certificate VALUES("4059","2322","3022","Cutting Tree","Approve","2022-03-11","Barangay Clearance","Done");



CREATE TABLE `houshold` (
  `householdNO` int(30) NOT NULL AUTO_INCREMENT,
  `P_id` int(10) NOT NULL,
  `H_member` varchar(50) NOT NULL,
  `H_headoffamily` varchar(100) NOT NULL,
  `govBenefits` varchar(50) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  PRIMARY KEY (`householdNO`),
  KEY `P_id` (`P_id`),
  CONSTRAINT `houshold_ibfk_1` FOREIGN KEY (`P_id`) REFERENCES `purok` (`P_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3050 DEFAULT CHARSET=utf8mb4;

INSERT INTO houshold VALUES("3045","3022","1","Porceso Victorillo","4Ps","");
INSERT INTO houshold VALUES("3046","3023","2","Juan Victorillo","4Ps","");
INSERT INTO houshold VALUES("3047","3024","3","Dioscora Oflas","4Ps","");
INSERT INTO houshold VALUES("3048","3025","4","Roly Lapiz","4Ps","");
INSERT INTO houshold VALUES("3049","3022","1","Jerico Largo","UCT","");



CREATE TABLE `logs` (
  `L_id` int(10) NOT NULL AUTO_INCREMENT,
  `A_id` int(10) NOT NULL,
  `L_date` date NOT NULL,
  `L_time` time(6) DEFAULT NULL,
  `L_action` varchar(100) NOT NULL,
  PRIMARY KEY (`L_id`),
  KEY `A_id` (`A_id`),
  CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`A_id`) REFERENCES `account` (`A_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1401 DEFAULT CHARSET=utf8mb4;

INSERT INTO logs VALUES("1165","73","2022-02-15","10:05:33.000000","Admin Login");
INSERT INTO logs VALUES("1166","73","2022-02-15","10:42:57.000000","Approve Account");
INSERT INTO logs VALUES("1167","149","2022-02-15","10:43:10.000000","Secretary Login");
INSERT INTO logs VALUES("1168","149","2022-02-15","10:43:31.000000","Added Purok");
INSERT INTO logs VALUES("1169","149","2022-02-15","10:43:39.000000","Added Purok");
INSERT INTO logs VALUES("1170","149","2022-02-15","10:43:49.000000","Added Purok");
INSERT INTO logs VALUES("1171","149","2022-02-15","10:44:05.000000","Added Purok");
INSERT INTO logs VALUES("1172","149","2022-02-15","10:44:15.000000","Added Purok");
INSERT INTO logs VALUES("1173","149","2022-02-15","10:44:32.000000","Added Purok");
INSERT INTO logs VALUES("1174","149","2022-02-15","10:44:42.000000","Added Purok");
INSERT INTO logs VALUES("1175","73","2022-02-15","12:04:00.000000","Approve Account");
INSERT INTO logs VALUES("1176","150","2022-02-15","12:04:26.000000","BHW Login");
INSERT INTO logs VALUES("1177","73","2022-02-15","12:16:49.000000","Added Purok");
INSERT INTO logs VALUES("1178","149","2022-02-15","12:18:58.000000","Added Purok");
INSERT INTO logs VALUES("1179","149","2022-02-15","12:19:04.000000","Added Purok");
INSERT INTO logs VALUES("1180","149","2022-02-15","12:19:08.000000","Added Purok");
INSERT INTO logs VALUES("1181","149","2022-02-15","12:19:13.000000","Added Purok");
INSERT INTO logs VALUES("1182","149","2022-02-15","12:19:19.000000","Added Purok");
INSERT INTO logs VALUES("1183","149","2022-02-15","12:19:35.000000","Added Purok");
INSERT INTO logs VALUES("1184","73","2022-02-15","03:23:06.000000","Updated Purok");
INSERT INTO logs VALUES("1185","73","2022-02-15","03:24:41.000000","Updated Purok");
INSERT INTO logs VALUES("1186","73","2022-02-15","03:24:51.000000","Updated Purok");
INSERT INTO logs VALUES("1187","73","2022-02-15","03:36:01.000000","Approve Certificate");
INSERT INTO logs VALUES("1188","73","2022-02-15","03:36:09.000000","Print Barangay Residency");
INSERT INTO logs VALUES("1189","149","2022-02-15","03:37:36.000000","Added Blotter");
INSERT INTO logs VALUES("1190","149","2022-02-15","03:38:53.000000","Added Blotter");
INSERT INTO logs VALUES("1191","149","2022-02-15","03:40:39.000000","Update Resident");
INSERT INTO logs VALUES("1192","149","2022-02-15","03:40:46.000000","Updated Household");
INSERT INTO logs VALUES("1193","150","2022-02-15","03:46:14.000000","Added Paitent");
INSERT INTO logs VALUES("1194","150","2022-02-15","03:47:06.000000","Update Patient");
INSERT INTO logs VALUES("1195","73","2022-02-15","03:57:32.000000","Admin Login");
INSERT INTO logs VALUES("1196","150","2022-02-15","03:57:59.000000","BHW Login");
INSERT INTO logs VALUES("1197","149","2022-02-15","05:02:44.000000","Secretary Login");
INSERT INTO logs VALUES("1198","149","2022-02-15","05:09:11.000000","Updated Purok");
INSERT INTO logs VALUES("1199","150","2022-02-15","05:19:54.000000","BHW Login");
INSERT INTO logs VALUES("1200","73","2022-02-15","05:23:25.000000","Approve Account");
INSERT INTO logs VALUES("1201","151","2022-02-15","05:23:38.000000","Nurse Login");
INSERT INTO logs VALUES("1202","150","2022-02-15","05:58:52.000000","BHW Login");
INSERT INTO logs VALUES("1203","149","2022-02-16","08:29:54.000000","Secretary Login");
INSERT INTO logs VALUES("1204","149","2022-02-16","08:30:09.000000","Updated Household");
INSERT INTO logs VALUES("1205","149","2022-02-16","09:00:34.000000","Updated Purok");
INSERT INTO logs VALUES("1206","149","2022-02-16","09:08:25.000000","Updated Purok");
INSERT INTO logs VALUES("1207","149","2022-02-16","09:10:16.000000","Updated Purok");
INSERT INTO logs VALUES("1208","149","2022-02-16","09:15:24.000000","Update Resident");
INSERT INTO logs VALUES("1209","149","2022-02-16","09:15:56.000000","Update Resident");
INSERT INTO logs VALUES("1210","149","2022-02-16","09:17:24.000000","Updated Purok");
INSERT INTO logs VALUES("1211","149","2022-02-16","09:19:01.000000","Secretary Login");
INSERT INTO logs VALUES("1212","149","2022-02-16","09:21:03.000000","Updated Purok");
INSERT INTO logs VALUES("1213","149","2022-02-16","09:22:24.000000","Updated Purok");
INSERT INTO logs VALUES("1214","149","2022-02-16","09:28:56.000000","Updated Purok");
INSERT INTO logs VALUES("1215","149","2022-02-16","09:29:14.000000","Updated Purok");
INSERT INTO logs VALUES("1216","149","2022-02-16","09:29:19.000000","Updated Purok");
INSERT INTO logs VALUES("1217","149","2022-02-16","09:29:32.000000","Updated Purok");
INSERT INTO logs VALUES("1218","149","2022-02-16","09:30:09.000000","Updated Household");
INSERT INTO logs VALUES("1219","149","2022-02-16","09:30:42.000000","Unsettled Blotter");
INSERT INTO logs VALUES("1220","149","2022-02-16","09:30:55.000000","Scheduled Unsettled to Active");
INSERT INTO logs VALUES("1221","73","2022-02-16","09:39:08.000000","Admin Login");
INSERT INTO logs VALUES("1222","73","2022-02-16","09:39:22.000000","Updated Household");
INSERT INTO logs VALUES("1223","149","2022-02-16","09:40:09.000000","Secretary Login");
INSERT INTO logs VALUES("1224","73","2022-02-16","09:43:47.000000","Updated Purok");
INSERT INTO logs VALUES("1225","73","2022-02-16","09:43:51.000000","Updated Purok");
INSERT INTO logs VALUES("1226","149","2022-02-16","09:45:58.000000","Added Official");
INSERT INTO logs VALUES("1227","149","2022-02-16","09:50:53.000000","Added Resident");
INSERT INTO logs VALUES("1228","150","2022-02-16","09:52:12.000000","BHW Login");
INSERT INTO logs VALUES("1229","150","2022-02-16","09:52:50.000000","Added medicine");
INSERT INTO logs VALUES("1230","150","2022-02-16","09:54:20.000000","Added medicine");
INSERT INTO logs VALUES("1231","150","2022-02-16","09:57:21.000000","Add Baby");
INSERT INTO logs VALUES("1232","150","2022-02-16","09:57:47.000000","Immunize Baby");
INSERT INTO logs VALUES("1233","150","2022-02-16","10:28:49.000000","Added Mother");
INSERT INTO logs VALUES("1234","150","2022-02-16","10:31:03.000000","Add Baby");
INSERT INTO logs VALUES("1235","151","2022-02-16","10:44:38.000000","Nurse Login");
INSERT INTO logs VALUES("1236","151","2022-02-16","10:45:02.000000","Prenatal");
INSERT INTO logs VALUES("1237","151","2022-02-16","10:48:14.000000","Child Immunization");
INSERT INTO logs VALUES("1238","150","2022-02-16","10:50:21.000000","Add Baby");
INSERT INTO logs VALUES("1239","150","2022-02-16","10:50:40.000000","Immunize Baby");
INSERT INTO logs VALUES("1240","151","2022-02-16","10:50:52.000000","Child Immunization");
INSERT INTO logs VALUES("1241","150","2022-02-16","02:14:45.000000","Added Paitent");
INSERT INTO logs VALUES("1242","73","2022-02-16","02:53:59.000000","Admin Login");
INSERT INTO logs VALUES("1243","151","2022-02-16","02:54:23.000000","Nurse Login");
INSERT INTO logs VALUES("1244","73","2022-02-16","03:42:02.000000","Admin Login");
INSERT INTO logs VALUES("1245","73","2022-02-16","05:19:42.000000","Admin Login");
INSERT INTO logs VALUES("1246","73","2022-02-16","05:20:20.000000","Admin Login");
INSERT INTO logs VALUES("1247","73","2022-02-16","05:21:06.000000","Update Resident");
INSERT INTO logs VALUES("1248","150","2022-02-16","05:21:46.000000","BHW Login");
INSERT INTO logs VALUES("1249","150","2022-02-16","05:23:08.000000","Update Resident");
INSERT INTO logs VALUES("1250","149","2022-02-16","05:31:14.000000","Secretary Login");
INSERT INTO logs VALUES("1251","73","2022-02-17","09:36:01.000000","Admin Login");
INSERT INTO logs VALUES("1252","149","2022-02-17","02:25:04.000000","Secretary Login");
INSERT INTO logs VALUES("1253","150","2022-02-17","02:51:29.000000","BHW Login");
INSERT INTO logs VALUES("1254","151","2022-02-17","03:09:03.000000","Nurse Login");
INSERT INTO logs VALUES("1255","73","2022-02-17","03:12:47.000000","Admin Login");
INSERT INTO logs VALUES("1256","149","2022-02-17","07:10:10.000000","Secretary Login");
INSERT INTO logs VALUES("1257","150","2022-02-17","07:10:17.000000","BHW Login");
INSERT INTO logs VALUES("1258","73","2022-02-17","07:10:20.000000","Admin Login");
INSERT INTO logs VALUES("1259","73","2022-02-17","07:11:42.000000","Update Resident");
INSERT INTO logs VALUES("1260","150","2022-02-18","07:41:54.000000","BHW Login");
INSERT INTO logs VALUES("1261","151","2022-02-18","07:46:41.000000","Nurse Login");
INSERT INTO logs VALUES("1262","150","2022-02-18","08:44:14.000000","BHW Login");
INSERT INTO logs VALUES("1263","150","2022-02-18","09:04:26.000000","Add Baby");
INSERT INTO logs VALUES("1264","73","2022-02-18","09:16:57.000000","Admin Login");
INSERT INTO logs VALUES("1265","150","2022-02-18","09:28:40.000000","BHW Login");
INSERT INTO logs VALUES("1266","73","2022-02-18","09:32:52.000000","Admin Login");
INSERT INTO logs VALUES("1267","149","2022-02-18","09:35:09.000000","Secretary Login");
INSERT INTO logs VALUES("1268","150","2022-02-18","09:37:23.000000","BHW Login");
INSERT INTO logs VALUES("1269","151","2022-02-18","09:40:33.000000","Nurse Login");
INSERT INTO logs VALUES("1270","149","2022-02-18","10:05:24.000000","Secretary Login");
INSERT INTO logs VALUES("1271","151","2022-02-18","12:55:49.000000","Nurse Login");
INSERT INTO logs VALUES("1272","150","2022-02-18","01:21:04.000000","BHW Login");
INSERT INTO logs VALUES("1273","150","2022-02-18","01:24:32.000000","Added Mother");
INSERT INTO logs VALUES("1274","73","2022-02-18","06:35:58.000000","Admin Login");
INSERT INTO logs VALUES("1275","150","2022-02-18","06:41:56.000000","BHW Login");
INSERT INTO logs VALUES("1276","73","2022-02-18","06:44:39.000000","Admin Login");
INSERT INTO logs VALUES("1277","149","2022-02-18","06:48:23.000000","Secretary Login");
INSERT INTO logs VALUES("1278","150","2022-02-18","06:49:24.000000","BHW Login");
INSERT INTO logs VALUES("1279","73","2022-02-18","06:52:29.000000","Approve Certificate");
INSERT INTO logs VALUES("1280","73","2022-02-18","06:52:54.000000","Print Barangay Residency");
INSERT INTO logs VALUES("1281","73","2022-02-18","06:54:27.000000","Unsettled Blotter");
INSERT INTO logs VALUES("1282","151","2022-02-18","07:04:39.000000","Nurse Login");
INSERT INTO logs VALUES("1283","150","2022-02-18","07:06:47.000000","Added Paitent");
INSERT INTO logs VALUES("1284","73","2022-02-18","07:35:30.000000","Admin Login");
INSERT INTO logs VALUES("1285","73","2022-02-19","07:10:32.000000","Admin Login");
INSERT INTO logs VALUES("1286","149","2022-02-19","07:10:52.000000","Secretary Login");
INSERT INTO logs VALUES("1287","150","2022-02-19","07:10:54.000000","BHW Login");
INSERT INTO logs VALUES("1288","73","2022-02-19","07:11:52.000000","Updated Purok");
INSERT INTO logs VALUES("1289","73","2022-02-19","07:18:10.000000","Added Purok");
INSERT INTO logs VALUES("1290","73","2022-02-19","07:21:23.000000","Added Official");
INSERT INTO logs VALUES("1291","73","2022-02-19","07:22:18.000000","Added Official");
INSERT INTO logs VALUES("1292","73","2022-02-19","07:22:30.000000","Update Official");
INSERT INTO logs VALUES("1293","73","2022-02-19","07:23:42.000000","Added Official");
INSERT INTO logs VALUES("1294","73","2022-02-19","07:25:36.000000","Added Official");
INSERT INTO logs VALUES("1295","150","2022-02-19","07:45:03.000000","Added Paitent");
INSERT INTO logs VALUES("1296","150","2022-02-19","07:46:06.000000","Added Paitent");
INSERT INTO logs VALUES("1297","150","2022-02-19","07:46:21.000000","Updated Medicine");
INSERT INTO logs VALUES("1298","150","2022-02-19","07:47:40.000000","Added medicine");
INSERT INTO logs VALUES("1299","149","2022-02-19","07:51:00.000000","Added Blotter");
INSERT INTO logs VALUES("1300","151","2022-02-19","07:53:36.000000","Nurse Login");
INSERT INTO logs VALUES("1301","150","2022-02-19","07:54:24.000000","Immunize Baby");
INSERT INTO logs VALUES("1302","150","2022-02-19","07:55:49.000000","Add Baby");
INSERT INTO logs VALUES("1303","73","2022-02-19","08:54:42.000000","Admin Login");
INSERT INTO logs VALUES("1304","149","2022-02-19","08:54:50.000000","Secretary Login");
INSERT INTO logs VALUES("1305","150","2022-02-19","08:55:00.000000","BHW Login");
INSERT INTO logs VALUES("1306","151","2022-02-19","08:55:25.000000","Nurse Login");
INSERT INTO logs VALUES("1307","73","2022-02-19","09:18:36.000000","Approve Certificate");
INSERT INTO logs VALUES("1308","73","2022-02-19","09:19:23.000000","Settled Blotter");
INSERT INTO logs VALUES("1309","151","2022-02-19","09:35:36.000000","Child Immunization");
INSERT INTO logs VALUES("1310","151","2022-02-19","09:36:07.000000","Prenatal");
INSERT INTO logs VALUES("1311","150","2022-02-19","09:53:37.000000","Added Paitent");
INSERT INTO logs VALUES("1312","150","2022-02-19","09:57:26.000000","Update Resident");
INSERT INTO logs VALUES("1313","73","2022-02-19","10:02:16.000000","Approve Certificate");
INSERT INTO logs VALUES("1314","73","2022-02-19","10:02:23.000000","Print Barangay Clearance");
INSERT INTO logs VALUES("1315","150","2022-02-22","07:48:13.000000","BHW Login");
INSERT INTO logs VALUES("1316","150","2022-02-22","09:20:30.000000","Update Baby");
INSERT INTO logs VALUES("1317","150","2022-02-22","09:20:35.000000","Update Baby");
INSERT INTO logs VALUES("1318","150","2022-02-22","09:51:37.000000","Add Baby");
INSERT INTO logs VALUES("1319","150","2022-02-22","09:53:17.000000","Add Baby");
INSERT INTO logs VALUES("1320","151","2022-02-22","10:01:18.000000","Nurse Login");
INSERT INTO logs VALUES("1321","73","2022-02-22","11:06:14.000000","Admin Login");
INSERT INTO logs VALUES("1322","149","2022-02-22","11:06:36.000000","Secretary Login");
INSERT INTO logs VALUES("1323","149","2022-02-22","01:36:53.000000","Added Blotter");
INSERT INTO logs VALUES("1324","149","2022-02-22","01:37:08.000000","Added Blotter");
INSERT INTO logs VALUES("1325","149","2022-02-22","01:39:00.000000","Added Blotter");
INSERT INTO logs VALUES("1326","149","2022-02-22","04:56:02.000000","Added Blotter");
INSERT INTO logs VALUES("1327","149","2022-02-23","08:48:36.000000","Secretary Login");
INSERT INTO logs VALUES("1328","149","2022-02-23","02:08:18.000000","Settled Blotter");
INSERT INTO logs VALUES("1329","149","2022-02-23","02:10:35.000000","Unsettled Blotter");
INSERT INTO logs VALUES("1330","149","2022-03-02","09:44:55.000000","Secretary Login");
INSERT INTO logs VALUES("1331","73","2022-03-02","09:48:11.000000","Admin Login");
INSERT INTO logs VALUES("1332","149","2022-03-02","09:56:03.000000","Scheduled Unsettled to Active");
INSERT INTO logs VALUES("1333","73","2022-03-02","10:01:55.000000","Unsettled Blotter");
INSERT INTO logs VALUES("1334","149","2022-03-02","10:35:17.000000","Added Blotter");
INSERT INTO logs VALUES("1335","149","2022-03-02","10:43:12.000000","Added Blotter");
INSERT INTO logs VALUES("1336","149","2022-03-02","10:53:52.000000","Updated Blotter");
INSERT INTO logs VALUES("1337","150","2022-03-02","12:33:08.000000","BHW Login");
INSERT INTO logs VALUES("1338","150","2022-03-02","12:34:10.000000","Add Baby");
INSERT INTO logs VALUES("1339","150","2022-03-02","12:35:26.000000","Update Baby");
INSERT INTO logs VALUES("1340","150","2022-03-02","12:42:13.000000","Update Mother");
INSERT INTO logs VALUES("1341","150","2022-03-02","12:44:14.000000","Added Paitent");
INSERT INTO logs VALUES("1342","149","2022-03-02","12:48:26.000000","Secretary Login");
INSERT INTO logs VALUES("1343","149","2022-03-02","01:11:33.000000","Added Blotter");
INSERT INTO logs VALUES("1344","149","2022-03-02","01:12:37.000000","Settled Blotter");
INSERT INTO logs VALUES("1345","149","2022-03-02","01:12:52.000000","Unsettled Blotter");
INSERT INTO logs VALUES("1346","149","2022-03-02","01:13:11.000000","Scheduled Unsettled to Active");
INSERT INTO logs VALUES("1347","149","2022-03-02","01:13:22.000000","Scheduled Unsettled to Active");
INSERT INTO logs VALUES("1348","149","2022-03-02","03:52:24.000000","Secretary Login");
INSERT INTO logs VALUES("1349","149","2022-03-03","08:35:05.000000","Secretary Login");
INSERT INTO logs VALUES("1350","73","2022-03-03","10:39:15.000000","Admin Login");
INSERT INTO logs VALUES("1351","73","2022-03-03","01:32:57.000000","Admin Login");
INSERT INTO logs VALUES("1352","73","2022-03-03","04:00:00.000000","Admin Login");
INSERT INTO logs VALUES("1353","73","2022-03-03","04:04:23.000000","Admin Login");
INSERT INTO logs VALUES("1354","73","2022-03-03","04:12:26.000000","Admin Login");
INSERT INTO logs VALUES("1355","73","2022-03-03","04:20:22.000000","Admin Login");
INSERT INTO logs VALUES("1356","73","2022-03-03","04:21:02.000000","Add Account");
INSERT INTO logs VALUES("1357","73","2022-03-03","04:21:02.000000","Add Account");
INSERT INTO logs VALUES("1358","73","2022-03-03","04:22:18.000000","Add Account");
INSERT INTO logs VALUES("1359","73","2022-03-03","04:22:45.000000","Approve Account");
INSERT INTO logs VALUES("1360","73","2022-03-03","04:22:50.000000","Approve Account");
INSERT INTO logs VALUES("1361","73","2022-03-03","04:22:54.000000","Approve Account");
INSERT INTO logs VALUES("1362","153","2022-03-03","04:23:23.000000","Secretary Login");
INSERT INTO logs VALUES("1363","149","2022-03-04","07:51:02.000000","Secretary Login");
INSERT INTO logs VALUES("1364","149","2022-03-04","07:51:38.000000","Add Account");
INSERT INTO logs VALUES("1365","156","2022-03-04","07:54:03.000000","Admin Login");
INSERT INTO logs VALUES("1366","156","2022-03-04","08:01:29.000000","Add Account");
INSERT INTO logs VALUES("1367","156","2022-03-04","08:06:05.000000","Add Account");
INSERT INTO logs VALUES("1368","158","2022-03-04","08:06:29.000000","Secretary Login");
INSERT INTO logs VALUES("1369","156","2022-03-07","03:18:06.000000","Admin Login");
INSERT INTO logs VALUES("1370","149","2022-03-07","03:41:42.000000","Secretary Login");
INSERT INTO logs VALUES("1371","156","2022-03-07","03:44:34.000000","Settled Blotter");
INSERT INTO logs VALUES("1372","156","2022-03-07","03:44:37.000000","Settled Blotter");
INSERT INTO logs VALUES("1373","156","2022-03-07","03:54:24.000000","Approve Account");
INSERT INTO logs VALUES("1374","156","2022-03-07","03:54:27.000000","Approve Account");
INSERT INTO logs VALUES("1375","156","2022-03-07","04:05:16.000000","Admin Login");
INSERT INTO logs VALUES("1376","156","2022-03-07","04:05:30.000000","Approve Certificate");
INSERT INTO logs VALUES("1377","149","2022-03-08","09:44:10.000000","Secretary Login");
INSERT INTO logs VALUES("1378","156","2022-03-10","09:17:10.000000","Admin Login");
INSERT INTO logs VALUES("1379","150","2022-03-10","09:17:43.000000","BHW Login");
INSERT INTO logs VALUES("1380","156","2022-03-10","09:30:59.000000","Admin Login");
INSERT INTO logs VALUES("1381","156","2022-03-10","09:54:01.000000","Admin Login");
INSERT INTO logs VALUES("1382","149","2022-03-11","04:24:29.000000","Secretary Login");
INSERT INTO logs VALUES("1383","149","2022-03-11","04:25:43.000000","Print Barangay Clearance");
INSERT INTO logs VALUES("1384","149","2022-03-11","04:27:13.000000","Print Barangay Clearance");
INSERT INTO logs VALUES("1385","150","2022-03-11","04:30:07.000000","BHW Login");
INSERT INTO logs VALUES("1386","149","2022-03-11","04:36:34.000000","Update Resident");
INSERT INTO logs VALUES("1387","150","2022-03-11","04:37:59.000000","Delete Medicine");
INSERT INTO logs VALUES("1388","149","2022-03-11","04:48:30.000000","Print Cut tree permit");
INSERT INTO logs VALUES("1389","149","2022-03-11","04:51:21.000000","Print Cut tree permit");
INSERT INTO logs VALUES("1390","149","2022-03-11","04:52:20.000000","Print Barangay Clearance");
INSERT INTO logs VALUES("1391","156","2022-03-16","08:20:23.000000","Admin Login");
INSERT INTO logs VALUES("1392","156","2022-03-16","08:20:33.000000","Print Cut tree permit");
INSERT INTO logs VALUES("1393","149","2022-03-16","08:51:02.000000","Secretary Login");
INSERT INTO logs VALUES("1394","156","2022-03-16","08:51:16.000000","Print Cut tree permit");
INSERT INTO logs VALUES("1395","149","2022-03-16","08:51:32.000000","Print Barangay Clearance");
INSERT INTO logs VALUES("1396","149","2022-03-16","08:51:46.000000","Print Barangay Residency");
INSERT INTO logs VALUES("1397","156","2022-03-16","08:52:10.000000","Print Cut tree permit");
INSERT INTO logs VALUES("1398","149","2022-03-16","08:53:50.000000","Print Cut tree permit");
INSERT INTO logs VALUES("1399","150","2022-03-16","08:54:38.000000","BHW Login");
INSERT INTO logs VALUES("1400","149","2022-03-24","08:19:42.000000","Secretary Login");



CREATE TABLE `maternity` (
  `Maternity_id` int(10) NOT NULL AUTO_INCREMENT,
  `resident_ID` int(10) NOT NULL,
  `temp` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `Wt` varchar(10) NOT NULL,
  `Ht` varchar(10) NOT NULL,
  `Bp` varchar(10) NOT NULL,
  `Pr` varchar(10) NOT NULL,
  `Edc` date NOT NULL,
  `Aog` varchar(10) NOT NULL,
  `Dates` date NOT NULL,
  PRIMARY KEY (`Maternity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO maternity VALUES("6","2325","36.1","24","50kg","5.4 ft","90/120","72","2022-10-19","5 weeks","2022-02-16");
INSERT INTO maternity VALUES("7","2330","36.1","24","50kg","5.4 ft","90/120","72","2023-01-12","5 weeks","2022-02-18");



CREATE TABLE `medicine` (
  `Med_id` int(10) NOT NULL AUTO_INCREMENT,
  `Med_name` varchar(100) NOT NULL,
  `Med_discription` varchar(200) NOT NULL,
  `Med_dosage` varchar(100) NOT NULL,
  `Expiry_date` date NOT NULL,
  `Med_quantity` int(10) NOT NULL,
  `remark` varchar(10) NOT NULL,
  PRIMARY KEY (`Med_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5012 DEFAULT CHARSET=utf8mb4;

INSERT INTO medicine VALUES("5009","BioFlu","For Fever","500g","2022-03-12","7","");
INSERT INTO medicine VALUES("5010","Mefenamic","pain killer","500g","2022-03-10","14","DELETED");
INSERT INTO medicine VALUES("5011","loperamide"," For diarrhea","500g","2022-03-31","94","");



CREATE TABLE `newborn` (
  `C_id` int(10) NOT NULL AUTO_INCREMENT,
  `resident_ID` int(10) NOT NULL,
  `C_Parent` int(10) NOT NULL,
  `C_wt` varchar(100) NOT NULL,
  `C_ht` varchar(100) NOT NULL,
  PRIMARY KEY (`C_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

INSERT INTO newborn VALUES("12","2330","6","35 lbs","12 cm");
INSERT INTO newborn VALUES("14","2332","7","21 lbs","12 cm");
INSERT INTO newborn VALUES("15","2334","6","59 lbs","123 cm");
INSERT INTO newborn VALUES("16","2335","7","59 lbs","123 cm");
INSERT INTO newborn VALUES("17","2336","7","59 kg","123 cm");



CREATE TABLE `officials` (
  `Offcial_id` int(10) NOT NULL AUTO_INCREMENT,
  `Position` varchar(50) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `Contact_no` varchar(100) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Start_Term` date NOT NULL,
  `End_Term` date NOT NULL,
  PRIMARY KEY (`Offcial_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1121 DEFAULT CHARSET=utf8mb4;

INSERT INTO officials VALUES("1116","Captain","Rolando Oros","09362986398","Mayana city of naga cebu","2020-01-05","2024-01-05");
INSERT INTO officials VALUES("1117","Councilor","Dioscora Oflas","09362271638","Mayana city of naga cebu","2022-02-23","2023-02-28");
INSERT INTO officials VALUES("1118","councilor","Ana Bastida","09876543212","Mayana city of naga cebu","2022-02-20","2023-02-20");
INSERT INTO officials VALUES("1119","Councilor","Jemar Gelica","09362271638","Mayana city of naga cebu","2022-02-20","2023-02-20");
INSERT INTO officials VALUES("1120","Councilor","Emily Asis","09362271638","Mayana city of naga cebu","2022-02-20","2023-02-20");



CREATE TABLE `okpatient` (
  `Patient_id` int(10) NOT NULL,
  `Med_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO okpatient VALUES("1029","5009","1","2022-02-16");
INSERT INTO okpatient VALUES("1029","5010","5","2022-02-16");
INSERT INTO okpatient VALUES("1031","5010","2","2022-02-18");
INSERT INTO okpatient VALUES("1032","5010","1","2022-02-19");
INSERT INTO okpatient VALUES("1032","5010","5","2022-02-19");
INSERT INTO okpatient VALUES("1033","5009","6","2022-02-19");
INSERT INTO okpatient VALUES("1034","5010","-7","2022-02-19");
INSERT INTO okpatient VALUES("1035","5009","5","2022-03-11");
INSERT INTO okpatient VALUES("1035","5011","6","2022-03-11");



CREATE TABLE `patient` (
  `Patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `A_id` int(11) NOT NULL,
  `P_id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `Mname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Age` int(10) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `BP` varchar(100) NOT NULL,
  `Temperature` varchar(100) NOT NULL,
  `pulserate` varchar(100) NOT NULL,
  `Consultation` varchar(50) NOT NULL,
  `Remarks` varchar(200) NOT NULL,
  PRIMARY KEY (`Patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1036 DEFAULT CHARSET=utf8mb4;

INSERT INTO patient VALUES("1029","150","3024","justine","cabizares","salmeron","Male","21","5.4 ft","53 lbs","110/70","38.1","99","Fever","ok");
INSERT INTO patient VALUES("1031","150","3022","John","doe","Largo","Male","21","5'4ft","50kg","90/100","36.1","72","kalibanga","ok");
INSERT INTO patient VALUES("1032","150","3022","Joe Ryan","Cabizares","Victorillo","Male","21","5.4 ft","59 kg","90/120","36.1","70","Ubo","ok");
INSERT INTO patient VALUES("1033","150","3023","Mike","doe","Cantil","Male","22","5.6 ft","70 kg","90/120","36.1","70","Hilanat","ok");
INSERT INTO patient VALUES("1034","150","3022","justine","cabizares","salmeron","Female","80","123 cm","59 kg","90/120","34 temp","34","fdfdds","ok");
INSERT INTO patient VALUES("1035","150","3022","Alana Castro","Mason Christensen","Brenden Parker","Male","80","123 cm","21 lbs","90/120","34.1","70","Nisi eveniet quam a","ok");



CREATE TABLE `prenatal` (
  `prenatal_id` int(10) NOT NULL AUTO_INCREMENT,
  `resident_ID` int(10) NOT NULL,
  `Maternity_id` int(10) NOT NULL,
  `Wt` varchar(50) NOT NULL,
  `Bp` varchar(50) NOT NULL,
  `temp` varchar(50) NOT NULL,
  `week` varchar(50) NOT NULL,
  `DOI` date NOT NULL,
  `vaccine` varchar(50) NOT NULL,
  `Remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`prenatal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

INSERT INTO prenatal VALUES("8","2325","6","50kg","90/120","34.1","6 week","2022-02-16","DONE","OK");
INSERT INTO prenatal VALUES("9","2330","7","60kg","90/120","36.1","6 week","2022-02-19","DONE","OK");



CREATE TABLE `purok` (
  `P_id` int(10) NOT NULL AUTO_INCREMENT,
  `P_name` varchar(100) NOT NULL,
  `res` int(10) NOT NULL,
  PRIMARY KEY (`P_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3030 DEFAULT CHARSET=utf8mb4;

INSERT INTO purok VALUES("3022","Buli","0");
INSERT INTO purok VALUES("3023","Toog","0");
INSERT INTO purok VALUES("3024","Cacao","0");
INSERT INTO purok VALUES("3025","Camaselis","0");
INSERT INTO purok VALUES("3026","Manga 1","0");
INSERT INTO purok VALUES("3027","Manga 2","0");
INSERT INTO purok VALUES("3028","Ceres","0");



CREATE TABLE `resident` (
  `resident_ID` int(10) NOT NULL AUTO_INCREMENT,
  `P_id` int(10) NOT NULL,
  `householdNO` int(30) NOT NULL,
  `R_firstname` varchar(100) NOT NULL,
  `R_Middilename` varchar(50) NOT NULL,
  `R_Lastname` varchar(100) NOT NULL,
  `R_gender` varchar(20) NOT NULL,
  `R_bloodtype` varchar(20) NOT NULL,
  `R_birthdate` date NOT NULL,
  `R_Birthplace` varchar(100) NOT NULL,
  `R_status` varchar(30) NOT NULL,
  `R_religion` varchar(100) NOT NULL,
  `R_nationality` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`resident_ID`),
  KEY `householdNO` (`householdNO`),
  KEY `P_id` (`P_id`),
  CONSTRAINT `resident_ibfk_1` FOREIGN KEY (`householdNO`) REFERENCES `houshold` (`householdNO`),
  CONSTRAINT `resident_ibfk_2` FOREIGN KEY (`P_id`) REFERENCES `purok` (`P_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2337 DEFAULT CHARSET=utf8mb4;

INSERT INTO resident VALUES("2323","3023","3046","Josh","Lapiz","Largo","Male","NONE","1999-01-01","Mayana, City of Naga","Single","Catholic","Filipino","No","Migrate","2022-02-16");
INSERT INTO resident VALUES("2324","3024","3047","Gwen","Cruz","Dela Cerna","Female","NONE","1998-02-05","Mayana, City of Naga","Single","Catholic","Filipino","No","Dead","2022-03-25");
INSERT INTO resident VALUES("2325","3025","3048","Angel","Victorillo","Talandron","Female","NONE","1997-05-08","Mayana, City of Naga","Single","Catholic","Filipino","No","","0000-00-00");
INSERT INTO resident VALUES("2329","3025","3046","Karding","Yu","Cruz","Male","A+","1940-01-02","Mayana,City of Naga Cebu","Merried","Catholic","Filipino","Merried","Dead","2022-02-17");
INSERT INTO resident VALUES("2330","3025","3048","Angel","lakang","Cortes","Female","NONE","2022-02-01","city of naga","Single","catholic","Filipino","Yes","","0000-00-00");
INSERT INTO resident VALUES("2331","3026","3047","Danica","cabizares","salmeron","Female","A+","2021-11-01","city of naga","Single","catholic","Filipino","No","","0000-00-00");
INSERT INTO resident VALUES("2332","3028","3048","Jhon","labid","Soposo","Male","NONE","2021-02-19","city of naga","Single","catholic","Filipino","No","","0000-00-00");
INSERT INTO resident VALUES("2333","3022","3049","Jhulrich","Bolinga","Largo","Male","NONE","1998-03-29","Vito","Single","Roman Catholic","Filipino","No","","0000-00-00");
INSERT INTO resident VALUES("2334","3027","3047","Zelenia Berry","Mariko Sargent","Macon Duran","Female","A+","2022-01-12","Non ut neque consequ","Merried","Rerum maiores suscip","Elit quo dolore dic","Yes","","0000-00-00");
INSERT INTO resident VALUES("2335","3025","3046","Desiree Richard","Fitzgerald Ewing","Minerva Robertson","Female","O-","2022-01-26","Molestiae voluptates","Single","In nemo dignissimos ","Unde labore velit ea","No","","0000-00-00");
INSERT INTO resident VALUES("2336","3027","3047","Quinn Copeland","Michael Mitchell","Francesca Holcomb","Female","AB+","2022-02-24","Alias exercitationem","Merried","Id reprehenderit n","Lorem dolore esse e","No","","0000-00-00");



CREATE TABLE `tblblotter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complainant` varchar(100) DEFAULT NULL,
  `adress` varchar(10) NOT NULL,
  `respondent` int(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `details` varchar(10000) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `Sdate` date NOT NULL,
  `Stime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

INSERT INTO tblblotter VALUES("48","Juan dela Cruz","","0","2022-02-15","03:38:53","nanghilabot","Report","0000-00-00","00:00:00");
INSERT INTO tblblotter VALUES("53","Danica salmeron","Manga 1 ","2331","2022-02-22","04:55:03","dasdsa","Settled","2022-02-22","18:54:00");
INSERT INTO tblblotter VALUES("54","Jhulrich Largo","Buli ","2335","2022-02-22","04:56:02","xcxcx","Settled","2022-02-03","04:58:02");
INSERT INTO tblblotter VALUES("55","Jhulrich Largo","Buli ","2332","2022-03-02","10:35:17","fdfdfd","Report","0000-00-00","00:00:00");
INSERT INTO tblblotter VALUES("56","Angel Cortes","Camaselis ","2324","2022-03-02","10:43:12","asd","Settled","2022-03-02","11:43:00");
INSERT INTO tblblotter VALUES("57","Jhon Soposo","Ceres ","2333","2022-03-02","01:11:33","fdsfdsf","Settled","2022-03-02","01:11:33");



CREATE TABLE `vaccine` (
  `Immunize_id` int(10) NOT NULL AUTO_INCREMENT,
  `C_id` int(10) NOT NULL,
  `resident_ID` int(10) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `vaccine` varchar(50) NOT NULL,
  `vaccine_date` date NOT NULL,
  `Remarks` varchar(10) NOT NULL,
  PRIMARY KEY (`Immunize_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO vaccine VALUES("8","12","2330","35 lbs","12 cm","BCG","2022-02-16","DONE");
INSERT INTO vaccine VALUES("9","13","2331","35 lbs","12 cm","BCG","2022-02-16","DONE");
INSERT INTO vaccine VALUES("10","13","2331","5kg","15cm","Penta1","2022-02-19","DONE");

