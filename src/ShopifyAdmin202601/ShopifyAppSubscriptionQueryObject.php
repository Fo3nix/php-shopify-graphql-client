<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A recurring billing agreement that associates an [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) with a merchant's shop. Each subscription contains one or more [`AppSubscriptionLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppSubscriptionLineItem) objects that define the pricing structure. The pricing structure can include recurring charges, usage-based pricing, or both.
 *
 * The subscription tracks billing details including the current period end date, trial days, and [`AppSubscriptionStatus`](https://shopify.dev/docs/api/admin-graphql/latest/enums/AppSubscriptionStatus).
 *
 * Merchants must approve subscriptions through a [confirmation URL](https://shopify.dev/docs/api/admin-graphql/latest/mutations/appSubscriptionCreate#returns-confirmationUrl) before billing begins. Test subscriptions allow developers to verify billing flows without actual charges.
 *
 * Learn more about [subscription billing](https://shopify.dev/docs/apps/launch/billing/subscription-billing) and [testing charges](https://shopify.dev/docs/apps/launch/billing/managed-pricing#test-charges).
 */
class ShopifyAppSubscriptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscription";

    /**
     * The date and time when the app subscription was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The date and time when the current app subscription period ends. Returns `null` if the subscription isn't active.
     */
    public function selectCurrentPeriodEnd(): static
    {
        $this->selectField("currentPeriodEnd");

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
     * The plans attached to the app subscription.
     */
    public function selectLineItems(?ShopifyAppSubscriptionLineItemsArgumentsObject $argsObject = null): ShopifyAppSubscriptionLineItemQueryObject
    {
        $object = new ShopifyAppSubscriptionLineItemQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the app subscription.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The URL that the merchant is redirected to after approving the app subscription.
     */
    public function selectReturnUrl(): static
    {
        $this->selectField("returnUrl");

        return $this;
    }

    /**
     * The status of the app subscription.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * Specifies whether the app subscription is a test transaction.
     */
    public function selectTest(): static
    {
        $this->selectField("test");

        return $this;
    }

    /**
     * The number of free trial days, starting at the subscription's creation date, by which billing is delayed.
     */
    public function selectTrialDays(): static
    {
        $this->selectField("trialDays");

        return $this;
    }
}
