<?php
/* * ********************************************************************
 *  ProxmoxVPS  Product developed. (2013-11-18)
 * *
 *
 *  CREATED BY MODULESGARDEN       ->       http://modulesgarden.com
 *  CONTACT                        ->       contact@modulesgarden.com
 *
 *
 * This software is furnished under a license and may be used and copied
 * only  in  accordance  with  the  terms  of such  license and with the
 * inclusion of the above copyright notice.  This software  or any other
 * copies thereof may not be provided or otherwise made available to any
 * other person.  No title to and  ownership of the  software is  hereby
 * transferred.
 *
 *
 * ******************************************************************** */

/**
 * @author Grzegorz Draganik <grzegorz@modulesgarden.com>
 * @author Paweł Kopeć <pawelk@modulesgarden.com>
 * 
 * Proxmox v 1. 1
 * New translated added:
 * $_LANG['vps']['backup_actions'] 
 * $_LANG['vps']['backup_error_maxjobs'] 
 * 
 * Proxmox v 1. 2
 * New translated added:
 * unlimited, IP_Addresses,
 * Backups_Files_Limit, Network_Rate
 */
$_LANG['generalError']  = "Something has gone wrong. Check the logs and contact the administrator.";
$_LANG['general']['back']		   = 'Back To Service';
$_LANG['general']['graph_of']	   = 'of';
$_LANG['general']['graph_used']       = 'Used';
$_LANG['general']['usage']		   = 'Usage';
$_LANG['general']['graph_free']   	   = 'Free';
$_LANG['general']['console_info']	   = 'The console requires Java software. You need to accept the \'security risk\' popup in order to run it.';
$_LANG['general']['save']             = 'Save Changes';
$_LANG['general']['add']              = 'Add';
$_LANG['general']['cancel']           = 'Cancel';
$_LANG['general']['confirm']          = 'Are you sure that you want to proceed?';
$_LANG['general']['total']            = 'Total';
$_LANG['general']['working']          = 'Working...';
$_LANG['general']['none']              = 'None';
$_LANG['vps']['management']		   = 'Management';
$_LANG['vps']['delete']		   = 'Delete';
$_LANG['vps']['rebuild']		   = 'Reinstall';
$_LANG['vps']['shutdown']		   = 'Shutdown';
$_LANG['vps']['reinstall']		   = 'Reinstall';
$_LANG['vps']['stop']	          = 'Stop';
$_LANG['vps']['reboot']		   = 'Reboot';
$_LANG['vps']['console']	 	   = 'VNC Console';
$_LANG['vps']['control_panel']	   = 'Control Panel';
$_LANG['vps']['details']		   = 'Details';
$_LANG['vps']['status']		   = 'Status';
$_LANG['vps']['boot']		   = 'Boot';
$_LANG['vps']['type']	          = 'Type';
$_LANG['vps']['template']		   = 'Template';
$_LANG['vps']['hostname']		   = 'Hostname';
$_LANG['vps']['change_host_btn']      = 'Change';
$_LANG['vps']['change_hostname']      = 'Change Hostname';
$_LANG['vps']['main_ip']		   = 'Main IP Address';
$_LANG['vps']['ip_addresses']         = 'IP Addresses';
$_LANG['vps']['root_password']        = 'Root Password';
$_LANG['vps']['root_pass_show']       = 'Show';
$_LANG['vps']['root_change_password'] = 'Change Password';
$_LANG['vps']['root_pass_change']	   = 'Change';
$_LANG['vps']['bandwidth']		   = 'Bandwidth';
$_LANG['vps']['memory']		   = 'Memory';
$_LANG['vps']['hdd']			   = 'HDD';
$_LANG['vps']['graphs']		   = 'Graphs';
$_LANG['vps']['graph_cpu']	          = 'CPU Usage %';
$_LANG['vps']['graph_mem']	          = 'Memory Usage';
$_LANG['vps']['graph_net']	          = 'Network Traffic';
$_LANG['vps']['graph_disk']	          = 'Disk IO';
$_LANG['vps']['burst']	          = 'Burst';
$_LANG['vps']['dedicated']	          = 'Dedicated';
$_LANG['vps']['cpu_units']	          = 'CPU Units';
$_LANG['vps']['graph_no_cpu']   	   = 'The traffic graph is not available yet';
$_LANG['vps']['graph_no_mem']	   = 'The memory graph is not available yet';
$_LANG['vps']['graph_no_net']	   = 'The network graph is not available yet';
$_LANG['vps']['graph_no_disk']	   = 'The disk graph is not available yet';
$_LANG['vps']['hour']                 = "Hour";
$_LANG['vps']['day']                  = "Day";
$_LANG['vps']['week']                 = "Week";
$_LANG['vps']['month']                = "Month";
$_LANG['vps']['year']                 = "Year";
$_LANG['vps']['rebuild_template']     = 'Select Template:';
$_LANG['vps']['rebuild_cd_rom_iso']   = 'Select CD-ROM ISO:';
$_LANG['vps']['rebuild_boot_order']   = 'Boot Order:';
$_LANG['vps']['rebuild_boot_1']	   = 'Boot Device 1';
$_LANG['vps']['rebuild_boot_2']	   = 'Boot Device 2';
$_LANG['vps']['rebuild_boot_3']	   = 'Boot Device 3';
$_LANG['vps']['backup']		   = 'Backups'; 
$_LANG['vps']['backup_jobs']	   = 'Backup Jobs';
$_LANG['vps']['no_backup_files']      = 'Empty';
$_LANG['vps']['backup_id']            = 'ID';
$_LANG['vps']['backup_start_time']    = 'Start Time';
$_LANG['vps']['backup_day_of_week']   = 'Day of Week';
$_LANG['vps']['backup_compress']      = 'Compression Type';
$_LANG['vps']['backup_mode']          = 'Backup Mode';
$_LANG['vps']['backup_new']           = 'New Backup';
$_LANG['vps']['backup_new_job']       = 'New Job';
$_LANG['vps']['no_backup_job']        = 'Empty';
$_LANG['vps']['backup_file']          = 'File';
$_LANG['vps']['backupDate']          = 'Date';
$_LANG['vps']['backup_format']        = 'Format';
$_LANG['vps']['backup_size']          = 'Size';
$_LANG['vps']['backup_actions']       = 'Actions';
$_LANG['vps']['backup_error_size']    = 'The maximum size set for a backup has been exceeded. Please remove the old backup files.';
$_LANG['vps']['backup_error_maxfiles']= 'The maximum number of backup files has been exceeded. Please remove the old backup files.';
$_LANG['vps']['backup_error_maxjobs'] = 'The maximum number of backup jobs has been exceeded. Please remove the old backup jobs.';
$_LANG['vps']['new_backup']		   = 'New Backup';
$_LANG['vps']['backup_restore_info']  = 'Are you sure that you want to restore this virtual machine? This action will permanently erase the current VM data.';
$_LANG['vps']['backup_reload']	   = 'The backup list has been reloaded successfully';

