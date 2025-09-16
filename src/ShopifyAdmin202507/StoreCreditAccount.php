<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StoreCreditAccountTransactionConnection;

class StoreCreditAccount
{
    protected $balance;
    protected $id;
    protected $owner;
    protected $transactions;

    
    /**
     * @return MoneyV2
     */
    public function getBalance()
    {
        return $this->balance;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    
    /**
     * @return StoreCreditAccountTransactionConnection
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['balance']) && $data['balance'] !== null) {
                $instance->balance = MoneyV2::fromArray($data['balance']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['owner']) && $data['owner'] !== null) {
                $instance->owner = $data['owner'];
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = StoreCreditAccountTransactionConnection::fromArray($data['transactions']);
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
            if ($this->balance !== null) {
                $data['balance'] = $this->balance->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->owner !== null) {
                $data['owner'] = $this->owner;
            }
            if ($this->transactions !== null) {
                $data['transactions'] = $this->transactions->asArray();
            }
            return $data;
        }
}
