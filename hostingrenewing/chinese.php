<?php

$_LANG['token']                    = ', Error Token:';
$_LANG['generalError']             = 'Something has gone wrong. Check the logs and contact the administrator.';
$_LANG['generalErrorClientArea']   = 'Something has gone wrong. Contact the administrator.';
$_LANG['permissionsStorage']       = ':storage_path: settings are not sufficient. Please change the permissions to the value 777.';
$_LANG['undefinedAction']          = '没定义的操作';
$_LANG['changesHasBeenSaved']      = '已成功保存修改.';
$_LANG['Free Account']             = '免费的账号';
$_LANG['Passwords']                = '密码';
$_LANG['discountAddedSuccesfully'] = '已经成功添加折扣.';
$_LANG['Nothing to display']       = '无可奉告(没有可显示的)';
$_LANG['Search']                   = '搜索';
$_LANG['Previous']                 = '上一个';
$_LANG['Next']                     = '下一个';
$_LANG['searchPlacecholder']       = '搜索中...';
$_LANG['noDataAvalible']           = '没有可用的数据';

$_LANG['validationErrors']['emptyField'] = '栏目不能为空';
$_LANG['bootstrapswitch']['disabled']    = '禁用';
$_LANG['bootstrapswitch']['enabled']     = '启用';

$_LANG['AdminAreaClientTabServiceAutorenewalOff'] = '自动续费已关闭';

/* * ********************************************************************************************************************
 *                                                   ADMIN AREA                                                        *
 * ******************************************************************************************************************** */

$_LANG['addonAA']['datatables']['next']        = '下一个';
$_LANG['addonAA']['datatables']['previous']    = '上一个';
$_LANG['addonAA']['datatables']['zeroRecords'] = '无可显示(奉告)';

// -------------------------------------------------> MENU <--------------------------------------------------------- //

$_LANG['addonAA']['pagesLabels']['label']['Home']           = '产品设置';
$_LANG['addonAA']['pagesLabels']['label']['documentation3'] = '文档';
$_LANG['addonAA']['pagesLabels']['Home']['Setting']         = ':productNameSettings:  设置';
$_LANG['addonAA']['pagesLabels']['label']['Discounts']      = '折扣';
$_LANG['addonAA']['pagesLabels']['label']['LoggerManager']  = '日志';

// -------------------------------------------------> Products Settings <--------------------------------------------------------- //

$_LANG['addonAA']['pagesLabels']['home']['Index']                                                                  = '产品列表';
$_LANG['addonAA']['home']['mainContainer']['labelscont']['labelsContTitle']                                        = '产品';
$_LANG['addonAA']['home']['mainContainer']['labelscont']['table']['product']                                       = '产品';
$_LANG['addonAA']['home']['mainContainer']['labelscont']['table']['groups']                                        = '组';
$_LANG['addonAA']['home']['mainContainer']['labelscont']['table']['status']                                        = '状态';
$_LANG['addonAA']['home']['mainContainer']['labelscont']['editLabelModalButton']['button']['editLabelModalButton'] = '编辑';

// -------------------------------------------------> Settings Per Product <--------------------------------------------------------- //
$_LANG['addonAA']['pagesLabels']['label']['Settings']['Index'] = '设置';
$_LANG['addonAA']['pagesLabels']['Home']['Settings']['Index']  = '设置';

$_LANG['addonAA']['home']['mainContainer']['labelscont']['moveToSettingPage']['button']['moveToSettingPage'] = '设置';

