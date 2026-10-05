<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductPublicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPublicationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyProductPublicationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductPublicationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
