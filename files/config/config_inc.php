<?php
# Mantis - a php based bugtracking system

# Copyright (C) 2000 - 2002  Kenzaburo Ito - kenito@300baud.org
# Copyright (C) 2002 - 2007  Mantis Team   - mantisbt-dev@lists.sourceforge.net

# Mantis is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# Mantis is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with Mantis.  If not, see <http://www.gnu.org/licenses/>.

	# --------------------------------------------------------
	# $Id: config_inc.php.sample,v 1.19.2.2 2007-10-25 17:13:42 giallu Exp $
	# --------------------------------------------------------

	# This sample file contains the essential files that you MUST
	# configure to your specific settings.  You may override settings
	# from config_defaults_inc.php by assigning new values in this file

	# Rename this file to config_inc.php after configuration.

	###########################################################################
	# CONFIGURATION VARIABLES
	###########################################################################

	# In general the value OFF means the feature is disabled and ON means the
	# feature is enabled.  Any other cases will have an explanation.

	# Look in http://www.mantisbt.org/manual or config_defaults_inc.php for more
	# detailed comments.

	# --- database variables ---------
	include(dirname( dirname(__FILE__) ) . '/../springpw.php');


	# set these values to match your setup
	$g_hostname      = $spring_dbhost;
	$g_db_username   = $spring_dbuser;
	$g_db_password   = $spring_dbpass;
	$g_database_name = $spring_dbname_mantis;
	$g_db_type       = "mysqli";
	$g_crypto_master_salt = $mantisbtcryptsalt;

	# --- email variables -------------
	$g_webmaster_email      = 'no-reply@springrts.com';

	# the "From: " field in emails
	$g_from_email           = 'no-reply@springrts.com';

	# the return address for bounced mail
	$g_return_path_email    = 'no-reply@springrts.com';

	# --- file upload settings --------
	# This is the master setting to disable *all* file uploading functionality
	#
	# The default value is ON but you must make sure file uploading is enabled
	#  in PHP as well.  You may need to add "file_uploads = TRUE" to your php.ini.
	$g_allow_file_upload	= ON;
        $g_file_upload_method   = DISK;
	$g_absolute_path_default_upload_folder = realpath(dirname(__FILE__).'/../').'/uploads/';

	$g_notify_new_user_created_threshold_min = NOBODY;

	$g_allow_anonymous_login      = ON;
	$g_anonymous_account          = 'Anonymous';

	# Standard Column Names (i.e. names to choose from):
	# selection, edit, id, project_id, reporter_id, handler_id, priority, reproducibility, projection, eta,
	# resolution, fixed_in_version, view_state, os, os_build, platform, version, date_submitted, attachment,
	# category, sponsorship_total, severity, status, last_updated, summary, bugnotes_count
	$g_view_issues_page_columns = array ( 'selection', 'edit', 'priority', 'id', 'sponsorship_total', 'bugnotes_count', 'attachment', 'category','version', 'severity', 'status', 'last_updated', 'summary' );
	# disable profiles (platform selection) in reports
	$g_enable_profiles = OFF;
	# enable (deprecated) news
	$g_news_enabled = ON;
	$g_max_file_size = 2000000;
	$g_default_timezone = "Europe/Berlin";
