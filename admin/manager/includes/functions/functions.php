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
            echo 'Default';
        }
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

      

      $stmt = $con->prepare("SELECT posts.*, services.name AS services_name  FROM posts
        INNER JOIN services
        ON
        services.serid = posts.ser_id

         WHERE postid = ?");
