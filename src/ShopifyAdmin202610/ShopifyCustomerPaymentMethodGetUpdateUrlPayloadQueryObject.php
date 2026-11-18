<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerPaymentMethodGetUpdateUrl` mutation.
 */
class ShopifyCustomerPaymentMethodGetUpdateUrlPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodGetUpdateUrlPayload";

    /**
     * The URL to redirect the customer to update the payment method.
     */
    public function selectUpdatePaymentMethodUrl(): static
    {
        $this->selectField("updatePaymentMethodUrl");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerPaymentMethodGetUpdateUrlPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodGetUpdateUrlUserErrorQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodGetUpdateUrlUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
