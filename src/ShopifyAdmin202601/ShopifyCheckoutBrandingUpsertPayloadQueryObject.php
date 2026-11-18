<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `checkoutBrandingUpsert` mutation.
 */
class ShopifyCheckoutBrandingUpsertPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingUpsertPayload";

    /**
     * Returns the new checkout branding settings.
     */
    public function selectCheckoutBranding(?ShopifyCheckoutBrandingUpsertPayloadCheckoutBrandingArgumentsObject $argsObject = null): ShopifyCheckoutBrandingQueryObject
    {
        $object = new ShopifyCheckoutBrandingQueryObject("checkoutBranding");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCheckoutBrandingUpsertPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCheckoutBrandingUpsertUserErrorQueryObject
    {
        $object = new ShopifyCheckoutBrandingUpsertUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
