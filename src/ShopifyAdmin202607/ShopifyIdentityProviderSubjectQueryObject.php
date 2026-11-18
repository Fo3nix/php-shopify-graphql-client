<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a customer's identity provider subject identifier.
 */
class ShopifyIdentityProviderSubjectQueryObject extends QueryObject
{
    const OBJECT_NAME = "IdentityProviderSubject";

    /**
     * The date and time when the provider subject was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A globally-unique ID for the provider subject.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The merchant-configured name of the third-party identity provider.
     */
    public function selectProviderName(): static
    {
        $this->selectField("providerName");

        return $this;
    }

    /**
     * The unique subject identifier assigned to the customer by the authentication provider.
     */
    public function selectSubject(): static
    {
        $this->selectField("subject");

        return $this;
    }

    /**
     * The date and time when the provider subject was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
