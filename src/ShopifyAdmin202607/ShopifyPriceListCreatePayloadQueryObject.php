<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `priceListCreate` mutation.
 */
class ShopifyPriceListCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListCreatePayload";

    /**
     * The newly created price list.
     */
    public function selectPriceList(?ShopifyPriceListCreatePayloadPriceListArgumentsObject $argsObject = null): ShopifyPriceListQueryObject
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
    public function selectUserErrors(?ShopifyPriceListCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPriceListUserErrorQueryObject
    {
        $object = new ShopifyPriceListUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
