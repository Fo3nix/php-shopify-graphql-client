<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A set of conditions, including entitlements and prerequisites, that must be met for a discount code to apply.
 *
 * > Note:
 * > Use the types and queries included our [discount tutorials](https://shopify.dev/docs/apps/selling-strategies/discounts/getting-started) instead. These will replace the GraphQL Admin API's [`PriceRule`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceRule) object and [`DiscountCode`](https://shopify.dev/docs/api/admin-graphql/latest/unions/DiscountCode) union, and the REST Admin API's deprecated[`PriceRule`](https://shopify.dev/docs/api/admin-rest/unstable/resources/pricerule) resource.
 */
class ShopifyPriceRuleQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRule";

    /**
     * The maximum number of times that the price rule can be allocated onto an order.
     */
    public function selectAllocationLimit(): static
    {
        $this->selectField("allocationLimit");

        return $this;
    }

    /**
     * The method by which the price rule's value is allocated to its entitled items.
     */
    public function selectAllocationMethod(): static
    {
        $this->selectField("allocationMethod");

        return $this;
    }

    /**
     * The application that created the price rule.
     */
    public function selectApp(?ShopifyPriceRuleAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The
     * [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that you can use in combination with
     * [Shopify discount types](https://help.shopify.com/manual/discounts/discount-types).
     */
    public function selectCombinesWith(?ShopifyPriceRuleCombinesWithArgumentsObject $argsObject = null): ShopifyDiscountCombinesWithQueryObject
    {
        $object = new ShopifyDiscountCombinesWithQueryObject("combinesWith");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the price rule was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The customers that can use this price rule.
     */
    public function selectCustomerSelection(?ShopifyPriceRuleCustomerSelectionArgumentsObject $argsObject = null): ShopifyPriceRuleCustomerSelectionQueryObject
    {
        $object = new ShopifyPriceRuleCustomerSelectionQueryObject("customerSelection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The
     * [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that's used to control how discounts can be combined.
     *
     * @deprecated Use `discountClasses` instead.
     */
    public function selectDiscountClass(): static
    {
        $this->selectField("discountClass");

        return $this;
    }

    /**
     * The classes of the discount.
     */
    public function selectDiscountClasses(): static
    {
        $this->selectField("discountClasses");

        return $this;
    }

    /**
     * List of the price rule's discount codes.
     */
    public function selectDiscountCodes(?ShopifyPriceRuleDiscountCodesArgumentsObject $argsObject = null): ShopifyPriceRuleDiscountCodeConnectionQueryObject
    {
        $object = new ShopifyPriceRuleDiscountCodeConnectionQueryObject("discountCodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * How many discount codes associated with the price rule.
     */
    public function selectDiscountCodesCount(?ShopifyPriceRuleDiscountCodesCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("discountCodesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the price rule ends. For open-ended price rules, use `null`.
     */
    public function selectEndsAt(): static
    {
        $this->selectField("endsAt");

        return $this;
    }

    /**
     * Quantity of prerequisite items required for the price rule to be applicable,  compared to quantity of entitled items.
     *
     * @deprecated Use `prerequisiteToEntitlementQuantityRatio` instead.
     */
    public function selectEntitlementToPrerequisiteQuantityRatio(?ShopifyPriceRuleEntitlementToPrerequisiteQuantityRatioArgumentsObject $argsObject = null): ShopifyPriceRuleEntitlementToPrerequisiteQuantityRatioQueryObject
    {
        $object = new ShopifyPriceRuleEntitlementToPrerequisiteQuantityRatioQueryObject("entitlementToPrerequisiteQuantityRatio");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The paginated list of events associated with the price rule.
     */
    public function selectEvents(?ShopifyPriceRuleEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the price rule's features.
     */
    public function selectFeatures(): static
    {
        $this->selectField("features");

        return $this;
    }

    /**
     * Indicates whether there are any timeline comments on the price rule.
     */
    public function selectHasTimelineComment(): static
    {
        $this->selectField("hasTimelineComment");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The items to which the price rule applies.
     */
    public function selectItemEntitlements(?ShopifyPriceRuleItemEntitlementsArgumentsObject $argsObject = null): ShopifyPriceRuleItemEntitlementsQueryObject
    {
        $object = new ShopifyPriceRuleItemEntitlementsQueryObject("itemEntitlements");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The items required for the price rule to be applicable.
     */
    public function selectItemPrerequisites(?ShopifyPriceRuleItemPrerequisitesArgumentsObject $argsObject = null): ShopifyPriceRuleLineItemPrerequisitesQueryObject
    {
        $object = new ShopifyPriceRuleLineItemPrerequisitesQueryObject("itemPrerequisites");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * Whether the price rule can be applied only once per customer.
     */
    public function selectOncePerCustomer(): static
    {
        $this->selectField("oncePerCustomer");

        return $this;
    }

    /**
     * The number of the entitled items must fall within this range for the price rule to be applicable.
     */
    public function selectPrerequisiteQuantityRange(?ShopifyPriceRulePrerequisiteQuantityRangeArgumentsObject $argsObject = null): ShopifyPriceRuleQuantityRangeQueryObject
    {
        $object = new ShopifyPriceRuleQuantityRangeQueryObject("prerequisiteQuantityRange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shipping cost must fall within this range for the price rule to be applicable.
     */
    public function selectPrerequisiteShippingPriceRange(?ShopifyPriceRulePrerequisiteShippingPriceRangeArgumentsObject $argsObject = null): ShopifyPriceRuleMoneyRangeQueryObject
    {
        $object = new ShopifyPriceRuleMoneyRangeQueryObject("prerequisiteShippingPriceRange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of the entitled items subtotal prices must fall within this range for the price rule to be applicable.
     */
    public function selectPrerequisiteSubtotalRange(?ShopifyPriceRulePrerequisiteSubtotalRangeArgumentsObject $argsObject = null): ShopifyPriceRuleMoneyRangeQueryObject
    {
        $object = new ShopifyPriceRuleMoneyRangeQueryObject("prerequisiteSubtotalRange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Quantity of prerequisite items required for the price rule to be applicable,  compared to quantity of entitled items.
     */
    public function selectPrerequisiteToEntitlementQuantityRatio(?ShopifyPriceRulePrerequisiteToEntitlementQuantityRatioArgumentsObject $argsObject = null): ShopifyPriceRulePrerequisiteToEntitlementQuantityRatioQueryObject
    {
        $object = new ShopifyPriceRulePrerequisiteToEntitlementQuantityRatioQueryObject("prerequisiteToEntitlementQuantityRatio");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * URLs that can be used to share the discount.
     */
    public function selectShareableUrls(?ShopifyPriceRuleShareableUrlsArgumentsObject $argsObject = null): ShopifyPriceRuleShareableUrlQueryObject
    {
        $object = new ShopifyPriceRuleShareableUrlQueryObject("shareableUrls");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shipping lines to which the price rule applies.
     */
    public function selectShippingEntitlements(?ShopifyPriceRuleShippingEntitlementsArgumentsObject $argsObject = null): ShopifyPriceRuleShippingLineEntitlementsQueryObject
    {
        $object = new ShopifyPriceRuleShippingLineEntitlementsQueryObject("shippingEntitlements");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the price rule starts.
     */
    public function selectStartsAt(): static
    {
        $this->selectField("startsAt");

        return $this;
    }

    /**
     * The status of the price rule.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * A detailed summary of the price rule.
     */
    public function selectSummary(): static
    {
        $this->selectField("summary");

        return $this;
    }

    /**
     * The type of lines (line_item or shipping_line) to which the price rule applies.
     */
    public function selectTarget(): static
    {
        $this->selectField("target");

        return $this;
    }

    /**
     * The title of the price rule.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The total sales from orders where the price rule was used.
     */
    public function selectTotalSales(?ShopifyPriceRuleTotalSalesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the price rule's features.
     *
     * @deprecated Use `features` instead.
     */
    public function selectTraits(): static
    {
        $this->selectField("traits");

        return $this;
    }

    /**
     * The number of times that the price rule has been used. This value is updated asynchronously and can be different than the actual usage count.
     */
    public function selectUsageCount(): static
    {
        $this->selectField("usageCount");

        return $this;
    }

    /**
     * The maximum number of times that the price rule can be used in total.
     */
    public function selectUsageLimit(): static
    {
        $this->selectField("usageLimit");

        return $this;
    }

    /**
     * A time period during which a price rule is applicable.
     */
    public function selectValidityPeriod(?ShopifyPriceRuleValidityPeriodArgumentsObject $argsObject = null): ShopifyPriceRuleValidityPeriodQueryObject
    {
        $object = new ShopifyPriceRuleValidityPeriodQueryObject("validityPeriod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The value of the price rule.
     *
     * @deprecated Use `valueV2` instead.
     */
    public function selectValue(?ShopifyPriceRuleValueArgumentsObject $argsObject = null): ShopifyPriceRuleValueUnionObject
    {
        $object = new ShopifyPriceRuleValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The value of the price rule.
     */
    public function selectValueV2(?ShopifyPriceRuleValueV2ArgumentsObject $argsObject = null): ShopifyPricingValueUnionObject
    {
        $object = new ShopifyPricingValueUnionObject("valueV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
