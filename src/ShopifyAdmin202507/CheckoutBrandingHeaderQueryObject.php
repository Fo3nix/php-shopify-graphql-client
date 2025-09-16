<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingHeaderQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingHeader";

    public function selectAlignment()
    {
        $this->selectField("alignment");

        return $this;
    }

    public function selectBanner(CheckoutBrandingHeaderBannerArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingImageQueryObject("banner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCartLink(CheckoutBrandingHeaderCartLinkArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingHeaderCartLinkQueryObject("cartLink");
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

    public function selectLogo(CheckoutBrandingHeaderLogoArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingLogoQueryObject("logo");
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
