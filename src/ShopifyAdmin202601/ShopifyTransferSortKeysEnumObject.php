<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the Transfer query.
 */
class ShopifyTransferSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `destination_name` value.
     */
    const DESTINATION_NAME = "DESTINATION_NAME";
    /**
     * Sort by the `expected_shipment_arrival` value.
     */
    const EXPECTED_SHIPMENT_ARRIVAL = "EXPECTED_SHIPMENT_ARRIVAL";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `name` value.
     */
    const NAME = "NAME";
    /**
     * Sort by the `origin_name` value.
     */
    const ORIGIN_NAME = "ORIGIN_NAME";
    /**
     * Sort by the `source_name` value.
     */
    const SOURCE_NAME = "SOURCE_NAME";
    /**
     * Sort by the `status` value.
     */
    const STATUS = "STATUS";
}
