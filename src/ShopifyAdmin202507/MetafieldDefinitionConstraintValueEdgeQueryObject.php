<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldDefinitionConstraintValueEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConstraintValueEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(MetafieldDefinitionConstraintValueEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConstraintValueQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
