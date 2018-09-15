<?php

// api messages
$LANG['formErrorEmptyField']            = 'Field ":value" cannot be empty';
$LANG['formErrorTooLong']		= 'Value ":value" is too long';
$LANG['formErrorTooShort']		= 'Value ":value" :value is too short';
$LANG['formErrorNotPossible']           = 'Value ":value" is not possible for this field';
$LANG['formErrorWrongFormat']           = 'Value ":value" has wrong format';
$LANG['formErrorNotNumber']		= 'Value ":value" is not a number';
$LANG['formErrorOutOfRange']            = 'Value ":value" is out of possible range';
$LANG['formErrorWrongEmailFormat']      = 'This is not valid e-mail address: ":value"';
$LANG['formErrorNotEqual']		= 'Values are not equal';
$LANG['formErrorWrongExt']		= 'File has wrong extension';

//Menu
$LANG['m_main']                         = 'API';
$LANG['m_APIUsers']                     = 'API Users';
$LANG['m_APILogs']                      = 'API Logs';
$LANG['m_moduleGenerator']		= 'Module Generator';
$LANG['m_responseTemplates']		= 'Response Templates';
$LANG['m_configuration']                = 'Configuration';

//API Logs
$LANG['api_logs']['showFilters']        = 'Show Filters';
$LANG['api_logs']['clearLogs']          = 'Clear Logs';
$LANG['api_logs']['clientID']           = 'Client ID';
$LANG['api_logs']['orderID']            = 'Order ID';
$LANG['api_logs']['success']            = 'Success';
$LANG['api_logs']['result']             = 'Result';
$LANG['api_logs']['filter']             = 'Filter';
$LANG['api_logs']['error']              = 'Error';
$LANG['api_logs']['IP']                 = 'IP';
$LANG['api_logs']['actionConfirmation'] = 'Are you sure to take this action?';
$LANG['api_logs']['ID']                 = 'ID';
$LANG['api_logs']['date']               = 'Date';
$LANG['api_logs']['client']             = 'Client';
$LANG['api_logs']['request']            = 'Request';
$LANG['api_logs']['response']           = 'Response';
$LANG['api_logs']['noResults']          = 'Nothing To Display';
$LANG['api_logs']['selectPage']         = 'Select Page:'; 
$LANG['api_logs']['resetFilter']        = 'Reset Filter';
$LANG['api_logs']['logsRemoved']        = 'Logs have been removed'; 

//API Promo
$LANG['api_promo']['assignCode']        = 'Promo Codes Management';
$LANG['api_promo']['select']            = 'Select';
$LANG['api_promo']['promotionCode']     = 'Promotion Code';
$LANG['api_promo']['type']              = 'Type';
$LANG['api_promo']['value']             = 'Value';
$LANG['api_promo']['recurring']         = 'Recurring';
$LANG['api_promo']['uses']              = 'Uses';
$LANG['api_promo']['startDate']         = 'Starting Date';
$LANG['api_promo']['expiryDate']        = 'Expiry Date';
$LANG['api_promo']['none']              = 'None';
$LANG['api_promo']['assign']            = 'Assign';
$LANG['api_promo']['generateKeyFirst']  = 'Please generate an API key firstly';
$LANG['api_promo']['codeAssigned']      = 'Promo Code has been assigned to user';
$LANG['api_promo']['choosePromoCode']   = 'Please choose Promotion Code before you proceed'; 

