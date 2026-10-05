<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductVariantComponentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantComponentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyProductVariantComponentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantComponentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