$_LANG['vps']['week_array']           = array(
                                                "mon" => "Monday",
                                                "tue" => "Tuesday",
                                                "wed" => "Wednesday",
                                                "thu" => "Thursday",
                                                "fri" => "Friday",
                                                "sat" => "Saturday",
                                                "sun" => "Sunday"
                                          );

$_LANG['vps']['rebuild_no_templates'] = 'No templates available';
$_LANG['vps']['console_pass']	   = 'Password:';
$_LANG['vps']['console_session']      = 'Session Expires:';
$_LANG['vps_ajax']['no_server']	   = 'You need to setup the server first';
$_LANG['vps_ajax']['no_access']	   = 'You have no access to this action';
$_LANG['vps_ajax']['unknown']	   = 'Unknown error';
$_LANG['vps']['dns_manager_reverse']  = 'Manage Reverse DNS';
$_LANG['vps']['dns_manager_manage']   = 'Manage DNS';
$_LANG['vps']['reinstallmsg']	   = 'Are you sure that you want to reinstall the virtual machine?';
$_LANG['vps']['name']	          = 'Name';
$_LANG['vps']['cpus']	          = 'CPUs';
$_LANG['vps']['uptime']	          = 'Uptime';
$_LANG['vps']['cpu_usage']	          = 'CPU Usage';
$_LANG['vps']['memory_usage']	   = 'Memory Usage';
$_LANG['vps']['disc_usage']	          = 'Disk Usage';
$_LANG['vps']['ip_addresses']	   = 'IP Addresses';
$_LANG['vps']['mac_addresses']	   = 'MAC Addresses';
$_LANG['vps']['network']	          = 'Network Device Configuration';
$_LANG['vps']['ip_address']	          = 'IP Address';
$_LANG['vps']['netmask']    	   = 'MAC';
$_LANG['vps']['dns']     	          = 'DNS';
$_LANG['vps']['ports_slaves']	   = 'Ports / Slaves';
$_LANG['vps']['ip_address']	          = 'IP Address';
$_LANG['vps']['subnet_mask']	   = 'Subnet Mask';
$_LANG['vps']['gateway']	          = 'Gateway';
$_LANG['vps']['network_device']	   = 'Network Device';
$_LANG['vps_ajax']['no_template']	   = 'You need to select the template before the reinstallation';
$_LANG['vps_ajax']['template_empty']  = 'No templates available for reinstallation';
$_LANG['vps']['delete']		   = 'Delete';
$_LANG['vps']['update']		   = 'Update';
$_LANG['vps']['restore']		   = 'Restore';
// v 1.2
$_LANG['vps']['unlimited']		   = 'Unlimited';
$_LANG['vps']['IP_Addresses']         = 'IP Addresses';
$_LANG['vps']['Backups_Files_Limit']  = 'Backups Files Limit';
$_LANG['vps']['Network_Rate']         = 'Network Rate';

