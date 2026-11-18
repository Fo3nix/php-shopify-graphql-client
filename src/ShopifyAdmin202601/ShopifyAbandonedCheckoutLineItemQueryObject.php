<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A single line item in an abandoned checkout.
 */
class ShopifyAbandonedCheckoutLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutLineItem";

    /**
     * A list of line item components for this line item.
     */
    public function selectComponents(?ShopifyAbandonedCheckoutLineItemComponentsArgumentsObject $argsObject = null): ShopifyAbandonedCheckoutLineItemComponentQueryObject
    {
        $object = new ShopifyAbandonedCheckoutLineItemComponentQueryObject("components");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of extra information that has been added to the line item.
     */
    public function selectCustomAttributes(?ShopifyAbandonedCheckoutLineItemCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Discount allocations that have been applied on the line item.
     */
    public function selectDiscountAllocations(?ShopifyAbandonedCheckoutLineItemDiscountAllocationsArgumentsObject $argsObject = null): ShopifyDiscountAllocationConnectionQueryObject
    {
        $object = new ShopifyDiscountAllocationConnectionQueryObject("discountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Final total price for the entire quantity of this line item, including discounts.
     */
    public function selectDiscountedTotalPriceSet(?ShopifyAbandonedCheckoutLineItemDiscountedTotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total price for the entire quantity of this line item, after all discounts are applied, at both the line item and code-based line item level.
     */
    public function selectDiscountedTotalPriceWithCodeDiscount(?ShopifyAbandonedCheckoutLineItemDiscountedTotalPriceWithCodeDiscountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedTotalPriceWithCodeDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price of a single variant unit after discounts are applied at the line item level, in shop and presentment currencies.
     */
    public function selectDiscountedUnitPriceSet(?ShopifyAbandonedCheckoutLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price of a single variant unit after all discounts are applied, at both the line item and code-based line item level.
     */
    public function selectDiscountedUnitPriceWithCodeDiscount(?ShopifyAbandonedCheckoutLineItemDiscountedUnitPriceWithCodeDiscountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceWithCodeDiscount");
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
     * The image associated with the line item's variant or product.
     * NULL if the line item has no product, or if neither the variant nor the product have an image.
     */
    public function selectImage(?ShopifyAbandonedCheckoutLineItemImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Original total price for the entire quantity of this line item, before discounts.
     */
    public function selectOriginalTotalPriceSet(?ShopifyAbandonedCheckoutLineItemOriginalTotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Original price for a single unit of this line item, before discounts.
     */
    public function selectOriginalUnitPriceSet(?ShopifyAbandonedCheckoutLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The parent relationship for this line item.
     */
    public function selectParentRelationship(?ShopifyAbandonedCheckoutLineItemParentRelationshipArgumentsObject $argsObject = null): ShopifyAbandonedCheckoutLineItemParentRelationshipQueryObject
    {
        $object = new ShopifyAbandonedCheckoutLineItemParentRelationshipQueryObject("parentRelationship");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Product for this line item.
     * NULL for custom line items and products that were deleted after checkout began.
     */
    public function selectProduct(?ShopifyAbandonedCheckoutLineItemProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity of the line item.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * SKU for the inventory item associated with the variant, if any.
     */
    public function selectSku(): static
    {
        $this->selectField("sku");

        return $this;
    }

    /**
     * Title of the line item. Defaults to the product's title.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * Product variant for this line item.
     * NULL for custom line items and variants that were deleted after checkout began.
     */
    public function selectVariant(?ShopifyAbandonedCheckoutLineItemVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Title of the variant for this line item.
     * NULL for custom line items and products that don't have distinct variants.
     */
    public function selectVariantTitle(): static
    {
        $this->selectField("variantTitle");

        return $this;
    }
}
