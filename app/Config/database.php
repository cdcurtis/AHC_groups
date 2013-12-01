<?php
/**
 * This is core configuration file.
 *
 * Use it to configure core behaviour ofCake.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * In this file you set up your database connection details.
 *
 * @package       cake
 * @subpackage    cake.config
 */
/**
 * Database configuration class.
 * You can specify multiple configurations for production, development and testing.
 *
 * driver => The name of a supported driver; valid options are as follows:
 *		mysql 		- MySQL 4 & 5,
 *		mysqli 		- MySQL 4 & 5 Improved Interface (PHP5 only),
 *		sqlite		- SQLite (PHP5 only),
 *		postgres	- PostgreSQL 7 and higher,
 *		mssql		- Microsoft SQL Server 2000 and higher,
 *		db2			- IBM DB2, Cloudscape, and Apache Derby (http://php.net/ibm-db2)
 *		oracle		- Oracle 8 and higher
 *		firebird	- Firebird/Interbase
 *		sybase		- Sybase ASE
 *		adodb-[drivername]	- ADOdb interface wrapper (see below),
 *		odbc		- ODBC DBO driver
 *
 * You can add custom database drivers (or override existing drivers) by adding the
 * appropriate file to app/models/datasources/dbo.  Drivers should be named 'dbo_x.php',
 * where 'x' is the name of the database.
 *
 * persistent => true / false
 * Determines whether or not the database should use a persistent connection
 *
 * connect =>
 * ADOdb set the connect to one of these
 *	(http://phplens.com/adodb/supported.databases.html) and
 *	append it '|p' for persistent connection. (mssql|p for example, or just mssql for not persistent)
 * For all other databases, this setting is deprecated.
 *
 * host =>
 * the host you connect to the database.  To add a socket or port number, use 'port' => #
 *
 * prefix =>
 * Uses the given prefix for all the tables in this database.  This setting can be overridden
 * on a per-table basis with the Model::$tablePrefix property.
 *
 * schema =>
 * For Postgres and DB2, specifies which schema you would like to use the tables in. Postgres defaults to
 * 'public', DB2 defaults to empty.
 *
 * encoding =>
 * For MySQL, MySQLi, Postgres and DB2, specifies the character encoding to use when connecting to the
 * database.  Uses database default.
 *
 */

class DATABASE_CONFIG {
	
	#localhost
	var $local = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
        'port' => '/Applications/MAMP/tmp/mysql/mysql.sock',
		'login' => 'root',
		'password' => 'root',
		'database' => 'ahc_groups_db',
		'prefix' => '',
		);

	#dev server
	var $dev = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'internal-db.s97954.gridserver.com',
		'login' => 'db97954_site',
		'password' => 'qIu9CX.[@x_W',
		'database' => 'db97954_ahc_groups_db',
		'prefix' => '',
		);

	#live server
	var $live = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'internal-db.s97954.gridserver.com',
		'login' => 'db97954_site',
		'password' => 'qIu9CX.[@x_W',
		'database' => 'db97954_ahc_groups_db',
		'prefix' => '',
		);

	#switch between configs
	var $default = array();
	var $test = array();
	function __construct() {

		#wildcard the subdomains
		$host_r = explode('.', $_SERVER['SERVER_NAME']);
		if(count($host_r)>2) while(count($host_r)>2)array_shift($host_r);
		$mainhost = implode('.', $host_r);

		#switch between servers
		switch(strtolower($mainhost)) {
			case 'localhost':
				$this->default = $this->local;
				break;
			case 'almaheights.org/dev':
				$this->default = $this->dev;
				break;
			case 'almaheights.org':
				$this->default = $this->live;
				break;
			default:
				$this->default = $this->local;
		}
	}

	#php 4 compatibility
	function DATABASE_CONFIG() {
		$this->__construct();
	}
}
