<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductComponentTypeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductComponentTypeConnection";

    public function selectEdges(ProductComponentTypeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ProductComponentTypeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ProductComponentTypeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ProductComponentTypeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ProductComponentTypeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
