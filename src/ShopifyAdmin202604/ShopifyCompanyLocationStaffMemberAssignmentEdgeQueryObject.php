<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CompanyLocationStaffMemberAssignment and a cursor during pagination.
 */
class ShopifyCompanyLocationStaffMemberAssignmentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationStaffMemberAssignmentEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CompanyLocationStaffMemberAssignmentEdge.
     */
    public function selectNode(?ShopifyCompanyLocationStaffMemberAssignmentEdgeNodeArgumentsObject $argsObject = null): ShopifyCompanyLocationStaffMemberAssignmentQueryObject
    {
        $object = new ShopifyCompanyLocationStaffMemberAssignmentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
