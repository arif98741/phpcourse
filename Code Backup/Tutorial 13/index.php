<?php
//Associative Array. Tutorial 13
$details = array(
	//employee details
	"name" => "Ariful Islam",
	"address" => "Tangail",
	"email" => "arif98741@gmail.com",
	"interest" => "Coding,Programming",
	"age" => 22,
	"student" => true
);
echo "<pre>";
print_r($details);
echo "</pre>";
echo $details["student"];

?>