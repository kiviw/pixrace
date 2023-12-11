<?php
/**
 * This file contains the Transaction class.
 */
class Transaction {
    private $id;
    private $buyerId;
    private $sellerId;
    private $productId;
    private $status;
    /**
     * Transaction constructor.
     *
     * @param array $transactionData The transaction data.
     */
    public function __construct($transactionData) {
        $this->id = $transactionData['id'];
        $this->buyerId = $transactionData['buyer_id'];
        $this->sellerId = $transactionData['seller_id'];
        $this->productId = $transactionData['product_id'];
        $this->status = $transactionData['status'];
    }
    // Other methods...
}
?>