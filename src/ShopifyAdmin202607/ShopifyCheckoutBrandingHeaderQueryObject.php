<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingHeaderQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingHeader";

    public function selectAlignment()
    {
        $this->selectField("alignment");

        return $this;
    }

    public function selectBanner(ShopifyCheckoutBrandingHeaderBannerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingImageQueryObject("banner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCartLink(ShopifyCheckoutBrandingHeaderCartLinkArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingHeaderCartLinkQueryObject("cartLink");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectColorScheme()
    {
        $this->selectField("colorScheme");

        return $this;
    }

    public function selectDivided()
    {
        $this->selectField("divided");

        return $this;
    }

    public function selectLogo(ShopifyCheckoutBrandingHeaderLogoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingLogoQueryObject("logo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPadding()
    {
        $this->selectField("padding");

        return $this;
    }

    public function selectPosition()
    {
        $this->selectField("position");

        return $this;
    }
}
