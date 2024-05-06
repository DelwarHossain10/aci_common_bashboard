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
        Schema::create('business_information', function (Blueprint $table) {
            $table->id();
            $table->string('coverage_info');
            $table->string('month_business_salt');
            $table->string('month_business_flour');
            $table->string('month_business_oil');
            $table->string('month_business_rice');
            $table->string('month_business_pulse');
            $table->string('month_business_tea');
            $table->string('month_business_dairy');
            $table->string('month_business');
            $table->string('comm_earnings');
            $table->string('vehicle_prod');
            $table->string('sr_productivity');
            $table->string('urban_wetmarket_grocer');
            $table->string('urban_neighborhood_grocer');
            $table->string('urban_general_store');
            $table->string('urban_cosmetic_store');
            $table->string('confectionary');
            $table->string('urban_retail_coverage');
            $table->string('smmt');
            $table->string('chemist_pharmacy');
            $table->string('rural_grocer');
            $table->string('tong_tea_stall');
            $table->string('horeca');
            $table->string('rural_retail_coverage');
            $table->string('dd_institution');
            $table->string('others_channel');
            $table->string('route_wholesale');
            $table->string('csm_route_ols');
            $table->string('sd_coverage_ols');
            $table->string('alt_coverage');
            $table->string('direct_coverage');
            $table->string('controlled_coverage');
            $table->integer('daily_total_routes');
            $table->integer('bi_weekly_3_total_routes');
            $table->integer('bi_weekly_2_total_routes');
            $table->integer('weekly_total_routes');
            $table->integer('fortnightly_total_routes');
            $table->integer('daily_total_sections');
            $table->integer('bi_weekly_3_total_sections');
            $table->integer('bi_weekly_2_total_sections');
            $table->integer('weekly_total_sections');
            $table->integer('fortnightly_total_sections');
            $table->string('peripheral_db_east');
            $table->string('peripheral_db_west');
            $table->string('peripheral_db_north');
            $table->string('peripheral_db_south');
            $table->string('peripheral_md_east');
            $table->string('peripheral_md_west');
            $table->string('peripheral_md_north');
            $table->string('peripheral_md_south');
            $table->string('back_office_team_manager');
            $table->string('back_office_team_supervisor');
            $table->string('back_office_team_comp_operator');
            $table->string('back_office_team_csm');
            $table->string('back_office_team_office_clerk');
            $table->string('back_office_team_godown_keeper');
            $table->string('back_office_team_peon_guards');
            $table->string('back_office_team_driver_nmv');
            $table->string('back_office_team_others');
            $table->string('back_office_team_field_forces');
            $table->string('back_office_team_sales_representative');
            $table->string('back_office_team_delivery_man');
            $table->string('back_office_team_driver_mech_vehicle');
            $table->string('back_office_force');
            $table->string('total_manpower');
            $table->string('logistics_vehicles');
            $table->string('logistics_number_of_mv_4wh');
            $table->string('logistics_tempoo_3whl');
            $table->string('logistics_engine_boat_mv');
            $table->string('logistics_number_of_nmv');
            $table->string('logistics_total_vehicles');
            $table->string('logistics_vehicle_section');
            $table->string('logistics_ol_productivity');
            $table->string('logistics_route_prod');
            $table->string('logistics_section_prod');
            $table->string('logistics_route');
            $table->string('route_service_mv_route');
            $table->string('route_service_nmv_route');
            $table->string('outlet_coverage_mv_route');
            $table->string('outlet_coverage_nmv_route');
            $table->string('route_productivity_mv_route');
            $table->string('route_productivity_nmv_route');
            $table->integer('total_routes');
            $table->string('leverage_it');
            $table->string('computer');
            $table->string('printer');
            $table->string('warehouse_address');
            $table->string('warehouse_district');
            $table->string('warehouse_thana');
            $table->string('office_hight');
            $table->string('warehouse_hight');
            $table->string('hight_total');
            $table->string('office_length');
            $table->string('warehouse_length');
            $table->string('length_total');
            $table->string('workspace_structure_office');
            $table->string('warehouse_structure_length');
            $table->string('warehouse_condition');
            $table->string('electrical_wiring');
            $table->string('insurance_coverage');
            $table->string('insurance_coverage_office');
            $table->string('insurance_coverage_warehouse');
            $table->string('team_sitting_arrangement');
            $table->string('fire_fighting_facilities');
            $table->string('investment_capabilities');
            $table->string('self_finance');
            $table->string('loan');
            $table->string('working_capital');
            $table->string('stock_value');
            $table->string('credit_to_trade');
            $table->string('cash_in_hand');
            $table->string('pending_claims');
            $table->string('mechanized_vehicle');
            $table->string('non_mechanized_vehicle');
            $table->string('office_furniture_equipment');
            $table->string('total_investment');
            $table->string('wc_to');
            $table->string('stock_days_cover');
            $table->string('stock_salt');
            $table->string('stock_flour');
            $table->string('stock_oil');
            $table->string('stock_rice');
            $table->string('stock_pulse');
            $table->string('stock_tea');
            $table->string('stock_dairy');
            $table->string('investment_stock');
            $table->string('investment_to');
            $table->string('distributor_bank_name');
            $table->string('bank_account_number');
            $table->string('branch_name');
            $table->string('payment_mode');
            $table->string('delivery_product');
            $table->string('carrying_charge_claimable');
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_information');
    }
};