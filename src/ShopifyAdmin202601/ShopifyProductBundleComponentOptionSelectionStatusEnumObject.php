<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of a component option value related to a bundle.
 */
class ShopifyProductBundleComponentOptionSelectionStatusEnumObject extends EnumObject
{
    /**
     * The component option value is selected as sellable in the bundle.
     */
    const SELECTED = "SELECTED";
    /**
     * The component option value is not selected as sellable in the bundle.
     */
    const DESELECTED = "DESELECTED";
    /**
     * The component option value was not initially selected, but is now available for the bundle.
     */
    const NEW = "NEW";
    /**
     * The component option value was selected, is no longer available for the bundle.
     */
    const UNAVAILABLE = "UNAVAILABLE";
}
