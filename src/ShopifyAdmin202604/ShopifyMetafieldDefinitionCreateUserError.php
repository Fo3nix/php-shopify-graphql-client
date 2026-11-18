<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * An error that occurs during the execution of `MetafieldDefinitionCreate`.
 */
class ShopifyMetafieldDefinitionCreateUserError implements ShopifyDisplayableError
{
    protected $code;
    protected $elementIndex;
    protected $elementKey;
    protected $field;
    protected $message;

    
    /**
     * The error code.
     *
     * @return string A ShopifyMetafieldDefinitionCreateUserErrorCodeEnumObject value
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * The index of the array element that's causing the error.
     *
     * @return int
     */
    public function getElementIndex(): ?int
    {
        return $this->elementIndex;
    }

    
    /**
     * The key of the failing validation element.
     *
     * @return string
     */
    public function getElementKey(): ?string
    {
        return $this->elementKey;
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['elementIndex']) && $data['elementIndex'] !== null) {
                $instance->elementIndex = $data['elementIndex'];
            }
            if (isset($data['elementKey']) && $data['elementKey'] !== null) {
                $instance->elementKey = $data['elementKey'];
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
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->elementIndex !== null) {
                $data['elementIndex'] = $this->elementIndex;
            }
            if ($this->elementKey !== null) {
                $data['elementKey'] = $this->elementKey;
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
