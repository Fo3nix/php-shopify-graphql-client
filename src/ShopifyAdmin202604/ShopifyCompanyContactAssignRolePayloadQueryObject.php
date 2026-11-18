<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyContactAssignRole` mutation.
 */
class ShopifyCompanyContactAssignRolePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactAssignRolePayload";

    /**
     * The company contact role assignment.
     */
    public function selectCompanyContactRoleAssignment(?ShopifyCompanyContactAssignRolePayloadCompanyContactRoleAssignmentArgumentsObject $argsObject = null): ShopifyCompanyContactRoleAssignmentQueryObject
    {
        $object = new ShopifyCompanyContactRoleAssignmentQueryObject("companyContactRoleAssignment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyContactAssignRolePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
