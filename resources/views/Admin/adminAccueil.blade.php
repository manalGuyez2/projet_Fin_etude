@extends('Admin.layoutAdmin')
@section('link')
<link rel="stylesheet" href="css/Admin/style.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
@section('layoutADMIN')


  <div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers">1,504</div>
            <div class="cardName">étudiants sauvés</div>
        </div>


        
        <div class="iconBx">
            <ion-icon name="school-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">80</div>
            <div class="cardName">Enseignants sauvés</div>
        </div>

        <div class="iconBx">
            <ion-icon name="people-outline"></ion-icon>
        </div>
    </div>
<!--
    <div class="card">
        <div>
            <div class="numbers">284</div>
            <div class="cardName">Comments</div>
        </div>

        <div class="iconBx">
            <ion-icon name="chatbubbles-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">$7,842</div>
            <div class="cardName">Earning</div>
        </div>

        <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
        </div>
    </div>-->
</div>




@endsection