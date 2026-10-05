<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyContactRoleConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRoleConnection";

    public function selectEdges(ShopifyCompanyContactRoleConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactRoleEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCompanyContactRoleConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactRoleQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCompanyContactRoleConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
