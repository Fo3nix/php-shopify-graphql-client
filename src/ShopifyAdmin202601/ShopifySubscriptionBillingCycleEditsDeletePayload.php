<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionBillingCycle;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionBillingCycleUserError;

/**
 * Return type for `subscriptionBillingCycleEditsDelete` mutation.
 */
class ShopifySubscriptionBillingCycleEditsDeletePayload
{
    protected $billingCycles;
    protected $userErrors;

    
    /**
     * The list of updated billing cycles.
     *
     * @return ShopifySubscriptionBillingCycle[]
     */
    public function getBillingCycles(): ?array
    {
        return $this->billingCycles;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifySubscriptionBillingCycleUserError[]
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
            if (isset($data['billingCycles']) && $data['billingCycles'] !== null) {
                $instance->billingCycles = array_map(function($item) { return ShopifySubscriptionBillingCycle::fromArray($item); }, $data['billingCycles']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifySubscriptionBillingCycleUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->billingCycles !== null) {
                $data['billingCycles'] = array_map(function($item) { return $item->asArray(); }, $this->billingCycles);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
