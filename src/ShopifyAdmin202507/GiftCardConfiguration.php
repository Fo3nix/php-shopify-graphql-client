<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;

class GiftCardConfiguration
{
    protected $issueLimit;
    protected $purchaseLimit;

    
    /**
     * @return MoneyV2
     */
    public function getIssueLimit()
    {
        return $this->issueLimit;
    }

    
    /**
     * @return MoneyV2
     */
    public function getPurchaseLimit()
    {
        return $this->purchaseLimit;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['issueLimit']) && $data['issueLimit'] !== null) {
                $instance->issueLimit = MoneyV2::fromArray($data['issueLimit']);
            }
            if (isset($data['purchaseLimit']) && $data['purchaseLimit'] !== null) {
                $instance->purchaseLimit = MoneyV2::fromArray($data['purchaseLimit']);
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
            if ($this->issueLimit !== null) {
                $data['issueLimit'] = $this->issueLimit->asArray();
            }
            if ($this->purchaseLimit !== null) {
                $data['purchaseLimit'] = $this->purchaseLimit->asArray();
            }
            return $data;
        }
}
