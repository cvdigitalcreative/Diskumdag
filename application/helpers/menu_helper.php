<?php  

if(!function_exists('active_link')){
	function activate_menu($controller){
		// getting CI class instance
		$CI=get_instance();
		// class active
		$class=$CI->router->fetch_class();
		return($class==$controller)?'active' : '';
	}
}

?>