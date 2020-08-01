<?php
// if there is no constant defined called __CONFIG__. do not load this file
if(!defined('__CONFIG__')){
  exit('You do not have config file');
}
class DB {
    protected static $con;
    private function __construct(){
        try{
            self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_course', 'root', 'root' );
      			self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      			//self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//uncomment on production sites
      			self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
      			//self::$con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  		 } catch (PDOException $e) {
  			   echo "Could not connect to database."; exit;
        }
      }
    public static function getConnection() {
        //if this instance was not been started, start it.
        if(!self::$con){
           new DB();
        }
        //return the writeeable db connection
        return self::$con;
    }
  }
 ?>
