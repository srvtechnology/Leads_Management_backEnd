<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IIBLeadEntry extends Model
{
    use HasFactory;
    protected $fillable=[
        'salutation',
'fname',
'lname',
        'card_type',
        'mobile',
        'pan',
        'dob',
        'birth_place',
        'aadhaar',
        'aadhaar_linked_mobile',
        'mother_name',
        'father_name',
        'dependent',
        'resi_address',
        'resi_city',
        'resi_pin',
        'resi_status',
        'current_rest_time',
        'email',
        'marital_status',
        'spouse_name',
        'company',
        'designation',
        'current_company_experience',
        'total_experience',
        'office_email',
        'pf',
        'office_address',
        'office_city',
        'office_pin',
        'office_landline',
        'comm_address',
        'nature_of_bussiness',
        'industry',
        'tl_status',
        'bank_document',
        'salary_slip',
'pan_card',
'aadhar_card',
        'card_limit',
        'tc_id',
        'tl_id',
        'bm_id',
        'pan_check',
        'status',
        'comment',
        'application_no',
        'bank_remark',
        'lead_ref',
        'app_code_status',
        'bank_pass',
'salary_pass',
'pan_pass',
'aadhar_pass',
'other_doc',
'other_doc_pass'
    ];
}
