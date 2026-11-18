<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A line item involved in order editing that may be newly added or have new changes applied.
 */
class ShopifyCalculatedLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedLineItem";

    /**
     * The discounts that have been allocated onto the line item by discount applications.
     */
    public function selectCalculatedDiscountAllocations(?ShopifyCalculatedLineItemCalculatedDiscountAllocationsArgumentsObject $argsObject = null): ShopifyCalculatedDiscountAllocationQueryObject
    {
        $object = new ShopifyCalculatedDiscountAllocationQueryObject("calculatedDiscountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of attributes that represent custom features or special requests.
     */
    public function selectCustomAttributes(?ShopifyCalculatedLineItemCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The discounts that have been allocated onto the line item by discount applications.
     *
     * @deprecated Use `calculatedDiscountAllocations` instead.
     */
    public function selectDiscountAllocations(?ShopifyCalculatedLineItemDiscountAllocationsArgumentsObject $argsObject = null): ShopifyDiscountAllocationQueryObject
    {
        $object = new ShopifyDiscountAllocationQueryObject("discountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price of a single quantity of the line item with line item discounts applied, in shop and presentment currencies. Discounts applied to the entire order aren't included in this price.
     */
    public function selectDiscountedUnitPriceSet(?ShopifyCalculatedLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of items that can be edited.
     */
    public function selectEditableQuantity(): static
    {
        $this->selectField("editableQuantity");

        return $this;
    }

    /**
     * The editable quantity prior to any changes made in the current edit.
     */
    public function selectEditableQuantityBeforeChanges(): static
    {
        $this->selectField("editableQuantityBeforeChanges");

        return $this;
    }

    /**
     * The total price of editable lines in shop and presentment currencies.
     */
    public function selectEditableSubtotalSet(?ShopifyCalculatedLineItemEditableSubtotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("editableSubtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the calculated line item has a staged discount.
     */
    public function selectHasStagedLineItemDiscount(): static
    {
        $this->selectField("hasStagedLineItemDiscount");

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
     * The image object associated to the line item's variant.
     */
    public function selectImage(?ShopifyCalculatedLineItemImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The variant unit price in shop and presentment currencies, without any discounts applied.
     */
    public function selectOriginalUnitPriceSet(?ShopifyCalculatedLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of items.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * Whether the line item can be restocked or not.
     */
    public function selectRestockable(): static
    {
        $this->selectField("restockable");

        return $this;
    }

    /**
     * Whether the changes on the line item will result in a restock.
     */
    public function selectRestocking(): static
    {
        $this->selectField("restocking");

        return $this;
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
     * A list of changes that affect this line item.
     */
    public function selectStagedChanges(?ShopifyCalculatedLineItemStagedChangesArgumentsObject $argsObject = null): ShopifyOrderStagedChangeUnionObject
    {
        $object = new ShopifyOrderStagedChangeUnionObject("stagedChanges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The title of the product.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The total price of uneditable lines in shop and presentment currencies.
     */
    public function selectUneditableSubtotalSet(?ShopifyCalculatedLineItemUneditableSubtotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("uneditableSubtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product variant associated with this line item. The value is null for custom line items and items where
     * the variant has been deleted.
     */
    public function selectVariant(?ShopifyCalculatedLineItemVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The title of the variant.
     */
    public function selectVariantTitle(): static
    {
        $this->selectField("variantTitle");

        return $this;
    }
}
