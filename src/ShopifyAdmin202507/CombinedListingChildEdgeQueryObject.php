<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CombinedListingChildEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CombinedListingChildEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CombinedListingChildEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CombinedListingChildQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
