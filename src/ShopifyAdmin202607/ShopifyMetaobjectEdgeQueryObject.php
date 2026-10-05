<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMetaobjectEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