// v 1.3
$_LANG['vps']['node']                 = 'Node';
$_LANG['vps']['task_history']         = 'Task History';
$_LANG['vps']['start_time']           = 'Start Time';
$_LANG['vps']['end_time']             = 'End Time';
$_LANG['vps']['description']          = 'Description';
$_LANG['vps']['nothing_to_display']   = 'Nothing to display';
$_LANG['vps']['vlan_tag']             = 'VLAN Tag';
$_LANG['vps']['msg_backup_routing']             = 'Your routing backup limit is %d. When you exceed this limit, the last backup will be replaced with a new one.';

//v 1.4

$_LANG['button.console']                = 'VNC Console';
$_LANG['button.reinstall']              = 'Reinstall';
$_LANG['button.backup']                 = 'Backup';
$_LANG['button.backup_jobs']            = 'Backup Jobs';
$_LANG['button.graphs']                 = 'Graphs';
$_LANG['button.task_history']           = 'Task History';
$_LANG['button_spice']                  = 'SPICE Console';


$_LANG['button_snapshots']	            = 'Snapshots';
$_LANG['snapshots']['header']		            = 'Snapshots';
$_LANG['snapshots']['name']		            = 'Name';
$_LANG['snapshots']['ram']		            = 'RAM';
$_LANG['snapshots']['date_status']		            = 'Date/Status';
$_LANG['snapshots']['description']		            = 'Description';
$_LANG['snapshots']['action']	= 'Actions';
$_LANG['snapshots']['empty']	= 'No snapshots available';

 $_LANG['snapshots']['ram_on']	= 'Yes';
 $_LANG['snapshots']['ram_off']	= 'No';
 $_LANG['snapshots']['activated']	= 'Activated';
 $_LANG['snapshots']['deleted']	= 'The snapshot has been deleted successfully';
 $_LANG['snapshots']['updated']	= 'The snapshot has been updated successfully';
 $_LANG['snapshots']['delete']	= 'Are you sure that you want to delete this snapshot?';
 $_LANG['snapshots']['take_snapshot']	= 'Take Snapshot';
 $_LANG['snapshots']['rollback']	= ' Rollback';
 $_LANG['snapshots']['rollback_alert']	= 'Are you sure that you want to roll back this snapshot?';
  $_LANG['snapshots']['deleteMsg']	= 'Are you sure that you want to delete this snapshot?';
 $_LANG['snapshots']['rollbacked']	= 'The snapshot has been rolled back successfully';
 $_LANG['snapshots']['close'] = 'Close';
 
$_LANG['snapshots_form']['name']		            = 'Name:';
$_LANG['snapshots_form']['incram']		            = 'Include RAM: ';
$_LANG['snapshots_form']['description']		            = 'Description: ';
$_LANG['snapshots']['created']	= 'The snapshot has been created successfully';
$_LANG['snapshots']['err_alphabetical']	= 'Only alphabetical characters are allowed';

$_LANG['button_network']	= 'Network';
$_LANG['network']['header']		            = 'Network';
$_LANG['network']['type']		            = 'Type';
$_LANG['network']['name']		            = 'IP Address / Name';
$_LANG['network']['bridge']		            = 'Bridge';
$_LANG['network']['mac']		            = 'Mac Address';
$_LANG['network']['empty']	= 'No networks available';


$_LANG['network']['type_ip']	= 'IP Address';
$_LANG['network']['type_device']	= 'Network Device';

$_LANG['network']['new']	= 'New Private Network';
$_LANG['network']['added']	= 'The private network has been added successfully';
$_LANG['network']['action']	= 'Action';

$_LANG['network']['delete']	= 'Are you sure that you want to delete this network?';
$_LANG['network']['deleted']	= 'The private network has been deleted successfully';
$_LANG['network']['tag']	= 'Tag';


