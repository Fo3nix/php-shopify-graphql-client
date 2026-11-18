<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `paymentTermsCreate` mutation.
 */
class ShopifyPaymentTermsCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentTermsCreatePayload";

    /**
     * The created payment terms.
     */
    public function selectPaymentTerms(?ShopifyPaymentTermsCreatePayloadPaymentTermsArgumentsObject $argsObject = null): ShopifyPaymentTermsQueryObject
    {
        $object = new ShopifyPaymentTermsQueryObject("paymentTerms");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPaymentTermsCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPaymentTermsCreateUserErrorQueryObject
    {
        $object = new ShopifyPaymentTermsCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