$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['firstSection']                                                            = '为每个产品单独设置';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['status']['status']                                     = '启用续费配置';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['auto_renew']['auto_renew']                             = '控制自动续费';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['auto_renew']['description']                            = '允许客户控制自动续费';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['renew_hosting']['renew_hosting']                       = '提前续费产品';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['renew_hosting']['description']                         = 'Allow clients to upfront renew hosting';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['change_billing_cycle']['change_billing_cycle']         = '允许修改计费周期';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['change_billing_cycle']['description']                  = '允许客户修改产品的计费周期.';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['status_off']['status_off']                             = '默认禁止自动续费';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['status_off']['description']                            = '如果启用了,自动续费在所有新的服务商默认停用.';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['addons_renewal']['addons_renewal']                     = '允许续费附加项目';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['addons_renewal']['description']                        = '启用附加项目的续费.';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['domain_renewal']['domain_renewal']                     = '允许域名续费';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['domain_renewal']['description']                        = '启用域名续费.';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['force_renew']['force_renew']                           = '强制域名续费';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['force_renew']['description']                           = '强制域名续费以及续费其所属的服务.';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['send_notifications']['send_notifications']             = '禁用自动续费的提醒';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['send_notifications']['description']                    = '如果启用了,在打开自动续费的时候将不会有续费提醒.';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['service_price']['service_price']                       = '从服务设置应用循环金额';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['service_price']['description']                         = 'If enabled, the custom recurring amount from the service\'s settings will be applied. Otherwise, the default one set in the product\'s configuration will be used.';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['change_invoice_exis']['change_invoice_exis']           = 'Allow Billing Cycle Change When Unpaid Invoice Exists';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['change_invoice_exis']['description']                   = 'Allow clients to change the billing cycle if an unpaid invoice exists.';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['allow_upfront_renew']['allow_upfront_renew']           = 'Allow Upfront Renewal';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['force_addon_renew']['force_addon_renew']               = 'Force Addons Renewal';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['change_autorenewal']['change_autorenewal']             = 'Allow Auto Renewal Change';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['available_biling_cycle']['available_biling_cycle']     = 'Choose Available Billing Cycles';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['available_biling_cycle']['description']                = 'Pick the billing cycles that clients will be able to choose from.';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['is_cancelation_immediate']['is_cancelation_immediate'] = 'Allow Immediate Cancellation Requests';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['is_cancelation_immediate']['description']              = "If enabled, the 'Immediate' cancellation requests are no longer blocked, causing the service to be canceled after the cron execution. By default, this sort of an action is not available due to the fact that the module uses the 'Override Auto Suspend' feature disabling the immediate cancellations. Note that the 'End Of Billing Period' cancellation type will work normally regardless of the current status of this setting.";
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['baseSubmitButton']['button']['submit']                                                  = 'Accept Changes';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['force_addon_renew']['description']                     = 'Force the addons renewal along with the renewal of a service they belong to.';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['allow_upfront_renew']['description']                   = 'Allow clients to renew the service before its renewal date.';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['change_autorenewal']['description']                    = 'Allow clients to toggle the automatic renewals.';


$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['monthly']['Monthly']             = '月付';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['quarterly']['Quarterly']         = '季付(三个月)';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['semi-Annually']['Semi-Annually'] = '半年付';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['annually']['Annually']           = '年付';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['biennially']['Biennially']       = '两年付';
$_LANG['addonAA']['home']['mainContainer']['baseAutoSaveFormExtSections']['boxSection']['halfPageSection']['triennially']['Triennially']     = '三年付';
$_LANG['addonAA']['home']['editCategoryModal']['modal']['editCategoryModal']                                                                 = '邮件提醒';
$_LANG['addonAA']['home']['editCategoryModal']['editCategoryForm']['status']['status']                                                       = 'Enable Notification 1';
$_LANG['addonAA']['home']['editCategoryModal']['editCategoryForm']['template_id']['template_id']                                             = 'Notification Template';
$_LANG['addonAA']['home']['editCategoryModal']['editCategoryForm']['period']['period']                                                       = 'Days Before Renewal';
$_LANG['addonAA']['home']['editCategoryModal']['editCategoryForm']['period']['description']                                                  = 'Specify how many days before the end of the billing cycle the reminder should be sent.';

$_LANG['addonAA']['home']['editCategoryModal']['baseAcceptButton']['title'] = '接受';
$_LANG['addonAA']['home']['editCategoryModal']['baseCancelButton']['title'] = '取消';

$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['billingCycleBox'] = '提醒';

$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['monthly']['Monthly']             = '每月提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['quarterly']['Quarterly']         = '每季提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['semi-Annually']['Semi-Annually'] = '每半年提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['annually']['Annually']           = '每年提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['biennially']['Biennially']       = '每两年提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['triennially']['Triennially']     = '每三年提醒';

$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['quarterly']['table']['id']                                            = 'ID';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['quarterly']['table']['template_id']                                   = '模板';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['quarterly']['table']['period']                                        = '期';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['quarterly']['table']['status']                                        = '状态';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['quarterly']['addReminderButton']['button']['addReminderButton']       = '添加提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['quarterly']['editReminderButton']['button']['editReminderButton']     = '编辑提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['quarterly']['deleteReminderButton']['button']['deleteReminderButton'] = '删除提醒';
$_LANG['addonAA']['home']['button']['addReminderButton']                                                                             = '添加提醒';

