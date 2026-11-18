<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketDelete` mutation.
 */
class ShopifyMarketDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketDeletePayload";

    /**
     * The ID of the deleted market.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMarketDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMarketUserErrorQueryObject
    {
        $object = new ShopifyMarketUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
