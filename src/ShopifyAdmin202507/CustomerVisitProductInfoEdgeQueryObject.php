<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerVisitProductInfoEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerVisitProductInfoEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CustomerVisitProductInfoEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CustomerVisitProductInfoQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
