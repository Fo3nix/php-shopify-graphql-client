<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketRegionsDelete` mutation.
 */
class ShopifyMarketRegionsDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRegionsDeletePayload";

    /**
     * The ID of the deleted market region.
     */
    public function selectDeletedIds(): static
    {
        $this->selectField("deletedIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMarketRegionsDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMarketUserErrorQueryObject
    {
        $object = new ShopifyMarketUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