$_LANG['ajax']['unknown']	= 'Unknown error'; // access denied
$_LANG['ajax']['vm_booted']  = 'The container has been booted successfully';
$_LANG['ajax']['vm_rebooted']  = 'The container has been rebooted successfully';
$_LANG['ajax']['vm_stopped']  = 'The container has been stopped successfully';
$_LANG['ajax']['vm_shutdown']  = 'The container has been shut down successfully';
$_LANG['ajax']['vm_reinstalled']  = 'The container has been reinstalled successfully';
$_LANG['ajax']['backup_job_created']  = 'The backup job has been created successfully';
$_LANG['ajax']['backup_job_updated']  = 'The backup job has been updated successfully';
$_LANG['ajax']['backup_job_deleted']  = 'The backup job has been deleted successfully';
$_LANG['ajax']['backup_creating']  = 'The backup creation is in progress';
$_LANG['ajax']['backup_deleted']  = 'The backup file has been deleted successfully';
$_LANG['ajax']['backup_restored']  = 'The virtual machine has been restored successfully';
$_LANG['ajax']['hostname_changed']  = 'The hostname has been changed successfully';
$_LANG['ajax']['hostname_failed']  = 'The hostname change has failed';

$_LANG['ajax']['vm_running']  = 'The virtual machine is already running';
$_LANG['ajax']['vm_stopped']  = 'The virtual machine is already stopped';
$_LANG['ajax']['vm_no_running']  = 'The virtual machine is not running';

$_LANG['button_firewall']  = 'Firewall';
$_LANG['firewall']['header']		            = 'Firewall';
$_LANG['firewall']['enable']		            = 'Enable';
$_LANG['firewall']['type']		            = 'Type';
$_LANG['firewall']['action']		            = 'Action';
$_LANG['firewall']['source']		            = 'Source';

$_LANG['firewall']['macro']		            = 'Macro';
$_LANG['firewall']['interface']		            = 'Interface';
$_LANG['firewall']['destination']		            = 'Destination';
$_LANG['firewall']['protocol']		            = 'Protocol';
$_LANG['firewall']['dest_port']		            = 'Dest. Port';
$_LANG['firewall']['source_port']		            = 'Source Port';
$_LANG['firewall']['comment']		            = 'Comment';
$_LANG['firewall']['actions']		            = 'Actions';
$_LANG['firewall']['empty']	= 'No rules available';

$_LANG['firewall']['add']		            = 'Add';
$_LANG['firewall']['add_rule']		            = 'Add: Rule';
$_LANG['firewall']['edit_rule']		            = 'Edit: Rule';
$_LANG['firewall']['close']		            = 'Close';

$_LANG['firewall']['direction']	= 'Direction';
$_LANG['firewall']['delete']	= 'Are you sure that you want to delete this rule?';
$_LANG['firewall']['directions']	 =  array(
                                                "in" => "in",
                                                "out" => "out"
                                   );
$_LANG['firewall']['action_select'] =  array(
                                               "ACCEPT" => "ACCEPT",
                                               "DROP"   => "DROP",
                                               "REJECT" => "REJECT",
                                   );

