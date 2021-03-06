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
 * @package tool_matt
 * @copyright 2018 Mathew May {@link http://mathew.solutions}
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

function tool_matt_extend_navigation_course($navigation, $course, $context) {
    require_capability('tool/matt:view', $context);

    $feedback = $navigation->add(get_string('pluginname', 'tool_matt'));
    $url = new moodle_url('/admin/tool/matt/index.php', array('courseid' => $course->id));
    $feedback->add(get_string('view', 'core'), $url,
        navigation_node::TYPE_SETTING, null, null, new pix_icon('i/report', ''));
}