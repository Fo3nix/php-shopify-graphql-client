<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppPricingDetails;

class AppPlanV2
{
    protected $pricingDetails;

    
    /**
     * @return AppPricingDetails
     */
    public function getPricingDetails()
    {
        return $this->pricingDetails;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['pricingDetails']) && $data['pricingDetails'] !== null) {
                $instance->pricingDetails = AppPricingDetails::fromArray($data['pricingDetails']);
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
            if ($this->pricingDetails !== null) {
                $data['pricingDetails'] = $this->pricingDetails->asArray();
            }
            return $data;
        }
}
