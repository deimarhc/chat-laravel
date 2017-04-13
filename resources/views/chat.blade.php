@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            Chat
            <span class="badge pull-right">@{{ usersInRoom.length }}</span>
          </div>
            <chat-log :messages="messages"></chat-log>
            <chat-composer v-on:messagesent="addMessage"></chat-composer>
          </div>
        </div>
        <div class="col-md-2">
          <div class="panel panel-default">
            <div class="panel-heading">
              Users
            </div>
            <chat-users-block :users="usersInRoom"></chat-users-block>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection
