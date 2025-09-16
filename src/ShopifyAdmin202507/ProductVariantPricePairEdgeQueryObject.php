<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductVariantPricePairEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantPricePairEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ProductVariantPricePairEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantPricePairQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
