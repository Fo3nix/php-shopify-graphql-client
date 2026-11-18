<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The SMS marketing consent information for a [customer's phone number](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerPhoneNumber). Implements the [`CustomerMarketingConsent`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/CustomerMarketingConsent) interface. Use the [`customerSmsMarketingConsentUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/customerSmsMarketingConsentUpdate) mutation to change it.
 */
class ShopifyCustomerSmsMarketingConsentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSmsMarketingConsent";

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
    public function selectSourceLocation(?ShopifyCustomerSmsMarketingConsentSourceLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
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
}
