<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseFulfillmentOrderLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyReverseFulfillmentOrderLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
