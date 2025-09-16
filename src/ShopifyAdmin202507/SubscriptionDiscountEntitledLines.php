<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SubscriptionLineConnection;

class SubscriptionDiscountEntitledLines
{
    protected $all;
    protected $lines;

    
    /**
     * @return bool
     */
    public function getAll()
    {
        return $this->all;
    }

    
    /**
     * @return SubscriptionLineConnection
     */
    public function getLines()
    {
        return $this->lines;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['all']) && $data['all'] !== null) {
                $instance->all = $data['all'];
            }
            if (isset($data['lines']) && $data['lines'] !== null) {
                $instance->lines = SubscriptionLineConnection::fromArray($data['lines']);
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
            if ($this->all !== null) {
                $data['all'] = $this->all;
            }
            if ($this->lines !== null) {
                $data['lines'] = $this->lines->asArray();
            }
            return $data;
        }
}
