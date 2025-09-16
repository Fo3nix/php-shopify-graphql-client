<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;

class DiscountMinimumSubtotal
{
    protected $greaterThanOrEqualToSubtotal;

    
    /**
     * @return MoneyV2
     */
    public function getGreaterThanOrEqualToSubtotal()
    {
        return $this->greaterThanOrEqualToSubtotal;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['greaterThanOrEqualToSubtotal']) && $data['greaterThanOrEqualToSubtotal'] !== null) {
                $instance->greaterThanOrEqualToSubtotal = MoneyV2::fromArray($data['greaterThanOrEqualToSubtotal']);
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
            if ($this->greaterThanOrEqualToSubtotal !== null) {
                $data['greaterThanOrEqualToSubtotal'] = $this->greaterThanOrEqualToSubtotal->asArray();
            }
            return $data;
        }
}
