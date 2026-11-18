<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketingActivityUpdate` mutation.
 */
class ShopifyMarketingActivityUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityUpdatePayload";

    /**
     * The updated marketing activity.
     */
    public function selectMarketingActivity(?ShopifyMarketingActivityUpdatePayloadMarketingActivityArgumentsObject $argsObject = null): ShopifyMarketingActivityQueryObject
    {
        $object = new ShopifyMarketingActivityQueryObject("marketingActivity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The redirect path from the embedded editor to the Shopify admin.
     */
    public function selectRedirectPath(): static
    {
        $this->selectField("redirectPath");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMarketingActivityUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
