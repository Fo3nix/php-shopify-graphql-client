<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a component of an app subscription that contains pricing details for either recurring fees or usage-based charges. Each subscription has exactly 1 or 2 line items - one for recurring fees and/or one for usage fees.
 *
 * If a subscription has both recurring and usage pricing, there will be 2 line items. If it only has one type of pricing, the subscription will have a single line item for that pricing model.
 *
 * Use the `AppSubscriptionLineItem` object to:
 * - View the pricing terms a merchant has agreed to
 * - Distinguish between recurring and usage fee components
 * - Access detailed billing information for each pricing component
 *
 * This read-only object provides visibility into the subscription's pricing structure without allowing modifications.
 *
 * Read about subscription pricing models in the [billing architecture guide](https://shopify.dev/docs/apps/launch/billing/subscription-billing).
 */
class ShopifyAppSubscriptionLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionLineItem";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The pricing model for the app subscription.
     */
    public function selectPlan(?ShopifyAppSubscriptionLineItemPlanArgumentsObject $argsObject = null): ShopifyAppPlanV2QueryObject
    {
        $object = new ShopifyAppPlanV2QueryObject("plan");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the store's usage records for a usage pricing plan.
     */
    public function selectUsageRecords(?ShopifyAppSubscriptionLineItemUsageRecordsArgumentsObject $argsObject = null): ShopifyAppUsageRecordConnectionQueryObject
    {
        $object = new ShopifyAppUsageRecordConnectionQueryObject("usageRecords");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
