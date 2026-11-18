<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyContactsDelete` mutation.
 */
class ShopifyCompanyContactsDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactsDeletePayload";

    /**
     * The list of IDs of the deleted company contacts.
     */
    public function selectDeletedCompanyContactIds(): static
    {
        $this->selectField("deletedCompanyContactIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyContactsDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
