<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `giftCardCreate` mutation.
 */
class ShopifyGiftCardCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardCreatePayload";

    /**
     * The created gift card.
     */
    public function selectGiftCard(?ShopifyGiftCardCreatePayloadGiftCardArgumentsObject $argsObject = null): ShopifyGiftCardQueryObject
    {
        $object = new ShopifyGiftCardQueryObject("giftCard");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The created gift card's code.
     */
    public function selectGiftCardCode(): static
    {
        $this->selectField("giftCardCode");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyGiftCardCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyGiftCardUserErrorQueryObject
    {
        $object = new ShopifyGiftCardUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
