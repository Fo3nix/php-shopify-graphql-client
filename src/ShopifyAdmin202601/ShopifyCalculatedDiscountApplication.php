<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPricingValueHydrator;

/**
 * A [discount application](https://shopify.dev/api/admin-graphql/latest/interfaces/discountapplication) involved in order editing that might be newly added or have new changes applied.
 */
interface ShopifyCalculatedDiscountApplication
{
    
    /**
     * The method by which the discount's value is allocated to its entitled items.
     *
     * @return string A ShopifyDiscountApplicationAllocationMethodEnumObject value
     */
    public function getAllocationMethod(): ?string;

    
    /**
     * The level at which the discount was applied.
     *
     * @return string A ShopifyDiscountApplicationLevelEnumObject value
     */
    public function getAppliedTo(): ?string;

    
    /**
     * The description of discount application. Indicates the reason why the discount was applied.
     *
     * @return string
     */
    public function getDescription(): ?string;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string;

    
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
