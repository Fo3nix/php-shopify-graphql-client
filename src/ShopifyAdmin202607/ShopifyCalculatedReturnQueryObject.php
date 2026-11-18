<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A calculated return.
 */
class ShopifyCalculatedReturnQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedReturn";

    /**
     * A list of calculated exchange line items.
     */
    public function selectExchangeLineItems(?ShopifyCalculatedReturnExchangeLineItemsArgumentsObject $argsObject = null): ShopifyCalculatedExchangeLineItemQueryObject
    {
        $object = new ShopifyCalculatedExchangeLineItemQueryObject("exchangeLineItems");
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
     * A list of calculated return line items.
     */
    public function selectReturnLineItems(?ShopifyCalculatedReturnReturnLineItemsArgumentsObject $argsObject = null): ShopifyCalculatedReturnLineItemQueryObject
    {
        $object = new ShopifyCalculatedReturnLineItemQueryObject("returnLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The calculated return shipping fee.
     */
    public function selectReturnShippingFee(?ShopifyCalculatedReturnReturnShippingFeeArgumentsObject $argsObject = null): ShopifyCalculatedReturnShippingFeeQueryObject
    {
        $object = new ShopifyCalculatedReturnShippingFeeQueryObject("returnShippingFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
