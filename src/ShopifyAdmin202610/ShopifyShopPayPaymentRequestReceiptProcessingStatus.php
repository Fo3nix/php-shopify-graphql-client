<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * The processing status of a Shop Pay payment request.
 * Represents the different states a payment request can be in during its lifecycle,
 * from initial creation through to completion or failure.
 */
class ShopifyShopPayPaymentRequestReceiptProcessingStatus
{
    protected $errorCode;
    protected $message;
    protected $state;

    
    /**
     * A standardized error code, independent of the payment provider.
     *
     * @return string A ShopifyShopPayPaymentRequestReceiptProcessingStatusErrorCodeEnumObject value
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    
    /**
     * The message of the payment request receipt.
     *
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    
    /**
     * The state of the payment request receipt.
     *
     * @return string A ShopifyShopPayPaymentRequestReceiptProcessingStatusStateEnumObject value
     */
    public function getState(): ?string
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
