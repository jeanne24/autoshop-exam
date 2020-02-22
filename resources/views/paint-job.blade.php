@extends('layout.app')

@section('title','Paint Job')
@section('content')
                <h2 class="page-name">Paint Jobs</h2>
                <div class="content">
                <strong>Paint Jobs in Progress</strong>
                <table style="width:100%">
                    <tr>
                        <th>Plate No.</th>
                        <th>Current Color</th>
                        <th>Target Color</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                        <td>50</td>
                    </tr>
                    </table>
                <strong>Paint Queue</strong>
                <table style="width:100%">
                    <tr>
                        <th>Plate No.</th>
                        <th>Current Color</th>
                        <th>Target Color</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                    </table>
                </div>
                <div class="side-content " id="shop-performance">
                <table style="width:85%">
                    <tr>
                        <th colspan="2">SHOP PERFORMANCE</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                    </tr>
                    </table>
                    </div>

    @endsection