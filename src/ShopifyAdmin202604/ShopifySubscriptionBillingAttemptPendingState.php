<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * The billing attempt is currently being processed.
 */
class ShopifySubscriptionBillingAttemptPendingState
{
    protected $processing;

    
    /**
     * Always true when the billing attempt is pending.
     *
     * @return bool
     */
    public function getProcessing(): ?bool
    {
        return $this->processing;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['processing']) && $data['processing'] !== null) {
                $instance->processing = $data['processing'];
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
            if ($this->processing !== null) {
                $data['processing'] = $this->processing;
            }
            return $data;
        }
}
