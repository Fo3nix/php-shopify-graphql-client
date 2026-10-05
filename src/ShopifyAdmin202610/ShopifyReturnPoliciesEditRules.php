<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyReturnPoliciesEditRules
{
    protected $canAcceptEdits;
    protected $editWindowMinutes;

    
    /**
     * @return bool
     */
    public function getCanAcceptEdits()
    {
        return $this->canAcceptEdits;
    }

    
    /**
     * @return int
     */
    public function getEditWindowMinutes()
    {
        return $this->editWindowMinutes;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['canAcceptEdits']) && $data['canAcceptEdits'] !== null) {
                $instance->canAcceptEdits = $data['canAcceptEdits'];
            }
            if (isset($data['editWindowMinutes']) && $data['editWindowMinutes'] !== null) {
                $instance->editWindowMinutes = $data['editWindowMinutes'];
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
            if ($this->canAcceptEdits !== null) {
                $data['canAcceptEdits'] = $this->canAcceptEdits;
            }
            if ($this->editWindowMinutes !== null) {
                $data['editWindowMinutes'] = $this->editWindowMinutes;
            }
            return $data;
        }
}
