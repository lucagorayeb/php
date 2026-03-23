<?php

trait Logger{
    public function log($message){
        echo "\n[LOG]: ".$message."\n";
        echo "Datetime: ".date('Y-m')."\n";
    }
}
?>
