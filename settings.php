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
 * pagamentoseguro enrolments plugin settings and presets.
 *
 * @package    enrol_pagamentoseguro
 * @copyright  2020 Daniel Neis Araujo <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_heading('enrol_pagamentoseguro_settings',
        '', get_string('pluginname_desc', 'enrol_pagamentoseguro')));

    $settings->add(new admin_setting_configcheckbox('enrol_pagamentoseguro/usesandbox',
        get_string('usesandbox', 'enrol_pagamentoseguro'), get_string('usesandboxdesc', 'enrol_pagamentoseguro'), 0));

    $settings->add(new admin_setting_configtext('enrol_pagamentoseguro/pagamentosegurobusiness',
        get_string('businessemail', 'enrol_pagamentoseguro'), get_string('businessemail_desc', 'enrol_pagamentoseguro'), '', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('enrol_pagamentoseguro/pagamentosegurotoken',
        get_string('businesstoken', 'enrol_pagamentoseguro'), get_string('businesstoken_desc', 'enrol_pagamentoseguro'), '', PARAM_RAW));

    $settings->add(new admin_setting_configcheckbox('enrol_pagamentoseguro/mailstudents',
        get_string('mailstudents', 'enrol_pagamentoseguro'), '', 0));

    $settings->add(new admin_setting_configcheckbox('enrol_pagamentoseguro/mailteachers',
        get_string('mailteachers', 'enrol_pagamentoseguro'), '', 0));

    $settings->add(new admin_setting_configcheckbox('enrol_pagamentoseguro/mailadmins',
        get_string('mailadmins', 'enrol_pagamentoseguro'), '', 0));

    $settings->add(new admin_setting_configcheckbox(
        'enrol_pagamentoseguro/mailfromsupport',
        get_string('mailfromsupport', 'enrol_pagamentoseguro'),
        get_string('mailfromsupport_desc', 'enrol_pagamentoseguro'),
        0));

    $settings->add(new admin_setting_configcheckbox('enrol_pagamentoseguro/automaticenrolboleto',
        get_string('automaticenrolboleto', 'enrol_pagamentoseguro'),
        get_string('automaticenrolboleto_desc', 'enrol_pagamentoseguro'),
        0));

    $settings->add(new admin_setting_heading('enrol_pagamentoseguro_defaults',
        get_string('enrolinstancedefaults', 'admin'), get_string('enrolinstancedefaults_desc', 'admin')));

    $options = array(ENROL_INSTANCE_ENABLED  => get_string('yes'),
                     ENROL_INSTANCE_DISABLED => get_string('no'));
    $settings->add(new admin_setting_configselect('enrol_pagamentoseguro/status',
        get_string('status', 'enrol_pagamentoseguro'), get_string('status_desc', 'enrol_pagamentoseguro'), ENROL_INSTANCE_DISABLED, $options));

    $settings->add(new admin_setting_configtext('enrol_pagamentoseguro/cost',
        get_string('cost', 'enrol_pagamentoseguro'), '', 0, PARAM_FLOAT, 4));

    $settings->add(new admin_setting_configtext('enrol_pagamentoseguro/currency',
        get_string('currency', 'enrol_pagamentoseguro'), get_string('currency_desc', 'enrol_pagamentoseguro'), 'BRL', PARAM_RAW));

    if (!during_initial_install()) {
        $options = get_default_enrol_roles(context_system::instance());
        $student = get_archetype_roles('student');
        $student = reset($student);
        $settings->add(new admin_setting_configselect('enrol_pagamentoseguro/roleid',
            get_string('defaultrole', 'enrol_pagamentoseguro'), get_string('defaultrole_desc', 'enrol_pagamentoseguro'),
            $student->id, $options));
    }

    $settings->add(new admin_setting_configtext('enrol_pagamentoseguro/enrolperiod',
        get_string('enrolperiod', 'enrol_pagamentoseguro'), get_string('enrolperiod_desc', 'enrol_pagamentoseguro'), 0, PARAM_INT));
}
