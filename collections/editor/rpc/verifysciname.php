<?php
include_once('../../../config/symbini.php');
include_once($SERVER_ROOT.'/classes/RpcOccurrenceEditor.php');
header('Content-Type: application/json; charset='.$CHARSET);

$term = trim($_POST['term']);
$tid = isset($_POST['tid']) ? (int)$_POST['tid'] : 0;

$retArr = array();
if($tid || $term){
	$editorManager = new RpcOccurrenceEditor();
	$retArr = $editorManager->getTaxonArr($term, $tid);
}
if($retArr) echo json_encode($retArr);
else echo 'null';
?>