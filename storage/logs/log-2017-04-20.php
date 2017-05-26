<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-04-20 07:29:18 --> Severity: Parsing Error --> syntax error, unexpected '}' C:\xampp\htdocs\helpy\application\controllers\student.php 25
ERROR - 2017-04-20 07:29:27 --> Severity: Notice --> Undefined property: Student::$sesssion C:\xampp\htdocs\helpy\application\controllers\student.php 22
ERROR - 2017-04-20 07:29:27 --> Severity: Error --> Call to a member function userdata() on null C:\xampp\htdocs\helpy\application\controllers\student.php 22
ERROR - 2017-04-20 08:20:46 --> Email could not been sent. Mailer Error (Line 137): Could not instantiate mail function.
ERROR - 2017-04-20 08:20:46 --> #0 C:\xampp\htdocs\helpy\application\controllers\Appointments.php(455): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 C:\xampp\htdocs\helpy\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\helpy\index.php(353): require_once('C:\\xampp\\htdocs...')
#4 {main}
ERROR - 2017-04-20 08:34:46 --> Severity: Notice --> Undefined variable: appointment C:\xampp\htdocs\helpy\application\views\student\profile.php 50
ERROR - 2017-04-20 08:35:41 --> Email could not been sent. Mailer Error (Line 137): Could not instantiate mail function.
ERROR - 2017-04-20 08:35:41 --> #0 C:\xampp\htdocs\helpy\application\controllers\Appointments.php(455): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 C:\xampp\htdocs\helpy\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\helpy\index.php(353): require_once('C:\\xampp\\htdocs...')
#4 {main}
ERROR - 2017-04-20 08:36:39 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\controllers\Appointments.php 406
ERROR - 2017-04-20 08:36:43 --> Error refreshing the OAuth2 token, message: '{
  "error" : "invalid_request",
  "error_description" : "Missing required parameter: refresh_token"
}'
ERROR - 2017-04-20 08:36:43 --> #0 C:\xampp\htdocs\helpy\application\libraries\external\google-api-php-client\auth\Google_OAuth2.php(240): Google_OAuth2->refreshTokenRequest(Array)
#1 C:\xampp\htdocs\helpy\application\libraries\external\google-api-php-client\Google_Client.php(315): Google_OAuth2->refreshToken(NULL)
#2 C:\xampp\htdocs\helpy\application\libraries\Google_sync.php(116): Google_Client->refreshToken(NULL)
#3 C:\xampp\htdocs\helpy\application\controllers\Appointments.php(406): Google_Sync->refresh_token(NULL)
#4 [internal function]: Appointments->ajax_register_appointment()
#5 C:\xampp\htdocs\helpy\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#6 C:\xampp\htdocs\helpy\index.php(353): require_once('C:\\xampp\\htdocs...')
#7 {main}
ERROR - 2017-04-20 08:36:44 --> Email could not been sent. Mailer Error (Line 137): Could not instantiate mail function.
ERROR - 2017-04-20 08:36:44 --> #0 C:\xampp\htdocs\helpy\application\controllers\Appointments.php(455): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 C:\xampp\htdocs\helpy\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\helpy\index.php(353): require_once('C:\\xampp\\htdocs...')
#4 {main}
ERROR - 2017-04-20 08:37:06 --> Email could not been sent. Mailer Error (Line 137): Could not instantiate mail function.
ERROR - 2017-04-20 08:37:06 --> #0 C:\xampp\htdocs\helpy\application\controllers\Appointments.php(455): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email))
#1 [internal function]: Appointments->ajax_register_appointment()
#2 C:\xampp\htdocs\helpy\system\core\CodeIgniter.php(514): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\helpy\index.php(353): require_once('C:\\xampp\\htdocs...')
#4 {main}
ERROR - 2017-04-20 09:11:07 --> Severity: Warning --> Missing argument 1 for messages::index() C:\xampp\htdocs\helpy\application\controllers\messages.php 18
ERROR - 2017-04-20 09:11:07 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\helpy\application\controllers\messages.php 33
ERROR - 2017-04-20 09:14:43 --> Severity: Notice --> Use of undefined constant profile - assumed 'profile' C:\xampp\htdocs\helpy\application\views\messages\to.php 4
ERROR - 2017-04-20 09:15:20 --> Severity: Notice --> Use of undefined constant profile - assumed 'profile' C:\xampp\htdocs\helpy\application\views\messages\to.php 4
ERROR - 2017-04-20 09:15:42 --> Severity: Notice --> Use of undefined constant profile - assumed 'profile' C:\xampp\htdocs\helpy\application\views\messages\to.php 4
ERROR - 2017-04-20 09:16:16 --> Severity: Notice --> Use of undefined constant profile - assumed 'profile' C:\xampp\htdocs\helpy\application\views\messages\to.php 4
ERROR - 2017-04-20 09:16:36 --> Severity: Notice --> Use of undefined constant profile - assumed 'profile' C:\xampp\htdocs\helpy\application\views\messages\to.php 4
ERROR - 2017-04-20 09:17:17 --> Severity: Parsing Error --> syntax error, unexpected 'page' (T_STRING) C:\xampp\htdocs\helpy\application\views\messages\index.php 9
ERROR - 2017-04-20 10:44:21 --> Severity: Error --> Call to undefined method Student_model::send_now() C:\xampp\htdocs\helpy\application\controllers\messages.php 49
ERROR - 2017-04-20 10:46:14 --> Severity: error --> Exception: Class Messages already exists and doesn't extend CI_Model C:\xampp\htdocs\helpy\system\core\Loader.php 349
ERROR - 2017-04-20 10:46:57 --> Severity: error --> Exception: Class Messages already exists and doesn't extend CI_Model C:\xampp\htdocs\helpy\system\core\Loader.php 349
ERROR - 2017-04-20 10:47:23 --> Severity: error --> Exception: Class Messages already exists and doesn't extend CI_Model C:\xampp\htdocs\helpy\system\core\Loader.php 349
ERROR - 2017-04-20 10:47:32 --> Severity: error --> Exception: Class Messages already exists and doesn't extend CI_Model C:\xampp\htdocs\helpy\system\core\Loader.php 349
ERROR - 2017-04-20 10:47:53 --> Severity: error --> Exception: Class Messages already exists and doesn't extend CI_Model C:\xampp\htdocs\helpy\system\core\Loader.php 349
ERROR - 2017-04-20 10:49:20 --> Severity: error --> Exception: Unable to locate the model you have specified: Messaging C:\xampp\htdocs\helpy\system\core\Loader.php 344
ERROR - 2017-04-20 10:50:11 --> Severity: error --> Exception: Unable to locate the model you have specified: Messaging C:\xampp\htdocs\helpy\system\core\Loader.php 344
ERROR - 2017-04-20 10:50:42 --> Severity: error --> Exception: Unable to locate the model you have specified: Messaging C:\xampp\htdocs\helpy\system\core\Loader.php 344
ERROR - 2017-04-20 10:50:52 --> Severity: error --> Exception: Unable to locate the model you have specified: Messaging C:\xampp\htdocs\helpy\system\core\Loader.php 344
ERROR - 2017-04-20 10:51:54 --> Severity: error --> Exception: Unable to locate the model you have specified: Messaging C:\xampp\htdocs\helpy\system\core\Loader.php 344
ERROR - 2017-04-20 10:52:09 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\to.php 29
ERROR - 2017-04-20 10:52:09 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\to.php 29
ERROR - 2017-04-20 10:52:09 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\to.php 30
ERROR - 2017-04-20 10:52:09 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\to.php 30
ERROR - 2017-04-20 10:52:09 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\to.php 30
ERROR - 2017-04-20 10:52:09 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\to.php 30
ERROR - 2017-04-20 10:52:09 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\to.php 31
ERROR - 2017-04-20 10:52:09 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\to.php 31
ERROR - 2017-04-20 10:54:06 --> Severity: error --> Exception: Unable to locate the model you have specified: Messaging C:\xampp\htdocs\helpy\system\core\Loader.php 344
ERROR - 2017-04-20 10:55:32 --> Severity: error --> Exception: Unable to locate the model you have specified: Messaging C:\xampp\htdocs\helpy\system\core\Loader.php 344
ERROR - 2017-04-20 10:57:06 --> Query error: Column 'mes_messages' cannot be null - Invalid query: INSERT INTO `messages` (`mes_by`, `mes_to`, `mes_messages`) VALUES ('88', '85', NULL)
ERROR - 2017-04-20 10:57:20 --> Query error: Column 'mes_messages' cannot be null - Invalid query: INSERT INTO `messages` (`mes_by`, `mes_to`, `mes_messages`) VALUES ('88', '85', NULL)
ERROR - 2017-04-20 10:57:24 --> Query error: Column 'mes_messages' cannot be null - Invalid query: INSERT INTO `messages` (`mes_by`, `mes_to`, `mes_messages`) VALUES ('88', '85', NULL)
ERROR - 2017-04-20 10:58:21 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\to.php 29
ERROR - 2017-04-20 10:58:21 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\to.php 29
ERROR - 2017-04-20 10:58:21 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\to.php 30
ERROR - 2017-04-20 10:58:21 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\to.php 30
ERROR - 2017-04-20 10:58:21 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\to.php 30
ERROR - 2017-04-20 10:58:21 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\to.php 30
ERROR - 2017-04-20 10:58:21 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\to.php 31
ERROR - 2017-04-20 10:58:21 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\to.php 31
ERROR - 2017-04-20 10:59:22 --> Severity: Error --> Call to undefined method CI_DB_mysqli_result::get_result() C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:00:23 --> Severity: Error --> Call to a member function rows() on array C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:00:42 --> Severity: Error --> Call to a member function row_array() on array C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:00:57 --> Severity: Error --> Call to a member function rows() on array C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:01:16 --> Severity: Error --> Call to undefined method CI_DB_mysqli_result::rows() C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:03:31 --> Severity: Error --> Call to a member function arrays() on array C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:03:38 --> Severity: Error --> Call to a member function rows() on array C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:04:00 --> Severity: Error --> Call to a member function get_rows() on array C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:04:05 --> Severity: Error --> Call to a member function get() on array C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:04:23 --> Severity: Error --> Call to a member function row() on array C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:04:48 --> Severity: Error --> Call to a member function row_array() on array C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:05:36 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$result C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:05:36 --> Severity: Error --> Call to a member function array() on null C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:05:43 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$result C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:05:43 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:07:44 --> Query error: Column 'mes_by' cannot be null - Invalid query: INSERT INTO `messages` (`mes_by`, `mes_to`, `mes_messages`) VALUES (NULL, '85', 'message')
ERROR - 2017-04-20 11:07:53 --> Query error: Column 'mes_by' cannot be null - Invalid query: INSERT INTO `messages` (`mes_by`, `mes_to`, `mes_messages`) VALUES (NULL, '85', 'message')
ERROR - 2017-04-20 11:09:00 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$result C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:09:00 --> Severity: Error --> Call to a member function row_array() on null C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 22
ERROR - 2017-04-20 11:13:42 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\helpy\application\controllers\messages.php 53
ERROR - 2017-04-20 11:43:23 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 28
ERROR - 2017-04-20 11:43:24 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 28
ERROR - 2017-04-20 11:43:24 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 29
ERROR - 2017-04-20 11:43:24 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 29
ERROR - 2017-04-20 11:43:24 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 29
ERROR - 2017-04-20 11:43:24 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 29
ERROR - 2017-04-20 11:43:24 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 30
ERROR - 2017-04-20 11:43:24 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 30
ERROR - 2017-04-20 11:52:53 --> Severity: Notice --> Undefined variable: messages_to C:\xampp\htdocs\helpy\application\views\messages\index.php 9
ERROR - 2017-04-20 11:52:53 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:52:53 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:52:53 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:52:53 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:52:53 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:52:53 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:52:53 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:52:53 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:53:28 --> Severity: Notice --> Use of undefined constant messages_sent - assumed 'messages_sent' C:\xampp\htdocs\helpy\application\views\messages\index.php 9
ERROR - 2017-04-20 11:53:28 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:53:28 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:53:28 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:53:28 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:53:28 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:53:28 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:53:28 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:53:28 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:53:39 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:53:39 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:53:39 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:53:39 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:53:39 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:53:39 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:53:39 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:53:39 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:55:20 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:55:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:55:20 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:55:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:55:20 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:55:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:55:20 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:55:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:57:36 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:57:36 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:57:37 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:57:37 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:57:37 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:57:37 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:57:37 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:57:37 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:58:03 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:58:03 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:58:03 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:58:03 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:58:03 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:58:03 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:58:03 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:58:04 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:58:50 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:58:50 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:58:50 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:58:50 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:58:51 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:58:51 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:58:51 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:58:51 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:59:42 --> Severity: Notice --> Undefined variable: result C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 33
ERROR - 2017-04-20 11:59:42 --> Severity: Error --> Call to a member function num_rows() on null C:\xampp\htdocs\helpy\application\models\Messagingz_model.php 33
ERROR - 2017-04-20 11:59:59 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:59:59 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 11:59:59 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:59:59 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:59:59 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:59:59 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 11:59:59 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 11:59:59 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 12:00:06 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 12:00:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 12:00:06 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:07 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:07 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:07 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 12:00:07 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 12:00:32 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 12:00:32 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 12:00:32 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:32 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:32 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:32 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:32 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 12:00:32 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 12:00:37 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 12:00:37 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 12:00:37 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:38 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:38 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:38 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:38 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 12:00:38 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 12:00:46 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 12:00:46 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 33
ERROR - 2017-04-20 12:00:46 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:46 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:46 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:46 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 34
ERROR - 2017-04-20 12:00:46 --> Severity: Notice --> Undefined variable: profile C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 12:00:46 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\views\messages\index.php 35
ERROR - 2017-04-20 12:27:51 --> Query error: Column 'mes_messages' cannot be null - Invalid query: INSERT INTO `messages` (`mes_by`, `mes_to`, `mes_messages`) VALUES ('88', '', NULL)
ERROR - 2017-04-20 12:32:49 --> Severity: Parsing Error --> syntax error, unexpected '}', expecting ',' or ';' C:\xampp\htdocs\helpy\application\controllers\messages.php 60
ERROR - 2017-04-20 12:34:51 --> Severity: Parsing Error --> syntax error, unexpected '}' C:\xampp\htdocs\helpy\application\controllers\messages.php 18
ERROR - 2017-04-20 14:57:40 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\xampp\htdocs\helpy\system\database\drivers\mysqli\mysqli_driver.php 202
ERROR - 2017-04-20 14:57:40 --> Unable to connect to the database
ERROR - 2017-04-20 15:31:52 --> Severity: Parsing Error --> syntax error, unexpected ']' C:\xampp\htdocs\helpy\application\controllers\wallet.php 32
ERROR - 2017-04-20 15:31:59 --> Severity: Notice --> Undefined variable: messages C:\xampp\htdocs\helpy\application\controllers\wallet.php 32
ERROR - 2017-04-20 15:37:05 --> Severity: Parsing Error --> syntax error, unexpected '$resultz' (T_VARIABLE) C:\xampp\htdocs\helpy\application\models\Wallet_model.php 34
ERROR - 2017-04-20 15:39:59 --> Severity: Notice --> Undefined variable: resultz C:\xampp\htdocs\helpy\application\models\Wallet_model.php 44
ERROR - 2017-04-20 15:39:59 --> Severity: Error --> Call to a member function num_rows() on null C:\xampp\htdocs\helpy\application\models\Wallet_model.php 44
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wal_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 42
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wal_of C:\xampp\htdocs\helpy\application\views\wallet\index.php 43
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wal_currency C:\xampp\htdocs\helpy\application\views\wallet\index.php 44
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wallet_date C:\xampp\htdocs\helpy\application\views\wallet\index.php 45
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wal_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 42
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wal_of C:\xampp\htdocs\helpy\application\views\wallet\index.php 43
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wal_currency C:\xampp\htdocs\helpy\application\views\wallet\index.php 44
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wallet_date C:\xampp\htdocs\helpy\application\views\wallet\index.php 45
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wal_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 42
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wal_of C:\xampp\htdocs\helpy\application\views\wallet\index.php 43
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wal_currency C:\xampp\htdocs\helpy\application\views\wallet\index.php 44
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wallet_date C:\xampp\htdocs\helpy\application\views\wallet\index.php 45
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wal_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 42
ERROR - 2017-04-20 16:23:38 --> Severity: Notice --> Undefined index: wal_of C:\xampp\htdocs\helpy\application\views\wallet\index.php 43
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: wal_currency C:\xampp\htdocs\helpy\application\views\wallet\index.php 44
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: wallet_date C:\xampp\htdocs\helpy\application\views\wallet\index.php 45
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: wal_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 42
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: wal_of C:\xampp\htdocs\helpy\application\views\wallet\index.php 43
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: wal_currency C:\xampp\htdocs\helpy\application\views\wallet\index.php 44
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: wallet_date C:\xampp\htdocs\helpy\application\views\wallet\index.php 45
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:23:39 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:23:58 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:23:58 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:23:58 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:23:58 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:23:58 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:23:58 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:23:58 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:23:58 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:26:42 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:26:42 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:26:42 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:26:42 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:26:42 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:26:42 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:26:42 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:26:42 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:27:14 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:27:14 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:27:14 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:27:14 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:27:14 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:27:14 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:27:14 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:27:14 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:28:08 --> Query error: Unknown column 'wal.wal_by85' in 'where clause' - Invalid query: SELECT * FROM wallet as wal LEFT JOIN ea_users u on wal.wal_of = u.id WHERE wal.wal_by85
ERROR - 2017-04-20 16:28:41 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:28:41 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:28:41 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:28:41 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:28:41 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:28:41 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:28:41 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:28:41 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:29:06 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:29:06 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:29:06 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:29:06 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:29:06 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:29:06 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:29:06 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:29:06 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:30:37 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:30:37 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:30:38 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:30:38 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:30:38 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:30:38 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:30:38 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:30:38 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:31:25 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:31:25 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:31:25 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:31:25 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:31:25 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 82
ERROR - 2017-04-20 16:31:25 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 83
ERROR - 2017-04-20 16:31:25 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 84
ERROR - 2017-04-20 16:31:25 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:38:08 --> Severity: Parsing Error --> syntax error, unexpected ';' C:\xampp\htdocs\helpy\application\models\Wallet_model.php 45
ERROR - 2017-04-20 16:38:27 --> Severity: Error --> Call to undefined method Wallet_model::sent() C:\xampp\htdocs\helpy\application\controllers\wallet.php 36
ERROR - 2017-04-20 16:39:46 --> Severity: Notice --> Use of undefined constant cur_rec - assumed 'cur_rec' C:\xampp\htdocs\helpy\application\views\wallet\index.php 22
ERROR - 2017-04-20 16:39:46 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:39:46 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:39:46 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:39:46 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:39:46 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:39:46 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:39:46 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:39:46 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:41:09 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:41:10 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:41:10 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:41:10 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:41:10 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 85
ERROR - 2017-04-20 16:41:10 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:41:10 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:41:10 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:43:19 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:43:19 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:43:19 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:43:19 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 89
ERROR - 2017-04-20 16:43:19 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:43:20 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:43:20 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:43:20 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 89
ERROR - 2017-04-20 16:44:00 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:44:00 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:44:00 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:44:00 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 89
ERROR - 2017-04-20 16:44:00 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:44:00 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:44:00 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:44:00 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 89
ERROR - 2017-04-20 16:44:07 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:44:07 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:44:08 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:44:08 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 89
ERROR - 2017-04-20 16:44:08 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:44:08 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:44:08 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:44:08 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 89
ERROR - 2017-04-20 16:45:28 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:45:28 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:45:28 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:45:28 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 89
ERROR - 2017-04-20 16:45:28 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:45:28 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:45:28 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:45:28 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 89
ERROR - 2017-04-20 16:46:17 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:46:17 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:46:17 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:46:17 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 89
ERROR - 2017-04-20 16:46:17 --> Severity: Notice --> Undefined index: mes_id C:\xampp\htdocs\helpy\application\views\wallet\index.php 86
ERROR - 2017-04-20 16:46:17 --> Severity: Notice --> Undefined index: mes_to C:\xampp\htdocs\helpy\application\views\wallet\index.php 87
ERROR - 2017-04-20 16:46:17 --> Severity: Notice --> Undefined index: mes_messages C:\xampp\htdocs\helpy\application\views\wallet\index.php 88
ERROR - 2017-04-20 16:46:17 --> Severity: Notice --> Undefined index: mes_created_at C:\xampp\htdocs\helpy\application\views\wallet\index.php 89
ERROR - 2017-04-20 17:28:06 --> Severity: Notice --> Undefined variable: cur_rec_total C:\xampp\htdocs\helpy\application\controllers\wallet.php 61
ERROR - 2017-04-20 17:28:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\controllers\wallet.php 61
ERROR - 2017-04-20 17:28:06 --> Severity: Notice --> Undefined variable: cur C:\xampp\htdocs\helpy\application\controllers\wallet.php 61
ERROR - 2017-04-20 17:28:06 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\controllers\wallet.php 61
ERROR - 2017-04-20 17:28:18 --> Severity: Notice --> Undefined variable: cur_rec_total C:\xampp\htdocs\helpy\application\controllers\wallet.php 61
ERROR - 2017-04-20 17:28:18 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\controllers\wallet.php 61
ERROR - 2017-04-20 17:28:18 --> Severity: Notice --> Undefined variable: cur C:\xampp\htdocs\helpy\application\controllers\wallet.php 61
ERROR - 2017-04-20 17:28:18 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\controllers\wallet.php 61
ERROR - 2017-04-20 17:29:23 --> Severity: Notice --> Undefined variable: cur_rec_total C:\xampp\htdocs\helpy\application\controllers\wallet.php 61
ERROR - 2017-04-20 17:29:23 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\controllers\wallet.php 61
ERROR - 2017-04-20 17:29:23 --> Severity: Notice --> Undefined variable: cur C:\xampp\htdocs\helpy\application\controllers\wallet.php 61
ERROR - 2017-04-20 17:29:23 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\helpy\application\controllers\wallet.php 61
