<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `paymentCustomizationUpdate` mutation.
 */
class ShopifyPaymentCustomizationUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentCustomizationUpdatePayload";

    /**
     * Returns the updated payment customization.
     */
    public function selectPaymentCustomization(?ShopifyPaymentCustomizationUpdatePayloadPaymentCustomizationArgumentsObject $argsObject = null): ShopifyPaymentCustomizationQueryObject
    {
        $object = new ShopifyPaymentCustomizationQueryObject("paymentCustomization");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPaymentCustomizationUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPaymentCustomizationErrorQueryObject
    {
        $object = new ShopifyPaymentCustomizationErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
