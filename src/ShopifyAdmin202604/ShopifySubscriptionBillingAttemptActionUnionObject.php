<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

/**
 * The action required to continue processing the billing attempt.
 */
class ShopifySubscriptionBillingAttemptActionUnionObject extends UnionObject
{
    public function onShopifySubscriptionBillingAttemptPaymentChallenge(): ShopifySubscriptionBillingAttemptPaymentChallengeQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptPaymentChallengeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