$_LANG['firewall']['protocols'] =  array(
                                         "tcp" => "6  Transmission Control Protocol",
                                         "udp"   => "17 User Datagram Protocol",
                                         "icmp" => "1 Internet Control Message Protocol",
                                         "igmp" => "2 Internet Group Management",
                                         "ggp" => "3 gateway-gateway protocol",
                                         "ipencap" => "4 IP encapsulated in IP",
                                         "st" => "5 ST datagram mode",
                                         "egp" => "8 exterior gateway protocol",
                                         "igp" => "9 any private interior gateway (Cisco)",
                                         "pup" => "12 PARC universal packet protocol",
                                         "hmp" => "20 host monitoring protocol",
                                         "xns-idp" => "22 Xerox NS IDP",
                                         "rdp" => "27 \"reliable datagram\" protocol",
                                         "iso-tp4" => "29 ISO Transport Protocol class 4 [RFC905]",
                                         "dccp" => "33 Datagram Congestion Control Prot. ",
                                         "xtp" => "33 Xpress Transfer Protocol",
                                         "ddp" => "37 Datagram Delivery Protocol",
                                         "idpr-cmtp" => "38 IDPR Control Message Transport",
                                         "ipv6" => "41 Internet Protocol, version 6",
                                         "ipv6-route" => "43 Routing Header for IPv6",
                                         "ipv6-frag" => "44 Fragment Header for IPv6",
                                         "idrp" => "45 Inter-Domain outing Protocol",
                                         "rsvp" => "46 Reservation Protocol",
                                         "gre" => "47 General Routing Encapsulation",
                                         "esp" => "50 Encap Security Payload [RFC2406]",
                                         "ah" => "51 Authentication Header [RFC2402]",
                                         "skip" => "57 SKIP",
                                         "ipv6-icmp" => "58 ICMP for IPv6",
                                         "ipv6v-nonxt" => "59 No Next Header for IPv6",
                                         "ipv6-opts" => "60 Destination Options for IPv6",
                                         "vmtp" => "81 Versatile Message Transport",
                                         "eigrp" => "88 Enhanced Interior Routing Protocol (Cisco)",
                                         "ospf" => "89 Open Shortest Path First IGP",
                                         "ax.25" => "93 AX.25 frames",
                                         "ipip" => "94 Ip-within-IP Encapsulation Protocol",
                                         "etherip" => "97 IP-within-IP Encapsulation [RFC3378]",
                                         "pim" => "103 Protocol Independent Muulticast",
                                         "ipvomp" => "108 IP Payload Compression Protocol",
                                         "vrrp" => "112 Virtual Router Redundancy Protocol",
                                         "l2tp" => "115 Layer Two Tunneling Protocol [RFC2661]",
                                         "isis" => "124 IS-IS over IPv4",
                                         "sctp" => "132 Stream Control Transmission Protocol",
                                         "fc" => "133 Fibre Channel",
                                         "mobility-header" => "135 Mobility Support for Ipv6 [RFC3775]",
                                         "udplite" => "136 UDP-Lite [RFC3828]",
                                         "mpls-in-ip" => "136 UDP-Lite [RFC3828]",
                                         "hip" => "139 Host Identity Protocol",
                                         "shim6" => "139 Shim6 Protocol [RFC5533]",
                                         "wesp" => "141 Wrapped Encapsulating Security Payload",
                                         "rohc" => "142 Robust Header Compression",
                                   );
$_LANG['firewall']['rule_created']	= 'The rule has been created successfully';
$_LANG['firewall']['rule_updated']	= 'The rule has been updated successfully';
$_LANG['firewall']['rule_delted']	= 'The rule has been removed successfully';
$_LANG['general']['edit']          = 'Edit';
$_LANG['general']['ok']          = 'Ok';
$_LANG['firewall']['add_group']	= 'Add Security Group';
$_LANG['firewall']['edit_group']	= 'Edit Security Group';
$_LANG['firewall']['security_group']	= 'Security Group';
$_LANG['firewall']['venet']	= 'venet';

$_LANG['reinstall']['iso_changed']	= 'The ISO image and boot order have been changed successfully';
$_LANG['reinstall']['vm_reinstalled']	= 'The virtual machine has been reinstalled successfully';
$_LANG['vps']['unlimited']			= 'Unlimited';
$_LANG['button_novnc'] = "noVNC"; 
$_LANG['button_disksManagement'] = "Disks"; 


$_LANG['disks']['header'] = 'Disks';
$_LANG['disks']['name']	  = 'Name';
$_LANG['disks']['bus']	  = 'Bus / Device';
$_LANG['disks']['format']		            = 'Format';
$_LANG['disks']['backup']		            = 'Backup';
$_LANG['disks']['size']		            = 'Size';
$_LANG['disks']['disk-1']		            = 'Disk 1';
$_LANG['disks']['disk-2']		            = 'Disk 2';
$_LANG['disks']['disk-3']		            = 'Disk 3';
$_LANG['disks']['disk-4']		            = 'Disk 4';
$_LANG['disks']['disk-5']		            = 'Disk 5';
$_LANG['disks']['disk-6']		            = 'Disk 6';
$_LANG['disks']['disk-7']		            = 'Disk 7';
$_LANG['disks']['disk-8']		            = 'Disk 8';
$_LANG['disks']['actons']		            = 'Actions';
$_LANG['disks']['empty']		            = 'No Disks';
$_LANG['disks']['delete']		            = 'Are you sure that you want to delete this hard disk?';
$_LANG['disks']['added']	= 'The hard disk has been added successfully';
$_LANG['disks']['deleted']	= 'The hard disk has been deleted successfully';
$_LANG['disks']['edited']	= 'The hard disk has been edited successfully';
$_LANG['disks']['actions']	= 'Actions';
$_LANG['disks']['add']	= 'Add Hard Disk';
$_LANG['disks']['size_gb']		            = 'Size (GB)';
$_LANG['general']['close']           = 'Close';
$_LANG['disks']['formats'] =array(
                                 'raw'   => 'Raw disk image (raw)',
                                 'qcow2' => 'QEMU image format (qcow2)', 
                                 'vmdk'  => 'VM image format (vmdk)'
                           );

