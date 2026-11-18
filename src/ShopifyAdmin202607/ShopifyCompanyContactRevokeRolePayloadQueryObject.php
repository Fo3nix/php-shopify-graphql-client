<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyContactRevokeRole` mutation.
 */
class ShopifyCompanyContactRevokeRolePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRevokeRolePayload";

    /**
     * The role assignment that was revoked.
     */
    public function selectRevokedCompanyContactRoleAssignmentId(): static
    {
        $this->selectField("revokedCompanyContactRoleAssignmentId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyContactRevokeRolePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
