<?php

$orderMessage = "Order #:".$orderNumber." has been submitted";
$conn->exec("INSERT INTO messaging (sender, recipient, message, dateSubmitted) VALUES ('$customerID',1, '$orderMessage', '$orderDate')");