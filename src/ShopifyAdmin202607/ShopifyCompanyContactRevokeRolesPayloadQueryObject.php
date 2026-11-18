<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyContactRevokeRoles` mutation.
 */
class ShopifyCompanyContactRevokeRolesPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRevokeRolesPayload";

    /**
     * A list of role assignment IDs that were removed from the company contact.
     */
    public function selectRevokedRoleAssignmentIds(): static
    {
        $this->selectField("revokedRoleAssignmentIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyContactRevokeRolesPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
