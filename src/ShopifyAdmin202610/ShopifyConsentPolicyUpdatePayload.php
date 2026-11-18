<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyConsentPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyConsentPolicyError;

/**
 * Return type for `consentPolicyUpdate` mutation.
 */
class ShopifyConsentPolicyUpdatePayload
{
    protected $updatedPolicies;
    protected $userErrors;

    
    /**
     * All updated and created consent policies. The consent policies that haven't been modified as part of the mutation aren't returned.
     *
     * @return ShopifyConsentPolicy[]
     */
    public function getUpdatedPolicies(): ?array
    {
        return $this->updatedPolicies;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyConsentPolicyError[]
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
            if (isset($data['updatedPolicies']) && $data['updatedPolicies'] !== null) {
                $instance->updatedPolicies = array_map(function($item) { return ShopifyConsentPolicy::fromArray($item); }, $data['updatedPolicies']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyConsentPolicyError::fromArray($item); }, $data['userErrors']);
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
            if ($this->updatedPolicies !== null) {
                $data['updatedPolicies'] = array_map(function($item) { return $item->asArray(); }, $this->updatedPolicies);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