//API Users
$LANG['api_users']['client']            = 'Client';
$LANG['api_users']['email']             = 'E-Mail';
$LANG['api_users']['apiKey']            = 'API Key';
$LANG['api_users']['credit']            = 'Credit';
$LANG['api_users']['promoCode']         = 'Promo Code';
$LANG['api_users']['actions']           = 'Actions';
$LANG['api_users']['ipRestriction']     = 'IP Restriction';
$LANG['api_users']['assignPromoCode']   = 'Assign Promo Code';
$LANG['api_users']['generateNewKey']    = 'Generate New Key';
$LANG['api_users']['save']              = 'Save';
$LANG['api_users']['close']             = 'Close';
$LANG['api_users']['addField']          = 'Add Field';
$LANG['api_users']['listEnabledIP']     = 'List of enabled IP addresses';
$LANG['api_users']['IP']                = 'IP';
$LANG['api_users']['showFilters']       = 'Show Filters';
$LANG['api_users']['firstname']         = 'Firstname';
$LANG['api_users']['lastname']          = 'Lastname';
$LANG['api_users']['assignedKey']       = 'Assigned Key';
$LANG['api_users']['filter']            = 'Filter';
$LANG['api_users']['resetFilter']       = 'Reset Filter';
$LANG['api_users']['yes']               = 'Yes';
$LANG['api_users']['no']                = 'No';
$LANG['api_users']['enabled']           = 'enabled';
$LANG['api_users']['disabled']          = 'disabled';
$LANG['api_users']['enable']            = 'Enable';
$LANG['api_users']['disable']           = 'Disable';
$LANG['api_users']['switchMsg1']        = 'Are you sure to take this action? API will be';
$LANG['api_users']['switchMsg2']        = 'for this Client.';
$LANG['api_users']['newKeyMsg']         = 'Are you sure to generate a new key?';
$LANG['api_users']['genAllKeysMsg']     = 'Are you sure to generate new keys? All previous keys will be changed.';
$LANG['api_users']['enableAPIAllMsg']   = 'Are you sure you want to enable API for all users?';
$LANG['api_users']['disableAPIAllMsg']  = 'Are you sure you want to disable API for all user?';
$LANG['api_users']['genAllKeys']        = 'Generate Keys For All Users';
$LANG['api_users']['enableAPIAll']      = 'Enable Keys For All Users';
$LANG['api_users']['disableAPIAll']     = 'Disable Keys For All Users';
$LANG['api_users']['ipRestriction']     = 'IP Restriction';
$LANG['api_users']['apiRestrictions']   = 'API Restriction';
$LANG['api_users']['noResults']         = 'Nothing To Display';
$LANG['api_users']['keysGenerated']     = 'Keys have been generated';
$LANG['api_users']['allKeysEnabled']    = 'All keys have been enabled';
$LANG['api_users']['allKeysDisabled']   = 'All keys have been disabled';
$LANG['api_users']['IPAssigned']        = 'IP addresses have been assigned';
$LANG['api_users']['APIKeyGenerated']   = 'API Key has been generated for client:';
$LANG['api_users']['APIKey1']           = 'API Key has been';
$LANG['api_users']['APIKey2']           = 'for client:';
$LANG['api_users']['restrictionSaved']  = 'Changes have been saved'; 
$LANG['apiRestrictions']['enableAPIRestriction']    = 'Enable API Requests Limit';
$LANG['apiRestrictions']['restrictionInterval']     = 'Interval';
$LANG['apiRestrictions']['restrictionValue']        = 'Requests Number'; 
$LANG['apiRestrictions']['minutes']                 = 'Minutes'; 
$LANG['apiRestrictions']['hour']                    = 'Hour'; 
$LANG['apiRestrictions']['hours']                   = 'Hours'; 
$LANG['apiRestrictions']['day']                     = 'Day'; 
$LANG['apiRestrictions']['days']                    = 'Days';
$LANG['listEnabledIP'] = 'List of enabled IP addresses';
$LANG['addField'] = 'Add Field';
$LANG['close'] = 'Close';
$LANG['save'] = 'Save';
$LANG['ipRestriction'] = 'IP Restriction';


//Configuration
$LANG['configuration']['titleConnection']       = 'Connection';
$LANG['configuration']['titlePayment']          = 'Payment';
$LANG['configuration']['titleMiscellaneous']    = 'Miscellaneous';

$LANG['configuration']['apiStatus']             = 'API Status';
$LANG['configuration']['enabled']               = 'Enabled';
$LANG['configuration']['disabled']              = 'Disabled';
$LANG['configuration']['apiStatusTitle']        = 'Turn on/off access to API';
$LANG['configuration']['restrictedByIP']        = 'Restricted By IP Address';
$LANG['configuration']['restrictedByIPTitle']   = 'Allow only chosen IPs to access API';
$LANG['configuration']['allowedIP']             = 'Allowed IP Address';
$LANG['configuration']['allowedIPTitle']        = 'White List of IPs allowed for connection';
$LANG['configuration']['payAfterReg']           = 'Pay After Registration';
$LANG['configuration']['payAfterRegTitle']      = 'List of resellers allowed to register domains without credits';
$LANG['configuration']['payAfterOrder']         = 'Pay After Order';
$LANG['configuration']['payAfterOrderTitle']    = 'List of resellers allowed to place orders without credits';
$LANG['configuration']['autoDisableAPI']        = 'Auto Disable API For New Users';
$LANG['configuration']['autoDisableAPITitle']   = 'If enabled, new users will not have access to API';
$LANG['configuration']['autoGenerateKey']       = 'Auto Generate API Key For New Users';
$LANG['configuration']['autoGenerateKeyTitle']  = 'If enabled, API Key will be automatically generated for every new user';
$LANG['configuration']['sslConnection']         = 'SSL Connection';
$LANG['configuration']['sslConnectionTitle']    = 'When enabled, URL with \'https\' will be used';
$LANG['configuration']['refund']                = 'Refund';
$LANG['configuration']['refundTitle']           = 'Credits Only - In case of any mistakes while registering, Client will be given a refund in the form of Credits in WHMCS
                                                   Create Refund Invoice -  In case of any mistakes while registering, Client will be given a refund in the form of Credits in WHMCS, and an Invoice will be created';
