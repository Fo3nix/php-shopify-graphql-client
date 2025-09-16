<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinition;

class CollectionRuleMetafieldCondition
{
    protected $metafieldDefinition;

    
    /**
     * @return MetafieldDefinition
     */
    public function getMetafieldDefinition()
    {
        return $this->metafieldDefinition;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['metafieldDefinition']) && $data['metafieldDefinition'] !== null) {
                $instance->metafieldDefinition = MetafieldDefinition::fromArray($data['metafieldDefinition']);
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
            if ($this->metafieldDefinition !== null) {
                $data['metafieldDefinition'] = $this->metafieldDefinition->asArray();
            }
            return $data;
        }
}
