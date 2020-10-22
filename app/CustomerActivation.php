<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerActivation extends Model
{
    //
    // public $table = "customer_activations";

    public $timestamps = false;

    protected $fillable = [
        'Customer_Name', 'Customer_Name', 'Customer_Sub_Name', 'City', 'Province','required','Status' ,'Latitude','Longitude','Survey_Oleh','Activation_Date','Created_By','Estimasi_Panjang_Kabel','Customer_Sub_Address','Position','Service','Bandwidht','SPK_Release','Installation','Note'
    ];
}
