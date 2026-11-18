<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The selects customizations.
 */
class ShopifyCheckoutBrandingSelectQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingSelect";

    /**
     * The border used for selects.
     */
    public function selectBorder(): static
    {
        $this->selectField("border");

        return $this;
    }

    /**
     * The typography customizations used for selects.
     */
    public function selectTypography(?ShopifyCheckoutBrandingSelectTypographyArgumentsObject $argsObject = null): ShopifyCheckoutBrandingTypographyStyleQueryObject
    {
        $object = new ShopifyCheckoutBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
