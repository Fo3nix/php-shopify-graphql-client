<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `priceListUpdate` mutation.
 */
class ShopifyPriceListUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListUpdatePayload";

    /**
     * The updated price list.
     */
    public function selectPriceList(?ShopifyPriceListUpdatePayloadPriceListArgumentsObject $argsObject = null): ShopifyPriceListQueryObject
    {
        $object = new ShopifyPriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPriceListUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPriceListUserErrorQueryObject
    {
        $object = new ShopifyPriceListUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
