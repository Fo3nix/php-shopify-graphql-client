<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MailingAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsDisputeFileUpload;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsDispute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsDisputeFulfillment;

class ShopifyPaymentsDisputeEvidence
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
     * @return string
     */
    public function getAccessActivityLog()
    {
        return $this->accessActivityLog;
    }

    
    /**
     * @return MailingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    
    /**
     * @return string
     */
    public function getCancellationPolicyDisclosure()
    {
        return $this->cancellationPolicyDisclosure;
    }

    
    /**
     * @return ShopifyPaymentsDisputeFileUpload
     */
    public function getCancellationPolicyFile()
    {
        return $this->cancellationPolicyFile;
    }

    
    /**
     * @return string
     */
    public function getCancellationRebuttal()
    {
        return $this->cancellationRebuttal;
    }

    
    /**
     * @return ShopifyPaymentsDisputeFileUpload
     */
    public function getCustomerCommunicationFile()
    {
        return $this->customerCommunicationFile;
    }

    
    /**
     * @return string
     */
    public function getCustomerEmailAddress()
    {
        return $this->customerEmailAddress;
    }

    
    /**
     * @return string
     */
    public function getCustomerFirstName()
    {
        return $this->customerFirstName;
    }

    
    /**
     * @return string
     */
    public function getCustomerLastName()
    {
        return $this->customerLastName;
    }

    
    /**
     * @return string
     */
    public function getCustomerPurchaseIp()
    {
        return $this->customerPurchaseIp;
    }

    
    /**
     * @return ShopifyPaymentsDispute
     */
    public function getDispute()
    {
        return $this->dispute;
    }

    
    /**
     * @return ShopifyPaymentsDisputeFileUpload[]
     */
    public function getDisputeFileUploads()
    {
        return $this->disputeFileUploads;
    }

    
    /**
     * @return ShopifyPaymentsDisputeFulfillment[]
     */
    public function getFulfillments()
    {
        return $this->fulfillments;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    
    /**
     * @return string
     */
    public function getRefundPolicyDisclosure()
    {
        return $this->refundPolicyDisclosure;
    }

    
    /**
     * @return ShopifyPaymentsDisputeFileUpload
     */
    public function getRefundPolicyFile()
    {
        return $this->refundPolicyFile;
    }

    
    /**
     * @return string
     */
    public function getRefundRefusalExplanation()
    {
        return $this->refundRefusalExplanation;
    }

    
    /**
     * @return ShopifyPaymentsDisputeFileUpload
     */
    public function getServiceDocumentationFile()
    {
        return $this->serviceDocumentationFile;
    }

    
    /**
     * @return MailingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    
    /**
     * @return ShopifyPaymentsDisputeFileUpload
     */
    public function getShippingDocumentationFile()
    {
        return $this->shippingDocumentationFile;
    }

    
    /**
     * @return bool
     */
    public function getSubmitted()
    {
        return $this->submitted;
    }

    
    /**
     * @return ShopifyPaymentsDisputeFileUpload
     */
    public function getUncategorizedFile()
    {
        return $this->uncategorizedFile;
    }

    
    /**
     * @return string
     */
    public function getUncategorizedText()
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
                $instance->billingAddress = MailingAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['cancellationPolicyDisclosure']) && $data['cancellationPolicyDisclosure'] !== null) {
                $instance->cancellationPolicyDisclosure = $data['cancellationPolicyDisclosure'];
            }
            if (isset($data['cancellationPolicyFile']) && $data['cancellationPolicyFile'] !== null) {
                $instance->cancellationPolicyFile = ShopifyPaymentsDisputeFileUpload::fromArray($data['cancellationPolicyFile']);
            }
            if (isset($data['cancellationRebuttal']) && $data['cancellationRebuttal'] !== null) {
                $instance->cancellationRebuttal = $data['cancellationRebuttal'];
            }
            if (isset($data['customerCommunicationFile']) && $data['customerCommunicationFile'] !== null) {
                $instance->customerCommunicationFile = ShopifyPaymentsDisputeFileUpload::fromArray($data['customerCommunicationFile']);
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
                $instance->dispute = ShopifyPaymentsDispute::fromArray($data['dispute']);
            }
            if (isset($data['disputeFileUploads']) && $data['disputeFileUploads'] !== null) {
                $instance->disputeFileUploads = array_map(function($item) { return ShopifyPaymentsDisputeFileUpload::fromArray($item); }, $data['disputeFileUploads']);
            }
            if (isset($data['fulfillments']) && $data['fulfillments'] !== null) {
                $instance->fulfillments = array_map(function($item) { return ShopifyPaymentsDisputeFulfillment::fromArray($item); }, $data['fulfillments']);
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
                $instance->refundPolicyFile = ShopifyPaymentsDisputeFileUpload::fromArray($data['refundPolicyFile']);
            }
            if (isset($data['refundRefusalExplanation']) && $data['refundRefusalExplanation'] !== null) {
                $instance->refundRefusalExplanation = $data['refundRefusalExplanation'];
            }
            if (isset($data['serviceDocumentationFile']) && $data['serviceDocumentationFile'] !== null) {
                $instance->serviceDocumentationFile = ShopifyPaymentsDisputeFileUpload::fromArray($data['serviceDocumentationFile']);
            }
            if (isset($data['shippingAddress']) && $data['shippingAddress'] !== null) {
                $instance->shippingAddress = MailingAddress::fromArray($data['shippingAddress']);
            }
            if (isset($data['shippingDocumentationFile']) && $data['shippingDocumentationFile'] !== null) {
                $instance->shippingDocumentationFile = ShopifyPaymentsDisputeFileUpload::fromArray($data['shippingDocumentationFile']);
            }
            if (isset($data['submitted']) && $data['submitted'] !== null) {
                $instance->submitted = $data['submitted'];
            }
            if (isset($data['uncategorizedFile']) && $data['uncategorizedFile'] !== null) {
                $instance->uncategorizedFile = ShopifyPaymentsDisputeFileUpload::fromArray($data['uncategorizedFile']);
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
