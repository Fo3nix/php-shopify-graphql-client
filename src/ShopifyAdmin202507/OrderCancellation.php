<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class OrderCancellation
{
    protected $staffNote;

    
    /**
     * @return string
     */
    public function getStaffNote()
    {
        return $this->staffNote;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['staffNote']) && $data['staffNote'] !== null) {
                $instance->staffNote = $data['staffNote'];
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
            if ($this->staffNote !== null) {
                $data['staffNote'] = $this->staffNote;
            }
            return $data;
        }
}
