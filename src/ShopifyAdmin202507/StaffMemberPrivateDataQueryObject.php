<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StaffMemberPrivateDataQueryObject extends QueryObject
{
    const OBJECT_NAME = "StaffMemberPrivateData";

    public function selectAccountSettingsUrl()
    {
        $this->selectField("accountSettingsUrl");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * @deprecated There's no alternative field to use instead.
     */
    public function selectPermissions()
    {
        $this->selectField("permissions");

        return $this;
    }
}
