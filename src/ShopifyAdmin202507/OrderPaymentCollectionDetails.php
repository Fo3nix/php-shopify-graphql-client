<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PaymentMandate;

class OrderPaymentCollectionDetails
{
    protected $additionalPaymentCollectionUrl;
    protected $vaultedPaymentMethods;

    
    /**
     * @return string
     */
    public function getAdditionalPaymentCollectionUrl()
    {
        return $this->additionalPaymentCollectionUrl;
    }

    
    /**
     * @return PaymentMandate[]
     */
    public function getVaultedPaymentMethods()
    {
        return $this->vaultedPaymentMethods;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['additionalPaymentCollectionUrl']) && $data['additionalPaymentCollectionUrl'] !== null) {
                $instance->additionalPaymentCollectionUrl = $data['additionalPaymentCollectionUrl'];
            }
            if (isset($data['vaultedPaymentMethods']) && $data['vaultedPaymentMethods'] !== null) {
                $instance->vaultedPaymentMethods = array_map(function($item) { return PaymentMandate::fromArray($item); }, $data['vaultedPaymentMethods']);
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
            if ($this->additionalPaymentCollectionUrl !== null) {
                $data['additionalPaymentCollectionUrl'] = $this->additionalPaymentCollectionUrl;
            }
            if ($this->vaultedPaymentMethods !== null) {
                $data['vaultedPaymentMethods'] = array_map(function($item) { return $item->asArray(); }, $this->vaultedPaymentMethods);
            }
            return $data;
        }
}
