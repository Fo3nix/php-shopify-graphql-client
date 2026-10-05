<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyLocationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationConnection";

    public function selectEdges(ShopifyCompanyLocationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCompanyLocationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCompanyLocationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
