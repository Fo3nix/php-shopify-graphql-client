<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyBulkOperationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "BulkOperationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyBulkOperationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyBulkOperationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
