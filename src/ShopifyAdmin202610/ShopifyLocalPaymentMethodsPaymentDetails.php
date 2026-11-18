<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Local payment methods payment details related to a transaction.
 */
class ShopifyLocalPaymentMethodsPaymentDetails implements ShopifyBasePaymentDetails
{
    protected $paymentDescriptor;
    protected $paymentMethodName;

    
    /**
     * The descriptor by the payment provider. Only available for Amazon Pay and Buy with Prime.
     *
     * @return string
     */
    public function getPaymentDescriptor(): ?string
    {
        return $this->paymentDescriptor;
    }

    
    /**
     * The name of payment method used by the buyer.
     *
     * @return string
     */
    public function getPaymentMethodName(): ?string
    {
        return $this->paymentMethodName;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['paymentDescriptor']) && $data['paymentDescriptor'] !== null) {
                $instance->paymentDescriptor = $data['paymentDescriptor'];
            }
            if (isset($data['paymentMethodName']) && $data['paymentMethodName'] !== null) {
                $instance->paymentMethodName = $data['paymentMethodName'];
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
            if ($this->paymentDescriptor !== null) {
                $data['paymentDescriptor'] = $this->paymentDescriptor;
            }
            if ($this->paymentMethodName !== null) {
                $data['paymentMethodName'] = $this->paymentMethodName;
            }
            return $data;
        }
}
