<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionLine";

    public function selectConcatenatedOriginContract(SubscriptionLineConcatenatedOriginContractArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionContractQueryObject("concatenatedOriginContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrentPrice(SubscriptionLineCurrentPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("currentPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomAttributes(SubscriptionLineCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountAllocations(SubscriptionLineDiscountAllocationsArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDiscountAllocationQueryObject("discountAllocations");
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

    public function selectLineDiscountedPrice(SubscriptionLineLineDiscountedPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("lineDiscountedPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPricingPolicy(SubscriptionLinePricingPolicyArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionPricingPolicyQueryObject("pricingPolicy");
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

    public function selectVariantImage(SubscriptionLineVariantImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("variantImage");
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
