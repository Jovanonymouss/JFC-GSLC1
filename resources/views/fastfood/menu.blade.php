@include('layouts.nav')
@extends('reusable.template')

    @for($i=0;$i<count($fastfood);$i++)
        <div class="d-flex justify-content-around img-rounded" style="">
            <div class="card" style="margin-top: 50px; width: 20rem; box-shadow: 0 2px 20px gray;">
                <div>
                    <img class="card-img-top rounded mx-auto d-block" style="margin:20px; width:200px" src={{ $photo[$i] }} alt="Card image cap">
                </div>
            <div class="card-body">
                <h5 class="card-title justify-content-center" style="text-align:center">{{ $fastfood[$i] }}</h5>
                <p class="card-text" style="text-align:center">{{ $description[$i] }}</p>
                <a href="https://www.google.com" class="btn btn-primary d-flex justify-content-center" style="margin-bottom: 15px; text-align:center; align-items:center">Order now</a>
                <h5 class="card-text" style="text-align:center"> Stock : {{ $stocks[$i] }}</h5>
                @if($stocks[$i]==0)
                    <div class="alert alert-danger d-inline-bock" style="text-align:center">
                        Not Ready
                    </div>
                @else
                    <div class="alert alert-success d-inline-bock" style="text-align:center">
                        Ready
                    </div>
                @endif
            </div>
        </div>
    @endfor
</div>
</div>
@endsection