$LANG['configuration']['creditsOnly']           = 'Credits Only';
$LANG['configuration']['refundInvoice']         = 'Create Refund Invoice';
$LANG['configuration']['lowCredit']             = 'Low Credit Notification';
$LANG['configuration']['lowCreditTitle']        = 'If the amount of credits is low, an informing email will be sent to a Client';
$LANG['configuration']['tlds']                  = 'TLDs Enabled For API';
$LANG['configuration']['save']                  = 'Save Changes';
$LANG['configuration']['changesSaved']          = 'Your changes have been saved';
$LANG['configuration']['apiRestriction']        = 'API Request Amount Restriction'; 	
$LANG['configuration']['apiRestrictionInterval'] = 'API Restriction Interval'; 	
$LANG['configuration']['apiRestrictionValue']   = 'Max Request Amount';
$LANG['configuration']['apiRestrictionTitle']           = 'If enabled, limited numer of API requests will be called in a defined time interval'; 	
$LANG['configuration']['apiRestrictionIntervalTitle']   = 'Select time interval within which a API requests can be sent, not exceeding maximum defined'; 	
$LANG['configuration']['apiRestrictionValueTitle']      = 'Enter maximum number of allowed API requests in previously chosen time interval';
$LANG['configuration']['minutes']               = 'Minutes'; 
$LANG['configuration']['hour']                  = 'Hour'; 
$LANG['configuration']['hours']                 = 'Hours'; 
$LANG['configuration']['day']                   = 'Day'; 
$LANG['configuration']['days']                  = 'Days'; 
$LANG['configuration']['useRegistrant']         = 'Default Registrant'; 
$LANG['configuration']['useRegistrantTitle']    = 'Select default contact that will be used during registration; this option is applicable only if registrant contact uses client details from WHMCS';
$LANG['configuration']['useRest']               = 'Default Admin/Tech/Billing';
$LANG['configuration']['useRestTitle']          = 'Select default admin that will be used for contact; this option is applicable only if admin/tech/billing uses admin details from WHMCS';
$LANG['configuration']['admin']                 = 'Admin';
$LANG['configuration']['reseller']              = 'Reseller';
$LANG['configuration']['enduser']               = 'End-User';
$LANG['configuration']['editContact']           = 'Allow End-Users To Edit Contacts';
$LANG['configuration']['registrant']            = 'Registrant';
$LANG['configuration']['tech']                  = 'Tech';
$LANG['configuration']['billing']               = 'Billing';
$LANG['configuration']['ipRestrictionClient'] = 'Allow Resellers To Set IP Restriction';
$LANG['configuration']['ipRestrictionClientLimit'] = 'IP Adresses Restriction Limit';
$LANG['configuration']['unlimited'] = 'Unlimited';
$LANG['configuration']['ipRestrictionClientTooltip']  = 'Enable and set a limit, if you want to allow your resellers to define their own restricted IP addresses.';
//API
$LANG['main']['introduction']           = 'Introduction';
$LANG['main']['connection']             = 'Connection';
$LANG['main']['examples']               = 'Examples';
$LANG['main']['knowledgebase']          = 'Knowledgebase';

$LANG['main']['introduction1']          = 'The Domains Reseller API allows you to interact with our system programmatically from your own WHMCS.';
$LANG['main']['introduction2']          = 'Use API to perform following actions:';
$LANG['main']['register']               = 'Register Domain';
$LANG['main']['transfer']               = 'Transfer Domain';
$LANG['main']['renew']                  = 'Renew Domain';
$LANG['main']['release']                = 'Release Domain';
$LANG['main']['delete']                 = 'Delete Domain';
$LANG['main']['modifyContact']          = 'Modify Contact Details';
$LANG['main']['EPPCode']                = 'Get EPP Code';
$LANG['main']['dns']                    = 'Get/Save DNS Records';
$LANG['main']['ns']                     = 'Get/Modify Nameservers';
$LANG['main']['registerNs']             = 'Register Nameserver';
$LANG['main']['modifyNs']               = 'Modify Nameserver';
$LANG['main']['deleteNs']               = 'Delete Nameserver';
$LANG['main']['lock']                   = 'Registrar Lock';
$LANG['main']['forwarding']             = 'Get/Save Email Forwarding';
$LANG['main']['IDProtection']           = 'ID Protection';
$LANG['main']['cron']                   = 'Domain Cron Synchronization';

