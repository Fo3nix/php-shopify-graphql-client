<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyQuantityRule;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyQuantityRuleUserError;

/**
 * Return type for `quantityRulesAdd` mutation.
 */
class ShopifyQuantityRulesAddPayload
{
    protected $quantityRules;
    protected $userErrors;

    
    /**
     * The list of quantity rules that were added to or updated in the price list.
     *
     * @return ShopifyQuantityRule[]
     */
    public function getQuantityRules(): ?array
    {
        return $this->quantityRules;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyQuantityRuleUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['quantityRules']) && $data['quantityRules'] !== null) {
                $instance->quantityRules = array_map(function($item) { return ShopifyQuantityRule::fromArray($item); }, $data['quantityRules']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyQuantityRuleUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->quantityRules !== null) {
                $data['quantityRules'] = array_map(function($item) { return $item->asArray(); }, $this->quantityRules);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
