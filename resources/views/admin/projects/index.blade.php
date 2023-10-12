@extends('layouts.app')

@section("content")
    <div class="container mt-5 index-container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Language</th>
                            <th>Image</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>                    
                    </thead>
                    <tbody>
                        @foreach ($projects as $specificProject )  
                        <tr>
                            {{-- TITOLO --}}
                            <td>{{$specificProject->title}}</td>

                            {{-- TIPO PROGETTO --}}
                            <td>{{$specificProject->type->type ?? ""}}</td>

                            {{-- LINGUAGGIO --}}
                            <td>{{implode(",", $specificProject->language)}}</td>

                            {{-- IMMAGINE --}}
                            <td><img src={{ asset('/storage/' . $specificProject->thumb) }} class="img-thumbnail" style="width: 100px"></td>

                            {{-- LINK --}}
                            <td>{{$specificProject->link}}</td>

                            {{-- BOTTONE DETTAGLI --}}
                            <td>
                                <a href="{{route("admin.projects.show", $specificProject->slug )}}" class="btn btn-primary btn-lg" type="button">DETAIL</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div>

            <div class="container text-center mt-5">
                <a href="{{route("admin.projects.create")}}" class="btn btn-primary btn-lg" type="button">ADD PROJECT</a>
            </div>
            
        </div>
    </div>
@endsection