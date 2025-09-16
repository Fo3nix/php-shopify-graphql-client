<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AbandonedCheckoutLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutLineItem";

    public function selectComponents(AbandonedCheckoutLineItemComponentsArgumentsObject $argsObject = null)
    {
        $object = new AbandonedCheckoutLineItemComponentQueryObject("components");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomAttributes(AbandonedCheckoutLineItemCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountAllocations(AbandonedCheckoutLineItemDiscountAllocationsArgumentsObject $argsObject = null)
    {
        $object = new DiscountAllocationConnectionQueryObject("discountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedTotalPriceSet(AbandonedCheckoutLineItemDiscountedTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedTotalPriceWithCodeDiscount(AbandonedCheckoutLineItemDiscountedTotalPriceWithCodeDiscountArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedTotalPriceWithCodeDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedUnitPriceSet(AbandonedCheckoutLineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedUnitPriceWithCodeDiscount(AbandonedCheckoutLineItemDiscountedUnitPriceWithCodeDiscountArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedUnitPriceWithCodeDiscount");
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

    public function selectImage(AbandonedCheckoutLineItemImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalTotalPriceSet(AbandonedCheckoutLineItemOriginalTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalTotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalUnitPriceSet(AbandonedCheckoutLineItemOriginalUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(AbandonedCheckoutLineItemProductArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("product");
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

    public function selectVariant(AbandonedCheckoutLineItemVariantArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("variant");
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
