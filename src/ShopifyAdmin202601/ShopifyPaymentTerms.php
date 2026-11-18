<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDraftOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPaymentScheduleConnection;

/**
 * Payment conditions for an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) or [`DraftOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder), including when payment is due and how it's scheduled. Payment terms are created from templates that specify net terms (payment due after a certain number of days) or fixed schedules with specific due dates. You can optionally provide custom payment schedules using [`PaymentScheduleInput`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/PaymentScheduleInput).
 *
 * Each payment term contains one or more [`PaymentSchedule`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PaymentSchedule), which you can access through the [`paymentSchedules`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PaymentTerms#field-PaymentTerms.fields.paymentSchedules) field. Payment schedules contain detailed information for each payment installment.
 *
 * Learn more about [payment terms](https://shopify.dev/docs/apps/build/checkout/payments/payment-terms).
 */
class ShopifyPaymentTerms implements ShopifyNode
{
    protected $draftOrder;
    protected $due;
    protected $dueInDays;
    protected $id;
    protected $order;
    protected $overdue;
    protected $paymentSchedules;
    protected $paymentTermsName;
    protected $paymentTermsType;
    protected $translatedName;

    
    /**
     * The draft order associated with the payment terms.
     *
     * @return ShopifyDraftOrder
     */
    public function getDraftOrder(): ?ShopifyDraftOrder
    {
        return $this->draftOrder;
    }

    
    /**
     * Whether payment terms have a payment schedule that's due.
     *
     * @return bool
     */
    public function getDue(): ?bool
    {
        return $this->due;
    }

    
    /**
     * Duration of payment terms in days based on the payment terms template used to create the payment terms.
     *
     * @return int
     */
    public function getDueInDays(): ?int
    {
        return $this->dueInDays;
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
     * The order associated with the payment terms.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * Whether the payment terms have overdue payment schedules.
     *
     * @return bool
     */
    public function getOverdue(): ?bool
    {
        return $this->overdue;
    }

    
    /**
     * List of schedules for the payment terms.
     *
     * @return ShopifyPaymentScheduleConnection
     */
    public function getPaymentSchedules(): ?ShopifyPaymentScheduleConnection
    {
        return $this->paymentSchedules;
    }

    
    /**
     * The name of the payment terms template used to create the payment terms.
     *
     * @return string
     */
    public function getPaymentTermsName(): ?string
    {
        return $this->paymentTermsName;
    }

    
    /**
     * The payment terms template type used to create the payment terms.
     *
     * @return string A ShopifyPaymentTermsTypeEnumObject value
     */
    public function getPaymentTermsType(): ?string
    {
        return $this->paymentTermsType;
    }

    
    /**
     * The payment terms name, translated into the shop admin's preferred language.
     *
     * @return string
     */
    public function getTranslatedName(): ?string
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
                $instance->draftOrder = ShopifyDraftOrder::fromArray($data['draftOrder']);
            }
            if (isset($data['due']) && $data['due'] !== null) {
                $instance->due = $data['due'];
            }
            if (isset($data['dueInDays']) && $data['dueInDays'] !== null) {
                $instance->dueInDays = $data['dueInDays'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['overdue']) && $data['overdue'] !== null) {
                $instance->overdue = $data['overdue'];
            }
            if (isset($data['paymentSchedules']) && $data['paymentSchedules'] !== null) {
                $instance->paymentSchedules = ShopifyPaymentScheduleConnection::fromArray($data['paymentSchedules']);
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
            if ($this->due !== null) {
                $data['due'] = $this->due;
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
