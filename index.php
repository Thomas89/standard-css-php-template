<?php
    /*
     * Copyright (c) 2013 by Angelo Stavrow <contact@angelostavrow.com>
     * ## Project Name ##
     *
     * This file is free software; you can redistribute it and/or modify
     * it under the terms of either the GNU General Public License version 2
     * or the GNU Lesser General Public License version 2.1, both as
     * published by the Free Software Foundation.
     */

    require_once('config.inc.php');
    
    $title = "Project Name";
    
    require_once('views/header.php');
    if ($CFG['debug'] == FALSE) {
    	require_once('views/home.php');
	}    	
	else {
		require_once('views/debug.php');		
	}
    require_once('views/footer.php');