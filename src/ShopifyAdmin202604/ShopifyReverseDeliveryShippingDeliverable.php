<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyReverseDeliveryLabelV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyReverseDeliveryTrackingV2;

class ShopifyReverseDeliveryShippingDeliverable
{
    protected $label;
    protected $tracking;

    
    /**
     * @return ShopifyReverseDeliveryLabelV2
     */
    public function getLabel()
    {
        return $this->label;
    }

    
    /**
     * @return ShopifyReverseDeliveryTrackingV2
     */
    public function getTracking()
    {
        return $this->tracking;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['label']) && $data['label'] !== null) {
                $instance->label = ShopifyReverseDeliveryLabelV2::fromArray($data['label']);
            }
            if (isset($data['tracking']) && $data['tracking'] !== null) {
                $instance->tracking = ShopifyReverseDeliveryTrackingV2::fromArray($data['tracking']);
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
            if ($this->label !== null) {
                $data['label'] = $this->label->asArray();
            }
            if ($this->tracking !== null) {
                $data['tracking'] = $this->tracking->asArray();
            }
            return $data;
        }
}
