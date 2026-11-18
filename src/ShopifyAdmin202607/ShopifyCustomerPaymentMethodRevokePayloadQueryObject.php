<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerPaymentMethodRevoke` mutation.
 */
class ShopifyCustomerPaymentMethodRevokePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodRevokePayload";

    /**
     * The ID of the revoked customer payment method.
     */
    public function selectRevokedCustomerPaymentMethodId(): static
    {
        $this->selectField("revokedCustomerPaymentMethodId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerPaymentMethodRevokePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
