<?php

namespace Miniorange\KeycloakSSO\Domain\Repository\UserGroup;

class BackendUserGroupRepository extends AbstractUserGroupRepository
{
    const TABLE_NAME = 'be_groups';

    protected function setTableName(): void
    {
        $this->tableName = self::TABLE_NAME;
    }
}