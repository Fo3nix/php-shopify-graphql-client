<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseFulfillmentOrderEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyReverseFulfillmentOrderEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
