<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionBillingAttemptError;

class ShopifySubscriptionBillingAttemptFailedState
{
    protected $error;

    
    /**
     * @return ShopifySubscriptionBillingAttemptError
     */
    public function getError()
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
                $instance->error = ShopifySubscriptionBillingAttemptError::fromArray($data['error']);
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
                $data['error'] = $this->error->asArray();
            }
            return $data;
        }
}
