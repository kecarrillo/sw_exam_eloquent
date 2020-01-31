<?php

namespace App;

use Illuminate\Database\Connection;
use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    public function getManager() :Capsule
    {
        $parameters = $this->getParameters();

         return $this->makeCapsule($parameters);
    }

    public function initConnexion() :Connection
    {
        $capsule = $this->getManager();

        return $capsule->getConnection('default');
    }

    protected function getParameters() :array
    {
        return [
            'driver'    => 'mysql',
            'host'      => 'localhost',
<<<<<<< HEAD
            'database'  => 'starwars',
=======
            'database'  => 'sw_exam',
>>>>>>> a7c1c7fad686e447722c5deaf7cf5ff16cf06a93
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'port'      => '3306'
        ];
    }

    protected function makeCapsule(array $parameters) :Capsule
    {
        $capsule = new Capsule;

        $capsule->addConnection($parameters);

        $capsule->setAsGlobal();

        $capsule->bootEloquent();

        return $capsule;
    }
}
