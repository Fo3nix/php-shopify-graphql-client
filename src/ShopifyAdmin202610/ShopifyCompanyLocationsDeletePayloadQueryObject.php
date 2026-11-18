<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyLocationsDelete` mutation.
 */
class ShopifyCompanyLocationsDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationsDeletePayload";

    /**
     * A list of IDs of the deleted company locations.
     */
    public function selectDeletedCompanyLocationIds(): static
    {
        $this->selectField("deletedCompanyLocationIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyLocationsDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
