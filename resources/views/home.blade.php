@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-5">Ez a hírlevél portál első fázisa</h2>
    <div class="row">
        <div class="col-sm-12 col-md-7 col-lg-8">
            <div class="">
            <h5>Hot News</h5>
            <span>dátum</span> <span>Egyenlőre egy adatot lehet kinyerni az adatbázisból és mindegyik link arra vezet át</span>
            <h1>Lorem ipsum <span style="color: red;">dolor</span> sit.</h1>
            <img src="#" alt="Not loading">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Atque pariatur libero consequatur voluptatum! Distinctio labore ipsum numquam accusantium? 
                Cupiditate veritatis doloremque fugit, perferendis consequuntur delectus?
            </p>
            <div class="">
                <a href="{{url('newspage')}}">Mutasd a hírt</a>
            </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-5 col-lg-4">
                {{-- 
                    @if ($hirlevelData)
                    <a href="{{ url('newspage') }}">
                        <h4>{{ $hirlevelData->textname }}</h4>
                    </a>
                
                <p>{{$hirlevelData->paragraph}}</p>    
                @endif
                
                    @foreach ($hirlevelData as $data)
                    <div class="proba mt-4">
                        <a href="/newspage">
                            <h4>{{$data->textname}}</h4>
                        </a>
                        <p>{{$data->paragraph}}</p>
                    </div>
                    
                @endforeach
                --}}
                    
            @if( $hirlevelData)
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$hirlevelData->textname}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Jövőben itt lesz a dátum</h6>
                  <p class="card-text">{{$hirlevelData->paragraph}}</p>
                  <div class="d-flex justify-content-center">
                    <a href="{{url('newspage')}}" class="card-link">Mutasd a hírt</a>
                  </div>
                  
                </div>
            </div>
            @endif
            <div class="card mt-3">
                <div class="card-body">
                  <h5 class="card-title">{{$hirlevelData->textname}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Jövőben itt lesz a dátum</h6>
                  <p class="card-text">{{$hirlevelData->paragraph}}</p>
                  <div class="d-flex justify-content-center">
                    <a href="{{url('newspage')}}" class="card-link">Mutasd a hírt</a>
                  </div>
                  
                </div>
            </div>
            <div class="card card mt-3">
                <div class="card-body">
                  <h5 class="card-title">{{$hirlevelData->textname}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Jövőben itt lesz a dátum</h6>
                  <p class="card-text">{{$hirlevelData->paragraph}}</p>
                  <div class="d-flex justify-content-center">
                    <a href="{{url('newspage')}}" class="card-link">Mutasd a hírt</a>
                  </div>
                  
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection