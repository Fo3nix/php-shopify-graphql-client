<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketLocalizationsRemove` mutation.
 */
class ShopifyMarketLocalizationsRemovePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalizationsRemovePayload";

    /**
     * The market localizations that were deleted.
     */
    public function selectMarketLocalizations(?ShopifyMarketLocalizationsRemovePayloadMarketLocalizationsArgumentsObject $argsObject = null): ShopifyMarketLocalizationQueryObject
    {
        $object = new ShopifyMarketLocalizationQueryObject("marketLocalizations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMarketLocalizationsRemovePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyTranslationUserErrorQueryObject
    {
        $object = new ShopifyTranslationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
