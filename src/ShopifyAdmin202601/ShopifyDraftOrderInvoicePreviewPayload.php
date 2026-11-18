<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyUserError;

/**
 * Return type for `draftOrderInvoicePreview` mutation.
 */
class ShopifyDraftOrderInvoicePreviewPayload
{
    protected $previewHtml;
    protected $previewSubject;
    protected $userErrors;

    
    /**
     * The draft order invoice email rendered as HTML to allow previewing.
     *
     * @return string
     */
    public function getPreviewHtml(): mixed
    {
        return $this->previewHtml;
    }

    
    /**
     * The subject preview for the draft order invoice email.
     *
     * @return string
     */
    public function getPreviewSubject(): mixed
    {
        return $this->previewSubject;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUserError[]
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
            if (isset($data['previewHtml']) && $data['previewHtml'] !== null) {
                $instance->previewHtml = $data['previewHtml'];
            }
            if (isset($data['previewSubject']) && $data['previewSubject'] !== null) {
                $instance->previewSubject = $data['previewSubject'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->previewHtml !== null) {
                $data['previewHtml'] = $this->previewHtml;
            }
            if ($this->previewSubject !== null) {
                $data['previewSubject'] = $this->previewSubject;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
