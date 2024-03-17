<?php
class Student{
   private $id;
   private $name;
   private $coure;
   private $phone; 

   private static $file_path="data2.text";

   function __construct($_id,$_name,$_coure,$_phone){
         $this->id=$_id;
         $this->name=$_name;
         $this->coure=$_coure;
         $this->phone=$_phone;

   }

        public function csv(){
            return $this->id.",".$this->name.",". $this->coure.",".$this->phone.PHP_EOL;
        }


            public function save(){
                $students=file(self::$file_path);

                file_put_contents(self::$file_path,$this->csv(),FILE_APPEND);
            }


   public static function display_students(){
      $students=file(self::$file_path);

      echo "<b> ID (Identity) |   Name     |    COURSE   |    PHONE      </b> <br/>";
      foreach ($students as $student1) {
        list($id,$name,$coure,$phone)=explode(",",trim($student1));
        echo "$id | $name  | $coure | $phone <br/>";
      }
   }

}


?>