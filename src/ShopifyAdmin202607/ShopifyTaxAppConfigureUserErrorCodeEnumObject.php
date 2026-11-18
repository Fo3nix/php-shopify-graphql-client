<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `TaxAppConfigureUserError`.
 */
class ShopifyTaxAppConfigureUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Unable to find the tax partner record.
     */
    const TAX_PARTNER_NOT_FOUND = "TAX_PARTNER_NOT_FOUND";
    /**
     * Unable to update tax partner state.
     */
    const TAX_PARTNER_STATE_UPDATE_FAILED = "TAX_PARTNER_STATE_UPDATE_FAILED";
    /**
     * Unable to update already active tax partner.
     */
    const TAX_PARTNER_ALREADY_ACTIVE = "TAX_PARTNER_ALREADY_ACTIVE";
}
