<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2018-10-12 13:51:44 --> UTF-8 Support Enabled
DEBUG - 2018-10-12 13:51:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-10-12 13:51:44 --> Total execution time: 0.0879
DEBUG - 2018-10-12 13:51:44 --> UTF-8 Support Enabled
DEBUG - 2018-10-12 13:51:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2018-10-12 13:51:44 --> Total execution time: 0.0028
DEBUG - 2018-10-12 13:51:44 --> UTF-8 Support Enabled
DEBUG - 2018-10-12 13:51:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2018-10-12 13:51:44 --> Query error: Data truncated for column 'ENT_Budget' at row 1 - Invalid query: INSERT INTO `EVENT` (`ENT_Code`, `ENT_CUS_ID`, `ENT_EVT_ID`, `ENT_Date`, `ENT_Starttime`, `ENT_Endtime`, `ENT_VEN_ID`, `ENT_HALL_ID`, `ENT_Initial_budget`, `ENT_Budget`, `ENT_Total_charge`, `ENT_Requirement`, `ENT_Remarks`, `ENT_Complete`, `ENT_User`, `ENT_Timestamp`) VALUES ('ENT00000004', '6', '4', '2018-12-14', '08:30', '12:30', '5', '15', '180000', '', '200000', 'test', '', 0, 'admin', '2018-10-12 13:51:44')
ERROR - 2018-10-12 13:59:48 --> 404 Page Not Found: LogViewerController/index
ERROR - 2018-10-12 13:59:51 --> 404 Page Not Found: Log/index
ERROR - 2018-10-12 14:00:06 --> 404 Page Not Found: Log/index
ERROR - 2018-10-12 14:00:08 --> 404 Page Not Found: LogViewerController/index
ERROR - 2018-10-12 14:01:58 --> Severity: error --> Exception: Class 'CILogViewer\CILogViewer' not found /var/www/html/ems/application/controllers/LogViewerController.php 8
ERROR - 2018-10-12 14:01:58 --> Severity: Error --> Uncaught TypeError: Argument 1 passed to CI_Exceptions::show_exception() must be an instance of Exception, instance of Error given, called in /var/www/html/ems/system/core/Common.php on line 658 and defined in /var/www/html/ems/system/core/Exceptions.php:190
Stack trace:
#0 /var/www/html/ems/system/core/Common.php(658): CI_Exceptions->show_exception(Object(Error))
#1 [internal function]: _exception_handler(Object(Error))
#2 {main}
  thrown /var/www/html/ems/system/core/Exceptions.php 190
ERROR - 2018-10-12 14:05:44 --> Severity: error --> Exception: Class 'CILogViewer\CILogViewer' not found /var/www/html/ems/application/controllers/LogViewerController.php 8
ERROR - 2018-10-12 14:07:05 --> Severity: error --> Exception: Class 'CILogViewer' not found /var/www/html/ems/application/controllers/LogViewerController.php 8
ERROR - 2018-10-12 14:07:07 --> Severity: error --> Exception: Class 'CILogViewer' not found /var/www/html/ems/application/controllers/LogViewerController.php 8
