<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The global customizations.
 */
class ShopifyCheckoutBrandingGlobalQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingGlobal";

    /**
     * The global corner radius setting that overrides all other [corner radius](https://shopify.dev/docs/api/admin-graphql/latest/enums/CheckoutBrandingCornerRadius)
     * customizations.
     */
    public function selectCornerRadius(): static
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    /**
     * The global typography customizations.
     */
    public function selectTypography(?ShopifyCheckoutBrandingGlobalTypographyArgumentsObject $argsObject = null): ShopifyCheckoutBrandingTypographyStyleGlobalQueryObject
    {
        $object = new ShopifyCheckoutBrandingTypographyStyleGlobalQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