$_LANG['disks']['add_new_hhd'] ='Add Hard Disk';
$_LANG['disks']['errorAddDisk'] ='You are not able to set %s GB of disk size. Disk size available: %s GB';
$_LANG['disks']['errorEditDisk'] ='Disk size downgrading is restricted';
 $_LANG['disks']['backup_yes']	= 'Yes';
 $_LANG['disks']['backup_no']	= 'No';
 

$_LANG['disks']['edit_hhd'] ='Edit Hard Disk';
$_LANG['home']['AdditionalTools']	   = 'Additional Tools';
$_LANG['button.management']                = 'Management';
$_LANG['panel']['manageVM']                = 'Manage VM';
$_LANG['panel']['additionalTools']         = 'Additional Tools';
$_LANG['token'] =' Token ';
$_LANG['reinstall']['header'] ='Reinstall';
$_LANG['reinstall']['description'] ='Select the template for reinstallation. If you proceed, all data located on the virtual machine will be lost.';
$_LANG['reinstall']['noTemplate']='Provide the template for reinstallation';
$_LANG['reinstall']['password']='Password:';
$_LANG['reinstall']['template']='OS Template:';
$_LANG['backup']['empty']		            = 'No Backups';
$_LANG['backup']['add_new']		            = 'Create Backup';
$_LANG['backup']['delete']		            = 'Are you sure that you want to delete this file?';

$_LANG['jobs']['empty']		            = 'No Backup Jobs';
$_LANG['jobs']['emailNotification']		            = 'Email Notification';
$_LANG['jobs']['add_new']		            = 'Add Backup Job';
$_LANG['jobs']['mailto']		            = 'Email Notification';
$_LANG['jobs']['mailtoDes']		            = 'Enable email notifications';
$_LANG['jobs']['delete']		            = 'Are you sure that you want to delete this job?';
$_LANG['jobs']['edit']		            = 'Edit Backup Job';
$_LANG['jobs']['compressNone'] ='None';
$_LANG['jobs']['labelDelete']           = 'Delete Job: ';
$_LANG['jobs']['description']           ="Instead of creating backups manually, set up a job, which will automatically create backups for you. Created backups will be available on the 'Backups' page.";


$_LANG['home']['disc'] = 'CD/DVD Disc Image File';
$_LANG['home']['bootOrder'] = 'Boot Order';
$_LANG['home']['boot']['0'] = 'None';
$_LANG['home']['boot']['d'] = 'CD-ROM';
$_LANG['home']['boot']['n'] = 'Network';
$_LANG['home']['boot']['c'] = 'Disk';
$_LANG['home']['boot_order_1']           = 'Device 1:';
$_LANG['home']['boot_order_2']           = 'Device 2:';
$_LANG['home']['boot_order_3']           = 'Device 3:';

$_LANG['CAPages']['taskHistory']['search'] ='Search';
$_LANG['CAPages']['taskHistory']['noAvailable']='Not Available';
$_LANG['CAPages']['taskHistory']['noAvailableInfo']= "";
$_LANG['CAPages']['taskHistory']['previous']='Previous';
$_LANG['CAPages']['taskHistory']['next'] ='Next';

$_LANG['backup']['labelDelete']           = 'Delete Backup: ';
$_LANG['backup']['labelRestore']          = 'Restore Backup: ';
$_LANG['backup']['description']          = 'Secure your system by creating backups. In case of any failure, you can restore your VPS to one of the previously created backups. ';

$_LANG['graph']['description'] ="Your VPS usage over time can be viewed here. If some graphs are close to their maximum value, consider the VPS upgrade.";
$_LANG['task']['description'] ="Any action set to be executed on the server along with its status is displayed here.";

$_LANG['network']['description'] ='Brief information about network interfaces used by your VPS.';
$_LANG['firewall']['description'] ='Define firewall rules or enable the security group for your VPS.';
$_LANG['network']['labelDelete']           = 'Delete Network: ';
$_LANG['snapshots']['labelDelete']           = 'Delete Snapshot: ';
$_LANG['snapshots']['labelRollback']           = 'Rollback: ';
$_LANG['firewall']['labelDelete']           = 'Delete: ';
$_LANG['disks']['labelDelete']           = 'Delete: ';
$_LANG['home']['swap']	   = 'SWAP';
$_LANG['task']['error_details'] = 'Error Details';
$_LANG['snapshots']['descriptionLong'] = "A snapshot includes the content of the virtual machine memory, virtual machine settings, and the state of all the virtual disks. When you roll back to a snapshot, you restore the memory, virtual disks and all settings of the virtual machine to the state they were in when you took the snapshot.";
$_LANG['snapshots']['update'] = 'Update:';
$_LANG['snapshots']['updated'] = 'The snapshot has been updated successfully';

