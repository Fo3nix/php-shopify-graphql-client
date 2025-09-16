<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CompanyLocationStaffMemberAssignmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationStaffMemberAssignmentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CompanyLocationStaffMemberAssignmentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationStaffMemberAssignmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
