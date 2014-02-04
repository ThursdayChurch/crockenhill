<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    /**
     * Get the roles a user has
     */
    public function roles()
    {
        return $this->belongsToMany('Role', 'users_roles');
    }
 
    /**
     * Find out if user has a specific role
     *
     * $return boolean
     */
    public function hasRole($check)
    {
        return in_array($check, array_fetch($this->roles->toArray(), 'name'));
    }
 
    /**
     * Get key in array with corresponding value
     *
     * @return int
     */
    private function getIdInArray($array, $term)
    {
        foreach ($array as $key => $value) {
            if ($value == $term) {
                return $key;
            }
        }
 
        throw new UnexpectedValueException;
    }
 
    /**
     * Add roles to user to make them a concierge
     */
    public function givePermission($title)
    {
        $assigned_roles = array();
 
        $roles = array_fetch(Role::all()->toArray(), 'name');
 
        switch ($title) {
            case 'super_admin':
                $assigned_roles[] = $this->getIdInArray($roles, 'edit_member');
                $assigned_roles[] = $this->getIdInArray($roles, 'delete_member');
            case 'admin':
                $assigned_roles[] = $this->getIdInArray($roles, 'create_member');
                break;
            default:
                throw new \Exception("The employee status entered does not exist");
        }
 
        $this->roles()->attach($assigned_roles);
    }

}
