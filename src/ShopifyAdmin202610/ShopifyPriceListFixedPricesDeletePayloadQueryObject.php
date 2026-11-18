<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `priceListFixedPricesDelete` mutation.
 */
class ShopifyPriceListFixedPricesDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListFixedPricesDeletePayload";

    /**
     * A list of product variant IDs whose fixed prices were removed from the price list.
     */
    public function selectDeletedFixedPriceVariantIds(): static
    {
        $this->selectField("deletedFixedPriceVariantIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPriceListFixedPricesDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPriceListPriceUserErrorQueryObject
    {
        $object = new ShopifyPriceListPriceUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
