<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsDisputeEvidenceQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeEvidence";

    public function selectAccessActivityLog()
    {
        $this->selectField("accessActivityLog");

        return $this;
    }

    public function selectBillingAddress(ShopifyShopifyPaymentsDisputeEvidenceBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("billingAddress");
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

    public function selectCancellationPolicyFile(ShopifyShopifyPaymentsDisputeEvidenceCancellationPolicyFileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("cancellationPolicyFile");
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

    public function selectCustomerCommunicationFile(ShopifyShopifyPaymentsDisputeEvidenceCustomerCommunicationFileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("customerCommunicationFile");
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

    public function selectDispute(ShopifyShopifyPaymentsDisputeEvidenceDisputeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeQueryObject("dispute");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisputeFileUploads(ShopifyShopifyPaymentsDisputeEvidenceDisputeFileUploadsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("disputeFileUploads");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillments(ShopifyShopifyPaymentsDisputeEvidenceFulfillmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeFulfillmentQueryObject("fulfillments");
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

    public function selectRefundPolicyFile(ShopifyShopifyPaymentsDisputeEvidenceRefundPolicyFileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("refundPolicyFile");
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

    public function selectServiceDocumentationFile(ShopifyShopifyPaymentsDisputeEvidenceServiceDocumentationFileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("serviceDocumentationFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingAddress(ShopifyShopifyPaymentsDisputeEvidenceShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMailingAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingDocumentationFile(ShopifyShopifyPaymentsDisputeEvidenceShippingDocumentationFileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("shippingDocumentationFile");
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

    public function selectUncategorizedFile(ShopifyShopifyPaymentsDisputeEvidenceUncategorizedFileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("uncategorizedFile");
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
