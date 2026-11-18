<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Tracks a [customer](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer)'s incomplete shopping journey, whether they abandoned while browsing [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product), adding items to cart, or during checkout. Provides data about the customer's behavior and products they interacted with.
 *
 * The abandonment includes fields that indicate whether the customer has completed any [orders](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) or [draft orders](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder) after the abandonment occurred. It also tracks when emails were sent and how long since the customer's last activity across different abandonment types.
 */
class ShopifyAbandonmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "Abandonment";

    /**
     * The abandonment payload for the abandoned checkout.
     */
    public function selectAbandonedCheckoutPayload(?ShopifyAbandonmentAbandonedCheckoutPayloadArgumentsObject $argsObject = null): ShopifyAbandonedCheckoutQueryObject
    {
        $object = new ShopifyAbandonedCheckoutQueryObject("abandonedCheckoutPayload");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The abandonment type.
     */
    public function selectAbandonmentType(): static
    {
        $this->selectField("abandonmentType");

        return $this;
    }

    /**
     * The app associated with an abandoned checkout.
     */
    public function selectApp(?ShopifyAbandonmentAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Permalink to the cart page.
     */
    public function selectCartUrl(): static
    {
        $this->selectField("cartUrl");

        return $this;
    }

    /**
     * The date and time when the abandonment was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The customer who abandoned this event.
     */
    public function selectCustomer(?ShopifyAbandonmentCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the customer has a draft order since this abandonment has been abandoned.
     */
    public function selectCustomerHasNoDraftOrderSinceAbandonment(): static
    {
        $this->selectField("customerHasNoDraftOrderSinceAbandonment");

        return $this;
    }

    /**
     * Whether the customer has completed an order since this checkout has been abandoned.
     */
    public function selectCustomerHasNoOrderSinceAbandonment(): static
    {
        $this->selectField("customerHasNoOrderSinceAbandonment");

        return $this;
    }

    /**
     * The number of days since the last abandonment email was sent to the customer.
     */
    public function selectDaysSinceLastAbandonmentEmail(): static
    {
        $this->selectField("daysSinceLastAbandonmentEmail");

        return $this;
    }

    /**
     * When the email was sent, if that's the case.
     */
    public function selectEmailSentAt(): static
    {
        $this->selectField("emailSentAt");

        return $this;
    }

    /**
     * The email state (e.g., sent or not sent).
     */
    public function selectEmailState(): static
    {
        $this->selectField("emailState");

        return $this;
    }

    /**
     * The number of hours since the customer has last abandoned a checkout.
     */
    public function selectHoursSinceLastAbandonedCheckout(): static
    {
        $this->selectField("hoursSinceLastAbandonedCheckout");

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
     * Whether the products in abandonment are available.
     */
    public function selectInventoryAvailable(): static
    {
        $this->selectField("inventoryAvailable");

        return $this;
    }

    /**
     * Whether the abandonment event comes from a custom storefront channel.
     */
    public function selectIsFromCustomStorefront(): static
    {
        $this->selectField("isFromCustomStorefront");

        return $this;
    }

    /**
     * Whether the abandonment event comes from the Online Store sales channel.
     */
    public function selectIsFromOnlineStore(): static
    {
        $this->selectField("isFromOnlineStore");

        return $this;
    }

    /**
     * Whether the abandonment event comes from the Shop app sales channel.
     */
    public function selectIsFromShopApp(): static
    {
        $this->selectField("isFromShopApp");

        return $this;
    }

    /**
     * Whether the abandonment event comes from Shop Pay.
     */
    public function selectIsFromShopPay(): static
    {
        $this->selectField("isFromShopPay");

        return $this;
    }

    /**
     * Whether the customer didn't complete another most significant step since this abandonment.
     */
    public function selectIsMostSignificantAbandonment(): static
    {
        $this->selectField("isMostSignificantAbandonment");

        return $this;
    }

    /**
     * The date for the latest browse abandonment.
     */
    public function selectLastBrowseAbandonmentDate(): static
    {
        $this->selectField("lastBrowseAbandonmentDate");

        return $this;
    }

    /**
     * The date for the latest cart abandonment.
     */
    public function selectLastCartAbandonmentDate(): static
    {
        $this->selectField("lastCartAbandonmentDate");

        return $this;
    }

    /**
     * The date for the latest checkout abandonment.
     */
    public function selectLastCheckoutAbandonmentDate(): static
    {
        $this->selectField("lastCheckoutAbandonmentDate");

        return $this;
    }

    /**
     * The most recent step type.
     */
    public function selectMostRecentStep(): static
    {
        $this->selectField("mostRecentStep");

        return $this;
    }

    /**
     * The products added to the cart during the customer abandoned visit.
     */
    public function selectProductsAddedToCart(?ShopifyAbandonmentProductsAddedToCartArgumentsObject $argsObject = null): ShopifyCustomerVisitProductInfoConnectionQueryObject
    {
        $object = new ShopifyCustomerVisitProductInfoConnectionQueryObject("productsAddedToCart");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The products viewed during the customer abandoned visit.
     */
    public function selectProductsViewed(?ShopifyAbandonmentProductsViewedArgumentsObject $argsObject = null): ShopifyCustomerVisitProductInfoConnectionQueryObject
    {
        $object = new ShopifyCustomerVisitProductInfoConnectionQueryObject("productsViewed");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the visit started.
     */
    public function selectVisitStartedAt(): static
    {
        $this->selectField("visitStartedAt");

        return $this;
    }
}
