<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDraftOrderEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDraftOrderEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
