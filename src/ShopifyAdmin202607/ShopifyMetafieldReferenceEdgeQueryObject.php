<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldReferenceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldReferenceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMetafieldReferenceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldReferenceUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
