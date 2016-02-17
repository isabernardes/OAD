<?php
//Setup File:


#Database Connection Here...
$dbc = mysqli_connect('localhost', 'root', '', 'archaeological_database') OR die ('Could not connect because: '.mysqli_connect_error());


$site_title = 'Open Archaeological Database';
$page_title = 'Homepage';



#Homepage Grabung query
$q = "SELECT id, nummer, fundort FROM archaeological_database.grabung ORDER BY id DESC " ;
$r = mysqli_query($dbc, $q);
$excavation = mysqli_fetch_assoc($r);


$id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} ;

#Context Search query

$q1 = "SELECT * FROM archaeological_database.grabung WHERE id = '$id' " ;
$r1 = mysqli_query ($dbc, $q1);
$excavation1 = mysqli_fetch_assoc($r1);

#if (!$q1) {
#        echo 'MySQL Error: ' . mysqli_error();
#        exit;
#    }
uhiugiguyg

?>