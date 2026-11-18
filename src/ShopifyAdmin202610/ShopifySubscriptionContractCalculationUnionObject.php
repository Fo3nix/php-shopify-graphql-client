<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

/**
 * The result of a subscription contract calculation, returned by the [`subscriptionContractCalculation`](https://shopify.dev/docs/api/admin-graphql/latest/queries/subscriptionContractCalculation) query. Because calculations run asynchronously, the concrete type reflects the calculation's current state: `SubscriptionContractCalculationPending` while it's still processing, `SubscriptionContractCalculationSuccess` once it's ready to commit, or `SubscriptionContractCalculationFailure` if it failed, whose `errors` field describes what went wrong. Poll the query until the type is no longer pending.
 */
class ShopifySubscriptionContractCalculationUnionObject extends UnionObject
{
    public function onShopifySubscriptionContractCalculationFailure(): ShopifySubscriptionContractCalculationFailureQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationFailureQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionContractCalculationPending(): ShopifySubscriptionContractCalculationPendingQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationPendingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifySubscriptionContractCalculationSuccess(): ShopifySubscriptionContractCalculationSuccessQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationSuccessQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
