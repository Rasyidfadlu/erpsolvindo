<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $table = "customers";

    public $timestamps = false;

    protected $fillable = [
        'Company_Name', 'Acc_Parent', 'Address', 'Street', 'City', 'Province',
        'ZipCode', 'Phone', 'Fax', 'Email', 'PIC', 'Primary_Contact_No',
        'Sales_Person', 'PIC_Billing_Name', 'PIC_Billing_Phone', 'PIC_Billing_Fax', 'PIC_Billing_Email', 'Contract_Start',
        'Contract_End', 'Due_Days', 'Contract_No', 'NPWP', 'VAT_NAME', 'VAT_Address',
        'VAT_Street', 'VAT_City', 'VAT_Prefix'  

    ];
}
