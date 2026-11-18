<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A font group. To learn more about updating fonts, refer to the
 * [checkoutBrandingUpsert](https://shopify.dev/api/admin-graphql/unstable/mutations/checkoutBrandingUpsert)
 * mutation and the checkout branding [tutorial](https://shopify.dev/docs/apps/checkout/styling).
 */
class ShopifyCheckoutBrandingFontGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingFontGroup";

    /**
     * The base font.
     */
    public function selectBase(?ShopifyCheckoutBrandingFontGroupBaseArgumentsObject $argsObject = null): ShopifyCheckoutBrandingFontInterfaceObject
    {
        $object = new ShopifyCheckoutBrandingFontInterfaceObject("base");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The bold font.
     */
    public function selectBold(?ShopifyCheckoutBrandingFontGroupBoldArgumentsObject $argsObject = null): ShopifyCheckoutBrandingFontInterfaceObject
    {
        $object = new ShopifyCheckoutBrandingFontInterfaceObject("bold");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The font loading strategy.
     */
    public function selectLoadingStrategy(): static
    {
        $this->selectField("loadingStrategy");

        return $this;
    }

    /**
     * The font group name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
