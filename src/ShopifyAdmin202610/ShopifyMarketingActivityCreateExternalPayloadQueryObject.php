<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketingActivityCreateExternal` mutation.
 */
class ShopifyMarketingActivityCreateExternalPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityCreateExternalPayload";

    /**
     * The external marketing activity that was created.
     */
    public function selectMarketingActivity(?ShopifyMarketingActivityCreateExternalPayloadMarketingActivityArgumentsObject $argsObject = null): ShopifyMarketingActivityQueryObject
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
    public function selectUserErrors(?ShopifyMarketingActivityCreateExternalPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMarketingActivityUserErrorQueryObject
    {
        $object = new ShopifyMarketingActivityUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
