<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyLocationStaffMemberAssignmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationStaffMemberAssignmentConnection";

    public function selectEdges(ShopifyCompanyLocationStaffMemberAssignmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationStaffMemberAssignmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCompanyLocationStaffMemberAssignmentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationStaffMemberAssignmentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCompanyLocationStaffMemberAssignmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
