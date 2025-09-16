<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FinancialSummaryDiscountApplication;

class FinancialSummaryDiscountAllocation
{
    protected $approximateAllocatedAmountPerItem;
    protected $discountApplication;

    
    /**
     * @return MoneyBag
     */
    public function getApproximateAllocatedAmountPerItem()
    {
        return $this->approximateAllocatedAmountPerItem;
    }

    
    /**
     * @return FinancialSummaryDiscountApplication
     */
    public function getDiscountApplication()
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
            if (isset($data['approximateAllocatedAmountPerItem']) && $data['approximateAllocatedAmountPerItem'] !== null) {
                $instance->approximateAllocatedAmountPerItem = MoneyBag::fromArray($data['approximateAllocatedAmountPerItem']);
            }
            if (isset($data['discountApplication']) && $data['discountApplication'] !== null) {
                $instance->discountApplication = FinancialSummaryDiscountApplication::fromArray($data['discountApplication']);
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
            if ($this->approximateAllocatedAmountPerItem !== null) {
                $data['approximateAllocatedAmountPerItem'] = $this->approximateAllocatedAmountPerItem->asArray();
            }
            if ($this->discountApplication !== null) {
                $data['discountApplication'] = $this->discountApplication->asArray();
            }
            return $data;
        }
}
