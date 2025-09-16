<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CompanyContactRoleAssignmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRoleAssignmentConnection";

    public function selectEdges(CompanyContactRoleAssignmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactRoleAssignmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(CompanyContactRoleAssignmentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactRoleAssignmentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CompanyContactRoleAssignmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
