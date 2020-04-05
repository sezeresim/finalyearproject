@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="row ">
            @foreach($questions as $question)
                <div class="col-md-4">

                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        {{--TODO--}}
                        <div class="font-weight-bold">
                            {{ $question->title }}
                        </div>
                        <hr style="border-bottom: 2px;border-color: black">
                        <div  class="text text-dark">
                            {{ $question->purpose }}
                        </div>
                        <br>
                        <div class="align-items-center">
                            <button type="button" class="btn btn-outline" id="like_button" value="{{$question->id}}">
                                <i class="text text-danger fas fa-thumbs-up fa-2x"></i>
                                <span id="like_count">{{$question->like_count}}</span>
                            </button>
                            <button type="button" class="btn btn-outline" id="dislike_button" value="{{$question->id}}">
                                <i class="text text-danger fas fa-thumbs-down fa-2x"></i>
                                <span id="dislike_count">{{$question->like_count}}</span>
                            </button>
                            <a class="btn btn-success" href="/surveys/{{$question->id}}-{{ Str::slug($question->title) }}">Teste Git</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
        {{--<div>
            <select class="form-control" id="group" name="group">
                @foreach($users as $user)
                    <option class="list-group-item col-md-3" value="{{ $user->id }}">{{$user->email}}</option>
                @endforeach
            </select>
        </div>
        <div id="example"></div>--}}
    </div>
@endsection

@section('script')
    <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#like_button").click(function(e){
            e.preventDefault();
            let id=$("#like_button").val();
            console.log(id);
            $.ajax({
                type:'POST',
                url:'/'+id,
                data:{id:id},
                success:function(data){
                    $("#like_count").text(data.success);
                }
            });

        });
    </script>
    @endsection

