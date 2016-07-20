<?php
// This file is part of CodeRunner - http://coderunner.org.nz/
//
// CodeRunner is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// CodeRunner is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with CodeRunner.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Set-up config variables for running tests.
 *
 * @package    qtype
 * @subpackage coderunner
 * @copyright  2013 Richard Lobb, University of Canterbury
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

set_config('ideonesandbox_enabled', 0, 'qtype_coderunner');
set_config('jobesandbox_enabled', 1, 'qtype_coderunner');
set_config('jobe_host', 'localhost', 'qtype_coderunner');
set_config('jobe_apikey', '2AAA7A5415B4A9B394B54BF1D2E9D', 'qtype_coderunner');
set_config('ideone_user', 'coderunner', 'qtype_coderunner');
set_config('ideone_password', 'moodlequizzes', 'qtype_coderunner');
