<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyLocationDelete` mutation.
 */
class ShopifyCompanyLocationDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationDeletePayload";

    /**
     * The ID of the deleted company location.
     */
    public function selectDeletedCompanyLocationId(): static
    {
        $this->selectField("deletedCompanyLocationId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyLocationDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
