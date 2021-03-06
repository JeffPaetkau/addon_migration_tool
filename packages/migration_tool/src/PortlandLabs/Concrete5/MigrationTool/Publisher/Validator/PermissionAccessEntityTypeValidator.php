<?php
namespace PortlandLabs\Concrete5\MigrationTool\Publisher\Validator;

use Concrete\Core\Permission\Access\Entity\Type;

class PermissionAccessEntityTypeValidator extends AbstractValidator
{
    public function skipItem()
    {
        $type = Type::getByHandle($this->object->getHandle());

        return is_object($type);
    }
}
