<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `paymentTermsDelete` mutation.
 */
class ShopifyPaymentTermsDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentTermsDeletePayload";

    /**
     * The deleted payment terms ID.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPaymentTermsDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPaymentTermsDeleteUserErrorQueryObject
    {
        $object = new ShopifyPaymentTermsDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
