<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductBundleComponentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ProductBundleComponentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ProductBundleComponentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
