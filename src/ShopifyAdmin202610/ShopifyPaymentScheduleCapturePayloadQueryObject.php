<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `paymentScheduleCapture` mutation.
 */
class ShopifyPaymentScheduleCapturePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentScheduleCapturePayload";

    /**
     * The async job used for charging the payment.
     */
    public function selectJob(?ShopifyPaymentScheduleCapturePayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The job result for tracking the status of the payment capture.
     */
    public function selectJobResult(?ShopifyPaymentScheduleCapturePayloadJobResultArgumentsObject $argsObject = null): ShopifyOrderCreateMandatePaymentJobResultQueryObject
    {
        $object = new ShopifyOrderCreateMandatePaymentJobResultQueryObject("jobResult");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique ID for the created payment.
     */
    public function selectPaymentReferenceId(): static
    {
        $this->selectField("paymentReferenceId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPaymentScheduleCapturePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPaymentScheduleCaptureUserErrorQueryObject
    {
        $object = new ShopifyPaymentScheduleCaptureUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
