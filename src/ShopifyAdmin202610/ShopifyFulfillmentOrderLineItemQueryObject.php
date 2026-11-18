<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Associates an order line item with the quantities that require fulfillment as part of a fulfillment order. Each Fulfillment Order Line Item object tracks the total quantity to fulfill and the remaining quantity yet to be fulfilled, along with details about the line item being fulfilled and pricing information.
 *
 * The line item provides additional fulfillment data including whether the item requires shipping. Financial summaries show pricing details with discounts applied, while warning messages alert merchants to any issues that might affect fulfillment.
 */
class ShopifyFulfillmentOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItem";

    /**
     * The financial summary for the Fulfillment Order's Line Items.
     */
    public function selectFinancialSummaries(?ShopifyFulfillmentOrderLineItemFinancialSummariesArgumentsObject $argsObject = null): ShopifyFulfillmentOrderLineItemFinancialSummaryQueryObject
    {
        $object = new ShopifyFulfillmentOrderLineItemFinancialSummaryQueryObject("financialSummaries");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
    public function selectImage(?ShopifyFulfillmentOrderLineItemImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the inventory item.
     */
    public function selectInventoryItemId(): static
    {
        $this->selectField("inventoryItemId");

        return $this;
    }

    /**
     * The associated order line item.
     */
    public function selectLineItem(?ShopifyFulfillmentOrderLineItemLineItemArgumentsObject $argsObject = null): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The variant unit price without discounts applied, in shop and presentment currencies.
     *
     * @deprecated Use `financialSummaries` instead.
     */
    public function selectOriginalUnitPriceSet(?ShopifyFulfillmentOrderLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The title of the product.
     */
    public function selectProductTitle(): static
    {
        $this->selectField("productTitle");

        return $this;
    }

    /**
     * The number of units remaining to be fulfilled.
     */
    public function selectRemainingQuantity(): static
    {
        $this->selectField("remainingQuantity");

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
     * The shipping line associated with this line item.
     */
    public function selectShippingLine(?ShopifyFulfillmentOrderLineItemShippingLineArgumentsObject $argsObject = null): ShopifyShippingLineQueryObject
    {
        $object = new ShopifyShippingLineQueryObject("shippingLine");
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
     * The total number of units to be fulfilled.
     */
    public function selectTotalQuantity(): static
    {
        $this->selectField("totalQuantity");

        return $this;
    }

    /**
     * The product variant associated to the fulfillment order line item.
     */
    public function selectVariant(?ShopifyFulfillmentOrderLineItemVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the variant.
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

    /**
     * Warning messages for a fulfillment order line item.
     */
    public function selectWarnings(?ShopifyFulfillmentOrderLineItemWarningsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderLineItemWarningQueryObject
    {
        $object = new ShopifyFulfillmentOrderLineItemWarningQueryObject("warnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The weight of a line item unit.
     */
    public function selectWeight(?ShopifyFulfillmentOrderLineItemWeightArgumentsObject $argsObject = null): ShopifyWeightQueryObject
    {
        $object = new ShopifyWeightQueryObject("weight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
