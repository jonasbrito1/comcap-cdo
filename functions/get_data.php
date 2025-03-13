<?php
include('config/database.php');

function getDocuments() {
    global $conn;
    $sql = "SELECT * FROM documentos";
    $result = $conn->query($sql);
    $documents = [];
    while ($row = $result->fetch_assoc()) {
        $documents[] = $row;
    }
    return $documents;
}
?>
