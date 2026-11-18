<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productSet` mutation.
 */
class ShopifyProductSetPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductSetPayload";

    /**
     * The product object.
     */
    public function selectProduct(?ShopifyProductSetPayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product set operation, returned when run in asynchronous mode.
     */
    public function selectProductSetOperation(?ShopifyProductSetPayloadProductSetOperationArgumentsObject $argsObject = null): ShopifyProductSetOperationQueryObject
    {
        $object = new ShopifyProductSetOperationQueryObject("productSetOperation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductSetPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductSetUserErrorQueryObject
    {
        $object = new ShopifyProductSetUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
