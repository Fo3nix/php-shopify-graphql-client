<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductVariantComponentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantComponentConnection";

    public function selectEdges(ProductVariantComponentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantComponentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ProductVariantComponentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantComponentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ProductVariantComponentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
