<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines the color palette specifically for button elements within checkout branding, including hover states. These color roles ensure buttons maintain proper contrast and visual hierarchy throughout the checkout experience.
 *
 * For example, a sports brand might configure bright accent colors for primary action buttons, with darker hover states and contrasting text colors that maintain accessibility standards.
 *
 * Use the `ButtonColorRoles` object to:
 * - Define button color schemes for different states
 * - Ensure proper contrast for accessibility compliance
 * - Coordinate button colors with overall brand palette
 *
 * Button color roles include background, border, text, icon, accent (for focused states), and decorative elements, plus specific hover state colors that provide clear interactive feedback to customers.
 */
class ShopifyCheckoutBrandingButtonColorRolesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingButtonColorRoles";

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
     * The colors of the button on hover.
     */
    public function selectHover(?ShopifyCheckoutBrandingButtonColorRolesHoverArgumentsObject $argsObject = null): ShopifyCheckoutBrandingColorRolesQueryObject
    {
        $object = new ShopifyCheckoutBrandingColorRolesQueryObject("hover");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
