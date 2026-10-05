<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyResourcePublicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublicationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyResourcePublicationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
