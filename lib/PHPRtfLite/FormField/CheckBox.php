<?php
/*
    PHPRtfLite
    Copyright 2010 Steffen Zeidler <sigma_z@web.de>

    This file is part of PHPRtfLite.

    PHPRtfLite is free software: you can redistribute it and/or modify
    it under the terms of the GNU Lesser General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    PHPRtfLite is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Lesser General Public License for more details.

    You should have received a copy of the GNU Lesser General Public License
    along with PHPRtfLite.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * class for check box form fields in rtf documents.
 * @version     1.1.0
 * @author      Steffen Zeidler <sigma_z@web.de>
 * @copyright   2010 Steffen Zeidler
 * @package     PHPRtfLite
 * @subpackage  PHPRtfLite_FormField
 */
class PHPRtfLite_FormField_CheckBox extends PHPRtfLite_FormField
{

    public function render()
    {
        $content = '{\field\fldpriv'
                 . '{\*\fldinst FORMCHECKBOX'
                 . '  {\*\formfield'
                 . '    {\fftype1\ffres25\fftypetxt0\ffhps20\ffdefres1}'
                 . '  }'
                 . '}{\fldrslt ' . $this->_defaultValue . '}}';

        return $content;
    }

}