<?php

class conexionBD{

    public function cBD(){

        $bd = new PDO("mysql:host=localhost;bdname=universidad", "root", "");

        $bd -> exec("set names uft8");

        return $bd;

    }

}

?> 