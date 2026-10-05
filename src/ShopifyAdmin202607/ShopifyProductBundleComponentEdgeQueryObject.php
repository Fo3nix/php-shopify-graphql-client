<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductBundleComponentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyProductBundleComponentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductBundleComponentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
