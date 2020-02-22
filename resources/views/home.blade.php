@extends('layout.app')

@section('title','Home Page')
@section('content')
    <h2 class="page-name">New Paint Job</h2>
    <figure class="cars">
        <img id="currentCarColor" src="/img/Default Car.png">
        <img src="/img/Shape 1.png" style="margin-bottom: 60px;">
        <img id="targetCarColor" src="/img/Default Car.png">
    </figure>
    <section class="car-details">
        <strong>Car Details</strong>
        <form method="POST">
        @csrf
            <div class="form-input"><label>Plate No.</label><input type="text"></div>
            <div class="form-input"><label>Current Color</label><select type="text" id="currentColor">
            <option value="Red">-</option>
            <option value="Red">Red</option>
            <option value="Green">Green</option>
            <option value="Blue">Blue</option>
            </select></div>
            <div class="form-input"><label>Target Color</label><select type="text" id="targetColor">
            <option value="Red">-</option>
            <option value="Red">Red</option>
            <option value="Green">Green</option>
            <option value="Blue">Blue</option>
            </select></div>
            <button>Submit</button>
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
        imgCurrentCar.setAttribute("src","/img/"+e.target.value+" Car.png")

    }
    function targetColor(e){
        console.log(e.target.value)
        let imgTargetCar = document.getElementById('targetCarColor')
        imgTargetCar.setAttribute("src","/img/"+e.target.value+" Car.png")
    }
    </script>
    @endsection