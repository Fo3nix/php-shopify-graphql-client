<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductVariantPricePairConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantPricePairConnection";

    public function selectEdges(ProductVariantPricePairConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantPricePairEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ProductVariantPricePairConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantPricePairQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ProductVariantPricePairConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
