<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldCapabilityAdminFilterable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldCapabilitySmartCollectionCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldCapabilityUniqueValues;

class MetafieldCapabilities
{
    protected $adminFilterable;
    protected $smartCollectionCondition;
    protected $uniqueValues;

    
    /**
     * @return MetafieldCapabilityAdminFilterable
     */
    public function getAdminFilterable()
    {
        return $this->adminFilterable;
    }

    
    /**
     * @return MetafieldCapabilitySmartCollectionCondition
     */
    public function getSmartCollectionCondition()
    {
        return $this->smartCollectionCondition;
    }

    
    /**
     * @return MetafieldCapabilityUniqueValues
     */
    public function getUniqueValues()
    {
        return $this->uniqueValues;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['adminFilterable']) && $data['adminFilterable'] !== null) {
                $instance->adminFilterable = MetafieldCapabilityAdminFilterable::fromArray($data['adminFilterable']);
            }
            if (isset($data['smartCollectionCondition']) && $data['smartCollectionCondition'] !== null) {
                $instance->smartCollectionCondition = MetafieldCapabilitySmartCollectionCondition::fromArray($data['smartCollectionCondition']);
            }
            if (isset($data['uniqueValues']) && $data['uniqueValues'] !== null) {
                $instance->uniqueValues = MetafieldCapabilityUniqueValues::fromArray($data['uniqueValues']);
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
            if ($this->adminFilterable !== null) {
                $data['adminFilterable'] = $this->adminFilterable->asArray();
            }
            if ($this->smartCollectionCondition !== null) {
                $data['smartCollectionCondition'] = $this->smartCollectionCondition->asArray();
            }
            if ($this->uniqueValues !== null) {
                $data['uniqueValues'] = $this->uniqueValues->asArray();
            }
            return $data;
        }
}
