<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCalculatedReturnQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedReturn";

    public function selectExchangeLineItems(ShopifyCalculatedReturnExchangeLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCalculatedExchangeLineItemQueryObject("exchangeLineItems");
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

    public function selectReturnLineItems(ShopifyCalculatedReturnReturnLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCalculatedReturnLineItemQueryObject("returnLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturnShippingFee(ShopifyCalculatedReturnReturnShippingFeeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCalculatedReturnShippingFeeQueryObject("returnShippingFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
