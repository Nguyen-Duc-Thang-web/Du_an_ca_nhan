<?php
function Productlist()
{
    $data = ProductAll();
    require_once "./views/products/list.php";
}