$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['monthly']['table']['id']                                            = 'ID';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['monthly']['table']['template_id']                                   = '模板';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['monthly']['table']['period']                                        = '期';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['monthly']['table']['status']                                        = '状态';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['monthly']['addReminderButton']['button']['addReminderButton']       = '添加提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['monthly']['editReminderButton']['button']['editReminderButton']     = '编辑提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['monthly']['deleteReminderButton']['button']['deleteReminderButton'] = '删除提醒';

$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['semi-Annually']['table']['id']                                            = 'ID';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['semi-Annually']['table']['template_id']                                   = '模板';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['semi-Annually']['table']['period']                                        = '期';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['semi-Annually']['table']['status']                                        = '状态';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['semi-Annually']['addReminderButton']['button']['addReminderButton']       = '添加提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['semi-Annually']['editReminderButton']['button']['editReminderButton']     = '编辑提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['semi-Annually']['deleteReminderButton']['button']['deleteReminderButton'] = '删除提醒';

$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['annually']['table']['id']                                            = 'ID';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['annually']['table']['template_id']                                   = '模板';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['annually']['table']['period']                                        = '期';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['annually']['table']['status']                                        = '状态';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['annually']['addReminderButton']['button']['addReminderButton']       = '添加提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['annually']['editReminderButton']['button']['editReminderButton']     = '编辑提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['annually']['deleteReminderButton']['button']['deleteReminderButton'] = '删除提醒';

$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['biennially']['table']['id']                                            = 'ID';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['biennially']['table']['template_id']                                   = '模板';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['biennially']['table']['period']                                        = '期';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['biennially']['table']['status']                                        = '状态';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['biennially']['addReminderButton']['button']['addReminderButton']       = '添加提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['biennially']['editReminderButton']['button']['editReminderButton']     = '编辑提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['biennially']['deleteReminderButton']['button']['deleteReminderButton'] = '删除提醒';

$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['triennially']['table']['id']                                            = 'ID';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['triennially']['table']['template_id']                                   = '模板';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['triennially']['table']['period']                                        = '期';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['triennially']['table']['status']                                        = '状态';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['triennially']['addReminderButton']['button']['addReminderButton']       = '添加提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['triennially']['editReminderButton']['button']['editReminderButton']     = '编辑提醒';
$_LANG['addonAA']['home']['mainContainer']['billingCycleBox']['triennially']['deleteReminderButton']['button']['deleteReminderButton'] = '删除提醒';


$_LANG['addonAA']['home']['addReminderModal']['modal']['addReminderModal']                     = '添加提醒';
$_LANG['addonAA']['home']['addReminderModal']['baseAcceptButton']['title']                     = 'Add';
$_LANG['addonAA']['home']['addReminderModal']['baseCancelButton']['title']                     = '取消';
$_LANG['addonAA']['home']['addReminderModal']['addReminderForm']['template_id']['template_id'] = 'Custom Template';
$_LANG['addonAA']['home']['addReminderModal']['addReminderForm']['status']['status']           = '状态';
$_LANG['addonAA']['home']['addReminderModal']['addReminderForm']['period']['period']           = 'Period (days)';
$_LANG['addonAA']['home']['addReminderModal']['addReminderForm']['period']['description']      = 'Specify how many days before the end of the billing cycle the reminder should be sent.';


$_LANG['addonAA']['home']['editReminderModal']['modal']['editReminderModal']                     = '编辑提醒';
$_LANG['addonAA']['home']['editReminderModal']['baseAcceptButton']['title']                      = '编辑';
$_LANG['addonAA']['home']['editReminderModal']['baseCancelButton']['title']                      = '取消';
$_LANG['addonAA']['home']['editReminderModal']['editReminderForm']['template_id']['template_id'] = 'Custom Template';
$_LANG['addonAA']['home']['editReminderModal']['editReminderForm']['period']['period']           = 'Period (days)';
$_LANG['addonAA']['home']['editReminderModal']['editReminderForm']['status']['status']           = '状态';
$_LANG['addonAA']['home']['editReminderModal']['editReminderForm']['period']['description']      = 'Specify how many days before the end of the billing cycle the reminder should be sent.';


$_LANG['addonAA']['home']['deleteReminderModal']['modal']['deleteReminderModal']              = '删除提醒';
$_LANG['addonAA']['home']['deleteReminderModal']['baseAcceptButton']['title']                 = 'Delete';
$_LANG['addonAA']['home']['deleteReminderModal']['baseCancelButton']['title']                 = '取消';
$_LANG['addonAA']['home']['deleteReminderModal']['deleteReminderForm']['confirmLabelRemoval'] = "Are you sure you want to remove this reminder?";

