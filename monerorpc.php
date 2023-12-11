<?php
/**
 * This file contains the MoneroRpc class.
 */
class MoneroRpc {
    private $host;
    private $port;
    /**
     * MoneroRpc constructor.
     *
     * @param string $host The Monero RPC host.
     * @param int $port The Monero RPC port.
     */
    public function __construct($host, $port) {
        $this->host = $host;
        $this->port = $port;
    }
    /**
     * Get the user's Monero balance.
     *
     * @param string $subaddress The user's Monero subaddress.
     * @return float The user's Monero balance.
     */
    public function getBalance($subaddress) {
        // Connect to the Monero RPC server
        $client = new JsonRpc\Client("http://{$this->host}:{$this->port}/json_rpc");
        // Make the RPC call to get the balance
        $response = $client->get_balance(['address' => $subaddress]);
        // Check if the RPC call was successful
        if (isset($response['result']['balance'])) {
            return $response['result']['balance'];
        } else {
            die('Failed to get Monero balance');
        }
    }
}
?>