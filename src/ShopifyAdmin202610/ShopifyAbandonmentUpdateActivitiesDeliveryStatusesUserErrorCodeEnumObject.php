<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `AbandonmentUpdateActivitiesDeliveryStatusesUserError`.
 */
class ShopifyAbandonmentUpdateActivitiesDeliveryStatusesUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Unable to find an Abandonment for the provided ID.
     */
    const ABANDONMENT_NOT_FOUND = "ABANDONMENT_NOT_FOUND";
    /**
     * Unable to find a marketing activity for the provided ID.
     */
    const MARKETING_ACTIVITY_NOT_FOUND = "MARKETING_ACTIVITY_NOT_FOUND";
    /**
     * Unable to find delivery status info for the provided ID.
     */
    const DELIVERY_STATUS_INFO_NOT_FOUND = "DELIVERY_STATUS_INFO_NOT_FOUND";
}
