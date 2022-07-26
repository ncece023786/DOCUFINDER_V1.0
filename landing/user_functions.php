<?php
include 'config.php';

echo json_encode(['success' => true,'message' => $_POST['action']]);