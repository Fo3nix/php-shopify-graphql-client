<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `LineItem` object represents a single product or service that a customer purchased in an
 * [order](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order).
 * Each line item is associated with a
 * [product variant](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant)
 * and can have multiple [discount allocations](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAllocation).
 * Line items contain details about what was purchased, including the product variant, quantity, pricing,
 * and fulfillment status.
 *
 * Use the `LineItem` object to manage the following processes:
 *
 * - [Track the quantity of items](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/build-fulfillment-solutions) ordered, fulfilled, and unfulfilled.
 * - [Calculate prices](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders), including discounts and taxes.
 * - Manage fulfillment through [fulfillment services](https://shopify.dev/docs/apps/build/orders-fulfillment/fulfillment-service-apps).
 * - Manage [returns](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management) and [exchanges](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/manage-exchanges).
 * - Handle [subscriptions](https://shopify.dev/docs/apps/build/purchase-options/subscriptions) and recurring orders.
 *
 * Line items can also include custom attributes and properties, allowing merchants to add specific details
 * about each item in an order. Learn more about
 * [managing orders and fulfillment](https://shopify.dev/docs/apps/build/orders-fulfillment).
 */
class ShopifyLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "LineItem";

    /**
     * Whether the line item can be restocked.
     *
     * @deprecated Use `restockable` instead.
     */
    public function selectCanRestock(): static
    {
        $this->selectField("canRestock");

        return $this;
    }

    /**
     * The subscription contract associated with this line item.
     */
    public function selectContract(?ShopifyLineItemContractArgumentsObject $argsObject = null): ShopifySubscriptionContractQueryObject
    {
        $object = new ShopifySubscriptionContractQueryObject("contract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the line item was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The number of units ordered, excluding refunded and removed units.
     */
    public function selectCurrentQuantity(): static
    {
        $this->selectField("currentQuantity");

        return $this;
    }

    /**
     * A list of attributes that represent custom features or special requests.
     */
    public function selectCustomAttributes(?ShopifyLineItemCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The discounts that have been allocated to the line item by discount applications, including discounts allocated to refunded and removed quantities.
     */
    public function selectDiscountAllocations(?ShopifyLineItemDiscountAllocationsArgumentsObject $argsObject = null): ShopifyDiscountAllocationQueryObject
    {
        $object = new ShopifyDiscountAllocationQueryObject("discountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total discounted price of the line item in shop currency, including refunded and removed quantities. This value doesn't include order-level discounts.
     *
     * @deprecated Use `discountedTotalSet` instead.
     */
    public function selectDiscountedTotal(): static
    {
        $this->selectField("discountedTotal");

        return $this;
    }

    /**
     * The total discounted price of the line item in shop and presentment currencies, including refunded and removed quantities. This value doesn't include order-level discounts. Code-based discounts aren't included by default.
     */
    public function selectDiscountedTotalSet(?ShopifyLineItemDiscountedTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The approximate unit price of the line item in shop currency. This value includes line-level discounts and discounts applied to refunded and removed quantities. It doesn't include order-level or code-based discounts.
     *
     * @deprecated Use `discountedUnitPriceSet` instead.
     */
    public function selectDiscountedUnitPrice(): static
    {
        $this->selectField("discountedUnitPrice");

        return $this;
    }

    /**
     * The approximate unit price of the line item in shop and presentment currencies. This value includes discounts applied to refunded and removed quantities.
     */
    public function selectDiscountedUnitPriceAfterAllDiscountsSet(?ShopifyLineItemDiscountedUnitPriceAfterAllDiscountsSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceAfterAllDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The approximate unit price of the line item in shop and presentment currencies. This value includes line-level discounts and discounts applied to refunded and removed quantities. It doesn't include order-level or code-based discounts.
     */
    public function selectDiscountedUnitPriceSet(?ShopifyLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The duties associated with the line item.
     */
    public function selectDuties(?ShopifyLineItemDutiesArgumentsObject $argsObject = null): ShopifyDutyQueryObject
    {
        $object = new ShopifyDutyQueryObject("duties");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of units to fulfill.
     *
     * @deprecated Use [FulfillmentOrderLineItem#remainingQuantity](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrderLineItem#field-fulfillmentorderlineitem-remainingquantity) instead.
     */
    public function selectFulfillableQuantity(): static
    {
        $this->selectField("fulfillableQuantity");

        return $this;
    }

    /**
     * The fulfillment service that stocks the product variant belonging to a line item.
     *
     * This is a third-party fulfillment service in the following scenarios:
     *
     * **Scenario 1**
     * - The product variant is stocked by a single fulfillment service.
     * - The [FulfillmentService](/api/admin-graphql/latest/objects/FulfillmentService) is a third-party fulfillment service. Third-party fulfillment services don't have a handle with the value `manual`.
     *
     * **Scenario 2**
     * - Multiple fulfillment services stock the product variant.
     * - The last time that the line item was unfulfilled, it was awaiting fulfillment by a third-party fulfillment service. Third-party fulfillment services don't have a handle with the value `manual`.
     *
     * If none of the above conditions are met, then the fulfillment service has the `manual` handle.
     *
     * @deprecated 
    The [relationship between a product variant and a fulfillment service was changed](/changelog/fulfillment-service-sku-sharing). A [ProductVariant](/api/admin-graphql/latest/objects/ProductVariant) can be stocked by multiple fulfillment services. As a result, we recommend that you use the [inventoryItem field](/api/admin-graphql/latest/objects/ProductVariant#field-productvariant-inventoryitem) if you need to determine where a product variant is stocked.

    If you need to determine whether a product is a gift card, then you should continue to use this field until an alternative is available.

    Altering the locations which stock a product variant won't change the value of this field for existing orders.

    Learn about [managing inventory quantities and states](/apps/fulfillment/inventory-management-apps/quantities-states).
     */
    public function selectFulfillmentService(?ShopifyLineItemFulfillmentServiceArgumentsObject $argsObject = null): ShopifyFulfillmentServiceQueryObject
    {
        $object = new ShopifyFulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The line item's fulfillment status. Returns 'fulfilled' if fulfillableQuantity >= quantity,
     * 'partial' if  fulfillableQuantity > 0, and 'unfulfilled' otherwise.
     *
     * @deprecated Use [FulfillmentOrderLineItem#remainingQuantity](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrderLineItem#field-fulfillmentorderlineitem-remainingquantity) instead
     */
    public function selectFulfillmentStatus(): static
    {
        $this->selectField("fulfillmentStatus");

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
     * The image associated to the line item's variant.
     */
    public function selectImage(?ShopifyLineItemImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the line item represents the purchase of a gift card.
     */
    public function selectIsGiftCard(): static
    {
        $this->selectField("isGiftCard");

        return $this;
    }

    /**
     * The line item group associated to the line item.
     */
    public function selectLineItemGroup(?ShopifyLineItemLineItemGroupArgumentsObject $argsObject = null): ShopifyLineItemGroupQueryObject
    {
        $object = new ShopifyLineItemGroupQueryObject("lineItemGroup");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the line item can be edited or not.
     */
    public function selectMerchantEditable(): static
    {
        $this->selectField("merchantEditable");

        return $this;
    }

    /**
     * The title of the product, optionally appended with the title of the variant (if applicable).
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The total number of units that can't be fulfilled. For example, if items have been refunded, or the item is not something that can be fulfilled, like a tip. Please see the [FulfillmentOrder](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrder) object for more fulfillment details.
     */
    public function selectNonFulfillableQuantity(): static
    {
        $this->selectField("nonFulfillableQuantity");

        return $this;
    }

    /**
     * In shop currency, the total price of the line item when the order was created.
     * This value doesn't include discounts.
     *
     * @deprecated Use `originalTotalSet` instead.
     */
    public function selectOriginalTotal(): static
    {
        $this->selectField("originalTotal");

        return $this;
    }

    /**
     * In shop and presentment currencies, the total price of the line item when the order was created.
     * This value doesn't include discounts.
     */
    public function selectOriginalTotalSet(?ShopifyLineItemOriginalTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * In shop currency, the unit price of the line item when the order was created. This value doesn't include discounts.
     *
     * @deprecated Use `originalUnitPriceSet` instead.
     */
    public function selectOriginalUnitPrice(): static
    {
        $this->selectField("originalUnitPrice");

        return $this;
    }

    /**
     * In shop and presentment currencies, the unit price of the line item when the order was created. This value doesn't include discounts.
     */
    public function selectOriginalUnitPriceSet(?ShopifyLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Product object associated with this line item's variant.
     */
    public function selectProduct(?ShopifyLineItemProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of units ordered, including refunded and removed units.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The number of units ordered, excluding refunded units and removed units.
     */
    public function selectRefundableQuantity(): static
    {
        $this->selectField("refundableQuantity");

        return $this;
    }

    /**
     * Whether physical shipping is required for the variant.
     */
    public function selectRequiresShipping(): static
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    /**
     * Whether the line item can be restocked.
     */
    public function selectRestockable(): static
    {
        $this->selectField("restockable");

        return $this;
    }

    /**
     * The selling plan details associated with the line item.
     */
    public function selectSellingPlan(?ShopifyLineItemSellingPlanArgumentsObject $argsObject = null): ShopifyLineItemSellingPlanQueryObject
    {
        $object = new ShopifyLineItemSellingPlanQueryObject("sellingPlan");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The variant SKU number.
     */
    public function selectSku(): static
    {
        $this->selectField("sku");

        return $this;
    }

    /**
     * Staff attributed to the line item.
     */
    public function selectStaffMember(?ShopifyLineItemStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Return reasons suggested based on the line item's product category in Shopify's product taxonomy. Use [`returnReasonDefinitions`](https://shopify.dev/docs/api/admin-graphql/latest/queries/returnReasonDefinitions) to access the full library of available reasons.
     */
    public function selectSuggestedReturnReasonDefinitions(?ShopifyLineItemSuggestedReturnReasonDefinitionsArgumentsObject $argsObject = null): ShopifyReturnReasonDefinitionConnectionQueryObject
    {
        $object = new ShopifyReturnReasonDefinitionConnectionQueryObject("suggestedReturnReasonDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The taxes charged for the line item, including taxes charged for refunded and removed quantities.
     */
    public function selectTaxLines(?ShopifyLineItemTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the variant is taxable.
     */
    public function selectTaxable(): static
    {
        $this->selectField("taxable");

        return $this;
    }

    /**
     * The title of the product at time of order creation.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The total discount allocated to the line item in shop currency, including the total allocated to refunded and removed quantities. This value doesn't include order-level discounts.
     *
     * @deprecated Use `totalDiscountSet` instead.
     */
    public function selectTotalDiscount(): static
    {
        $this->selectField("totalDiscount");

        return $this;
    }

    /**
     * The total discount allocated to the line item in shop and presentment currencies, including the total allocated to refunded and removed quantities. This value doesn't include order-level discounts.
     */
    public function selectTotalDiscountSet(?ShopifyLineItemTotalDiscountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalDiscountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * In shop currency, the total discounted price of the unfulfilled quantity for the line item.
     *
     * @deprecated Use `unfulfilledDiscountedTotalSet` instead.
     */
    public function selectUnfulfilledDiscountedTotal(): static
    {
        $this->selectField("unfulfilledDiscountedTotal");

        return $this;
    }

    /**
     * In shop and presentment currencies, the total discounted price of the unfulfilled quantity for the line item.
     */
    public function selectUnfulfilledDiscountedTotalSet(?ShopifyLineItemUnfulfilledDiscountedTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("unfulfilledDiscountedTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * In shop currency, the total price of the unfulfilled quantity for the line item. This value doesn't include discounts.
     *
     * @deprecated Use `unfulfilledOriginalTotalSet` instead.
     */
    public function selectUnfulfilledOriginalTotal(): static
    {
        $this->selectField("unfulfilledOriginalTotal");

        return $this;
    }

    /**
     * In shop and presentment currencies, the total price of the unfulfilled quantity for the line item. This value doesn't include discounts.
     */
    public function selectUnfulfilledOriginalTotalSet(?ShopifyLineItemUnfulfilledOriginalTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("unfulfilledOriginalTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of units not yet fulfilled.
     */
    public function selectUnfulfilledQuantity(): static
    {
        $this->selectField("unfulfilledQuantity");

        return $this;
    }

    /**
     * The Variant object associated with this line item.
     */
    public function selectVariant(?ShopifyLineItemVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The title of the variant at time of order creation.
     */
    public function selectVariantTitle(): static
    {
        $this->selectField("variantTitle");

        return $this;
    }

    /**
     * The name of the vendor who made the variant.
     */
    public function selectVendor(): static
    {
        $this->selectField("vendor");

        return $this;
    }
}
