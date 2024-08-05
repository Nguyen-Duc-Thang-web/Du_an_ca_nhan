<?php
class ProductController
{
    public $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function Productlist()
    {
        $data = $this->product->getAll();
        require_once "./views/products/list.php";
    }
}
