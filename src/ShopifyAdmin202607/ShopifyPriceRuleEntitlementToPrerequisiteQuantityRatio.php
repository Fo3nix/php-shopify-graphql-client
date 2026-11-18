<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Quantity of prerequisite items required for the price rule to be applicable, compared to quantity of entitled items.
 */
class ShopifyPriceRuleEntitlementToPrerequisiteQuantityRatio
{
    protected $entitlementQuantity;
    protected $prerequisiteQuantity;

    
    /**
     * The quantity of entitled items in the ratio.
     *
     * @return int
     */
    public function getEntitlementQuantity(): ?int
    {
        return $this->entitlementQuantity;
    }

    
    /**
     * The quantity of prerequisite items in the ratio.
     *
     * @return int
     */
    public function getPrerequisiteQuantity(): ?int
    {
        return $this->prerequisiteQuantity;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['entitlementQuantity']) && $data['entitlementQuantity'] !== null) {
                $instance->entitlementQuantity = $data['entitlementQuantity'];
            }
            if (isset($data['prerequisiteQuantity']) && $data['prerequisiteQuantity'] !== null) {
                $instance->prerequisiteQuantity = $data['prerequisiteQuantity'];
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
            if ($this->entitlementQuantity !== null) {
                $data['entitlementQuantity'] = $this->entitlementQuantity;
            }
            if ($this->prerequisiteQuantity !== null) {
                $data['prerequisiteQuantity'] = $this->prerequisiteQuantity;
            }
            return $data;
        }
}
