@extends('layout.app')

@section('title','Paint Job')
@section('content')
                <h2 class="page-name">Paint Jobs</h2>
                <div class="content d-inline-block"> 
                <strong>Paint Jobs in Progress</strong>
                <table style="width:100%">
                <thead>
                    <tr>
                        <th>Plate No.</th>
                        <th>Current Color</th>
                        <th>Target Color</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="ongoing">
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
                    </tbody>
                    </table>
                <strong>Paint Queue</strong>
                <table style="width:100%">
                <thead>
                    <tr>
                        <th>Plate No.</th>
                        <th>Current Color</th>
                        <th>Target Color</th>
                    </tr>
                    </thead>
                    <tbody id="queued">
                    @foreach($jobs as $job)
                        @if($job->status==1)
                        <tr>
                            <td>{{$job->plate_number}}</td>
                            <td>{{$job->current_color}}</td>
                            <td>{{$job->target_color}}</td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="side-content " id="shop-performance">
                <table style="width:85%; border:0px ;">
                    <tr>
                        <th colspan="2">SHOP PERFORMANCE</th>
                    </tr>
                    <tbody>
                    <tr>
                        <td>Total</td>
                        <td id="total">{{$total}}</td>
                    </tr>
                    <tr>
                        <td>Breakdown:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Blue</td>
                        <td id="blue">{{$blue}}</td>
                    </tr>
                    <tr>
                        <td>Red</td>
                        <td id="red">{{$red}}</td>
                    </tr>
                    <tr>
                        <td>Green</td>
                        <td id="green">{{$green}}</td>
                    </tr>
                    </tbody>
                    </table>
                    </div>
                    <script>
                        function getReports() {
                            $.ajax({
                                type:'GET',
                                url:'/performance-report',
                                data:'_token = <?php echo csrf_token() ?>',
                                success:function(data) {
                                    console.log(data);
                                    $('#total').html(data.total);
                                    $('#red').html(data.red);
                                    $('#green').html(data.green);
                                    $('#blue').html(data.blue);
                                }
                            });
                        }
                        function getJobs() {
                            $.ajax({
                                type:'GET',
                                url:'/jobs-report',
                                data:'_token = <?php echo csrf_token() ?>',
                                success:function(data) {
                                    queuedData = data.queued;
                                    ongoingJobs = data.ongoing;
                                    $('#queued').empty();
                                    queuedData.forEach(function (item,index){
                                        $('#queued').append('<tr>');
                                        $('#queued').append('<td>'+item.plate_number+'</td>')
                                        $('#queued').append('<td>'+item.current_color+'</td>')
                                        $('#queued').append('<td>'+item.target_color+'</td>')
                                        $('#queued').append('</tr>');
                                    })$('#ongoing').empty();
                                    queuedData.forEach(function (item,index){
                                        $('#ongoing').append('<tr>');
                                        $('#ongoing').append('<td>'+item.plate_number+'</td>')
                                        $('#ongoing').append('<td>'+item.current_color+'</td>')
                                        $('#ongoing').append('<td>'+item.target_color+'</td>')
                                        $('#ongoing').append('<td><a href="/done/'+item.id+'">Mark as Complete</a></td>')
                                        $('#ongoing').append('</tr>');
                                    })
                                }
                            });
                        }
                        window.setInterval(function(){
                            getReports()
                            getJobs()
                        }, 5000);
                    </script>

    @endsection