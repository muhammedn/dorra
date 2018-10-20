<?php
/*
     * title function that print the page title
     * if page has the variable $pagetitle and print default title for other pages
     */

    function gettitle ()
    {
        global $pagetitle;

        if (isset($pagetitle)) {
            echo $pagetitle;
        } else {
            echo '404 Not found';
        }
    }

     function getHigh($table ,$where , $value){
        global $con;

    $getHigh = $con->prepare("SELECT * FROM $table  WHERE $where = ?   ");
    $getHigh->execute(array($value));
    $High = $getHigh->fetchAll();

    return $High;
}
    /*
     * get records  from database
     */
    function getReco($table){
        global $con;

        $getReco = $con->prepare("SELECT * FROM $table ");
        $getReco->execute();
        $infos = $getReco->fetchAll();

        return $infos;
    }
