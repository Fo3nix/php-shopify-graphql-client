<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectDefinitionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(MetaobjectDefinitionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectDefinitionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
