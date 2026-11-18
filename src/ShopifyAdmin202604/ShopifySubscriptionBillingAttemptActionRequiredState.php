<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionBillingAttemptActionHydrator;

/**
 * The billing attempt state that requires an action to resolve.
 * Must complete the action required for the billing attempt to continue being processed.
 */
class ShopifySubscriptionBillingAttemptActionRequiredState
{
    protected $action;

    
    /**
     * The action required to resolve the billing attempt.
     *
     * @return ShopifySubscriptionBillingAttemptPaymentChallenge
     */
    public function getAction(): ?ShopifySubscriptionBillingAttemptPaymentChallenge
    {
        return $this->action;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['action']) && $data['action'] !== null) {
                $instance->action = ShopifySubscriptionBillingAttemptActionHydrator::fromArray($data['action']);
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
            if ($this->action !== null) {
                $data['action'] = ShopifySubscriptionBillingAttemptActionHydrator::toArray($this->action);
            }
            return $data;
        }
}
