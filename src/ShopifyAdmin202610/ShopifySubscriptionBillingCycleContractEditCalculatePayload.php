<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContractCalculationHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionBillingCycleContractEditCalculateUserError;

/**
 * Return type for `subscriptionBillingCycleContractEditCalculate` mutation.
 */
class ShopifySubscriptionBillingCycleContractEditCalculatePayload
{
    protected $subscriptionContractCalculation;
    protected $userErrors;

    
    /**
     * The result of the subscription contract calculation operation.
     *
     * @return ShopifySubscriptionContractCalculationFailure|ShopifySubscriptionContractCalculationPending|ShopifySubscriptionContractCalculationSuccess
     */
    public function getSubscriptionContractCalculation(): ShopifySubscriptionContractCalculationFailure|ShopifySubscriptionContractCalculationPending|ShopifySubscriptionContractCalculationSuccess|null
    {
        return $this->subscriptionContractCalculation;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifySubscriptionBillingCycleContractEditCalculateUserError[]
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
            if (isset($data['subscriptionContractCalculation']) && $data['subscriptionContractCalculation'] !== null) {
                $instance->subscriptionContractCalculation = ShopifySubscriptionContractCalculationHydrator::fromArray($data['subscriptionContractCalculation']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifySubscriptionBillingCycleContractEditCalculateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->subscriptionContractCalculation !== null) {
                $data['subscriptionContractCalculation'] = ShopifySubscriptionContractCalculationHydrator::toArray($this->subscriptionContractCalculation);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
