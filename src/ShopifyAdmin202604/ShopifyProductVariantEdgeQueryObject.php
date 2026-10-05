<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductVariantEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyProductVariantEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
