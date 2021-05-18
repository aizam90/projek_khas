<?php

//namespace App\Helper;


// Model Ref Table
use App\Models\Ref_Role;
use App\Models\Ref_Agensi;

class Custom
{


    //Dropdown fungsi Peranan
    public static function dropdownRole($id){
        $role         = Ref_Role::all();
        $option       = '<option value="" >Sila Pilih</option>';
        foreach ( $role as $item ) {
            $selected = ($item->id == $id)? 'selected' : '';
            $option   .= '<option value="'.$item->id.'"  '.$selected.' >'.$item->user.'</option>';
        }
        return $option;
    }

    //Dropdown fungsi Agensi
    public static function dropdownAgensi($id){
        $role         = Ref_Agensi::all();
        $option       = '<option value="" >Sila Pilih</option>';
        foreach ( $role as $item ) {
            $selected = ($item->id == $id)? 'selected' : '';
            $option   .= '<option value="'.$item->id.'"  '.$selected.' >'.$item->agensi.'</option>';
        }
        return $option;
    }



}
