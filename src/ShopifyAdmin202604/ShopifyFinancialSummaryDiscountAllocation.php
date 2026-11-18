<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFinancialSummaryDiscountApplication;

/**
 * An amount that's allocated to a line item based on an associated discount application.
 */
class ShopifyFinancialSummaryDiscountAllocation
{
    protected $approximateAllocatedAmountPerItem;
    protected $discountApplication;

    
    /**
     * The money amount that's allocated per unit on the associated line based on the discount application in shop and presentment currencies. If the allocated amount for the line cannot be evenly divided by the quantity, then this amount will be an approximate amount, avoiding fractional pennies. For example, if the associated line had a quantity of 3 with a discount of 4 cents, then the discount distribution would be [0.01, 0.01, 0.02]. This field returns the highest number of the distribution. In this example, this would be 0.02.
     *
     * @return ShopifyMoneyBag
     */
    public function getApproximateAllocatedAmountPerItem(): ?ShopifyMoneyBag
    {
        return $this->approximateAllocatedAmountPerItem;
    }

    
    /**
     * The discount application that the allocated amount originated from.
     *
     * @return ShopifyFinancialSummaryDiscountApplication
     */
    public function getDiscountApplication(): ?ShopifyFinancialSummaryDiscountApplication
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
                $instance->approximateAllocatedAmountPerItem = ShopifyMoneyBag::fromArray($data['approximateAllocatedAmountPerItem']);
            }
            if (isset($data['discountApplication']) && $data['discountApplication'] !== null) {
                $instance->discountApplication = ShopifyFinancialSummaryDiscountApplication::fromArray($data['discountApplication']);
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
