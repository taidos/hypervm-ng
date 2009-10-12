<?PHP
//
//    HyperVM, Server Virtualization GUI for OpenVZ and Xen
//
//    Copyright (C) 2000-2009     LxLabs
//    Copyright (C) 2009          LxCenter
//
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU Affero General Public License as
//    published by the Free Software Foundation, either version 3 of the
//    License, or (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU Affero General Public License for more details.
//
//    You should have received a copy of the GNU Affero General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.
?>

<?php 
$__emessage['old_kloxo_found'] = "An Kloxo Installation file was found in the vps, which would mean that Kloxo is already installed. If you want me to try again, please delete the kloxo-install-master.sh and /usr/local/lxlabs/kloxo locations using the file manager.";
$__emessage['a_vps_with_the_same_id_exists'] ="A vps with the id [%s] already exists on the system. This either means this was created outside of hyperVM or else it got orphaned because hyperVM was interrupted forcibly in the midst of a migration. You can either a) Login manually and delete the vps. or b) Use our import facility to import this vps into hyperVM. Sorry for the inconvenience.";
$__emessage['could_not_start_vps'] = "Could Not Start Vps, Reason: [%s]";
$__emessage['vps_is_locked_by_another_user'] = " The vps [%s] is locked by another user. This would also be because you had interrupted an earlier activity that would take long time to complete. HyperVM has waited 15 seconds for the other process to finish. Please try after sometime. ";
$__emessage['macaddress_only_five'] = "You need to supply only the first 5 fields of the macaddress. The last is automatically generated for each ethernet device as 01, 02...";
$__emessage['to_use_filemanager_shut_down_xen_vm_first'] = " The filemanager can be used only when the Virtual Machine is shutdown, and it will act as a mechanism to fix any issues if your server is not coming back up.";
$__emessage['rebuild_time_limit'] = " Please wait for [%s] minutes before you rebuild again. ";
$__emessage['vpsid_already_exists_on_another_server'] = "The vpsid [%s] exists on another server.";
$__smessage['vps_creation_in_background'] ="Vpses are getting created in the background. Just periodically refresh this page, and you can see them listed.";
$__smessage['kloxo_installation_started'] ="Kloxo Installation has been started in the VPS. The log is kept in a file called HyperVM-kloxo_install.log in the / directory, which you can view using the File Manager";
$__information['xen_restart_message'] = "Please note that you have to restart the Xen VM for the changes to take affect. This is necessary only for Xen VMs. OpenVZ changes are affected immediately.</font> ";
$__information['updateform_createtemplate_pre'] = "This will convert this vps into an ostemplate, which can be used to create further vpses. The initial three words of the new os template has to properly reflect the distro and version, and thus they are automatically generated from the Os template of this vps. You can supply the fourth string, and it can denote the type of OS Image this represents.";
$__information['updateform_importvps_pre'] = "If this server used to be part of an another hyperVM master, then you should use <url:a=updateform&sa=importhypervmvps> Import HyperVM VPS </url>, which will import [b] ALL [/b]  data transparently. You should that one if you are trying to migrate a slave from one master to another or trying to move the master from one server to another. You should use this one, only if you are trying to import vps from a server which had no control panel earlier.";
$__information['updateform_clonevps_pre'] = "You can clone a vps by first converting it into an ostemplate by <url:a=updateform&sa=createtemplate> Clicking Here </url>, and then using that to create a vps. After that you can delete the ostemplate using the in built ostemplate manager.";
$__information['updateform_macaddress_pre'] = "You need to supply only the first 5 fields of the macaddress. The last is automatically generated for each ethernet device as 01, 02... You need to reboot the VPS for the change to take effect.";
$__information['updateform_importhypervmvps_pre'] = "This is primarily meant for moving a slave from one master to another. You should first go to [b] admin home -> servers -> server (slave) home -> save vps data [/b] on the [b] OLD [/b]  master and save the data to this slave. After you save the data, you can import the vps from this slave.";
$__information['updateform_savevpsdata_pre'] = "This is primarily meant for moving a slave from one master to another. Run this on the old master, so that the data will be saved to the slave. Then from the [b] NEW [/b] master, you can import everything by going to [b] admin home -> servers -> server (slave) home -> import hyperVM VPS [/b]";
$__information['vps_updateform_rebuild_pre'] = "<font color=red> Note: The existing Vps will be completely destroyed and built anew. You will lose all data that is currently in there. </font> ";
$__information['ippoolextraip_a_addform__pre'] = "These are the extra ip addresses that will be counted into the ips in the ippool.";
$__information['ippoolexceptionip_a_addform__pre'] = "This is the list of IP addresses that will be ignored when assigning ips from this ippool.";
$__information['ippoolpingip_a_list__pre'] = "HyperVM will ping the Ipaddress at the last step before it assigns the IP to the vps. If it can ping the IP, then it is considered as already allocated and hyperVM will record the IP here. If an IP is listed here, then it means that some host outside of the hyperVM cluster already uses this IPaddress, and so this IP is unusable. If you are sure that an IP is free, you can delete it from this list, which would put the IP back in the IPpool.";
$__information['vps_updateform_mainipaddress_pre'] = "This will completely rearrange your ipaddress configuration, with the main ipaddress as the first one. This is useful for programs that need certain ipaddress as the main one for the licenses to work properly. Please note that you have to restart your vps for this to work properly. Also, if you add another ip address, you will have to reset your main ipaddresses again.";
$__information['addform_normal_pre'] = "To add multiple Ipaddresses, use comma as the separator.";
$__information['updateform_livemigrate_pre'] = "Openvz livemigrate has a bug, which needs the ssh port on the destination to be set to 22. Go to [b] server home -> ssh config [/b] and set it to 22 and then migrate. After that you can switch the port back.";
$__information['client_addform_customer_pre'] = "PLEASE NOTE: Create Customers ONLY if they have more than one vps. Otherwise a VPS is a fully complete login and you can login as vps.vm and the password. If you have already created customers, then go to [b] vps home -> advanced -> change owner [/b] and move them back to admin, then go to [b] vps home -> advanced -> resend welcome message [/b] to send them the new login information. To have more than one vps in a client, create a client with unlimited resources, and then disable his [b] can change limit [/b] and [b] can add vps [/b] permissions. This means that he will only be able to access his vpses, and not able to change their resource limits, nor add new vpses.";
$__information['pserver_updateform_centralbackupconfig_pre'] = "Internal Network Ipaddress is used when taking backups to avoid congesting the main network. Some DCs will provide separate internal private network, and this can be used when taking backup. The ip you provide here will be used by the backup server to connect to this node when taking backup of the vps. If you are unsure, leave it blank.";
$__information['updateform_ippool_pre'] = "HyperVM keeps some internal configurations so as to reduce the load of the IP Pool management. This may make some ipaddresses unavailable for short periods, even when they are free. Clicking here will completely clear the internal databases. This is a completely harmless action, and click here if you are facing any issue with ippool.";
$__information['vps_updateform_fixdev_pre'] = "This is very special fix for the problem that happens in centos-4.5, the upgrade to which to will remove all the /dev/ entries thereby rendering the vps inoperable. This will untar a fresh dev entry into the vps and solve the problem.";
$__information['vps_updateform_recovervps_pre'] = "Recover vps will untar your existing ostemplate over your vps. This means that if any of the system files were corrupted, they will be recovered. Since, only the system files are updated and your data files are left untouched, this is a safe means to fix a broken vps.";
$__information['vps_updateform_installkloxo_pre'] = "<font color=red> Note: </font>  Installation of Kloxo basically involves a complete rebuild of the vps with a fresh ostemplate containing kloxo, and thus your current system will be completely destroyed and rebuilt. The Url for kloxo is https://ip:7777 and CP login/password for kloxo is admin/admin.";
$__information['general_updateform_kloxo_config_pre'] = "You can host the installApp for all your vpses in a central location. HyperVM will configure kloxo so that it will automatically use the remote url as the location for the installApp applications. This will save you 1GB per vps. The url is of the form where http://url/application.tar.gz file should exist.";
$__information['general_updateform_browsebackup_pre'] = "Browse Backup allows a vps owner to go through every file in his backup, and restore them individually. To have this feature, the [b] central backup-servers [/b]  should be integrated into the cluster, and you also have to make sure that you supply the [b] slave-id [/b] parameter, in the backup-server configuration which is the slave-name of the backup-server in the cluster. This means that hyperVM will allow the vps owner to browse his own backup, and restore individual files. <a href=http://lxlabs.com/software/hypervm/backup/ target=_blank> Click here </a> for more info.";

$__information['vps_addform_openvz_pre'] = "A VPS is a fully self contained login system. You need not create a separate client; the owner of the vps can login to the Control Panel using the vps name and password. You should create a client only if he has more than one vps. A vps owner is a complete client system with its own help desk, login history etc.";
$__information['updateform_deleteorphanedvps_pre'] = "This will allow you to remove [b]  Orphaned VPSes [/b] . [b] Orphaned VPSes [/b]  are VPSes whose parent node is no longer present in hyperVM's database. This will just remove the vpses from hyperVM's database. This situation can arise, if a node becomes completely inaccessible, and you have removed the node using [b] force delete server [/b]. And then you can delete the VPSes on the node using this feature.";

$__information['vps_addform_xen_pre'] = $__information['vps_addform_openvz_pre'];

$__information['kloxo_show__pre'] = " If you are running this for the first time, make sure that you reboot the vps through Control Panel once, so that hyperVM can setup the necessary secure access parameters.";
$__information['emailalert_addform__pre'] = "These are the extra email addresses that are also intimated by the port monitoring system when a service goes down. Your actual contact email can be found under the [b] information [/b] tab";
