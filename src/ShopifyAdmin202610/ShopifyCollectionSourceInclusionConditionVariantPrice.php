<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

/**
 * A condition based on variant prices for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionVariantPrice implements ShopifyCollectionSourceInclusionCondition
{
    protected $id;
    protected $relation;
    protected $value;

    
    /**
     * The unique identifier for this condition.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The relationship between the variant price and the condition values.
     *
     * @return string A ShopifyCollectionSourceInclusionConditionVariantPriceRelationEnumObject value
     */
    public function getRelation(): ?string
    {
        return $this->relation;
    }

    
    /**
     * The variant price to match against.
     *
     * @return ShopifyMoneyV2
     */
    public function getValue(): ?ShopifyMoneyV2
    {
        return $this->value;
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
            if (isset($data['relation']) && $data['relation'] !== null) {
                $instance->relation = $data['relation'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = ShopifyMoneyV2::fromArray($data['value']);
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
            if ($this->relation !== null) {
                $data['relation'] = $this->relation;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value->asArray();
            }
            return $data;
        }
}
