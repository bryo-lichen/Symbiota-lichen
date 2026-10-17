<?php
include_once('../../../config/symbini.php');
include_once($SERVER_ROOT.'/classes/RpcTaxonomy.php');
header('Content-Type: application/json; charset=' . $CHARSET);

$sourceIdentifier = array_key_exists('sourceidentifier', $_REQUEST) ? trim($_REQUEST['sourceidentifier']) : '';
$excludeTid = array_key_exists('tid', $_REQUEST) ? filter_var($_REQUEST['tid'], FILTER_SANITIZE_NUMBER_INT) : 0;

$result = array('exists' => false, 'sciname' => '');
if($sourceIdentifier){
	$rpcManager = new RpcTaxonomy();
	$result = $rpcManager->checkSourceIdentifierExists($sourceIdentifier, $excludeTid);
}
echo json_encode($result);
?>
