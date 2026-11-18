<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `paymentCustomizationCreate` mutation.
 */
class ShopifyPaymentCustomizationCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentCustomizationCreatePayload";

    /**
     * Returns the created payment customization.
     */
    public function selectPaymentCustomization(?ShopifyPaymentCustomizationCreatePayloadPaymentCustomizationArgumentsObject $argsObject = null): ShopifyPaymentCustomizationQueryObject
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
    public function selectUserErrors(?ShopifyPaymentCustomizationCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPaymentCustomizationErrorQueryObject
    {
        $object = new ShopifyPaymentCustomizationErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
