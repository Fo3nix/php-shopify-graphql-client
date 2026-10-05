<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingAttemptPaymentChallengeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptPaymentChallenge";

    public function selectNextActionUrl()
    {
        $this->selectField("nextActionUrl");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