$LANG['main']['connection1']            = 'Domains Reseller Request/Response Data Format:';
$LANG['main']['connection2']            = 'For API Requests, Domains Reseller accepts query parameters.';
$LANG['main']['connection3']            = 'API response is sent in JSON data format.';      
$LANG['main']['connection4']            = 'Authentication:';
$LANG['main']['connection5']            = 'API key and email address are required for authentication.';
$LANG['main']['connection6']            = 'These details are given by a provider.';
$LANG['main']['connection7']            = 'API URL:';

$LANG['main']['examples1']              = 'Examples:';
$LANG['main']['examples2']              = 'The following examples use the cURL command-line tool to execute API requests.';
$LANG['main']['examples3']              = 'Exemplary API Request:';
$LANG['main']['examples4']              = 'Exemplary API Response:';

$LANG['main']['knowledgebase1']         = 'API Documentation:';
$LANG['main']['knowledgebase2']         = 'View';
$LANG['main']['knowledgebase3']         = 'Documentation will be created as Knowledgebase articles in your WHMCS system. If you have previously created the documentation, it will be not overwritten but created again. Do you want to proceed?';
$LANG['main']['knowledgebase4']         = 'Generate Knowledgebase Docs';
$LANG['main']['generated']              = 'Knowledgebase has been generated';

//Module Generator
$LANG['module_generator']['whmcs']              = 'WHMCS';
$LANG['module_generator']['hostBill']           = 'HostBill';
$LANG['module_generator']['moduleName']         = 'Module Name:';
$LANG['module_generator']['generateModule']     = 'Generate Module';

$LANG['module_generator']['whmcsInstruction']   = 'Instructions on the installation of a module that can be provided to resellers:';
$LANG['module_generator']['whmcsStep1']         = 'Download the file.';
$LANG['module_generator']['whmcsStep2']         = 'Upload and extract the module into the main WHMCS directory.';
$LANG['module_generator']['whmcsStep3']         = 'Go to Setup → Products/Services → Domain Registrars and activate module.';
$LANG['module_generator']['whmcsStep4']         = 'Set credentials for the API connection.';
$LANG['module_generator']['whmcsInfo1']         = 'Your resellers have to add this code:';
$LANG['module_generator']['whmcsInfo2']         = 'At the end of';
$LANG['module_generator']['whmcsInfo3']         = 'file located at';
$LANG['module_generator']['whmcsInfo4']         = 'Right before sign:';
$LANG['module_generator']['whmcsInfo5']         = 'Or in:';

$LANG['module_generator']['hbInstruction']      = 'Instructions on the installation of a module that can be provided to resellers:';
$LANG['module_generator']['hbStep1']            = 'Download the file.';
$LANG['module_generator']['hbStep2']            = 'Upload and extract the module into the main HostBill directory.';
$LANG['module_generator']['hbStep3']            = 'Go to Settings → Modules → Domain Modules and activate module.';
$LANG['module_generator']['hbStep4']            = 'Set credentials for the API connection.';

$LANG['module_generator']['writable1']          = 'Check permission to module directory:';
$LANG['module_generator']['writable2']          = 'It must be writable.';
$LANG['module_generator']['invalidName']        = 'Module name is invalid';
$LANG['module_generator']['success']            = 'Success: Module generated. Auto download will start in 10sec';

//Response Templates
$LANG['responses']['id']                = 'ID';
$LANG['responses']['contains']          = 'Response Content';
$LANG['responses']['replace']           = 'Replace With';
$LANG['responses']['type']              = 'Type';
$LANG['responses']['action']            = 'Action';
$LANG['responses']['priority']          = 'Priority';
$LANG['responses']['actions']           = 'Actions';
$LANG['responses']['edit']              = 'Edit';
$LANG['responses']['remove']            = 'Remove';
$LANG['responses']['noResults']         = '--No Results--';
$LANG['responses']['add']               = 'Add';

