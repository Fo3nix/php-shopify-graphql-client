<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySaleTax;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyBag;

/**
 * An individual sale record associated with a sales agreement. Every money value in an order's sales data is represented in the currency's smallest unit. When amounts are divided across multiple line items, such as taxes or order discounts, the amounts might not divide evenly across all of the line items on the order. To address this, the remaining currency units that couldn't be divided evenly are allocated one at a time, starting with the first line item, until they are all accounted for. In aggregate, the values sum up correctly. In isolation, one line item might have a different tax or discount amount than another line item of the same price, before taxes and discounts. This is because the amount could not be divided evenly across the items. The allocation of currency units across line items is immutable. After they are allocated, currency units are never reallocated or redistributed among the line items.
 */
interface ShopifySale
{
    
    /**
     * The type of order action that the sale represents.
     *
     * @return string A ShopifySaleActionTypeEnumObject value
     */
    public function getActionType(): ?string;

    
    /**
     * The unique ID for the sale.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * The line type associated with the sale.
     *
     * @return string A ShopifySaleLineTypeEnumObject value
     */
    public function getLineType(): ?string;

    
    /**
     * The number of units either ordered or intended to be returned.
     *
     * @return int
     */
    public function getQuantity(): ?int;

    
    /**
     * All individual taxes associated with the sale.
     *
     * @return ShopifySaleTax[]
     */
    public function getTaxes(): ?array;

    
    /**
     * The total sale amount after taxes and discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalAmount(): ?ShopifyMoneyBag;

    
    /**
     * The total discounts allocated to the sale after taxes.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalDiscountAmountAfterTaxes(): ?ShopifyMoneyBag;

    
    /**
     * The total discounts allocated to the sale before taxes.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalDiscountAmountBeforeTaxes(): ?ShopifyMoneyBag;

    
    /**
     * The total amount of taxes for the sale.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalTaxAmount(): ?ShopifyMoneyBag;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
