<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReturnableFulfillmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ReturnableFulfillmentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ReturnableFulfillmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
