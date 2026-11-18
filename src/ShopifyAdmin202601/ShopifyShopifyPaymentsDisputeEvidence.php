<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyShopifyPaymentsDisputeFileUpload;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyShopifyPaymentsDispute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyShopifyPaymentsDisputeFulfillment;

/**
 * The evidence associated with the dispute.
 */
class ShopifyShopifyPaymentsDisputeEvidence implements ShopifyNode
{
    protected $accessActivityLog;
    protected $billingAddress;
    protected $cancellationPolicyDisclosure;
    protected $cancellationPolicyFile;
    protected $cancellationRebuttal;
    protected $customerCommunicationFile;
    protected $customerEmailAddress;
    protected $customerFirstName;
    protected $customerLastName;
    protected $customerPurchaseIp;
    protected $dispute;
    protected $disputeFileUploads;
    protected $fulfillments;
    protected $id;
    protected $productDescription;
    protected $refundPolicyDisclosure;
    protected $refundPolicyFile;
    protected $refundRefusalExplanation;
    protected $serviceDocumentationFile;
    protected $shippingAddress;
    protected $shippingDocumentationFile;
    protected $submitted;
    protected $uncategorizedFile;
    protected $uncategorizedText;

    
    /**
     * The activity logs associated with the dispute evidence.
     *
     * @return string
     */
    public function getAccessActivityLog(): ?string
    {
        return $this->accessActivityLog;
    }

    
    /**
     * The billing address that's provided by the customer.
     *
     * @return ShopifyMailingAddress
     */
    public function getBillingAddress(): ?ShopifyMailingAddress
    {
        return $this->billingAddress;
    }

    
    /**
     * The cancellation policy disclosure associated with the dispute evidence.
     *
     * @return string
     */
    public function getCancellationPolicyDisclosure(): ?string
    {
        return $this->cancellationPolicyDisclosure;
    }

    
    /**
     * The cancellation policy file associated with the dispute evidence.
     *
     * @return ShopifyShopifyPaymentsDisputeFileUpload
     */
    public function getCancellationPolicyFile(): ?ShopifyShopifyPaymentsDisputeFileUpload
    {
        return $this->cancellationPolicyFile;
    }

    
    /**
     * The cancellation rebuttal associated with the dispute evidence.
     *
     * @return string
     */
    public function getCancellationRebuttal(): ?string
    {
        return $this->cancellationRebuttal;
    }

    
    /**
     * The customer communication file associated with the dispute evidence.
     *
     * @return ShopifyShopifyPaymentsDisputeFileUpload
     */
    public function getCustomerCommunicationFile(): ?ShopifyShopifyPaymentsDisputeFileUpload
    {
        return $this->customerCommunicationFile;
    }

    
    /**
     * The customer's email address.
     *
     * @return string
     */
    public function getCustomerEmailAddress(): ?string
    {
        return $this->customerEmailAddress;
    }

    
    /**
     * The customer's first name.
     *
     * @return string
     */
    public function getCustomerFirstName(): ?string
    {
        return $this->customerFirstName;
    }

    
    /**
     * The customer's last name.
     *
     * @return string
     */
    public function getCustomerLastName(): ?string
    {
        return $this->customerLastName;
    }

    
    /**
     * The customer purchase ip for this dispute evidence.
     *
     * @return string
     */
    public function getCustomerPurchaseIp(): ?string
    {
        return $this->customerPurchaseIp;
    }

    
    /**
     * The dispute associated with the evidence.
     *
     * @return ShopifyShopifyPaymentsDispute
     */
    public function getDispute(): ?ShopifyShopifyPaymentsDispute
    {
        return $this->dispute;
    }

    
    /**
     * The file uploads associated with the dispute evidence.
     *
     * @return ShopifyShopifyPaymentsDisputeFileUpload[]
     */
    public function getDisputeFileUploads(): ?array
    {
        return $this->disputeFileUploads;
    }

    
    /**
     * The fulfillments associated with the dispute evidence.
     *
     * @return ShopifyShopifyPaymentsDisputeFulfillment[]
     */
    public function getFulfillments(): ?array
    {
        return $this->fulfillments;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The product description for this dispute evidence.
     *
     * @return string
     */
    public function getProductDescription(): ?string
    {
        return $this->productDescription;
    }

    
    /**
     * The refund policy disclosure associated with the dispute evidence.
     *
     * @return string
     */
    public function getRefundPolicyDisclosure(): ?string
    {
        return $this->refundPolicyDisclosure;
    }

    
    /**
     * The refund policy file associated with the dispute evidence.
     *
     * @return ShopifyShopifyPaymentsDisputeFileUpload
     */
    public function getRefundPolicyFile(): ?ShopifyShopifyPaymentsDisputeFileUpload
    {
        return $this->refundPolicyFile;
    }

    
    /**
     * The refund refusal explanation associated with dispute evidence.
     *
     * @return string
     */
    public function getRefundRefusalExplanation(): ?string
    {
        return $this->refundRefusalExplanation;
    }

    
    /**
     * The service documentation file associated with the dispute evidence.
     *
     * @return ShopifyShopifyPaymentsDisputeFileUpload
     */
    public function getServiceDocumentationFile(): ?ShopifyShopifyPaymentsDisputeFileUpload
    {
        return $this->serviceDocumentationFile;
    }

    
    /**
     * The mailing address for shipping that's provided by the customer.
     *
     * @return ShopifyMailingAddress
     */
    public function getShippingAddress(): ?ShopifyMailingAddress
    {
        return $this->shippingAddress;
    }

    
    /**
     * The shipping documentation file associated with the dispute evidence.
     *
     * @return ShopifyShopifyPaymentsDisputeFileUpload
     */
    public function getShippingDocumentationFile(): ?ShopifyShopifyPaymentsDisputeFileUpload
    {
        return $this->shippingDocumentationFile;
    }

    
    /**
     * Whether the dispute evidence is submitted.
     *
     * @return bool
     */
    public function getSubmitted(): ?bool
    {
        return $this->submitted;
    }

    
    /**
     * The uncategorized file associated with the dispute evidence.
     *
     * @return ShopifyShopifyPaymentsDisputeFileUpload
     */
    public function getUncategorizedFile(): ?ShopifyShopifyPaymentsDisputeFileUpload
    {
        return $this->uncategorizedFile;
    }

    
    /**
     * The uncategorized text for the dispute evidence.
     *
     * @return string
     */
    public function getUncategorizedText(): ?string
    {
        return $this->uncategorizedText;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accessActivityLog']) && $data['accessActivityLog'] !== null) {
                $instance->accessActivityLog = $data['accessActivityLog'];
            }
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = ShopifyMailingAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['cancellationPolicyDisclosure']) && $data['cancellationPolicyDisclosure'] !== null) {
                $instance->cancellationPolicyDisclosure = $data['cancellationPolicyDisclosure'];
            }
            if (isset($data['cancellationPolicyFile']) && $data['cancellationPolicyFile'] !== null) {
                $instance->cancellationPolicyFile = ShopifyShopifyPaymentsDisputeFileUpload::fromArray($data['cancellationPolicyFile']);
            }
            if (isset($data['cancellationRebuttal']) && $data['cancellationRebuttal'] !== null) {
                $instance->cancellationRebuttal = $data['cancellationRebuttal'];
            }
            if (isset($data['customerCommunicationFile']) && $data['customerCommunicationFile'] !== null) {
                $instance->customerCommunicationFile = ShopifyShopifyPaymentsDisputeFileUpload::fromArray($data['customerCommunicationFile']);
            }
            if (isset($data['customerEmailAddress']) && $data['customerEmailAddress'] !== null) {
                $instance->customerEmailAddress = $data['customerEmailAddress'];
            }
            if (isset($data['customerFirstName']) && $data['customerFirstName'] !== null) {
                $instance->customerFirstName = $data['customerFirstName'];
            }
            if (isset($data['customerLastName']) && $data['customerLastName'] !== null) {
                $instance->customerLastName = $data['customerLastName'];
            }
            if (isset($data['customerPurchaseIp']) && $data['customerPurchaseIp'] !== null) {
                $instance->customerPurchaseIp = $data['customerPurchaseIp'];
            }
            if (isset($data['dispute']) && $data['dispute'] !== null) {
                $instance->dispute = ShopifyShopifyPaymentsDispute::fromArray($data['dispute']);
            }
            if (isset($data['disputeFileUploads']) && $data['disputeFileUploads'] !== null) {
                $instance->disputeFileUploads = array_map(function($item) { return ShopifyShopifyPaymentsDisputeFileUpload::fromArray($item); }, $data['disputeFileUploads']);
            }
            if (isset($data['fulfillments']) && $data['fulfillments'] !== null) {
                $instance->fulfillments = array_map(function($item) { return ShopifyShopifyPaymentsDisputeFulfillment::fromArray($item); }, $data['fulfillments']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['productDescription']) && $data['productDescription'] !== null) {
                $instance->productDescription = $data['productDescription'];
            }
            if (isset($data['refundPolicyDisclosure']) && $data['refundPolicyDisclosure'] !== null) {
                $instance->refundPolicyDisclosure = $data['refundPolicyDisclosure'];
            }
            if (isset($data['refundPolicyFile']) && $data['refundPolicyFile'] !== null) {
                $instance->refundPolicyFile = ShopifyShopifyPaymentsDisputeFileUpload::fromArray($data['refundPolicyFile']);
            }
            if (isset($data['refundRefusalExplanation']) && $data['refundRefusalExplanation'] !== null) {
                $instance->refundRefusalExplanation = $data['refundRefusalExplanation'];
            }
            if (isset($data['serviceDocumentationFile']) && $data['serviceDocumentationFile'] !== null) {
                $instance->serviceDocumentationFile = ShopifyShopifyPaymentsDisputeFileUpload::fromArray($data['serviceDocumentationFile']);
            }
            if (isset($data['shippingAddress']) && $data['shippingAddress'] !== null) {
                $instance->shippingAddress = ShopifyMailingAddress::fromArray($data['shippingAddress']);
            }
            if (isset($data['shippingDocumentationFile']) && $data['shippingDocumentationFile'] !== null) {
                $instance->shippingDocumentationFile = ShopifyShopifyPaymentsDisputeFileUpload::fromArray($data['shippingDocumentationFile']);
            }
            if (isset($data['submitted']) && $data['submitted'] !== null) {
                $instance->submitted = $data['submitted'];
            }
            if (isset($data['uncategorizedFile']) && $data['uncategorizedFile'] !== null) {
                $instance->uncategorizedFile = ShopifyShopifyPaymentsDisputeFileUpload::fromArray($data['uncategorizedFile']);
            }
            if (isset($data['uncategorizedText']) && $data['uncategorizedText'] !== null) {
                $instance->uncategorizedText = $data['uncategorizedText'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->accessActivityLog !== null) {
                $data['accessActivityLog'] = $this->accessActivityLog;
            }
            if ($this->billingAddress !== null) {
                $data['billingAddress'] = $this->billingAddress->asArray();
            }
            if ($this->cancellationPolicyDisclosure !== null) {
                $data['cancellationPolicyDisclosure'] = $this->cancellationPolicyDisclosure;
            }
            if ($this->cancellationPolicyFile !== null) {
                $data['cancellationPolicyFile'] = $this->cancellationPolicyFile->asArray();
            }
            if ($this->cancellationRebuttal !== null) {
                $data['cancellationRebuttal'] = $this->cancellationRebuttal;
            }
            if ($this->customerCommunicationFile !== null) {
                $data['customerCommunicationFile'] = $this->customerCommunicationFile->asArray();
            }
            if ($this->customerEmailAddress !== null) {
                $data['customerEmailAddress'] = $this->customerEmailAddress;
            }
            if ($this->customerFirstName !== null) {
                $data['customerFirstName'] = $this->customerFirstName;
            }
            if ($this->customerLastName !== null) {
                $data['customerLastName'] = $this->customerLastName;
            }
            if ($this->customerPurchaseIp !== null) {
                $data['customerPurchaseIp'] = $this->customerPurchaseIp;
            }
            if ($this->dispute !== null) {
                $data['dispute'] = $this->dispute->asArray();
            }
            if ($this->disputeFileUploads !== null) {
                $data['disputeFileUploads'] = array_map(function($item) { return $item->asArray(); }, $this->disputeFileUploads);
            }
            if ($this->fulfillments !== null) {
                $data['fulfillments'] = array_map(function($item) { return $item->asArray(); }, $this->fulfillments);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->productDescription !== null) {
                $data['productDescription'] = $this->productDescription;
            }
            if ($this->refundPolicyDisclosure !== null) {
                $data['refundPolicyDisclosure'] = $this->refundPolicyDisclosure;
            }
            if ($this->refundPolicyFile !== null) {
                $data['refundPolicyFile'] = $this->refundPolicyFile->asArray();
            }
            if ($this->refundRefusalExplanation !== null) {
                $data['refundRefusalExplanation'] = $this->refundRefusalExplanation;
            }
            if ($this->serviceDocumentationFile !== null) {
                $data['serviceDocumentationFile'] = $this->serviceDocumentationFile->asArray();
            }
            if ($this->shippingAddress !== null) {
                $data['shippingAddress'] = $this->shippingAddress->asArray();
            }
            if ($this->shippingDocumentationFile !== null) {
                $data['shippingDocumentationFile'] = $this->shippingDocumentationFile->asArray();
            }
            if ($this->submitted !== null) {
                $data['submitted'] = $this->submitted;
            }
            if ($this->uncategorizedFile !== null) {
                $data['uncategorizedFile'] = $this->uncategorizedFile->asArray();
            }
            if ($this->uncategorizedText !== null) {
                $data['uncategorizedText'] = $this->uncategorizedText;
            }
            return $data;
        }
}
