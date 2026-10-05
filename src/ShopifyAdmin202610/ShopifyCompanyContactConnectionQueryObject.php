<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyContactConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactConnection";

    public function selectEdges(ShopifyCompanyContactConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCompanyContactConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCompanyContactConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
