<?php
class Product extends CI_Controller {

	public function index()
	{
		$this->load->view("product_page");
	}

	public function catalog()
    {
        $data = [
            'title' => 'Product Catalog',
            'brand' => 'Smartphone Xiaomi',
            'product' => ['Redmi Note 9', 'Redmi Note 9 Pro', 'Mi Note 10', 'Mi Note 10 Pro']
        ];
        $this->load->view("product_catalog",$data);        
    }
		
}

