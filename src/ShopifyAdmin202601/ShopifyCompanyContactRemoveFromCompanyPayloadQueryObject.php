<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyContactRemoveFromCompany` mutation.
 */
class ShopifyCompanyContactRemoveFromCompanyPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRemoveFromCompanyPayload";

    /**
     * The ID of the removed company contact.
     */
    public function selectRemovedCompanyContactId(): static
    {
        $this->selectField("removedCompanyContactId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyContactRemoveFromCompanyPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
