<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySellingPlanCheckoutChargeValueHydrator;

/**
 * The amount charged at checkout when the full amount isn't charged at checkout.
 */
class ShopifySellingPlanCheckoutCharge
{
    protected $type;
    protected $value;

    
    /**
     * The charge type for the checkout charge.
     *
     * @return string A ShopifySellingPlanCheckoutChargeTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * The charge value for the checkout charge.
     *
     * @return ShopifyMoneyV2|ShopifySellingPlanCheckoutChargePercentageValue
     */
    public function getValue(): ShopifyMoneyV2|ShopifySellingPlanCheckoutChargePercentageValue|null
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
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = ShopifySellingPlanCheckoutChargeValueHydrator::fromArray($data['value']);
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
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->value !== null) {
                $data['value'] = ShopifySellingPlanCheckoutChargeValueHydrator::toArray($this->value);
            }
            return $data;
        }
}
