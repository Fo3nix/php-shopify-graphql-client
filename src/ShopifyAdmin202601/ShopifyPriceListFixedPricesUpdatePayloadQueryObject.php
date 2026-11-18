<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `priceListFixedPricesUpdate` mutation.
 */
class ShopifyPriceListFixedPricesUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListFixedPricesUpdatePayload";

    /**
     * A list of deleted variant IDs for prices.
     */
    public function selectDeletedFixedPriceVariantIds(): static
    {
        $this->selectField("deletedFixedPriceVariantIds");

        return $this;
    }

    /**
     * The price list for which the fixed prices were modified.
     */
    public function selectPriceList(?ShopifyPriceListFixedPricesUpdatePayloadPriceListArgumentsObject $argsObject = null): ShopifyPriceListQueryObject
    {
        $object = new ShopifyPriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The prices that were added to the price list.
     */
    public function selectPricesAdded(?ShopifyPriceListFixedPricesUpdatePayloadPricesAddedArgumentsObject $argsObject = null): ShopifyPriceListPriceQueryObject
    {
        $object = new ShopifyPriceListPriceQueryObject("pricesAdded");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPriceListFixedPricesUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPriceListPriceUserErrorQueryObject
    {
        $object = new ShopifyPriceListPriceUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
