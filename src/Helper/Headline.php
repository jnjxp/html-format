<?php
/**
* Jnjxp\HtmlFormat
*
* PHP version 5
*
* This program is free software: you can redistribute it and/or modify it
* under the terms of the GNU Affero General Public License as published by
* the Free Software Foundation, either version 3 of the License, or (at your
* option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
* @category  Helper
* @package   Jnjxp\HtmlFormat
* @author    Jake Johns <jake@jakejohns.net>
* @copyright 2015 Jake Johns
* @license   http://www.gnu.org/licenses/agpl-3.0.txt AGPL V3
* @link      http://jakejohns.net
 */

namespace Jnjxp\HtmlFormat\Helper;

/**
 * Headline
 *
 * @category Helper
 * @package  Jnjxp\HtmlFormat
 * @author   Jake Johns <jake@jakejohns.net>
 * @license  http://www.gnu.org/licenses/agpl-3.0.txt AGPL V3
 * @link     http://jakejohns.net
 *
 * @see      AbstractHelper
 */
class Headline extends AbstractHelper
{
    /**
     * tag
     *
     * @var string
     * @access protected
     */
    protected $tag = 'h2';

    /**
     * properties
     *
     * @var array
     * @access protected
     */
    protected $attr = [
        'itemprop' => ['name', 'headline'],
        'class' => ['p-name']
    ];
}
