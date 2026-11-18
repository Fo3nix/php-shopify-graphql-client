<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The error blocking a customer merge.
 */
class ShopifyCustomerMergeError
{
    protected $errorFields;
    protected $message;

    
    /**
     * The list of fields preventing the customer from being merged.
     *
     * @return string[] ShopifyCustomerMergeErrorFieldTypeEnumObject values
     */
    public function getErrorFields(): ?array
    {
        return $this->errorFields;
    }

    
    /**
     * The customer merge error message.
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
            if (isset($data['errorFields']) && $data['errorFields'] !== null) {
                $instance->errorFields = $data['errorFields'];
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
            if ($this->errorFields !== null) {
                $data['errorFields'] = $this->errorFields;
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            return $data;
        }
}
