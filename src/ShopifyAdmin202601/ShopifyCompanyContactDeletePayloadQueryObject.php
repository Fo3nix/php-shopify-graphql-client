<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyContactDelete` mutation.
 */
class ShopifyCompanyContactDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactDeletePayload";

    /**
     * The ID of the deleted company contact.
     */
    public function selectDeletedCompanyContactId(): static
    {
        $this->selectField("deletedCompanyContactId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyContactDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
