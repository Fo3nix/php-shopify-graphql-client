<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ReverseFulfillmentOrderThirdPartyConfirmationStatusEnumObject extends EnumObject
{
    const ACCEPTED = "ACCEPTED";
    const CANCEL_ACCEPTED = "CANCEL_ACCEPTED";
    const CANCEL_REJECTED = "CANCEL_REJECTED";
    const PENDING_ACCEPTANCE = "PENDING_ACCEPTANCE";
    const PENDING_CANCELATION = "PENDING_CANCELATION";
    const REJECTED = "REJECTED";
}
