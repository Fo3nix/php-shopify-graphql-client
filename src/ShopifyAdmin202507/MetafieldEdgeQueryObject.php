<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(MetafieldEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
