<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_pagamentoseguro', language 'en'.
 *
 * @package    enrol_pagamentoseguro
 * @copyright  2020 Daniel Neis Araujo <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['assignrole'] = 'Assign role';
$string['automaticenrolboleto'] = 'PagamentoSeguro Automatic enrol bill';
$string['automaticenrolboleto_desc'] = 'Automatic enrol by payment of bill';
$string['businessemail'] = 'PagSeguro business email';
$string['businessemail_desc'] = 'The email address of your business PagSeguro account';
$string['businesstoken'] = 'PagSeguro business token';
$string['businesstoken_desc'] = 'The token of your business PagSeguro account';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrolment.';
$string['currency'] = 'Currency';
$string['currency_desc'] = 'Brazil currency : Brazilian Real';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during PagamentoSeguro enrolments';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid (in seconds). If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['error:unauthorized'] = 'This host is not authorized to use PagamentoSeguro API.';
$string['mailadmins'] = 'Notify admin';
$string['mailfromsupport'] = 'Send emails from support';
$string['mailfromsupport_desc'] = 'If checked, the support email will be used as sender, otherwise the teacher\'s email will be used.';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['messageprovider:pagamentoseguro_enrolment'] = 'PagamentoSeguro enrolment messages';
$string['needsignuporlogin'] = 'You need to sign up or log in before make a payment.';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['pagamentoseguro:config'] = 'Configure PagamentoSeguro enrol instances';
$string['pagamentoseguro:manage'] = 'Manage enrolled users';
$string['pagamentoseguro:unenrol'] = 'Unenrol users from course';
$string['pagamentoseguro:unenrolself'] = 'Unenrol self from the course';
$string['pagamentoseguroaccepted'] = 'PagamentoSeguro payments accepted';
$string['paymentrequired'] = 'You must make a payment of {$a->currency} {$a->cost} via PagamentoSeguro to access this course.';
$string['pluginname'] = 'PagamentoSeguro';
$string['pluginname_desc'] = 'The PagamentoSeguro module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['sendpaymentbutton'] = 'Send payment via PagamentoSeguro';
$string['status'] = 'Allow PagamentoSeguro enrolments';
$string['status_desc'] = 'Allow users to use PagamentoSeguro to enrol into a course by default.';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
$string['usesandbox'] = 'Use sandbox';
$string['usesandboxdesc'] = 'Check this if you want to use a sandbox account (requests will be sent to sandbox.pagamentoseguro.uol.com.br test site instead of the production site)';
