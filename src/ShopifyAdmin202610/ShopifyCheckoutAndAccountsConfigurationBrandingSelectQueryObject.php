<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The selects customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSelectQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingSelect";

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
    public function selectTypography(?ShopifyCheckoutAndAccountsConfigurationBrandingSelectTypographyArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
