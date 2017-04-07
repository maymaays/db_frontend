<?php

$con= mysqli_connect("localhost","maymaays","ltolpxAjR7PHQPYO","Hotel Management");

$stmt = $con->prepare("SELECT * FROM Room ORDER BY roomID");
$stmt->execute();
$rooms = $stmt->fetch();

class Room {}

$result = array();

foreach($rooms as $roomID) {
  $r = new Room();
  $r->id = $room['roomID'];
  $r->name = $room['roomDesc'];
  $result[] = $r;

}

header('Content-Type: application/json');
echo json_encode($result);

?>
