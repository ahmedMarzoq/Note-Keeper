@extends('layout.app')

@section('navButton')
<button class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#exampleModal">New Note</button>
@endsection
@section('content')
          
        <br><h1>Notes</h1>
        <div class="row">  
        @if(count($posts) > 0)
          @foreach($posts as $post)
          <div class="col-sm-4">
              <div class="card" >
                <div class="card-header text-white bg-secondary">
                  {{$post->title}}
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>{{$post->body}}</p>
                    <footer class="blockquote-footer">{{$post->created_at}}</footer>
                  </blockquote>
                </div>
              </div>
              <br>
            </div>
          @endforeach
          
        @else
          <div class="alert alert-danger col-sm-12 text-center" role="alert">
            There is no any note
          </div>
        @endif
        </div>
        <!-- Modal -->
        <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header text-white bg-info ">
                <h5 class="modal-title " id="exampleModalLabel" >New Note </h5>
              </div>
              <form method="POST" action="{{route('store')}}">
                <div class="modal-body">  
                     @csrf
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" required>
                        @if($errors->has('title'))
                          <span class="help-block text-danger">
                            {{$errors->first('title')}}
                          </span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label>Note</label>
                        <textarea class="form-control" name="body" rows="3" required></textarea>
                        @if($errors->has('body'))
                          <span class="help-block text-danger">
                            {{$errors->first('body')}}
                          </span>
                        @endif
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Add new Note</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
@endsection