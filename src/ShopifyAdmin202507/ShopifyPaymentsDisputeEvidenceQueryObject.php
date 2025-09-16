<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsDisputeEvidenceQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeEvidence";

    public function selectAccessActivityLog()
    {
        $this->selectField("accessActivityLog");

        return $this;
    }

    public function selectBillingAddress(ShopifyPaymentsDisputeEvidenceBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCancellationPolicyDisclosure()
    {
        $this->selectField("cancellationPolicyDisclosure");

        return $this;
    }

    public function selectCancellationPolicyFile(ShopifyPaymentsDisputeEvidenceCancellationPolicyFileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeFileUploadQueryObject("cancellationPolicyFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCancellationRebuttal()
    {
        $this->selectField("cancellationRebuttal");

        return $this;
    }

    public function selectCustomerCommunicationFile(ShopifyPaymentsDisputeEvidenceCustomerCommunicationFileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeFileUploadQueryObject("customerCommunicationFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerEmailAddress()
    {
        $this->selectField("customerEmailAddress");

        return $this;
    }

    public function selectCustomerFirstName()
    {
        $this->selectField("customerFirstName");

        return $this;
    }

    public function selectCustomerLastName()
    {
        $this->selectField("customerLastName");

        return $this;
    }

    public function selectCustomerPurchaseIp()
    {
        $this->selectField("customerPurchaseIp");

        return $this;
    }

    public function selectDispute(ShopifyPaymentsDisputeEvidenceDisputeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeQueryObject("dispute");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisputeFileUploads(ShopifyPaymentsDisputeEvidenceDisputeFileUploadsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeFileUploadQueryObject("disputeFileUploads");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillments(ShopifyPaymentsDisputeEvidenceFulfillmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeFulfillmentQueryObject("fulfillments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectProductDescription()
    {
        $this->selectField("productDescription");

        return $this;
    }

    public function selectRefundPolicyDisclosure()
    {
        $this->selectField("refundPolicyDisclosure");

        return $this;
    }

    public function selectRefundPolicyFile(ShopifyPaymentsDisputeEvidenceRefundPolicyFileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeFileUploadQueryObject("refundPolicyFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundRefusalExplanation()
    {
        $this->selectField("refundRefusalExplanation");

        return $this;
    }

    public function selectServiceDocumentationFile(ShopifyPaymentsDisputeEvidenceServiceDocumentationFileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeFileUploadQueryObject("serviceDocumentationFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingAddress(ShopifyPaymentsDisputeEvidenceShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new MailingAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingDocumentationFile(ShopifyPaymentsDisputeEvidenceShippingDocumentationFileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeFileUploadQueryObject("shippingDocumentationFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubmitted()
    {
        $this->selectField("submitted");

        return $this;
    }

    public function selectUncategorizedFile(ShopifyPaymentsDisputeEvidenceUncategorizedFileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsDisputeFileUploadQueryObject("uncategorizedFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUncategorizedText()
    {
        $this->selectField("uncategorizedText");

        return $this;
    }
}
