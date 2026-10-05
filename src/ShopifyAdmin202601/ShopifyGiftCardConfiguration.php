<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;

class ShopifyGiftCardConfiguration
{
    protected $issueLimit;
    protected $purchaseLimit;

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getIssueLimit()
    {
        return $this->issueLimit;
    }

    
    /**
     * @return ShopifyMoneyV2
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
                $instance->issueLimit = ShopifyMoneyV2::fromArray($data['issueLimit']);
            }
            if (isset($data['purchaseLimit']) && $data['purchaseLimit'] !== null) {
                $instance->purchaseLimit = ShopifyMoneyV2::fromArray($data['purchaseLimit']);
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
