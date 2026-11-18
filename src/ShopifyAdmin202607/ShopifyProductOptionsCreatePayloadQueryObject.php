<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productOptionsCreate` mutation.
 */
class ShopifyProductOptionsCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductOptionsCreatePayload";

    /**
     * The updated product object.
     */
    public function selectProduct(?ShopifyProductOptionsCreatePayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
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
    public function selectUserErrors(?ShopifyProductOptionsCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductOptionsCreateUserErrorQueryObject
    {
        $object = new ShopifyProductOptionsCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
