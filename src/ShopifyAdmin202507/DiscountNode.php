<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Discount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\EventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;

class DiscountNode
{
    protected $discount;
    protected $events;
    protected $id;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;

    
    /**
     * @return Discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    
    /**
     * @return EventConnection
     */
    public function getEvents()
    {
        return $this->events;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return MetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return MetafieldConnection
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
            if (isset($data['discount']) && $data['discount'] !== null) {
                $instance->discount = Discount::fromArray($data['discount']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = EventConnection::fromArray($data['events']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = Metafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = MetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
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
            if ($this->discount !== null) {
                $data['discount'] = $this->discount->asArray();
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            return $data;
        }
}
