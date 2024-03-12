<?php  

class Information{ 
    private $id;
    private $name;
    private $address;

    public static $file_name = "data.txt";

    public function __construct($_id,$_name,$_address){ 
        $this->id=$_id;
        $this->name=$_name;
        $this->address=$_address;
    }

    public function display(){ 
        return $this->id.",".$this->name.",".$this->address.PHP_EOL;
    }

    public function show(){ 
        $store = file(self::$file_name);
        file_put_contents(self::$file_name,$this->display(),FILE_APPEND);
    }

    public static function show_info(){ 
        $store = file(self::$file_name);
        echo "<b>ID | NAME | ADDRESS<b><br>";

        foreach($store as $put){ 
            list($id,$name,$address)=explode(",",trim($put));
            echo "$id,$name,$address";
        }
    }
}

?>