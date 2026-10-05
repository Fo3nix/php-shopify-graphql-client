<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnableFulfillmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyReturnableFulfillmentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnableFulfillmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
