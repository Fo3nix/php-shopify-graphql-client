<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyLocationRemoveStaffMembers` mutation.
 */
class ShopifyCompanyLocationRemoveStaffMembersPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationRemoveStaffMembersPayload";

    /**
     * The list of IDs of the deleted staff member assignment.
     */
    public function selectDeletedCompanyLocationStaffMemberAssignmentIds(): static
    {
        $this->selectField("deletedCompanyLocationStaffMemberAssignmentIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyLocationRemoveStaffMembersPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
