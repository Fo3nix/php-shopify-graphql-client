<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class DiscountUserError
{
    protected $code;
    protected $extraInfo;
    protected $field;
    protected $message;

    
    /**
     * @return DiscountErrorCodeEnumObject
     */
    public function getCode()
    {
        return $this->code;
    }

    
    /**
     * @return string
     */
    public function getExtraInfo()
    {
        return $this->extraInfo;
    }

    
    /**
     * @return string[]
     */
    public function getField()
    {
        return $this->field;
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
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['extraInfo']) && $data['extraInfo'] !== null) {
                $instance->extraInfo = $data['extraInfo'];
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
            if ($this->extraInfo !== null) {
                $data['extraInfo'] = $this->extraInfo;
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
