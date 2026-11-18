<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyLocationAssignStaffMembers` mutation.
 */
class ShopifyCompanyLocationAssignStaffMembersPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationAssignStaffMembersPayload";

    /**
     * The list of created staff member assignments.
     */
    public function selectCompanyLocationStaffMemberAssignments(?ShopifyCompanyLocationAssignStaffMembersPayloadCompanyLocationStaffMemberAssignmentsArgumentsObject $argsObject = null): ShopifyCompanyLocationStaffMemberAssignmentQueryObject
    {
        $object = new ShopifyCompanyLocationStaffMemberAssignmentQueryObject("companyLocationStaffMemberAssignments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyLocationAssignStaffMembersPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
