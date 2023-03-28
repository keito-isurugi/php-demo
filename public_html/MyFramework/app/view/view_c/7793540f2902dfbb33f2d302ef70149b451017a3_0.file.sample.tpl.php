<?php
/* Smarty version 3.1.46, created on 2023-03-28 15:38:35
  from '/home/homepage/public_html/MyFramework/app/view/sample.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_64228b6bd40459_47105725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7793540f2902dfbb33f2d302ef70149b451017a3' => 
    array (
      0 => '/home/homepage/public_html/MyFramework/app/view/sample.tpl',
      1 => 1679983770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/head_tag.tpl' => 1,
    'file:template/header.tpl' => 1,
    'file:template/footer.tpl' => 1,
    'file:template/foot_tag.tpl' => 1,
  ),
),false)) {
function content_64228b6bd40459_47105725 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE>
<html lang="ja">
<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'smarty.config', null, 0);
?>

<head>
<?php $_smarty_tpl->_subTemplateRender('file:template/head_tag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<?php $_smarty_tpl->_subTemplateRender('file:template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>
<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Sample Page!</h1>
            <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
        </div>
        <form method="post" class="form-horizontal">
            <div class="form-group ml-5">
                <button name="delete" type="submit" class="btn btn-danger">delete</button>
            </div>
            <table class="table table-striped">
                <tr>
                    <th>delete</th>
                    <th>id</th>
                    <th>name</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <tr>
                    <td>
                        <input type="checkbox" name="item[<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
]" />
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </form>
        <form class="form-inline" method="post">
            <label>&nbsp;Name&nbsp;</label><input type="text" name="name" class="form-control" placeholder="input new name">
            <button name="add" type="submit" class="btn btn-info">register</button>
        </form>
    </main>
</body>
<?php $_smarty_tpl->_subTemplateRender('file:template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('copyright'=>'danishi'), 0, false);
$_smarty_tpl->_subTemplateRender('file:template/foot_tag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</html>
<?php }
}
