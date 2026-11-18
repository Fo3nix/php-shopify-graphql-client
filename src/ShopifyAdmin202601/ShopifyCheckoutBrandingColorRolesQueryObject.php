<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A group of colors used together on a surface.
 */
class ShopifyCheckoutBrandingColorRolesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColorRoles";

    /**
     * The color of accented objects (links and focused state).
     */
    public function selectAccent(): static
    {
        $this->selectField("accent");

        return $this;
    }

    /**
     * The color of the background.
     */
    public function selectBackground(): static
    {
        $this->selectField("background");

        return $this;
    }

    /**
     * The color of borders.
     */
    public function selectBorder(): static
    {
        $this->selectField("border");

        return $this;
    }

    /**
     * The decorative color for highlighting specific parts of the user interface.
     */
    public function selectDecorative(): static
    {
        $this->selectField("decorative");

        return $this;
    }

    /**
     * The color of icons.
     */
    public function selectIcon(): static
    {
        $this->selectField("icon");

        return $this;
    }

    /**
     * The color of text.
     */
    public function selectText(): static
    {
        $this->selectField("text");

        return $this;
    }
}
