<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductVariantBarcodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantBarcodeConnection";

    public function selectEdges(ShopifyProductVariantBarcodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantBarcodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyProductVariantBarcodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantBarcodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyProductVariantBarcodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
