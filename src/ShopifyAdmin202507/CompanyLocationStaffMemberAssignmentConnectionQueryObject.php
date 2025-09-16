<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CompanyLocationStaffMemberAssignmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationStaffMemberAssignmentConnection";

    public function selectEdges(CompanyLocationStaffMemberAssignmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationStaffMemberAssignmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(CompanyLocationStaffMemberAssignmentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationStaffMemberAssignmentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CompanyLocationStaffMemberAssignmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
