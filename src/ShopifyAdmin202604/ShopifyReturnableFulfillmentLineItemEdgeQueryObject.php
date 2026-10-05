<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnableFulfillmentLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyReturnableFulfillmentLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnableFulfillmentLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
