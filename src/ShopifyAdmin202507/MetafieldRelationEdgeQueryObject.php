<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldRelationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldRelationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(MetafieldRelationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new MetafieldRelationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
