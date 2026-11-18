<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCalculatedDiscountApplicationHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCalculatedDiscountApplication;

/**
 * An amount discounting the line that has been allocated by an associated discount application.
 */
class ShopifyCalculatedDiscountAllocation
{
    protected $allocatedAmountSet;
    protected $discountApplication;

    
    /**
     * The money amount that's allocated by the discount application in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAllocatedAmountSet(): ?ShopifyMoneyBag
    {
        return $this->allocatedAmountSet;
    }

    
    /**
     * The discount that the allocated amount originated from.
     *
     * @return ShopifyCalculatedDiscountApplication
     */
    public function getDiscountApplication(): ?ShopifyCalculatedDiscountApplication
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
            if (isset($data['allocatedAmountSet']) && $data['allocatedAmountSet'] !== null) {
                $instance->allocatedAmountSet = ShopifyMoneyBag::fromArray($data['allocatedAmountSet']);
            }
            if (isset($data['discountApplication']) && $data['discountApplication'] !== null) {
                $instance->discountApplication = ShopifyCalculatedDiscountApplicationHydrator::fromArray($data['discountApplication']);
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
            if ($this->allocatedAmountSet !== null) {
                $data['allocatedAmountSet'] = $this->allocatedAmountSet->asArray();
            }
            if ($this->discountApplication !== null) {
                $data['discountApplication'] = ShopifyCalculatedDiscountApplicationHydrator::toArray($this->discountApplication);
            }
            return $data;
        }
}
