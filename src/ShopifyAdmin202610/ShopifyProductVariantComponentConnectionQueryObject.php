<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductVariantComponentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantComponentConnection";

    public function selectEdges(ShopifyProductVariantComponentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantComponentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyProductVariantComponentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantComponentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyProductVariantComponentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
