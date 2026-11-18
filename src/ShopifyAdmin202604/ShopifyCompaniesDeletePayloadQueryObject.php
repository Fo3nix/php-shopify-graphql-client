<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companiesDelete` mutation.
 */
class ShopifyCompaniesDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompaniesDeletePayload";

    /**
     * A list of IDs of the deleted companies.
     */
    public function selectDeletedCompanyIds(): static
    {
        $this->selectField("deletedCompanyIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompaniesDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
