<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReturnableFulfillmentLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ReturnableFulfillmentLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ReturnableFulfillmentLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
