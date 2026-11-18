<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `priceListDelete` mutation.
 */
class ShopifyPriceListDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListDeletePayload";

    /**
     * The ID of the deleted price list.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPriceListDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPriceListUserErrorQueryObject
    {
        $object = new ShopifyPriceListUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
