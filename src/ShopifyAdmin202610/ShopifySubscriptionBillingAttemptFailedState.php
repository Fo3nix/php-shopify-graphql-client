<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionBillingAttemptErrorHydrator;

/**
 * The billing attempt failed due to an error.
 */
class ShopifySubscriptionBillingAttemptFailedState
{
    protected $error;

    
    /**
     * The error that caused the billing attempt to fail.
     *
     * @return ShopifySubscriptionBillingAttemptGeneralError|ShopifySubscriptionBillingAttemptInventoryError|ShopifySubscriptionBillingAttemptPaymentError|ShopifySubscriptionBillingAttemptUnexpectedError
     */
    public function getError(): ShopifySubscriptionBillingAttemptGeneralError|ShopifySubscriptionBillingAttemptInventoryError|ShopifySubscriptionBillingAttemptPaymentError|ShopifySubscriptionBillingAttemptUnexpectedError|null
    {
        return $this->error;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['error']) && $data['error'] !== null) {
                $instance->error = ShopifySubscriptionBillingAttemptErrorHydrator::fromArray($data['error']);
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
            if ($this->error !== null) {
                $data['error'] = ShopifySubscriptionBillingAttemptErrorHydrator::toArray($this->error);
            }
            return $data;
        }
}
