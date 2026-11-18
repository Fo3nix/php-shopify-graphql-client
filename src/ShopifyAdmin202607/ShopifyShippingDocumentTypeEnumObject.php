<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Types of shipping documents.
 */
class ShopifyShippingDocumentTypeEnumObject extends EnumObject
{
    /**
     * The shipping label document for the shipment.
     */
    const LABEL = "LABEL";
    /**
     * The customs form document for the shipment.
     */
    const CUSTOMS_FORM = "CUSTOMS_FORM";
}
