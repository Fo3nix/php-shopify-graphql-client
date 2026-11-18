<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * A warning indicating that the market region country code is not supported with Markets.
 */
class ShopifyDraftOrderMarketRegionCountryCodeNotSupportedWarning implements ShopifyDraftOrderWarning
{
    protected $errorCode;
    protected $field;
    protected $message;

    
    /**
     * The error code.
     *
     * @return string
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    
    /**
     * The input field that the warning applies to.
     *
     * @return string
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    
    /**
     * The warning message.
     *
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
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
            if (isset($data['field']) && $data['field'] !== null) {
                $instance->field = $data['field'];
            }
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
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
            if ($this->field !== null) {
                $data['field'] = $this->field;
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            return $data;
        }
}
