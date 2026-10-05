<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyContactRoleAssignmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRoleAssignmentConnection";

    public function selectEdges(ShopifyCompanyContactRoleAssignmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactRoleAssignmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCompanyContactRoleAssignmentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactRoleAssignmentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCompanyContactRoleAssignmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
