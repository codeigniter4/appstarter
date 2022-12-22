<?php

namespace Config;

use Illuminate\Database\Capsule\Manager as Capsule;

class Eloquent
{
    protected $driver;

    public function __construct()
    {
        $capsule = new Capsule();
        $db      = config('Database');

        // DBDriver
        switch ($db->default['DBDriver']) {
            case 'MySQLi':
                $this->driver = 'mysql';
                break;

            case 'Postgre':
                $this->driver = 'pgsql';
                break;

            case 'SQLite3':
                $this->driver = 'sqlite';
                break;

            case 'SQLSRV':
                $this->driver = 'sqlsrv';
                break;

            default:
                $this->driver = 'mysql';
                break;
        }

        $capsule->addConnection([
            'driver'    => $this->driver,
            'host'      => $db->default['hostname'],
            'database'  => $db->default['database'],
            'username'  => $db->default['username'],
            'password'  => $db->default['password'],
            'charset'   => $db->default['charset'],
            'collation' => $db->default['DBCollat'],
            'prefix'    => $db->default['DBPrefix'],
            'port'      => $db->default['port'],
        ]);

        $capsule->setAsGlobal();

        $capsule->bootEloquent();
    }
}
