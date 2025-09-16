<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ShopifyPaymentsDisputeReasonDetails
{
    protected $networkReasonCode;
    protected $reason;

    
    /**
     * @return string
     */
    public function getNetworkReasonCode()
    {
        return $this->networkReasonCode;
    }

    
    /**
     * @return ShopifyPaymentsDisputeReasonEnumObject
     */
    public function getReason()
    {
        return $this->reason;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['networkReasonCode']) && $data['networkReasonCode'] !== null) {
                $instance->networkReasonCode = $data['networkReasonCode'];
            }
            if (isset($data['reason']) && $data['reason'] !== null) {
                $instance->reason = $data['reason'];
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
            if ($this->networkReasonCode !== null) {
                $data['networkReasonCode'] = $this->networkReasonCode;
            }
            if ($this->reason !== null) {
                $data['reason'] = $this->reason;
            }
            return $data;
        }
}
