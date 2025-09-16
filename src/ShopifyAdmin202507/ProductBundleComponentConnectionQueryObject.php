<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductBundleComponentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentConnection";

    public function selectEdges(ProductBundleComponentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ProductBundleComponentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ProductBundleComponentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ProductBundleComponentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ProductBundleComponentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
