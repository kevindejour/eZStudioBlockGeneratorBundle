<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DKeZStudio\BlockGeneratorBundle\Command;

class Validators
{

    public static function validateBlockName($blockname)
    {
        $blockname = strtolower($blockname);

        if (strlen($blockname) <= 0) {
            throw new \RuntimeException(sprintf('Name must be set.'));
        }

        return $blockname;
    }


    public static function validateFieldsNumber($fieldsnumber)
    {
        $fieldsnumber = intval($fieldsnumber);

        if ($fieldsnumber <= 0) {
            throw new \RuntimeException(sprintf('Fields Number must be set and must be a number.'));
        }

        return $fieldsnumber;
    }

    public static function validateFieldsType($type)
    {
        $type = strtolower($type);

        if (!in_array($type, array('integer', 'string', 'text', 'multiple', 'embed'))) {
            throw new \RuntimeException(sprintf('Format "%s" is not supported.', $type));
        }

        return $type;
    }
    
}
