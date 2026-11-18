<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `giftCardProductSet` mutation.
 */
class ShopifyGiftCardProductSetPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardProductSetPayload";

    /**
     * The gift card product object.
     */
    public function selectProduct(?ShopifyGiftCardProductSetPayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
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
    public function selectProductSetOperation(?ShopifyGiftCardProductSetPayloadProductSetOperationArgumentsObject $argsObject = null): ShopifyProductSetOperationQueryObject
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
    public function selectUserErrors(?ShopifyGiftCardProductSetPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyGiftCardProductSetUserErrorQueryObject
    {
        $object = new ShopifyGiftCardProductSetUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
