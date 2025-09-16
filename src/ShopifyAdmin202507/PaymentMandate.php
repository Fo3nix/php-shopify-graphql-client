<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PaymentInstrument;

class PaymentMandate
{
    protected $id;
    protected $paymentInstrument;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return PaymentInstrument
     */
    public function getPaymentInstrument()
    {
        return $this->paymentInstrument;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['paymentInstrument']) && $data['paymentInstrument'] !== null) {
                $instance->paymentInstrument = PaymentInstrument::fromArray($data['paymentInstrument']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->paymentInstrument !== null) {
                $data['paymentInstrument'] = $this->paymentInstrument->asArray();
            }
            return $data;
        }
}
