<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyDelete` mutation.
 */
class ShopifyCompanyDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyDeletePayload";

    /**
     * The ID of the deleted company.
     */
    public function selectDeletedCompanyId(): static
    {
        $this->selectField("deletedCompanyId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
