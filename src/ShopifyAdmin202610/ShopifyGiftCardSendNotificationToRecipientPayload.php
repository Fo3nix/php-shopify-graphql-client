<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyGiftCard;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyGiftCardSendNotificationToRecipientUserError;

/**
 * Return type for `giftCardSendNotificationToRecipient` mutation.
 */
class ShopifyGiftCardSendNotificationToRecipientPayload
{
    protected $giftCard;
    protected $userErrors;

    
    /**
     * The gift card that was sent.
     *
     * @return ShopifyGiftCard
     */
    public function getGiftCard(): ?ShopifyGiftCard
    {
        return $this->giftCard;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyGiftCardSendNotificationToRecipientUserError[]
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
            if (isset($data['giftCard']) && $data['giftCard'] !== null) {
                $instance->giftCard = ShopifyGiftCard::fromArray($data['giftCard']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyGiftCardSendNotificationToRecipientUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->giftCard !== null) {
                $data['giftCard'] = $this->giftCard->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
