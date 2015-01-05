# SybaseDB 0.1b #

Creates a PDO connection to MSSql server through Sybase dblib as a plugin for CakePHP 2.x

### Background ###

To many people on the Internet were looking for a simple way to connect to a MSSQL db from a linux installed cakePHP app.  I was one
of them so after hours of research the birth of this plugin was planned.  A few hours later it was completed.

### Prerequisites? ###

* php5-sybase package installed on your linux system (apt-get install php5-sybase)
* enable php Sybase module in php.ini file (extension=pdo_dblib.so)
* CakePHP 2.x app installed and baked on your server

### How to use the plugin ###

Download the package zipball/tarball and unzip to the `app/Plugin` folder.

Rename the folder you copied in to `SybaseDB` 

Enable the Plugin in your `app/Config/bootstrap.php` file:

    <?php
    CakePlugin::load('SybaseDB');

    
If you are already using `CakePlugin::loadAll();`, then this step is not necessary.

Configure a database connection in `app/Config/database.php` file:

    <?php
    class DATABASE_CONFIG {

	    public $default = array(
		    'datasource' => 'SybaseDB.Sybase',
            'host' => 'someplace\SQLEXPRESS',
            'login' => 'somelogin',
            'password' => 'Ur_P4ssw0rd#',
            'database' => 'some_database',
        );

    }


You could also use another connection instead of `$default` and then specifying `$useDbConfig` in your model.

From here you can now access the data the normal cakePHP way:

    <?php
        $this->Model->find('first');

        

### Credit where it is due ###

Some of the code used was taken from the CakePHP SQLServer DBO for Microsoft Windows and altered to fit the PDO DBlib
