<?php
include_once('../../config/symbini.php');
include_once($SERVER_ROOT.'/classes/OccurrenceLabel.php');

$collid = $_POST["collid"];
$detIdArr = isset($_POST['detid']) ? $_POST['detid'] : array();
$action = array_key_exists('submitaction', $_POST) ? $_POST['submitaction'] : '';

$labelManager = new OccurrenceLabel();
$labelManager->setCollid($collid);

$isEditor = 0;
if($SYMB_UID){
	if($IS_ADMIN || (array_key_exists("CollAdmin",$USER_RIGHTS) && in_array($collid,$USER_RIGHTS["CollAdmin"])) || (array_key_exists("CollEditor",$USER_RIGHTS) && in_array($collid,$USER_RIGHTS["CollEditor"]))){
		$isEditor = 1;
	}
}

if(!$isEditor || !$detIdArr) exit;

$labelArr = $labelManager->getAnnoArray($detIdArr, 0, 0);

$filename = 'annotations_' . date('Y-m-d') . '.csv';
header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');

$out = fopen('php://output', 'w');
fprintf($out, chr(0xEF).chr(0xBB).chr(0xBF)); // UTF-8 BOM for Excel

fputcsv($out, array('catalogNumber','recordedBy','recordNumber','scientificName','identificationQualifier','identifiedBy','dateIdentified','identificationReferences','identificationRemarks'));

foreach($labelArr as $detId => $row){
	fputcsv($out, array(
		$row['catalognumber'],
		$row['recordedby'],
		$row['recordnumber'],
		$row['sciname'],
		$row['identificationqualifier'],
		$row['identifiedby'],
		$row['dateidentified'],
		$row['identificationreferences'],
		$row['identificationremarks'],
	));
}

fclose($out);
?>
