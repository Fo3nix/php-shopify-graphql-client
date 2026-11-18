<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The heading level customizations.
 */
class ShopifyCheckoutBrandingHeadingLevelQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingHeadingLevel";

    /**
     * The typography customizations used for headings.
     */
    public function selectTypography(?ShopifyCheckoutBrandingHeadingLevelTypographyArgumentsObject $argsObject = null): ShopifyCheckoutBrandingTypographyStyleQueryObject
    {
        $object = new ShopifyCheckoutBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
