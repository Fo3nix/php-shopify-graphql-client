<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `paymentTermsUpdate` mutation.
 */
class ShopifyPaymentTermsUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentTermsUpdatePayload";

    /**
     * The updated payment terms.
     */
    public function selectPaymentTerms(?ShopifyPaymentTermsUpdatePayloadPaymentTermsArgumentsObject $argsObject = null): ShopifyPaymentTermsQueryObject
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
    public function selectUserErrors(?ShopifyPaymentTermsUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPaymentTermsUpdateUserErrorQueryObject
    {
        $object = new ShopifyPaymentTermsUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
