<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldDefinitionConstraintValueEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConstraintValueEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMetafieldDefinitionConstraintValueEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConstraintValueQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
