<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ShopPayPaymentRequestReceiptProcessingStatus
{
    protected $errorCode;
    protected $message;
    protected $state;

    
    /**
     * @return ShopPayPaymentRequestReceiptProcessingStatusErrorCodeEnumObject
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    
    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    
    /**
     * @return ShopPayPaymentRequestReceiptProcessingStatusStateEnumObject
     */
    public function getState()
    {
        return $this->state;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['errorCode']) && $data['errorCode'] !== null) {
                $instance->errorCode = $data['errorCode'];
            }
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
            }
            if (isset($data['state']) && $data['state'] !== null) {
                $instance->state = $data['state'];
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
            if ($this->errorCode !== null) {
                $data['errorCode'] = $this->errorCode;
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            if ($this->state !== null) {
                $data['state'] = $this->state;
            }
            return $data;
        }
}
