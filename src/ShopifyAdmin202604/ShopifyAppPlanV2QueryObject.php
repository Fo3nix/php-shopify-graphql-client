<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Contains the pricing details for the app plan that a merchant has subscribed to within their current billing arrangement.
 *
 * This simplified object focuses on the essential pricing information merchants need to understand their current subscription costs and billing structure.
 *
 * Details about subscription management and pricing strategies are available in the [app billing documentation](https://shopify.dev/docs/apps/launch/billing).
 */
class ShopifyAppPlanV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "AppPlanV2";

    /**
     * The plan billed to a shop on a recurring basis.
     */
    public function selectPricingDetails(?ShopifyAppPlanV2PricingDetailsArgumentsObject $argsObject = null): ShopifyAppPricingDetailsUnionObject
    {
        $object = new ShopifyAppPricingDetailsUnionObject("pricingDetails");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
