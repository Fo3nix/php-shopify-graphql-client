<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `giftCardUpdate` mutation.
 */
class ShopifyGiftCardUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardUpdatePayload";

    /**
     * The updated gift card.
     */
    public function selectGiftCard(?ShopifyGiftCardUpdatePayloadGiftCardArgumentsObject $argsObject = null): ShopifyGiftCardQueryObject
    {
        $object = new ShopifyGiftCardQueryObject("giftCard");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyGiftCardUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
