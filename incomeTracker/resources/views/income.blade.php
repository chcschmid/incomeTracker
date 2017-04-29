@extends('master')
@section('content')

<div class="row" style="padding-top: 50px;">
	<div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <!-- <div class="panel-heading">Employees</div> -->
            <div class="panel-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Date Received</th>
                            <th>Individual</th>
                            <th>Amount</th>
                            <th>Employer</th>
                            <th>Tithing</th>
                            <th>Tithing Paid</th>
                            <th>Savings</th>
                            <th>Savings Transferred</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($paychecks as $paycheck)
                        <tr class="clickable">
                            <td>{{$paycheck->dateReceived}}</td>
                            <td>{{$paycheck->individual}}</td>
                            <td>{{$paycheck->amount}}</td>
                            <td>{{$paycheck->employer}}</td>
                            <td>{{$paycheck->tithing}}</td>
                            <td>{{$paycheck->savings}}</td>
                            <td>{{$paycheck->tithingPaid}}</td>
                            <td>{{$paycheck->savingsTransferred}}</td>
                            <td>
                                <div class="editbutton">
                                    <a href="#" class="btn btn-primary btn-outline btn-xs theeditbutton">Edit</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
	</div>
</div>

@stop