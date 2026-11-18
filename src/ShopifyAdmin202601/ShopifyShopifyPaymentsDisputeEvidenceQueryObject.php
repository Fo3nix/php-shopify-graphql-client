<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The evidence associated with the dispute.
 */
class ShopifyShopifyPaymentsDisputeEvidenceQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeEvidence";

    /**
     * The activity logs associated with the dispute evidence.
     */
    public function selectAccessActivityLog(): static
    {
        $this->selectField("accessActivityLog");

        return $this;
    }

    /**
     * The billing address that's provided by the customer.
     */
    public function selectBillingAddress(?ShopifyShopifyPaymentsDisputeEvidenceBillingAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The cancellation policy disclosure associated with the dispute evidence.
     */
    public function selectCancellationPolicyDisclosure(): static
    {
        $this->selectField("cancellationPolicyDisclosure");

        return $this;
    }

    /**
     * The cancellation policy file associated with the dispute evidence.
     */
    public function selectCancellationPolicyFile(?ShopifyShopifyPaymentsDisputeEvidenceCancellationPolicyFileArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeFileUploadQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("cancellationPolicyFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The cancellation rebuttal associated with the dispute evidence.
     */
    public function selectCancellationRebuttal(): static
    {
        $this->selectField("cancellationRebuttal");

        return $this;
    }

    /**
     * The customer communication file associated with the dispute evidence.
     */
    public function selectCustomerCommunicationFile(?ShopifyShopifyPaymentsDisputeEvidenceCustomerCommunicationFileArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeFileUploadQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("customerCommunicationFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer's email address.
     */
    public function selectCustomerEmailAddress(): static
    {
        $this->selectField("customerEmailAddress");

        return $this;
    }

    /**
     * The customer's first name.
     */
    public function selectCustomerFirstName(): static
    {
        $this->selectField("customerFirstName");

        return $this;
    }

    /**
     * The customer's last name.
     */
    public function selectCustomerLastName(): static
    {
        $this->selectField("customerLastName");

        return $this;
    }

    /**
     * The customer purchase ip for this dispute evidence.
     */
    public function selectCustomerPurchaseIp(): static
    {
        $this->selectField("customerPurchaseIp");

        return $this;
    }

    /**
     * The dispute associated with the evidence.
     */
    public function selectDispute(?ShopifyShopifyPaymentsDisputeEvidenceDisputeArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeQueryObject("dispute");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The file uploads associated with the dispute evidence.
     */
    public function selectDisputeFileUploads(?ShopifyShopifyPaymentsDisputeEvidenceDisputeFileUploadsArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeFileUploadQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("disputeFileUploads");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The fulfillments associated with the dispute evidence.
     */
    public function selectFulfillments(?ShopifyShopifyPaymentsDisputeEvidenceFulfillmentsArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeFulfillmentQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeFulfillmentQueryObject("fulfillments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The product description for this dispute evidence.
     */
    public function selectProductDescription(): static
    {
        $this->selectField("productDescription");

        return $this;
    }

    /**
     * The refund policy disclosure associated with the dispute evidence.
     */
    public function selectRefundPolicyDisclosure(): static
    {
        $this->selectField("refundPolicyDisclosure");

        return $this;
    }

    /**
     * The refund policy file associated with the dispute evidence.
     */
    public function selectRefundPolicyFile(?ShopifyShopifyPaymentsDisputeEvidenceRefundPolicyFileArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeFileUploadQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("refundPolicyFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The refund refusal explanation associated with dispute evidence.
     */
    public function selectRefundRefusalExplanation(): static
    {
        $this->selectField("refundRefusalExplanation");

        return $this;
    }

    /**
     * The service documentation file associated with the dispute evidence.
     */
    public function selectServiceDocumentationFile(?ShopifyShopifyPaymentsDisputeEvidenceServiceDocumentationFileArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeFileUploadQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("serviceDocumentationFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The mailing address for shipping that's provided by the customer.
     */
    public function selectShippingAddress(?ShopifyShopifyPaymentsDisputeEvidenceShippingAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shipping documentation file associated with the dispute evidence.
     */
    public function selectShippingDocumentationFile(?ShopifyShopifyPaymentsDisputeEvidenceShippingDocumentationFileArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeFileUploadQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("shippingDocumentationFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the dispute evidence is submitted.
     */
    public function selectSubmitted(): static
    {
        $this->selectField("submitted");

        return $this;
    }

    /**
     * The uncategorized file associated with the dispute evidence.
     */
    public function selectUncategorizedFile(?ShopifyShopifyPaymentsDisputeEvidenceUncategorizedFileArgumentsObject $argsObject = null): ShopifyShopifyPaymentsDisputeFileUploadQueryObject
    {
        $object = new ShopifyShopifyPaymentsDisputeFileUploadQueryObject("uncategorizedFile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The uncategorized text for the dispute evidence.
     */
    public function selectUncategorizedText(): static
    {
        $this->selectField("uncategorizedText");

        return $this;
    }
}
