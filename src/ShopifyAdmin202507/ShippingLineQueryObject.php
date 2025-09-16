<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShippingLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingLine";

    public function selectCarrierIdentifier()
    {
        $this->selectField("carrierIdentifier");

        return $this;
    }

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectCurrentDiscountedPriceSet(ShippingLineCurrentDiscountedPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("currentDiscountedPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustom()
    {
        $this->selectField("custom");

        return $this;
    }

    public function selectDeliveryCategory()
    {
        $this->selectField("deliveryCategory");

        return $this;
    }

    public function selectDiscountAllocations(ShippingLineDiscountAllocationsArgumentsObject $argsObject = null)
    {
        $object = new DiscountAllocationQueryObject("discountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `discountedPriceSet` instead.
     */
    public function selectDiscountedPrice(ShippingLineDiscountedPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("discountedPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedPriceSet(ShippingLineDiscountedPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedPriceSet");
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

    public function selectIsRemoved()
    {
        $this->selectField("isRemoved");

        return $this;
    }

    /**
     * @deprecated Use `originalPriceSet` instead.
     */
    public function selectOriginalPrice(ShippingLineOriginalPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("originalPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalPriceSet(ShippingLineOriginalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPhone()
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * @deprecated Use `originalPriceSet` instead.
     */
    public function selectPrice()
    {
        $this->selectField("price");

        return $this;
    }

    /**
     * @deprecated requestedFulfillmentService is no longer in use. Order routing does not use the requestedFulfillmentService during order and fulfillment order creation.
     */
    public function selectRequestedFulfillmentService(ShippingLineRequestedFulfillmentServiceArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentServiceQueryObject("requestedFulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingRateHandle()
    {
        $this->selectField("shippingRateHandle");

        return $this;
    }

    public function selectSource()
    {
        $this->selectField("source");

        return $this;
    }

    public function selectTaxLines(ShippingLineTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new TaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
