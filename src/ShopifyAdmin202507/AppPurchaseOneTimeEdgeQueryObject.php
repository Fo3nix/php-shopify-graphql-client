<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppPurchaseOneTimeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppPurchaseOneTimeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(AppPurchaseOneTimeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new AppPurchaseOneTimeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
