<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionLine";

    public function selectConcatenatedOriginContract(ShopifySubscriptionLineConcatenatedOriginContractArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractQueryObject("concatenatedOriginContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentPrice(ShopifySubscriptionLineCurrentPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("currentPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomAttributes(ShopifySubscriptionLineCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountAllocations(ShopifySubscriptionLineDiscountAllocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDiscountAllocationQueryObject("discountAllocations");
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

    public function selectLineDiscountedPrice(ShopifySubscriptionLineLineDiscountedPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("lineDiscountedPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPricingPolicy(ShopifySubscriptionLinePricingPolicyArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionPricingPolicyQueryObject("pricingPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductId()
    {
        $this->selectField("productId");

        return $this;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectRequiresShipping()
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    public function selectSellingPlanId()
    {
        $this->selectField("sellingPlanId");

        return $this;
    }

    public function selectSellingPlanName()
    {
        $this->selectField("sellingPlanName");

        return $this;
    }

    public function selectSku()
    {
        $this->selectField("sku");

        return $this;
    }

    public function selectTaxable()
    {
        $this->selectField("taxable");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectVariantId()
    {
        $this->selectField("variantId");

        return $this;
    }

    public function selectVariantImage(ShopifySubscriptionLineVariantImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("variantImage");
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
