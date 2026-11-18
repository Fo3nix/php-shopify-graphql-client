<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketUpdate` mutation.
 */
class ShopifyMarketUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketUpdatePayload";

    /**
     * The market object.
     */
    public function selectMarket(?ShopifyMarketUpdatePayloadMarketArgumentsObject $argsObject = null): ShopifyMarketQueryObject
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
    public function selectUserErrors(?ShopifyMarketUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMarketUserErrorQueryObject
    {
        $object = new ShopifyMarketUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
