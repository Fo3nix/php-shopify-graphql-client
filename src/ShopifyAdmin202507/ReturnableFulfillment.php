<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Fulfillment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ReturnableFulfillmentLineItemConnection;

class ReturnableFulfillment
{
    protected $fulfillment;
    protected $id;
    protected $returnableFulfillmentLineItems;

    
    /**
     * @return Fulfillment
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ReturnableFulfillmentLineItemConnection
     */
    public function getReturnableFulfillmentLineItems()
    {
        return $this->returnableFulfillmentLineItems;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['fulfillment']) && $data['fulfillment'] !== null) {
                $instance->fulfillment = Fulfillment::fromArray($data['fulfillment']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['returnableFulfillmentLineItems']) && $data['returnableFulfillmentLineItems'] !== null) {
                $instance->returnableFulfillmentLineItems = ReturnableFulfillmentLineItemConnection::fromArray($data['returnableFulfillmentLineItems']);
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
            if ($this->fulfillment !== null) {
                $data['fulfillment'] = $this->fulfillment->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->returnableFulfillmentLineItems !== null) {
                $data['returnableFulfillmentLineItems'] = $this->returnableFulfillmentLineItems->asArray();
            }
            return $data;
        }
}
