<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for upserting an order attribution definition.
 */
class ShopifyOrderAttributionDefinitionUpsertInputInputObject extends InputObject
{
    const REQUIRED = ["handle", "displayName"];

    protected $handle;
    protected $displayName;
    protected $icon;

    /**
     * A unique identifier for the definition, scoped to the calling app on a single shop. Case insensitive. Used to match an existing definition when upserting.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * A human-readable name for the definition, displayed in Shopify Admin and on order details.
     */
    public function setDisplayName($displayName): static
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * Sanitized SVG content used as the icon for orders attributed to this definition. Must conform to the platform's SVG sanitization rules and a 0 0 20 20 viewbox. Omit this field to leave the existing icon unchanged on update, or pass `null` to clear it.
     */
    public function setIcon($icon): static
    {
        $this->icon = $icon;

        return $this;
    }
}
