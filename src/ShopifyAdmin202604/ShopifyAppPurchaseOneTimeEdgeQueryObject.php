<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppPurchaseOneTimeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppPurchaseOneTimeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyAppPurchaseOneTimeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppPurchaseOneTimeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
