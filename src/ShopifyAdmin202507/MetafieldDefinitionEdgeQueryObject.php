<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(MetafieldDefinitionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
