<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRequestedOrderEditLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditLineItem";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLineItem(ShopifyRequestedOrderEditLineItemLineItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
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

    public function selectResolvedQuantity()
    {
        $this->selectField("resolvedQuantity");

        return $this;
    }
}
