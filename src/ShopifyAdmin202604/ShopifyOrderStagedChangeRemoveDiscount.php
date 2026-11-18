<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountApplicationHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountApplication;

/**
 * A discount application removed during an order edit.
 */
class ShopifyOrderStagedChangeRemoveDiscount
{
    protected $discountApplication;

    
    /**
     * The removed discount application.
     *
     * @return ShopifyDiscountApplication
     */
    public function getDiscountApplication(): ?ShopifyDiscountApplication
    {
        return $this->discountApplication;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['discountApplication']) && $data['discountApplication'] !== null) {
                $instance->discountApplication = ShopifyDiscountApplicationHydrator::fromArray($data['discountApplication']);
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
            if ($this->discountApplication !== null) {
                $data['discountApplication'] = ShopifyDiscountApplicationHydrator::toArray($this->discountApplication);
            }
            return $data;
        }
}
