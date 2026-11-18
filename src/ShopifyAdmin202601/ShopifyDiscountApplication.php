<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPricingValueHydrator;

/**
 * Discount applications capture the intentions of a discount source at
 * the time of application on an order's line items or shipping lines.
 *
 * Discount applications don't represent the actual final amount discounted on a line (line item or shipping line). The actual amount discounted on a line is represented by the [DiscountAllocation](https://shopify.dev/api/admin-graphql/latest/objects/discountallocation) object.
 */
interface ShopifyDiscountApplication
{
    
    /**
     * The method by which the discount's value is applied to its entitled items.
     *
     * @return string A ShopifyDiscountApplicationAllocationMethodEnumObject value
     */
    public function getAllocationMethod(): ?string;

    
    /**
     * An ordered index that can be used to identify the discount application and indicate the precedence
     * of the discount application for calculations.
     *
     * @return int
     */
    public function getIndex(): ?int;

    
    /**
     * How the discount amount is distributed on the discounted lines.
     *
     * @return string A ShopifyDiscountApplicationTargetSelectionEnumObject value
     */
    public function getTargetSelection(): ?string;

    
    /**
     * Whether the discount is applied on line items or shipping lines.
     *
     * @return string A ShopifyDiscountApplicationTargetTypeEnumObject value
     */
    public function getTargetType(): ?string;

    
    /**
     * The value of the discount application.
     *
     * @return ShopifyMoneyV2|ShopifyPricingPercentageValue
     */
    public function getValue(): ShopifyMoneyV2|ShopifyPricingPercentageValue|null;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
