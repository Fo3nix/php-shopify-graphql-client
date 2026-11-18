<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPaymentTerms;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPaymentTermsCreateUserError;

/**
 * Return type for `paymentTermsCreate` mutation.
 */
class ShopifyPaymentTermsCreatePayload
{
    protected $paymentTerms;
    protected $userErrors;

    
    /**
     * The created payment terms.
     *
     * @return ShopifyPaymentTerms
     */
    public function getPaymentTerms(): ?ShopifyPaymentTerms
    {
        return $this->paymentTerms;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyPaymentTermsCreateUserError[]
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
            if (isset($data['paymentTerms']) && $data['paymentTerms'] !== null) {
                $instance->paymentTerms = ShopifyPaymentTerms::fromArray($data['paymentTerms']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyPaymentTermsCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->paymentTerms !== null) {
                $data['paymentTerms'] = $this->paymentTerms->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
