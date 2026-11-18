<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `marketingEngagementCreate` mutation.
 */
class ShopifyMarketingEngagementCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingEngagementCreatePayload";

    /**
     * The marketing engagement that was created. This represents customer activity taken on a marketing activity.
     */
    public function selectMarketingEngagement(?ShopifyMarketingEngagementCreatePayloadMarketingEngagementArgumentsObject $argsObject = null): ShopifyMarketingEngagementQueryObject
    {
        $object = new ShopifyMarketingEngagementQueryObject("marketingEngagement");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMarketingEngagementCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMarketingActivityUserErrorQueryObject
    {
        $object = new ShopifyMarketingActivityUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
