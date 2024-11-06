<?php


class User{ 

    public static $name = "Babu";
    public static function UserName (){ 
        return "Tuhin Ahmed";
    }

    public static function UserAge(){ 
        return 39 . " ".self::UserName().self::$name;
    }
}

class Post extends User{ 
    public static function postCreate(){ 
        return "This is Child Class" . User::UserAge();
    }
}

echo Post::postCreate();
 
