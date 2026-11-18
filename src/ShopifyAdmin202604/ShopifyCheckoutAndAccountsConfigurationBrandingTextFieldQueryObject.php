<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The text fields customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingTextFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingTextField";

    /**
     * The border.
     */
    public function selectBorder(): static
    {
        $this->selectField("border");

        return $this;
    }

    /**
     * The typography.
     */
    public function selectTypography(?ShopifyCheckoutAndAccountsConfigurationBrandingTextFieldTypographyArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
