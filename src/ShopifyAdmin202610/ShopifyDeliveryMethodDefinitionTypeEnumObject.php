<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The different types of method definitions to filter by.
 */
class ShopifyDeliveryMethodDefinitionTypeEnumObject extends EnumObject
{
    /**
     * A static merchant-defined rate.
     */
    const MERCHANT = "MERCHANT";
    /**
     * A dynamic participant rate.
     */
    const PARTICIPANT = "PARTICIPANT";
}
