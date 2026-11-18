<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Additional information about why a merchant declined the customer's return request.
 */
class ShopifyReturnDecline
{
    protected $note;
    protected $reason;

    
    /**
     * The notification message sent to the customer about their declined return request.
     * Maximum length: 500 characters.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * The reason the customer's return request was declined.
     *
     * @return string A ShopifyReturnDeclineReasonEnumObject value
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
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
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
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->reason !== null) {
                $data['reason'] = $this->reason;
            }
            return $data;
        }
}