$_LANG['addonAA']['home']['button']['massSetSettingsButton']  = 'Change Settings';
$_LANG['addonAA']['home']['button']['massAddRemindersButton'] = '添加提醒';

$_LANG['addonAA']['home']['massSetSettingsModal']['modal']['massSetSettingsModal'] = 'Change Settings';

$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['status']['status']                                 = '启用续费配置';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['auto_renew']['auto_renew']                         = '控制自动续费';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['auto_renew']['description']                        = '允许客户控制自动续费';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['renew_hosting']['renew_hosting']                   = '提前续费产品';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['renew_hosting']['description']                     = 'Allow clients to upfront renew hosting';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['change_billing_cycle']['change_billing_cycle']     = '允许修改计费周期';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['change_billing_cycle']['description']              = '允许客户修改产品的计费周期.';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['status_off']['status_off']                         = '默认禁止自动续费';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['status_off']['description']                        = '如果启用了,自动续费在所有新的服务商默认停用.';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['addons_renewal']['addons_renewal']                 = '允许续费附加项目';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['addons_renewal']['description']                    = '启用附加项目的续费.';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['domain_renewal']['domain_renewal']                 = '允许域名续费';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['domain_renewal']['description']                    = '启用域名续费.';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['force_renew']['force_renew']                       = '强制域名续费';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['force_renew']['description']                       = '强制域名续费以及续费其所属的服务.';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['send_notifications']['send_notifications']         = '禁用自动续费的提醒';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['send_notifications']['description']                = '如果启用了,在打开自动续费的时候将不会有续费提醒.';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['service_price']['service_price']                   = '从服务设置应用循环金额';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['service_price']['description']                     = 'If enabled, the custom recurring amount from the service\'s settings will be applied. Otherwise, the default one set in the product\'s configuration will be used.';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['change_invoice_exis']['change_invoice_exis']       = 'Allow Billing Cycle Change When Unpaid Invoice Exists';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['change_invoice_exis']['description']               = 'Allow clients to change the billing cycle if an unpaid invoice exists.';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['allow_upfront_renew']['allow_upfront_renew']       = 'Allow Upfront Renewal';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['force_addon_renew']['force_addon_renew']           = 'Force Addons Renewal';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['change_autorenewal']['change_autorenewal']         = 'Allow Auto Renewal Change';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['available_biling_cycle']['available_biling_cycle'] = 'Choose Available Billing Cycles';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['available_biling_cycle']['description']            = 'Pick the billing cycles that clients will be able to choose from.';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['force_addon_renew']['description']                 = 'Force the addons renewal along with the renewal of a service they belong to.';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['allow_upfront_renew']['description']               = 'Allow clients to renew the service before its renewal date.';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['change_autorenewal']['description']                = 'Allow clients to toggle the automatic renewals.';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['is_cancelation_immediate']['is_cancelation_immediate'] = 'Allow Immediate Cancellation Requests';
$_LANG['addonAA']['home']['massSetSettingsModal']['setSettingsForm']['is_cancelation_immediate']['description']              = "If enabled, the 'Immediate' cancellation requests are no longer blocked, causing the service to be canceled after the cron execution. By default, this sort of an action is not available due to the fact that the module uses the 'Override Auto Suspend' feature disabling the immediate cancellations. Note that the 'End Of Billing Period' cancellation type will work normally regardless of the current status of this setting.";



