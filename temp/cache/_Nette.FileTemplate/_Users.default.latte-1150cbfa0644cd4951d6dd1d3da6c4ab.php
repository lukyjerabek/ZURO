<?php //netteCache[01]000388a:2:{s:4:"time";s:21:"0.96895100 1383503151";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:66:"C:\xampp\htdocs\ZURO\app\AdminModule\templates\Users\default.latte";i:2;i:1383503150;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"80a7e46 released on 2013-08-08";}}}?><?php

// source file: C:\xampp\htdocs\ZURO\app\AdminModule\templates\Users\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'xaln0gtfhl')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb551db7888c_content')) { function _lb551db7888c_content($_l, $_args) { extract($_args)
?><h2>Manage Users</h2>
<br />
<div class="table-responsive col-md-8">
	<table class="table table-hover">
		<thead>
			<tr class="th-user">
				<th>Username</th>
				<th>Email</th>
				<th>Role</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
<?php $iterations = 0; foreach ($userList as $user): ?>
			<tr class="tb-user">
				<td><?php echo Nette\Templating\Helpers::escapeHtml($user->username, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($user->email, ENT_NOQUOTES) ?></td>
				<td><?php echo Nette\Templating\Helpers::escapeHtml($user->role, ENT_NOQUOTES) ?></td>
				<td><a href="<?php echo htmlSpecialChars($_control->link("Users:editUser", array($user->id))) ?>
"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Edit</a> | <a href="<?php echo htmlSpecialChars($_control->link("deleteUser!", array($user->id))) ?>
"><i class="glyphicon glyphicon-trash">&nbsp;</i>Delete</a></td>
			</tr>
<?php $iterations++; endforeach ?>
		</tbody>
	</table>
	<a class="btn btn-success" href="<?php echo htmlSpecialChars($_control->link("Users:addUser")) ?>
"><i class="glyphicon glyphicon-plus-sign">&nbsp;</i><b>Add User</b></a>
</div>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 