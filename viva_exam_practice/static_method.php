<?php


class User{ 
    public static function UserName (){ 
        return "Tuhin Ahmed";
    }

    public static function UserAge(){ 
        return 39 . self::UserName();
    }
}

echo User::UserAge();