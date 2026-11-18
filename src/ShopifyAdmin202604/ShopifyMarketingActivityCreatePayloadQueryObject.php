<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketingActivityCreate` mutation.
 */
class ShopifyMarketingActivityCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityCreatePayload";

    /**
     * The created marketing activity.
     *
     * @deprecated Marketing activity app extensions are deprecated and will be removed in the near future.
     */
    public function selectMarketingActivity(?ShopifyMarketingActivityCreatePayloadMarketingActivityArgumentsObject $argsObject = null): ShopifyMarketingActivityQueryObject
    {
        $object = new ShopifyMarketingActivityQueryObject("marketingActivity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The path to return back to shopify admin from embedded editor.
     *
     * @deprecated Marketing activity app extensions are deprecated and will be removed in the near future.
     */
    public function selectRedirectPath(): static
    {
        $this->selectField("redirectPath");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMarketingActivityCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
