<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DraftOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Order;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PaymentScheduleConnection;

class PaymentTerms
{
    protected $draftOrder;
    protected $dueInDays;
    protected $id;
    protected $order;
    protected $overdue;
    protected $paymentSchedules;
    protected $paymentTermsName;
    protected $paymentTermsType;
    protected $translatedName;

    
    /**
     * @return DraftOrder
     */
    public function getDraftOrder()
    {
        return $this->draftOrder;
    }

    
    /**
     * @return int
     */
    public function getDueInDays()
    {
        return $this->dueInDays;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return bool
     */
    public function getOverdue()
    {
        return $this->overdue;
    }

    
    /**
     * @return PaymentScheduleConnection
     */
    public function getPaymentSchedules()
    {
        return $this->paymentSchedules;
    }

    
    /**
     * @return string
     */
    public function getPaymentTermsName()
    {
        return $this->paymentTermsName;
    }

    
    /**
     * @return PaymentTermsTypeEnumObject
     */
    public function getPaymentTermsType()
    {
        return $this->paymentTermsType;
    }

    
    /**
     * @return string
     */
    public function getTranslatedName()
    {
        return $this->translatedName;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['draftOrder']) && $data['draftOrder'] !== null) {
                $instance->draftOrder = DraftOrder::fromArray($data['draftOrder']);
            }
            if (isset($data['dueInDays']) && $data['dueInDays'] !== null) {
                $instance->dueInDays = $data['dueInDays'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = Order::fromArray($data['order']);
            }
            if (isset($data['overdue']) && $data['overdue'] !== null) {
                $instance->overdue = $data['overdue'];
            }
            if (isset($data['paymentSchedules']) && $data['paymentSchedules'] !== null) {
                $instance->paymentSchedules = PaymentScheduleConnection::fromArray($data['paymentSchedules']);
            }
            if (isset($data['paymentTermsName']) && $data['paymentTermsName'] !== null) {
                $instance->paymentTermsName = $data['paymentTermsName'];
            }
            if (isset($data['paymentTermsType']) && $data['paymentTermsType'] !== null) {
                $instance->paymentTermsType = $data['paymentTermsType'];
            }
            if (isset($data['translatedName']) && $data['translatedName'] !== null) {
                $instance->translatedName = $data['translatedName'];
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
            if ($this->draftOrder !== null) {
                $data['draftOrder'] = $this->draftOrder->asArray();
            }
            if ($this->dueInDays !== null) {
                $data['dueInDays'] = $this->dueInDays;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->overdue !== null) {
                $data['overdue'] = $this->overdue;
            }
            if ($this->paymentSchedules !== null) {
                $data['paymentSchedules'] = $this->paymentSchedules->asArray();
            }
            if ($this->paymentTermsName !== null) {
                $data['paymentTermsName'] = $this->paymentTermsName;
            }
            if ($this->paymentTermsType !== null) {
                $data['paymentTermsType'] = $this->paymentTermsType;
            }
            if ($this->translatedName !== null) {
                $data['translatedName'] = $this->translatedName;
            }
            return $data;
        }
}
