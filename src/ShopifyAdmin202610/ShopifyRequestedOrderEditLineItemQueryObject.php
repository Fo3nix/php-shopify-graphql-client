<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A line item included in a buyer-initiated requested order edit.
 */
class ShopifyRequestedOrderEditLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditLineItem";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The order line item associated with this requested order edit line item.
     */
    public function selectLineItem(?ShopifyRequestedOrderEditLineItemLineItemArgumentsObject $argsObject = null): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity requested for this line item in the requested order edit.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The quantity of the requested line item that has been resolved.
     */
    public function selectResolvedQuantity(): static
    {
        $this->selectField("resolvedQuantity");

        return $this;
    }
}
