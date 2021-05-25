@php $active = 'Payslips' @endphp
@extends('Layout.main')
@section('title', 'Payslips')
@section('content')
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <!-- copy this -->
        <!-- paste below col-12 on your code  -->
        <div class="payslip-card">
            <div class="company-info">
                <div class="info">
                    <p> <b>Liceo de Cagayan University</b>
                        <br> <small>8th Floor, DPC Place Building, 2322, Chino Roces Avenue, Makati, 1200 Metro
                            Manila</small>
                        <br> <small><i>(02) 889 8862</i></small>
                    </p>
                </div>
                <div class="logo"> <img src="data:image/jpeg;base64,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"> </div>
            </div>
            <div class="employee-info">
                <div class="left">
                    <table>
                        <tr>
                            <td class="info head">Employee ID</td>
                            <td class="value">CYAN2018000001</td>
                        </tr>
                        <tr>
                            <td class="info head">Fullname</td>
                            <td class="value">Cresse Kenneth Batan Abenojar</td>
                        </tr>
                        <tr>
                            <td class="info head">Address</td>
                            <td class="value">Unit B, Cornerstone Residences, Concepcion DOs, Marikina Heights, Marikina
                                City</td>
                        </tr>
                        <tr>
                            <td class="info head">Contact</td>
                            <td class="value">09561839304</td>
                        </tr>
                        <tr>
                            <td class="info head">Department</td>
                            <td class="value">1</td>
                        </tr>
                    </table>
                </div>
                <div class="right">
                    <table>
                        <tr>
                            <td class="info head">Designation</td>
                            <td class="value">Senior Software Developer</td>
                        </tr>
                        <tr>
                            <td class="info head">TAX</td>
                            <td class="value">TAX7</td>
                        </tr>
                        <tr>
                            <td class="info head">SSS</td>
                            <td class="value">SSS5</td>
                        </tr>
                        <tr>
                            <td class="info head">PHILHEALTH</td>
                            <td class="value">PH6</td>
                        </tr>
                        <tr>
                            <td class="info head">PAGIBIG</td>
                            <td class="value">PGBG4</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="summary-info">
                <div class="card"> <span class="title">Mandatory Deductions</span>
                    <div class="data">
                        <div class="meta">SSS</div>
                        <div class="value">P 1,163.00</div>
                    </div>
                    <div class="data">
                        <div class="meta">Philhealth</div>
                        <div class="value">P 337.50</div>
                    </div>
                    <div class="data">
                        <div class="meta">Pagibig</div>
                        <div class="value">P 200.00</div>
                    </div>
                    <div class="data">
                        <div class="meta">Tax</div>
                        <div class="value">P 5.00</div>
                    </div>
                    <div class="data">
                        <div class="meta">-</div>
                        <div class="value">-</div>
                    </div>
                    <div class="total">
                        <div class="meta"><b>Total</b></div>
                        <div class="value">P 1,705.50</div>
                    </div>
                </div>
                <div class="card"> <span class="title">Loan Deductions</span>
                    <div class="data">
                        <div class="meta">Loan Type</div>
                        <div class="value">-</div>
                    </div>
                    <div class="data">
                        <div class="meta">Total</div>
                        <div class="value">-</div>
                    </div>
                    <div class="data">
                        <div class="meta">Monthly</div>
                        <div class="value">-</div>
                    </div>
                    <div class="data">
                        <div class="meta">Balance</div>
                        <div class="value">-</div>
                    </div>
                    <div class="data">
                        <div class="meta">Deduction</div>
                        <div class="value">-</div>
                    </div>
                    <div class="total">
                        <div class="meta"><b>Total</b></div>
                        <div class="value">-</div>
                    </div>
                </div>
                <div class="card"> <span class="title">Rate</span>
                    <div class="data">
                        <div class="meta">Basic Rate</div>
                        <div class="value">P 6,000.50</div>
                    </div>
                    <div class="data">
                        <div class="meta">Regular Hours</div>
                        <div class="value"> -8 Hrs</div>
                    </div>
                    <div class="data">
                        <div class="meta">OT Hours</div>
                        <div class="value"> 0 Hrs</div>
                    </div>
                    <div class="data">
                        <div class="meta">Night Diff Hours</div>
                        <div class="value"> 0 Hrs</div>
                    </div>
                    <div class="data">
                        <div class="meta">Total Hours</div>
                        <div class="value"><b>-8 Hrs</b></div>
                    </div>
                    <div class="total">
                        <div class="meta"><b>Total</b></div>
                        <div class="value">P -6,000.50</div>
                    </div>
                </div>
                <div class="card"> <span class="title">Earnings</span>
                    <div class="data">
                        <div class="meta">Gross Earnings</div>
                        <div class="value">P -6,000.50</div>
                    </div>
                    <div class="data">
                        <div class="meta">Mandatory Deductions</div>
                        <div class="value">P 1,705.50</div>
                    </div>
                    <div class="data">
                        <div class="meta">Loan Deductions</div>
                        <div class="value">P 0.00</div>
                    </div>
                    <div class="data">
                        <div class="meta">-</div>
                        <div class="value">-</div>
                    </div>
                    <div class="total">
                        <div class="meta"><b>Total Profit</b></div>
                        <div class="value overall">P -7,706.00</div>
                    </div>
                </div>
            </div>
            <div class="payroll-summary">
                <p> <b>Payroll ID : <small class="val">2021000029</small></b>
                <p class="right"> <b>Date issued : <small class="val">Feb 12, 2021</small></b> </p>
                </p>
                <p> <b>Cut-off : <small class="val">Feb 12, 2021 - Feb 13, 2021</small></b> </p>
            </div>
        </div>

        <!-- up to this-->
    </div>