$_LANG['addonAA']['home']['massSetSettingsModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['addonAA']['home']['massSetSettingsModal']['baseCancelButton']['title'] = '取消';

$_LANG['addonAA']['home']['massAddRemindersModal']['modal']['massAddRemindersModal'] = '添加提醒';

$_LANG['addonAA']['home']['massAddRemindersModal']['addRemindersForm']['billing_cycle']['billing_cycle'] = 'Billing Cycle';
$_LANG['addonAA']['home']['massAddRemindersModal']['addRemindersForm']['status']['status']               = '状态';
$_LANG['addonAA']['home']['massAddRemindersModal']['addRemindersForm']['template_id']['template_id']     = 'Custom Template';
$_LANG['addonAA']['home']['massAddRemindersModal']['addRemindersForm']['period']['period']               = 'Period (days)';
$_LANG['addonAA']['home']['massAddRemindersModal']['addRemindersForm']['period']['description']          = 'Specify how many days before the end of the billing cycle the reminder should be sent.';

$_LANG['addonAA']['home']['massAddRemindersModal']['baseAcceptButton']['title'] = 'Confirm';
$_LANG['addonAA']['home']['massAddRemindersModal']['baseCancelButton']['title'] = '取消';

$_LANG['addonAA']['home']['button']['massOffRenewalButton']                             = 'Disable Services Auto Renewal';
$_LANG['addonAA']['home']['massOffRenewalModal']['modal']['massOffRenewalModal']        = 'Disable Services Auto Renewal';
$_LANG['addonAA']['home']['massOffRenewalModal']['offRenewalForm']['confirmOffRenewal'] = 'Are you sure that you want to disable the automatic renewal of services?';
$_LANG['addonAA']['home']['massOffRenewalModal']['baseAcceptButton']['title']           = 'Confirm';
$_LANG['addonAA']['home']['massOffRenewalModal']['baseCancelButton']['title']           = '取消';
// -------------------------------------------------> Discounts <--------------------------------------------------------- //

$_LANG['addonAA']['pagesLabels']['Discounts']['Index']                                                                               = '折扣';
$_LANG['addonAA']['discounts']['mainContainer']['discountsPage']['labelsContTitle']                                                  = '折扣';
$_LANG['addonAA']['discounts']['mainContainer']['discountsPage']['addDiscountModalButton']['button']['addDiscountModalButton']       = 'Add Discount';
$_LANG['addonAA']['discounts']['mainContainer']['discountsPage']['deleteDiscountModalButton']['button']['deleteDiscountModalButton'] = 'Delete Discount';
$_LANG['addonAA']['discounts']['mainContainer']['discountsPage']['editDiscountModalButton']['button']['editDiscountModalButton']     = 'Edit Discount';
$_LANG['addonAA']['discounts']['mainContainer']['discountsPage']['table']['name']                                                    = 'Name';
$_LANG['addonAA']['discounts']['mainContainer']['discountsPage']['table']['type']                                                    = 'Type';
$_LANG['addonAA']['discounts']['mainContainer']['discountsPage']['table']['value']                                                   = 'Value';
$_LANG['addonAA']['discounts']['mainContainer']['discountsPage']['table']['product']                                                 = '产品';
$_LANG['addonAA']['discounts']['mainContainer']['discountsPage']['table']['discount_type']                                           = 'Discount Type';
$_LANG['addonAA']['discounts']['mainContainer']['discountsPage']['table']['cycle_from']                                              = 'Cycle Change From';
$_LANG['addonAA']['discounts']['mainContainer']['discountsPage']['table']['cycle_to']                                                = 'Cycle Change To';
$_LANG['addonAA']['discounts']['mainContainer']['discountsPage']['table']['enabled']                                                 = '状态';

$_LANG['addonAA']['discounts']['addDiscountModal']['modal']['addDiscountModal']                         = 'Add Discount';
$_LANG['addonAA']['discounts']['addDiscountModal']['addDiscountForm']['enabled']['enabled']             = '状态';
$_LANG['addonAA']['discounts']['addDiscountModal']['addDiscountForm']['name']['name']                   = 'Name';
$_LANG['addonAA']['discounts']['addDiscountModal']['addDiscountForm']['items']['items']                 = '产品';
$_LANG['addonAA']['discounts']['addDiscountModal']['addDiscountForm']['type']['type']                   = 'Type';
$_LANG['addonAA']['discounts']['addDiscountModal']['addDiscountForm']['value']['value']                 = 'Value';
$_LANG['addonAA']['discounts']['addDiscountModal']['addDiscountForm']['discount_type']['discount_type'] = 'Discount Type';
$_LANG['addonAA']['discounts']['addDiscountModal']['addDiscountForm']['cycle_from']['cycle_from']       = 'Cycle Change From';
$_LANG['addonAA']['discounts']['addDiscountModal']['addDiscountForm']['cycle_to']['cycle_to']           = 'Cycle Change To';
$_LANG['addonAA']['discounts']['addDiscountModal']['baseAcceptButton']['title']                         = 'Add';
$_LANG['addonAA']['discounts']['addDiscountModal']['baseCancelButton']['title']                         = '取消';

$_LANG['addonAA']['discounts']['editDiscountModal']['modal']['editDiscountModal']                         = 'Edit Discount';
$_LANG['addonAA']['discounts']['editDiscountModal']['editDiscountForm']['enabled']['enabled']             = '状态';
$_LANG['addonAA']['discounts']['editDiscountModal']['editDiscountForm']['name']['name']                   = 'Name';
$_LANG['addonAA']['discounts']['editDiscountModal']['editDiscountForm']['items']['items']                 = '产品';
$_LANG['addonAA']['discounts']['editDiscountModal']['editDiscountForm']['type']['type']                   = 'Type';
$_LANG['addonAA']['discounts']['editDiscountModal']['editDiscountForm']['value']['value']                 = 'Value';
$_LANG['addonAA']['discounts']['editDiscountModal']['editDiscountForm']['discount_type']['discount_type'] = 'Discount Type';
$_LANG['addonAA']['discounts']['editDiscountModal']['editDiscountForm']['cycle_from']['cycle_from']       = 'Cycle Change From';
$_LANG['addonAA']['discounts']['editDiscountModal']['editDiscountForm']['cycle_to']['cycle_to']           = 'Cycle Change To';
$_LANG['addonAA']['discounts']['editDiscountModal']['baseAcceptButton']['title']                          = '编辑';
$_LANG['addonAA']['discounts']['editDiscountModal']['baseCancelButton']['title']                          = '取消';

$_LANG['addonAA']['discounts']['deleteDiscountModal']['modal']['deleteDiscountModal']              = '删除折扣';
$_LANG['addonAA']['discounts']['deleteDiscountModal']['deleteDiscountForm']['confirmLabelRemoval'] = 'Are you sure that you want to delete this discount?';
$_LANG['addonAA']['discounts']['deleteDiscountModal']['baseAcceptButton']['title']                 = 'Delete';
$_LANG['addonAA']['discounts']['deleteDiscountModal']['baseCancelButton']['title']                 = '取消';

$_LANG['remindersDataCreate'] = 'A reminder has been added successfully.';
$_LANG['remindersDataUpdate'] = 'The reminder has been updated successfully.';
$_LANG['remindersDataDelete'] = 'The reminder has been deleted successfully.';

// -------------------------------------------------> Logs <--------------------------------------------------------- //

$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['loggerContTitle']      = '日志';
$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['table']['id']          = 'ID';
$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['table']['message']     = 'Message';
$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['table']['ref']         = 'Reference Object';
$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['table']['type']        = 'Type';
$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['table']['level']       = 'Level';
$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['table']['request']     = 'Request';
$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['table']['response']    = 'Response';
$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['table']['before_vars'] = 'Before Vars';
$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['table']['vars']        = 'Vars';
$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['table']['date']        = 'Date';

$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['deleteLoggerModalButton']['button']['deleteLoggerModalButton'] = 'Delete';
$_LANG['addonAA']['loggerManager']['deleteLoggerModal']['modal']['deleteLoggerModal']                                             = 'Delete';
$_LANG['addonAA']['loggerManager']['deleteLoggerModal']['deleteLoggerForm']['confirmLabelRemoval']                                = 'Are you sure that you want to remove the selected log?';
$_LANG['addonAA']['loggerManager']['deleteLoggerModal']['baseAcceptButton']['title']                                              = 'Delete';
$_LANG['addonAA']['loggerManager']['deleteLoggerModal']['baseCancelButton']['title']                                              = '取消';

$_LANG['loggerDeletedSuccesfully']  = 'The selected log has been deleted successfully';
$_LANG['loggersDeletedSuccesfully'] = 'The selected logs have been deleted successfully';

$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['massDeleteLoggerButton']['button']['massDeleteLoggerButton'] = 'Delete';

$_LANG['addonAA']['loggerManager']['button']['massDeleteLoggerButton']                                 = 'Delete';
$_LANG['addonAA']['loggerManager']['massDeleteLoggerModal']['modal']['massDeleteLoggerModal']          = 'Delete';
$_LANG['addonAA']['loggerManager']['massDeleteLoggerModal']['baseAcceptButton']['title']               = 'Confirm';
$_LANG['addonAA']['loggerManager']['massDeleteLoggerModal']['baseCancelButton']['title']               = '取消';
$_LANG['addonAA']['loggerManager']['massDeleteLoggerModal']['deleteLoggerForm']['confirmLabelRemoval'] = 'Are you sure that you want to remove the selected logs?';

$_LANG['addonAA']['loggerManager']['mainContainer']['loggercont']['deleteAllLoggersButton']['button']['deleteAllLoggersButton'] = 'Delete All Logs';
$_LANG['addonAA']['loggerManager']['button']['deleteAllLoggersButton']                                                          = 'Delete All Logs';

$_LANG['addonAA']['loggerManager']['deleteAllLoggersModal']['modal']['deleteAllLoggersModal']             = 'Delete All Logs';
$_LANG['addonAA']['loggerManager']['deleteAllLoggersModal']['deleteAllLoggerForm']['confirmLabelRemoval'] = 'Are you sure that you want to remove all logs?';
$_LANG['addonAA']['loggerManager']['deleteAllLoggersModal']['baseAcceptButton']['title']                  = 'Confirm';
$_LANG['addonAA']['loggerManager']['deleteAllLoggersModal']['baseCancelButton']['title']                  = '取消';


$_LANG['addonAA']['logger']['createReminder']              = "A reminder <b>:createReminderId:</b> for the product <b>':createReminderProductName:' (ID: :createReminderProductId:)</b> has been created successfully.";
$_LANG['addonAA']['logger']['updateReminder']              = "The reminder <b>:updateReminderId:</b> for the product <b>':updateReminderProductName:' (ID: :updateReminderProductId:)</b> has been updated successfully.";
$_LANG['addonAA']['logger']['deleteReminder']              = "The reminder <b>:deleteReminderId:</b> for the product <b>':deleteReminderProductName:' (ID: :deleteReminderProductId:)</b> has been deleted successfully.";
$_LANG['addonAA']['logger']['changeStatusReminder']        = "The reminder <b>:changeStatusReminderId:</b> for the product <b>':changeStatusReminderProductName:' (ID: :changeStatusReminderProductId:)</b> has been successfully changed to <b>':changeStatusReminderValue:'</b>.";
$_LANG['addonAA']['logger']['updateProductSettings']       = "The product <b>':updateProductSettingsProductName:' (ID: :updateProductSettingsProductId:)</b> has been updated successfully.";
$_LANG['addonAA']['logger']['changeStatusProductSettings'] = "The product <b>':changeStatusProductSettingsProductName:' (ID: :changeStatusProductSettingsProductId:)</b> has been successfully changed to <b>':changeStatusProductSettingsValue:'</b>.";
$_LANG['addonAA']['logger']['createDiscounts']             = "A discount <b>':createDiscountsName:' (ID: :createDiscountsId:)</b> has been created successfully.";
$_LANG['addonAA']['logger']['updateDiscounts']             = "The discount <b>':updateDiscountsName:' (ID: :updateDiscountsId:)</b> has been updated successfully.";
$_LANG['addonAA']['logger']['deleteDiscounts']             = "The discount <b>':deleteDiscountsName:' (ID: :deleteDiscountsId:)</b> has been deleted successfully.";
$_LANG['addonAA']['logger']['changeStatusDiscounts']       = "The discount <b>':changeStatusDiscountsName:' (ID: :changeStatusDiscountsId:)</b> has been successfully changed to <b>':changeStatusDiscountsValue:'</b>.";

$_LANG['addonCA']['logger']['changeBillingCycleValidateCycle']   = 'No access to the cycle <b>:changeBillingCycleValidateCycleFormattedNewCycle:</b> for the hosting ID <b>:changeBillingCycleValidateCycleHostingId:</b>.';
$_LANG['addonCA']['logger']['changeBillingCycleInvoiceExistOff'] = 'The details of the unpaid invoice for the hosting ID <b>:changeBillingCycleInvoiceExistOffHostingId:</b> has been fetched successfully.';
$_LANG['addonCA']['logger']['changeBillingCycleInvoiceExistOn']  = 'The unpaid invoice for the hosting ID <b>:changeBillingCycleInvoiceExistOnHostingId:</b> has been deleted successfully.';
$_LANG['addonCA']['logger']['changeBillingCycleSuccess']         = 'A new invoice ID <b>:changeBillingCycleSuccessInvoiceId:</b> has been successfully created for the hosting ID <b>:changeBillingCycleSuccessHostingId:</b> .';

$_LANG['addonCA']['logger']['renewInvoiceExistOff'] = 'The details of the unpaid invoice for the hosting ID <b>:renewInvoiceExistOffHostingId:</b> has been fetched successfully.';
$_LANG['addonCA']['logger']['renewInvoiceExistOn']  = 'The unpaid invoice for the hosting ID <b>:renewInvoiceExistOnHostingId:</b> has been deleted successfully.';
$_LANG['addonCA']['logger']['renewSuccess']         = 'A new invoice ID <b>:renewSuccessInvoiceId:</b> has been successfully created for the hosting ID <b>:renewSuccessHostingId:</b> .';


/* * ********************************************************************************************************************
 *                                                    CLIENT AREA                                                      *
 * ******************************************************************************************************************** */

$_LANG['addonCA']['pagesLabels']['label']['home'] = "Owned Passwords";

$_LANG['addonCA']['pageNotFound'] = "Page Not Found";

$_LANG['addonCA']['hostingActions']['autorenewal_label']     = 'Auto Renewal Status';
$_LANG['addonCA']['hostingActions']['autorenewal_label_on']  = 'ON';
$_LANG['addonCA']['hostingActions']['autorenewal_label_off'] = 'OFF';

$_LANG['addonCA']['hostingActions']['renewfor']            = '续';
$_LANG['addonCA']['hostingActions']['1']                   = '';
$_LANG['addonCA']['hostingActions']['turnautorenewon']     = 'Enable Auto Renewal';
$_LANG['addonCA']['hostingActions']['turnautorenewoff']    = 'Disable Auto Renewal';
$_LANG['addonCA']['hostingActions']['choose_biling_cycle'] = 'Choose Billing Cycle';
$_LANG['addonCA']['hostingActions']['confirm_text']        = 'Are you sure that you want to change the billing cycle from';
$_LANG['addonCA']['hostingActions']['to']                  = 'to';

$_LANG['addonCA']['hostingActions']['Monthly']       = '1个月';
$_LANG['addonCA']['hostingActions']['Quarterly']     = '3个月';
$_LANG['addonCA']['hostingActions']['Semi-Annually'] = '6个月';
$_LANG['addonCA']['hostingActions']['Annually']      = '1年';
$_LANG['addonCA']['hostingActions']['Biennially']    = '2年';
$_LANG['addonCA']['hostingActions']['Triennially']   = '3年';

$_LANG['Monthly']       = '月付';
$_LANG['Quarterly']     = '季付(三个月)';
$_LANG['Semi-Annually'] = '半年付';
$_LANG['Annually']      = '年付';
$_LANG['Biennially']    = '两年付';
$_LANG['Triennially']   = '三年付';

$_LANG['discountChangesSaved']                     = 'The discount has been updated successfully.';
$_LANG['discountDeletedSuccesfully']               = 'The discount has been deleted successfully.';
$_LANG['changesSaved']                             = '已成功保存修改.';
$_LANG['ItemNotFound']                             = 'Item Not Found';
$_LANG['CategoryDeletedSuccesfully']               = 'Category has been deleted successfully';
$_LANG['categroyCannotBeAssignedAsParentToItself'] = 'Category Cannot Be Assigned As A Parent To Itself';

$_LANG['formValidationError']                                 = 'Form Validation Error';
$_LANG['FormValidators']['thisFieldCannotBeEmpty']            = 'This field cannot be empty';
$_LANG['FormValidators']['PleaseProvideANumericValue']        = 'Please provide a numeric value';
$_LANG['FormValidators']['PleaseProvideANumericValueBetween'] = 'Please provide a numeric value between :minValue: and :maxValue:';

$_LANG['addonCA']['hostingActions']['biling_cycle_label']      = 'Billing Cycle';
$_LANG['addonCA']['hostingActions']['domain_group']            = 'Domain';
$_LANG['addonCA']['hostingActions']['addons_group']            = 'Addons';
$_LANG['addonCA']['hostingActions']['changeBillingCycleModal'] = 'Change Billing Cycle';

$_LANG['addonCA']['hostingActions']['recurring'] = 'Recurring';
$_LANG['addonCA']['hostingActions']['price']     = 'Price';
$_LANG['addonCA']['hostingActions']['domain']    = 'Domain';
$_LANG['addonCA']['hostingActions']['addonName'] = 'Addon Name';
$_LANG['addonCA']['hostingActions']['confirm']   = 'Confirm';
$_LANG['addonCA']['hostingActions']['cancel']    = '取消';
$_LANG['addonCA']['hostingActions']['year']      = '年';
$_LANG['addonCA']['hostingActions']['years']     = '年';

$_LANG['addonCA']['hostingActions']['free'] = 'Free';

$_LANG['addonCA']['hostingActions']['total']    = 'Total';
$_LANG['addonCA']['hostingActions']['subtotal'] = 'Subtotal';
$_LANG['addonCA']['hostingActions']['discount'] = 'Discount';
$_LANG['addonCA']['hostingActions']['tax']      = 'Tax';

$_LANG['addonCA']['hostingActions']['isAutorenewal']              = 'Unpaid Invoice Notice';
$_LANG['addonCA']['hostingActions']['successAutorenewalMessage1'] = 'It seems that you have an unpaid invoice for this service.';
$_LANG['addonCA']['hostingActions']['successAutorenewalMessage2'] = 'Would you like to view its details? ';
