<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductVariantPricePairConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantPricePairConnection";

    public function selectEdges(ShopifyProductVariantPricePairConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantPricePairEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyProductVariantPricePairConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantPricePairQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyProductVariantPricePairConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
