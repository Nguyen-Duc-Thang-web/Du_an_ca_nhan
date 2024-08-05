<?php
function ProductAll()
{
    $sql = "SELECT * FROM product ";
    $stsm = $GLOBALS['conn']->prepare($sql);
    $stsm->execute();
    $result = $stsm->fetchAll();
    return $result;
}