$LANG['responses']['modalTitle']            = 'Add Template';
$LANG['responses']['modalContains']         = 'Response Content';
$LANG['responses']['modalContainsTitle']    = 'Provide the pattern for search and replace in the response depending on the type here. For "Text" type, simply provide some string like "Error Response". For "Regular Expression" type, you need to provide a regular expression which will be replaced, for example if you want to replace any dollar price in the response provide "\$\d+\.\d+", in this case it will replace strings like "$8.25". If you want to replace any response, simply type ".+" here.';
$LANG['responses']['modalReplace']          = 'Replace With';
$LANG['responses']['modalReplaceTitle']     = 'Any pattern found from the upper field will be replaced with the text provided here.';
$LANG['responses']['modalPriority']         = 'Priority';
$LANG['responses']['modalPriorityTitle']    = 'Higher number means higher priority. Please note that only the first occurrence with the highest priority will be replaced. It means if there are 2 patterns found with priority 20 and 10, only pattern with priority 20 will be replaced.';
$LANG['responses']['modalType']             = 'Type';
$LANG['responses']['modalTypeTitle']        = 'Indicates if provided text in the first field should be treated as a text or a regular expression while searching for a pattern.';
$LANG['responses']['modalAction']           = 'Action';
$LANG['responses']['modalActionTitle']      = 'Specifies upon which action provided patterns are searched for.';
$LANG['responses']['text']                  = 'Text';
$LANG['responses']['regExp']                = 'Regular Expression';
$LANG['responses']['modalClose']            = 'Close';
$LANG['responses']['modalAdd']              = 'Add';

$LANG['responses']['deleteTitle']           = 'Delete Template';
$LANG['responses']['deleteMessage']         = 'Are you sure you want to delete this template?';
$LANG['responses']['close']                 = 'Close';
$LANG['responses']['delete']                = 'Delete';

$LANG['responses']['editTitle']             = 'Edit Template';
$LANG['responses']['save']                  = 'Save';

$LANG['responses']['added']                 = 'Item has been successfully added';
$LANG['responses']['deleted']               = 'Item has been successfully deleted';
$LANG['responses']['edited']                = 'Item has been successfully edited';

$LANG['responses']['register']              = 'Register Domain';
$LANG['responses']['transfer']              = 'Transfer Domain';
$LANG['responses']['renew']                 = 'Renew Domain';
$LANG['responses']['getNS']                 = 'Get Nameservers';
$LANG['responses']['saveNS']                = 'Save Nameservers';
$LANG['responses']['release']               = 'Release Domain';
$LANG['responses']['epp']                   = 'Get EPP Code';
$LANG['responses']['getContact']            = 'Get Contact Details';
$LANG['responses']['saveContact']           = 'Save Contact Details';
$LANG['responses']['fields']                = 'Get Domain Fields';
$LANG['responses']['getLock']               = 'Get Registrar Lock';
$LANG['responses']['updateLock']            = 'Update Registrar Lock';
$LANG['responses']['sync']                  = 'Sync';
$LANG['responses']['transferSync']          = 'Transfer Sync';
$LANG['responses']['registerNS']            = 'Register Nameserver';
$LANG['responses']['modifyNS']              = 'Modify Nameserver';
$LANG['responses']['deleteNS']              = 'Delete Nameserver';
$LANG['responses']['getDNS']                = 'Get DNS';
$LANG['responses']['saveDNS']               = 'Save DNS';
$LANG['responses']['delete']                = 'Delete Template';
$LANG['responses']['getForwarding']         = 'Get Forwarding';
$LANG['responses']['saveForwarding']        = 'Save Forwarding';
$LANG['responses']['idProtection']          = 'Toggle ID Protection';
$LANG['responses']['version']               = 'Get Version';

//The rest
$LANG['manage_label']                   = 'Reseller Registrar Credentials';
$LANG['api_disabled']                   = 'API key is disabled. Please contact site admin.';
$LANG['api_url']                        = 'API URL';
$LANG['api_email']                      = 'API E-mail';
$LANG['api_key']                        = 'API Key';
$LANG['credit']                         = 'Credit';
$LANG['action']                         = 'Action';
$LANG['confirm_generate_key']           = 'Are you sure to generate new key?';
$LANG['generate_key']                   = 'Generate Key';
$LANG['nothing_label']                  = 'Nothing to display, please contact Admin';
$LANG['show']                           = 'Show';
$LANG['hide']                           = 'Hide';

//This lang line is responsible for displaying navbar item name in Client Area
$LANG['navbar_item_name']               = 'Reseller Registrar Credentials';
