@extends('layout.app')

@section('title','Paint Job')
@section('content')
                <h2 class="page-name">Paint Jobs</h2>
                <div class="content d-inline-block"> 
                <strong>Paint Jobs in Progress</strong>
                <table style="width:100%">
                    <tr>
                        <th>Plate No.</th>
                        <th>Current Color</th>
                        <th>Target Color</th>
                        <th>Action</th>
                    </tr>
                    @foreach($jobs as $job)
                        @if($job->status==2)
                        <tr>
                            <td>{{$job->plate_number}}</td>
                            <td>{{$job->current_color}}</td>
                            <td>{{$job->target_color}}</td>
                            <td><a href="/done/{{$job->id}}">Mark as Complete</a></td>
                        </tr>
                        @endif
                    @endforeach
                    </table>
                <strong>Paint Queue</strong>
                <table style="width:100%">
                    <tr>
                        <th>Plate No.</th>
                        <th>Current Color</th>
                        <th>Target Color</th>
                    </tr>
                    @foreach($jobs as $job)
                        @if($job->status==1)
                        <tr>
                            <td>{{$job->plate_number}}</td>
                            <td>{{$job->current_color}}</td>
                            <td>{{$job->target_color}}</td>
                        </tr>
                        @endif
                    @endforeach
                    
                    </table>
                </div>
                <div class="side-content " id="shop-performance">
                <table style="width:85%; border:0px ;">
                    <tr>
                        <th colspan="2">SHOP PERFORMANCE</th>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>{{$total}}</td>
                    </tr>
                    <tr>
                        <td>Breakdown</td>
                    </tr>
                    <tr>
                        <td>Blue</td>
                        <td>{{$blue}}</td>
                    </tr>
                    <tr>
                        <td>Red</td>
                        <td>{{$red}}</td>
                    </tr>
                    <tr>
                        <td>Green</td>
                        <td>{{$green}}</td>
                    </tr>
                    </table>
                    </div>

    @endsection