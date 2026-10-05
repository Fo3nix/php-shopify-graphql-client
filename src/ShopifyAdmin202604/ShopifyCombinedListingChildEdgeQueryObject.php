<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCombinedListingChildEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CombinedListingChildEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCombinedListingChildEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCombinedListingChildQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
