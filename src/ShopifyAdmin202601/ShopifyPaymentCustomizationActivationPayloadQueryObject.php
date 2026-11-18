<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `paymentCustomizationActivation` mutation.
 */
class ShopifyPaymentCustomizationActivationPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentCustomizationActivationPayload";

    /**
     * The IDs of the updated payment customizations.
     */
    public function selectIds(): static
    {
        $this->selectField("ids");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPaymentCustomizationActivationPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPaymentCustomizationErrorQueryObject
    {
        $object = new ShopifyPaymentCustomizationErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
