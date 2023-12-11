<?php
/**
 * This file contains the Product class.
 */
class Product {
    private $id;
    private $name;
    private $priceMonero;
    private $priceUsd;
    /**
     * Product constructor.
     *
     * @param array $productData The product data.
     */
    public function __construct($productData) {
        $this->id = $productData['id'];
        $this->name = $productData['name'];
        $this->priceMonero = $productData['price_monero'];
        $this->priceUsd = $productData['price_usd'];
    }
    // Other methods...
}
?>