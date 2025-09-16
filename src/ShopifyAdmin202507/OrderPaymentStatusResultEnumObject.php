<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class OrderPaymentStatusResultEnumObject extends EnumObject
{
    const SUCCESS = "SUCCESS";
    const AUTHORIZED = "AUTHORIZED";
    const VOIDED = "VOIDED";
    const REFUNDED = "REFUNDED";
    const CAPTURED = "CAPTURED";
    const PURCHASED = "PURCHASED";
    const ERROR = "ERROR";
    const PROCESSING = "PROCESSING";
    const REDIRECT_REQUIRED = "REDIRECT_REQUIRED";
    const RETRYABLE = "RETRYABLE";
    const UNKNOWN = "UNKNOWN";
    const INITIATED = "INITIATED";
    const PENDING = "PENDING";
}
