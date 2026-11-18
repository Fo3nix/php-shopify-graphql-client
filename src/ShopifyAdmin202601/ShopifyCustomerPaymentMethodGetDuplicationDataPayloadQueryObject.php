<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerPaymentMethodGetDuplicationData` mutation.
 */
class ShopifyCustomerPaymentMethodGetDuplicationDataPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodGetDuplicationDataPayload";

    /**
     * The encrypted data from the payment method to be duplicated.
     */
    public function selectEncryptedDuplicationData(): static
    {
        $this->selectField("encryptedDuplicationData");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerPaymentMethodGetDuplicationDataPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodGetDuplicationDataUserErrorQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodGetDuplicationDataUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
