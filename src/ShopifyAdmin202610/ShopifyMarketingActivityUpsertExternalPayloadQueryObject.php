<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketingActivityUpsertExternal` mutation.
 */
class ShopifyMarketingActivityUpsertExternalPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityUpsertExternalPayload";

    /**
     * The external marketing activity that was created or updated.
     */
    public function selectMarketingActivity(?ShopifyMarketingActivityUpsertExternalPayloadMarketingActivityArgumentsObject $argsObject = null): ShopifyMarketingActivityQueryObject
    {
        $object = new ShopifyMarketingActivityQueryObject("marketingActivity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMarketingActivityUpsertExternalPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMarketingActivityUserErrorQueryObject
    {
        $object = new ShopifyMarketingActivityUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
