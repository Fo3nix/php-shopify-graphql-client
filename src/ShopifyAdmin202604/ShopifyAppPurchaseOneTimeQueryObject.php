<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a one-time purchase of app services or features by a merchant, tracking the transaction details and status throughout the billing lifecycle. This object captures essential information about non-recurring charges, including price and merchant acceptance status.
 *
 * One-time purchases are particularly valuable for apps offering premium features, professional services, or digital products that don't require ongoing subscriptions. For instance, a photography app might sell premium filters as one-time purchases, while a marketing app could charge for individual campaign setups or advanced analytics reports.
 *
 * Use the `AppPurchaseOneTime` object to:
 * - Track the status of individual feature purchases and service charges
 * - Track payment status for premium content or digital products
 * - Access purchase details to enable or disable features based on payment status
 *
 * The purchase status indicates whether the charge is pending merchant approval, has been accepted and processed, or was declined. This status tracking is crucial for apps that need to conditionally enable features based on successful payment completion.
 *
 * Purchase records include creation timestamps, pricing details, and test flags to distinguish between production charges and development testing. The test flag ensures that development and staging environments don't generate actual charges while maintaining realistic billing flow testing.
 *
 * For detailed implementation patterns and billing best practices, see the [one-time-charges page](https://shopify.dev/docs/apps/launch/billing/one-time-charges).
 */
class ShopifyAppPurchaseOneTimeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppPurchaseOneTime";

    /**
     * The date and time when the app purchase occurred.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of the app purchase.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The amount to be charged to the store for the app purchase.
     */
    public function selectPrice(?ShopifyAppPurchaseOneTimePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the app purchase.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * Whether the app purchase is a test transaction.
     */
    public function selectTest(): static
    {
        $this->selectField("test");

        return $this;
    }
}
