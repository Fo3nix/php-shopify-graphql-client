<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to update a dispute evidence object.
 */
class ShopifyShopifyPaymentsDisputeEvidenceUpdateInputInputObject extends InputObject
{
    protected $customerEmailAddress;
    protected $customerLastName;
    protected $customerFirstName;
    protected $shippingAddress;
    protected $uncategorizedText;
    protected $accessActivityLog;
    protected $cancellationPolicyDisclosure;
    protected $cancellationRebuttal;
    protected $refundPolicyDisclosure;
    protected $refundRefusalExplanation;
    protected $cancellationPolicyFile;
    protected $customerCommunicationFile;
    protected $refundPolicyFile;
    protected $shippingDocumentationFile;
    protected $uncategorizedFile;
    protected $serviceDocumentationFile;

    /**
     * Customer email address.
     */
    public function setCustomerEmailAddress($customerEmailAddress): static
    {
        $this->customerEmailAddress = $customerEmailAddress;

        return $this;
    }

    /**
     * Customer last name.
     */
    public function setCustomerLastName($customerLastName): static
    {
        $this->customerLastName = $customerLastName;

        return $this;
    }

    /**
     * Customer first name.
     */
    public function setCustomerFirstName($customerFirstName): static
    {
        $this->customerFirstName = $customerFirstName;

        return $this;
    }

    /**
     * The shipping address associated with the dispute evidence.
     */
    public function setShippingAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->shippingAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * Uncategorized text.
     */
    public function setUncategorizedText($uncategorizedText): static
    {
        $this->uncategorizedText = $uncategorizedText;

        return $this;
    }

    /**
     * Activity logs.
     */
    public function setAccessActivityLog($accessActivityLog): static
    {
        $this->accessActivityLog = $accessActivityLog;

        return $this;
    }

    /**
     * Cancellation policy disclosure.
     */
    public function setCancellationPolicyDisclosure($cancellationPolicyDisclosure): static
    {
        $this->cancellationPolicyDisclosure = $cancellationPolicyDisclosure;

        return $this;
    }

    /**
     * Cancellation rebuttal.
     */
    public function setCancellationRebuttal($cancellationRebuttal): static
    {
        $this->cancellationRebuttal = $cancellationRebuttal;

        return $this;
    }

    /**
     * Refund policy disclosure.
     */
    public function setRefundPolicyDisclosure($refundPolicyDisclosure): static
    {
        $this->refundPolicyDisclosure = $refundPolicyDisclosure;

        return $this;
    }

    /**
     * Refund refusal explanation.
     */
    public function setRefundRefusalExplanation($refundRefusalExplanation): static
    {
        $this->refundRefusalExplanation = $refundRefusalExplanation;

        return $this;
    }

    /**
     * Cancellation policy file.
     */
    public function setCancellationPolicyFile(ShopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject $shopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject): static
    {
        $this->cancellationPolicyFile = $shopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject;

        return $this;
    }

    /**
     * Customer communication file.
     */
    public function setCustomerCommunicationFile(ShopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject $shopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject): static
    {
        $this->customerCommunicationFile = $shopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject;

        return $this;
    }

    /**
     * Refund policy file.
     */
    public function setRefundPolicyFile(ShopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject $shopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject): static
    {
        $this->refundPolicyFile = $shopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject;

        return $this;
    }

    /**
     * Shipping documentation file.
     */
    public function setShippingDocumentationFile(ShopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject $shopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject): static
    {
        $this->shippingDocumentationFile = $shopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject;

        return $this;
    }

    /**
     * Uncategorized file.
     */
    public function setUncategorizedFile(ShopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject $shopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject): static
    {
        $this->uncategorizedFile = $shopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject;

        return $this;
    }

    /**
     * Service documentation file.
     */
    public function setServiceDocumentationFile(ShopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject $shopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject): static
    {
        $this->serviceDocumentationFile = $shopifyShopifyPaymentsDisputeFileUploadUpdateInputInputObject;

        return $this;
    }
}
