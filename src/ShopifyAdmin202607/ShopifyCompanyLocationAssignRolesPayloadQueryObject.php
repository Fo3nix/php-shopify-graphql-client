<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyLocationAssignRoles` mutation.
 */
class ShopifyCompanyLocationAssignRolesPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationAssignRolesPayload";

    /**
     * A list of newly created assignments of company contacts to a company location.
     */
    public function selectRoleAssignments(?ShopifyCompanyLocationAssignRolesPayloadRoleAssignmentsArgumentsObject $argsObject = null): ShopifyCompanyContactRoleAssignmentQueryObject
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
    public function selectUserErrors(?ShopifyCompanyLocationAssignRolesPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
