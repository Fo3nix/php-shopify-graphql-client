<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingButtonQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingButton";

    public function selectBlockPadding()
    {
        $this->selectField("blockPadding");

        return $this;
    }

    public function selectBorder()
    {
        $this->selectField("border");

        return $this;
    }

    public function selectCornerRadius()
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    public function selectInlinePadding()
    {
        $this->selectField("inlinePadding");

        return $this;
    }

    public function selectTypography(ShopifyCheckoutAndAccountsConfigurationBrandingButtonTypographyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
