<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ExchangeV2LineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2LineItem";

    public function selectCustomAttributes(ExchangeV2LineItemCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedTotalSet(ExchangeV2LineItemDiscountedTotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDiscountedUnitPriceSet(ExchangeV2LineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillmentService(ExchangeV2LineItemFulfillmentServiceArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGiftCard()
    {
        $this->selectField("giftCard");

        return $this;
    }

    public function selectGiftCards(ExchangeV2LineItemGiftCardsArgumentsObject $argsObject = null)
    {
        $object = new GiftCardQueryObject("giftCards");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectIsGiftCard()
    {
        $this->selectField("isGiftCard");

        return $this;
    }

    public function selectLineItem(ExchangeV2LineItemLineItemArgumentsObject $argsObject = null)
    {
        $object = new LineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectOriginalTotalSet(ExchangeV2LineItemOriginalTotalSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalUnitPriceSet(ExchangeV2LineItemOriginalUnitPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("originalUnitPriceSet");
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

    public function selectRequiresShipping()
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    public function selectSku()
    {
        $this->selectField("sku");

        return $this;
    }

    public function selectTaxLines(ExchangeV2LineItemTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new TaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectVariant(ExchangeV2LineItemVariantArgumentsObject $argsObject = null)
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

    public function selectVendor()
    {
        $this->selectField("vendor");

        return $this;
    }
}
