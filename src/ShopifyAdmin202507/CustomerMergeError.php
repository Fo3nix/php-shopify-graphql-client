<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CustomerMergeError
{
    protected $errorFields;
    protected $message;

    
    /**
     * @return CustomerMergeErrorFieldTypeEnumObject[]
     */
    public function getErrorFields()
    {
        return $this->errorFields;
    }

    
    /**
     * @return string
     */
    public function getMessage()
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
