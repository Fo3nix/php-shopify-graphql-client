<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountApplicationHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountApplication;

/**
 * The actual amount discounted on a line item or shipping line. While [`DiscountApplication`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/DiscountApplication) captures the discount's intentions and rules, The `DiscountAllocation` object shows the final calculated discount amount applied to each line.
 *
 * The allocation includes the discounted amount in both shop and presentment currencies, with a reference to the originating discount application.
 */
class ShopifyDiscountAllocation
{
    protected $allocatedAmount;
    protected $allocatedAmountSet;
    protected $discountApplication;

    
    /**
     * The money amount that's allocated to a line based on the associated discount application.
     *
     * @return ShopifyMoneyV2
     */
    public function getAllocatedAmount(): ?ShopifyMoneyV2
    {
        return $this->allocatedAmount;
    }

    
    /**
     * The money amount that's allocated to a line based on the associated discount application in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAllocatedAmountSet(): ?ShopifyMoneyBag
    {
        return $this->allocatedAmountSet;
    }

    
    /**
     * The discount application that the allocated amount originated from.
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
            if (isset($data['allocatedAmount']) && $data['allocatedAmount'] !== null) {
                $instance->allocatedAmount = ShopifyMoneyV2::fromArray($data['allocatedAmount']);
            }
            if (isset($data['allocatedAmountSet']) && $data['allocatedAmountSet'] !== null) {
                $instance->allocatedAmountSet = ShopifyMoneyBag::fromArray($data['allocatedAmountSet']);
            }
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
            if ($this->allocatedAmount !== null) {
                $data['allocatedAmount'] = $this->allocatedAmount->asArray();
            }
            if ($this->allocatedAmountSet !== null) {
                $data['allocatedAmountSet'] = $this->allocatedAmountSet->asArray();
            }
            if ($this->discountApplication !== null) {
                $data['discountApplication'] = ShopifyDiscountApplicationHydrator::toArray($this->discountApplication);
            }
            return $data;
        }
}
