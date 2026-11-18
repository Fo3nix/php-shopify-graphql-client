<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Provides access to the cart transform feature configuration for the merchant's store. This wrapper object indicates whether cart transformation capabilities are enabled and what operations are available.
 *
 * For example, when checking if your app can deploy customized bundle features, you would query this object to confirm cart transforms are supported and review the eligible operations.
 *
 * The feature configuration helps apps determine compatibility before attempting to create transform functions.
 *
 * Learn more about [cart transformation](https://shopify.dev/docs/api/admin-graphql/latest/objects/CartTransform).
 */
class ShopifyCartTransformFeatureQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartTransformFeature";

    /**
     * The cart transform operations eligible for the shop.
     */
    public function selectEligibleOperations(?ShopifyCartTransformFeatureEligibleOperationsArgumentsObject $argsObject = null): ShopifyCartTransformEligibleOperationsQueryObject
    {
        $object = new ShopifyCartTransformEligibleOperationsQueryObject("eligibleOperations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
