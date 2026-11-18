<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketCurrencySettingsUpdate` mutation.
 */
class ShopifyMarketCurrencySettingsUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketCurrencySettingsUpdatePayload";

    /**
     * The market object.
     *
     * @deprecated Use `marketCreate` and `marketUpdate` mutations instead.
     */
    public function selectMarket(?ShopifyMarketCurrencySettingsUpdatePayloadMarketArgumentsObject $argsObject = null): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMarketCurrencySettingsUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMarketCurrencySettingsUserErrorQueryObject
    {
        $object = new ShopifyMarketCurrencySettingsUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
