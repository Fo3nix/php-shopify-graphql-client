<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyWeight;

class ShopifyInventoryItemMeasurement
{
    protected $id;
    protected $weight;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyWeight
     */
    public function getWeight()
    {
        return $this->weight;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['weight']) && $data['weight'] !== null) {
                $instance->weight = ShopifyWeight::fromArray($data['weight']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->weight !== null) {
                $data['weight'] = $this->weight->asArray();
            }
            return $data;
        }
}
