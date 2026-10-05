<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductBundleComponentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentConnection";

    public function selectEdges(ShopifyProductBundleComponentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductBundleComponentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyProductBundleComponentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductBundleComponentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyProductBundleComponentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
