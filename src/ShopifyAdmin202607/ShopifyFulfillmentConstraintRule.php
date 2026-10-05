<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyFunction;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldConnection;

class ShopifyFulfillmentConstraintRule
{
    protected $deliveryMethodTypes;
    protected $function;
    protected $id;
    protected $metafield;
    protected $metafields;

    
    /**
     * @return ShopifyDeliveryMethodTypeEnumObject[]
     */
    public function getDeliveryMethodTypes()
    {
        return $this->deliveryMethodTypes;
    }

    
    /**
     * @return ShopifyShopifyFunction
     */
    public function getFunction()
    {
        return $this->function;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyMetafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['deliveryMethodTypes']) && $data['deliveryMethodTypes'] !== null) {
                $instance->deliveryMethodTypes = $data['deliveryMethodTypes'];
            }
            if (isset($data['function']) && $data['function'] !== null) {
                $instance->function = ShopifyShopifyFunction::fromArray($data['function']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
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
            if ($this->deliveryMethodTypes !== null) {
                $data['deliveryMethodTypes'] = $this->deliveryMethodTypes;
            }
            if ($this->function !== null) {
                $data['function'] = $this->function->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            return $data;
        }
}