$_LANG['snapshots']['status'] = 'Status';
$_LANG['home']['description'] = 'View server details and the resource usage.';
$_LANG['disks']['description'] ='View and manage the hard disk within defined limits. Any additional disk can be removed at will.';

$_LANG['CAPages']['home']['Boot Order has been successfully changed'] ='The boot order has been changed successfully';
$_LANG['CAPages']['home']['Edit: Boot Order'] ='Edit Boot Order';
$_LANG['CAPages']['home']['Edit: CD/DVD'] ='Edit CD/DVD';
$_LANG['CAPages']['home']['Image File'] ='Image File';
$_LANG['CAPages']['home']['ISO Image has been successfully changed']='The ISO image has been changed successfully';
$_LANG['CAPages']['reinstall']['Reinstall task currently in progress...']='The reinstallation is in progress';
$_LANG['CAPages']['reinstall']['Password is too short']='The password is too short';
$_LANG['CAPages']['reinstall']['Provide OS Template.']='Provide OS Template';
$_LANG['Creating VM in progress. Please try again later.']='The VM creation is in progress. Please try again later.';
$_LANG["Do you really want to boot?"]="Are you sure that you want to boot the server?";
$_LANG["Do you really want to reboot?"]="Are you sure that you want to reboot the server?";
$_LANG["Do you really want to stop?"]="Are you sure that you want to stop the server?";
$_LANG["Do you really want to shutdown?"]="Are you sure that you want to shut down the server?";
$_LANG["Login to Proxmox Host failed"]="The node connection has failed. Please contact the Support Team.";
$_LANG['CAPages']['disks']['Adding / removing or deleting disk will reboot the VM']='Adding, editing or removing the disk will reboot the virtual machine.';
$_LANG["CPU Usage"]="CPU Usage";
$_LANG["Memory Usage"]="Memory Usage";
$_LANG["Total"]="Total";
$_LANG["Net In"]="Net In";
$_LANG["Net Out"]="Net Out";
$_LANG["Disk Read"]="Disk Read";
$_LANG["Disk Write"]="Disk Write";
$_LANG["Firewall Options"]="Firewall Options";
$_LANG['CAPages']['reinstall']['Type']='Type';
$_LANG['CAPages']['reinstall']['KVM Template']='KVM Template';
$_LANG['CAPages']['reinstall']['ISO Image']='ISO Image';
$_LANG['Installation is now processing. The login information will be available in the noVNC console.']='The installation is in progress. The login information will be available in the noVNC console.';
$_LANG['CAPages']['reinstall']['Provide OS Template']='Provide OS Template';
$_LANG['Rebuild VM in progress. Please try again later.']='The VM rebuilding is in progress. Please try again later.';
$_LANG['CAPages']['reinstall']['kvmTemplate']['desription'] ='Select this option if you want to install the OS automatically.';
$_LANG['CAPages']['reinstall']['isoImage']['desription']='Select this option if you want to install the OS manually.';
$_LANG['CAPages']['home']['CPU'] ='CPU';
$_LANG['CAPages']['MountPoints']['Disks']='Disks';
 $_LANG['CAPages']['MountPoints']['description']='View and manage the hard disk within defined limits. Any additional disk can be removed at will.';
$_LANG['CAPages']['MountPoints']['Adding, editing or removing disk will reboot the VM.']='Adding, editing or removing disk will reboot the virtual machine.';
$_LANG['CAPages']['MountPoints']['Name']='Name';

