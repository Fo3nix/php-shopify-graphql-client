<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The buttons customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingButtonQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingButton";

    /**
     * The block padding.
     */
    public function selectBlockPadding(): static
    {
        $this->selectField("blockPadding");

        return $this;
    }

    /**
     * The border.
     */
    public function selectBorder(): static
    {
        $this->selectField("border");

        return $this;
    }

    /**
     * The corner radius.
     */
    public function selectCornerRadius(): static
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    /**
     * The inline padding.
     */
    public function selectInlinePadding(): static
    {
        $this->selectField("inlinePadding");

        return $this;
    }

    /**
     * The typography.
     */
    public function selectTypography(?ShopifyCheckoutAndAccountsConfigurationBrandingButtonTypographyArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
