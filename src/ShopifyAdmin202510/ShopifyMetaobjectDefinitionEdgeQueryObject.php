<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectDefinitionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMetaobjectDefinitionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectDefinitionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
