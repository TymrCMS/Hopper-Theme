@extends('layouts.app')

@section('content')
	<div class="box box-solid">

		<div class="box-header with-border">
			<h3 class="box-title">Friend Finder</h3>
		</div>

		<div class="box-body box-profile">

		<h3>UnAssociated</h3>
		<hr>

        <table class="table">

            @foreach ($users as $person)
                <tr>
                    <td>
                        {{$person->id}} 
                    </td>                   
                    <td>
                        {!! Gravatar($person->email,['size'=>25,'class'=>"img-responsive img-circle", 'alt'=>'User profile picture']) !!}
                    </td>
                    <td>
                        <a href="{{route('users.profile',$person->username)}}">{{$person->profile->display_name}}</a>
                    </td>
                    <td>
                        <span class="pull-right">
                            <a class="btn btn-flat bg-aqua btn-xs" href="{{route('friends.add',$person->username)}}">Add</a>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
<br>
    <br>
    <br>
    <hr>
    <h3>Friend Request Sent</h3>


        <table class="table">

            @foreach ($pending as $puser)
                <tr>
                    <td>
                        {{$puser->user()->id}} 
                    </td>
                    <td>
                        {!! Gravatar($puser->user()->email,['size'=>25,'class'=>"img-responsive img-circle", 'alt'=>'User profile picture']) !!}
                    </td>
                    <td>
                        <a href="{{route('users.profile',$puser->user()->username)}}">{{$puser->user()->profile->display_name}}</a>
                    </td>
                    <td>
                            <span class="pull-right">
                                <a class="btn btn-flat bg-red btn-xs" href="{{route('friends.remove',$puser->user()->username)}}">Remove</a>
                            </span>
                    </td>
                </tr>
            @endforeach

        </table>    


    <h3>Friends</h3>
    <br>
    <br>
    <br>
    <hr>

        <table class="table">
            @foreach ($friends as $fuser)
                <tr>
                    <td>
                        {{$fuser->user()->id}} 
                    </td>
                    <td>
                        {!! Gravatar($fuser->user()->email,['size'=>25,'class'=>"img-responsive img-circle", 'alt'=>'User profile picture']) !!}
                    </td>
                    <td>
                        <a href="{{route('users.profile',$fuser->user()->username)}}">{{$fuser->user()->profile->display_name}}</a>
                    </td>
                    <td>
                        <span class="pull-right">
                            <a class="btn btn-flat bg-red btn-xs" href="{{route('friends.remove',$fuser->user()->username)}}">Remove</a>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>    

    <br>
    <br>
    <br>
    <hr>
    <h3>Friend Request Received</h3>

        <table class="table">

            @foreach ($requesting as $puser)
                <tr>
                    <td>
                        {{$puser->user()->id}} 
                    </td>
                    <td>
                        {!! Gravatar($puser->user()->email,['size'=>25,'class'=>"img-responsive img-circle", 'alt'=>'User profile picture']) !!}
                    </td>
                    <td>
                        <a href="{{route('users.profile',$puser->user()->username)}}">{{$puser->user()->profile->display_name}}</a>
                    </td>
                    <td>
                        <span class="pull-right">
                            <a class="btn btn-flat bg-aqua btn-xs" href="{{route('friends.confirm',$puser->user()->username)}}">Confirm</a>
                            <a class="btn btn-flat bg-red btn-xs" href="{{route('friends.remove',$puser->user()->username)}}">Remove</a>
                        </span>
                    </td>
                </tr>
            @endforeach

        </table>    

</div>
</div>

	
@endsection