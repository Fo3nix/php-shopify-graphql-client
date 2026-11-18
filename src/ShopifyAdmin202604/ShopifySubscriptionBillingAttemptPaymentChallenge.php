<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * A payment challenge that the customer must complete.
 */
class ShopifySubscriptionBillingAttemptPaymentChallenge
{
    protected $nextActionUrl;
    protected $status;

    
    /**
     * URL to redirect the customer for authentication.
     *
     * @return string
     */
    public function getNextActionUrl(): mixed
    {
        return $this->nextActionUrl;
    }

    
    /**
     * The status of the payment challenge.
     *
     * @return string A ShopifySubscriptionBillingAttemptPaymentChallengeStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['nextActionUrl']) && $data['nextActionUrl'] !== null) {
                $instance->nextActionUrl = $data['nextActionUrl'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->nextActionUrl !== null) {
                $data['nextActionUrl'] = $this->nextActionUrl;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}
