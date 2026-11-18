<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUrlRedirectImport;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUrlRedirectImportUserError;

/**
 * Return type for `urlRedirectImportCreate` mutation.
 */
class ShopifyUrlRedirectImportCreatePayload
{
    protected $urlRedirectImport;
    protected $userErrors;

    
    /**
     * The created `URLRedirectImport` object.
     *
     * @return ShopifyUrlRedirectImport
     */
    public function getUrlRedirectImport(): ?ShopifyUrlRedirectImport
    {
        return $this->urlRedirectImport;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUrlRedirectImportUserError[]
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
            if (isset($data['urlRedirectImport']) && $data['urlRedirectImport'] !== null) {
                $instance->urlRedirectImport = ShopifyUrlRedirectImport::fromArray($data['urlRedirectImport']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUrlRedirectImportUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->urlRedirectImport !== null) {
                $data['urlRedirectImport'] = $this->urlRedirectImport->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
