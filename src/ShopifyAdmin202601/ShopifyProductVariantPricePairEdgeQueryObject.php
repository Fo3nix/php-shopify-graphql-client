<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductVariantPricePairEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantPricePairEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyProductVariantPricePairEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantPricePairQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
