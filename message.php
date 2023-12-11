<?php
/**
 * This file contains the Message class.
 */
class Message {
    private $id;
    private $senderId;
    private $receiverId;
    private $content;
    private $timestamp;
    /**
     * Message constructor.
     *
     * @param array $messageData The message data.
     */
    public function __construct($messageData) {
        $this->id = $messageData['id'];
        $this->senderId = $messageData['sender_id'];
        $this->receiverId = $messageData['receiver_id'];
        $this->content = $messageData['content'];
        $this->timestamp = $messageData['timestamp'];
    }
    // Other methods...
}
?>