$_LANG['CAPages']['MountPoints']['Id']                                                                  = 'ID';
$_LANG['CAPages']['MountPoints']['Path']                                                                = 'Path';
$_LANG['CAPages']['MountPoints']['Backup']                                                              = 'Backup';
$_LANG['CAPages']['MountPoints']['Size']                                                                = 'Size';
$_LANG['CAPages']['MountPoints']['Yes']                                                                 = 'Yes';
$_LANG['CAPages']['MountPoints']['No']                                                                  = 'No';
$_LANG['CAPages']['MountPoints']['Actions'] ='Actions';
$_LANG['CAPages']['MountPoints']['Size (GB)'] = 'Size (GB)';
$_LANG['CAPages']['MountPoints']['Delete']='Delete';
$_LANG['CAPages']['MountPoints']['confirm']['delete'] ='Are you sure that you want to delete this hard disk?';
$_LANG['CAPages']['MountPoints']['Delete:']='Delete:';
$_LANG['CAPages']['MountPoints']['Close']='Close';
$_LANG['CAPages']['MountPoints']['Edit Disk']='Edit Disk';
$_LANG['CAPages']['MountPoints']['Save Changes']='Save Changes';
$_LANG['CAPages']['MountPoints']['Close']='Close';
$_LANG['CAPages']['MountPoints']['Add New']='Add New';
$_LANG['CAPages']['MountPoints']['Edit']='Edit';
$_LANG['CAPages']['MountPoints']['Add']='Add';
$_LANG['CAPages']['MountPoints']['New Disk']          = 'New Disk';
$_LANG['CAPages']['MountPoints']['/some/path']        = '/some/path';
$_LANG['Unable to shrink disk size ']                 = 'Unable to shrink disk size ';
$_LANG['CAPages']['MountPoints']['Disk 1']            = 'Disk 1';
$_LANG['CAPages']['MountPoints']['Disk 2']            = 'Disk 2';
$_LANG['CAPages']['MountPoints']['Disk 3']            = 'Disk 3';
$_LANG['CAPages']['MountPoints']['Disk 4']            = 'Disk 4';
$_LANG['CAPages']['MountPoints']['Disk 5']            = 'Disk 5';
$_LANG['CAPages']['MountPoints']['Disk 6']            = 'Disk 6';
$_LANG['CAPages']['MountPoints']['Disk 7']            = 'Disk 7';
$_LANG['CAPages']['MountPoints']['Disk 8']='Disk 8';
$_LANG['CAPages']['MountPoints']['Disk 9']='Disk 9';
$_LANG['CAPages']['MountPoints']['Disk 10']='Disk 10';
$_LANG['CAPages']['disks']['Adding, editing or removing disk will reboot the VM.']='Adding, editing or removing disk will reboot the virtual machine.';
$_LANG['CAPages']['reinstall']['Reinstall']='Reinstall';
$_LANG['Confirmation']  ='Confirmation';
$_LANG['Yes']  ='Yes';
$_LANG['No']                                                                       = 'No';
$_LANG['No spice port ']                                                           = 'No spice port ';
$_LANG['CAPages']['FirewallOptions']['Firewall Options']                           = 'Firewall Options';
$_LANG['CAPages']['FirewallOptions']['Define firewall options for your VPS.']      = 'Define firewall options for your VPS.';
$_LANG['CAPages']['FirewallOptions']['Enable Firewall']            = 'Enable Firewall';
$_LANG['CAPages']['FirewallOptions']['No']                         = 'No';
$_LANG['CAPages']['FirewallOptions']['Enable DHCP']                = 'Enable DHCP';
$_LANG['CAPages']['FirewallOptions']['No']                         = 'No';
$_LANG['CAPages']['FirewallOptions']['Enable NDP']                 = 'Enable NDP';
$_LANG['CAPages']['FirewallOptions']['Yes']                        = 'Yes';
$_LANG['CAPages']['FirewallOptions']['Allow Router Advertisement'] = 'Allow Router Advertisement';
$_LANG['CAPages']['FirewallOptions']['No']                         = 'No';
$_LANG['CAPages']['FirewallOptions']['MAC Filter']                 = 'MAC Filter';
$_LANG['CAPages']['FirewallOptions']['Yes']                        = 'Yes';
$_LANG['CAPages']['FirewallOptions']['IP Filter']                  = 'IP Filter';
$_LANG['CAPages']['FirewallOptions']['No']                         = 'No';
$_LANG['CAPages']['FirewallOptions']['log_level_in']               = 'log_level_in';
$_LANG['CAPages']['FirewallOptions']['nolog']                      = 'nolog';
$_LANG['CAPages']['FirewallOptions']['log_level_out']              = 'log_level_out';
$_LANG['CAPages']['FirewallOptions']['nolog']                      = 'nolog';
$_LANG['CAPages']['FirewallOptions']['Input Policy']               = 'Input Policy';
$_LANG['CAPages']['FirewallOptions']['DROP']                       = 'DROP';
$_LANG['CAPages']['FirewallOptions']['Output Policy']              = 'Output Policy';
$_LANG['CAPages']['FirewallOptions']['ACCEPT']                     = 'ACCEPT';
$_LANG['CAPages']['FirewallOptions']['Edit']                       = 'Edit';
$_LANG['Disk IO']='Disk IO';
$_LANG['Network Traffic']='Network Traffic';
$_LANG['CPU Usage %']='CPU Usage %';
$_LANG['Provide OS Template']='Provide OS Template';
$_LANG['CAPages']['reinstall']['OS Template require disk size %s GB']='The OS template requires %s GB of disk size';