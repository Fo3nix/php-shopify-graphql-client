<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productOptionsDelete` mutation.
 */
class ShopifyProductOptionsDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductOptionsDeletePayload";

    /**
     * IDs of the options deleted.
     */
    public function selectDeletedOptionsIds(): static
    {
        $this->selectField("deletedOptionsIds");

        return $this;
    }

    /**
     * The updated product object.
     */
    public function selectProduct(?ShopifyProductOptionsDeletePayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductOptionsDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductOptionsDeleteUserErrorQueryObject
    {
        $object = new ShopifyProductOptionsDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
