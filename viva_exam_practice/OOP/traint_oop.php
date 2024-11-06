<?php


trait Logger { 
    public function log($message){ 
        echo $message;
    }
}

trait logger2 { 
    public function log1($message2){ 
        echo $message2;
    }
}

trait loger3 { 
    public function log2($message3){ 
        echo $message3;
    }
}

class post { 
    use Logger,logger2,loger3;

    public function store1(){ 
         $this->log('Post Created no 1').'<br>';
         $this->log1('Post Created no 2').'<br>';
         $this->log2('Post Created no 3');
    }
}

class Comments { 
    use loger3;
    public function comments(){ 
        $this->log2('Comments Is Created');
    }
}

$posts = new post();
$posts->store1();

echo "<br>";

$comments = new Comments();
$comments->comments();