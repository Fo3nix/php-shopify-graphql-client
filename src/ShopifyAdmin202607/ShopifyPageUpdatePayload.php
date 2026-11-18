<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPageUpdateUserError;

/**
 * Return type for `pageUpdate` mutation.
 */
class ShopifyPageUpdatePayload
{
    protected $page;
    protected $userErrors;

    
    /**
     * The page that was updated.
     *
     * @return ShopifyPage
     */
    public function getPage(): ?ShopifyPage
    {
        return $this->page;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyPageUpdateUserError[]
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
            if (isset($data['page']) && $data['page'] !== null) {
                $instance->page = ShopifyPage::fromArray($data['page']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyPageUpdateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->page !== null) {
                $data['page'] = $this->page->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
