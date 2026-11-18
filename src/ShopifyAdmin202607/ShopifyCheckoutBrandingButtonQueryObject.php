<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The buttons customizations.
 */
class ShopifyCheckoutBrandingButtonQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingButton";

    /**
     * The background style used for buttons.
     */
    public function selectBackground(): static
    {
        $this->selectField("background");

        return $this;
    }

    /**
     * The block padding used for buttons.
     */
    public function selectBlockPadding(): static
    {
        $this->selectField("blockPadding");

        return $this;
    }

    /**
     * The border used for buttons.
     */
    public function selectBorder(): static
    {
        $this->selectField("border");

        return $this;
    }

    /**
     * The corner radius used for buttons.
     */
    public function selectCornerRadius(): static
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    /**
     * The inline padding used for buttons.
     */
    public function selectInlinePadding(): static
    {
        $this->selectField("inlinePadding");

        return $this;
    }

    /**
     * The typography used for buttons.
     */
    public function selectTypography(?ShopifyCheckoutBrandingButtonTypographyArgumentsObject $argsObject = null): ShopifyCheckoutBrandingTypographyStyleQueryObject
    {
        $object = new ShopifyCheckoutBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
