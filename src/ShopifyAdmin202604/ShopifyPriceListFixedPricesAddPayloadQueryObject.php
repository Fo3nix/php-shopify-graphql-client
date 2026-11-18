<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `priceListFixedPricesAdd` mutation.
 */
class ShopifyPriceListFixedPricesAddPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListFixedPricesAddPayload";

    /**
     * The list of fixed prices that were added to or updated in the price list.
     */
    public function selectPrices(?ShopifyPriceListFixedPricesAddPayloadPricesArgumentsObject $argsObject = null): ShopifyPriceListPriceQueryObject
    {
        $object = new ShopifyPriceListPriceQueryObject("prices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPriceListFixedPricesAddPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPriceListPriceUserErrorQueryObject
    {
        $object = new ShopifyPriceListPriceUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
