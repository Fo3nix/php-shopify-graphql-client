<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * The marketing consent information for a [customer](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) on a specific marketing channel. Channel-specific types like [`CustomerWhatsAppMarketingConsent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerWhatsAppMarketingConsent) implement this interface.
 */
class ShopifyCustomerMarketingConsentInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CustomerMarketingConsent";

    /**
     * The [source](https://shopify.dev/docs/api/admin-graphql/latest/enums/CustomerConsentCollectedFrom) from which the marketing consent was collected.
     */
    public function selectCollectedFrom(): static
    {
        $this->selectField("collectedFrom");

        return $this;
    }

    /**
     * The [marketing subscription opt-in level](https://shopify.dev/docs/api/admin-graphql/latest/enums/CustomerMarketingOptInLevel) that was set when the customer's marketing consent was last updated. Follows M3AAWG best practices guidelines.
     */
    public function selectOptInLevel(): static
    {
        $this->selectField("optInLevel");

        return $this;
    }

    /**
     * The [location](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) where the customer consented to receive marketing material.
     */
    public function selectSourceLocation(?ShopifyCustomerMarketingConsentSourceLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("sourceLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer's current [marketing consent state](https://shopify.dev/docs/api/admin-graphql/latest/enums/CustomerMarketingConsentState) for this channel.
     */
    public function selectState(): static
    {
        $this->selectField("state");

        return $this;
    }

    /**
     * The date and time when the marketing consent was updated.
     *
     * No date is provided if the customer has never updated their marketing consent for this channel.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function onCustomerWhatsAppMarketingConsent(): ShopifyCustomerWhatsAppMarketingConsentQueryObject
    {
        $object = new ShopifyCustomerWhatsAppMarketingConsentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
