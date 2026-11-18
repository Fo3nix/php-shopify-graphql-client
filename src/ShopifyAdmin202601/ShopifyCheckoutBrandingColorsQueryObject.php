<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The color settings for global colors and color schemes.
 */
class ShopifyCheckoutBrandingColorsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColors";

    /**
     * A group of global colors for customizing the overall look and feel of the user interface.
     */
    public function selectGlobal(?ShopifyCheckoutBrandingColorsGlobalArgumentsObject $argsObject = null): ShopifyCheckoutBrandingColorGlobalQueryObject
    {
        $object = new ShopifyCheckoutBrandingColorGlobalQueryObject("global");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A set of color schemes which apply to different areas of the user interface.
     */
    public function selectSchemes(?ShopifyCheckoutBrandingColorsSchemesArgumentsObject $argsObject = null): ShopifyCheckoutBrandingColorSchemesQueryObject
    {
        $object = new ShopifyCheckoutBrandingColorSchemesQueryObject("schemes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
