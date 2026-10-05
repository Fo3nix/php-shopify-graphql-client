<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyFulfillmentOrderEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
