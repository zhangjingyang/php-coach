<?php
trait Log{
    public function log(){
        return __METHOD__;
    }
}

trait Comment{
    public function total(){
        return __METHOD__;
    }
}

class Topic{
    use Log,Comment;
}

$topic = new Topic;
echo $topic->log();