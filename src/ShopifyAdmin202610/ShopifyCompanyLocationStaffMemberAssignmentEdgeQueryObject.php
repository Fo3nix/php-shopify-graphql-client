<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyLocationStaffMemberAssignmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationStaffMemberAssignmentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCompanyLocationStaffMemberAssignmentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationStaffMemberAssignmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
