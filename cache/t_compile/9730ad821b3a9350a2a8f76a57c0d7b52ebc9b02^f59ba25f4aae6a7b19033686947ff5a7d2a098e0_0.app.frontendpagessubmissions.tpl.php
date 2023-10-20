<?php
/* Smarty version 4.3.4, created on 2023-10-18 16:37:46
  from 'app:frontendpagessubmissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6530421a298181_05079464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f59ba25f4aae6a7b19033686947ff5a7d2a098e0' => 
    array (
      0 => 'app:frontendpagessubmissions.tpl',
      1 => 1693254332,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'core:frontend/pages/submissions.tpl' => 1,
  ),
),false)) {
function content_6530421a298181_05079464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "submissionChecklistAfterContent", null);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['section']->value->getLocalizedPolicy()) {?>
            <div class="section_policy">
                <h2><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle() ));?>
</h2>
                <?php echo $_smarty_tpl->tpl_vars['section']->value->getLocalizedPolicy();?>

                <?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sectionSubmissionUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submission",'sectionId'=>$_smarty_tpl->tpl_vars['section']->value->getId()),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <p>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.onlineSubmissions.submitToSection",'name'=>$_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle(),'url'=>$_smarty_tpl->tpl_vars['sectionSubmissionUrl']->value),$_smarty_tpl ) );?>

                    </p>
                <?php }?>
            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("core:frontend/pages/submissions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
