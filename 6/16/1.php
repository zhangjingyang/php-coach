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
        Log::save as protected;
        Comment::save as protected send;
    }
}

$topic = new Topic;
echo $topic->save();
echo $topic->send();