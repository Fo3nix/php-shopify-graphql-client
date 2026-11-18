<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPaymentReminderSendUserError;

/**
 * Return type for `paymentReminderSend` mutation.
 */
class ShopifyPaymentReminderSendPayload
{
    protected $success;
    protected $userErrors;

    
    /**
     * Whether the payment reminder email was successfully sent.
     *
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyPaymentReminderSendUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['success']) && $data['success'] !== null) {
                $instance->success = $data['success'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyPaymentReminderSendUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->success !== null) {
                $data['success'] = $this->success;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
