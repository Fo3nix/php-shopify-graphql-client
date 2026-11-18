<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The header cart link customizations.
 */
class ShopifyCheckoutBrandingHeaderCartLinkQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingHeaderCartLink";

    /**
     * The content type for the header back to cart link in 1-page checkout. Setting this to image will render the custom image provided using the image field on the header cart_link object. If no image is provided, the default cart icon will be used.
     */
    public function selectContentType(): static
    {
        $this->selectField("contentType");

        return $this;
    }

    /**
     * The image that's used for the header back to cart link in 1-page checkout when the content type is set to image.
     */
    public function selectImage(?ShopifyCheckoutBrandingHeaderCartLinkImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
