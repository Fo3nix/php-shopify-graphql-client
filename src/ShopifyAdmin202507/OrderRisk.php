<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class OrderRisk
{
    protected $display;
    protected $level;
    protected $message;

    
    /**
     * @return bool
     */
    public function getDisplay()
    {
        return $this->display;
    }

    
    /**
     * @return OrderRiskLevelEnumObject
     */
    public function getLevel()
    {
        return $this->level;
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
            if (isset($data['display']) && $data['display'] !== null) {
                $instance->display = $data['display'];
            }
            if (isset($data['level']) && $data['level'] !== null) {
                $instance->level = $data['level'];
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
            if ($this->display !== null) {
                $data['display'] = $this->display;
            }
            if ($this->level !== null) {
                $data['level'] = $this->level;
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            return $data;
        }
}
