<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `paymentCustomizationDelete` mutation.
 */
class ShopifyPaymentCustomizationDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentCustomizationDeletePayload";

    /**
     * Returns the deleted payment customization ID.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPaymentCustomizationDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPaymentCustomizationErrorQueryObject
    {
        $object = new ShopifyPaymentCustomizationErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
