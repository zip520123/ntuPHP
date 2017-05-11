<?php

require_once("./dbconfig.php");

$linkDB = new PDO(dsn,username,password);

$sql = "select fifaCode as code, name , fifaRanking as rank, flagUrl from teamDetails";

$dataModel = $linkDB -> prepare($sql);
$dataModel->execute();

$result = $dataModel->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result, JSON_UNESCAPED_SLASHES);

?>