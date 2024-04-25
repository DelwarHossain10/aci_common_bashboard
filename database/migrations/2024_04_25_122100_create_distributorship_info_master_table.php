<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('distributorship_info_master', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date')->nullable();
            $table->string('region')->nullable();
            $table->string('zone')->nullable();
            $table->string('territory')->nullable();
            $table->string('location_name')->nullable();
            $table->string('business_type')->nullable();
            $table->string('appointment_type')->nullable();
            $table->string('replacement_reappointment')->nullable();
            $table->timestamp('inception_date')->nullable();
            $table->string('reason_for_replacing')->nullable();
            $table->string('business')->nullable();
            $table->bigInteger('projected_monthly_business')->nullable();
            $table->bigInteger('projected_roi_percent')->nullable();
            $table->string('competes_evaluated')->nullable();
            $table->string('current_relationship_details')->nullable();
            $table->string('past_relationship_details')->nullable();
            $table->string('workspace_office')->nullable();
            $table->string('workspace_warehouse')->nullable();
            $table->string('workspace_office_structure')->nullable();
            $table->string('workspace_warehouse_structure')->nullable();
            $table->string('existing_staff_market_operation')->nullable();
            $table->string('mechanised')->nullable();
            $table->string('non_mechanised')->nullable();
            $table->string('trade_license_no')->nullable();
            $table->string('vat_registration_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distributorship_info_master');
    }
};


// php artisan make:migration create_distributorship_info_master_table


// date
// region
// zone
// territory
// location_name
// business_type
// appointment_type
// replacement_reappointment
// inception_date
// reason_for_replacing
// business
// projected_monthly_business
// projected_roi_percent
// competes_evaluated
// current_relationship_details
// past_relationship_details

// workspace_office
// workspace_warehouse
// workspace_office_structure
// workspace_warehouse_structure

// existing_staff_market_operation
// mechanised
// non_mechanised
// trade_license_no
// vat_registration_no

// applicant_details
// name
// father_name
// mother_name
// present_address
// permanent_address
// nid_no
// tin_no
// business_name
// ownership_type
// operating_market
// operating_business_type
// operating_business_year
// avg_annual_turnover

// OFFICE ADDRESS:

// php artisan make:migration create_office_info_table
// office_business_address
// office_city
// office_post_code
// office_union_name
// office_thana
// office_telephone
// office_mobile
// office_whatsapp_no
// office_fax
// office_contact_person
// office_email_id

// WAREHOUSE ADDRESS:
// php artisan make:migration create_office_address_table
// warehouse_business_address
// warehouse_city
// warehouse_post_code
// warehouse_union
// warehouse_thana
// warehouse_telephone
// warehouse_mobile
// warehouse_whatsapp_no
// warehouse_fax
// warehouse_contact_person
// warehouse_email_id



// distributorship_companies:
// company_name
// Avg_monthly_turnover

// current_finance_details:
// investment_source
// net_worth




// Biz-Infra
// ////multiple///
// District (DB HQ)
// Thana
// Projected Month Business (LAC):
// SALT
// FLOUR
// OIL
// RICE
// PULSE
// TEA
// DAIRY