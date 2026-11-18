<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyBag;

/**
 * The financial breakdown of the requested order edit.
 */
class ShopifyRequestedOrderEditFinancialSummary
{
    protected $editOrderLevelDiscountSubtotalSet;
    protected $editSubtotalBeforeTargetAllDiscountsSet;
    protected $editSubtotalSet;
    protected $editSubtotalWithCartDiscountSet;
    protected $editTotalSet;
    protected $editTotalTaxSet;

    
    /**
     * The sum of all order level discounts that are target_all.
     *
     * @return ShopifyMoneyBag
     */
    public function getEditOrderLevelDiscountSubtotalSet(): ?ShopifyMoneyBag
    {
        return $this->editOrderLevelDiscountSubtotalSet;
    }

    
    /**
     * The subtotal of all edit line items excluding target_all discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getEditSubtotalBeforeTargetAllDiscountsSet(): ?ShopifyMoneyBag
    {
        return $this->editSubtotalBeforeTargetAllDiscountsSet;
    }

    
    /**
     * The subtotal of all edit line items.
     *
     * @return ShopifyMoneyBag
     */
    public function getEditSubtotalSet(): ?ShopifyMoneyBag
    {
        return $this->editSubtotalSet;
    }

    
    /**
     * The subtotal of all edit line items with order level discounts applied.
     *
     * @return ShopifyMoneyBag
     */
    public function getEditSubtotalWithCartDiscountSet(): ?ShopifyMoneyBag
    {
        return $this->editSubtotalWithCartDiscountSet;
    }

    
    /**
     * The total sum of all edit line items, including subtotals and taxes.
     *
     * @return ShopifyMoneyBag
     */
    public function getEditTotalSet(): ?ShopifyMoneyBag
    {
        return $this->editTotalSet;
    }

    
    /**
     * The total tax sum of all edit line items.
     *
     * @return ShopifyMoneyBag
     */
    public function getEditTotalTaxSet(): ?ShopifyMoneyBag
    {
        return $this->editTotalTaxSet;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['editOrderLevelDiscountSubtotalSet']) && $data['editOrderLevelDiscountSubtotalSet'] !== null) {
                $instance->editOrderLevelDiscountSubtotalSet = ShopifyMoneyBag::fromArray($data['editOrderLevelDiscountSubtotalSet']);
            }
            if (isset($data['editSubtotalBeforeTargetAllDiscountsSet']) && $data['editSubtotalBeforeTargetAllDiscountsSet'] !== null) {
                $instance->editSubtotalBeforeTargetAllDiscountsSet = ShopifyMoneyBag::fromArray($data['editSubtotalBeforeTargetAllDiscountsSet']);
            }
            if (isset($data['editSubtotalSet']) && $data['editSubtotalSet'] !== null) {
                $instance->editSubtotalSet = ShopifyMoneyBag::fromArray($data['editSubtotalSet']);
            }
            if (isset($data['editSubtotalWithCartDiscountSet']) && $data['editSubtotalWithCartDiscountSet'] !== null) {
                $instance->editSubtotalWithCartDiscountSet = ShopifyMoneyBag::fromArray($data['editSubtotalWithCartDiscountSet']);
            }
            if (isset($data['editTotalSet']) && $data['editTotalSet'] !== null) {
                $instance->editTotalSet = ShopifyMoneyBag::fromArray($data['editTotalSet']);
            }
            if (isset($data['editTotalTaxSet']) && $data['editTotalTaxSet'] !== null) {
                $instance->editTotalTaxSet = ShopifyMoneyBag::fromArray($data['editTotalTaxSet']);
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
            if ($this->editOrderLevelDiscountSubtotalSet !== null) {
                $data['editOrderLevelDiscountSubtotalSet'] = $this->editOrderLevelDiscountSubtotalSet->asArray();
            }
            if ($this->editSubtotalBeforeTargetAllDiscountsSet !== null) {
                $data['editSubtotalBeforeTargetAllDiscountsSet'] = $this->editSubtotalBeforeTargetAllDiscountsSet->asArray();
            }
            if ($this->editSubtotalSet !== null) {
                $data['editSubtotalSet'] = $this->editSubtotalSet->asArray();
            }
            if ($this->editSubtotalWithCartDiscountSet !== null) {
                $data['editSubtotalWithCartDiscountSet'] = $this->editSubtotalWithCartDiscountSet->asArray();
            }
            if ($this->editTotalSet !== null) {
                $data['editTotalSet'] = $this->editTotalSet->asArray();
            }
            if ($this->editTotalTaxSet !== null) {
                $data['editTotalTaxSet'] = $this->editTotalTaxSet->asArray();
            }
            return $data;
        }
}
