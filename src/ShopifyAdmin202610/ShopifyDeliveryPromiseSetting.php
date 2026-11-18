<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * The delivery promise settings.
 */
class ShopifyDeliveryPromiseSetting
{
    protected $deliveryDatesEnabled;
    protected $processingTime;

    
    /**
     * Whether delivery dates is enabled.
     *
     * @return bool
     */
    public function getDeliveryDatesEnabled(): ?bool
    {
        return $this->deliveryDatesEnabled;
    }

    
    /**
     * The number of business days required for processing the order before the package is handed off to the carrier. Expressed as an ISO8601 duration.
     *
     * @return string
     */
    public function getProcessingTime(): ?string
    {
        return $this->processingTime;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['deliveryDatesEnabled']) && $data['deliveryDatesEnabled'] !== null) {
                $instance->deliveryDatesEnabled = $data['deliveryDatesEnabled'];
            }
            if (isset($data['processingTime']) && $data['processingTime'] !== null) {
                $instance->processingTime = $data['processingTime'];
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
            if ($this->deliveryDatesEnabled !== null) {
                $data['deliveryDatesEnabled'] = $this->deliveryDatesEnabled;
            }
            if ($this->processingTime !== null) {
                $data['processingTime'] = $this->processingTime;
            }
            return $data;
        }
}
