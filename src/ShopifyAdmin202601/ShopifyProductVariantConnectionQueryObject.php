<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductVariantConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantConnection";

    public function selectEdges(ShopifyProductVariantConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyProductVariantConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyProductVariantConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
