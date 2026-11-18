<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerDelete` mutation.
 */
class ShopifyCustomerDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerDeletePayload";

    /**
     * The ID of the deleted customer.
     */
    public function selectDeletedCustomerId(): static
    {
        $this->selectField("deletedCustomerId");

        return $this;
    }

    /**
     * The shop of the deleted customer.
     */
    public function selectShop(?ShopifyCustomerDeletePayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject("shop");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
