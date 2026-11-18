<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyContactAssignRoles` mutation.
 */
class ShopifyCompanyContactAssignRolesPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactAssignRolesPayload";

    /**
     * A list of newly created assignments of company contacts to a company location.
     */
    public function selectRoleAssignments(?ShopifyCompanyContactAssignRolesPayloadRoleAssignmentsArgumentsObject $argsObject = null): ShopifyCompanyContactRoleAssignmentQueryObject
    {
        $object = new ShopifyCompanyContactRoleAssignmentQueryObject("roleAssignments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyContactAssignRolesPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
