<?php
$doc = array(
    "name" => "MongoDB",
    "type" => "database",
    "count" => 1,
    "info" => (object)array( "x" => 203, "y" => 102),
    "versions" => array("0.9.7", "0.9.8", "0.9.9")
);
$connection = new MongoClient();
$collection = $connection->tues->questions;

$collection->insert( $doc );
?>