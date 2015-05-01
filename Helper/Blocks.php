<?php
namespace Cogilent\FrontBundle\Helper;

class Blocks
{



    //inline blocks
    public static function sideAdminMenu($roles=array()){

        $roles = array();

        return array(
            'menu'=>array(
                'home'=> array(
                    'title'=>'Home',
                    'link'=> 'front_index',
                    'class'=> 'fa fa-home fontawesome-icon background-green'
                ),
                'user'=> array(
                    'title'=>'Users',
                    'link'=> 'user_index',
                    'class'=> 'fa fa-users fontawesome-icon background-green'
                ),
                'organization' => array(
                    'title' => 'Organization',
                    'link' => 'organizations_index',
                    'class'=> 'fa fa-th-large fontawesome-icon background-green'
                ),
                /*'locations' => array(
                    'title' => 'Locations',
                    'link' => 'locations_index',
                    'class'=> 'fa fa-location-arrow fontawesome-icon background-green'
                ),*/
                'contacts' => array(
                    'title' => 'Contacts',
                    'link' => 'contacts_index',
                    'class'=> 'fa fa-table fontawesome-icon background-green'
                ),
                /*'leads' => array(
                    'title' => 'Leads/Tasks',
                    'link' => 'leads_index',
                    'class'=> 'fa fa-building-o fontawesome-icon background-green'
                ),*/
                'reports' => array(
                    'title' => 'Reports',
                    'link' => 'reports_index',
                    'class'=> 'fa fa-th-list fontawesome-icon background-green'
                ),
                'settings' => array(
                    'title' => 'Settings',
                    'link' => 'settings_index',
                    'class'=> 'fa fa-gears fontawesome-icon background-green'
                ),
                'help' => array(
                    'title' => 'Help',
                    'link' => 'help_index',
                    'class'=> 'fa fa-life-ring fontawesome-icon background-green'
                )
            )
        );
    }

    public static function sideUserMenu(){


        return array(
            'menu'=>array(
                'home'=> array(
                    'title'=>'Home',
                    'link'=> 'front_index',
                    'class'=> 'fa fa-home fontawesome-icon background-green'
                ),
                /*'user'=> array(
                    'title'=>'Users',
                    'link'=> 'user_index',
                    'class'=> 'fa fa-users fontawesome-icon background-green'
                ),*/
                'organization' => array(
                    'title' => 'Organization',
                    'link' => 'organizations_index',
                    'class'=> 'fa fa-th-large fontawesome-icon background-green'
                ),
                /*'locations' => array(
                    'title' => 'Locations',
                    'link' => 'locations_index',
                    'class'=> 'fa fa-location-arrow fontawesome-icon background-green'
                ),*/
                'contacts' => array(
                    'title' => 'Contacts',
                    'link' => 'contacts_index',
                    'class'=> 'fa fa-table fontawesome-icon background-green'
                ),
                /*'leads' => array(
                    'title' => 'Leads/Tasks',
                    'link' => 'leads_index',
                    'class'=> 'fa fa-building-o fontawesome-icon background-green'
                ),*/
/*                'reports' => array(
                    'title' => 'Reports',
                    'link' => 'reports_index',
                    'class'=> 'fa fa-th-list fontawesome-icon background-green'
                ),
                'settings' => array(
                    'title' => 'Settings',
                    'link' => 'settings_index',
                    'class'=> 'fa fa-gears fontawesome-icon background-green'
                ),*/
                'help' => array(
                    'title' => 'Help',
                    'link' => 'help_index',
                    'class'=> 'fa fa-life-ring fontawesome-icon background-green'
                )
            )
        );
    }

    public static function notificationMenu(){
        return array(
            'menu' =>array(
                'profile' => array(
                    'title' => 'User Profile',
                    'link'  => 'account_changeprofile',
                    'class' => 'fa fa-user fa-fw'
                ),
                'changepass' => array(
                    'title' => 'Change Password',
                    'link'  => 'account_changepassword',
                    'class' => 'fa fa-gear fa-fw'
                ),
            )
        );
    }

    //region blocks

}
