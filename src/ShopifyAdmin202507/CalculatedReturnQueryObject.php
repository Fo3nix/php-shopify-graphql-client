<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CalculatedReturnQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedReturn";

    public function selectExchangeLineItems(CalculatedReturnExchangeLineItemsArgumentsObject $argsObject = null)
    {
        $object = new CalculatedExchangeLineItemQueryObject("exchangeLineItems");
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

    public function selectReturnLineItems(CalculatedReturnReturnLineItemsArgumentsObject $argsObject = null)
    {
        $object = new CalculatedReturnLineItemQueryObject("returnLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReturnShippingFee(CalculatedReturnReturnShippingFeeArgumentsObject $argsObject = null)
    {
        $object = new CalculatedReturnShippingFeeQueryObject("returnShippingFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
