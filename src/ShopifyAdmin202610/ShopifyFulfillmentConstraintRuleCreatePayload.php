<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentConstraintRule;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentConstraintRuleCreateUserError;

/**
 * Return type for `fulfillmentConstraintRuleCreate` mutation.
 */
class ShopifyFulfillmentConstraintRuleCreatePayload
{
    protected $fulfillmentConstraintRule;
    protected $userErrors;

    
    /**
     * The newly created fulfillment constraint rule.
     *
     * @return ShopifyFulfillmentConstraintRule
     */
    public function getFulfillmentConstraintRule(): ?ShopifyFulfillmentConstraintRule
    {
        return $this->fulfillmentConstraintRule;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyFulfillmentConstraintRuleCreateUserError[]
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
            if (isset($data['fulfillmentConstraintRule']) && $data['fulfillmentConstraintRule'] !== null) {
                $instance->fulfillmentConstraintRule = ShopifyFulfillmentConstraintRule::fromArray($data['fulfillmentConstraintRule']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyFulfillmentConstraintRuleCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->fulfillmentConstraintRule !== null) {
                $data['fulfillmentConstraintRule'] = $this->fulfillmentConstraintRule->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
