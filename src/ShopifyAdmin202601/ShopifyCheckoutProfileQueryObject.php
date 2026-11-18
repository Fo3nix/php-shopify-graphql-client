<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A checkout profile defines the branding settings and the UI extensions for a store's checkout. A checkout profile could be published or draft. A store might have at most one published checkout profile, which is used to render their live checkout. The store could also have multiple draft profiles that were created, previewed, and published using the admin checkout editor.
 */
class ShopifyCheckoutProfileQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutProfile";

    /**
     * The date and time when the checkout profile was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The date and time when the checkout profile was last edited.
     */
    public function selectEditedAt(): static
    {
        $this->selectField("editedAt");

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
     * Whether the checkout profile is published or not.
     */
    public function selectIsPublished(): static
    {
        $this->selectField("isPublished");

        return $this;
    }

    /**
     * The profile name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * Whether the checkout profile Thank You Page and Order Status Page are actively using extensibility or not.
     */
    public function selectTypOspPagesActive(): static
    {
        $this->selectField("typOspPagesActive");

        return $this;
    }

    /**
     * The date and time when the checkout profile was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
