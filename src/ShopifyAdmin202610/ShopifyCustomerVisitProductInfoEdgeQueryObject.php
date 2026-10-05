<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerVisitProductInfoEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerVisitProductInfoEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCustomerVisitProductInfoEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerVisitProductInfoQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
