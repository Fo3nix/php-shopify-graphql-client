<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyLocationRevokeRoles` mutation.
 */
class ShopifyCompanyLocationRevokeRolesPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationRevokeRolesPayload";

    /**
     * A list of role assignment IDs that were removed from the company location.
     */
    public function selectRevokedRoleAssignmentIds(): static
    {
        $this->selectField("revokedRoleAssignmentIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyLocationRevokeRolesPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
