<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketingActivityUpdateExternal` mutation.
 */
class ShopifyMarketingActivityUpdateExternalPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityUpdateExternalPayload";

    /**
     * The updated marketing activity.
     */
    public function selectMarketingActivity(?ShopifyMarketingActivityUpdateExternalPayloadMarketingActivityArgumentsObject $argsObject = null): ShopifyMarketingActivityQueryObject
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
    public function selectUserErrors(?ShopifyMarketingActivityUpdateExternalPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMarketingActivityUserErrorQueryObject
    {
        $object = new ShopifyMarketingActivityUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
