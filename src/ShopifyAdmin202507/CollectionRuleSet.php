<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CollectionRule;

class CollectionRuleSet
{
    protected $appliedDisjunctively;
    protected $rules;

    
    /**
     * @return bool
     */
    public function getAppliedDisjunctively()
    {
        return $this->appliedDisjunctively;
    }

    
    /**
     * @return CollectionRule[]
     */
    public function getRules()
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
                $instance->rules = array_map(function($item) { return CollectionRule::fromArray($item); }, $data['rules']);
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
