<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketLocalizationsRegister` mutation.
 */
class ShopifyMarketLocalizationsRegisterPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalizationsRegisterPayload";

    /**
     * The market localizations that were created or updated.
     */
    public function selectMarketLocalizations(?ShopifyMarketLocalizationsRegisterPayloadMarketLocalizationsArgumentsObject $argsObject = null): ShopifyMarketLocalizationQueryObject
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
    public function selectUserErrors(?ShopifyMarketLocalizationsRegisterPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyTranslationUserErrorQueryObject
    {
        $object = new ShopifyTranslationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
