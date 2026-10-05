<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAbandonedCheckoutLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutLineItem";

    public function selectComponents(ShopifyAbandonedCheckoutLineItemComponentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonedCheckoutLineItemComponentQueryObject("components");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomAttributes(ShopifyAbandonedCheckoutLineItemCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountAllocations(ShopifyAbandonedCheckoutLineItemDiscountAllocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAllocationConnectionQueryObject("discountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedTotalPriceSet(ShopifyAbandonedCheckoutLineItemDiscountedTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedTotalPriceWithCodeDiscount(ShopifyAbandonedCheckoutLineItemDiscountedTotalPriceWithCodeDiscountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedTotalPriceWithCodeDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedUnitPriceSet(ShopifyAbandonedCheckoutLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedUnitPriceWithCodeDiscount(ShopifyAbandonedCheckoutLineItemDiscountedUnitPriceWithCodeDiscountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceWithCodeDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectImage(ShopifyAbandonedCheckoutLineItemImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalTotalPriceSet(ShopifyAbandonedCheckoutLineItemOriginalTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalUnitPriceSet(ShopifyAbandonedCheckoutLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParentRelationship(ShopifyAbandonedCheckoutLineItemParentRelationshipArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonedCheckoutLineItemParentRelationshipQueryObject("parentRelationship");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(ShopifyAbandonedCheckoutLineItemProductArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectSku()
    {
        $this->selectField("sku");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectVariant(ShopifyAbandonedCheckoutLineItemVariantArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariantTitle()
    {
        $this->selectField("variantTitle");

        return $this;
    }
}
