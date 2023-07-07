<?php

require_once 'DBConnect.php';

class App
{
    public static function PDO(): PDO
    {
        return DBConnect::getConnection();
    }

    public static function getTable(): void
    {
        $dbname = self::getDbname() . self::getTables();
        $get = self::multiImplode($_GET);
        $post = self::multiImplode($_POST);
        $files = self::multiImplode($_FILES);
        echo "
        <table style='margin: 0; padding: 0; width: 100%;'>
            <tr style='background: lightgray'>
                <th style='background: deepskyblue; width: 10%;'>database</th>
                <th style='background: lawngreen; width: 30%'>_GET</th>
                <th style='background: orange; width: 30%'>_POST</th>
                <th style='background: mediumpurple; width: 30%'>_FILES</th>
            </tr>
            <tr style='background: aliceblue; vertical-align: top;'>
                <td><pre>$dbname</pre></td>
                <td><pre>$get</pre></td>
                <td><pre>$post</pre></td>
                <td><pre>$files</pre></td>
            </tr>
        </table>
        <hr>
        ";
    }

    private static function getDbname(): string
    {
        try {
            return self::PDO()->query("SELECT DATABASE();")
                    ->fetch()["DATABASE()"] . "\n [";
        } catch (PDOException $exception) {
            return '';
        }
    }

    private static function getTables(): string
    {
        $tables = self::PDO()->query("SHOW TABLES;");
        $tableNames = [];
        foreach ($tables->fetchAll() as $table) {
            foreach ($table as $item) {
                $tableNames[] = $item;
            }
        }
        return implode("\n  ", $tableNames) . ']';
    }

    public static function showArray(array $array): void
    {
        echo '<pre>' . self::multiImplode($array) . '</pre>';
    }

    private static function multiImplode(array $array, $name = '', int $i = 0): string
    {
        $arrResult = [];
        foreach ($array as $key => $value) {
            $arrResult[] = is_array($value) ?
                self::multiImplode($value, $key, $i + 1) :
                str_repeat("  ", $i + 1) . "[$key] => '$value'";
        }
        return str_repeat("  ", $i) .
            "[$name] => (\n" . implode("\n", $arrResult) . "\n" .
            str_repeat("  ", $i) . ")";
    }

    public static function d($value): void
    {
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
    }
}