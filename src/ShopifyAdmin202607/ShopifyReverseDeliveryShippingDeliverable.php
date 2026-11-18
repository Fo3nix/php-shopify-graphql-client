<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReverseDeliveryLabelV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReverseDeliveryTrackingV2;

/**
 * A reverse shipping deliverable that may include a label and tracking information.
 */
class ShopifyReverseDeliveryShippingDeliverable
{
    protected $label;
    protected $tracking;

    
    /**
     * The return label attached to the reverse delivery.
     *
     * @return ShopifyReverseDeliveryLabelV2
     */
    public function getLabel(): ?ShopifyReverseDeliveryLabelV2
    {
        return $this->label;
    }

    
    /**
     * The information to track the reverse delivery.
     *
     * @return ShopifyReverseDeliveryTrackingV2
     */
    public function getTracking(): ?ShopifyReverseDeliveryTrackingV2
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
