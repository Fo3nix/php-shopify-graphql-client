<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductVariantConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantConnection";

    public function selectEdges(ProductVariantConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ProductVariantConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ProductVariantConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
