<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyContactRoleAssignmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRoleAssignmentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCompanyContactRoleAssignmentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactRoleAssignmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
