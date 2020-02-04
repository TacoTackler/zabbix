<?php
/*
** Zabbix
** Copyright (C) 2001-2020 Zabbix SIA
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
** This program is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
** GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License
** along with this program; if not, write to the Free Software
** Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
**/


class CSeverityCheckBoxList extends CCheckBoxList {
	/**
	 * Create check box list with severities.
	 *
	 * @param string $name  Field name in form.
	 */
	public function __construct($name) {
		parent::__construct($name);

		$this->setOptions(CSeverity::getSeverities());
        $this->addClass(ZBX_STYLE_COLUMNS.' '.ZBX_STYLE_COLUMNS_3);
	}

	/**
	 * Set the number of columns.
	 *
	 * @param integer $number  Number of columns (2|3).
	 */
	public function setColumns($number = 3) {
		$class = [2=>ZBX_STYLE_COLUMNS_2, 3=>ZBX_STYLE_COLUMNS_3];

		$this->removeAttribute('class');
        $this->addClass(ZBX_STYLE_CHECKBOX_LIST.' '.ZBX_STYLE_COLUMNS.' '.$class[$number]);

		return $this;
	}
}
