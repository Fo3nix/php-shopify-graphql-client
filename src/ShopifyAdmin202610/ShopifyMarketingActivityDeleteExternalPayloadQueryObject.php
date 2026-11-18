<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketingActivityDeleteExternal` mutation.
 */
class ShopifyMarketingActivityDeleteExternalPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityDeleteExternalPayload";

    /**
     * The ID of the marketing activity that was deleted, if one was deleted.
     */
    public function selectDeletedMarketingActivityId(): static
    {
        $this->selectField("deletedMarketingActivityId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMarketingActivityDeleteExternalPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMarketingActivityUserErrorQueryObject
    {
        $object = new ShopifyMarketingActivityUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
