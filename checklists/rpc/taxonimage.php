<?php
include_once('../../config/symbini.php');
header('Content-Type: application/json; charset=' . $CHARSET);

$tid = isset($_REQUEST['tid']) ? (int)$_REQUEST['tid'] : 0;
if(!$tid){ echo json_encode(null); exit; }

$conn = MySQLiConnectionFactory::getCon('readonly');
$sql = 'SELECT m.url, m.thumbnailurl, t.sciname, t.author
        FROM media m
        INNER JOIN taxa t ON m.tid = t.tid
        WHERE m.tid = ' . $tid . ' AND m.sortsequence < 500
        ORDER BY m.sortsequence LIMIT 1';
$rs = $conn->query($sql);
if($r = $rs->fetch_object()){
    $url = $r->thumbnailurl ?: $r->url;
    echo json_encode(['url' => $url, 'sciname' => $r->sciname, 'author' => $r->author]);
} else {
    echo json_encode(null);
}
$rs->free();
$conn->close();