</div>

<!-- copy this-->
<style type="text/css">
.payslip-card {
    width: 100%;
    float: left;
    padding: 2%;
}

.payslip-card .company-info {
    width: 100%;
    float: left;
    border-bottom: 1px solid #333;
    padding-bottom: 2%;
}

.payslip-card .company-info .logo {
    width: 10%;
    float: left;
}

.payslip-card .company-info .logo img {
    width: 70%;
    float: right;
}

.payslip-card .company-info .info {
    width: 90%;
    float: left;
}

.payslip-card .company-info .info p b {
    font-size: 1.2em !important;
}

.payslip-card .employee-info {
    width: 100%;
    float: left;
    padding: 0%;
    border-left: 1px solid #333;
    border-right: 1px solid #333;
    border-bottom: 1px solid #333;
}

.payslip-card .employee-info .left {
    width: 50%;
    float: left;
    border-right: 1px solid #333;
}

.payslip-card .employee-info .right {
    width: 50%;
    float: left;
}

.payslip-card .employee-info .left table {
    width: 100%;
}

.payslip-card .employee-info .right table {
    width: 100%;
}

.payslip-card .employee-info .right table tr .head {
    font-weight: bolder;
}

.payslip-card .employee-info .left table tr td {
    font-size: 0.7em;
}

.payslip-card .employee-info .right table tr td {
    font-size: 0.7em;
}

.payslip-card .employee-info .right table tr .info {
    width: 40%;
}

.payslip-card .employee-info .right table tr .value {
    width: 60%;
}

.payslip-card .employee-info .left table tr .info {
    width: 30%;
}

.payslip-card .employee-info .left table tr .value {
    width: 70%;
}

.overall {
    font-size: 1.5em !important;
}

.payslip-card {
    border-bottom: 1px solid #333;
}

.payslip-card .payroll-summary {
    width: 100%;
    float: left;
}

.payslip-card .payroll-summary .right {
    float: right;
    font-size: 0.8em;
}

.payslip-card .payroll-summary p {
    font-size: 0.8em;
}

.payslip-card .payroll-summary p b .val {
    border-bottom: 1px solid #333;
    width:
}

.payslip-card .summary-info {
    width: 100%;
    float: left;
    border-right: 1px solid #333;
    border-left: 1px solid #333;
    border-bottom: 1px solid #333;
}

.payslip-card .summary-info .card {
    height: 9em;
    padding: 0.2%;
    width: 25%;
    float: left;
    background-color: xred;
    border-right: 1px solid #333;
}

.payslip-card .summary-info .card .title {
    font-weight: bolder;
}

.payslip-card .summary-info .card .data {
    width: 100%;
    float: left;
}

.payslip-card .summary-info .card .data .meta {
    width: 50%;
    float: left;
    text-align: left;
    font-size: 0.7em;
    font-weight: bolder;
}

.payslip-card .summary-info .card .data .value {
    width: 50%;
    float: left;
    text-align: right;
    font-size: 0.7em;
}

.payslip-card .summary-info .card .total {
    width: 100%;
    float: left;
    border-top: 1px solid #333;
}

.payslip-card .summary-info .card .total .meta {
    width: 50%;
    float: left;
    text-align: left;
    font-size: 0.7em;
    font-weight: bolder;
}

.payslip-card .summary-info .card .total .value {
    width: 50%;
    float: left;
    text-align: right;
    font-size: 0.8em;
    color: red;
}

@media print {
    .c-navbar {
        display: none;
    }
}
</style>
<!-- up to this-->
@endsection