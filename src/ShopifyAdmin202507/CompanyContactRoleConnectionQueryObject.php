<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CompanyContactRoleConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRoleConnection";

    public function selectEdges(CompanyContactRoleConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactRoleEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(CompanyContactRoleConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactRoleQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CompanyContactRoleConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
