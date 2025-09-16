<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Customer;
use Carbon\Carbon;

class GiftCardRecipient
{
    protected $message;
    protected $preferredName;
    protected $recipient;
    protected $sendNotificationAt;

    
    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    
    /**
     * @return string
     */
    public function getPreferredName()
    {
        return $this->preferredName;
    }

    
    /**
     * @return Customer
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    
    /**
     * @return Carbon
     */
    public function getSendNotificationAt()
    {
        return $this->sendNotificationAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
            }
            if (isset($data['preferredName']) && $data['preferredName'] !== null) {
                $instance->preferredName = $data['preferredName'];
            }
            if (isset($data['recipient']) && $data['recipient'] !== null) {
                $instance->recipient = Customer::fromArray($data['recipient']);
            }
            if (isset($data['sendNotificationAt']) && $data['sendNotificationAt'] !== null) {
                $instance->sendNotificationAt = new Carbon($data['sendNotificationAt']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            if ($this->preferredName !== null) {
                $data['preferredName'] = $this->preferredName;
            }
            if ($this->recipient !== null) {
                $data['recipient'] = $this->recipient->asArray();
            }
            if ($this->sendNotificationAt !== null) {
                $data['sendNotificationAt'] = $this->sendNotificationAt->toIso8601String();
            }
            return $data;
        }
}
