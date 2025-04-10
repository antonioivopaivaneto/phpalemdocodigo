<?php

use App\DesignPattern\Structural\Bridge\DatabaseBridge;
use App\DesignPattern\Structural\Bridge\MySqlDriver;
use App\DesignPattern\Structural\Bridge\SecureDatabaseBridge;
use App\DesignPattern\Structural\Bridge\SqliteDriver;
use Dom\Mysql;
use PHPUnit\Framework\TestCase;

final class DatabseBridgeTest extends TestCase
{


    public function testCanExecuteMysqlQuery():void
    {
        $mySqlDriver = new MySqlDriver();
        $databaseBridge = new DatabaseBridge($mySqlDriver);

        $result = $databaseBridge->executeQuery('SELECT * FROM users');

        $this->assertEquals(['MySql Result 1', 'MySql Result 2'], $result);
    }

    public function testCanExecuteSqliteQuery():void
    {
        $sqliteDriver = new SqliteDriver();
        $databaseBridge = new DatabaseBridge($sqliteDriver);

        $result = $databaseBridge->executeQuery('SELECT * FROM users');

        $this->assertEquals(['SQLite Result 1', 'SQLite Result 2'], $result);
    }

    public function testCanExecuteSecureMySqlQuery():void
    {
        $mySqlDriver = new MySqlDriver();
        $secureDatabaseBridge = new SecureDatabaseBridge($mySqlDriver);

        $result = $secureDatabaseBridge->executeSecureQuery('SELECT * FROM users', 'password123');
        $this->assertEquals(['MySql Result 1', 'MySql Result 2'], $result);
    }
}