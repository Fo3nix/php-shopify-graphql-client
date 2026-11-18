<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyTaxonomyCategory;

/**
 * Specifies the taxonomy category to used for the condition.
 */
class ShopifyCollectionRuleCategoryCondition
{
    protected $value;

    
    /**
     * The taxonomy category used as condition.
     *
     * @return ShopifyTaxonomyCategory
     */
    public function getValue(): ?ShopifyTaxonomyCategory
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
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = ShopifyTaxonomyCategory::fromArray($data['value']);
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
            if ($this->value !== null) {
                $data['value'] = $this->value->asArray();
            }
            return $data;
        }
}
