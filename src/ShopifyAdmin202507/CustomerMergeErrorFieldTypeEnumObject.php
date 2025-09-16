<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CustomerMergeErrorFieldTypeEnumObject extends EnumObject
{
    const DELETED_AT = "DELETED_AT";
    const REDACTED_AT = "REDACTED_AT";
    const SUBSCRIPTIONS = "SUBSCRIPTIONS";
    const MERGE_IN_PROGRESS = "MERGE_IN_PROGRESS";
    const GIFT_CARDS = "GIFT_CARDS";
    const OVERRIDE_FIELDS = "OVERRIDE_FIELDS";
    const STORE_CREDIT = "STORE_CREDIT";
    const COMPANY_CONTACT = "COMPANY_CONTACT";
    const CUSTOMER_PAYMENT_METHODS = "CUSTOMER_PAYMENT_METHODS";
    const PENDING_DATA_REQUEST = "PENDING_DATA_REQUEST";
    const MULTIPASS_IDENTIFIER = "MULTIPASS_IDENTIFIER";
}
