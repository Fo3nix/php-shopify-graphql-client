<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyAddressDelete` mutation.
 */
class ShopifyCompanyAddressDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyAddressDeletePayload";

    /**
     * The ID of the deleted address.
     */
    public function selectDeletedAddressId(): static
    {
        $this->selectField("deletedAddressId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyAddressDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
