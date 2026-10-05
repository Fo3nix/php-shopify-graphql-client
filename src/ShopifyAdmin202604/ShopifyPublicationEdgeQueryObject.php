<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPublicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PublicationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyPublicationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPublicationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
