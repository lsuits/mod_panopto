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
 * mod_panopto data generator.
 *
 * @package    mod_panopto
 * @category   test
 * @copyright  2013 Marina Glancy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * mod_panopto data generator class.
 *
 * @package    mod_panopto
 * @category   test
 * @copyright  2013 Marina Glancy
 * @copyright  2015 Robert Russo and Louisiana State University {@link http://www.lsu.edu}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_panopto_generator extends testing_module_generator {

    public function create_instance($record = null, array $options = null) {
        global $CFG;
        require_once($CFG->libdir.'/resourcelib.php');

        // Add default values for panopto.
        $record = (array)$record + array(
            'display' => RESOURCELIB_DISPLAY_AUTO,
            'externalpanopto' => 'http://moodle.org/',
        );

        return parent::create_instance($record, (array)$options);
    }
}
