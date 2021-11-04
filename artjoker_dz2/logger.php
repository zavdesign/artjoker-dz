<?php

class Logger {

    private static $instance;

    public static $fileUrl = __DIR__  . '/log.txt';
    public static $date = 'Y-m-d H:i:s';

    public static $level = ['TRACE', 'DEBUG', 'INFO', 'WARN', 'ERROR', 'FATAL'];

    private function __construct(){};
    private function __clone(){};

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new static;
        }
        return self::$instance;
    }

    private function checkLevel($level, $type) {
        if (in_array($type, $level)) {
            return true;
        } else {
            return false;
        }
    }

    private function write($level, $message, $file, $line) {
        $log = date(self::$dateFormat) . ' [' . $level . '] "' . $message . ' -> ' . $file . ' -> ' . $line . ';';
        file_put_contents(self::$fileUrl, $log . PHP_EOL, FILE_APPEND);
    }

    public function debug($message, $file, $line) {
        $type = 'debug';
        if (self::checkLevel(self::$level, $type)) {
            self::write('DEBUG', $message, $file, $line);
        }
    }
    public function info($message, $file, $line) {
        $type = 'info';
        if (self::checkLevel(self::$level, $type)) {
            self::write('INFO', $message, $file, $line);
        }
    }
    public function warning($message, $file, $line) {
        $type = 'warning';
        if (self::checkLevel(self::$level, $type)) {
            self::write('WARNING', $message, $file, $line);
        }
    }
    public function error($message, $level, $line) {
        $type = 'error';
        if (self::checkLevel(self::$mode, $type)) {
            self::write('ERROR', $message, $file, $line);
        }
    }

    private function __wakeup(){

    };

    private  function __sleep(){

    };


}