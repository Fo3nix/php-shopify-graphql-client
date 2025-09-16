<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DraftOrderLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(DraftOrderLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
