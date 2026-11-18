<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionBillingAttempt;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyBillingAttemptUserError;

/**
 * Return type for `subscriptionBillingAttemptCreate` mutation.
 */
class ShopifySubscriptionBillingAttemptCreatePayload
{
    protected $subscriptionBillingAttempt;
    protected $userErrors;

    
    /**
     * The subscription billing attempt.
     *
     * @return ShopifySubscriptionBillingAttempt
     */
    public function getSubscriptionBillingAttempt(): ?ShopifySubscriptionBillingAttempt
    {
        return $this->subscriptionBillingAttempt;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyBillingAttemptUserError[]
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
            if (isset($data['subscriptionBillingAttempt']) && $data['subscriptionBillingAttempt'] !== null) {
                $instance->subscriptionBillingAttempt = ShopifySubscriptionBillingAttempt::fromArray($data['subscriptionBillingAttempt']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyBillingAttemptUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->subscriptionBillingAttempt !== null) {
                $data['subscriptionBillingAttempt'] = $this->subscriptionBillingAttempt->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
