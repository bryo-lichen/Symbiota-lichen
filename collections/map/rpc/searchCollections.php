<?php
include_once('../../../config/symbini.php');
include_once($SERVER_ROOT . '/classes/OccurrenceMapManager.php');

header('Content-Type: application/json;charset=' . $CHARSET);
include_once($SERVER_ROOT . '/rpc/crossPortalHeaders.php');
include_once($SERVER_ROOT . '/classes/utilities/GeneralUtil.php');

ob_start();

// If a specific TID was selected from the autocomplete (homonym disambiguation),
// use it directly so only that taxon's records are returned, not all homonyms.
if(!empty($_REQUEST['taxatid']) && is_numeric($_REQUEST['taxatid'])){
	$_REQUEST['taxa'] = filter_var($_REQUEST['taxatid'], FILTER_SANITIZE_NUMBER_INT);
}
$mapManager = new OccurrenceMapManager();
$searchArray = $mapManager->getQueryTermArr();

//Gets Coordinates
$coordArr = [
	'taxaArr' => [],
	'collArr' => [],
	'recordArr' => []
];

try {
	$coordArr = $mapManager->getCoordinateMap();
} catch(Throwable $th) {
	$coordArr['error'] = $th->getMessage();
}

$coordArr['origin'] = GeneralUtil::getDomain() . $GLOBALS['CLIENT_ROOT'];
$coordArr['query'] = http_build_query($searchArray);
$coordArr['searchArray'] = $searchArray;

echo json_encode($coordArr);
