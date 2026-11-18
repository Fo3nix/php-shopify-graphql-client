<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionBillingCycle;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionBillingCycleUserError;

/**
 * Return type for `subscriptionBillingCycleScheduleEdit` mutation.
 */
class ShopifySubscriptionBillingCycleScheduleEditPayload
{
    protected $billingCycle;
    protected $userErrors;

    
    /**
     * The updated billing cycle.
     *
     * @return ShopifySubscriptionBillingCycle
     */
    public function getBillingCycle(): ?ShopifySubscriptionBillingCycle
    {
        return $this->billingCycle;
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
            if (isset($data['billingCycle']) && $data['billingCycle'] !== null) {
                $instance->billingCycle = ShopifySubscriptionBillingCycle::fromArray($data['billingCycle']);
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
            if ($this->billingCycle !== null) {
                $data['billingCycle'] = $this->billingCycle->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
