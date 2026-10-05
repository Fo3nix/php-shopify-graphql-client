<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

class ShopifySubscriptionBillingAttemptActionUnionObject extends UnionObject
{
    public function onShopifySubscriptionBillingAttemptPaymentChallenge()
    {
        $object = new ShopifySubscriptionBillingAttemptPaymentChallengeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
