<?php

$manifest = array (
	 'acceptable_sugar_versions' =>  array (
		  'exact_matches' => array (
		  	//alter scripts/post_install.php for the new version # as well before packaging
			0 => "6.2.3", /** DO NOT EDIT THIS VALUE. ANY CHANGE MADE TO THIS VALUE WILL BREAK YOUR SYSTEM */
		  ),
	  ),
	  'acceptable_sugar_flavors' =>
		  array(
			'CE', // 'PRO','ENT'
		  ),
	  'readme'=>'',
	  'key'=>'',
	  'author' => 'Cooperativa Gcoop LTDA',
	  'description' => 'Make graph based workflows for your modules, and easy extend it with plugins',
	  'icon' => '',
	  'is_uninstallable' => true,
	  'name' => 'Advanced Workflows',
	  'published_date' => '11/17/2011',
	  'type' => 'module',
	  'version' => '1.0.1',
	  'remove_tables' => 'prompt',

	  );
$installdefs = array (
	'id' => 'AdvancedWorkflows',
	'beans' =>
		array (
			array (
			  'module' => 'Workflows',
			  'class' => 'Workflow',
			  'path' => 'modules/Workflows/Workflow.php',
			  'tab' => true,
			),
			array (
			  'module' => 'ActionNodes',
			  'class' => 'ActionNode',
			  'path' => 'modules/ActionNodes/ActionNode.php',
			  'tab' => true,
			),
			array (
			  'module' => 'ChoiceNodes',
			  'class' => 'ChoiceNode',
			  'path' => 'modules/ChoiceNodes/ChoiceNode.php',
			  'tab' => true,
			),
			array (
			  'module' => 'Executions',
			  'class' => 'Execution',
			  'path' => 'modules/Executions/Execution.php',
			  'tab' => true,
			),
			array (
			  'module' => 'gcoop_notificaciones',
			  'class' => 'gcoop_notificaciones',
			  'path' => 'modules/gcoop_notificaciones/gcoop_notificaciones.php',
			  'tab' => true,
			),
		),
	'image_dir' => '<basepath>/icons',
	'copy' =>
		array (
			array (
				'from' => '<basepath>/install_dir/modules/Workflows',
				'to' => 'modules/Workflows',
			),
			array(
				'from' => '<basepath>/include/images/Workflows.gif',
				'to'   => 'themes/default/images/Workflows.gif'
			),
			array (
				'from' => '<basepath>/install_dir/modules/ActionNodes',
				'to' => 'modules/ActionNodes',
			),
			array(
				'from' => '<basepath>/include/images/ActionNodes.gif',
				'to'   => 'themes/default/images/ActionNodes.gif'
			),
			array (
				'from' => '<basepath>/install_dir/modules/ChoiceNodes',
				'to' => 'modules/ChoiceNodes',
			),
			array(
				'from' => '<basepath>/include/images/ChoiceNodes.gif',
				'to'   => 'themes/default/images/ChoiceNodes.gif'
			),

			array (
				'from' => '<basepath>/install_dir/modules/Executions',
				'to' => 'modules/Executions',
			),
			array(
				'from' => '<basepath>/include/images/Executions.gif',
				'to'   => 'themes/default/images/Executions.gif'
			),
			
   			array (
				'from' => '<basepath>/install_dir/modules/gcoop_notificaciones',
				'to' => 'modules/gcoop_notificaciones',
			),
            
            
            /** NOT UPGRADE SAFE CODE - try to make this as upgrade safe as possible */
		),
	'layoutdefs' =>
		array (
		),
	'relationships' =>
		array (
		 ),

	'language' =>
		array (
		/** ENGLISH en_us */
			array (
				'from' => '<basepath>/install_dir/language/application/en_us.lang.php',
				'to_module' => 'application',
				'language' => 'en_us',
			),
			array(
				'from'=> '<basepath>/install_dir/language/modules/Administration/en_us.admin.php',
				'to_module'=> 'Administration',
				'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Accounts/mod_strings_en_us.php',
				  'to_module'=> 'Accounts',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/ACLActions/mod_strings_en_us.php',
				  'to_module'=> 'ACLActions',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Bugs/mod_strings_en_us.php',
				  'to_module'=> 'Bugs',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Calendar/mod_strings_en_us.php',
				  'to_module'=> 'Calendar',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Calls/mod_strings_en_us.php',
				  'to_module'=> 'Calls',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Campaigns/mod_strings_en_us.php',
				  'to_module'=> 'Campaigns',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Cases/mod_strings_en_us.php',
				  'to_module'=> 'Cases',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Contacts/mod_strings_en_us.php',
				  'to_module'=> 'Contacts',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Documents/mod_strings_en_us.php',
				  'to_module'=> 'Documents',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Emails/mod_strings_en_us.php',
				  'to_module'=> 'Emails',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/EmailTemplates/mod_strings_en_us.php',
				  'to_module'=> 'EmailTemplates',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Leads/mod_strings_en_us.php',
				  'to_module'=> 'Leads',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Meetings/mod_strings_en_us.php',
				  'to_module'=> 'Meetings',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Notes/mod_strings_en_us.php',
				  'to_module'=> 'Notes',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Opportunities/mod_strings_en_us.php',
				  'to_module'=> 'Opportunities',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Project/mod_strings_en_us.php',
				  'to_module'=> 'Project',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/ProjectTask/mod_strings_en_us.php',
				  'to_module'=> 'ProjectTask',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/ProspectLists/mod_strings_en_us.php',
				  'to_module'=> 'ProspectLists',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Prospects/mod_strings_en_us.php',
				  'to_module'=> 'Prospects',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Tasks/mod_strings_en_us.php',
				  'to_module'=> 'Tasks',
				  'language'=>'en_us'
			),
			array('from'=> '<basepath>/install_dir/language/modules/Users/mod_strings_en_us.php',
				  'to_module'=> 'Users',
				  'language'=>'en_us'
			),
			//group layouts
			array('from'=> '<basepath>/install_dir/language/modules/ModuleBuilder/mod_strings_en_us.php',
				  'to_module'=> 'ModuleBuilder',
				  'language'=>'en_us'
			),
		/** END ENGLISH en_us */
		),

	'administration' =>
		array(
			array(
				'from'=>'<basepath>/install_dir/modules/Administration/securitygroupsadminoption.php',
				'to' => 'modules/Administration/securitygroupsadminoption.php',
			),
		),
	'menu'=> array(
	),
	'logic_hooks' =>
		array(
		),
);

?>
