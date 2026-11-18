<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The content container customizations.
 */
class ShopifyCheckoutBrandingContentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingContent";

    /**
     * The content container's divider style and visibility.
     */
    public function selectDivider(?ShopifyCheckoutBrandingContentDividerArgumentsObject $argsObject = null): ShopifyCheckoutBrandingContainerDividerQueryObject
    {
        $object = new ShopifyCheckoutBrandingContainerDividerQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
