<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The text fields customizations.
 */
class ShopifyCheckoutBrandingTextFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingTextField";

    /**
     * The border used for text fields.
     */
    public function selectBorder(): static
    {
        $this->selectField("border");

        return $this;
    }

    /**
     * The typography customizations used for text fields.
     */
    public function selectTypography(?ShopifyCheckoutBrandingTextFieldTypographyArgumentsObject $argsObject = null): ShopifyCheckoutBrandingTypographyStyleQueryObject
    {
        $object = new ShopifyCheckoutBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
