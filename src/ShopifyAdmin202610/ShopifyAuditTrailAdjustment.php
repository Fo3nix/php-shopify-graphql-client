<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

/**
 * One of a sequence of adjustments applied to determine a price.
 */
class ShopifyAuditTrailAdjustment
{
    protected $label;
    protected $price;
    protected $type;
    protected $value;

    
    /**
     * The human-readable description of the adjustment.
     * > **Note:** This field is **localized display text** and **not a stable contract**.
     * > Don't build business logic that parses or matches on this text because it can change at any time.
     * > No stable per-adjustment identifier is currently exposed.
     *
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    
    /**
     * The price after the adjustment was applied.
     *
     * @return ShopifyMoneyV2
     */
    public function getPrice(): ?ShopifyMoneyV2
    {
        return $this->price;
    }

    
    /**
     * The type of the adjustment.
     *
     * @return string A ShopifyAuditTrailAdjustmentTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * The value of the adjustment.
     *
     * @return string
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['label']) && $data['label'] !== null) {
                $instance->label = $data['label'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = ShopifyMoneyV2::fromArray($data['price']);
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = $data['value'];
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
                $data['label'] = $this->label;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
