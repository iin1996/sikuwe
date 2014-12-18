<?php
/*
 * right_side.php
 * 
 * Copyright 2014 Samsul Maarif <samsul@samsul.web.id>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>
<?php $this->widget('bootstrap.widgets.TbMenu', array(
			'type'=>'list',
			'items'=>array(
				array('label'=>'LIST HEADER'),
				array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
				array('label'=>'Library', 'icon'=>'book', 'url'=>'#'),
				array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
				array('label'=>'ANOTHER LIST HEADER'),
				array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
				array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
				array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
			),
		)); ?>
