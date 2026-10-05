<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyShopifyProtectOrderEligibility;

class ShopifyShopifyProtectOrderSummary
{
    protected $eligibility;
    protected $status;

    
    /**
     * @return ShopifyShopifyProtectOrderEligibility
     */
    public function getEligibility()
    {
        return $this->eligibility;
    }

    
    /**
     * @return ShopifyShopifyProtectStatusEnumObject
     */
    public function getStatus()
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
            if (isset($data['eligibility']) && $data['eligibility'] !== null) {
                $instance->eligibility = ShopifyShopifyProtectOrderEligibility::fromArray($data['eligibility']);
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
            if ($this->eligibility !== null) {
                $data['eligibility'] = $this->eligibility->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}
