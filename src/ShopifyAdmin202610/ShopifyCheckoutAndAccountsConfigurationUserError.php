<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * An error that occurs during the execution of a mutation for managing checkout and accounts configurations.
 */
class ShopifyCheckoutAndAccountsConfigurationUserError implements ShopifyDisplayableError
{
    protected $code;
    protected $field;
    protected $message;
    protected $reason;

    
    /**
     * The error code.
     *
     * @return string A ShopifyCheckoutAndAccountsConfigurationUserErrorCodeEnumObject value
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * The path to the input field that caused the error.
     *
     * @return string[]
     */
    public function getField(): ?array
    {
        return $this->field;
    }

    
    /**
     * The error message.
     *
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    
    /**
     * The reason for the error.
     *
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['field']) && $data['field'] !== null) {
                $instance->field = $data['field'];
            }
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
            }
            if (isset($data['reason']) && $data['reason'] !== null) {
                $instance->reason = $data['reason'];
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
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->field !== null) {
                $data['field'] = $this->field;
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            if ($this->reason !== null) {
                $data['reason'] = $this->reason;
            }
            return $data;
        }
}
