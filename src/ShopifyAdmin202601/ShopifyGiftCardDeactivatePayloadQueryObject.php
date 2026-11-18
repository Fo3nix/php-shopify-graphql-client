<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `giftCardDeactivate` mutation.
 */
class ShopifyGiftCardDeactivatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardDeactivatePayload";

    /**
     * The deactivated gift card.
     */
    public function selectGiftCard(?ShopifyGiftCardDeactivatePayloadGiftCardArgumentsObject $argsObject = null): ShopifyGiftCardQueryObject
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
    public function selectUserErrors(?ShopifyGiftCardDeactivatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyGiftCardDeactivateUserErrorQueryObject
    {
        $object = new ShopifyGiftCardDeactivateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
