<?php
class ValidException extends Exception{

}

class CheckException extends Exception{
    public function __toString(){
        return $this->getFile() . $this->getLine();
    }
}

try{
    throw new CheckException('valid exception');
}catch(ValidException $e){
    echo '111';
}catch(CheckException $e){
    echo $e;
}catch(Exception $e){
    echo '333';
}finally{
    echo '444';
}