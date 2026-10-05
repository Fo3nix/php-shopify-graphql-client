<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifySubscriptionBillingAttemptPaymentChallengeStatusEnumObject extends EnumObject
{
    const OFF_SESSION_REJECTED = "OFF_SESSION_REJECTED";
    const ON_SESSION_CHALLENGED = "ON_SESSION_CHALLENGED";
}
