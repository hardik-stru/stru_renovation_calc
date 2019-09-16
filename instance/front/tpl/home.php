<section class="pb-8 pt-7 pb-md-11 pt-md-10">
    <div class="container" style="max-width: 100%">
        <form id="calculator_form">

            <div class="row">

                <div class="col-12 col-md-9">

                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-body">Property Details</h3>

                            <table class="table table-bordered">
                                <tr>
                                    <th class="first_td">
                                        <span class="td_label"><b>Purchase price</b></span>
                                        <!--<div class="td_dec">test</div>-->
                                    </th>
                                    <td>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="purchase price" id="purchase_price" name="purchase_price" onkeypress="return isNumberKey(event, this)">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="first_td">
                                        <span class="td_label"><b>Tax</b></span>
                                        <!--<div class="td_dec">test</div>-->
                                    </th>
                                    <td>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">%</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Tax" id="tax" name="tax" onkeypress="return isNumberKey(event, this)" min="0" max="100">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="first_td">
                                        <span class="td_label"><b>Insurance</b></span>
                                        <!--<div class="td_dec">test</div>-->
                                    </th>
                                    <td>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Total insurance" id="insurance" name="insurance" onkeypress="return isNumberKey(event, this)">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="first_td">
                                        <span class="td_label"><b>Utilities</b></span>
                                        <!--<div class="td_dec">test</div>-->
                                    </th>
                                    <td>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Total amount of utilities" id="utilities" name="utilities" onkeypress="return isNumberKey(event, this)">
                                        </div>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>

                    <br />

                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-body">Before Renovation</h3>
                            <table class="table table-bordered">
                                <tr>
                                    <th class="first_td"><span class="td_label"><b>Average Monthly Income</span><br /><span><a style="cursor: pointer;text-decoration: underline" onclick="open_before_renovation_avg_monthly_income_modal()">count average monthly income</a></span></th>
                                    <td>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Average monthly income" id="before_renovation_avg_monthly_income" name="before_renovation_avg_monthly_income" onkeypress="return isNumberKey(event, this)">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <br />
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-body">After Renovation</h3>
                            <table class="table table-bordered">
                                <tr>
                                    <th class="first_td"><span class="td_label"><b>Renovation cost</span></th>
                                    <td>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Renovation cost" onkeypress="return isNumberKey(event, this)" id="renovation_cost" name="renovation_cost">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="first_td"><span class="td_label"><b>Average Monthly Income</span><br /><span><a style="cursor: pointer;text-decoration: underline" onclick="open_after_renovation_avg_monthly_income_modal()">count average monthly income</a></span></th>
                                    <td>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Average monthly income" id="after_renovation_avg_monthly_income" name="after_renovation_avg_monthly_income" onkeypress="return isNumberKey(event, this)">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <br />
                    <div class="row">
                        <div class="col-12 col-md-12" style="text-align: center">
                            <button type="button" class="btn btn-primary lift" style="text-transform: uppercase" onclick="calculate_total_revenue()">Calculate Total Profit/loss</button>
                            <button type="reset" class="btn btn-danger lift" style="text-transform: uppercase" onclick="form_reset()">Reset</button>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-3 d-flex sticky-top sticky_div">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-body">Total Profit/Loss</h3>
                            <h5 class="card-title text-body">Before Renovation</h5>
                            <div class="button-primary before_renovation_div"><span id="bf_sign"></span><span id="revenue_before_renovation">$0.00</span></div>
                            <br />
                            <h5 class="card-title text-body">After Renovation</h5>
                            <div class="button-primary after_renovation_div"><span id="af_sign"></span><span id="revenue_after_renovation">$0.00</span></div>
                        </div>
                    </div>
                </div>

            </div>

        </form>
    </div>
</section>

<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-gray-200">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"/>
        </svg>
    </div>
</div>

<div class="modal" id="before_renovation_avg_monthly_income_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Average Monthly Income</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">

                <form id="before_renovation_avg_monthly_income_form">

                    <h3><b>High Season</b></h3>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="hs_days">Days</label>
                                <input type="text" class="form-control" id="hs_days" placeholder="Days" name="hs_days" onkeypress="return digitOnly(event)">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="hs_rates">Rates ($)</label>
                                <input type="text" class="form-control" id="hs_rates" placeholder="Rates" name="hs_rates" onkeypress="return isNumberKey(event, this)">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="hs_occupancy">Occupancy (%)</label>
                                <input type="text" class="form-control" id="hs_occupancy" placeholder="Occupancy" name="hs_occupancy" min="0" max="100">
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-300 my-6">

                    <h3><b>Low Season</b></h3>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ls_days">Days</label>
                                <input type="text" class="form-control" id="ls_days" placeholder="Days" name="ls_days" onkeypress="return digitOnly(event)">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ls_rates">Rates ($)</label>
                                <input type="text" class="form-control" id="ls_rates" placeholder="Rates" name="ls_rates" onkeypress="return isNumberKey(event, this)">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ls_occupancy">Occupancy (%)</label>
                                <input type="text" class="form-control" id="ls_occupancy" placeholder="Occupancy" name="ls_occupancy" min="0" max="100">
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-300 my-6">

                    <h3><b>Shoulder Season</b></h3>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ss_days">Days</label>
                                <input type="text" class="form-control" id="ss_days" placeholder="Days" name="ss_days" onkeypress="return digitOnly(event)">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ss_rates">Rates ($)</label>
                                <input type="text" class="form-control" id="ss_rates" placeholder="Rates" name="ss_rates" onkeypress="return isNumberKey(event, this)">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ss_occupancy">Occupancy (%)</label>
                                <input type="text" class="form-control" id="ss_occupancy" placeholder="Occupancy" name="ss_occupancy" min="0" max="100">
                            </div>
                        </div>
                    </div>

                </form>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger lift" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary lift" onclick="average_monthly_income_before_renovation()">Save</button>
            </div>

        </div>
    </div>
