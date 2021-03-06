<?php

    /**
     * @var $config ObjectivePHP\Config\Config
     */

    $dbConfig = $config->doctrine->em->default->db;

    $dbConfig->driver        = 'pdo_mysql';
    $dbConfig->host          = '127.0.0.1';
    $dbConfig->port          = 3306;
    $dbConfig->user          = 'demo';
    $dbConfig->password      = '';
    $dbConfig->dbname          = 'employees';
    $dbConfig->mapping_types = ['enum' => 'string'];

    $config->doctrine->debug = true;