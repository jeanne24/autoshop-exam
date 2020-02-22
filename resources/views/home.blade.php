@extends('layout.app')

@section('title','Home Page')
@section('content')
@isset($result)
<h3 style="text-align:center;">Your request is being processed</h3>
@endisset
    <h2 class="page-name">New Paint Job</h2>
    <figure class="cars">
        <img id="currentCarColor" src="/img/Default Car.png">
        <img src="/img/Shape 1.png" style="margin-bottom: 60px;">
        <img id="targetCarColor" src="/img/Default Car.png">
    </figure>
    <section class="car-details">
        <strong>Car Details</strong>
        <form method="POST" action="/">
        @isset($error)
        {{$error}}
        @endisset
        @csrf
            <div class="form-input"><label>Plate No.</label><input type="text" name="platenumber"></div>
            <div class="form-input"><label>Current Color</label><select type="text" name="currentColor" id="currentColor">
            <option value="-">-</option>
            <option value="Red">Red</option>
            <option value="Green">Green</option>
            <option value="Blue">Blue</option>
            </select></div>
            <div class="form-input"><label>Target Color</label><select type="text" name="targetColor" id="targetColor">
            <option value="-">-</option>
            <option value="Red">Red</option>
            <option value="Green">Green</option>
            <option value="Blue">Blue</option>
            </select></div>
            <button type="submit">Submit</button>
        </form>
    </section>
    <script>
    let current_color=document.getElementById('currentColor');
    let target_color=document.getElementById('targetColor');

    current_color.addEventListener("change",currentColor);
    target_color.addEventListener("change",targetColor);

    function currentColor(e){
        console.log(e.target.value)
        let imgCurrentCar = document.getElementById('currentCarColor')
        if(e.target.value=='-'){
            imgCurrentCar.setAttribute("src","/img/Default Car.png")
            return;
        }else{
            imgCurrentCar.setAttribute("src","/img/"+e.target.value+" Car.png")
        }

    }
    function targetColor(e){
        console.log(e.target.value)
        let imgTargetCar = document.getElementById('targetCarColor')
        if(e.target.value=='-'){
            imgTargetCar.setAttribute("src","/img/Default Car.png")
            return;
        }else{
            imgTargetCar.setAttribute("src","/img/"+e.target.value+" Car.png")
        }
    }
    </script>
    @endsection