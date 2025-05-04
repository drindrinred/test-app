<?php
header('Content-Type: application/json');
$data = array('message' => 'PHP API response', 'timestamp' => date("Y-m-d H:i:s"));
echo json_encode($data);
?>