<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-14 11:31:18 --> Severity: Notice --> Undefined index: id /var/www/html/ems/application/models/transaction/Agenda_model.php 31
ERROR - 2018-11-14 11:32:21 --> Severity: Notice --> Undefined index: id /var/www/html/ems/application/models/transaction/Agenda_model.php 31
ERROR - 2018-11-14 14:53:58 --> Severity: Warning --> Missing argument 2 for CI_DB_query_builder::join(), called in /var/www/html/ems/application/models/master/User_model.php on line 128 and defined /var/www/html/ems/system/database/DB_query_builder.php 512
ERROR - 2018-11-14 14:53:58 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 535
ERROR - 2018-11-14 14:53:58 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 556
ERROR - 2018-11-14 14:53:58 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 560
ERROR - 2018-11-14 14:53:58 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 562
ERROR - 2018-11-14 14:53:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN `employee` USING ()' at line 2 - Invalid query: SELECT `USR_ID` as "id", `USR_NIC` as "nic", `USR_Fullname` as "full_name", `USR_User_group` as "group", `USR_User` as "user", `USR_Status` as "status"
JOIN `employee` USING ()
ERROR - 2018-11-14 14:54:18 --> Severity: Warning --> Missing argument 2 for CI_DB_query_builder::join(), called in /var/www/html/ems/application/models/master/User_model.php on line 128 and defined /var/www/html/ems/system/database/DB_query_builder.php 512
ERROR - 2018-11-14 14:54:18 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 535
ERROR - 2018-11-14 14:54:18 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 556
ERROR - 2018-11-14 14:54:18 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 560
ERROR - 2018-11-14 14:54:18 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 562
ERROR - 2018-11-14 14:54:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN `employee` USING ()' at line 2 - Invalid query: SELECT `USR_ID` as "id", `USR_NIC` as "nic", `USR_Fullname` as "full_name", `USR_User_group` as "group", `USR_User` as "user", `USR_Status` as "status"
JOIN `employee` USING ()
ERROR - 2018-11-14 14:54:43 --> Severity: Warning --> Missing argument 2 for CI_DB_query_builder::join(), called in /var/www/html/ems/application/models/master/User_model.php on line 128 and defined /var/www/html/ems/system/database/DB_query_builder.php 512
ERROR - 2018-11-14 14:54:43 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 535
ERROR - 2018-11-14 14:54:43 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 556
ERROR - 2018-11-14 14:54:43 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 560
ERROR - 2018-11-14 14:54:43 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 562
ERROR - 2018-11-14 14:54:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN `employee` USING ()' at line 2 - Invalid query: SELECT `USR_ID` as "id", `USR_NIC` as "nic", `USR_Fullname` as "full_name", `USR_User_group` as "group", `USR_User` as "user", `USR_Status` as "status"
JOIN `employee` USING ()
ERROR - 2018-11-14 20:44:37 --> Severity: Warning --> Missing argument 2 for CI_DB_query_builder::join(), called in /var/www/html/ems/application/models/master/User_model.php on line 128 and defined /var/www/html/ems/system/database/DB_query_builder.php 512
ERROR - 2018-11-14 20:44:37 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 535
ERROR - 2018-11-14 20:44:37 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 556
ERROR - 2018-11-14 20:44:37 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 560
ERROR - 2018-11-14 20:44:37 --> Severity: Notice --> Undefined variable: cond /var/www/html/ems/system/database/DB_query_builder.php 562
ERROR - 2018-11-14 20:44:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN `employee` USING ()' at line 2 - Invalid query: SELECT `USR_ID` as "id", `USR_NIC` as "nic", `USR_Fullname` as "full_name", `USR_User_group` as "group", `USR_User` as "user", `USR_Status` as "status"
JOIN `employee` USING ()
ERROR - 2018-11-14 21:19:49 --> Query error: Table 'eems.employee' doesn't exist - Invalid query: SELECT `USR_ID` as "id", `EMP_NIC` as "nic", `EMP_Fullname` as "full_name", `USR_User_group` as "group", `USR_User` as "user", `USR_Status` as "status"
FROM `USER`
JOIN `employee` ON `USER`.`USR_EMP_ID`=`EMPLOYEE`.`EMP_ID`
ERROR - 2018-11-14 22:13:08 --> Query error: Field 'USR_NIC' doesn't have a default value - Invalid query: INSERT INTO `USER` (`USR_EMP_ID`, `USR_User_group`, `USR_Username`, `USR_Password`, `USR_Status`, `USR_User`, `USR_UserId`, `USR_Timestamp`) VALUES ('16', 'user', 'mana', '123456', 1, 'admin', '1', '2018-11-14 22:13:08')
ERROR - 2018-11-14 22:13:11 --> Query error: Field 'USR_NIC' doesn't have a default value - Invalid query: INSERT INTO `USER` (`USR_EMP_ID`, `USR_User_group`, `USR_Username`, `USR_Password`, `USR_Status`, `USR_User`, `USR_UserId`, `USR_Timestamp`) VALUES ('16', 'user', 'mana', '123456', 1, 'admin', '1', '2018-11-14 22:13:11')
ERROR - 2018-11-14 22:50:08 --> Query error: Field 'USR_Fullname' doesn't have a default value - Invalid query: INSERT INTO `USER` (`USR_EMP_ID`, `USR_User_group`, `USR_Username`, `USR_Password`, `USR_Status`, `USR_User`, `USR_UserId`, `USR_Timestamp`) VALUES ('16', 'user', 'mana', '123456', 1, 'admin', '1', '2018-11-14 22:50:08')
ERROR - 2018-11-14 22:50:20 --> Query error: Field 'USR_Fullname' doesn't have a default value - Invalid query: INSERT INTO `USER` (`USR_EMP_ID`, `USR_User_group`, `USR_Username`, `USR_Password`, `USR_Status`, `USR_User`, `USR_UserId`, `USR_Timestamp`) VALUES ('16', 'user', 'mana', '123456', 1, 'admin', '1', '2018-11-14 22:50:20')
ERROR - 2018-11-14 22:51:09 --> Severity: Notice --> Undefined index: USR_Username /var/www/html/ems/application/models/master/User_model.php 105
ERROR - 2018-11-14 22:51:12 --> Severity: Notice --> Undefined index: USR_Username /var/www/html/ems/application/models/master/User_model.php 105
ERROR - 2018-11-14 22:53:00 --> Severity: Notice --> Undefined index: USR_Username /var/www/html/ems/application/models/master/User_model.php 105
ERROR - 2018-11-14 22:53:02 --> Severity: Notice --> Undefined index: USR_Username /var/www/html/ems/application/models/master/User_model.php 105
