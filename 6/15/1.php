<?php
trait Log{
    public function save(){
        return __METHOD__;
    }
}

trait Comment{
    public function save(){
        return __METHOD__;
    }
}

class Topic{
    use Log,Comment{
        Log::save insteadOf Comment;
        Comment::save as send;
    }
}

// class Demo extends Topic{

// }

$topic = new Topic;
echo $topic->save();
echo $topic->send();

// echo (new Demo)->save();