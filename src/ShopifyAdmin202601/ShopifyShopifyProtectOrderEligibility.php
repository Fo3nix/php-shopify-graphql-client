<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * The eligibility details of an order's protection against fraudulent chargebacks by Shopify Protect.
 */
class ShopifyShopifyProtectOrderEligibility
{
    protected $status;

    
    /**
     * The status of whether an order is eligible for protection against fraudulent chargebacks.
     *
     * @return string A ShopifyShopifyProtectEligibilityStatusEnumObject value
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
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}