</div>

<div class="modal" id="after_renovation_avg_monthly_income_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Average Monthly Income</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">

                <form id="after_renovation_avg_monthly_income_form">

                    <h3><b>High Season</b></h3>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="hs_days_after_renovation">Days</label>
                                <input type="text" class="form-control" id="hs_days_after_renovation" placeholder="Days" name="hs_days_after_renovation" onkeypress="return digitOnly(event)">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="hs_rates_after_renovation">Rates ($)</label>
                                <input type="text" class="form-control" id="hs_rates_after_renovation" placeholder="Rates" name="hs_rates_after_renovation" onkeypress="return isNumberKey(event, this)">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="hs_occupancy_after_renovation">Occupancy (%)</label>
                                <input type="text" class="form-control" id="hs_occupancy_after_renovation" placeholder="Occupancy" name="hs_occupancy_after_renovation" min="0" max="100">
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-300 my-6">

                    <h3><b>Low Season</b></h3>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ls_days_after_renovation">Days</label>
                                <input type="text" class="form-control" id="ls_days_after_renovation" placeholder="Days" name="ls_days_after_renovation" onkeypress="return digitOnly(event)">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ls_rates_after_renovation">Rates ($)</label>
                                <input type="text" class="form-control" id="ls_rates_after_renovation" placeholder="Rates" name="ls_rates_after_renovation" onkeypress="return isNumberKey(event, this)">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ls_occupancy_after_renovation">Occupancy (%)</label>
                                <input type="text" class="form-control" id="ls_occupancy_after_renovation" placeholder="Occupancy" name="ls_occupancy_after_renovation" min="0" max="100">
                            </div>
                        </div>
                    </div>

                    <hr class="border-gray-300 my-6">

                    <h3><b>Shoulder Season</b></h3>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ss_days_after_renovation">Days</label>
                                <input type="text" class="form-control" id="ss_days_after_renovation" placeholder="Days" name="ss_days_after_renovation" onkeypress="return digitOnly(event)">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ss_rates_after_renovation">Rates ($)</label>
                                <input type="text" class="form-control" id="ss_rates_after_renovation" placeholder="Rates" name="ss_rates_after_renovation" onkeypress="return isNumberKey(event, this)">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ss_occupancy_after_renovation">Occupancy (%)</label>
                                <input type="text" class="form-control" id="ss_occupancy_after_renovation" placeholder="Occupancy" name="ss_occupancy_after_renovation" min="0" max="100">
                            </div>
                        </div>
                    </div>

                </form>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger lift" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary lift" onclick="average_monthly_income_after_renovation()">Save</button>
            </div>

        </div>
    </div>
</div>

<style>
    .table-bordered td, .table-bordered th{
        border: 1px solid #dddddd !important;
    }
    .first_td{
        color: #545454;
        background-color: #F2F6F9;
        width: 40%;
    }
    .td_label{
        font-size: 17px !important;
        font-weight: bold !important;
        color: #2D6BA0 !important;
    }
    .td_dec{
        font-size: 13px !important;
    }
    .sticky{
        position: fixed;
    }
    footer{
        position: relative;
        z-index: 0;
    }
    .sticky-top{
        position: fixed;
        width: 100%;
        top: 168px;
        right: 0px;
    }
    .sticky-top-0{
        position: fixed;
        width: 100%;
        top: 10px;
        right: 0px;
    }
    .modal-dialog{
        max-width: 750px;
    }
    .button-primary{
        color: #335eea;
        border:1px solid #335eea;
        padding: .8125rem 1.25rem;
        font-size: 1.0625rem;
        text-align: center;
    }
    .button-loss{
        color: #df4759;
        border:1px solid #df4759;
        padding: .8125rem 1.25rem;
        font-size: 1.0625rem;
        text-align: center;
    }
    .button-profit{
        color: #42ba96;
        border:1px solid #42ba96;
        padding: .8125rem 1.25rem;
        font-size: 1.0625rem;
        text-align: center;
    }
</style>