<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCollectionRule;

/**
 * The set of rules that are used to determine which products are included in the collection.
 */
class ShopifyCollectionRuleSet
{
    protected $appliedDisjunctively;
    protected $rules;

    
    /**
     * Whether products must match any or all of the rules to be included in the collection.
     * If true, then products must match at least one of the rules to be included in the collection.
     * If false, then products must match all of the rules to be included in the collection.
     *
     * @return bool
     */
    public function getAppliedDisjunctively(): ?bool
    {
        return $this->appliedDisjunctively;
    }

    
    /**
     * The rules used to assign products to the collection.
     *
     * @return ShopifyCollectionRule[]
     */
    public function getRules(): ?array
    {
        return $this->rules;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['appliedDisjunctively']) && $data['appliedDisjunctively'] !== null) {
                $instance->appliedDisjunctively = $data['appliedDisjunctively'];
            }
            if (isset($data['rules']) && $data['rules'] !== null) {
                $instance->rules = array_map(function($item) { return ShopifyCollectionRule::fromArray($item); }, $data['rules']);
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
            if ($this->appliedDisjunctively !== null) {
                $data['appliedDisjunctively'] = $this->appliedDisjunctively;
            }
            if ($this->rules !== null) {
                $data['rules'] = array_map(function($item) { return $item->asArray(); }, $this->rules);
            }
            return $data;
        }
}
