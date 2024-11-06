<?php


class User{ 
    public static function UserName (){ 
        return "Tuhin Ahmed";
    }

    public static function UserAge(){ 
        return 39 . self::UserName();
    }
}

class Post { 
    public static function postCreate(){ 
        return "This is Child Class" . User::UserAge();
    }
}

echo Post::postCreate();